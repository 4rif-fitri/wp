<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?>
<style>
	#masthead{
		padding: 10px;
		display: flex;
		gap: 15px;
		align-items: center;
		position: sticky;
		top: 0;
		z-index: 998;
		box-shadow: 2px 2px 10px 1px rgba(0,0,0,0.7);
		background-color: rgb(41, 42, 88);
	}
	.site-branding{
		text-align: center;
		width: 250px;
	}
	.site-title a{
		text-decoration: none;
		font-size:18px;
		font-weight: bold;
	}
	.site-description{
		font-size:14px;
	}
	.site-branding *{
		padding: 0;
		margin: 0;
	}
	#primary-menu{
		display: flex;
		align-items: center;
		gap: 20px;
	}
	.sub-menu{
		display: flex;
		flex-direction: column;
		box-shadow:2px 2px 10px 1px rgba(0,0,0,0.7) !important;
		background-color: rgb(68, 69, 151);
	}
	.sub-menu a:hover{
		background-color:rgb(41, 42, 88);
	}
	.sub-menu a{
		padding: 10px;
		transition: .2s ease-in-out;
	}

	#loader{
		width: 100vw;
		height: 100vh;
		position: fixed;
		top: 0;
		left: 0;
		background-color: rgb(68, 69, 151);
		display: flex;
		align-items: center;
		justify-content: center;
		z-index: 999;
		transition: .2s ease-in-out;
	}
	#loader h1{
		animation: spin .5s linear alternate infinite;
	}
	@keyframes spin{
		0%{rotate:y 0deg}
		100%{rotate: y 180deg}
	}
	@media only screen and (max-width:600px){
		#primary-menu{
			display: none;
		}
		#masthead{
			display: flex;
			justify-content: space-between;
		}
		.menu-toggle{
			background-color: transparent;
			border:none;
			color: white;
			font-size: 20px;
		}
		#site-navigation{
			width: fit-content;
		}
	}
</style>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="loader" data-turbolinks-permanent>
		<h1>Loading...</h1>
	</div>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$underscores_description = get_bloginfo( 'description', 'display' );
			if ( $underscores_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $underscores_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">&#9776;</button>
			<?php
			
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
