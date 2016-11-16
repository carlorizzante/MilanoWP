/**
 * Gulp logic | execute Gulp from Terminal
 *
 * Default task, use to compile files for production
 * - gulp
 *
 * Development task, integrate with LiveReload
 * - gulp watch
 *
 * @package MilanoWP
 * @since 0.9.0
 */

var gulp = require('gulp'),
    gutil = require('gulp-util'),
    plumber = require('gulp-plumber'),
    sass = require('gulp-sass'),
    concatCSS = require('gulp-concat-css'),
    phplint = require('gulp-phplint'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    bower = require('gulp-bower'),
    babel = require('gulp-babel'),
    sourcemaps = require('gulp-sourcemaps'),
    livereload = require('gulp-livereload');


/**
 * SETTINGS
 * loads configuration settings from gulp.config.js
 */
var config = require('./gulp.config.js');


/**
 * VENDOR
 * Installs or updates Bower dependencies into the "vendor" folder
 * Requires Bower installed globally (see https://bower.io/)
 */
gulp.task('vendor', function() {
  return bower({ cmd: 'update'})
    .pipe(gulp.dest('./vendor'))
});


/**
 * DEFAULT
 * To execute type "gulp" on the Terminal.
 * To work with plain CSS files instead of Sass,
 * substitute "sass" with "css".
 */
gulp.task('default', function() {
  gulp.start(
    'sass',
    'js',
    'foundation',
    'phplint'
  );
});


/**
 * WATCH
 * To execute type "gulp watch" on the Terminal.
 */
gulp.task('watch', function() {

  livereload.listen();

  // Watch .scss files
  gulp.watch(config.src.sass, ['sass']);

  // Watch site-js files
  gulp.watch(config.src.js, ['js']);

  // Watch foundation-js files
  gulp.watch(config.src.foundation, ['foundation']);

  // Watch PHP files
  gulp.watch(config.src.php, ['phplint']);

});


/**
 * SASS
 * Compile CSS from Sass, adds vendor prefixes, and minifies
 */
gulp.task('sass', function() {
  return gulp.src(config.src.sass)
    .pipe(plumber(function(error) {
      gutil.log(gutil.colors.red(error.message));
      this.emit('end');
    }))
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest(config.dest.css))
    .pipe(rename({suffix: '.min'}))
    .pipe(cssnano())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(config.dest.css))
    .pipe(livereload());
});


/**
 * PLAIN CSS
 * Concatenates and minifies vanilla CSS files
 */
gulp.task('css', function() {
  return gulp.src(config.src.css)
    .pipe(concatCSS('style.css'))
    .pipe(gulp.dest(config.dest.css))
    .pipe(rename({suffix: '.min'}))
    .pipe(cssnano())
    .pipe(gulp.dest(config.dest.css))
    .pipe(livereload());
});


/**
 * JAVASCRIPT
 * JSHint, concat, and minify your JavaScript
 */
gulp.task('js', function() {
  return gulp.src(config.src.js)
    .pipe(plumber(function(error) {
      gutil.log(gutil.colors.red(error.message));
      this.emit('end');
    }))
    .pipe(sourcemaps.init())
    // .pipe(babel({presets: ['es2015']})) // Enable Babel support for ES6
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(concat('scripts.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.dest.js))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(config.dest.js))
    .pipe(livereload());
});


/**
 * FOUNDATION
 * JSHint, concat, and minify Foundation JavaScript
 */
gulp.task('foundation', function() {
  return gulp.src(config.src.foundation)
    .pipe(plumber(function(error) {
      gutil.log(gutil.colors.red(error.message));
      this.emit('end');
    }))
    .pipe(sourcemaps.init())
    .pipe(babel({presets: ['es2015']}))
    .pipe(concat('foundation.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.dest.js))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify().on('error', gutil.log))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(config.dest.js))
    .pipe(livereload());
});


/**
 * PHPlint, validate PHP files on the fly
 */
 gulp.task('phplint', function() {
   return gulp.src(config.src.php)
     .pipe(plumber(function(error) {
       gutil.log(gutil.colors.red(error.message));
       this.emit('end');
     }))
     .pipe(livereload())
     .pipe(phplint('', {
       skipPassedFiles: true
     }))
     .pipe(phplint.reporter('fail'));
 });
