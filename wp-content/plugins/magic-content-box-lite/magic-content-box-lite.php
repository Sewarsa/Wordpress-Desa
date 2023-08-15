<?php
    /*
     * Plugin Name:       Magic Content Box Lite
     * Plugin URI:        https://afthemes.com/plugins/
     * Description:       A beautiful series of CTA (call to action) or page content section Gutenberg blocks for WordPress to help you quickly create the website you’ve always desired.
     * Version:           1.0.8
     * Author:            AF themes
     * Author URI:        https://afthemes.com
     * Text Domain:       magic-content-box-lite
     * License:           GPL-2.0+
     * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
     */
    
    defined('ABSPATH') or die('No script kiddies please!');  // prevent direct access
    
    if (!class_exists('MagicContentBoxLite_')) :
        
        class MagicContentBoxLite_
        {
            
            
            /**
             * Plugin version.
             *
             * @var string
             */
            const VERSION = '1.0.8';
            
            /**
             * Instance of this class.
             *
             * @var object
             */
            protected static $instance = null;
            
            
            /**
             * Initialize the plugin.
             */
            public function __construct()
            {
                
                /**
                 * Define global constants
                 **/
                defined('MAGIC_CONTENT_BOX_LITE_BASE_FILE') or define('MAGIC_CONTENT_BOX_LITE_BASE_FILE', __FILE__);
                defined('MAGIC_CONTENT_BOX_LITE_BASE_DIR') or define('MAGIC_CONTENT_BOX_LITE_BASE_DIR', dirname(MAGIC_CONTENT_BOX_LITE_BASE_FILE));
                defined('MAGIC_CONTENT_BOX_LITE_PLUGIN_URL') or define('MAGIC_CONTENT_BOX_LITE_PLUGIN_URL', plugin_dir_url(__FILE__));
                defined('MAGIC_CONTENT_BOX_LITE_PLUGIN_DIR') or define('MAGIC_CONTENT_BOX_LITE_PLUGIN_DIR', plugin_dir_path(__FILE__));

                defined( 'MAGIC_CONTENT_BOX_LITE_SHOW_PRO_NOTICES' ) || define( 'MAGIC_CONTENT_BOX_LITE_SHOW_PRO_NOTICES', true );
                defined( 'MAGIC_CONTENT_BOX_LITE_VERSION' ) || define( 'MAGIC_CONTENT_BOX_LITE_VERSION', '1.0.8' );

                
                
                include_once 'src/init.php';
                include_once  'src/fonts.php';
              

            } // end of constructor
            
            /**
             * Return an instance of this class.
             *
             * @return object A single instance of this class.
             */
            public static function get_instance()
            {
                
                // If the single instance hasn't been set, set it now.
                if (null == self::$instance) {
                    self::$instance = new self;
                }
                return self::$instance;
            }
            
            
        }// end of the class
        
        add_action('plugins_loaded', array('MagicContentBoxLite_', 'get_instance'), 0);
    
    endif;
