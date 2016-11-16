<?php
/**
 * Primary Sidebar
 *
 * Main Widgets Area, you can add widgets from the Admin Area
 * Admin > Appearance > Widgets
 *
 * @link https://codex.wordpress.org/Sidebars
 *
 * @package MilanoWP
 * @since 0.9.1
 */
?>

<?php if ( is_active_sidebar( 'sidebar-primary' ) ) : ?>

	<?php dynamic_sidebar( 'sidebar-primary' ); ?>

<?php else : // If no widgets have been defined, show a reminder ?>

	<div class="callout">
		<p><?php _e( '<h5>No Widgets found</h5><p>This is the Primary Sidebar, to add Widgets go to <i>Appearance > Widgets</i>.</p><p>To remove this warning edit <i>sidebar-primary.php</i>.', 'milano' );  ?></p>
	</div>

<?php endif; ?>
