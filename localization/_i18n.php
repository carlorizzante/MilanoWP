<?php
/**
 * Enable localization for the current theme
 *
 * @package MilanoWP
 * @since 0.9.0
 */


function load_translations(){
	load_theme_textdomain( 'milano', get_template_directory() . SERVING_DIR . '_i18n' );
}
add_action('after_setup_theme', 'load_translations');


?>
