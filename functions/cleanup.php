<?php
/**
 * Starts the theme up and cleans up few parts
 *
 * @package MilanoWP
 * @since 0.9.0
 */


/**
 * Call actions and filter to clean up HEAD and BODY.
 *
 * @since 0.9.0
 */
function milano_start() {

  add_action('init', 'milano_clean_head'); // cleans HEAD
  add_filter('wp_head', 'milano_remove_wp_widget_recent_comments_style', 1 );
  add_action('wp_head', 'milano_remove_recent_comments_style', 1);
  add_filter('gallery_style', 'milano_gallery_style');
  add_action('widgets_init', 'milano_register_sidebars' );
  add_filter('excerpt_more', 'milano_excerpt_remove_read_more_link');
}
add_action('after_setup_theme','milano_start', 16);


/**
 * Clean up the HEAD.
 *
 * @since 0.9.0
 */
function milano_clean_head() {
	// Remove category feeds
	remove_action('wp_head', 'feed_links_extra', 3);
	// Remove post and comment feeds
	remove_action('wp_head', 'feed_links', 2);
	// Remove EditURI link
	remove_action('wp_head', 'rsd_link');
	// Remove Windows live writer
	remove_action('wp_head', 'wlwmanifest_link');
	// Remove index link
	remove_action('wp_head', 'index_rel_link');
	// Remove previous link
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	// Remove start link
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	// Remove links for adjacent posts
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	// Remove WP version (improved security)
	remove_action('wp_head', 'wp_generator');
} /* end milano head cleanup */


/**
 * Remove injected CSS for recent comments widget.
 *
 * @since 0.9.0
 */
function milano_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}


/**
 * Remove injected CSS from recent comments widget.
 *
 * @since 0.9.0
 */
function milano_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}


/**
 * Remove injected CSS from gallery.
 *
 * @since 0.9.0
 */
function milano_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}


/**
 * Remove […] to a Read More link.
 *
 * @since 0.9.0
 */
function milano_excerpt_remove_read_more_link($more) {
	global $post;
	// edit here if you like
return '<a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __('Read', 'milano') . get_the_title($post->ID).'">'. __('... Read more &raquo;', 'milano') .'</a>';
}


/**
 * Sticky post-class compatibility for Foundation.
 *
 * Substitute the class .sticky with .wp-sticky.
 *
 * @since 0.9.0
 */
function remove_sticky_class($classes) {
	$classes = array_diff($classes, array("sticky"));
	$classes[] = 'wp-sticky';
	return $classes;
}
add_filter('post_class','remove_sticky_class');


/**
 * Modify the_author_posts_link() which just returns the link.
 *
 * Necessary to allow usage of the usual l10n process with printf().
 *
 * @since 0.9.0
 */
function milano_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s', 'milano' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}


/**
 * Remove remote_login_js_loader from the Domain Mapping plugin.
 *
 * More about remote_login_js_loader and performance for Multisites
 * {@link http://wordpress.org/support/topic/plugin-wordpress-mu-domain-mapping-domain-mapping-javascript}
 *
 * @since 0.9.0
 */
if ( defined( 'WP_ALLOW_MULTISITE' ) && function_exists( 'remote_login_js_loader' )) {
	remove_action( 'wp_head', 'remote_login_js_loader', 99);
}


/**
 * Flush rewrite rules for custom post types.
 *
 * Avoids issues related to permalinks and new custom post types
 * @link http://codex.wordpress.org/Function_Reference/flush_rewrite_rules
 *
 * @since 0.9.0
 */
function optima_flush_rewrite_rules() { flush_rewrite_rules(); }
add_action( 'after_switch_theme', 'optima_flush_rewrite_rules' );


?>
