# MilanoWP
Rock Solid WordPress Starter Theme with Foundation 6

### Versioning
- FontAwesome 4.6.3
- Foundation 6.2.4
- jQuery 2.2.4
- Motion UI 1.2.2

For a more detailed list of modules used with MilanoWP see the file bower.json. To update all modules via Bower open the Terminal on the root directory of your theme and digit "bower update".

Packages used by Gulp and Babel are listed in package.json.

Gulp configuration and logic are contained in gulp.config.js and gulpfile.js.

### Official site
http://milanowp.com

### Repository
https://github.com/carlorizzante/milanowp

### Installation guide
http://milanowp.com/docs

## Quick start
MilanoWP is a starter theme for WordPress that uses Foundation 6 for layout and fast development. You can start shaping your new theme using plain and vanilla CSS (so without Sass neither Gulp). CSS and JS files for production are in the folder dist/css and dist/js. All PHP files are ready for production.

However, if you mean to use MilanoWP as it has been designed to, you will need NodeJS and few packages that you can download via NPM. It's all really simple.

To install NodeJS visit [NodeJS](https://nodejs.org). To install GulpJS visit [Gulp](http://gulpjs.com/). To get started with MilanoWP, Gulp, and advanced development, please visit [MilanoWP](http://milanowp.com).

## What is MilanoWP?
MilanoWP is a blank WordPress theme that uses Foundation 6 for speed development, and gives you all the power and flexibility you need to build complex, mobile friendly websites without having to start from scratch.

## What comes with MilanoWP?
MilanoWP comes pre-baked with all of the great features that are found in the Foundation framework – simply put, if it works in Foundation, it will work in MilanoWP. The theme also includes:

- Solid title-bar with canvas (more variants to come)
- Motion-UI
- Grid archive templates
- Support for jGrid (responsive justified grid system)
- Translation Support
- Automation through Bower and Gulp
- More to come... ;)

## What tools do I need to use MilanoWP?
MilanoWP is best used in combination with Gulp and Sass.

Gulp comes pre-configured with all you need to validate, concatenate, minify, and deploy files for production, so the only thing you need to learn is how to type "gulp watch" in the Terminal.

Sass is too awesome not to use it. It is very similar to LESS. Foundation makes heavy use of Sass, while Bootstrap relies on LESS (with version 4 Bootstrap will transition to Sass as well). If you know LESS, you already know Sass. If you know CSS, Sass and LESS are just a tiny step head and you'll learn how to use them in a matter of minutes.

## Getting Started With Gulp
- Install [NodeJS](https://nodejs.org) and [Gulp](http://gulpjs.com/)
- Open the Terminal on your theme directory
- Run "npm install" (this might take a while)
- Run "gulp" to confirm everything is working

[Read more about how Gulp is used with MilanoWP](http://milanowp.com/docs/gulp/).

## A note regarding LiveReload
To use LiveReload copy the file livereload.js into the root of your WordPress site, or multisite (simply put where the file config.php is). Enable the debug mode adding the following line to the config.php file.

define('WP_DEBUG', true);

Done that, execute Gulp via Terminal: type "gulp watch" and press return.

Use "gulp" to compile files for production, and "gulp watch" for development. You can further configure tasks editing the file gulpfile.js.

For mode details about MilanoWP please visit [MilanoWP](http://milanowp.com).

## Loading minified files in production

Gulp is configured to output a minified version of all production files as well. To load minified files (CSS and Javascript) in production (on your live site), add the following line to the wp-config.php file.

define('PRODUCTION', true);
