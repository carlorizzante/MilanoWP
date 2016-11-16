<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package MilanoWP
 * @since 0.9.0
 */

get_header(); ?>

	<div id="content">
		<div id="inner-content" class="row">

	    <main id="main" class="large-8 medium-8 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/content', 'page' ); ?>

		    <?php endwhile; endif; ?>

			</main> <!-- END #main -->

			<div id="sidebar-primary" class="sidebar large-4 medium-4 columns" role="complementary">
				<?php get_sidebar("primary"); ?>
			</div>

		</div> <!-- END #inner-content .row -->
	</div> <!-- END #content -->

<?php get_footer(); ?>
