<?php

function templatespare_import_navigation()
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

add_action('templatespare/after_import', 'templatespare_import_navigation');

add_filter( 'templatespare_post_content_before_insert', 'templatespare_replace_urls', 10, 2 );

function templatespare_replace_urls($content, $old_base_url ){
   
    $site_url = get_site_url();
    $site_url = str_replace( '/', '\/', $site_url );
   
    $demo_site_url = str_replace( '/', '\/', $old_base_url );
    $content = json_encode($content,true);
    
    $content = preg_replace('/\\\{1}\/sites\\\{1}\/\d+/', '', $content);
    
    $content = str_replace( $demo_site_url, $site_url, $content );
    
    $content = json_decode( $content, true );
    
    return $content;
       
}

