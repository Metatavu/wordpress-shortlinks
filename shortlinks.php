<?php 
/**
 * Created on Apr 22, 2022
 * Plugin Name: Shortlinks
 * Description: Plugin that allows shortlinks
 * Version: 1.0.0
 * Author: Metatavu Oy
 */

  defined ( 'ABSPATH' ) || die ( 'No script kiddies please!' );

  if (!defined('SHORTLINKS_DOMAIN')) {
    define('SHORTLINKS_DOMAIN', 'shortlinks');
  }
  
  if (!defined('INCIDENTS_PLUGIN_VERSION')) {
    define('INCIDENTS_PLUGIN_VERSION', '1.0.0');
  }

  require_once(__DIR__ . '/shortlinks/shortlinks.php');

  add_action('plugins_loaded', function() {
    load_plugin_textdomain( SHORTLINKS_DOMAIN, false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
  });
?>