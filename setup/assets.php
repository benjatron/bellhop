<?php
// Theme assets to load
function bellhop_asset_loader()
{
  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');

  // Styles
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/styles/dist/main.min.css', false, null);

  // Scripts
  wp_enqueue_script('index', get_stylesheet_directory_uri() . '/assets/scripts/dist/index.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'bellhop_asset_loader', 100);
