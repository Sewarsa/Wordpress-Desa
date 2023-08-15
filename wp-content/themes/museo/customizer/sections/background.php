<?php

/**
 * @param WP_Customize_Manager $wp_customize
 */
function academia_customizer_background( $wp_customize ) {
    $section_id = 'background_image';
    $section    = $wp_customize->get_section( $section_id );

    $section->title = esc_html__( 'Site Background', 'museo' );

    // Move and rename Background Color control to General section of Color Scheme panel
    $wp_customize->get_control( 'background_color' )->section = 'background_image';
    $wp_customize->get_control( 'background_color' )->label = esc_html__( 'Background Color', 'museo' );
}

add_action( 'customize_register', 'academia_customizer_background', 20 );
