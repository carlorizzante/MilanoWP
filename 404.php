<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package MilanoWP
 * @since 0.9.0
 */

get_header(); ?>

	<div id="content" class="page-404">

		<div id="inner-content" class="row">

			<main id="main" class="large-8 medium-8 columns" role="main">

				<article id="content-not-found">

					<header class="article-header">
						<h1><?php _e( 'Epic 404 - Article Not Found', 'milano' ); ?></h1>
					</header> <!-- END article > header -->

					<section class="entry-content">
						<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'milano' ); ?></p>
					</section> <!-- END article > section -->

					<section class="search">
					    <p><?php get_search_form(); ?></p>
					</section> <!-- END section.search -->

				</article> <!-- END article -->

			</main> <!-- END #main -->

		</div> <!-- END #inner-content .row -->

	</div> <!-- END #content -->

<?php get_footer(); ?>
