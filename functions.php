<?php
/**
 * Required by WordPress.
 *
 * Keep this file clean and only use it for requires.
 */

// require_once 'lib/init.php';             // Initial theme setup and constants
require_once 'lib/scripts.php';          // Scripts and stylesheets
// require_once 'lib/post-types.php';       // Custom post types
// require_once 'lib/shortcodes.php';       // Handles shortcodes
// require_once 'lib/custom.php';           // Custom functions

remove_action('wp_head', 'wp_generator'); 

// Remove Windows Live Writer link in header
// Do Not do this if you use it
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

# Remove WordPress' canonical links
remove_action('wp_head', 'rel_canonical');

?>