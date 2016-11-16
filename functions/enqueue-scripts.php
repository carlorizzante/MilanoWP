<?php
/**
 * Enqueues Javascript and CSS files to the theme
 *
 * You can define a constant PRODUCTION to true in your wp-config.php
 * to force the theme to laod the minified version of javascript and css files.
 *
 * Example:
 * define('PRODUCTION', true);
 *
 * @package MilanoWP
 * @since 0.9.0
 */


/**
 * Load jQuery 2.2.4 from /vendor
 *
 * @since 0.9.1
 */
function milano_load_jquery_from_vendor() {
  if (!is_admin()) {
    $jquery_url = get_template_directory_uri() . '/vendor/jquery/dist/jquery.min.js';
    wp_deregister_script('jquery');
    wp_register_script('jquery', $jquery_url, false, '2.2.4');
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'milano_load_jquery_from_vendor');


/**
 * Load scripts and stylesheets for the front end.
 *
 * @since 0.9.0
 */
function milano_load_frontend_scripts() {


  // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  global $wp_styles;

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input'.MIN.'.js', array(), '', true );

    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . SERVING_DIR . 'js/foundation'.MIN.'.js', array( 'jquery' ), '6.0', true );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . SERVING_DIR . 'js/scripts'.MIN.'.js', array( 'jquery' ), '', true );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . SERVING_DIR . 'css/style'.MIN.'.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'milano_load_frontend_scripts', 999);

?>
