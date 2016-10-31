<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package MilanoWP
 * @since 0.9.0
 */

get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/content', 'single' ); ?>

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'none' ); ?>

		    <?php endif; ?>

		</main> <!-- END #main -->

		<?php get_sidebar(); ?>

	</div> <!-- END #inner-content .row -->

</div> <!-- END #content -->

<?php get_footer(); ?>
