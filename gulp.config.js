module.exports = {
	src: {
		foundation: [

			// Foundation core
      './vendor/foundation-sites/js/foundation.core.js',
      './vendor/foundation-sites/js/foundation.util.*.js',

      // Foundation modules
      './vendor/foundation-sites/js/foundation.abide.js',
      './vendor/foundation-sites/js/foundation.accordion.js',
      './vendor/foundation-sites/js/foundation.accordionMenu.js',
      './vendor/foundation-sites/js/foundation.drilldown.js',
      './vendor/foundation-sites/js/foundation.dropdown.js',
      './vendor/foundation-sites/js/foundation.dropdownMenu.js',
      './vendor/foundation-sites/js/foundation.equalizer.js',
      './vendor/foundation-sites/js/foundation.interchange.js',
      './vendor/foundation-sites/js/foundation.magellan.js',
      './vendor/foundation-sites/js/foundation.offcanvas.js',
      './vendor/foundation-sites/js/foundation.orbit.js',
      './vendor/foundation-sites/js/foundation.responsiveMenu.js',
      './vendor/foundation-sites/js/foundation.responsiveToggle.js',
      './vendor/foundation-sites/js/foundation.reveal.js',
      './vendor/foundation-sites/js/foundation.slider.js',
      './vendor/foundation-sites/js/foundation.sticky.js',
      './vendor/foundation-sites/js/foundation.tabs.js',
      './vendor/foundation-sites/js/foundation.toggler.js',
      './vendor/foundation-sites/js/foundation.tooltip.js'
  	],
    js: './src/js/**/*.js',
    sass: './src/scss/**/*.scss',
    css: [
      './src/css/**/*.css',
      '!./scr/css/**/*.min.css'
    ],
    php: [
      '**/*.php',
      '!./images',
      '!./logs',
      '!./node_modules',
      '!./public',
      '!./src',
      '!./vendor',
      '!./bower_components'
    ]
	},
  dest: {
    css: './public/css',
    js: './public/js'
  }
};
