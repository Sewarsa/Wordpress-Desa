<?php get_header(); ?>

<main id="site-main">

	<div class="site-section-wrapper site-section-wrapper-main">

	<?php
	// Function to display Breadcrumbs
	ilovewp_helper_display_breadcrumbs($post);

	?>
		<div id="site-page-columns">

			<?php 
			// Function to display the SIDEBAR (if not hidden)
			ilovewp_helper_display_page_sidebar_column(); ?>
			<div id="site-column-main" class="site-column site-column-main">
				
				<div class="site-column-main-wrapper">

					<?php

					// Function to display the START of the content column markup
					ilovewp_helper_display_page_content_wrapper_start(); ?>

					<h1 class="page-title"><?php esc_html_e( 'Page not found', 'museo' ); ?></h1>

					<div class="archives-content"><p><?php esc_html_e( 'Apologies, but the requested page cannot be found. Perhaps searching will help find a related page.', 'museo' ); ?></p></div>
					<hr />
					<?php get_search_form(); ?>

					<hr />
					<div class="entry-content">
					
						<h3><?php esc_html_e( 'Browse Categories', 'museo' ); ?></h3>
						<ul>
							<?php wp_list_categories('title_li=&hierarchical=0&show_count=1'); ?>	
						</ul>

						<hr>

						<h3><?php esc_html_e( 'Monthly Archives', 'museo' ); ?></h3>
						<ul>
							<?php wp_get_archives('type=monthly&show_post_count=1'); ?>	
						</ul>
					
					</div><!-- .entry-content --><?php

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