<?php

function academiathemes_option_defaults() {
    $defaults = array(

        /**
         * Color Scheme
         */
        // General
        'color-body-text'                     => '#080808',
        'color-link'                          => '#096ed3',
        'color-link-hover'                    => '#a51903',
        'color-frame'                         => '#ffffff',
        'color-accent'                        => '#111111',
        'color-accent-anchor'                 => '#111111',
        'color-accent-hover'                  => '#111111',
        'color-accent-hover-anchor'           => '#ffffff',

        // Main Menu
        'color-menu-background'               => '#111111',
        'color-menu-link'                     => '#aaaaaa',
        'color-menu-link-hover'               => '#ffffff',
        'color-submenu-background'            => '#ffffff',
        'color-submenu-background-hover'      => '#f8f8f8',
        'color-submenu-menu-link'             => '#121212',
        'color-submenu-menu-link-hover'       => '#096ed3',
        'color-submenu-border-bottom'         => '#F0F0F0',

        // Mobile Menu
        'color-mobile-menu-toggle-background'         => '#080808',
        'color-mobile-menu-toggle-background-hover'   => '#B00000',
        'color-mobile-menu-toggle'                    => '#ffffff',
        'color-mobile-menu-toggle-hover'              => '#ffffff',
        'color-mobile-menu-container-background'      => '#111111',
        'color-mobile-menu-link-border'               => '#333333',
        'color-mobile-menu-link'                      => '#ffffff',
        'color-mobile-menu-link-hover'                => '#f9d224',

        // Secondary Menu
        'color-secondary-menu-link'           => '#777777',
        'color-secondary-menu-link-hover'     => '#096ed3',

        // Footer
        'color-footer-background'             => '#ffffff',
        'color-footer-text'                   => '#333333',
        'color-footer-widget-title'           => '#111111',
        'color-footer-link'                   => '#096ed3',
        'color-footer-link-hover'             => '#111111',

        // Footer: Credits
        'color-footer-credits-background'     => '',
        'color-footer-credits-text'           => '#777777',
        'color-footer-credits-link'           => '#777777',
        'color-footer-credits-link-hover'     => '#096ed3',

        // Single Post
        'color-single-title'                  => '#111111',
        'color-single-meta'                   => '#777777',

        // Copyright
        'theme-header-style'                  => 'left',
        'theme-sidebar-position'              => 'left',
        'theme-display-post-featured-image'   => 1,
        'footer-widgets-display'              => 1,

        /* translators: This is the copyright notice that appears in the footer of the website. */
        'theme-homepage-posts-heading'        => __('Recent Posts','museo'),
        'museo_copyright_text'                => sprintf( esc_html__( 'Copyright &copy; %1$s %2$s. ', 'museo' ), date( 'Y' ), get_bloginfo( 'name' ) ),
    );

    return $defaults;
}

function academiathemes_get_default( $option ) {
    $defaults = academiathemes_option_defaults();
    $default  = ( isset( $defaults[ $option ] ) ) ? $defaults[ $option ] : false;

    return $default;
}