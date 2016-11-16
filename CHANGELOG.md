# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/).
This project adheres to [Semantic Versioning](http://semver.org/).

## [0.9.2] - 2016-11-16
## Added
- Class "body.constrained" to set max-width CSS property for ".off-canvas-content".
- CSS rule to force the last column to the left in grids.

## Fixed
- Loads "sidebar-primary.php" from "index.php", "page.php", "single.php" and templates.
- Margins left and right for elements within ".archive.grid".

## Removed
- Javascript/jQuery script to force the last column to align to the left in grids in "archive-grids.php".

## [0.9.1] - 2016-11-16
### Added
- sidebar-primary.php

### Changed
- Set "msapplication-TileColor" and "theme-color" to #2199E8.
- Changed Gulp task BOWER into VENDOR.
- Load jQuery 2.2.4 from /vendor folder.

### Fixed
- Align last element ".archive-grid .columns" to the closest left in grids.

## [0.9.0] - 2016-10-31
- First release.
- $grid-column-responsive-gutter renamed to $grid-column-gutter in vendor/foundation-sites/scss/grid/_grid.scss:41.
