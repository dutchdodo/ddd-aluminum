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

<div class="the-page">

	<div class="header-sticky-wrapper">
		<header class="site-header clearfix" role="banner">

			<div class="site-branding">
				<a href="."><img width="74" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ddd-logo.svg"/></a>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->

			<section>
			<h2 class="screen-reader-text">Jump</h2>
				<ul class="screen-reader-text">
					<li><a href="site-main" class="screen-reader-text">to the content</a></li>
				</ul>
			</section>

			<div class="header-center-wrapper">
				<?php if( is_page_template('templates/template-home.php') ) { ?>
				<div class="site-description">
					<div class="gravatar">
					<?php
						// grab admin email and their photo
						$admin_email = get_option('admin_email');
						echo get_avatar( $admin_email, 100 );
					?>
					</div><!--/ author -->
					<?php bloginfo( 'description' ); ?>
				</div>

				<?php } ?>
				<nav class="main-navigation">
					<h2 class="screen-reader-text">navigation</h2>
					<?php
						//checks for existance of menu: otherwise Walkers could fail
						if( has_nav_menu( 'primary' ) ) {
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
						}
						?>
				</nav><!-- #site-navigation -->
			</div>

		</header><!-- #masthead -->
	</div>
