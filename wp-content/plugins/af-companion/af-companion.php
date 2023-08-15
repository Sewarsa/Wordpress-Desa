<?php
   /*
    Plugin Name: AF Companion
    Plugin URI: https://wordpress.org/plugins/af-companion/
    Description: Import AF themes starter content, widgets and theme settings with one click.
    Version: 1.2.4
    Author: AF themes
    Author URI: https://www.afthemes.com
    License: GPL3
    License URI: https://www.gnu.org/licenses/gpl.html
    Text Domain: af-companion
    */
// Block direct access to the main plugin file.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Display admin error message if PHP version is older than 5.3.2.
 * Otherwise execute the main plugin class.
 */
if ( version_compare( phpversion(), '5.3.2', '<' ) ) {

	/**
	 * Display an admin error notice when PHP is older the version 5.3.2.
	 * Hook it to the 'admin_notices' action.
	 */
	function AFTC_old_php_admin_error_notice() {
		$message = sprintf( esc_html__( 'The %2$sAF Companion%3$s plugin requires %2$sPHP 5.3.2+%3$s to run properly. Please contact your hosting company and ask them to update the PHP version of your site to at least PHP 5.3.2.%4$s Your current version of PHP: %2$s%1$s%3$s', 'af-companion' ), phpversion(), '<strong>', '</strong>', '<br>' );

		printf( '<div class="notice notice-error"><p>%1$s</p></div>', wp_kses_post( $message ) );
	}
	add_action( 'admin_notices', 'AFTC_old_php_admin_error_notice' );
}
else {

	// Current version of the plugin.
	define( 'AFTC_VERSION', '1.2.3' );

	// Path/URL to root of this plugin, with trailing slash.
	define( 'AFTC_PATH', plugin_dir_path( __FILE__ ) );
	define( 'AFTC_URL', plugin_dir_url( __FILE__ ) );

	// Require main plugin file.
	require AFTC_PATH . 'inc/class-aftc-main.php';

	// Instantiate the main plugin class *Singleton*.
	$AF_Companion = AF_Companion::getInstance();
}