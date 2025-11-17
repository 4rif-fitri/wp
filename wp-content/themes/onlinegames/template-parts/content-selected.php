<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */

?>
<style>
	.container{
		width: 70vw;
		margin-left: auto;
		margin-right: auto;
		background-color: rgba(68, 69, 151,0.9);
		padding: 20px;
		border-radius: 10px;
		margin-top: 15px;
	}
	.entry-title{
		padding: 0;
		margin: 0;
	}
	body{
		background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.wp-block-latest-posts{
		margin-left: 0;
	}
	.wp-block-latest-posts a{
		font-size: 18px;
	}
	.wp-block-latest-posts li{
		margin: 10px auto;
	}
	@media only screen and (max-width:360px){
		.container{
			width: 90vw !important;
		}
	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'underscores' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
