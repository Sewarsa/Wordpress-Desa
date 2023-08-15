<?php
/**
 * The template used for displaying featured pages on the Front Page
 */

$page_ids = array();
if ( absint(get_theme_mod( 'theme-museo-featured-page-1', false )) != 0 ) { $page_ids[] = absint(get_theme_mod( 'theme-museo-featured-page-1', false )); }
if ( absint(get_theme_mod( 'theme-museo-featured-page-2', false )) != 0 ) { $page_ids[] = absint(get_theme_mod( 'theme-museo-featured-page-2', false )); }
if ( absint(get_theme_mod( 'theme-museo-featured-page-3', false )) != 0 ) { $page_ids[] = absint(get_theme_mod( 'theme-museo-featured-page-3', false )); }
$page_count = 0;
$page_count = count($page_ids);

if ( $page_count > 0 ) {
	$custom_loop = new WP_Query( array( 'post_type' => 'page', 'post__in' => $page_ids, 'orderby' => 'post__in' ) );

	if ( $custom_loop->have_posts() ) : ?>
	<div class="site-home-featured-pages">
		<div class="site-section-wrapper site-section-home-featured-pages-wrapper">

			<div id="home-featured-pages">

				<ul class="academia-featured-pages-list">

					<?php 
					while ( $custom_loop->have_posts() ) : $custom_loop->the_post();
					$classes = array('academia-featured-page-item'); 
					
					if ( !has_post_thumbnail() ) {
						$classes[] = 'post-nothumbnail';
					} else {
						$classes[] = 'has-post-thumbnail';
					}
					?><li <?php post_class($classes); ?>>
						<div class="site-column-widget-wrapper">
							<?php if ( has_post_thumbnail() ) { ?>
							<div class="entry-thumbnail">
								<div class="entry-thumbnail-wrapper"><?php 

									echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
									the_post_thumbnail('thumb-featured-page');
									echo '</a>'; ?>
									<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'museo' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
								</div><!-- .entry-thumbnail-wrapper -->
							</div><!-- .entry-thumbnail --><?php } ?>
						</div><!-- .site-column-widget-wrapper -->
					</li><!-- .site-archive-post --><?php endwhile; ?>

				</ul><!-- .academia-featured-pages-list -->

			</div><!-- #home-featured-pages -->
		
		</div><!-- .site-section-wrapper .site-section-home-featured-pages-wrapper -->
	</div><!-- .site-home-featured-pages -->
<?php endif; } ?>