<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!function_exists('awpa_get_author_shortcode')) {
    /**
     * @param $author_id
     * @return array
     */
    function awpa_get_author_shortcode($atts)
    {


        $awpa = shortcode_atts(array(
            'title' => __('About Author', 'wp-post-author'),
            'author-id' => '',
            'align' => 'left',
            'image-layout' => 'square',
            'author-posts-link' => 'square',
            'icon-shape' => 'round',
            'show-role' => 'false',
            'show-email' => 'false'
        ), $atts);

        $author_id = !empty($awpa['author-id']) ? absint($awpa['author-id']) : '';
        $title = isset($awpa['title']) ? esc_attr($awpa['title']) : '';
        $align = !empty($awpa['align']) ? esc_attr($awpa['align']) : 'left';
        $image_layout = !empty($awpa['image-layout']) ? esc_attr($awpa['image-layout']) : 'square';
        $author_posts_link = !empty($awpa['author-posts-link']) ? esc_attr($awpa['author-posts-link']) : 'square';
        $icon_shape = !empty($awpa['icon-shape']) ? esc_attr($awpa['icon-shape']) : 'round';
        $show_role = !empty($awpa['show-role']) ? esc_attr($awpa['show-role']) : 'false';
        $show_email = !empty($awpa['show-email']) ? esc_attr($awpa['show-email']) : 'false';

        $show_role = ($show_role == 'true') ? true : false;
        $show_email = ($show_email == 'true') ? true : false;
        

        // if (($show == true) || is_author()) {
            ob_start();

            $post_id = get_the_ID();
            $options = get_option('awpa_author_metabox_integration');
            if ($options && array_key_exists('enable_author_metabox', $options)) {
                if ($options['enable_author_metabox']) {
                    $awpa_post_authors = get_post_meta($post_id, 'wpma_author');
                } else {
                    $awpa_post_authors = array(get_post()->post_author);
                }
            } else {
                $awpa_post_authors = array(get_post()->post_author);
            }
            // $awpa_post_authors = get_post_meta($post_id, 'wpma_author');
            // error_log(json_encode($awpa_post_authors));
?>
            <h3 class="awpa-title"><?php echo esc_html($title); ?></h3>
            <?php
            if (isset($awpa_post_authors) && !empty($awpa_post_authors)) :
                foreach ($awpa_post_authors as $author_id) :

                    $needle = 'guest-';
                    if (strpos($author_id, $needle) !== false) {
                        $filter_id = substr($author_id, strpos($author_id, "-") + 1);
                        $author_id = $filter_id;
                        $author_type = 'guest';
                    } else {
                        $author_id = $author_id;
                        $author_type = 'default';
                    }

            ?>
                    <div class="wp-post-author-wrap wp-post-author-shortcode <?php echo esc_attr($align); ?>">

                        <?php do_action('before_wp_post_author'); ?>
                        <?php
                        if ($author_type == 'default') {
                            awpa_get_author_block($author_id, $image_layout, $show_role, $show_email, $author_posts_link, $icon_shape);
                        }
                        if ($author_type == 'guest') {
                            awpa_get_guest_author_block($author_id, $image_layout, $show_role, $show_email, $author_posts_link, $icon_shape);
                        }
                        ?>
                        <?php do_action('after_wp_post_author'); ?>
                    </div>
                <?php
                endforeach;
            else : ?>
                <div class="wp-post-author-wrap wp-post-author-shortcode <?php echo esc_attr($align); ?>">
                    <?php do_action('before_wp_post_author'); ?>
                    <?php awpa_get_author_block($author_id, $image_layout, $show_role, $show_email, $author_posts_link, $icon_shape); ?>
                    <?php do_action('after_wp_post_author'); ?>
                </div>
<?php
            endif;

            return ob_get_clean();
        }
    // }
}
add_shortcode('wp-post-author', 'awpa_get_author_shortcode');

/*
* user registration short code
*/
function awpa_add_shortcode_registration_form($atts)
{
    $atts = array_change_key_case((array) $atts, CASE_LOWER);
    $wporg_atts = shortcode_atts(
        array(
            'title' => __('Registration Form', 'wp-post-author'),
            'form_id' => array_key_exists('form_id', $atts) ? $atts['form_id'] : 1
        ),
        $atts
    );

    if ($wporg_atts['form_id']) {
        $attributes = array(
            'btnText' => __('Register', 'wp-post-author'),
            'imgURL' => null,
            'enableBgImage' => null
        );
        return  "<div class='awpa-user-registration-wrapper'><div class='awpa-user-registration' id='render-block' value='" . $wporg_atts['form_id'] . "' attributes=" .  json_encode($attributes) . "></div></div>";
    }
}
add_shortcode('awpa-registration-form', 'awpa_add_shortcode_registration_form');