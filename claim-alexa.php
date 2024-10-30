<?php
/*
Plugin Name: Claim Alexa 
Plugin URI: http://wordpress.org/extend/plugins/claim-alexa/
Description: Adds <a href="http://www.alexa.com/">Alexa</a> verification meta-tag.
Version: 1.0
Author: Audrius Dobilinskas
Author URI: http://onlineads.lt/author/audrius
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

function activate_google_webmaster_tools() {
  add_option('alexa_code', 'Paste your Alexa verification meta-tag here');
}

function deactive_google_webmaster_tools() {
  delete_option('alexa_code');
}

function admin_init_google_webmaster_tools() {
  register_setting('alexa_verification', 'alexa_code');
}

function admin_menu_google_webmaster_tools() {
  add_options_page('Claim Alexa', 'Claim Alexa', 'manage_options', 'alexa_verification', 'options_page_alexa_verification');
}

function options_page_alexa_verification() {
  include(WP_PLUGIN_DIR.'/claim-alexa/options.php');  
}

function alexa_verification() {
  $alexa_code = get_option('alexa_code');
?>

<?php echo $alexa_code ?>

<?php
}

register_activation_hook(__FILE__, 'activate_alexa_verification');
register_deactivation_hook(__FILE__, 'deactive_alexa_verification');

if (is_admin()) {
  add_action('admin_init', 'admin_init_alexa_verification');
  add_action('admin_menu', 'admin_menu_alexa_verification');
}

if (!is_admin()) {
  add_action('wp_head', 'alexa_verification');
}

?>