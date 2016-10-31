<?php
/**
 * This is the custom post type post template.
 * If you edit the post type name, you've got
 * to change the name of this template to
 * reflect that name change.
 *
 * i.e. if your custom post type is called
 * register_post_type( 'bookmarks',
 * then your single template should be
 * single-bookmarks.php
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns first" role="main">

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
