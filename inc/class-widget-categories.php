<?php

declare(strict_types=1);

namespace ELEJD;

if ( !defined( 'ABSPATH' ) ) exit;

class Widget_Categories {

  public static string $JUNK_DRAWER_CATEGORY = ELEJD_SLUG . '-junk-drawer';

  protected static $instance = null;

  public static function get_instance() {
    if ( ! isset( static::$instance ) ) {
      static::$instance = new static;
    }

    return static::$instance;
  }

  protected function __construct() {
    add_action( 'elementor/elements/categories_registered', [ $this, 'add_categories' ] );
  }

  public function add_categories( $elements_manager ) {
    $elements_manager->add_category(
      static::$JUNK_DRAWER_CATEGORY,
      [
        'title' => esc_html__( 'Junk Drawer', ELEJD_SLUG ),
        'icon' => 'fa fa-plug',
      ]
    );
  }

}