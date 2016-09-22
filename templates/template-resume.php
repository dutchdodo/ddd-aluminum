<?php
/* Template Name: Resume */

get_header(); ?>
	<div class="site-main-wrapper">
		<main class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div>

<?php get_footer(); ?>
