<?php
// Loads theme setup files
$setup_includes = [
  'setup/assets.php',                   // Theme script and style enqueues
  'setup/customizer.php',               // Customizer setup
  'setup/media.php',                    // Image sizes, media settings, etc.
  'setup/menus.php',                    // Menu setup
  'setup/post-types.php',               // Custom post types
  'setup/sidebars.php',                 // Sidebars
  'setup/theme-functionality.php'       // Theme-specific functionality
];
foreach( $setup_includes as $file ) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'bellhop'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);
