<?php
/**
 * MilanoWP functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * Optional functions can be activated by uncommenting them.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package MilanoWP
 * @since 0.9.0
 */


/**
 * Define a constant PRODUCTION in wp-config.php to force the theme
 * to load the minified versions of all scripts and stylesheets.
 *
 * Alternatively you could simply define MIN as ".min" to always load the minified files.
 *
 * @since 0.9.0
 */
if (defined('PRODUCTION') && PRODUCTION == true) {
	define('MIN', '.min');
} else {
  define('MIN', '');
}


/**
 * Locations for parts and assets
 *
 * 1. /functions
 *    Functions and helpers for the current theme
 *
 * 2. /public
 *    Compiled stylesheets and javascript files
 *
 * 3. /parts
 *    Parts for the current theme, loops, content, navigation
 *
 * @since 0.9.0
 */
define('FUNCTIONS_DIR', '/functions/');
define('SERVING_DIR', '/public/');


/**
 * Load theme parts and configuration.
 *
 * See files in the functions folder for a more granular configuration.
 *
 * @since 0.9.0
 */
 require_once(get_template_directory().FUNCTIONS_DIR.'theme-support.php');
 // require_once(get_template_directory().FUNCTIONS_DIR.'responsive-images.php');
 require_once(get_template_directory().FUNCTIONS_DIR.'cleanup.php'); // Clean wp_header
 require_once(get_template_directory().FUNCTIONS_DIR.'enqueue-scripts.php'); // Load CSS and Javascript
 require_once(get_template_directory().FUNCTIONS_DIR.'menu.php');
 require_once(get_template_directory().FUNCTIONS_DIR.'menu-walkers.php');
 require_once(get_template_directory().FUNCTIONS_DIR.'sidebar.php');
 require_once(get_template_directory().FUNCTIONS_DIR.'comments.php'); // Improve commenting
 require_once(get_template_directory().FUNCTIONS_DIR.'page-navi.php'); // Numbered navigation
 // require_once(get_template_directory().'/localization/_i18n.php'); // Enable alt languages
 // require_once(get_template_directory().FUNCTIONS_DIR.'editor-styles.php'); // Styles WP Editor
 // require_once(get_template_directory().FUNCTIONS_DIR.'related-posts.php');
 // require_once(get_template_directory().FUNCTIONS_DIR.'login.php'); // Custom WP login
 // require_once(get_template_directory().FUNCTIONS_DIR.'custom-admin.php'); // Custom WP Admin



 /**
  * Loads dev-utils.php if WP_DEBUG equals true
  */
 if (WP_DEBUG == true) require_once(get_template_directory().FUNCTIONS_DIR.'dev-utils.php');

?>
