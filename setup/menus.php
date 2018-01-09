<?php

// Sets menu locations
function bellhop_menus() {
  register_nav_menus([
    'primary_nav' => __('Primary Navigation', 'bellhop')
  ]);
}
add_action( 'after_setup_theme', 'bellhop_menus');
