<?php
/**
 * The template for displaying all single posts.
 *
 * @package dutchdodo startertheme
 */

get_header(); ?>

	<div class="container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- /container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
