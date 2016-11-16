<?php
/**
 * The template for displaying search results pages.
 *
 * @package MilanoWP
 * @since 0.9.0
 */

get_header(); ?>

	<div id="content" class="search-result">

		<div id="inner-content" class="row">

			<main id="main" class="large-8 medium-8 columns first" role="main">
				<header>
					<h1 class="archive-title"><?php _e( 'Search Results for:', 'milano' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php
					/*
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'parts/content', 'archive' ); ?>

				<?php endwhile; ?>

					<?php milano_page_navi(); ?>

				<?php else : // If no content, include the "No posts found" template. ?>

					<?php get_template_part( 'parts/content', 'none' ); ?>

			    <?php endif; ?>

		    </main> <!-- END #main -->

				<div id="sidebar-primary" class="sidebar large-4 medium-4 columns" role="complementary">
					<?php get_sidebar("primary"); ?>
				</div>

		</div> <!-- END #inner-content .row -->

	</div> <!-- END #content -->

<?php get_footer(); ?>
