<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


/**
 * WP Post Author
 *
 * Allows user to get WP Post Author.
 *
 * @class   WP_Post_Author_Backend
 */
class WP_Post_Author_Backend
{

    /**
     * Init and hook in the integration.
     *
     * @return void
     */


    public function __construct()
    {
        $this->id = 'WP_Post_Author_Backend';
        $this->method_title = __('WP Post Author Backend', 'wp-post-author');
        $this->method_description = __('WP Post Author Backend', 'wp-post-author');

        include_once 'awpa-user-fields.php';

        include_once AWPA_PLUGIN_DIR . '/includes/admin/awpa-form-register.php';
        include_once AWPA_PLUGIN_DIR . '/includes/admin/awpa-form-meta.php';
        include_once AWPA_PLUGIN_DIR . '/includes/admin/awpa-form-menu.php';
        include_once 'awpa-widget-base.php';

        include_once 'awpa-widget.php';
        include_once 'awpa-widget-custom.php';
        include_once 'awpa-widget-specific.php';

        add_action('widgets_init', array($this, 'awpa_widgets_init'));

        add_action('admin_menu', array($this, 'awpa_register_settings_menu_page'));
        //add_action('admin_init', array($this, 'awpa_display_options'));

        // Actions
        add_action('admin_enqueue_scripts', array($this, 'awpa_post_author_enqueue_admin_style'));
    }

    public function awpa_post_author_enqueue_admin_style($hook)
    {
        
        wp_register_style('awpa-admin-style', AWPA_PLUGIN_URL . 'assets/css/awpa-backend-style.css', array(), AWPA_VERSION, 'all');

        wp_enqueue_style('awpa-admin-style');
       
        if ('widgets.php' === $hook) {
            wp_enqueue_media();
            wp_register_script('awpa-admin-scripts', AWPA_PLUGIN_URL . 'assets/js/awpa-backend-scripts.js', array('jquery'), AWPA_VERSION, true);
            wp_enqueue_script('awpa-admin-scripts');
        }

       

        if ('wp-post-author_page_awpa-multi-authors' == $hook) {
            wp_enqueue_script(
                'awpa-guest-authors',
                AWPA_PLUGIN_URL . 'assets/dist/guest_authors.build.js',
                array(),
                AWPA_VERSION,
                true
            );
        }


        if ('wp-post-author_page_awpa-members' == $hook) {

            wp_enqueue_script(
                'wpauthor-membership-build-js',
                AWPA_PLUGIN_URL . 'assets/dist/membership.build.js',
                array('wp-blocks', 'wp-i18n', 'wp-api-fetch', 'wp-element', 'wp-components', 'wp-editor'),
                AWPA_VERSION,
                true
            );
           
            wp_localize_script(
                'wpauthor-membership-build-js',
                'wpauthor_member_data',
                array(
                    'adminUrl' => site_url()
                )
            );
        }
        
        if ('wp-post-author_page_awpa-settings' == $hook) {
            wp_enqueue_style('react-toggle-styles-admin', AWPA_PLUGIN_URL . '/assets/css/react-toggle.css', array(), AWPA_VERSION);
            wp_enqueue_script(
                'wpauthor-settings-build-js',
                AWPA_PLUGIN_URL . 'assets/dist/settings.build.js',
                array('wp-i18n'),
                AWPA_VERSION,
                true
            );
        }

        

        if ('toplevel_page_wp-post-author' == $hook) {
            
            wp_enqueue_script(
                'wpauthor-builder-build-js',
                AWPA_PLUGIN_URL . 'assets/dist/builder.build.js',
                array('wp-i18n'),
                AWPA_VERSION,
                true
            );
        }
        if ('toplevel_page_wp-post-author' === $hook) {
            
            wp_enqueue_script(
                'wpauthor-form-builder-list-block-js',
                AWPA_PLUGIN_URL . 'assets/dist/form_builder_list.build.js',
                array('wp-i18n'),
                AWPA_VERSION
            );

            wp_localize_script(
                'wpauthor-form-builder-list-block-js',
                'wpauthor_globals_listing',
                array(
                    'pluginDir' => AWPA_PLUGIN_URL
                )
            );
            wp_enqueue_script(
                'wpauthor-blocks-block-js',
                AWPA_PLUGIN_URL . 'assets/dist/blocks.build.js',
                array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor'),
                AWPA_VERSION
            );

            wp_localize_script(
                'wpauthor-blocks-block-js',
                'wpauthor_globals',
                array(
                    'srcUrl' => untrailingslashit(plugins_url('/', AWPA_BASE_DIR . '/dist/')),
                    'rest_url' => esc_url(rest_url()),
                )
            );
        }
    }

    public function awpa_widgets_init()
    {
        register_widget('AWPA_Widget');
        register_widget('AWPA_Widget_Custom');
        register_widget('AWPA_Widget_Specific');
    }

    /**
     * Register a awpa settings page
     */
    public function awpa_register_settings_menu_page()
    {
        add_menu_page(
            __('WP Post Author', 'wp-post-author'),
            'WP Post Author',
            'manage_options',
            'wp-post-author',
            '',
            'dashicons-id-alt',
            70
        );
    }
    
}

$awpa_backend = new WP_Post_Author_Backend();
