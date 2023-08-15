<?php
/**
 * Main AF Companion plugin class/file.
 *
 * @package aftc
 */

// Include files.
require AFTC_PATH . 'inc/class-aftc-helpers.php';
require AFTC_PATH . 'inc/class-aftc-importer.php';
require AFTC_PATH . 'inc/class-aftc-widget-importer.php';
require AFTC_PATH . 'inc/class-aftc-customizer-importer.php';
require AFTC_PATH . 'inc/class-aftc-logger.php';
require AFTC_PATH . 'inc/demo-importer.php';
require AFTC_PATH . 'inc/import-packages/import-packages.php';


/**
 * AF Companion class, so we don't have to worry about namespaces.
 */
class AF_Companion
{

    /**
     * @var $instance the reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Private variables used throughout the plugin.
     */
    private $importer, $plugin_page, $import_files, $logger, $log_file_path, $selected_index, $selected_import_files, $microtime, $frontend_error_messages, $ajax_call_number;

    private $plugin_page_setup = array();

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return AF_Companion the *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }


    /**
     * Class construct function, to initiate the plugin.
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {

        // Actions.
        add_action('admin_menu', array($this, 'create_plugin_page'));
        add_action('admin_enqueue_scripts', array($this, 'admin_enqueue_scripts'));
        add_action('wp_ajax_AFTC_import_demo_data', array($this, 'import_demo_data_ajax_callback'));
        add_action('after_setup_theme', array($this, 'setup_plugin_with_filter_data'));
        add_action('plugins_loaded', array($this, 'load_textdomain'));
    }


    /**
     * Private clone method to prevent cloning of the instance of the *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }


    /**
     * Private unserialize method to prevent unserializing of the *Singleton* instance.
     *
     * @return void
     */
    public function __wakeup()
    {
    }


    /**
     * Creates the plugin page and a submenu item in WP Appearance menu.
     */
    public function create_plugin_page()
    {


        $this->plugin_page_setup = apply_filters('af-companion/plugin_page_setup', array(
            'parent_slug' => 'themes.php',
            'page_title' => esc_html__('AF Companion', 'af-companion'),
            'menu_title' => esc_html__('AF Companion', 'af-companion'),
            'capability' => 'import',
            'menu_slug' => 'af-companion',
        ));

        $aft_logo_svg = '<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="405.000000pt" height="402.000000pt" viewBox="0 0 405.000000 402.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,402.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M1808 3775 c-332 -45 -651 -188 -917 -410 -292 -243 -511 -610 -590
-990 -36 -171 -51 -400 -33 -499 l7 -38 60 88 c110 163 224 268 378 349 271
143 598 149 880 17 119 -56 199 -113 292 -206 123 -124 207 -271 257 -454 21
-74 22 -104 27 -677 6 -644 5 -630 57 -676 55 -48 164 -65 222 -35 37 19 78
65 93 101 8 23 11 335 9 1261 -1 1116 0 1237 15 1295 76 292 370 460 664 379
40 -12 76 -18 80 -14 11 12 -152 155 -258 226 -171 114 -339 189 -546 243
-205 53 -483 69 -697 40z"/>
<path d="M2945 2964 c-45 -23 -76 -55 -96 -99 -17 -37 -19 -76 -19 -582 l0
-543 235 0 c256 0 272 -3 314 -56 28 -36 43 -96 35 -141 -9 -47 -66 -110 -112
-123 -21 -5 -133 -10 -249 -10 l-213 0 0 -505 0 -505 58 29 c32 16 99 56 148
90 418 279 693 746 755 1281 25 222 -2 517 -67 714 -46 139 -144 346 -165 346
-4 0 -3 -17 2 -37 5 -21 9 -65 9 -99 0 -57 -2 -63 -37 -97 -44 -45 -96 -61
-153 -48 -88 20 -119 61 -151 199 -17 78 -27 101 -57 134 -19 22 -48 46 -63
54 -37 19 -136 18 -174 -2z"/>
<path d="M1090 2059 c-233 -23 -449 -181 -541 -397 -51 -117 -66 -314 -34
-437 49 -191 182 -355 355 -438 112 -54 178 -69 304 -68 272 0 500 144 611
386 47 101 60 165 60 290 -1 187 -64 342 -190 470 -147 150 -341 216 -565 194z"/>
<path d="M1781 600 c-119 -89 -247 -148 -415 -190 l-109 -27 69 -32 c200 -94
544 -175 544 -129 0 21 -31 403 -33 411 -1 4 -26 -11 -56 -33z"/>
</g>
</svg>';

        $this->plugin_page = add_menu_page(
            $this->plugin_page_setup['page_title'],
            $this->plugin_page_setup['menu_title'],
            $this->plugin_page_setup['capability'],
            $this->plugin_page_setup['menu_slug'],
            apply_filters('af-companion/plugin_page_display_callback_function', array($this, 'display_plugin_page')),
            'data:image/svg+xml;base64,' . base64_encode($aft_logo_svg),
            60
        );

        add_submenu_page(
            'af-companion',
            esc_html__('Import Demo Data', 'af-companion'),
            esc_html__('Import Demo Data', 'af-companion'),
            'import',
            'af-companion',
            apply_filters('af-companion/plugin_page_display_callback_function', array($this, 'display_plugin_page'))
        );

        add_submenu_page(
            'af-companion',
            esc_html__('Documentation', 'af-companion'),
            esc_html__('Documentation', 'af-companion'),
            'manage_options',
            esc_url('https://docs.afthemes.com/')

        );

        add_submenu_page(
            'af-companion',
            esc_html__('Free Themes', 'af-companion'),
            esc_html__('Free Themes', 'af-companion'),
            'manage_options',
            esc_url('https://afthemes.com/products/category/free/')

        );

        add_submenu_page(
            'af-companion',
            esc_html__('Pro Themes', 'af-companion'),
            esc_html__('Pro Themes', 'af-companion'),
            'manage_options',
            esc_url('https://afthemes.com/products/category/pro/')

        );

        add_submenu_page(
            'af-companion',
            esc_html__('Plugins', 'af-companion'),
            esc_html__('Plugins', 'af-companion'),
            'manage_options',
            esc_url('https://afthemes.com/plugins/')

        );


        add_submenu_page(
            'af-companion',
            esc_html__('Videos', 'af-companion'),
            esc_html__('Videos', 'af-companion'),
            'manage_options',
            esc_url('https://www.youtube.com/channel/UCCJKF25c3HZpfaELha-86Hw/')

        );

        add_submenu_page(
            'af-companion',
            esc_html__('Blog', 'af-companion'),
            esc_html__('Blog', 'af-companion'),
            'manage_options',
            esc_url('https://afthemes.com/blog/')

        );

        register_importer($this->plugin_page_setup['menu_slug'], $this->plugin_page_setup['page_title'], $this->plugin_page_setup['menu_title'], apply_filters('af-companion/plugin_page_display_callback_function', array($this, 'display_plugin_page')));
    }


    /**
     * Plugin page display.
     */
    public function display_plugin_page()
    {

        $predefined_themes = $this->import_files;

        if (!empty($this->import_files) && isset($_GET['import-mode']) && 'manual' === $_GET['import-mode']) {
            $predefined_themes = array();
        }


        ?>

        <div class="aftc  wrap  about-wrap">

            <?php ob_start(); ?>
            <a href="https://afthemes.com" target="_blank">
                <img class="aftc__logo" src="<?php echo esc_url(AFTC_URL . '/assets/img/afthemes.png'); ?>"
                     alt="<?php esc_html_e('AF themes', 'af-companion'); ?>"/>
            </a>

            <h1 class="aftc__title"><?php esc_html_e('One Click Demo Import', 'af-companion'); ?></h1>
            <p class="aftc__description"><?php esc_html_e('Setup Your Site in a Single Click', 'af-companion'); ?></p>
            <?php
            $plugin_title = ob_get_clean();

            // Display the plugin title (can be replaced with custom title text through the filter below).
            echo wp_kses_post(apply_filters('af-companion/plugin_page_title', $plugin_title));

            // Display warrning if PHP safe mode is enabled, since we wont be able to change the max_execution_time.
            if (ini_get('safe_mode')) {
                printf(
                    esc_html__('%sWarning: your server is using %sPHP safe mode%s. This means that you might experience server timeout errors.%s', 'af-companion'),
                    '<div class="notice  notice-warning  is-dismissible"><p>',
                    '<strong>',
                    '</strong>',
                    '</p></div>'
                );
            }

            ?>

            <?php
            // Start output buffer for displaying the plugin intro text.
            ob_start();
            ?>

            <div class="aftc__intro-notice  notice  notice-warning  is-dismissible">
                <p><?php esc_html_e('Before you begin, make sure all the required plugins are activated.', 'af-companion'); ?></p>
            </div>

            <div class="aftc__intro-text">

                <ul>
                    <li>
                        <h4 class="about-title"><?php esc_html_e('No other data will be deleted', 'af-companion'); ?></h4>
                        <p><?php esc_html_e('No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.', 'af-companion'); ?></p>
                    </li>
                    <li>
                        <h4 class="about-title"><?php esc_html_e('All demo settings will get imported', 'af-companion'); ?></h4>
                        <p><?php esc_html_e('Posts, pages, images, widgets, menus and other theme settings will get imported.', 'af-companion'); ?></p>
                    </li>
                    <li>
                        <h4 class="about-title"><?php esc_html_e('Ready in a couple of minutes', 'af-companion'); ?></h4>
                        <p><?php esc_html_e('Please click on the Import button only once and wait, it can take a couple of minutes.', 'af-companion'); ?></p>
                    </li>
                </ul>

            </div>

            <?php
            $plugin_intro_text = ob_get_clean();

            // Display the plugin intro text (can be replaced with custom text through the filter below).
            echo wp_kses_post(apply_filters('af-companion/plugin_intro_text', $plugin_intro_text));
            ?>

            <?php if (empty($this->import_files)) : ?>
                <div class="notice  notice-info  is-dismissible">
                    <p><?php esc_html_e('There are no predefined import files available in this theme. Please upload the import files manually!', 'af-companion'); ?></p>
                </div>
            <?php endif; ?>

            <?php if (empty($predefined_themes)) : ?>

                <div class="aftc__file-upload-container">
                    <h2><?php esc_html_e('Manual demo files upload', 'af-companion'); ?></h2>

                    <div class="aftc__file-upload">
                        <h3>
                            <label for="content-file-upload"><?php esc_html_e('Content import', 'af-companion'); ?></label>
                        </h3>
                        <p><?php esc_html_e('Upload a XML file', 'af-companion'); ?></p>
                        <input id="aftc__content-file-upload" type="file" name="content-file-upload">
                    </div>

                    <div class="aftc__file-upload">
                        <h3>
                            <label for="widget-file-upload"><?php esc_html_e('Widget import', 'af-companion'); ?></label>
                        </h3>
                        <p><?php esc_html_e('Upload a WIE or JSON file', 'af-companion'); ?></p>
                        <input id="aftc__widget-file-upload" type="file" name="widget-file-upload">
                    </div>

                    <div class="aftc__file-upload">
                        <h3>
                            <label for="customizer-file-upload"><?php esc_html_e('Customizer import', 'af-companion'); ?></label>
                        </h3>
                        <p><?php esc_html_e('Upload a DAT file', 'af-companion'); ?></p>
                        <input id="aftc__customizer-file-upload" type="file" name="customizer-file-upload">
                    </div>

                    <?php if (class_exists('ReduxFramework')) : ?>
                        <div class="aftc__file-upload">
                            <h3>
                                <label for="redux-file-upload"><?php esc_html_e('Choose a JSON file for Redux import:', 'af-companion'); ?></label>
                            </h3>
                            <input id="aftc__redux-file-upload" type="file" name="redux-file-upload">
                            <div>
                                <label for="redux-option-name"
                                       class="aftc__redux-option-name-label"><?php esc_html_e('Enter the Redux option name:', 'af-companion'); ?></label>
                                <input id="aftc__redux-option-name" type="text" name="redux-option-name">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <p class="aftc__button-container">
                    <button class="aftc__button  button  button-hero  button-primary  js-aftc-import-data"><?php esc_html_e('Import Demo', 'af-companion'); ?></button>


                </p>

            <?php elseif (1 === count($predefined_themes)) : ?>

                <div class="aftc__demo-import-notice  js-aftc-demo-import-notice"><?php
                    if (is_array($predefined_themes) && !empty($predefined_themes[0]['import_notice'])) {
                        echo wp_kses_post($predefined_themes[0]['import_notice']);
                    }
                    ?></div>

                <p class="aftc__button-container">
                    <button class="aftc__button  button  button-hero  button-primary  js-aftc-import-data"><?php esc_html_e('Import Demo', 'af-companion'); ?></button>

                </p>

            <?php else : ?>

                <!-- $demo_json_url grid layout -->
                <div class="aftc__gl  js-aftc-gl">
                    <?php
                    // Prepare navigation data.
                    $categories = AFTC_Helpers::get_all_demo_import_categories($predefined_themes);
                    ?>
                    <?php if (!empty($categories)) : ?>
                        <div class="aftc__gl-header  js-aftc-gl-header">
                            <nav class="aftc__gl-navigation">
                                <ul>
                                    <li class="active"><a href="#all"
                                                          class="aftc__gl-navigation-link  js-aftc-nav-link"><?php esc_html_e('All', 'af-companion'); ?></a>
                                    </li>
                                    <?php foreach ($categories as $key => $name) : ?>
                                        <li><a href="#<?php echo esc_attr($key); ?>"
                                               class="aftc__gl-navigation-link  js-aftc-nav-link"><?php echo esc_html($name); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </nav>
                            <div clas="aftc__gl-search">
                                <input type="search" class="aftc__gl-search-input  js-aftc-gl-search"
                                       name="aftc-gl-search"
                                       value="" placeholder="<?php esc_html_e('Search demos...', 'af-companion'); ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="aftc__gl-item-container  wp-clearfix  js-aftc-gl-item-container">
                        <?php foreach ($predefined_themes as $index => $import_file) :


                            ?>
                            <?php
                            // Prepare import item display data.
                            $img_src = isset($import_file['import_preview_image_url']) ? $import_file['import_preview_image_url'] : '';
                            // Default to the theme screenshot, if a custom preview image is not defined.
                            if (empty($img_src)) {
                                $theme = wp_get_theme();
                                $img_src = $theme->get_screenshot();
                            }

                            ?>
                            <div class="aftc__gl-item js-aftc-gl-item"
                                 data-categories="<?php echo esc_attr(AFTC_Helpers::get_demo_import_item_categories($import_file)); ?>"
                                 data-name="<?php echo esc_attr(strtolower($import_file['import_file_name'])); ?>">
                                <div class="aftc__gl-item-image-container">

                                    <?php if (!empty($img_src)) : ?>
                                        <img class="aftc__gl-item-image" src="<?php echo esc_url($img_src) ?>">
                                    <?php else : ?>
                                        <div class="aftc__gl-item-image  aftc__gl-item-image--no-image"><?php esc_html_e('No preview image.', 'af-companion'); ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="aftc__gl-item-footer <?php echo !empty($import_file['preview_url']) ? esc_attr('aftc__gl-item-footer--with-preview') : ''; ?>">
                                    <h4 class="aftc__gl-item-title"
                                        title="<?php echo esc_attr($import_file['import_file_name']); ?>"><?php echo esc_html($import_file['import_file_name']); ?></h4>
                                    <div class="aftaftc__gl-item-btn-wrap">
                                        <?php if ($import_file['upgrade'] == false):


                                            if (isset($import_file['required_plugins']) && !empty($import_file['required_plugins'])):

                                                $aftc_require_plugins = explode(',', $import_file['required_plugins']);

                                                ?>


                                                <button class="aftc_btn_import  aftc__gl-item-button  button  button-primary"><?php esc_html_e(' Import', 'af-companion'); ?></button>
                                                <div class="aftc_modal">

                                                    <!-- Modal content -->
                                                    <div class="aftc-modal-content">

                                                        <div class="aftc_import_loader"></div>
                                                        <span class="aftc_close">&times;</span>
                                                        <p class="aftc__ajax-loader  js-aftc-ajax-loader af-spiner-loader">
                                                            <span class="spinner af-spinner"></span> <?php esc_html_e('Configuring, please wait!', 'af-companion'); ?>
                                                        </p>
                                                        <div class="aftc-final-msg"></div>
                                                        <div class="aftc_require_plugins">
                                                            <h2> <?php esc_html_e('Following plugins are required to import demo', 'af-companion'); ?></h2>
                                                            <ul class="af-require-plugin-wrap">

                                                                <?php
                                                                $active_plugins = get_option('active_plugins', $aftc_require_plugins);

                                                                if (!empty($aftc_require_plugins)) {
                                                                    $required_plugins_count = 0;
                                                                    foreach ($aftc_require_plugins as $key => $value) {
                                                                        if (in_array($value . '/' . $value . '.php', $active_plugins)) {
                                                                            $required_plugins_count += 1;
                                                                            ?>
                                                                            <li class="af-require-plugin">
                                                                                <?php esc_html_e(ucfirst($value) . ' is active', 'af-companion'); ?>
                                                                            </li>
                                                                            <?php
                                                                        } else {
                                                                            if (!file_exists(WP_PLUGIN_DIR . '/' . $value . '/' . $value . '.php')) {

                                                                                ?>
                                                                                <li class="af-require-plugin">
                                                                                    <?php esc_html_e(ucfirst($value) . ' need to be installed', 'af-companion'); ?>

                                                                                </li>
                                                                                <?php
                                                                            } else {

                                                                                ?>
                                                                                <li class="af-require-plugin">
                                                                                    <?php esc_html_e(ucfirst($value) . ' need to be activated', 'af-companion'); ?>

                                                                                </li>
                                                                                <?php
                                                                            }
                                                                        } ?>

                                                                        <?php
                                                                    }
                                                                }
                                                                ?>

                                                            </ul>

                                                        </div>
                                                        <?php if (absint($required_plugins_count) == count($aftc_require_plugins)): ?>
                                                            <button class="aftc__gl-item-button  button  button-primary  js-aftc-gl-import-data"
                                                                    value="<?php echo esc_attr($index); ?>">
                                                                <?php esc_html_e('Import', 'af-companion'); ?>
                                                            </button>
                                                        <?php else: ?>
                                                            <h2 class="af-final-message" style="display:none">
                                                                <?php esc_html_e('Required plugins are ready for the process. Click the button to import starter demo site.', 'af-companion'); ?>
                                                            </h2>
                                                            <button class="aftc__button  button  button-hero  button-primary  aftc-activate-plugin"
                                                                    data-slugs=<?php echo "'" . json_encode($aftc_require_plugins) . "'"; ?>>
                                                                <?php esc_html_e('Setup Plugins', 'af-companion'); ?>
                                                            </button>
                                                            <button class="aftc__gl-item-button  button  button-primary  js-aftc-gl-import-data"
                                                                    value="<?php echo esc_attr($index); ?>"
                                                                    style="display:none;">
                                                                <?php esc_html_e('Import', 'af-companion'); ?>
                                                            </button>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                            <?php else: ?>
                                                <button class="aftc__gl-item-button  button  button-primary  js-aftc-gl-import-data"
                                                        value="<?php echo esc_attr($index); ?>">
                                                    <?php esc_html_e('Import', 'af-companion'); ?>
                                                </button>
                                            <?php endif; ?>

                                        <?php
                                        else:
                                            ?>
                                            <a class="aftc__gl-item-button  button  button-primary button-upgrade-to-pro"
                                               href="<?php echo esc_url('https://afthemes.com/products/' . $import_file['premium']); ?>"
                                               target="_blank"><?php esc_html_e('Upgrade to Pro', 'af-companion'); ?></a>
                                        <?php endif; ?>
                                        <?php if (!empty($import_file['preview_url'])) : ?>
                                            <a class="aftc__gl-item-button  button"
                                               href="<?php echo esc_url($import_file['preview_url']); ?>"
                                               target="_blank"><?php esc_html_e('Preview', 'af-companion'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="js-aftc-modal-content"></div>

            <?php endif; ?>
            <p class="aftc__ajax-loader  js-aftc-ajax-loader">
                <span class="spinner"></span> <?php esc_html_e('Importing, please wait!', 'af-companion'); ?>
            </p>

            <div class="aftc__response  js-aftc-ajax-response"></div>
            <div class="aftc__intro-text">
                <?php
                if (!empty($this->import_files)) : ?>
                    <?php if (empty($_GET['import-mode']) || 'manual' !== $_GET['import-mode']) : ?>
                        <a href="<?php echo esc_url(add_query_arg(array('page' => $this->plugin_page_setup['menu_slug'], 'import-mode' => 'manual'), menu_page_url($this->plugin_page_setup['parent_slug'], false))); ?>"
                           class="aftc__import-mode-switch"><?php esc_html_e('Switch to manual import!', 'af-companion'); ?></a>
                        <a href="<?php echo esc_url(add_query_arg(array('page' => $this->plugin_page_setup['menu_slug']), menu_page_url($this->plugin_page_setup['parent_slug'], false))); ?>"
                           class="aftc__import-mode-switch reload-importer"
                           style="display: none;"><?php esc_html_e('Return to Importer', 'af-companion'); ?></a>
                    <?php else : ?>
                        <a href="<?php echo esc_url(add_query_arg(array('page' => $this->plugin_page_setup['menu_slug']), menu_page_url($this->plugin_page_setup['parent_slug'], false))); ?>"
                           class="aftc__import-mode-switch"><?php esc_html_e('Switch back to theme predefined imports!', 'af-companion'); ?></a>


                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>

        <?php
    }


    /**
     * Enqueue admin scripts (JS and CSS)
     *
     * @param string $hook holds info on which admin page you are currently loading.
     */
    public function admin_enqueue_scripts($hook)
    {

        // Enqueue the scripts only on the plugin page.
        if ($this->plugin_page === $hook) {
            wp_enqueue_script('jquery-ui-dialog');
            wp_enqueue_style('wp-jquery-ui-dialog');

            wp_enqueue_script('aftc-main-js', AFTC_URL . 'assets/js/main.js', array('jquery', 'jquery-form'), AFTC_VERSION);
            wp_enqueue_script('aftc-activate-install', AFTC_URL . 'assets/js/activate-plugins.js', array('jquery', 'aftc-main-js'), AFTC_VERSION);

            $theme = wp_get_theme();
            wp_localize_script('aftc-main-js', 'aftc',
                array(
                    'ajax_url' => admin_url('admin-ajax.php'),
                    'ajax_nonce' => wp_create_nonce('aftc-ajax-verification'),
                    'import_files' => $this->import_files,
                    'wp_customize_on' => apply_filters('af-companion/enable_wp_customize_save_hooks', false),
                    'import_popup' => apply_filters('af-companion/enable_grid_layout_import_popup_confirmation', true),
                    'theme_screenshot' => $theme->get_screenshot(),
                    'texts' => array(
                        'missing_preview_image' => esc_html__('No preview image defined for this import.', 'af-companion'),
                        'dialog_title' => esc_html__('Are you sure?', 'af-companion'),
                        'dialog_no' => esc_html__('Cancel', 'af-companion'),
                        'dialog_yes' => esc_html__('Yes, import!', 'af-companion'),
                        'selected_import_title' => esc_html__('Selected demo for the import', 'af-companion'),
                    ),
                    'dialog_options' => apply_filters('af-companion/confirmation_dialog_options', array())
                )
            );

            wp_enqueue_style('aftc-main-css', AFTC_URL . 'assets/css/main.css', array(), AFTC_VERSION);
        }
    }


    /**
     * Main AJAX callback function for:
     * 1. prepare import files (uploaded or predefined via filters)
     * 2. import content
     * 3. before widgets import setup (optional)
     * 4. import widgets (optional)
     * 5. import customizer options (optional)
     * 6. after import setup (optional)
     */
    public function import_demo_data_ajax_callback()
    {

        // Try to update PHP memory limit (so that it does not run out of it).
        ini_set('memory_limit', apply_filters('af-companion/import_memory_limit', '350M'));

        // Verify if the AJAX call is valid (checks nonce and current_user_can).
        AFTC_Helpers::verify_ajax_call();

        // Is this a new AJAX call to continue the previous import?
        $use_existing_importer_data = $this->get_importer_data();

        if (!$use_existing_importer_data) {

            // Set the AJAX call number.
            $this->ajax_call_number = empty($this->ajax_call_number) ? 0 : $this->ajax_call_number;

            // Error messages displayed on front page.
            $this->frontend_error_messages = '';

            // Create a date and time string to use for demo and log file names.
            $demo_import_start_time = date(apply_filters('af-companion/date_format_for_file_names', 'Y-m-d__H-i-s'));

            // Define log file path.
            $this->log_file_path = AFTC_Helpers::get_log_path($demo_import_start_time);

            // Get selected file index or set it to 0.
            $this->selected_index = empty($_POST['selected']) ? 0 : absint($_POST['selected']);

            /**
             * 1. Prepare import files.
             * Manually uploaded import files or predefined import files via filter: af-companion/import_files
             */
            if (!empty($_FILES)) { // Using manual file uploads?

                // Get paths for the uploaded files.
                $this->selected_import_files = AFTC_Helpers::process_uploaded_files($_FILES, $this->log_file_path);

                // Set the name of the import files, because we used the uploaded files.
                $this->import_files[$this->selected_index]['import_file_name'] = esc_html__('Manually uploaded files', 'af-companion');
            } elseif (!empty($this->import_files[$this->selected_index])) { // Use predefined import files from wp filter: af-companion/import_files.

                // Download the import files (content and widgets files) and save it to variable for later use.
                $this->selected_import_files = AFTC_Helpers::download_import_files(
                    $this->import_files[$this->selected_index],
                    $demo_import_start_time
                );

                // Check Errors.
                if (is_wp_error($this->selected_import_files)) {

                    // Write error to log file and send an AJAX response with the error.
                    AFTC_Helpers::log_error_and_send_ajax_response(
                        $this->selected_import_files->get_error_message(),
                        $this->log_file_path,
                        esc_html__('Downloaded files', 'af-companion')
                    );
                }

                // Add this message to log file.
                $log_added = AFTC_Helpers::append_to_file(
                    sprintf(
                        __('The import files for: %s were successfully downloaded!', 'af-companion'),
                        $this->import_files[$this->selected_index]['import_file_name']
                    ) . AFTC_Helpers::import_file_info($this->selected_import_files),
                    $this->log_file_path,
                    esc_html__('Downloaded files', 'af-companion')
                );
            } else {

                // Send JSON Error response to the AJAX call.
                wp_send_json(esc_html__('No import files specified!', 'af-companion'));
            }
        }

        /**
         * 2. Import content.
         * Returns any errors greater then the "error" logger level, that will be displayed on front page.
         */
        $this->frontend_error_messages .= $this->import_content($this->selected_import_files['content']);

        /**
         * 3. Before widgets import setup.
         */
        $action = 'af-companion/before_widgets_import';
        if ((false !== has_action($action)) && empty($this->frontend_error_messages)) {

            // Run the before_widgets_import action to setup other settings.
            $this->do_import_action($action, $this->import_files[$this->selected_index]);
        }

        /**
         * 4. Import widgets.
         */
        if (!empty($this->selected_import_files['widgets']) && empty($this->frontend_error_messages)) {
            $this->import_widgets($this->selected_import_files['widgets']);
        }

        /**
         * 5. Import customize options.
         */
        if (!empty($this->selected_import_files['customizer']) && empty($this->frontend_error_messages)) {
            $this->import_customizer($this->selected_import_files['customizer']);
        }

        /**
         * 6. After import setup.
         */
        $action = 'af-companion/after_import';
        if ((false !== has_action($action)) && empty($this->frontend_error_messages)) {

            // Run the after_import action to setup other settings.
            $this->do_import_action($action, $this->import_files[$this->selected_index]);
        }

        // Display final messages (success or error messages).
        if (empty($this->frontend_error_messages)) {
            $response['message'] = sprintf(
                __('%1$sThat\'s it, all done!%2$sThe demo import has finished. Please check your page and make sure that everything has imported correctly. For more other beautiful WordPress products please visit %3$sAF themes%4$s. %5$s', 'af-companion'),
                '<div class="notice  notice-success"><p>',
                '<br>',
                '<strong><a href="https://afthemes.com/" target="_blank">',
                '</a></strong>',
                '</p></div>'
            );
        } else {
            $response['message'] = $this->frontend_error_messages . '<br>';
            $response['message'] .= sprintf(
                __('%1$sThe demo import has finished, but there were some import errors.%2$sMore details about the errors can be found in this %3$s%5$slog file%6$s%4$s%7$s', 'af-companion'),
                '<div class="notice  notice-error"><p>',
                '<br>',
                '<strong>',
                '</strong>',
                '<a href="' . AFTC_Helpers::get_log_url($this->log_file_path) . '" target="_blank">',
                '</a>',
                '</p></div>'
            );
        }

        wp_send_json($response);
    }


    /**
     * Import content from an WP XML file.
     *
     * @param string $import_file_path path to the import file.
     */
    private function import_content($import_file_path)
    {

        $this->microtime = microtime(true);

        // This should be replaced with multiple AJAX calls (import in smaller chunks)
        // so that it would not come to the Internal Error, because of the PHP script timeout.
        // Also this function has no effect when PHP is running in safe mode
        // https://php.net/manual/en/function.set-time-limit.php.
        // Increase PHP max execution time.
        set_time_limit(apply_filters('af-companion/set_time_limit_for_demo_data_import', 300));

        // Disable import of authors.
        add_filter('wxr_importer.pre_process.user', '__return_false');

        // Check, if we need to send another AJAX request and set the importing author to the current user.
        add_filter('wxr_importer.pre_process.post', array($this, 'new_ajax_request_maybe'));

        // Disables generation of multiple image sizes (thumbnails) in the content import step.
        if (!apply_filters('af-companion/regenerate_thumbnails_in_content_import', true)) {
            add_filter('intermediate_image_sizes_advanced',
                function () {
                    return null;
                }
            );
        }

        // Import content.
        if (!empty($import_file_path)) {
            ob_start();
            $this->importer->import($import_file_path);
            $message = ob_get_clean();

            // Add this message to log file.
            $log_added = AFTC_Helpers::append_to_file(
                $message . PHP_EOL . esc_html__('Max execution time after content import = ', 'af-companion') . ini_get('max_execution_time'),
                $this->log_file_path,
                esc_html__('Importing content', 'af-companion')
            );
        }

        // Delete content importer data for current import from DB.
        delete_transient('AFTC_importer_data');

        // Return any error messages for the front page output (errors, critical, alert and emergency level messages only).
        return $this->logger->error_output;
    }


    /**
     * Import widgets from WIE or JSON file.
     *
     * @param string $widget_import_file_path path to the widget import file.
     */
    private function import_widgets($widget_import_file_path)
    {

        // Widget import results.
        $results = array();

        // Create an instance of the Widget Importer.
        $widget_importer = new AFTC_Widget_Importer();

        // Import widgets.
        if (!empty($widget_import_file_path)) {

            // Import widgets and return result.
            $results = $widget_importer->import_widgets($widget_import_file_path);
        }

        // Check for errors.
        if (is_wp_error($results)) {

            // Write error to log file and send an AJAX response with the error.
            AFTC_Helpers::log_error_and_send_ajax_response(
                $results->get_error_message(),
                $this->log_file_path,
                esc_html__('Importing widgets', 'af-companion')
            );
        }

        ob_start();
        $widget_importer->format_results_for_log($results);
        $message = ob_get_clean();

        // Add this message to log file.
        $log_added = AFTC_Helpers::append_to_file(
            $message,
            $this->log_file_path,
            esc_html__('Importing widgets', 'af-companion')
        );
    }


    /**
     * Import customizer from a DAT file, generated by the Customizer Export/Import plugin.
     *
     * @param string $customizer_import_file_path path to the customizer import file.
     */
    private function import_customizer($customizer_import_file_path)
    {

        // Try to import the customizer settings.
        $results = AFTC_Customizer_Importer::import_customizer_options($customizer_import_file_path);

        // Check for errors.
        if (is_wp_error($results)) {

            // Write error to log file and send an AJAX response with the error.
            AFTC_Helpers::log_error_and_send_ajax_response(
                $results->get_error_message(),
                $this->log_file_path,
                esc_html__('Importing customizer settings', 'af-companion')
            );
        }

        // Add this message to log file.
        $log_added = AFTC_Helpers::append_to_file(
            esc_html__('Customizer settings import finished!', 'af-companion'),
            $this->log_file_path,
            esc_html__('Importing customizer settings', 'af-companion')
        );
    }


    /**
     * Setup other things in the passed wp action.
     *
     * @param string $action the action name to be executed.
     * @param array $selected_import with information about the selected import.
     */
    private function do_import_action($action, $selected_import)
    {

        ob_start();
        do_action($action, $selected_import);
        $message = ob_get_clean();

        // Add this message to log file.
        $log_added = AFTC_Helpers::append_to_file(
            $message,
            $this->log_file_path,
            $action
        );
    }


    /**
     * Check if we need to create a new AJAX request, so that server does not timeout.
     *
     * @param array $data current post data.
     * @return array
     */
    public function new_ajax_request_maybe($data)
    {
        $time = microtime(true) - $this->microtime;

        // We should make a new ajax call, if the time is right.
        if ($time > apply_filters('af-companion/time_for_one_ajax_call', 25)) {
            $this->ajax_call_number++;
            $this->set_importer_data();

            $response = array(
                'status' => 'newAJAX',
                'message' => 'Time for new AJAX request!: ' . $time,
            );

            // Add any output to the log file and clear the buffers.
            $message = ob_get_clean();

            // Add message to log file.
            $log_added = AFTC_Helpers::append_to_file(
                __('Completed AJAX call number: ', 'af-companion') . $this->ajax_call_number . PHP_EOL . $message,
                $this->log_file_path,
                ''
            );

            wp_send_json($response);
        }

        // Set importing author to the current user.
        // Fixes the [WARNING] Could not find the author for ... log warning messages.
        $current_user_obj = wp_get_current_user();
        $data['post_author'] = $current_user_obj->user_login;

        return $data;
    }

    /**
     * Set current state of the content importer, so we can continue the import with new AJAX request.
     */
    private function set_importer_data()
    {
        $data = array(
            'frontend_error_messages' => $this->frontend_error_messages,
            'ajax_call_number' => $this->ajax_call_number,
            'log_file_path' => $this->log_file_path,
            'selected_index' => $this->selected_index,
            'selected_import_files' => $this->selected_import_files,
        );

        $data = array_merge($data, $this->importer->get_importer_data());

        set_transient('AFTC_importer_data', $data, 0.5 * HOUR_IN_SECONDS);
    }

    /**
     * Get content importer data, so we can continue the import with this new AJAX request.
     */
    private function get_importer_data()
    {
        if ($data = get_transient('AFTC_importer_data')) {
            $this->frontend_error_messages = empty($data['frontend_error_messages']) ? '' : $data['frontend_error_messages'];
            $this->ajax_call_number = empty($data['ajax_call_number']) ? 1 : $data['ajax_call_number'];
            $this->log_file_path = empty($data['log_file_path']) ? '' : $data['log_file_path'];
            $this->selected_index = empty($data['selected_index']) ? 0 : $data['selected_index'];
            $this->selected_import_files = empty($data['selected_import_files']) ? array() : $data['selected_import_files'];
            $this->importer->set_importer_data($data);

            return true;
        }
        return false;
    }

    /**
     * Load the plugin textdomain, so that translations can be made.
     */
    public function load_textdomain()
    {
        load_plugin_textdomain('af-companion', false, plugin_basename(dirname(__FILE__)) . '/languages');
    }


    /**
     * Get data from filters, after the theme has loaded and instantiate the importer.
     */
    public function setup_plugin_with_filter_data()
    {

        // Get info of import data files and filter it.
        $this->import_files = AFTC_Helpers::validate_import_file_info(apply_filters('af-companion/import_files', array()));

        // Importer options array.
        $importer_options = apply_filters('af-companion/importer_options', array(
            'fetch_attachments' => true,
        ));

        // Logger options for the logger used in the importer.
        $logger_options = apply_filters('af-companion/logger_options', array(
            'logger_min_level' => 'warning',
        ));

        // Configure logger instance and set it to the importer.
        $this->logger = new AFTC_Logger();
        $this->logger->min_level = $logger_options['logger_min_level'];

        // Create importer instance with proper parameters.
        $this->importer = new AFTC_Importer($importer_options, $this->logger);
    }
}
