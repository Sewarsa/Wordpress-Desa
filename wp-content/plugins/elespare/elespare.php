<?php
/**
 * Elespare - News, Magazine and Blog Addons for Elementor (Free Widgets, Templates and Header/Footer Builder)
 *
 * @package Elespare
 *
 * Plugin Name: Elespare
 * Description: News, Magazine and Blog Addons for Elementor (Free Widgets, Templates and Header/Footer Builder)
 * Plugin URI:  https://afthemes.com/plugins/elespare/
 * Version:     2.0.2
 * Elementor tested up to: 3.13.3
 * Elementor Pro tested up to: 3.13.2
 * Author:      Elespare
 * Author URI:  https://www.afthemes.com/plugins/elespare/
 * Text Domain: elespare
 */


if ( ! defined( 'ABSPATH' ) ) {
    // Exit if accessed directly.
    exit;
}
define( 'ELESPARE_VERSION', '2.0.2' );
define( 'ELESPARE', __FILE__ );
define( 'ELESPARE_DIR_PATH', plugin_dir_path( ELESPARE ) );
define( 'ELESPARE_DIR_URL', plugin_dir_url( ELESPARE ) );
defined( 'ELESPARE_SHOW_PRO_NOTICES' ) || define( 'ELESPARE_SHOW_PRO_NOTICES', true );

    /**
     * Main Elespare Class
     *
     * The init class that runs the Elementor Elespare plugin.
     * Intended To make sure that the plugin's minimum requirements are met.
     * You should only modify the constants to match your plugin's needs.
     *
     * Any custom code should go inside Plugin Class in the class-widgets.php file.
     */
    final class Elespare {
        
        /**
         * Plugin Version
         *
         * @since 1.0.0
         * @var string The plugin version.
         */
        const VERSION = '1.2.0';
        
        /**
         * Minimum Elementor Version
         *
         * @since 1.0.0
         * @var string Minimum Elementor version required to run the plugin.
         */
        const MINIMUM_ELEMENTOR_VERSION = '2.8.0';
        
        /**
         * Minimum PHP Version
         *
         * @since 1.0.0
         * @var string Minimum PHP version required to run the plugin.
         */
        const MINIMUM_PHP_VERSION = '5.4';
        
        /**
         * Constructor
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct() {
            // Load the translation.
            add_action( 'init', array( $this, 'i18n' ) );

            // Initialize the plugin.
            add_action( 'plugins_loaded', array( $this, 'init' ) );

            // Register widget style
            add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'ElespareWidgetStyle' ] );

            add_action( 'elementor/elements/categories_registered', [ $this, 'register_widget_category' ] );

            add_action( 'activated_plugin',  [ $this, 'elespare_activation_redirect' ] );
        }

        public function ElespareWidgetStyle()
        {
            wp_register_style( 'elespare-posts-grid', plugins_url( 'dist/elespare.style.build.min.css', ELESPARE ), array(), self::VERSION );
            wp_enqueue_style( 'elespare-posts-grid' );
        }
        
        /**
         * Load Textdomain
         *
         * Load plugin localization files.
         * Fired by `init` action hook.
         *
         * @since 1.0.0
         * @access public
         */
        public function i18n() {
            load_plugin_textdomain( 'elespare' );
        }
        
        /**
         * Initialize the plugin
         *
         * Validates that Elementor is already loaded.
         * Checks for basic plugin requirements, if one check fail don't continue,
         * if all check have passed include the plugin class.
         *
         * Fired by `plugins_loaded` action hook.
         *
         * @since 1.0.0
         * @access public
         */
        public function init() {
            
            add_action( 'elementor/editor/before_enqueue_scripts', [ $this, 'editor_enqueue' ] );

            include_once ELESPARE_DIR_PATH .'inc/admin/class-admin-dashboard.php';

            // Check if Elementor installed and activated.
            if ( ! did_action( 'elementor/loaded' ) ) {
                add_action( 'admin_notices', array( $this, 'admin_notice_missing_main_plugin' ) );
                return;
            }

            // Check for required Elementor version.
            if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
                add_action( 'admin_notices', array( $this, 'admin_notice_minimum_elementor_version' ) );
                return;
            }

            // Check for required PHP version.
            if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
                add_action( 'admin_notices', array( $this, 'admin_notice_minimum_php_version' ) );
                return;
            }

            // Once we get here, We have passed all validation checks so we can safely include our widgets.
            require_once 'class-elespare.php';
            include_once ELESPARE_DIR_PATH.'header-footer/init.php';
            require(ELESPARE_DIR_PATH.'inc/functions.php');
            require(ELESPARE_DIR_PATH.'inc/init.php');



        }

        /**
         * Admin notice
         *
         * Warning when the site doesn't have Elementor installed or activated.
         *
         * @since 1.0.0
         * @access public
         */
        public function admin_notice_missing_main_plugin() {
            $view_demos = __( 'View Demos', 'elespare' );
            $docs_support = __( 'Documentations', 'elespare' );
            $contact_support = __( 'Need Help?', 'elespare' );
            if ( file_exists( WP_PLUGIN_DIR . '/elementor/elementor.php' ) ) {
                $notice_title = __( 'Activate Elementor', 'elespare' );
                $notice_url = wp_nonce_url( 'plugins.php?action=activate&plugin=elementor/elementor.php&plugin_status=all&paged=1', 'activate-plugin_elementor/elementor.php' );
            }else{
                $notice_title = __( 'Install Elementor', 'elespare' );
                $notice_url = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=elementor' ), 'install-plugin_elementor' );
            }

            $messages = sprintf(
                /* translators: 1: Plugin name 2: Elementor */
                esc_html__( '%3$s %1$s requires %2$s to be installed and activated to get the outstanding News,Magazine and Blog elements (widgets) and Header/Footer builder.%4$s %3$s %5$s %6$s %7$s %8$s %4$s', 'elespare' ),
                '<strong>' . esc_html__( 'Elespare', 'elespare' ) . '</strong>',
                '<strong>' . esc_html__( 'Elementor', 'elespare' ) . '</strong>',
                '<p>',
                '</p>',
                '<a class="button-primary" href="' . esc_url( $notice_url ) . '">' . $notice_title . '</a>',
                '<a class="button-secondary" target="_blank" href="' . esc_url( 'http://afthemes.com/plugins/elespare/' ) . '">' . $view_demos . '</a>',
                '<a class="button-secondary" target="_blank" href="' . esc_url( 'https://afthemes.com/plugins/elespare/elespare-docs/' ) . '">' . $docs_support . '</a>',
                '<a class="button-secondary" target="_blank" href="' . esc_url( 'http://afthemes.com/supports/' ) . '">' . $contact_support . '</a>'

            );

    
            printf( '<div class="notice notice-warning is-dismissible">%1$s</div>', $messages );
        }

        /**
         * Admin notice
         *
         * Warning when the site doesn't have a minimum required Elementor version.
         *
         * @since 1.0.0
         * @access public
         */
        public function admin_notice_minimum_elementor_version() {
//            deactivate_plugins( plugin_basename( ELESPARE ) );

            $ele_version =  sprintf(
                    '<div class="notice notice-warning is-dismissible"><p><strong>"%1$s"</strong> requires <strong>"%2$s"</strong> version %3$s or greater.</p></div>',
                'Elespare',
                'Elementor',
                self::MINIMUM_ELEMENTOR_VERSION
            );

            echo wp_kses($ele_version, array(
                'div' => array(
                    'class'  => array(),
                    'p'      => array(),
                    'strong' => array(),
                ),
            ));
        }

        /**
         * Admin notice
         *
         * Warning when the site doesn't have a minimum required PHP version.
         *
         * @since 1.0.0
         * @access public
         */
        public function admin_notice_minimum_php_version() {
//            deactivate_plugins( plugin_basename( ELESPARE ) );

            $ele_php_version  = sprintf(

                    '<div class="notice notice-warning is-dismissible"><p><strong>"%1$s"</strong> requires <strong>"%2$s"</strong> version %3$s or greater.</p></div>',
                'Elespare',
                'PHP',
                self::MINIMUM_PHP_VERSION
            );

            echo wp_kses($ele_php_version, array(
                'div' => array(
                    'class'  => array(),
                    'p'      => array(),
                    'strong' => array(),
                ),
            ));
        }


        public function register_widget_category( $elements_manager ) {

            $elements_manager->add_category(
                'elespare',
                [
                    'title' => esc_html__( 'Elespare', 'elespare' ),
                    'icon' => 'fa fa-plug',
                ]
            );

        }

        function editor_enqueue(){
            wp_enqueue_style(
                'elespare-icons',
                ELESPARE_DIR_URL . 'assets/font/elespare-icons.css',
                null,
                ELESPARE_VERSION
            );
               
            

            global $wp_query;
            $id = $wp_query->post->ID;
                wp_enqueue_script( 'elespare-elementor-modal', ELESPARE_DIR_URL . 'assets/js/elementor-modal.js', [ 'jquery' ], ELESPARE_VERSION );
    
                wp_enqueue_script(
                    'elespare-library-react',
                    ELESPARE_DIR_URL . 'dist/main_js.build.min.js',
                    [
                    'wp-editor',
                    'elespare-elementor-modal'],
                    ELESPARE_VERSION,
                    true
                );
    
                wp_localize_script( 'elespare-library-react', 'AFTLibrary', array(
                    'ajaxurl' => admin_url( 'admin-ajax.php' ),
                    'baseUrl' => ELESPARE_DIR_URL,
                    'externalUrl'=>'https://templatespare.com/wp-content/uploads/elespare/free/',
                    'apiUrl' => site_url().'/index.php?rest_route=/',
                    'currentPage'=>$id,
                    'key' =>  '',
                    'host' => $_SERVER['HTTP_HOST'],
                    
                    
                    
                ) );
        }

        function elespare_activation_redirect($plugin){
            if( $plugin == plugin_basename( ELESPARE ) ) {
                exit( wp_redirect( add_query_arg(['page' => 'elespare_dashboard'], admin_url('admin.php') )));
            }
        }
    }

// Instantiate Elespare.
    new Elespare();