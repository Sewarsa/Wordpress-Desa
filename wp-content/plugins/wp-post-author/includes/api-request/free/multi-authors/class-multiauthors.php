<?php
if(!class_exists('Awpa_Multiauthor_Rest_Controller')){
    class Awpa_Multiauthor_Rest_Controller{

        public function __construct() {
			$this->namespace = 'aft-wp-post-author/v1';
		}

        public function awpa_multiahuthors_register_routes() {
            register_rest_route(
                $this->namespace,
                '/list-guest-authors' ,
                array(
                    array(
                        'methods'             => WP_REST_Server::READABLE,
                        'callback'            => array( $this, 'awpa_list_guest_authors' ),
                        'permission_callback' => array( $this, 'awpa_permission_check' ),
                        
                    ),
                )
            );

            register_rest_route(
                $this->namespace,
                '/new-guest-author' ,
                array(
                    array(
                        'methods'             => WP_REST_Server::EDITABLE,
                        'callback'            => array( $this, 'awpa_add_new_guest_author' ),
                        'permission_callback' => array( $this, 'awpa_permission_check' ),
                        
                    ),
                )
            );

            register_rest_route(
                $this->namespace,
                '/status-change-membership-plan' ,
                array(
                    array(
                        'methods'             => WP_REST_Server::EDITABLE,
                        'callback'            => array( $this, 'awpa_new_guest_link_to_user' ),
                        'permission_callback' => array( $this, 'awpa_permission_check' ),
                        
                    ),
                )
            );

            register_rest_route(
                $this->namespace,
                '/delete-guest-author' ,
                array(
                    array(
                        'methods'             => WP_REST_Server::EDITABLE,
                        'callback'            => array( $this, 'awpa_delete_guest_author' ),
                        'permission_callback' => array( $this, 'awpa_permission_check' ),
                        
                    ),
                )
            );

            register_rest_route(
                $this->namespace,
                '/get-users' ,
                array(
                    array(
                        'methods'             => WP_REST_Server::READABLE,
                        'callback'            => array( $this, 'awpa_get_user' ),
                        'permission_callback' => array( $this, 'awpa_permission_check' ),
                        
                    ),
                )
            );
        }    


        public function awpa_permission_check( $request ) {
			return current_user_can( 'manage_options' );
		}

        public function awpa_list_guest_authors(\WP_REST_Request $request)
        {
            $authors_per_page = sanitize_text_field($request['per_page']);
            $paged = sanitize_text_field($request['page']);
            $orderby = sanitize_text_field($request['order_by']);
            $order = sanitize_text_field($request['order']);
            $search_term = sanitize_text_field($request['search']);
            $page = isset($paged) ? abs((int) $paged) : 1;
            $offset = (int) ($page * $authors_per_page) - $authors_per_page;
            global $wpdb;
            $table_name = $wpdb->prefix . "wpa_guest_authors";
            if ($search_term) {
                $total_query = "SELECT COUNT(*) FROM $table_name 
                    WHERE 1=1 AND (user_email LIKE '%$search_term%' OR
                    display_name LIKE '%$search_term%' OR
                    user_nicename LIKE '%$search_term%' OR
                    first_name LIKE '%$search_term%' OR
                    last_name LIKE '%$search_term%' OR
                    user_meta LIKE '%$search_term%' OR
                    website LIKE '%$search_term%');";
                $query = "SELECT * FROM $table_name 
                    WHERE 1=1 AND (user_email LIKE '%$search_term%' OR
                    display_name LIKE '%$search_term%' OR
                    user_nicename LIKE '%$search_term%' OR
                    first_name LIKE '%$search_term%' OR
                    last_name LIKE '%$search_term%' OR
                    user_meta LIKE '%$search_term%' OR
                    website LIKE '%$search_term%')
                    ORDER BY $orderby $order LIMIT $offset, $authors_per_page;";
            } else {
                $total_query = "SELECT COUNT(*) FROM $table_name";
                $query = "SELECT * FROM $table_name ORDER BY $orderby $order LIMIT $offset, $authors_per_page;";
            }
            $response['guest_authors_count'] = $wpdb->get_var($total_query);
            $guest_authors = $wpdb->get_results($query, OBJECT);
            foreach ($guest_authors as $key => $guest_author) {
                $guest_authors[$key]->human_readable = human_time_diff(strtotime($guest_author->user_registered));
                if ($guest_author->linked_user_id) {
                    $user = get_user_by('ID', $guest_author->linked_user_id);
                    $guest_authors[$key]->linked_user = $user ? $user->display_name : __('Guest', 'wp-post-author');
                }
            }
            $response['guest_authors'] = $guest_authors;
            $response['wp_upload_dir'] = wp_upload_dir();
        
            return $response;
        }

        public function awpa_add_new_guest_author(\WP_REST_Request $request){
            $params = $request->get_params();
            $guest_author = json_decode($params['guest_author'], true);
        
            $view = $request['view'];
            $wpaMultiAuthor = new WPAMultiAuthors();
            $guest = $wpaMultiAuthor->awpa_ma_get_guest_by_email($guest_author['user_email']);
        
        
            if ($view == 'new') {
                $require_input = array(
                    'user_email', 'display_name', 'first_name', 'last_name',
                    'is_active', 'linked_user_id', 'convert_guest_to_author'
                );
                $error = false;
                $error_message = array();
                foreach ($require_input as $key => $input) {
                    if (!array_key_exists($input, $guest_author) || $guest_author[$input] === "") {
                        $error = true;
                        $string = str_replace('_', ' ', $input);
                        $string = strtolower($string);
                        $string = ucfirst($string);
                        $error_message[] = array(
                            'key' => $input,
                            'value' => sprintf( __('%s is required', 'wp-post-author'), $string)
                        );
                    }
                    if ($input == 'user_email') {
                        if (!is_email($guest_author['user_email'])) {
                            $error = true;
                            $error_message[] = array(
                                'key' => $input,
                                'value' => __('Not valid email', 'wp-post-author')
                            );
                        }
                    }
                }
                $user_email_exists = email_exists($guest_author['user_email']);
                // return $user_email_exists;
                if ($user_email_exists) {
                    $error = true;
                    $error_message[] = array(
                        'key' => 'user_email',
                        'value' => __('Email registered, please use different email', 'wp-post-author'),
                    );
                }
        
                $guest_email_exists  = $wpaMultiAuthor->awpa_ma_get_guest_by_email($guest_author['user_email']);
        
                if ($guest_email_exists) {
                    $error = true;
                    $error_message[] = array(
                        'key' => 'user_email',
                        'value' => __('Guest email registered, please use different email', 'wp-post-author'),
                    );
                }
                //check if meta has valid URL if inputted
                foreach ($guest_author['user_meta'] as $key => $value) {
                    if ($value || $value == '0') {
                        if (!filter_var($value, FILTER_VALIDATE_URL)) {
                            $error = true;
                            $error_message[] = array(
                                'key' => $key,
                                'value' => __('Not valid URL', 'wp-post-author')
                            );
                        }
                    }
                }
                if ($error) {
                    return array(
                        'message' => __('Input missing', 'wp-post-author'),
                        'data' => $error_message,
                        'status'  => 424
                    );
                }
                $user_type  = $guest_author['user_type'];
        
                $id = array_key_exists('id', $guest_author) ? $guest_author['id'] : 0;
                global $wpdb;
                $table_name = $wpdb->prefix . "wpa_guest_authors";
                $guest = $wpaMultiAuthor->get_guest_by_id($id);
                $image_name = '';
        
                $linked_user_id = array_key_exists('linked_user_id', $guest_author) ?  intval($guest_author['linked_user_id']) : false;
                $is_guest_author_linked = $wpaMultiAuthor->awpa_is_guest_linked_with_author($linked_user_id);
                if ($is_guest_author_linked) {
                    return array(
                        'message' => __('Author linked with other guest!', 'wp-post-author'),
                        'data' => array(),
                        'status'  => 424
                    );
                }
                if (false == $guest_author['convert_guest_to_author']) {
                    $email_exists  = $wpaMultiAuthor->awpa_ma_get_guest_by_email($guest_author['user_email']);
                    if (!$email_exists && $user_type == 'guest') {
                       
                        $nicename  = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $guest_author['display_name'])));
                        $author_exists = $wpaMultiAuthor->awap_ma_get_guest_by_nicename($nicename);
                        $nicename = $author_exists ? $nicename . "1" : $nicename;
                        if (isset($_FILES['image']) && $_FILES['image'] && $_FILES['image']['size'] != 0) {
                            $file_name = $_FILES['image']['name'];
                            $path_parts = pathinfo($file_name);
                            $image_name = strtotime('now') . "." . $path_parts['extension'];
                            $_FILES['image']['name'] = $image_name;
                        }
                        $this->awpa_author_register_user($guest_author, $image_name, $nicename);
                        return array(
                            'message' => __('New guest created', 'wp-post-author'),
                            'status'  => 200
                        );
                    } else if (!$email_exists && $user_type == 'user') {
                        $nicename  = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $guest_author['display_name'])));
                        $author_exists = $wpaMultiAuthor->awap_ma_get_guest_by_nicename($nicename);
                        $nicename = $author_exists ? $nicename . "1" : $nicename;
                        $user_id = wp_create_user(
                            sanitize_text_field($nicename),
                            wp_generate_password(8),
                            sanitize_text_field($email_exists)
                        );
                        if ($user_id) {
                            $user = new WP_User($user_id);
                            $user_role  = $guest_author['user_role'] ? $guest_author['user_role'] : 'author';
                            $user->set_role($user_role);
                        }
                        // update user meta for post author awpa social meta
                        return array(
                            'message' => __('New user created', 'wp-post-author'),
                            'status'  => 200
                        );
                    } else {
                        return array(
                            'message' => __('User guest email already registered, please use different email!', 'wp-post-author'),
                            'data' => array(),
                            'status'  => 424
                        );
                    }
                }
            }
        
            if ('edit' == $view) {
                $require_input = array(
                    'display_name', 'first_name', 'last_name', 'is_active',
                    'linked_user_id', 'convert_guest_to_author'
                );
                global $wpdb;
                $wpaMultiAuthor = new WPAMultiAuthors();
                $table_name = $wpdb->prefix . "wpa_guest_authors";
                $guest = $wpaMultiAuthor->get_guest_by_id($guest_author['id']);
                $error = false;
                $error_message = array();
                foreach ($require_input as $key => $input) {
                    if (!array_key_exists($input, $guest_author) || $guest_author[$input] === "") {
                        $error = true;
                        $string = str_replace('_', ' ', $input);
                        $string = strtolower($string);
                        $string = ucfirst($string);
                        $error_message[] = array(
                            'key' => $input,                    
                            'value' => sprintf( __('%s is required', 'wp-post-author'), $string)
                        );
                    }
                    if ($input == 'user_email') {
                        if (!is_email($guest_author['user_email'])) {
                            $error = true;
                            $error_message[] = array(
                                'key' => $input,
                                'value' => __('Not valid email', 'wp-post-author')
                            );
                        }
                    }
                }
                foreach ($guest_author['user_meta'] as $key => $value) {
                    if ($value || $value == '0') {
                        if (!filter_var($value, FILTER_VALIDATE_URL)) {
                            $error = true;
                            $error_message[] = array(
                                'key' => $key,
                                'value' => __('Not valid URL', 'wp-post-author')
                            );
                        }
                    }
                }
                if ($error) {
                    return array(
                        'message' => __('Input missing', 'wp-post-author'),
                        'data' => $error_message,
                        'status'  => 424
                    );
                }
                if (array_key_exists('unlink', $guest_author) && $guest_author['unlink'] == true) {
                    $result = $wpdb->update($table_name, array(
                        'is_linked' => false,
                        'linked_user_id' => null
                    ), array('id' => $guest_author['id']), array('%d', '%d'), array('%d'));
                    delete_user_meta(intval($guest_author['linked_user_id']), 'wpma_linked_guest');
                }
        
                $new_data = array(
                    'display_name' => array_key_exists('display_name', $guest_author) ? $guest_author['display_name'] : $guest->display_name,
                    'first_name' => array_key_exists('first_name', $guest_author) ? $guest_author['first_name'] : $guest->first_name,
                    'last_name' => array_key_exists('last_name', $guest_author) ? $guest_author['last_name'] : $guest->last_name,
                    'description' => array_key_exists('description', $guest_author) ? $guest_author['description'] : $guest->description,
                    'is_active' => array_key_exists('is_active', $guest_author) ? $guest_author['is_active'] : $guest->is_active,
                );
                $result = $wpdb->update($table_name, $new_data, array('id' => $guest_author['id']), array('%s', '%s', '%s', '%s', '%d'), array('%d'));
        
                if (array_key_exists('convert_guest', $guest_author) && $guest_author['convert_guest'] == 'guest_to_user') {
                    $user_email_exists = email_exists($guest_author['user_email']);
        
                    if ($user_email_exists) {
                        return array(
                            'message' => __('Current email address registered on User\'s, cannot be used. Try to create author manually and link it after then!', 'wp-post-author'),
                            'description' => '',
                            'data' => array(),
                            'status'  => 424
                        );
                    }
                    $user_id = wp_create_user($guest->user_nicename, wp_generate_password(8), $guest_author['user_email']);
                    if ($user_id) {
                        //send mail to new user author as notification
                        $user = new WP_User($user_id);
                        $user_role  = $guest_author['user_role'] ? $guest_author['user_role'] : 'author';
                        $user->set_role($user_role);
                        $result = $wpdb->update($table_name, array(
                            'is_linked' => true,
                            'linked_user_id' => $user_id,
                            'is_active' => false    //after creation of user, guest is disabled
                        ), array('id' => $guest_author['id']), array('%d', '%d', '%d'), array('%d'));
        
                        $user_keys = ['display_name', 'user_nicename'];
                        $meta_keys = ['description', 'first_name', 'last_name'];
                        $new_user_data = array();
                        foreach ($user_keys as $key => $user_key) {
                            if (array_key_exists($user_key, $guest)) {
                                $new_user_data[] = array($user_key => $guest->$user_key);
                                wp_update_user(array('ID' => $user_id, $user_key => sanitize_text_field($guest->$user_key)));
                            }
                        }
                        foreach ($meta_keys as $key => $meta_key) {
                            if (array_key_exists($meta_key, $guest)) {
                                $new_user_data[] = array($meta_key => $guest->$meta_key);
                                update_user_meta($user_id, $meta_key, sanitize_text_field($guest->$meta_key));
                            }
                        }
                        //get all post of guest-id with key wpma_author, loop posts, update each post's value with coverted author id
                        $this->change_post_meta_value($guest->id, $user_id);
                    }
                    update_user_meta($guest_author['linked_user_id'], 'wpma_linked_guest', intval($guest_author['id']));
        
                    //convert guest meta to user meta
                    foreach ($guest_author['user_meta'] as $key => $value) {
                        if ($value || $value == '0') {
                            if ($key == 'website') {
                                wp_update_user(array('ID' => $user_id, 'user_url' => sanitize_url($value)));
                            } else {
                                update_user_meta($user_id, 'awpa_contact_' . $key, sanitize_text_field($value));
                            }
                        }
                    }
                }
                if (
                    array_key_exists('linked_user_id', $guest_author) && $guest_author['linked_user_id'] != null &&
                    array_key_exists('convert_guest', $guest_author) && $guest_author['convert_guest'] == 'link_with_user' &&
                    array_key_exists('unlink', $guest_author) && $guest_author['unlink'] == false
                ) {
                    $is_guest_author_linked = $wpaMultiAuthor->awpa_is_guest_linked_with_author($guest_author['linked_user_id']);
                    if ($is_guest_author_linked && $guest_author['unlink'] == false && $guest_author['link_user']) {
                        return array(
                            'message' => __('Author linked with other guest!', 'wp-post-author'),
                            'data' => array(),
                            'status'  => 424
                        );
                    }
        
                    $result = $wpdb->update($table_name, array(
                        'is_linked' => true,
                        'linked_user_id' => $guest_author['linked_user_id']
                    ), array('id' => $guest_author['id']), array('%d', '%d'), array('%d'));
                    update_user_meta($guest_author['linked_user_id'], 'wpma_linked_guest', intval($guest_author['id']));
                }
        
                if (isset($guest_author['user_meta'])) {
                    $user_meta_data['user_meta'] = json_encode($guest_author['user_meta']);
                    $result = $wpdb->update($table_name, $user_meta_data, array('id' => $guest_author['id']), array('%s'), array('%d'));
                }
                
                return array(
                    'message' => $result ? __('Guest updated', 'wp-post-author')  : __('Error occured', 'wp-post-author'),
                    'status'  => 200
                );
            }
        }

        public function awpa_new_guest_link_to_user(\WP_REST_Request $request){
            $params = $request->get_params();
            $plan_id = absint(array_key_exists('plan_id', $params) ? $params['plan_id'] : 0);
            $status = sanitize_text_field($params['status']);
            global $wpdb;
            $table_name = $wpdb->prefix . "wpa_membership_plan";
            $dbpost = $wpdb->query($wpdb->prepare("UPDATE " . $table_name . " SET status = %d WHERE id = %d", $status, $plan_id));
            return $dbpost;
        }

        public function awpa_delete_guest_author(\WP_REST_Request $request) {
            $params = $request->get_params();
            $guest_id = absint(array_key_exists('guest_id', $params) ? $params['guest_id'] : 0);
            global $wpdb;
            $guest_authors = $wpdb->prefix . "wpa_guest_authors";
            $postmeta = $wpdb->prefix . "postmeta";
        
            $dbpost = $wpdb->query($wpdb->prepare("DELETE FROM " . $guest_authors . " WHERE id = %d", $guest_id));
            $wpdb->query($wpdb->prepare("DELETE FROM " . $postmeta . " WHERE  meta_value = %s", 'guest-' . $guest_id));
        
            return $dbpost;
        }

        public function awpa_get_user(){
            $args = array(
                // 'role__in' => array('author', 'contributor', 'editor', 'subscriber'),
                'role__in' => array('author', 'editor'),
                'fields' => array('ID', 'display_name', 'user_nicename', 'user_login'),
            );
            $response['users'] = get_users($args);
        
            return $response;
        }

        public function awpa_guest_avatar_upload_dir($dir){
            $awpadir = '/wpa-post-author/guest-avatar';
            $dir['path'] = $dir['basedir'] . $awpadir;
            $dir['url'] = $dir['baseurl'] . $awpadir;
            return $dir;
        }

        public function change_post_meta_value($guest_id, $user_id){
            global $wpdb;
            $table = $wpdb->prefix . "postmeta";
            $meta_value = 'guest-' . $guest_id;
            $query = "SELECT * FROM $table WHERE meta_key = 'wpma_author' AND meta_value = '$meta_value'";
            $results = $wpdb->get_results($query, OBJECT);
            //error_log(json_encode($results));
            foreach ($results as $key => $post_meta) {
                $wpdb->update(
                    $table,
                    array(
                        'meta_value' => $user_id
                    ),
                    array(
                        'meta_id' => $post_meta->meta_id,
                    )
                );
            }
        }
        public function awpa_author_register_user($guest_author, $image_name, $nicename, $user_id = null){
            global $wpdb;
           
            $table_name = $wpdb->prefix . "wpa_guest_authors";
            if ($user_id) {
                $guest_author['linked_user_id'] = sanitize_text_field($user_id);
            }
            $new_data = array(
                'user_email' => sanitize_email($guest_author['user_email']),
                'display_name' => sanitize_text_field($guest_author['display_name']),
                'user_nicename' =>  sanitize_text_field($nicename),
                'first_name' => sanitize_text_field($guest_author['first_name']),
                'last_name' => sanitize_text_field($guest_author['last_name']),
                'description' => $guest_author['description'] ? sanitize_text_field($guest_author['description']) : '',
                'user_registered' => gmdate('Y-m-d H:i:s', time()),
                'website' => '',
                'is_active' => $guest_author['is_active'] ? true : false,
                'user_meta' => $guest_author['user_meta'] ? sanitize_text_field(json_encode($guest_author['user_meta'])) : '',
                'is_linked' => intval($guest_author['linked_user_id']) ? true : false,
                'avatar_name' => $image_name ? $image_name : null,
                'linked_user_id' => intval($guest_author['linked_user_id']) ? intval($guest_author['linked_user_id']) : null,
            );
            $result = $wpdb->insert($table_name, $new_data, array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%d', '%s', '%d'));
            if ($result && $guest_author['user_email']) {
        
                $name =   $guest_author['display_name'] ?  $guest_author['display_name'] : __('Guest User', 'wp-post-author');
                do_action('awpa_send_user_registration_mail_notification', array(
                    'name' => $name,
                    'email' => $guest_author['user_email']
                ));
            }
            
        }
    }
}        