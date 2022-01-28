<?php

declare(strict_types=1);

namespace Elementor;
use ELEJD\Widget_Categories;

if ( !defined( 'ABSPATH' ) ) exit;

class ELE_Menu_Widget extends Widget_Base {

  public function get_name() {
    return 'ele-menu';
  }

  public function get_title() {
    return 'ELEMenu';
  }

  public function get_icon() {
    return 'eicon-menu-bar';
  }

  public function get_categories() {
    return [ 'theme-elements', Widget_Categories::$JUNK_DRAWER_CATEGORY ];
  }

  protected function render() {
    ?>
    <div>asdf</div>
    <?php
  }

}