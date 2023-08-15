<?php get_header(); ?>

<main id="site-main">

	<?php if ( ( is_front_page() || is_home() ) && !is_paged() ) {

		if ( is_active_sidebar('homepage-welcome') ) { ?>
		
		<div class="site-home-welcome">
			<div class="site-section-wrapper site-section-home-welcome-wrapper">
				<?php dynamic_sidebar( 'homepage-welcome' ); ?>
			</div><!-- .site-section-wrapper .site-section-home-welcome-wrapper -->
		</div><!-- .site-home-welcome -->
		
		<?php }

		if ( 1 == get_theme_mod( 'theme-museo-display-pages', 1 ) ) {
			get_template_part( 'template-parts/content', 'home-featured' );
		} // if featured pages are activated

		if ( is_active_sidebar('homepage-welcome') || 1 == get_theme_mod( 'theme-museo-display-pages', 1 ) ) {
			echo '<hr />';
		}

	} ?>

	<div class="site-section-wrapper site-section-wrapper-main">

		<div id="site-page-columns">

			<?php 
			// Function to display the SIDEBAR (if not hidden)
			ilovewp_helper_display_page_sidebar_column(); ?>
			<div id="site-column-main" class="site-column site-column-main">
				
				<div class="site-column-main-wrapper">

					<?php

					// Function to display the START of the content column markup
					ilovewp_helper_display_page_content_wrapper_start(); 

					if ( have_posts() ) { 
						$i = 0; 
					
						if ( is_home() && ! is_front_page() ) { ?>
						<h1 class="page-title archives-title"><?php single_post_title(); ?></h1>
						<?php }
						if ( is_home() ) { ?><p class="widget-title archives-title"><?php echo esc_html(get_theme_mod( 'theme-homepage-posts-heading', __('Recent Posts', 'museo') )); ?></p><?php }
						get_template_part('loop');

					}

					// Function to display the END of the content column markup
					ilovewp_helper_display_page_content_wrapper_end(); ?>

				</div><!-- .site-column-wrapper .site-content-wrapper -->
			</div><!-- #site-column-main .site-column .site-column-main -->
			<?php 
			// Function to display the SECONDARY SIDEBAR (if not hidden)
			ilovewp_helper_display_page_sidebar_secondary();
			?>

		</div><!-- #site-page-columns -->

	</div><!-- .site-section-wrapper .site-section-wrapper-main -->

</main><!-- #site-main -->

<?php get_footer(); ?>