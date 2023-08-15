<?php

if( ! function_exists( 'ilovewp_helper_display_breadcrumbs' ) ) {
	function ilovewp_helper_display_breadcrumbs() {

		// CONDITIONAL FOR "Breadcrumb NavXT" plugin OR Yoast SEO Breadcrumbs
		// https://wordpress.org/plugins/breadcrumb-navxt/

		if ( function_exists('bcn_display') ) { ?>
		<div class="site-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<p class="site-breadcrumbs-p"><?php bcn_display(); ?></p>
		</div><!-- .site-breadcrumbs--><?php }

		// CONDITIONAL FOR "Yoast SEO" plugin, Breadcrumbs feature
		// https://wordpress.org/plugins/wordpress-seo/
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<div class="site-breadcrumbs"><p class="site-breadcrumbs-p">','</p></div>');
		}

	}
}

if( ! function_exists( 'ilovewp_helper_display_title' ) ) {
	function ilovewp_helper_display_title($post) {

		if( ! is_object( $post ) ) return;
		the_title( '<h1 class="page-title">', '</h1>' );
	}
}

if( ! function_exists( 'ilovewp_helper_display_entry_title' ) ) {
	function ilovewp_helper_display_entry_title($post) {

		if( ! is_object( $post ) ) return;
		return the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>', 0 );

	}
}

if( ! function_exists( 'ilovewp_helper_display_datetime' ) ) {
	function ilovewp_helper_display_datetime($post) {
		
		if( ! is_object( $post ) ) return;

		return '<p class="entry-descriptor"><span class="entry-descriptor-span"><time class="entry-date published" datetime="' . esc_attr(get_the_date('c')) . '">' . get_the_date() . '</time></span></p>';

	}
}

if( ! function_exists( 'ilovewp_helper_display_excerpt' ) ) {
	function ilovewp_helper_display_excerpt($post) {

		if( ! is_object( $post ) ) return;

		return '<p class="entry-excerpt">' . get_the_excerpt() . '</p>';

	}
}

if( ! function_exists( 'ilovewp_helper_display_button_readmore' ) ) {
	function ilovewp_helper_display_button_readmore($post) {

		if( ! is_object( $post ) ) return;

		return '<p class="entry-actions"><span class="site-readmore-span"><a href="' . esc_url( get_permalink() ) . '" title="' . sprintf( /* translators: %s: Link tittle attribute */ esc_attr__( 'Continue Reading: %s', 'museo' ), the_title_attribute( 'echo=0' ) ) . '" class="site-readmore-anchor" rel="bookmark">' . __('Read More','museo') . '</a></span></p>';
		
	}
}

if( ! function_exists( 'ilovewp_helper_display_comments' ) ) {
	function ilovewp_helper_display_comments($post) {

		if( ! is_object( $post ) ) return;

		if ( comments_open() || get_comments_number() ) :

			echo '<div id="academia-comments"">';
			comments_template();
			echo '</div><!-- #academia-comments -->';

		endif;

	}
}

if( ! function_exists( 'ilovewp_helper_display_content' ) ) {
	function ilovewp_helper_display_content($post) {

		if( ! is_object( $post ) ) return;

		echo '<div class="entry-content">';
			
			the_content();
			
			wp_link_pages(array('before' => '<p class="page-navigation"><strong>'.__('Pages', 'museo').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));

		echo '</div><!-- .entry-content -->';

	}
}

if( ! function_exists( 'ilovewp_helper_display_woocommerce_content' ) ) {
	function ilovewp_helper_display_woocommerce_content($post) {

		if( ! is_object( $post ) ) return;

		echo '<div class="entry-content">';
			
			woocommerce_content();

		echo '</div><!-- .entry-content -->';

	}
}

if( ! function_exists( 'ilovewp_helper_display_tags' ) ) {
	function ilovewp_helper_display_tags($post) {

		if( ! is_object( $post ) ) return;

		if ( get_post_type($post->ID) == 'post' ) { 
			the_tags( '<p class="post-meta post-tags"><strong>'.__('Tags', 'museo').':</strong> ', ', ', '</p>');
		}

	}
}

if( ! function_exists( 'ilovewp_helper_display_postmeta' ) ) {
	function ilovewp_helper_display_postmeta($post) {

		if( ! is_object( $post ) ) return;

		if ( get_post_type($post->ID) == 'post' ) { 

			echo '<p class="entry-tagline">';
			echo '<span class="post-meta-span"><time datetime="' . esc_attr(get_the_time("Y-m-d")) . '" pubdate>' . esc_html(get_the_time(get_option('date_format'))) . '</time></span>';
			echo '<span class="post-meta-span category">'; the_category(', '); echo '</span>';
			echo '</p><!-- .entry-tagline -->';

		}

	}
}

// Get Header Style
if( ! function_exists( 'ilovewp_helper_get_active_header_style' ) ) {
	function ilovewp_helper_get_active_header_style() {

		$default_position = 'page-header-default';
		$themeoptions_header_style = esc_attr(get_theme_mod( 'theme-header-style', 'default' ));

		if ( $themeoptions_header_style == 'default' ) {
			$default_position = 'page-header-default';
		} elseif ( $themeoptions_header_style == 'centered' ) {
			$default_position = 'page-header-centered';
		}

		return $default_position;
	}
}

