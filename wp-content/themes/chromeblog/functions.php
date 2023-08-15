<?php
/*This file is part of HardNews child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function chromeblog_enqueue_child_styles()
{
    $min = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
    $parent_style = 'chromenews-style';
    
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap' . $min . '.css');
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'chromeblog',
        get_stylesheet_directory_uri() . '/style.css',
        array('bootstrap', $parent_style),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'chromeblog_enqueue_child_styles');

function chromeblog_filter_default_theme_options($defaults)
{    
    
    $defaults['show_flash_news_section'] = 0;  
    $defaults['show_main_news_section'] = 0;  
    $defaults['show_featured_posts_section'] = 0;
    $defaults['post_title_font']    = 'secondary';
    $defaults['chromenews_section_title_font_size']    = 20;
    $defaults['global_excerpt_length']    = 10;
    $defaults['main_navigation_custom_background_color'] = '#af0000';
    $defaults['secondary_color'] = '#cc0000';
    $defaults['text_over_secondary_color'] = '#ffffff';       
    return $defaults;
}
add_filter('chromenews_filter_default_theme_options', 'chromeblog_filter_default_theme_options', 1);
function chromeblog_setup(){
// Set up the WordPress core custom background feature.
add_theme_support('custom-background', apply_filters('chromenews_custom_background_args', array(
    'default-color' => 'f5f5f5',
    'default-image' => '',
)));
}
add_action('after_setup_theme', 'chromeblog_setup');

function chromeblog_filter_custom_header_args($header_args)
{
    $header_args['default-image'] = get_stylesheet_directory_uri() . '/assets/img/default-header-image.jpg';
    $header_args['default-text-color'] = 'ffffff';
    return $header_args;
}

add_filter('chromenews_custom_header_args', 'chromeblog_filter_custom_header_args', 1);
