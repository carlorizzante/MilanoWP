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
 * Removes Dashboard Widgets.
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
 * Reset the excerpt length to a custom value
 *
 * {@link https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length}
 *
 * @since 0.9.0
 */
function milano_custom_excerpt_length( $length ) {
	return 55; // 55 is the default excerpt length
}
add_filter( 'excerpt_length', 'milano_custom_excerpt_length', 999 );


/**
 * Add words count for the excerpt in the post editor
 *
 * {@link https://premium.wpmudev.org/blog/character-counter-excerpt-box/}
 *
 * @since 0.9.0
 */
function milano_excerpt_counter_js(){

	if ('page' != get_post_type()) { ?>
		<script>
		jQuery(document).ready(function(){
		  var max_chars_length = 370;
		  var max_words_length = 55;
		  var text_color = "#333";
		  var text_color_alt = "#666";
		  var chars_count = 0;
			var words_count = 0;
		  var excerpt = jQuery("#excerpt");

			function wordCount(string){
		    var wom = string.match(/\S+/g);
        return wom ? wom.length : 0;
			}

		  jQuery("#postexcerpt .handlediv").after(
				'<style>._set_warning { color: red; }</style>'
				+ '<div style="position:absolute;top:12px;right:34px;color:"' + text_color_alt + ';">'
				+ '<small>Excerpt length: </small>'

				+ '<span id="excerpt_words_counter"></span>'
				+ '<span>/' + max_words_length + '</span>'
				+ '<small> <span>words,</span></small> '

				+ '<span id="excerpt_chars_counter"></span>'
				+ '<span>/' + max_chars_length + '</span>'
				+ '<small> <span>characters.</span></small>'
				+ '</div>'
			);

		  jQuery("span#excerpt_chars_counter").text(excerpt.val().length);
			jQuery("span#excerpt_words_counter").text(wordCount(excerpt.val()));

			if(excerpt.val().length > max_chars_length) {
				// jQuery(this).val(jQuery(this).val().substr(0, max_chars_length));
				jQuery("span#excerpt_chars_counter").addClass("_set_warning");
			} else {
				jQuery("span#excerpt_chars_counter").removeClass("_set_warning");
			}
			if(wordCount(excerpt.val()) > max_words_length) {
				// jQuery(this).val(jQuery(this).val().substr(0, max_chars_length));
				jQuery("span#excerpt_words_counter").addClass("_set_warning");
			} else {
				jQuery("span#excerpt_words_counter").removeClass("_set_warning");
			}

		  excerpt.keyup( function() {
		    if(excerpt.val().length > max_chars_length) {
		      // jQuery(this).val(jQuery(this).val().substr(0, max_chars_length));
					jQuery("span#excerpt_chars_counter").addClass("_set_warning");
		    } else {
					jQuery("span#excerpt_chars_counter").removeClass("_set_warning");
				}
				if(wordCount(excerpt.val()) > max_words_length) {
					// jQuery(this).val(jQuery(this).val().substr(0, max_chars_length));
					jQuery("span#excerpt_words_counter").addClass("_set_warning");
				} else {
					jQuery("span#excerpt_words_counter").removeClass("_set_warning");
				}
		    jQuery("span#excerpt_chars_counter").text(excerpt.val().length);
				jQuery("span#excerpt_words_counter").text(wordCount(excerpt.val()));
		  });
		});
		</script>
	<?php }
}
add_action( 'admin_head-post.php', 'milano_excerpt_counter_js');
add_action( 'admin_head-post-new.php', 'milano_excerpt_counter_js');



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
