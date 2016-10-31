<?php
/**
 * The template for displaying the footer
 *
 * Closes the previously opened container divs, in the following order.
 *
 * div.off-canvas-content
 * div.off-canvas-wrapper-inner
 * div.off-canvas-wrapper
 *
 * Includes scripts and elements added by activated plugins.
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?>
					<footer id="page-footer" class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="medium-12 columns">
								<nav role="navigation">
	    						<?php milano_footer_links(); ?>
	    					</nav>
	    				</div>
							<div class="medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
							</div>
						</div> <!-- END #inner-footer -->
					</footer> <!-- END #page-footer -->
				</div>  <!-- END .off-canvas-content -->
			</div> <!-- END .off-canvas-wrapper-inner -->
		</div> <!-- END .off-canvas-wrapper -->
		<?php wp_footer(); ?>

		<?php
		/**
		 * In order for LiveReload to work you need to copy the
		 * file livereload.js into the root dir, same folder where
		 * there is the wp_config.php file.
		 *
		 * Also, you need to set WP_DEBUG to true, otherwise
		 * LiveReload will not load.
		 *
		 * To load LiveReload set WP_DEBUG to true in wp_config.php
		 */
		if (defined('WP_DEBUG') && (WP_DEBUG == true)) {
			get_template_part( 'parts/dev', 'livereload' );
		} ?>

	</body>
</html>
