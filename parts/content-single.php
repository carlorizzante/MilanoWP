<?php
/**
 * The default template for displaying post and custom post content
 *
 * Archive and Search pages use content-archive.php.
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="entry-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<p class="byline">Posted on <?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>  - <?php the_category(', ') ?></p>
  </header> <!-- END article > header -->

  <section class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- END article > section -->

	<footer class="entry-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'milano' ) . '</span> ', ', ', ''); ?></p>
	</footer> <!-- END article > footer -->

	<?php comments_template(); ?>

</article> <!-- END article -->
