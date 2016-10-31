<?php
/**
 * Customizes the Login page
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
 * Load custom login style (login.css or login.min.css).
 *
 * Remember to specify an image to use as logo on the Login page.
 *
 *    .login h1 a {
 *       // your css rules here
 *    }
 *
 * @since 0.9.0
 */
function milano_login_css() {
	wp_enqueue_style( 'milano_login_css', get_template_directory_uri() . SERVING_DIR . 'css/login'.MIN.'.css', false );
}
add_action('login_enqueue_scripts', 'milano_login_css', 10 );


/**
 * The logo for wordpress.org links to your site.
 *
 * @since 0.9.0
 */
function milano_login_url() {
	return home_url();
}
add_filter('login_headerurl', 'milano_login_url');


/**
 * The alt text on the logo to show your site name.
 *
 * @since 0.9.0
 */
function milano_login_title() {
	return get_option('blogname');
}
add_filter('login_headertitle', 'milano_login_title');


?>
