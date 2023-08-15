<?php
/**
 * Plugin Name: Advanced Post Queries
 * Plugin URI: https://wordpress.org/plugins/acf-frontend-form-element/
 * Description: An Elementor extension that gives you more options for quering your posts widget without coding.
 * Version:     1.1.1
 * Author:      Shabti Kaplan
 * Author URI:  https://kaplanwebdev.com/
 * Text Domain: advanced-post-queries
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'APQ_NAME', plugin_basename( __FILE__ ) );
define( 'APQ_URL', plugin_dir_url( __FILE__  ) );


/**
 * Main Plugin Class
 *
 * The main class that initiates and runs the plugin.
 *
 * @since 1.0.0
 */
final class Advanced_Post_Queries_Elementor {

	const VERSION = '1.1.1';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const MINIMUM_PHP_VERSION = '7.0';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var ACF_Elementor_Form The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return ACF_Elementor_Form An instance of the class.
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {

		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );

	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 *
	 * Fired by `init` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function i18n() {

		load_plugin_textdomain( 'advanced-post-queries' );

	}

	/**
	 * Initialize the plugin
	 *
	 * Load the plugin only after Elementor (and other plugins) are loaded.
	 * Checks for basic plugin requirements, if one check fail don't continue,
	 * if all check have passed load the files required to run the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) || ! function_exists( 'elementor_pro_load_plugin' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}
		
		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}
		
		//add_filter( 'plugin_row_meta', [ $this, 'dpq_row_meta' ], 10, 2 );
		
		require_once ( __DIR__ . '/helpers.php' );		
		require_once ( __DIR__ . '/advanced-post-queries/module.php' );		
	
	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'advanced-post-queries' ),
			'<strong>' . esc_html__( 'Advanced Post Queries', 'advanced-post-queries' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor and Elementor Pro', 'advanced-post-queries' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}
	
	
	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'advanced-post-queries' ),
			'<strong>' . esc_html__( 'Advanced Post Queries', 'advanced-post-queries' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'advanced-post-queries' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'advanced-post-queries' ),
			'<strong>' . esc_html__( 'Advanced Post Queries', 'advanced-post-queries' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'advanced-post-queries' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}
	
	function dpq_row_meta( $links, $file ) {    
		if ( ACFEF_NAME == $file ) {
			$row_meta = array(
			  'video' => '<a href="' . esc_url( 'https://www.youtube.com/channel/UC8ykyD--K6pJmGmFcYsaD-w/playlists' ) . '" target="_blank" aria-label="' . esc_attr__( 'Video Tutorials', 'advanced-post-queries' ) . '" >' . esc_html__( 'Video Tutorials', 'advanced-post-queries' ) . '</a>'
			);

			return array_merge( $links, $row_meta );
		}
		return (array) $links;
	}

}

Advanced_Post_Queries_Elementor::instance();