<?php

function bellhop_supports() {
// Make theme available for translation
// Community translations can be found at https://github.com/roots/sage-translations
load_theme_textdomain('bellhop', get_template_directory() . '/lang');

// Enable plugins to manage the document title
// http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
add_theme_support('title-tag');

// Enable post formats
// http://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

// Enable HTML5 markup support
// http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

}
add_action( 'after_setup_theme', 'bellhop_supports' );

// Removes unnecessary items from the admin menu
function bellhop_remove_menus() {
  // remove_menu_page('edit.php');
  // remove_menu_page('edit-comments.php');
  remove_menu_page('link-manager.php');
}
add_action( 'admin_menu', 'bellhop_remove_menus');

// Renames the default page template to encourage use of custom templates
add_filter('default_page_template_title', function() {
    return __('--Pick a page template--', 'bellhop');
});

// Removes the admin bar for all but admins on the front-end
if (!current_user_can('administrator')) :
  // show_admin_bar(false);
endif;

// Creates ACF Options page
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'position'    => '59.9',
    'icon_url'    => 'dashicons-index-card'
  ));

}
