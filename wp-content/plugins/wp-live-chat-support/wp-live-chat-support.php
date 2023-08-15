<?php

/*
  Plugin Name: 3CX Live Chat
  Plugin URI: https://www.3cx.com/wp-live-chat/
  Description: Live chat and voice/video call for web visitors. Setup a free portal account for unlimited agents and then activate the plugin.
  Version: 10.0.9
  Author: 3CX
  Author URI: https://www.3cx.com/wp-live-chat/
  Domain Path: /languages
  License: GPLv2 or later
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

require plugin_dir_path(__FILE__) . 'config.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wplc-plugin-activator.php
 */
function activate_wplc_plugin()
{
  if (!current_user_can('activate_plugins')) {
    return;
  }
  require_once plugin_dir_path(__FILE__) . 'includes/class-wplc-plugin-activator.php';
  wplc_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wplc-plugin-deactivator.php
 */
function deactivate_wplc_plugin()
{
  if (!current_user_can('activate_plugins')) {
    return;
  }
  $plugin = isset($_REQUEST['plugin']) ? $_REQUEST['plugin'] : '';
  check_admin_referer("deactivate-plugin_{$plugin}");
  require_once plugin_dir_path(__FILE__) . 'includes/class-wplc-plugin-deactivator.php';
  wplc_Plugin_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_wplc_plugin');
register_deactivation_hook(__FILE__, 'deactivate_wplc_plugin');

function post_activate_wplc_plugin( $plugin ) {
  global $WPLC_PLUGIN_VERSION;
  if( $plugin == plugin_basename( __FILE__ ) ) {
      $plugin_settings = new wplc_Admin_Settings($plugin, $WPLC_PLUGIN_VERSION);
      $config = $plugin_settings->read_config();
      if (!isset($config['callus_url']) || empty($config['callus_url'])) {
        exit(wp_redirect( admin_url( '/admin.php?page=wplc_options' ) ));
      }
  }
}
add_action( 'activated_plugin', 'post_activate_wplc_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-wplc-plugin.php';

function wplc_generate_startup_url($hasemail) {
  $url = 'https://www.3cx.com/signin-google?wordpress=1';
  if ($hasemail){
    $url = 'https://www.3cx.com/signup/?wordpress=1';
  }
  if ($hasemail) {
    $current_user = wp_get_current_user();
    if ($current_user){
      $email = $current_user->user_email;    
      if ($email){
        $url.='&email='.urlencode($email);
      }
    }
  }
  $activated=get_option('wplc_activated');
  $nonce=get_option('wplc_callback_nonce');
  if (empty($activated) && !empty($nonce)) {
    $url.='&callback='.urlencode(get_site_url().'/wp-json/wp-live-chat-support/v1/autoconfigure?nonce='.$nonce);
  }
  return $url;
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    10.0.0
 */
function run_wplc_plugin()
{

  $plugin = new wplc_Plugin();
  $plugin->run();
}
run_wplc_plugin();
