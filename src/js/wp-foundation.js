/**
 * WP FOUNDATION
 *
 * Do not remove this file if you are using the scripted features part
 * of Foundation.
 *
 * @package MilanoWP
 * @since 0.9.0
 */


/**
 * jQuery compatibility for Foundation6 and WordPress
 */
jQuery(document).ready(function() {

  // Remove empty P tags created by WP inside of Accordion and Orbit
  jQuery('.accordion p:empty, .orbit p:empty').remove();

	// Force the last column in the archive-grid to align to the left
  // jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");

});


/**
 * Finally initializes Foundation
 */
jQuery(document).foundation();
