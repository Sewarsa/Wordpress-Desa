<?php
/**
 * Define Constants
 */
if( ! defined( 'ILOVEWP_SHORTNAME' ) ) {
	define( 'ILOVEWP_SHORTNAME', 'museo' );
}
if( ! defined( 'ILOVEWP_PAGE_BASENAME' ) ) {
	define( 'ILOVEWP_PAGE_BASENAME', 'museo-doc' );
}
if( ! defined( 'ILOVEWP_THEME_DETAILS' ) ) {
	define( 'ILOVEWP_THEME_DETAILS', 'https://www.ilovewp.com/themes/museo-lite/?utm_source=dashboard&utm_medium=doc-page&utm_campaign=museo-lite&utm_content=theme-details-link' );
}
if( ! defined( 'ILOVEWP_THEME_DEMO' ) ) {
	define( 'ILOVEWP_THEME_DEMO', 'https://demo.academiathemes.com/?theme=museo-lite&utm_source=dashboard&utm_medium=doc-page&utm_campaign=museo-lite&utm_content=demo-link' );
}
if( ! defined( 'ILOVEWP_THEME_VIDEO_GUIDE' ) ) {
	define( 'ILOVEWP_THEME_VIDEO_GUIDE', 'https://youtu.be/BkhhdOIvJUs');
}
if( ! defined( 'ILOVEWP_THEME_VIDEO_COMPARISON' ) ) {
	define( 'ILOVEWP_THEME_VIDEO_COMPARISON', 'https://youtu.be/BkhhdOIvJUs?t=388');
}
if( ! defined( 'ILOVEWP_THEME_DOCUMENTATION_URL' ) ) {
	define( 'ILOVEWP_THEME_DOCUMENTATION_URL', 'https://www.academiathemes.com/documentation/museo-lite/?utm_source=dashboard&utm_medium=doc-page&utm_campaign=museo-lite&utm_content=documentation-link' );
}
if( ! defined( 'ILOVEWP_THEME_SUPPORT_FORUM_URL' ) ) {
	define( 'ILOVEWP_THEME_SUPPORT_FORUM_URL', 'https://wordpress.org/support/theme/museo/' );
}
if( ! defined( 'ILOVEWP_THEME_REVIEW_URL' ) ) {
	define( 'ILOVEWP_THEME_REVIEW_URL', 'https://wordpress.org/support/theme/museo/reviews/#new-post' );
}
if( ! defined( 'ILOVEWP_THEME_UPGRADE_URL' ) ) {
	define( 'ILOVEWP_THEME_UPGRADE_URL', 'https://www.ilovewp.com/product/museo-pro/?utm_source=dashboard&utm_medium=doc-page&utm_campaign=museo-lite&utm_content=upgrade-button' );
}
if( ! defined( 'ILOVEWP_THEME_DEMO_IMPORT_URL' ) ) {
	define( 'ILOVEWP_THEME_DEMO_IMPORT_URL', false );
}

/**
 * Specify Hooks/Filters
 */
add_action( 'admin_menu', 'academiathemes_add_menu' );

/**
* The admin menu pages
*/
function academiathemes_add_menu(){
	
	add_theme_page( __('Museo Lite Theme','museo'), __('Museo Lite Theme','museo'), 'edit_theme_options', ILOVEWP_PAGE_BASENAME, 'academiathemes_settings_page_doc' ); 

}

// ************************************************************************************************************

/*
 * Theme Documentation Page HTML
 * 
 * @return echoes output
 */
