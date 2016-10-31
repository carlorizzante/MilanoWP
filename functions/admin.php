<?php
/**
 * Handles the admin area and functions related to the Dashboard.
 *
 * Use this file to make changes to the Dashboard.
 *
 * For more information on creating Dashboard Widgets:
 * {@link http://digwp.com/2010/10/customize-wordpress-dashboard/}
 *
 * @package MilanoWP
 * @since 0.9.0
 */


/**
 * Removes Dashboard Widgets
 *
 * Comment specific lines to remove relative widgets.
 *
 * For more information on how to register/remove widget in the Dashboard,
 * {@link https://codex.wordpress.org/Dashboard_Widgets_API}
 *
 * @since 0.9.0
 */
function milano_remove_dashboard_meta() {

	// Default Dashboard Widgets
  // remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
  // remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
  // remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
  // remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
  // remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
  // remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
  // remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
  // remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
  // remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );

  // How to remove plugins' Dashboard widgets (Yoast's SEO Plugin Widget)
	// remove_meta_box('yoast_db_widget', 'dashboard', 'normal');
}
add_action( 'admin_init', 'milano_remove_dashboard_meta' );


/**
 * Custom Admin Footer
 *
 * @since 0.9.0
 */
function milano_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="#" target="_blank">Your name or site here (see functions/admin.php)</a></span>.', 'milano');
}
add_filter('admin_footer_text', 'milano_custom_admin_footer');


?>
