<?php
/**
 * Full Width Page - no sidebar
 * Template Name: Full Width
 *
 * You can use this file as base to create your own templates.
 * To change template, Page Editor > Page Attributes > template,
 * and are named after the label "Template Name: ..." above.
 *
 * @package MilanoWP
 * @since 0.9.0
 */

get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- END #main -->

		</div> <!-- END #inner-content .row -->

	</div> <!-- END #content -->

<?php get_footer(); ?>
