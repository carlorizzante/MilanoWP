<?php
/**
 * Adds your styles to the WordPress editor
 *
 * Allows customization of the TinyMCE visual editor within the Admin > Edit/Create Post.
 *
 * For more about adding custom stylesheets post editor,
 * {@link https://codex.wordpress.org/Function_Reference/add_editor_style}
 *
 * @package MilanoWP
 * @since 0.9.0
 */


/**
 * Load TinyMCE custom stylesheet.
 *
 * @since 0.9.0
 */
function add_editor_styles() {
  add_editor_style( get_template_directory_uri() . SERVING_DIR . 'css/editor-style'.MIN.'.css' );
}
add_action( 'init', 'add_editor_styles' );

?>