// Get Global Sidebar Position
if( ! function_exists( 'ilovewp_helper_get_sidebar_position' ) ) {
	function ilovewp_helper_get_sidebar_position() {

		$return_sidebar = '';
		$display_sidebar = esc_attr(get_theme_mod( 'theme-sidebar-position', 'both' ));

		if ( $display_sidebar == 'both' ) {
			$return_sidebar = 'page-sidebar-both';
		} elseif ( $display_sidebar == 'none' ) {
			$return_sidebar = 'page-sidebar-none';
		} elseif ( $display_sidebar == 'left' ) {
			$return_sidebar = 'page-sidebar-primary';
		} elseif ( $display_sidebar == 'right' ) {
			$return_sidebar = 'page-sidebar-secondary';
		}

		return $return_sidebar;
	}
}

if( ! function_exists( 'ilovewp_helper_display_page_sidebar_column' ) ) {
	function ilovewp_helper_display_page_sidebar_column() {

		$display_sidebar_position = ilovewp_helper_get_sidebar_position();

		if ( isset($display_sidebar_position) && ( $display_sidebar_position == 'page-sidebar-primary' || $display_sidebar_position == 'page-sidebar-both' ) ) {

			if (is_active_sidebar('sidebar-primary')) { ?>

			<div id="site-aside-primary" class="site-column site-column-aside">
				<div class="site-column-wrapper site-aside-wrapper">
					<?php dynamic_sidebar( 'sidebar-primary' ); ?>
				</div><!-- .site-column-wrapper .site-aside-wrapper -->
			</div><!-- #site-aside-secondary .site-column site-column-aside -->
			<?php } // if active 
			} // if sidebar is displayed
	}
}

if( ! function_exists( 'ilovewp_helper_display_page_sidebar_secondary' ) ) {
	function ilovewp_helper_display_page_sidebar_secondary() {

		$display_sidebar_position = ilovewp_helper_get_sidebar_position();

		if ( isset($display_sidebar_position) && ( $display_sidebar_position == 'page-sidebar-secondary' || $display_sidebar_position == 'page-sidebar-both' ) ) {

			if (is_active_sidebar('sidebar-secondary')) { ?>

			<div id="site-aside-secondary" class="site-column site-column-aside">
				<div class="site-column-wrapper site-aside-wrapper">
					<?php dynamic_sidebar( 'sidebar-secondary' ); ?>
				</div><!-- .site-column-wrapper .site-aside-wrapper -->
			</div><!-- #site-aside-secondary .site-column site-column-aside -->
			<?php } // if active 
		} // if sidebar is displayed

	}
}

// Content Column Wrapper Start
if( ! function_exists( 'ilovewp_helper_display_page_content_wrapper_start' ) ) {
	function ilovewp_helper_display_page_content_wrapper_start() {

		?><div id="site-column-content" class="site-column site-column-content"><div class="site-column-wrapper site-column-content-wrapper"><?php

	}
}

// Content Column Wrapper Start
if( ! function_exists( 'ilovewp_helper_display_page_content_wrapper_end' ) ) {
	function ilovewp_helper_display_page_content_wrapper_end() {

		?></div><!-- .site-column-wrapper .site-column-content-wrapper --></div><!-- .#site-column-content .site-column .site-column-content --><?php

	}
}

/**
 * Adds a Sub Nav Toggle to the Expanded Menu and Mobile Menu.
 *
 * @param stdClass $args  An object of wp_nav_menu() arguments.
 * @param WP_Post  $item  Menu item data object.
 * @param int      $depth Depth of menu item. Used for padding.
 * @return stdClass An object of wp_nav_menu() arguments.
 */
function museo_add_sub_toggles_to_main_menu( $args, $item, $depth ) {

	// Add sub menu toggles to the Expanded Menu with toggles.
	if ( isset( $args->show_toggles ) && $args->show_toggles ) {

		$args->after  = '';

		if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {

			$args->after .= '<button class="sub-menu-toggle toggle-anchor"><span class="screen-reader-text">' . __( 'Show sub menu', 'museo' ) . '</span><span class="icon-icomoon academia-icon-chevron-down"></span></span></button>';

		}
	} 

	return $args;

}

add_filter( 'nav_menu_item_args', 'museo_add_sub_toggles_to_main_menu', 10, 3 );

// Add custom CSS to first featured image on a page
if ( ! function_exists( 'museo_add_featured_image_class' ) ) :
	function museo_add_featured_image_class($attr) {
		if ( $attr['class'] === 'custom-logo' ) {
			return $attr; 
		}
		remove_filter('wp_get_attachment_image_attributes','museo_add_featured_image_class');
		$attr['class'] .= ' museo-first-image skip-lazy';
		$attr['loading'] = 'eager';
		return $attr;
	}
endif;
add_filter('wp_get_attachment_image_attributes','museo_add_featured_image_class'); 

// Add loading="eager" to custom header images.
if ( ! function_exists( 'museo_custom_header_image_class' ) ) :
	function museo_custom_header_image_class($attr) {
		$attr['loading'] = 'eager';
		$attr['class'] = 'museo-custom-header-image skip-lazy';
		return $attr;
	}
endif;
add_filter('get_header_image_tag_attributes','museo_custom_header_image_class');