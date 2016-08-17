<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Yard startertheme
 */

get_header(); ?>

	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- /container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
