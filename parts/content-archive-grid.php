<?php
/**
 * The template part for displaying results in archive and search pages
 *
 * This template makes use of the grid system provided by Foundation.
 *
 * Learn more about WordPress Template Hierarchy,
 * {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * Learn more about the Foundation Grid System,
 * {@link http://foundation.zurb.com/sites/docs/grid.html}
 *
 * @package MilanoWP
 * @since 0.9.0
 */

// Adjust the amount of rows in the grid
$grid_columns = 4; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="row archive-grid" data-equalizer>

<?php endif; ?>

		<div class="large-3 medium-3 columns panel" data-equalizer-watch>

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

				<section class="featured-image" itemprop="articleBody">
					<?php the_post_thumbnail('full'); ?>
				</section> <!-- END article > section -->

				<header class="entry-header">
					<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<p class="byline">Posted on <?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>  - <?php the_category(', ') ?></p>
				</header> <!-- END article > header -->

				<section class="entry-content" itemprop="articleBody">
					<?php the_content('<button class="tiny">' . __( 'Read more...', 'milano' ) . '</button>'); ?>
				</section> <!-- END article > section -->

			</article> <!-- END article -->

		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div> <!-- END .row -->

<?php endif; ?>
