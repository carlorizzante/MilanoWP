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
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class("large-3 medium-4 columns panel"); ?> role="article" data-equalizer-watch>

	<section class="featured-image" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
	</section> <!-- END article > section -->

	<header class="entry-header">
		<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<p class="byline">Posted on <?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>  - <?php the_category(', ') ?></p>
	</header> <!-- END article > header -->

	<section class="entry-content" itemprop="articleBody">
		<?php the_excerpt('<button class="tiny">' . __( 'Read more...', 'milano' ) . '</button>'); ?>
	</section> <!-- END article > section -->

</article> <!-- END article -->
