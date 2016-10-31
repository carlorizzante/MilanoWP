<?php
/**
 * Related Posts
 * Matches posts by tags
 *
 * @see milano_related_posts();
 *
 * Do not load this file if Related Posts is already enabled by Jetpack (by Automattic)
 *
 * @package MilanoWP
 * @since 0.9.0
 */



/**
 * Load Related Posts
 *
 * @since 0.9.0
 */
function milano_related_posts() {

	global $post;

	$tags = wp_get_post_tags( $post->ID );

	if ( $tags ) {

		foreach( $tags as $tag ) {
			$tag_arr .= $tag->slug . ',';
		}

		$args = array(
			'tag' => $tag_arr,
			'numberposts' => 3, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);

		$related_posts = get_posts( $args );

		if ( $related_posts ) {

			echo __( '<h4>Related Posts</h4>', 'milano' );
			echo '<ul id="related-posts">';

			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<li class="related_post">
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					<?php get_template_part( 'parts/content', 'byline' ); ?>
				</li>
			<?php endforeach;
		}
	}

	wp_reset_postdata();
	echo '</ul>';
}


?>
