<?php

add_action("wp_ajax_aftc_install_activate_plugins", "aftc_install_activate_plugins");
add_action("wp_ajax_nopriv_aftc_install_activate_plugins", "aftc_install_activate_plugins");

function aftc_install_activate_plugins()
{

    // Verify if the AJAX call is valid (checks nonce and current_user_can).
    AFTC_Helpers::verify_ajax_call();

    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    $plugins = $_POST['btnData'];

    if (is_array($plugins)) {
        $sanitinzed_plugins = array_map('sanitize_key', $plugins);
    } else {
        $sanitinzed_plugins = sanitize_key($plugins);
    }


    $plugin_path = array();

    foreach ($sanitinzed_plugins as $plugin) :
        if (file_exists(WP_PLUGIN_DIR . '/' . $plugin . '/' . $plugin . '.php')) {
            $plugin_data          = get_plugin_data(WP_PLUGIN_DIR . '/' . $plugin);

            $status['plugin']     = $plugin;
            $status['pluginName'] = $plugin_data['Name'];

            if (current_user_can('activate_plugin', $plugin) && is_plugin_inactive($plugin)) {

                $plugin_path[] =  $plugin . '/' . $plugin . '.php';
            }
        } else {

            if (empty($plugin)) {
                wp_send_json_error(
                    array(
                        'slug'         => '',
                        'errorCode'    => 'no_plugin_specified',
                        'errorMessage' => __('No plugin specified.', 'af-companion'),
                    )
                );
            }

            $slug   = sanitize_key(wp_unslash($plugin));
            $plugin = plugin_basename(sanitize_text_field(wp_unslash($plugin)));
            $status = array(
                'install' => 'plugin',
                'slug'    => sanitize_key(wp_unslash($plugin)),
            );

            if (!current_user_can('install_plugins')) {
                $status['errorMessage'] = __('Sorry, you are not allowed to install plugins on this site.', 'af-companion');
                wp_send_json_error($status);
            }


            // Looks like a plugin is installed, but not active.

            $api = plugins_api(
                'plugin_information',
                array(
                    'slug'   => sanitize_key($plugin),
                    'fields' => array(
                        'sections' => false,
                    ),
                )
            );

            if (is_wp_error($api)) {
                $status['errorMessage'] = $api->get_error_message();
                wp_send_json_error($status);
            }

            $status['pluginName'] = $api->name;

            $skin     = new WP_Ajax_Upgrader_Skin();
            $upgrader = new Plugin_Upgrader($skin);
            $result   = $upgrader->install($api->download_link);

            if (defined('WP_DEBUG') && WP_DEBUG) {
                $status['debug'] = $skin->get_upgrade_messages();
            }

            if (is_wp_error($result)) {
                $status['errorCode']    = $result->get_error_code();
                $status['errorMessage'] = $result->get_error_message();
                wp_send_json_error($status);
            } elseif (is_wp_error($skin->result)) {
                $status['errorCode']    = $skin->result->get_error_code();
                $status['errorMessage'] = $skin->result->get_error_message();
                wp_send_json_error($status);
            } elseif ($skin->get_errors()->get_error_code()) {
                $status['errorMessage'] = $skin->get_error_messages();
                wp_send_json_error($status);
            } elseif (is_null($result)) {
                global $wp_filesystem;

                $status['errorCode']    = 'unable_to_connect_to_filesystem';
                $status['errorMessage'] = __('Unable to connect to the filesystem. Please confirm your credentials.', 'af-companion');

                // Pass through the error from WP_Filesystem if one was raised.
                if ($wp_filesystem instanceof WP_Filesystem_Base && is_wp_error($wp_filesystem->errors) && $wp_filesystem->errors->get_error_code()) {
                    $status['errorMessage'] = esc_html($wp_filesystem->errors->get_error_message());
                }

                wp_send_json_error($status);
            }

            $install_status = install_plugin_install_status($api);
            $plugin_path[] = $install_status['file'];
        }



    endforeach;

    $activatePlugins = activate_plugins($plugin_path, '', false, true);
    if ($activatePlugins) {        
        _e('success', 'af-companion');
    }

    die();
}
