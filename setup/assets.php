<?php
// Theme assets to load
function bellhop_asset_loader()
{
  // Styles
  wp_enqueue_style('main/css', get_stylesheet_directory_uri() . '/assets/styles/dist/main.min.css', false, null);

  // Scripts
  wp_enqueue_script('index/js', get_stylesheet_directory_uri() . '/assets/scripts/dist/index.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'bellhop_asset_loader', 100);
