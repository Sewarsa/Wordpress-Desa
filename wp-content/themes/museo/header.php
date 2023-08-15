<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="profile" href="//gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="container">

	<a class="skip-link screen-reader-text" href="#site-main"><?php esc_html_e( 'Skip to content', 'museo' ); ?></a>
	<div class="site-wrapper-all site-wrapper-boxed">

		<header id="site-masthead" class="site-section site-section-masthead">
			<div class="site-section-wrapper site-section-wrapper-masthead">
				<div id="site-logo"><?php
				if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
					museo_the_custom_logo();
				} else { ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<?php } ?>
			</div><!-- #site-logo --><?php 
				
				if ( has_nav_menu( 'secondary-1' ) || has_nav_menu( 'secondary-2' ) ) { 
				
				?><div class="site-header-menus"><?php if ( has_nav_menu( 'secondary-1' ) ) { ?><nav id="site-secondary-nav-1" class="site-secondary-nav">
					<?php wp_nav_menu( array( 'container' => '', 'container_class' => '', 'menu_class' => '', 'menu_id' => 'site-secondary-menu-1', 'sort_column' => 'menu_order', 'depth' => '1', 'theme_location' => 'secondary-1' ) ); ?>
				</nav><!-- #site-secondary-nav --><?php } if ( has_nav_menu( 'secondary-2' ) ) { ?><nav id="site-secondary-nav-2" class="site-secondary-nav">
					<?php wp_nav_menu( array( 'container' => '', 'container_class' => '', 'menu_class' => '', 'menu_id' => 'site-secondary-menu-2', 'sort_column' => 'menu_order', 'depth' => '1', 'theme_location' => 'secondary-2' ) ); ?>
					</nav><!-- #site-secondary-nav --><?php } ?></div><?php } ?>
				<?php if ( is_active_sidebar('header-widgets') ) { ?><div id="site-header-extra">
					<div id="site-header-widgets"><?php dynamic_sidebar( 'header-widgets' ); ?></div><!-- #site-header-widgets -->
				</div><!-- #site-header-extra--><?php } ?>
			</div><!-- .site-section-wrapper .site-section-wrapper-masthead -->
		</header><!-- #site-masthead .site-section-masthead -->
		<?php
		if (has_nav_menu( 'primary' )) { ?>
		<nav id="site-primary-nav">
			<?php
			// Output the mobile menu
			get_template_part( 'template-parts/mobile-menu' );
			?>
			<div class="site-section-wrapper site-section-wrapper-primary-menu"><?php 
				wp_nav_menu( array(
					'container' => '', 
					'container_class' => '', 
					'menu_class' => 'navbar-nav dropdown large-nav sf-menu clearfix', 
					'menu_id' => 'site-primary-menu',
					'sort_column' => 'menu_order', 
					'theme_location' => 'primary', 
					'link_after' => '', 
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
				) );
			?></div><!-- .site-section-wrapper .site-section-wrapper-primary-menu -->
		</nav><!-- #site-primary-nav --><?php }

		if ( (is_front_page() || is_home()) && !is_paged() ) {
			the_custom_header_markup();
		} else {
			if ( is_singular() ) {
				if ( function_exists ( "is_woocommerce") && is_woocommerce() ) {
					return true;
				}
				while (have_posts()) : the_post();
				get_template_part('slideshow','single');
				endwhile;
			} 
		}
?>