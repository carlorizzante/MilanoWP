<?php
/**
 * Extends Menu Walker for Foundation 6
 *
 * Credit: Brett Mason,
 * {@link https://github.com/brettsmason}
 *
 * @package MilanoWP
 * @since 0.9.0
 */


class Topbar_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}


class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
	}
}

?>
