<?php
/**
 * The header for our theme.
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

<div class="d_page">

	<div class="d_header-sticky-wrapper">
		<header class="d_site-header clearfix" role="banner">

			<div class="d_site-branding">
				<a href=".">
					<!-- <img width="74" src="<?php //echo get_stylesheet_directory_uri(); ?>/dist/images/ddd-logo.svg"/> -->
				<?php echo file_get_contents( get_stylesheet_directory_uri()."/dist/images/ddd-logo.svg"); ?>
				</a>
				<h1 class="d_site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<span>UX/UI Designer</span>
			</div><!-- .site-branding -->

			<?php
			// not using a menu so not using a jump menu 
			if( 1 > 2 ){ ?>
			<section>
			<h2 class="screen-reader-text">Jump</h2>
				<ul class="screen-reader-text">
					<li><a href="site-main" class="screen-reader-text">to the content</a></li>
				</ul>
			</section>
			<?php } ?>

			<div class="d_site-description" hidden>
				<?php bloginfo( 'description' ); ?>
			</div>

			<?php
			if( has_nav_menu( 'pprimary' ) ) { ?>

			<nav class="d_main-navigation">
				<h2 class="screen-reader-text">navigation</h2>
				<?php
				wp_nav_menu([
				   'menu'            => 'primary',
				   'theme_location'  => 'primary',
				   'container'       => 'div',
				   'container_id'    => 'exCollapsingNavbar2',
				   //'container_class' => 'collapse navbar-toggleable-sm',
				   'menu_id'         => false,
				   'menu_class'      => 'nav navbar-nav',
				   'depth'           => 2,
				   'fallback_cb'     => 'bs4navwalker::fallback',
				   'walker'          => new bs4navwalker()
				]);
				?>
			</nav><!-- #site-navigation -->
			<?php } ?>

		</header><!-- #masthead -->
	</div>
