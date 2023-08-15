<?php

function academiathemes_customizer_define_general_sections( $sections ) {
    $panel           = 'academiathemes' . '_general';
    $general_sections = array();

    $theme_header_style = array(
        'left'      => esc_html__('Left', 'museo'),
        'centered'  => esc_html__('Centered', 'museo')
    );

    $theme_sidebar_positions = array(
        'both'      => esc_html__('Both Sidebars', 'museo'),
        'left'      => esc_html__('Only Primary (left) Sidebar', 'museo'),
        'right'     => esc_html__('Only Secondary (right) Sidebar', 'museo'),
        'none'      => esc_html__('No sidebars', 'museo')
    );

    $general_sections['general'] = array(
        'panel'     => $panel,
        'title'     => esc_html__( 'General Settings', 'museo' ),
        'priority'  => 4900,
        'options'   => array(

            'theme-header-style'     => array(
                'setting' => array(
                    'default' => 'left',
                    'sanitize_callback' => 'academiathemes_sanitize_text'
                ),
                'control' => array(
                    'label' => esc_html__( 'Header Layout', 'museo' ),
                    'type'  => 'radio',
                    'choices' => $theme_header_style
                ),
            ),

            'theme-sidebar-position'    => array(
                'setting'               => array(
                    'default'           => 'left',
                    'sanitize_callback' => 'academiathemes_sanitize_text'
                ),
                'control'           => array(
                    'label'         => esc_html__( 'Display Sidebar(s)', 'museo' ),
                    'type'          => 'radio',
                    'choices'       => $theme_sidebar_positions
                ),
            ),

            'theme-display-post-featured-image'    => array(
                'setting'               => array(
                    'sanitize_callback' => 'absint',
                    'default'           => 1
                ),
                'control'               => array(
                    'label'             => __( 'Display Featured Images in Posts and Pages', 'museo' ),
                    'type'              => 'checkbox'
                )
            ),

        ),
    );

    $general_sections['homepage'] = array(
        'panel'     => $panel,
        'title'   => esc_html__( 'Homepage', 'museo' ),
        'priority' => 4910,
        'options' => array(

            'theme-homepage-posts-heading' => array(
                'setting' => array(
                    'default'           => __('Recent Posts','museo'),
                    'sanitize_callback' => 'sanitize_text_field',
                ),
                'control' => array(
                    'label'             => esc_html__( 'Blog Section Heading', 'museo' ),
                    'type'              => 'text',
                ),
            ),

            'theme-museo-display-pages'    => array(
                'setting'               => array(
                    'sanitize_callback' => 'absint',
                    'default'           => '1'
                ),
                'control'               => array(
                    'label'             => __( 'Display Featured Pages on Homepage', 'museo' ),
                    'type'              => 'checkbox'
                )
            ),

            'theme-museo-featured-page-1'  => array(
                'setting'               => array(
                    'default'           => 'none',
                    'sanitize_callback' => 'museo_sanitize_pages'
                ),
                'control'               => array(
                    'label'             => esc_html__( 'Featured Page #1', 'museo' ),
                    'description'       => sprintf( wp_kses( __( 'This list is populated with <a href="%1$s">Pages</a>.', 'museo' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'edit.php?post_type=page' ) ) ),
                    'type'              => 'select',
                    'choices'           => museo_get_pages()
                ),
            ),

            'theme-museo-featured-page-2'  => array(
                'setting'               => array(
                    'default'           => 'none',
                    'sanitize_callback' => 'museo_sanitize_pages'
                ),
                'control'               => array(
                    'label'             => esc_html__( 'Featured Page #2', 'museo' ),
                    'type'              => 'select',
                    'choices'           => museo_get_pages()
                ),
            ),

            'theme-museo-featured-page-3'  => array(
                'setting'               => array(
                    'default'           => 'none',
                    'sanitize_callback' => 'museo_sanitize_pages'
                ),
                'control'               => array(
                    'label'             => esc_html__( 'Featured Page #3', 'museo' ),
                    'type'              => 'select',
                    'choices'           => museo_get_pages()
                ),
            ),

        ),
    );

    $general_sections['footer'] = array(
        'panel'     => $panel,
        'title'   => esc_html__( 'Footer', 'museo' ),
        'priority' => 4910,
        'options' => array(

            'museo_copyright_text' => array(
                'setting' => array(
                    'default'           => __('Copyright &copy; ','museo') . date("Y",time()) . ' ' . get_bloginfo('name'),
                    'sanitize_callback' => 'sanitize_text_field',
                ),
                'control' => array(
                    'label'             => esc_html__( 'Copyright Text', 'museo' ),
                    'type'              => 'text',
                ),
            ),

            'theme-display-footer-credit' => array(
                'setting'               => array(
                    'sanitize_callback' => 'absint',
                    'default'           => 1
                ),
                'control'               => array(
                    'label'             => __( 'Display "Theme by ILOVEWP"', 'museo' ),
                    'type'              => 'checkbox'
                )
            ),

        ),
    );

    return array_merge( $sections, $general_sections );
}

add_filter( 'academiathemes_customizer_sections', 'academiathemes_customizer_define_general_sections' );