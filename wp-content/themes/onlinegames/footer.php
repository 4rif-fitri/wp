<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

 $data = get_option("wpseo_social");

?>
<style>
	.site-info{
		text-align: center;
		padding: 10px;
		background-color: rgba(68, 69, 151,0.9);
	}
	.socials{
		display: flex;
		align-items: center;
		gap: 15px;
		justify-content: center;
	}
</style>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="socials">
				<a href="https://twitter.com/<?php echo $data["twitter_site"]?>">Twitter</a>
				<a href="<?php echo $data["facebook_site"]?>">Facebook</a>
				<a href="<?php echo $data["instagram_url"]?>">Instagram</a>
			</div>
			Copyright &copy; <?php echo date("Y");?> - All rights reserved
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
