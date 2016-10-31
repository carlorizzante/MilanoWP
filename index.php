<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package MilanoWP
 * @since 0.9.0
 */

get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-8 medium-8 columns" role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/content', 'archive' ); ?>

				<?php endwhile; ?>

					<?php milano_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'none' ); ?>

				<?php endif; ?>

		    </main> <!-- END #main -->

		    <?php get_sidebar(); ?>

		</div> <!-- END #inner-content .row -->

	</div> <!-- END #content -->

<?php get_footer(); ?>
