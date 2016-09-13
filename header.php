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
				<a href="."><img width="80" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ddd-logo.svg"/></a>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- .site-branding -->
			<section>
			<h2 class="screen-reader-text">Jump</h2>
				<ul class="screen-reader-text">
					<li><a href="#main" class="screen-reader-text">to the content</a></li>
				</ul>
			</section>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h2 class="screen-reader-text">navigation</h2>
				<?php
					//checks for existance of menu: otherwise Walkers could fail
					if( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 'theme_location' => 'primary' ) );
					}
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

	</div><!-- /container -->
