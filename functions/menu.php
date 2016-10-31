<?php
/**
 * Theme default navigation
 *
 * - Main Menu
 * - Footer Links
 *
 * You can add additional navigation menu
 * following the same pattern
 *
 * See the Codex for more details about register_nav_menus,
 * {@link https://codex.wordpress.org/Function_Reference/register_nav_menus}
 *
 * @package MilanoWP
 * @since 0.9.0
 */


/**
 * Defines primary navigation
 * Used by milano_top_nav() and milano_off_canvas_nav()
 */
define("THEME_LOCATION", 'primary-nav');

/**
 * Creates Menus
 */
 register_nav_menus(
   array(
     'primary-nav' => __( 'Primary Nav', 'milano' ), // Used as Default Navigation
     'wired-nav'   => __( 'Wired Nav', 'milano' ),   // Used only for the Wired Navigation
     'footer-nav'  => __( 'Footer Nav', 'milano' )   // Secondary Navigation in Footer
   )
 );


/**
 * Main Menu settings
 *
 * @since 0.9.0
 */
function milano_top_nav() {
  wp_nav_menu(array(
    'container'      => false, // Remove nav container
    'menu_class'     => 'vertical medium-horizontal menu', // Adding custom nav class
    'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
    'theme_location' => THEME_LOCATION, // Where it's located in the theme
    'depth'          => 3, // Limit the depth of the nav
    'fallback_cb'    => false, // Fallback function (see below)
    'walker'         => new Topbar_Menu_Walker()
  ));
}


/**
 * Off Canvas Menu settings
 *
 * @since 0.9.0
 */
function milano_off_canvas_nav() {
  wp_nav_menu(array(
    'container'      => false, // Remove nav container
    'menu_class'     => 'vertical menu', // Adding custom nav class
    'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
    'theme_location' => THEME_LOCATION, // Where it's located in the theme
    'depth'          => 5, // Limit the depth of the nav
    'fallback_cb'    => false, // Fallback function (see below)
    'walker'         => new Off_Canvas_Menu_Walker()
  ));
}


/**
 * Footer Nav settings
 *
 * @since 0.9.0
 */
function milano_footer_links() {
  wp_nav_menu(array(
    'container'      => 'false', // Remove nav container
    'menu'           => __( 'Footer Nav', 'milano' ), // Nav name
    'menu_class'     => 'menu', // Adding custom nav class
    'theme_location' => 'footer-nav', // Where it's located in the theme
    'depth'          => 0, // Limit the depth of the nav
    'fallback_cb'    => '' // Fallback function
  ));
}


?>
