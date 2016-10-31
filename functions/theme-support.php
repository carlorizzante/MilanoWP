<?php
/**
 * Theme Supports for MilanoWP
 *
 * {@link https://codex.wordpress.org/Function_Reference/add_theme_support}
 *
 * @package MilanoWP
 * @since 0.9.0
 */



/**
 * Define theme supports for MilanoWP.
 *
 * @since 0.9.0
 */
function milano_theme_support() {

	// Add Thumbnail Support
	add_theme_support('post-thumbnails');

	// Set default size for Thumbnails
	set_post_thumbnail_size(400, 300);
	update_option( 'thumbnail_size_w', 400 );
	update_option( 'thumbnail_size_h', 300 );
	update_option( 'thumbnail_crop', 1 );

	// Set default sizes for generic images
	update_option( 'medium_size_w', 700 );
	update_option( 'medium_size_h', 525 );
	update_option( 'large_size_w', 1024 );
	update_option( 'large_size_h', 768 );

	// Add larger sizes for big screens and higher resolutions
	add_image_size('max_width', 2048, 1536);

	// Remove the 1600px limit for images included in `srcset` attributes
	function remove_max_srcset_image_width( $max_width ) {
    return false;
	}
	add_filter( 'max_srcset_image_width', 'remove_max_srcset_image_width' );

	// Add RSS Support
	add_theme_support('automatic-feed-links');

	// Add Support for WP Controlled Title Tag
	add_theme_support('title-tag');

	// Add HTML5 Support
	add_theme_support('html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
		)
	);

	// The following section adds support for various Post Formats
	add_theme_support( 'post-formats',
		array(
			// 'aside',    // title less blurb
			'gallery',  // gallery of images
			// 'link',     // quick link to other site
			// 'image',    // an image
			'quote',    // a quick quote
			// 'status',   // a Facebook like status update
			'video',    // video
			// 'audio',    // audio
			// 'chat'      // chat transcript
		)
	);
}
add_action('after_setup_theme','milano_theme_support', 1);


?>
