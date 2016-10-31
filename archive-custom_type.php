<?php
/**
 * The template for displaying archive pages for custom posts
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * Learn more about WordPress Template Hierarchy,
 * {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package MilanoWP
 * @since 0.9.0
 */

get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-8 medium-8 columns" role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
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
