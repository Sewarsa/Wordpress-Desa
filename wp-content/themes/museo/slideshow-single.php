<?php 
$themeoptions_display_featured_hero = esc_attr(get_theme_mod( 'theme-display-post-featured-image', 1 ));

if ( $themeoptions_display_featured_hero != '1' ) {
	return;
}

if ( is_single() || is_page() || is_page_template() ) {

	$meta_target_id = $post->ID;

	if ( $post->ID == 0 ) {
		global $wp_query;
		if ( isset( $wp_query->queried_object->ID ) ) { $meta_target_id = $wp_query->queried_object->ID; }
	}

	$post_meta = get_post_custom($meta_target_id);

	if ( has_post_thumbnail( $meta_target_id ) ) {
		$featured_image_id = get_post_thumbnail_id($meta_target_id);
		?>
		<div class="entry-thumbnail site-section-wrapper site-section-wrapper-slideshow-large site-section-wrapper-slideshow">
			<div id="site-section-slideshow" class="site-section-slideshow">
				<?php the_post_thumbnail('thumb-academia-slideshow'); ?>
			</div><!-- #site-section-slideshow .site-section .site-section-slideshow -->
		</div><!-- .entry-thumbnail .site-section-wrapper .site-section-wrapper-slideshow-large .site-section-wrapper-slideshow --><?php		

	}

} 