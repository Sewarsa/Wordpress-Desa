<?php 
/*-----------------------------------------------------------------------------------*/
/* Initializing Widgetized Areas (Sidebars)																			 */
/*-----------------------------------------------------------------------------------*/

/*----------------------------------*/
/* Sidebar							*/
/*----------------------------------*/

function museo_widgets_init() {

	register_sidebar(array(
		'name' => __('Sidebar: Primary','museo'),
		'id' => 'sidebar-primary',
		'before_widget' => '<div class="widget %2$s clearfix" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widget-title">',
		'after_title' => '</p>',
	));

	register_sidebar(array(
		'name' => __('Sidebar: Secondary','museo'),
		'id' => 'sidebar-secondary',
		'before_widget' => '<div class="widget %2$s clearfix" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widget-title">',
		'after_title' => '</p>',
	));

	register_sidebar(array(
		'name' => __('Homepage: Welcome Message','museo'),
		'id' => 'homepage-welcome',
		'description' => __('We recommend adding a single [Text Widget]. The widget\'s title will be wrapped in a <h1></h1> tag.','museo'),
		'before_widget' => '<div class="widget widget-welcome %2$s" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="page-title title-welcome"><span class="title-welcome-span">',
		'after_title' => '</span></h1>',
	));

	register_sidebar(array(
		'name' => __('Header: Secondary Widgets','museo'),
		'id' => 'header-widgets',
		'description' => __('These widgets will appear in the header to the right of the primary website logo. Recommended widgets: Academia: Call to Action, Social Icons, etc.','museo'),
		'before_widget' => '<div class="widget %2$s clearfix" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widget-title">',
		'after_title' => '</p>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Footer: Column 1', 'museo' ),
		'id'            => 'footer-col-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<p class="widget-title"><span>',
		'after_title'   => '</span></p>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer: Column 2', 'museo' ),
		'id'            => 'footer-col-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<p class="widget-title"><span>',
		'after_title'   => '</span></p>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer: Column 3', 'museo' ),
		'id'            => 'footer-col-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-content-wrapper">',
		'after_widget'  => '</div><!-- .widget-content-wrapper --></div>',
		'before_title'  => '<p class="widget-title"><span>',
		'after_title'   => '</span></p>',
	) );

} 

add_action( 'widgets_init', 'museo_widgets_init' );