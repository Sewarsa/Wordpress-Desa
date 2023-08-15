<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class museo_notice_upgrade extends museo_notice {

	public function __construct() {

		add_action( 'wp_loaded', array( $this, 'upgrade_notice' ), 20 );
		add_action( 'wp_loaded', array( $this, 'hide_notices' ), 15 );

		$this->current_user_id       = get_current_user_id();

	}

	public function upgrade_notice() {
		
		$welcome_notice_was_dismissed = $this->get_notice_status('welcome');

		if ( ! get_option( 'museo_theme_installed_time' ) ) {
			update_option( 'museo_theme_installed_time', time() );
		}

		$this_notice_was_dismissed = $this->get_notice_status('upgrade-user-' . $this->current_user_id);
		
		if ( !$this_notice_was_dismissed && $welcome_notice_was_dismissed ) {
			add_action( 'admin_notices', array( $this, 'upgrade_notice_markup' ) ); // Display this notice.
		}

	}

	/**
	 * Show HTML markup if conditions meet.
	 */
	public function upgrade_notice_markup() {
		
		$dismiss_url = wp_nonce_url(
			remove_query_arg( array( 'activated' ), add_query_arg( 'museo-hide-notice', 'upgrade-user-' . $this->current_user_id ) ),
			'museo_hide_notices_nonce',
			'_museo_notice_nonce'
		);

		$theme_data	 	= wp_get_theme();
		$current_user 	= wp_get_current_user();

		if ( ( get_option( 'museo_theme_installed_time' ) > strtotime( '-2 day' ) ) ) {
			return;
		}

		?>
		<div id="message" class="notice notice-success academiathemes-notice academiathemes-upgrade-notice">
			<a class="academiathemes-message-close notice-dismiss" href="<?php echo esc_url( $dismiss_url ); ?>"></a>
			<div class="academiathemes-message-content">

				<div class="academiathemes-message-image">
					<a href="<?php echo esc_url( admin_url( 'themes.php?page=museo-doc' ) ); ?>"><img class="academiathemes-screenshot" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png" alt="<?php esc_attr_e( 'Museo', 'museo' ); ?>" /></a>
				</div><!-- ws fix
				--><div class="academiathemes-message-text">
				
					<p>
						<?php
						printf(
							/* Translators: %1$s current user display name. */
							esc_html__(
								'Dear %1$s! I hope you are happy with everything that the %2$s has to offer. %3$sIf you like the free version of Museo Theme, you will love the PRO version. %3$s%4$s contains many improvements and features that were suggested by our users.',
								'museo'
							),
							'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
							'<a href="' . esc_url( admin_url( 'themes.php?page=museo-doc' ) ) . '">' . esc_html( $theme_data->Name ) . ' Theme</a>',
							'<br>',
							'<strong><a href="https://www.ilovewp.com/product/museo-pro/">Museo Pro</a></strong>');
						?>
					</p>

					<p class="notice-buttons"><a href="https://www.ilovewp.com/themes/museo-lite/?utm_source=dashboard&utm_medium=upgrade-notice&utm_campaign=museo-lite&utm_content=notice-comparison-link" class="btn button button-primary academiathemes-button" target="_blank" rel="noopener"><span class="dashicons dashicons-editor-table"></span> <?php esc_html_e( 'Museo vs Museo PRO Comparison', 'museo' ); ?></a> <a href="https://www.ilovewp.com/product/museo-pro/?utm_source=dashboard&utm_medium=upgrade-notice&utm_campaign=museo-lite&utm_content=notice-upgrade-link" class="btn button button-primary academiathemes-button" target="_blank"><?php esc_html_e( 'Museo PRO Details', 'museo' ); ?></a></p>

				</div><!-- .academiathemes-message-text -->

			</div><!-- .academiathemes-message-content -->

		</div><!-- #message -->
		<?php
	}
}

new museo_notice_upgrade();