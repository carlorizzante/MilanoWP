<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
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

		    	<header>
		    		<h1 class="page-title"><?php the_archive_title();?></h1>
						<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>

					<div class="row archive-grid" data-equalizer>

			    	<?php if (have_posts()) : while (have_posts()) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) inside
							 * /parts directory and that will be used instead.
							 */
							get_template_part( 'parts/content', 'archive-grid' ); ?>

						<?php endwhile; ?>

							<?php milano_page_navi(); ?>

						<?php else : // If no content, include the "No posts found" template. ?>

							<?php get_template_part( 'parts/content', 'none' ); ?>

						<?php endif; ?>

					</div>

				</main> <!-- END #main -->

				<div id="sidebar-primary" class="sidebar large-4 medium-4 columns" role="complementary">
					<?php get_sidebar("primary"); ?>
				</div>

	    </div> <!-- END #inner-content .row -->

	</div> <!-- END #content -->

<?php get_footer(); ?>