function academiathemes_settings_page_doc() {
	// get the settings sections array
	$theme_data = wp_get_theme();
	?>
	
	<div class="academiathemes-wrapper">
		<div class="academiathemes-header">
			<div id="academiathemes-theme-info">
				<div class="academiathemes-message-image">
					<img class="academiathemes-screenshot" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png" alt="<?php esc_attr_e( 'Museo Theme Screenshot', 'museo' ); ?>" />
				</div><!-- ws fix
				--><p><?php 

					echo sprintf( 
					/* translators: Theme name and version */
					__( '<span class="theme-name">%1$s Lite Theme</span> <span class="theme-version">(version %2$s)</span>', 'museo' ), 
					esc_html($theme_data->name),
					esc_html($theme_data->version)
					); ?></p>
					<p class="theme-buttons"><a class="button button-primary" href="<?php echo esc_url(ILOVEWP_THEME_DETAILS); ?>" rel="noopener" target="_blank"><?php esc_html_e('Theme Details','museo'); ?></a>
				<a class="button button-primary" href="<?php echo esc_url(ILOVEWP_THEME_DEMO); ?>" rel="noopener" target="_blank"><?php esc_html_e('Theme Demo','museo'); ?></a>
				<?php if ( ILOVEWP_THEME_VIDEO_GUIDE ) { ?><a class="button button-primary academiathemes-button academiathemes-button-youtube" href="<?php echo esc_url(ILOVEWP_THEME_VIDEO_GUIDE); ?>" rel="noopener" target="_blank"><span class="dashicons dashicons-youtube"></span> <?php esc_html_e('Theme Video Tutorial','museo'); ?></a><?php } ?></p>
			</div><!-- #academiathemes-theme-info -->
		</div><!-- .academiathemes-header -->
		
		<div class="academiathemes-documentation">

			<ul class="academiathemes-doc-columns clearfix">
				<li class="academiathemes-doc-column academiathemes-doc-column-1">
					<div class="academiathemes-doc-column-wrapper">
						<div class="doc-section">
							<h3 class="column-title"><span class="academiathemes-icon dashicons dashicons-editor-help"></span><span class="academiathemes-title-text"><?php esc_html_e('Documentation and Support','museo'); ?></span></h3>
							<div class="academiathemes-doc-column-text-wrapper">
								<?php if ( ILOVEWP_THEME_LITE && ILOVEWP_THEME_SUPPORT_FORUM_URL ) { ?><p><?php 
								echo sprintf( 
								/* translators: Theme name and link to WordPress.org Support forum for the theme */
								__( 'Support for %1$s Theme is provided in the official WordPress.org community support forums. ', 'museo' ), 
								esc_html($theme_data->name)	); ?></p><?php } elseif ( ILOVEWP_THEME_PRO ) { ?>
									<p><?php esc_html_e('The usual response time is less than 45 minutes during regular work hours, Monday through Friday, 9:00am - 6:00pm (GMT+01:00). <br>Response time can be slower outside of these hours.','museo'); ?></p>
								<?php } ?>

								<p class="doc-buttons"><a class="button button-primary" href="<?php echo esc_url(ILOVEWP_THEME_DOCUMENTATION_URL); ?>" rel="noopener" target="_blank"><?php esc_html_e('View Museo Documentation','museo'); ?></a><?php if ( ILOVEWP_THEME_SUPPORT_FORUM_URL ) { ?> <a class="button button-secondary" href="<?php echo esc_url(ILOVEWP_THEME_SUPPORT_FORUM_URL); ?>" rel="noopener" target="_blank"><?php esc_html_e('Go to Museo Support Forum','museo'); ?></a><?php } ?></p>

							</div><!-- .academiathemes-doc-column-text-wrapper-->
						</div><!-- .doc-section -->
						<?php if ( ILOVEWP_THEME_VIDEO_GUIDE ) { ?>
						<div class="doc-section">

							<h3 class="column-title"><span class="academiathemes-icon dashicons dashicons-youtube"></span><span class="academiathemes-title-text"><?php esc_html_e('Theme Video Tutorial','museo'); ?></span></h3>
							<div class="academiathemes-doc-column-text-wrapper">
							
								<p><strong><?php esc_html_e('Click the image below to open the video guide in a new browser tab.','museo'); ?></strong></p>
								<p><a href="<?php echo esc_url(ILOVEWP_THEME_VIDEO_GUIDE); ?>" rel="noopener" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/ilovewp-admin/images/museo-video-preview.jpg" class="video-preview" alt="<?php esc_attr_e('Museo Theme Video Tutorial','museo'); ?>" /></a></p>

							</div><!-- .academiathemes-doc-column-text-wrapper-->

						</div><!-- .doc-section -->
						<?php } ?>
						<div class="doc-section">
							<?php
							$current_user = wp_get_current_user();

							?>
							<h3 class="column-title"><span class="academiathemes-icon dashicons dashicons-email-alt"></span><span class="academiathemes-title-text"><?php esc_html_e('Subscribe to our newsletter','museo'); ?></span></h3>
							<div class="academiathemes-doc-column-text-wrapper">
								<form action="https://ilovewp.us14.list-manage.com/subscribe/post?u=b9a9c29fe8fb1b02d49b2ba2b&amp;id=18a2e743db" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
									<p class="newsletter-description"><?php esc_html_e('We send out the newsletter once every few months. It contains information about our new themes and important theme updates.','museo'); ?></p>
									<div id="mc_embed_signup_scroll" style="margin: 24px 0; ">
										<input type="email" value="<?php echo esc_attr($current_user->user_email); ?>" name="EMAIL" class="email" id="mce-EMAIL" style="min-width: 250px; padding: 2px 8px;" placeholder="email address" required="">
										<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b9a9c29fe8fb1b02d49b2ba2b_18a2e743db" tabindex="-1" value=""></div>
										<input type="submit" value="<?php esc_attr_e('Subscribe','museo'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button button-primary">
									</div><!-- #mc_embed_signup_scroll -->
									<p class="newsletter-disclaimer" style="font-size: 14px;"><?php esc_html_e('We use Mailchimp as our marketing platform. By clicking above to subscribe, you acknowledge that your information will be transferred to Mailchimp for processing.','museo'); ?></p>
								</form>

							</div><!-- .academiathemes-doc-column-text-wrapper-->
						</div><!-- .doc-section -->
						<?php if ( ILOVEWP_THEME_REVIEW_URL ) { ?>
						<div class="doc-section">
							<h3 class="column-title"><span class="academiathemes-icon dashicons dashicons-awards"></span><span class="academiathemes-title-text"><?php esc_html_e('Leave a Review','museo'); ?></span></h3>
							<div class="academiathemes-doc-column-text-wrapper">
								<p><?php esc_html_e('If you enjoy using Museo Theme, please leave a review for it on WordPress.org. It helps us continue providing updates and support for it.','museo'); ?></p>

								<p class="doc-buttons"><a class="button button-primary" href="<?php echo esc_url(ILOVEWP_THEME_REVIEW_URL); ?>" rel="noopener" target="_blank"><?php esc_html_e('Write a Review for Museo','museo'); ?></a></p>

							</div><!-- .academiathemes-doc-column-text-wrapper-->
						</div><!-- .doc-section -->
						<?php } ?>
					</div><!-- .academiathemes-doc-column-wrapper -->
				</li><!-- .academiathemes-doc-column --><li class="academiathemes-doc-column academiathemes-doc-column-2">
					<div class="academiathemes-doc-column-wrapper">
						<?php if ( ILOVEWP_THEME_UPGRADE_URL ) { ?>
						<div class="doc-section">
							<h3 class="column-title"><span class="academiathemes-icon dashicons dashicons-cart"></span><span class="academiathemes-title-text"><?php esc_html_e('Upgrade to Museo Pro','museo'); ?></span></h3>
							<div class="academiathemes-doc-column-text-wrapper">
								<p><?php 
								echo sprintf( 
								/* translators: Theme name and link to WordPress.org Support forum for the theme */
								__( 'If you like the free version of %1$s Theme, you will love the PRO version.', 'museo' ), 
								esc_html($theme_data->name)	); ?></p>
								<p><?php esc_html_e('You will be able to create an even more unique website using the additional custom widgets, templates and customization options.','museo'); ?><br>

								<p class="doc-buttons"><a class="button button-primary" href="<?php echo esc_url(ILOVEWP_THEME_UPGRADE_URL); ?>" rel="noopener" target="_blank"><?php esc_html_e('Upgrade to Museo PRO','museo'); ?></a><?php if ( ILOVEWP_THEME_VIDEO_COMPARISON ) { ?><a class="button button-primary academiathemes-button academiathemes-button-youtube" href="<?php echo esc_url(ILOVEWP_THEME_VIDEO_COMPARISON); ?>" rel="noopener" target="_blank"><span class="dashicons dashicons-youtube"></span> <?php esc_html_e('Video: Museo vs Museo Pro','museo'); ?></a><?php } ?></p>

								<table class="theme-comparison-table">
									<tr>
										<th class="table-feature-title"><?php esc_html_e('Feature','museo'); ?></th>
										<th class="table-lite-value"><?php esc_html_e('Museo Lite','museo'); ?></th>
										<th class="table-pro-value"><?php esc_html_e('Museo PRO','museo'); ?></th>
									</tr>
									<tr>
										<td><div class="academia-tooltip"><span class="dashicons dashicons-editor-help"></span><span class="academia-tooltiptext"><?php esc_html_e('You can use the theme on any number of websites for as long as you wish.','museo'); ?></span></div><?php esc_html_e('Unlimited theme usage','museo'); ?></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e('Responsive Layout','museo'); ?></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e('Color Customization','museo'); ?></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
									</tr>
									<tr>
										<td><div class="academia-tooltip"><span class="dashicons dashicons-editor-help"></span><span class="academia-tooltiptext"><?php esc_html_e('Change the font and font size for the main elements on the website directly from the Customizer.','museo'); ?></span></div><?php esc_html_e('Font Customization','museo'); ?></td>
										<td><span class="dashicons dashicons-minus"></span></td>
										<td><span class="dashicons dashicons-yes-alt"></span> <strong><?php esc_html_e('1000+ Google Fonts','museo'); ?></strong></td>
									</tr>
									<tr>
										<td><div class="academia-tooltip"><span class="dashicons dashicons-editor-help"></span><span class="academia-tooltiptext"><?php esc_html_e('Enable/disable the primary and secondary sidebars for the full website.','museo'); ?></span></div><?php esc_html_e('Global Layout Settings','museo'); ?></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
									</tr>
									<tr>
										<td><div class="academia-tooltip"><span class="dashicons dashicons-editor-help"></span><span class="academia-tooltiptext"><?php esc_html_e('Enable/disable the primary and secondary sidebars separately for each page or post.','museo'); ?></span></div><?php esc_html_e('Separate Layout Settings for each Page & Post','museo'); ?></td>
										<td><span class="dashicons dashicons-minus"></span></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e('Custom Widgets','museo'); ?></td>
										<td><?php esc_html_e('0','museo'); ?></td>
										<td><div class="academia-tooltip"><strong><?php esc_html_e('2','museo'); ?></strong><span class="academia-tooltiptext"><?php esc_html_e('Gain access to two more custom widgets: "Call to Action" and "Featured Page".','museo'); ?></span></div></td>
									</tr>
									<tr>
										<td><?php esc_html_e('Widgetized Areas','museo'); ?></td>
										<td><?php esc_html_e('7','museo'); ?></td>
										<td><?php esc_html_e('10','museo'); ?></td>
									</tr>
									<tr>
										<td><div class="academia-tooltip"><span class="dashicons dashicons-editor-help"></span><span class="academia-tooltiptext"><?php esc_html_e('Import the demo content for an easier start with the theme.','museo'); ?></span></div><?php esc_html_e('Demo Content Importer','museo'); ?></td>
										<td><span class="dashicons dashicons-minus"></span></td>
										<td><span class="dashicons dashicons-yes-alt"></span></td>
									</tr>
									<tr>
										<td><?php esc_html_e('Support','museo'); ?></td>
										<td><div class="academia-tooltip"><?php esc_html_e('Nonpriority','museo'); ?><span class="academia-tooltiptext"><?php esc_html_e('Support is provided in the WordPress.org community forums.','museo'); ?></span></div></td>
										<td><div class="academia-tooltip"><strong><?php esc_html_e('Priority Support','museo'); ?></strong><span class="academia-tooltiptext"><?php esc_html_e('Quick and friendly support is available via email and Skype.','museo'); ?></span></div></td>
									</tr>
									<tr>
										<td colspan="3" style="text-align: center;"><a class="button button-primary" href="<?php echo esc_url(ILOVEWP_THEME_UPGRADE_URL); ?>" rel="noopener" target="_blank"><?php esc_html_e('Upgrade to Museo PRO','museo'); ?></a>
										</td>
									</tr>
								</table>

							</div><!-- .academiathemes-doc-column-text-wrapper-->
						</div><!-- .doc-section -->
						<?php } ?>
					</div><!-- .academiathemes-doc-column-wrapper -->
				</li><!-- .academiathemes-doc-column -->
			</ul><!-- .academiathemes-doc-columns -->

		</div><!-- .academiathemes-documentation -->

	</div><!-- .academiathemes-wrapper -->

<?php }