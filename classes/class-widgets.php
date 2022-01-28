<?php

declare(strict_types=1);

namespace ELEJD;
use \Elementor;

if ( !defined('ABSPATH' ) ) exit;

class Widgets {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
    require_once( ELEJD_WIDGETS_PATH . 'ele-menu.php' );

		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\ELE_Menu_Widget() );
	}

}