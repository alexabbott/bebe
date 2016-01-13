<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>
		<?php 
		echo '<a class="collapse-title" data-toggle="collapse" href="#collapse';
		echo the_ID() . '" aria-expanded="false" aria-controls="collapse';
		echo the_ID() . '">';
		echo '<h1><span class="blog-plus">+</span> ';
		the_time( 'm.d.y' );
		echo '<span class="blog-title-spacer"> </span>';
		the_title();
		echo '</h1>';
		echo '</a>';
		echo '<hr><br>';
		echo '<div class="blog-content-holder collapse" aria-expanded="false" id="collapse';
		echo the_ID() . '">';
		 the_content();
		echo '</div>';

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>

</article><!-- #post-## -->
