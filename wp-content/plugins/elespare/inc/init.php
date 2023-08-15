<?php


defined('ABSPATH') or die('No script kiddies please!'); 

if(!class_exists('AFT_Elespare_Addons')){

    class AFT_Elespare_Addons{
         /**
         * Plugin version.
         *
         * @var string
         */
        const VERSION = '1.0.0';

        /**
         * Instance of this class.
         *
         * @var object
         */
        protected static $instance = null;

        /**
         * Initialize the plugin.
         */

        public static function get_instance()
        {
            // If the single instance hasn't been set, set it now.
            if (null == self::$instance) {
                self::$instance = new self;
            }

            return self::$instance;
        }

        public function __construct() {
           
            add_action( 'elementor/preview/enqueue_styles', [ $this, 'enqueue_editor_scripts' ] );
            add_action( 'elementor/init', array($this,'elespare_load_files'));
            add_action('rest_api_init',array($this,'elespare_register_plugins_routes'));
            
        }

        

        public function elespare_load_files(){
            
            require ELESPARE_DIR_PATH.'inc/request-rest-api.php';
            require ELESPARE_DIR_PATH.'inc/admin/class-base.php';
           
        }

         function elespare_register_plugins_routes(){
            $afdl_rest =  new Elespare_RestApi_Request();
            $afdl_rest->elespare_register_routes();
        }

        public function enqueue_editor_scripts (){
            wp_enqueue_style(
                'elespare-styles',
                ELESPARE_DIR_URL . 'assets/admin/css/admin-style.css',
                null,
                ELESPARE_VERSION
            );
        }

        
    }


    add_action('plugins_loaded', array('AFT_Elespare_Addons', 'get_instance'), 0);
}
new AFT_Elespare_Addons();