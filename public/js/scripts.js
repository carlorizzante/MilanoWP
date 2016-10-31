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

	// Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

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

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndwLWZvdW5kYXRpb24uanMiLCJ3cC1qcy5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUNoQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6InNjcmlwdHMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIFdQIEZPVU5EQVRJT05cbiAqXG4gKiBEbyBub3QgcmVtb3ZlIHRoaXMgZmlsZSBpZiB5b3UgYXJlIHVzaW5nIHRoZSBzY3JpcHRlZCBmZWF0dXJlcyBwYXJ0XG4gKiBvZiBGb3VuZGF0aW9uLlxuICpcbiAqIEBwYWNrYWdlIE1pbGFub1dQXG4gKiBAc2luY2UgMC45LjBcbiAqL1xuXG5cbi8qKlxuICogalF1ZXJ5IGNvbXBhdGliaWxpdHkgZm9yIEZvdW5kYXRpb242IGFuZCBXb3JkUHJlc3NcbiAqL1xualF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcblxuICAvLyBSZW1vdmUgZW1wdHkgUCB0YWdzIGNyZWF0ZWQgYnkgV1AgaW5zaWRlIG9mIEFjY29yZGlvbiBhbmQgT3JiaXRcbiAgalF1ZXJ5KCcuYWNjb3JkaW9uIHA6ZW1wdHksIC5vcmJpdCBwOmVtcHR5JykucmVtb3ZlKCk7XG5cblx0Ly8gTWFrZXMgc3VyZSBsYXN0IGdyaWQgaXRlbSBmbG9hdHMgbGVmdFxuXHRqUXVlcnkoJy5hcmNoaXZlLWdyaWQgLmNvbHVtbnMnKS5sYXN0KCkuYWRkQ2xhc3MoICdlbmQnICk7XG5cblx0Ly8gQWRkcyBGbGV4IFZpZGVvIHRvIFlvdVR1YmUgYW5kIFZpbWVvIEVtYmVkc1xuXHRqUXVlcnkoJ2lmcmFtZVtzcmMqPVwieW91dHViZS5jb21cIl0sIGlmcmFtZVtzcmMqPVwidmltZW8uY29tXCJdJykud3JhcChcIjxkaXYgY2xhc3M9J2ZsZXgtdmlkZW8nLz5cIik7XG5cbn0pO1xuXG5cbi8qKlxuICogRmluYWxseSBpbml0aWFsaXplcyBGb3VuZGF0aW9uXG4gKi9cbmpRdWVyeShkb2N1bWVudCkuZm91bmRhdGlvbigpO1xuIiwiLyoqXG4gKiBKQVZBU0NSSVBUXG4gKlxuICogVXNlIHRoaXMgZmlsZSB0byBhZGQgYmVoYXZpb3IgYW5kIGFuaW1hdGlvbiB0byB5b3VyIHRoZW1lXG4gKiB2aWEgSmF2YXNjcmlwdC4gSWYgeW91IGtlZXAgYWxsIHlvdXIgc2NyaXB0cyBjb250YWluZWQgd2l0aGluXG4gKiB0aGUgalF1ZXJ5IHdyYXBwZXIgKGFzIHlvdSBzZWUgYmVsb3cpIHRoZXkgd2lsbCBiZSBleGVjdXRlZFxuICogYXMgc29vbiBhcyBhbGwgZmlsZXMgaGF2ZSBiZWVuIGxvYWRlZCBpbiB0aGUgYnJvd3Nlci5cbiAqXG4gKiBUaGlzIGZpbGUgaXMgbG9hZGVkIGFmdGVyIHdwLWZvdW5kYXRpb24uanNcbiAqXG4gKiBAcGFja2FnZSBNaWxhbm9XUFxuICogQHNpbmNlIDAuOS4wXG4gKi9cblxuXG5qUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcblxuXHQvLyAuLi5nbyBoZWFkLCB3cml0ZSBzb21lIG5lYXQgSmF2YXNjcmlwdCEgOilcblxufSk7XG4iXX0=
