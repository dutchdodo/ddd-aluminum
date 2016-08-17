<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dutchdodo startertheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php //get_template_part('template-parts/mobile', 'menu'); // Deprecated for now soon implementing http://tympanus.net/codrops/2013/08/13/multi-level-push-menu/ ?>
<div id="page" class="hfeed site">
	<div class="container">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					//checks for existance of menu: otherwise Walkers could fail
					if( has_nav_menu( 'primary' ) ) { 
						wp_nav_menu( array( 'theme_location' => 'primary' ) );
					}
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	</div><!-- /container -->

	<div id="content" class="site-content">
