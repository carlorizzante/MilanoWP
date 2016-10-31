<?php
/**
 * Dev Utilities
 *
 * @package MilanoWP
 * @since 0.9.0
 */


/**
 * Prints the content of a variable wrapped
 * in a convenient set of <pre> tags.
 *
 * @since 0.9.0
 */
 if ( ! function_exists( 'mark' )) :
 function mark( $var = 'mark!' ) {

 /* opening */
   echo "\n" . '<pre>';

 /* if it's just plain false */
   if ( $var === false ) { print 'false'; }

 /* if the variable isn't set yet */
   else if ( ! isset( $var )) { print 'Variable not set, yet'; }

 /* if it's an array */
   else if ( is_array( $var )) { print_r( $var );  }

 /* if it's an object */
   else if ( is_object($var) /* && get_class($var)==='stdClass' */ ) { print_r( $var ); }

 /* if it's a number */
 	else if ( is_numeric( $var )) { print $var; }

 /* if it's empty */
   else if ( empty( $var ) || !$var ) { print 'Empty'; }

 /* if it's an plain text */
   else if ( $var ) { print esc_html($var); }

 /* closing */
   echo '</pre>' . "\n";
 } endif;




?>
