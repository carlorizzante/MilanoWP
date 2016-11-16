<?php
/**
 * The template part for displaying results in archive and search pages
 *
 * Learn more about WordPress Template Hierarchy,
 * {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p class="byline">Posted on <?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>  - <?php the_category(', ') ?></p>
	</header> <!-- END article > header -->

	<section class="entry-content" itemprop="articleBody">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php the_excerpt('<button class="tiny">' . __( 'Read more...', 'milano' ) . '</button>'); ?>
	</section> <!-- END article > section -->

	<footer class="entry-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'milano') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- END article > footer -->
</article> <!-- END article -->
