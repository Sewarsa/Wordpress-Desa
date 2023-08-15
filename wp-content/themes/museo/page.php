<?php get_header(); ?>

<main id="site-main">

	<div class="site-section-wrapper site-section-wrapper-main">

	<?php
	while (have_posts()) : the_post();

	// Function to display Breadcrumbs
	ilovewp_helper_display_breadcrumbs($post);

	?>
		<div id="site-page-columns">

			<?php 
			// Function to display the SIDEBAR (if not hidden)
			ilovewp_helper_display_page_sidebar_column(); ?><!-- ws fix

			--><div id="site-column-main" class="site-column site-column-main">
				
				<div class="site-column-main-wrapper">

					<?php // Function to display the START of the content column markup

					ilovewp_helper_display_page_content_wrapper_start();

						ilovewp_helper_display_title($post);
						ilovewp_helper_display_content($post);
						ilovewp_helper_display_comments($post);

					// Function to display the END of the content column markup
					ilovewp_helper_display_page_content_wrapper_end();
					?>

				</div><!-- .site-column-wrapper .site-content-wrapper -->
			</div><!-- #site-column-main .site-column .site-column-main -->

			<?php 
			// Function to display the SECONDARY SIDEBAR (if not hidden)
			ilovewp_helper_display_page_sidebar_secondary();
			?>

		</div><!-- #site-page-columns -->
	<?php
	endwhile;
	?>

	</div><!-- .site-section-wrapper .site-section-wrapper-main -->

</main><!-- #site-main -->
	
<?php get_footer(); ?>