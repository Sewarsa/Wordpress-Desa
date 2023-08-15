<?php
/**
 * 
 */
add_action( 'wp_ajax_templatespare_get_theme_status', 'templatespare_get_theme_status' );
add_action( 'wp_ajax_templatespare_activate_required_theme', 'templatespare_activate_required_theme' );
add_action( 'wp_ajax_templatespare_activate_required_plugins', 'templatespare_activate_required_plugins' );


/**
** Install/Activate Required Theme
*/
function templatespare_activate_required_theme() {
    if ( isset($_POST['theme']) ) {
        $theme = sanitize_text_field($_POST['theme']);
        $res_theme = strtolower($theme);
        $theme_slug=  $res_theme;
        switch_theme( $theme_slug );
        set_transient( 'templatespare-kit_activation_notice', true );
        
        
    }
    

    
}

function templatespare_activate_required_plugins(){
    if ( isset($_POST['plugin']) ) {
        $recomplugin = sanitize_text_field($_POST['plugin']);
        if ( 'elementor' == $recomplugin ) {
            if ( !is_plugin_active( 'elementor/elementor.php' ) ) {
                activate_plugin( 'elementor/elementor.php', '',false, true );
            }
        } elseif ( 'elespare' == $recomplugin) {
            if ( !is_plugin_active( 'elespare/elespare.php' ) ) {
                activate_plugin( 'elespare/elespare.php','', false, true );
            }
        } elseif ( 'blockspare' == $recomplugin) {
            if ( !is_plugin_active( 'blockspare/blockspare.php' ) ) {
                activate_plugin( 'blockspare/blockspare.php', '',false, true );
            }
        }
        elseif ( 'woocommerce' == $recomplugin ) {
            if ( !is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
                activate_plugin( 'woocommerce/woocommerce.php', '',false, true );
            }
        }
    }
}


function templatespare_get_theme_status() {
    check_ajax_referer('aftc-ajax-verification', 'security');
    if ( isset($_POST['re_theme']) ){

        $themename = sanitize_text_field($_POST['re_theme']);
        
        $theme = wp_get_theme();
    
            // Theme installed and activate.
            if ( in_array($themename,templatespare_available_themes()  ) && $themename == $theme->name ) {
                
                return wp_send_json_success( array( 
                    'status' => 'req-theme-active',
                ), 200 );
                
            }
            
             // Theme installed but not activate.
            foreach ( (array) wp_get_themes() as $theme_dir => $themes ) {
                    if ( in_array($themename,templatespare_available_themes()) && $themename == $themes->name  ) {
                    
                        return wp_send_json_success( array( 
                            'status' => 'req-theme-inactive',
                        ), 200 );
                    
                    }
                }
        

        return wp_send_json_success( array( 
            'status' => 'req-theme-not-installed',
        ), 200 );
  
    }
    
}

function templatespare_available_themes(){

    return $themes = array(
        'CoverNews',
        'BroadNews', 
        'ChromeNews',
        'MoreNews',
        'EnterNews',
        'DarkNews',
        'Storeship',
        'Newsium',
        'Newsever',
        'Shopical',
        'Newsphere',
        'Elegant Magazine',
        'Magazine 7',
        'StoreCommerce',
        'Magnitude',
        'Kreeti Lite',
        'CoverNews Pro',
        'BroadNews Pro', 
        'ChromeNews Pro',
        'MoreNews Pro',
        'EnterNews Pro',
        'DarkNews Pro',
        'Storeship Pro',
        'Newsium Pro',
        'Newsever Pro',
        'Shopical Pro',
        'Newsphere Pro',
        'Elegant Magazine Pro',
        'Magazine 7 Plus',
        'StoreCommerce Pro',
        'Magnitude Pro',
        'Kreeti',
        'Newsback',
        'ChromeMag',
        'SplashNews',
        'EnterMag',
        'NewsCover',
        'FoodShop',
        'CoverStory',
        'Newspin',
        'Magever',
        'HardNews',
        'Shopage',
        'Magcess',
        'Storement',
        'NewsQuare',
        'Autoshop',
        'Vivacious Magazine',
        'Magaziness',
        'NewsWords',
        'Minimal Shop',
        'Daily Newscast',
        'Storekeeper',
        'Featured News',
        'Newsport',
        'Newstorial',
        'CoverMag',
        'Magnificent Blog',
        'Beautiful Blog',
        'Daily Magazine',
        'Newsment',
        'Sportion'

    );

}

function templatespare_available_pro_themes(){

    return $themes = array(
        
        'CoverNews Pro',
        'BroadNews Pro', 
        'ChromeNews Pro',
        'MoreNews Pro',
        'EnterNews Pro',
        'DarkNews Pro',
        'Storeship Pro',
        'Newsium Pro',
        'Newsever Pro',
        'Shopical Pro',
        'Newsphere Pro',
        'Elegant Magazine Pro',
        'Magazine 7 Plus',
        'Storecommerce Pro',
        'Magnitude Pro',
        'Kreeti'

    );

}



if ( apply_filters( 'templatesapre_clear_data_before_demo_import', true ) ) {
	add_action( 'templatespare_ajax_before_demo_import', 'templatespare_reset_widgets', 10 );
	add_action( 'templatespare_ajax_before_demo_import', 'templatespare_delete_nav_menus', 20 );
	add_action( 'templatespare_ajax_before_demo_import', 'templatespare_remove_theme_mods', 30 );
}


function templatespare_reset_widgets(){
    $sidebars_widgets = wp_get_sidebars_widgets();

	// Reset active widgets.
	foreach ( $sidebars_widgets as $key => $widgets ) {
		$sidebars_widgets[ $key ] = array();
	}

	wp_set_sidebars_widgets( $sidebars_widgets );
}

function templatespare_delete_nav_menus(){
    $nav_menus = wp_get_nav_menus();

	// Delete navigation menus.
	if ( ! empty( $nav_menus ) ) {
		foreach ( $nav_menus as $nav_menu ) {
			wp_delete_nav_menu( $nav_menu->slug );
		}
	}
}

function templatespare_remove_theme_mods(){
    remove_theme_mods();
}