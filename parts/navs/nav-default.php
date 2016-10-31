<?php
/**
 * Nav Default
 *
 * Applies title-bar to medium sized screens, and right canvas
 * to smaller screens.
 *
 * Learn more about menu types in Foundation,
 * {@link http://foundation.zurb.com/sites/docs/navigation.html}
 *
 * For more detailed instruction about how to customize the
 * default navigation, visit the following page:
 * {@link http://zurb.com/building-blocks/top-bar-with-off-canvas}
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?>
			<!-- off-canvas title-bar for 'small' screen -->
			<div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
				<div class="title-bar-left">
					<span class="title-bar-title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></span>
				</div>
				<div class="title-bar-right">
					<button class="menu-icon" type="button" data-open="offCanvasRight"></button>
				</div>
			</div>

			<!-- off-canvas right menu -->
			<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
				<!-- Close button -->
				<button class="close-button" aria-label="Close menu" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
				<?php milano_off_canvas_nav(); ?>
			</div>

			<!-- "wider" title-bar menu for 'medium' and up -->
			<div id="widemenu" class="title-bar">
				<div class="title-bar-left">
					<ul class="menu">
						<li class=""><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
					</ul>
				</div>
				<div class="title-bar-right">
					<?php milano_top_nav(); ?>
				</div>
			</div>
