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

/**
 * JAVASCRIPT
 *
 * Use this file to add behavior and animation to your theme
 * via Javascript. If you keep all your scripts contained within
 * the jQuery wrapper (as you see below) they will be executed
 * as soon as all files have been loaded in the browser.
 *
 * This file is loaded after wp-foundation.js
 *
 * @package MilanoWP
 * @since 0.9.0
 */


jQuery(document).ready(function () {

	// ...go head, write some neat Javascript! :)

});

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndwLWZvdW5kYXRpb24uanMiLCJ3cC1qcy5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUNoQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6InNjcmlwdHMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIFdQIEZPVU5EQVRJT05cbiAqXG4gKiBEbyBub3QgcmVtb3ZlIHRoaXMgZmlsZSBpZiB5b3UgYXJlIHVzaW5nIHRoZSBzY3JpcHRlZCBmZWF0dXJlcyBwYXJ0XG4gKiBvZiBGb3VuZGF0aW9uLlxuICpcbiAqIEBwYWNrYWdlIE1pbGFub1dQXG4gKiBAc2luY2UgMC45LjBcbiAqL1xuXG5cbi8qKlxuICogalF1ZXJ5IGNvbXBhdGliaWxpdHkgZm9yIEZvdW5kYXRpb242IGFuZCBXb3JkUHJlc3NcbiAqL1xualF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcblxuICAvLyBSZW1vdmUgZW1wdHkgUCB0YWdzIGNyZWF0ZWQgYnkgV1AgaW5zaWRlIG9mIEFjY29yZGlvbiBhbmQgT3JiaXRcbiAgalF1ZXJ5KCcuYWNjb3JkaW9uIHA6ZW1wdHksIC5vcmJpdCBwOmVtcHR5JykucmVtb3ZlKCk7XG5cblx0Ly8gRm9yY2UgdGhlIGxhc3QgY29sdW1uIGluIHRoZSBhcmNoaXZlLWdyaWQgdG8gYWxpZ24gdG8gdGhlIGxlZnRcbiAgLy8galF1ZXJ5KCcuYXJjaGl2ZS1ncmlkIC5jb2x1bW5zJykubGFzdCgpLmFkZENsYXNzKCAnZW5kJyApO1xuXG5cdC8vIEFkZHMgRmxleCBWaWRlbyB0byBZb3VUdWJlIGFuZCBWaW1lbyBFbWJlZHNcblx0alF1ZXJ5KCdpZnJhbWVbc3JjKj1cInlvdXR1YmUuY29tXCJdLCBpZnJhbWVbc3JjKj1cInZpbWVvLmNvbVwiXScpLndyYXAoXCI8ZGl2IGNsYXNzPSdmbGV4LXZpZGVvJy8+XCIpO1xuXG59KTtcblxuXG4vKipcbiAqIEZpbmFsbHkgaW5pdGlhbGl6ZXMgRm91bmRhdGlvblxuICovXG5qUXVlcnkoZG9jdW1lbnQpLmZvdW5kYXRpb24oKTtcbiIsIi8qKlxuICogSkFWQVNDUklQVFxuICpcbiAqIFVzZSB0aGlzIGZpbGUgdG8gYWRkIGJlaGF2aW9yIGFuZCBhbmltYXRpb24gdG8geW91ciB0aGVtZVxuICogdmlhIEphdmFzY3JpcHQuIElmIHlvdSBrZWVwIGFsbCB5b3VyIHNjcmlwdHMgY29udGFpbmVkIHdpdGhpblxuICogdGhlIGpRdWVyeSB3cmFwcGVyIChhcyB5b3Ugc2VlIGJlbG93KSB0aGV5IHdpbGwgYmUgZXhlY3V0ZWRcbiAqIGFzIHNvb24gYXMgYWxsIGZpbGVzIGhhdmUgYmVlbiBsb2FkZWQgaW4gdGhlIGJyb3dzZXIuXG4gKlxuICogVGhpcyBmaWxlIGlzIGxvYWRlZCBhZnRlciB3cC1mb3VuZGF0aW9uLmpzXG4gKlxuICogQHBhY2thZ2UgTWlsYW5vV1BcbiAqIEBzaW5jZSAwLjkuMFxuICovXG5cblxualF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XG5cblx0Ly8gLi4uZ28gaGVhZCwgd3JpdGUgc29tZSBuZWF0IEphdmFzY3JpcHQhIDopXG5cbn0pO1xuIl19
