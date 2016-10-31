<?php
/**
 * The template for displaying page content
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="entry-header page-header">
		<h1 class="entry-title page-title"><?php the_title(); ?></h1>
	</header> <!-- END article > header -->

  <section class="entry-content" itemprop="articleBody">
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
	</section> <!-- END article > section -->

	<footer class="entry-footer">
	</footer> <!-- END article > footer -->

	<?php comments_template(); ?>

</article> <!-- END article -->
