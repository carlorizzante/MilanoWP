<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://codex.wordpress.org/Sidebars
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?>

<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : // If no widgets have been defined, show a reminder ?>

	<div class="callout">
		<p><?php _e( '<h5>No Widgets found</h5><p>This is the sidebar, to add Widgets go to <i>Appearance > Widgets</i>.</p><p>To remove this warning edit <i>sidebar.php</i>.', 'milano' );  ?></p>
	</div>

	<?php endif; ?>

</div>
