<?php
/* Template Name: Home Template */

get_header(); ?>
	<div class="site-main-wrapper">
		<main class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php get_template_part( 'template-parts/content', 'list-project' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div>

<?php get_footer(); ?>
