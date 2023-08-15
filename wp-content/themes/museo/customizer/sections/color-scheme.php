<?php

function academiathemes_customizer_define_color_scheme_sections( $sections ) {
    $panel           = 'academiathemes' . '_color-scheme';
    $colors_sections = array();

    $colors_sections['color'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'General', 'museo' ),
        'options' => array(

            'color-body-text' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Body Text', 'museo' ),
                ),
            ),

            'color-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link Color', 'museo' ),
                ),
            ),

            'color-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link Color on Hover', 'museo' ),
                ),
            ),

            'color-frame' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Content Frame Background', 'museo' ),
                ),
            ),

            'color-accent' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sidebar Menu Background', 'museo' ),
                ),
            ),

            'color-accent-anchor' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sidebar Menu Link Color', 'museo' ),
                ),
            ),

            'color-accent-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sidebar Menu Background Active', 'museo' ),
                ),
            ),

            'color-accent-hover-anchor' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sidebar Menu Active Link Color', 'museo' ),
                ),
            ),

        )
    );

    $colors_sections['color-main-menu'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'Main Menu', 'museo' ),
        'options' => array(

            'color-menu-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Menu Background', 'museo' ),
                ),
            ),

            'color-menu-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Menu Item', 'museo' ),
                ),
            ),

            'color-menu-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Menu Item on Hover', 'museo' ),
                ),
            ),

            'color-submenu-menu-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sub-Menu Item','museo' ),
                ),
            ),

            'color-submenu-menu-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sub-Menu Item on Hover','museo' ),
                ),
            ),

            'color-submenu-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sub-Menu Item Background','museo' ),
                ),
            ),

            'color-submenu-background-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sub-Menu Item Background on Hover','museo' ),
                ),
            ),

            'color-submenu-border-bottom' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sub-Menu Item Border Bottom','museo' ),
                ),
            ),

        )
    );

    $colors_sections['color-mobile-menu'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'Mobile Menu', 'museo' ),
        'options' => array(

            'color-mobile-menu-toggle-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Open Menu Button Background', 'museo' ),
                ),
            ),

            'color-mobile-menu-toggle-background-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Open Menu Button Background :hover', 'museo' ),
                ),
            ),

            'color-mobile-menu-toggle' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Open Menu Button Color', 'museo' ),
                ),
            ),

            'color-mobile-menu-toggle-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Open Menu Button Color :hover', 'museo' ),
                ),
            ),
            'color-mobile-menu-container-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Open Menu Background', 'museo' ),
                ),
            ),
            'color-mobile-menu-link-border' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link Border Color', 'museo' ),
                ),
            ),
            'color-mobile-menu-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link Color', 'museo' ),
                ),
            ),
            'color-mobile-menu-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link Color :hover', 'museo' ),
                ),
            ),

        )
    );

    $colors_sections['color-secondary-menu'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'Secondary Menu', 'museo' ),
        'options' => array(

            'color-secondary-menu-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Menu Item', 'museo' ),
                ),
            ),

            'color-secondary-menu-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Menu Item on Hover', 'museo' ),
                ),
            ),

        )
    );

    $colors_sections['color-footer'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'Footer', 'museo' ),
        'options' => array(

            'color-footer-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Background', 'museo' ),
                ),
            ),

            'color-footer-text' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Text', 'museo' ),
                ),
            ),

            'color-footer-widget-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Widget Title', 'museo' ),
                ),
            ),

            'color-footer-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link', 'museo' ),
                ),
            ),

            'color-footer-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link on Hover', 'museo' ),
                ),
            ),

        )
    );

    $colors_sections['color-footer-credits'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'Footer: Copyright', 'museo' ),
        'options' => array(

            'color-footer-credits-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Background', 'museo' ),
                ),
            ),

            'color-footer-credits-text' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Text', 'museo' ),
                ),
            ),

            'color-footer-credits-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link', 'museo' ),
                ),
            ),

            'color-footer-credits-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link on Hover', 'museo' ),
                ),
            ),

        )
    );

    $colors_sections['color-single'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'Posts and Pages', 'museo' ),
        'options' => array(

            'color-single-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Post/Page Title', 'museo' ),
                ),
            ),

            'color-single-meta' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Post Meta & Page Taglines', 'museo' ),
                ),
            ),

        )
    );

    return array_merge( $sections, $colors_sections );
}

add_filter( 'academiathemes_customizer_sections', 'academiathemes_customizer_define_color_scheme_sections' );