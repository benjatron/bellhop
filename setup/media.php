<?php

function bellhop_image_sizes() {
  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');
  add_image_size('4400px wide', 4400);
  add_image_size('3600px wide', 3600);
  add_image_size('2800px wide', 2800);
  add_image_size('2200px wide', 2200);
  add_image_size('1920px wide', 1920);
  add_image_size('1540px wide', 1540);
  add_image_size('1360px wide', 1360);
  add_image_size('1280px wide', 1280);
  add_image_size('1100px wide', 1100);
  add_image_size('800px wide', 800);
  add_image_size('640px wide', 640);
  add_image_size('480px wide', 480);
  add_image_size('360px wide', 360);
  add_image_size('240px wide', 240);
  add_image_size('160px wide', 160);
  add_image_size('preload', 64);

}
add_action( 'after_setup_theme', 'bellhop_image_sizes' );
