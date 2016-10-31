<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more about WordPress Template Hierarchy,
 * {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?>

<div id="post-not-found" class="hentry">

	<?php if ( is_search() ) : ?>

		<header class="article-header">
			<h1><?php _e( 'Sorry, No Results.', 'milano' );?></h1>
		</header>

		<section class="entry-content">
			<p><?php _e( 'Try your search again.', 'milano' );?></p>
		</section>

		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->

		<footer class="article-footer">
			<p><?php _e( 'This is the error message in the parts/missing-content.php template.', 'milano' ); ?></p>
		</footer>

	<?php else: ?>

		<header class="article-header">
			<h1><?php _e( 'Oops, Post Not Found!', 'milano' ); ?></h1>
		</header>

		<section class="entry-content">
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'milano' ); ?></p>
		</section>

		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->

		<footer class="article-footer">
		  <p><?php _e( 'This is the error message in the parts/missing-content.php template.', 'milano' ); ?></p>
		</footer>

	<?php endif; ?>

</div>
