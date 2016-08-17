<?php
/**
 * The template for displaying all single posts.
 *
 * @package Yard startertheme
 */

get_header(); ?>

	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- /container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
