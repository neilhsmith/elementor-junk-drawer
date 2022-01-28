<?php

/**
 * Plugin Name: Elementor Junk Drawer
 * Description: Collection of Elementor components and utilities I use regularly.
 * Author: Neil Smith
 * Text Domain: ele-jd
 * Domain Path: /languages
 * Version: 0.0.1
 */

namespace ELEJD;

if ( !defined( 'ABSPATH' ) ) exit;

define( 'ELEJD_VERSION', '0.0.1' );
define( 'ELEJD_SLUG', 'elejd' );

define( 'ELEJD_URL', plugin_dir_url( __FILE__ ) );
define( 'ELEJD_BASE', plugin_basename( __FILE__ ) );
define( 'ELEJD_PATH', plugin_dir_path( __FILE__ ) );
define( 'ELEJD_DIR', dirname( plugin_basename( __FILE__ ) ) );

define( 'ELEJD_WIDGETS_PATH', ELEJD_PATH . 'classes/widgets/' );

add_action( 'init', function() {
  require_once( 'classes/class-widget-categories.php' );
  require_once( 'classes/class-widgets.php' );

  Widget_Categories::get_instance();
  Widgets::get_instance();
} );