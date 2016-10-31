<?php
/**
 * Sidebars for MilanoWP
 *
 * @link https://codex.wordpress.org/Sidebars
 *
 * @package MilanoWP
 * @since 0.9.0
 */



/**
* Register Sidebars and Widgets
*
* @since 0.9.0
*/
function milano_setup_sidebars() {

	register_sidebar(array(
		'id'            => 'sidebar1',
		'name'          => __('Sidebar 1', 'milano'),
		'description'   => __('Primary sidebar (content navigation).', 'milano'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	));


	/*
	* To create/register new sidebars, use the following code as template.
	*/
	// register_sidebar(array(
	// 	'id' => 'sidebar2',
	// 	'name' => __('Sidebar 2', 'milano'),
	// 	'description' => __('Secondary sidebar.', 'milano'),
	// 	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h4 class="widgettitle">',
	// 	'after_title' => '</h4>',
	// ));

} // !! Don't remove this bracket



/**
 * Load sidebars and Widgets in the front end.
 *
 * @since 0.9.0
 */
function milano_register_sidebars() {
  add_action('widgets_init', 'milano_setup_sidebars' );
}
add_action('after_setup_theme','milano_register_sidebars', 16);


?>
