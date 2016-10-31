<?php
/**
 * The template for displaying custom taxonomy archives
 *
 * This is the custom post type taxonomy template.
 * If you edit the custom taxonomy name, you've got
 * to change the name of this template to
 * reflect that name change.
 *
 * i.e. if your custom taxonomy is called
 * register_taxonomy( 'shoes',
 * then your single template should be
 * taxonomy-shoes.php
 *
 * @package MilanoWP
 * @since 0.9.0
 */
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

	    <main id="main" class="large-8 medium-8 columns first" role="main">

		    <header>
		    	<h1 class="page-title"><span><?php _e( 'Posts Categorized:', 'milano' ); ?></span> <?php single_cat_title(); ?></h1>
		    </header>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'archive' ); ?>

			<?php endwhile; ?>

				<?php milano_page_navi(); ?>

			<?php else : ?>

				<?php get_template_part( 'parts/content', 'none' ); ?>

			<?php endif; ?>

	    </main> <!-- END #main -->

	    <?php get_sidebar(); ?>

	</div> <!-- END #inner-content .row -->

</div> <!-- END #content -->

<?php get_footer(); ?>
