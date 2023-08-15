<?php

function aftc_import_navigation()
{


    $front_page_id = null;
    $blog_page_id = null;

    $front_page = get_page_by_title('Home');

    if ($front_page) {
        if (is_array($front_page)) {
            $first_page = array_shift($front_page);
            $front_page_id = $first_page->ID;
        } else {
            $front_page_id = $front_page->ID;
        }
    }

    $blog_page = get_page_by_title('Blog');

    if ($blog_page) {
        if (is_array($blog_page)) {
            $first_page = array_shift($blog_page);
            $blog_page_id = $first_page->ID;
        } else {
            $blog_page_id = $blog_page->ID;
        }
    }

    if ($front_page_id) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $front_page_id);
    }

    if($blog_page_id){
        update_option('page_for_posts', $blog_page_id);
    }


    $registered_menus = get_registered_nav_menus();
    $nav_menus = get_terms('nav_menu', array('hide_empty' => true));

    $menus = array();
    foreach ($nav_menus as $menu) {
        $menus[$menu->name] = $menu->term_id;
    }

    $new_menu = array();
    foreach ($registered_menus as $location => $description) {
        foreach ($menus as $key => $value) {
            if (strpos($key, 'Social') !== false && strpos($location, 'social') !== false) {
                $new_menu[$location] = $value;
            } elseif (strpos($key, 'Social') === false && strpos($location, 'social') === false) {
                $new_menu[$location] = $value;
            }
        }
    }
    set_theme_mod('nav_menu_locations', $new_menu);
}

add_action('af-companion/after_import', 'aftc_import_navigation');

add_filter('af-companion/import_files', 'aftc_get_demo_data_from_gitlab');

if (!function_exists('aftc_get_demo_data_from_gitlab')) :
    function aftc_get_demo_data_from_gitlab() {

        $demo_file_url = "https://raw.githubusercontent.com/afthemes/demo-data/master/";
        $demo_json_url = $demo_file_url."afthemes_projects.json";
        $response = wp_remote_get($demo_json_url);
        $active_theme = get_stylesheet();
        $demodataparse = wp_remote_retrieve_body($response);
        $datajson = json_decode($demodataparse, true);

        if(!isset($datajson)){
            return false;
        }

        if (!is_array($datajson) && is_wp_error($datajson)) {
            return false;

        } else {
            if(  !array_key_exists($active_theme, $datajson['democontent'])){
                $exist_theme = false;
            }else{
                $exist_theme = true;
            }

            if($exist_theme) {

                $demodataparse = $datajson['democontent'][$active_theme];
                $current_demo = $demodataparse['data'];
                $related_free_theme = $demodataparse['free'];
                $related_pro_theme = $demodataparse['premium'];
                if ($demodataparse && $exist_theme) {
                    $dataArray = [];
                    foreach ($demodataparse['demodata'] as $demodata) {
                        
                        $xml = $demo_file_url . $active_theme . '/' . $demodata['slug'] . '/' . $current_demo . '.xml';
                        $dat = $demo_file_url . $active_theme . '/' . $demodata['slug'] . '/' . $current_demo . '.dat';
                        $wie = $demo_file_url . $active_theme . '/' . $demodata['slug'] . '/' . $current_demo . '.wie';
                        $image = $demo_file_url . $active_theme . '/assets/' . $demodata['slug'] . '.jpg';

                        $dataArray[] = array(
                            'import_file_name' => esc_html__($demodata['name'], 'af-companion'),
                            'categories' => array($demodata['catgory']),
                            'import_file_url' => $xml,
                            'import_widget_file_url' => $wie,
                            'import_customizer_file_url' => $dat,
                            'import_preview_image_url' => $image,
                            'preview_url' => $demodata['preview'],
                            'upgrade' => false,
                            'premium' => '',
                            'required_plugins' => (isset($demodata['plugins'])) ? $demodata['plugins']: '',

                        );



                    }

                    if (!empty($related_pro_theme)) {
                        $prodemodataparse = $datajson['democontent'][$related_pro_theme];
                        foreach ($prodemodataparse['demodata'] as $demodata) {
                            $image = $demo_file_url . $related_pro_theme . '/assets/' . $demodata['slug'] . '.jpg';
                            $dataArray[] = array(
                                'import_file_name' => esc_html__($demodata['name'], 'af-companion'),
                                'categories' => array($demodata['catgory']),
                                'import_file_url' => '',
                                'import_widget_file_url' => '',
                                'import_customizer_file_url' => '',
                                'import_preview_image_url' => $image,
                                'preview_url' => $demodata['preview'],
                                'upgrade' => true,
                                'premium' => $related_pro_theme,
                                'required_plugins' => (isset($demodata['plugins'])) ? $demodata['plugins']: '',
                            );


                        }
                    }

                    if (!empty($related_free_theme)) {
                        $freedemodataparse = $datajson['democontent'][$related_free_theme];
                        $freecurrent_demo = $freedemodataparse['data'];
                        foreach ($freedemodataparse['demodata'] as $demodata) {
                            $xml = $demo_file_url . $freecurrent_demo . '/' . $demodata['slug'] . '/' . $freecurrent_demo . '.xml';
                            $dat = $demo_file_url . $freecurrent_demo . '/' . $demodata['slug'] . '/' . $freecurrent_demo . '.dat';
                            $wie = $demo_file_url . $freecurrent_demo . '/' . $demodata['slug'] . '/' . $freecurrent_demo . '.wie';
                            $image = $demo_file_url . $freecurrent_demo . '/assets/' . $demodata['slug'] . '.jpg';
                            $dataArray[] = array(
                                'import_file_name' => esc_html__($demodata['name'], 'af-companion'),
                                'categories' => array($demodata['catgory']),
                                'import_file_url' => $xml,
                                'import_widget_file_url' => $wie,
                                'import_customizer_file_url' => $dat,
                                'import_preview_image_url' => $image,
                                'preview_url' => $demodata['preview'],
                                'upgrade' => false,
                                'premium' => '',
                                'required_plugins' => (isset($demodata['plugins'])) ? $demodata['plugins']: '',

                            );

                        }
                    }

                    return $dataArray;
                }

            } else {

                $dataArray[] = array(
                    'import_file_name' => '',
                    'categories' =>'',
                    'import_file_url' => '',
                    'import_widget_file_url' => '',
                    'import_customizer_file_url' => '',
                    'import_preview_image_url' => '',
                    'preview_url' => '',
                    'upgrade' => '',
                    'premium' => '',
                    'required_plugins' => '',

                );

                return $dataArray;

            }


        }


    }
endif;