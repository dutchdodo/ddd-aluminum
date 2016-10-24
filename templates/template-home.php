<?php
/* Template Name: Home Template */

get_header(); ?>
	<div class="site-main-wrapper">
		<main class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<?php //get_template_part( 'template-parts/content', 'project-list' ); ?>
			<?php get_template_part( 'template-parts/content', 'project-card' ); ?>

			<?php echo do_shortcode( '[ninja_form id=1]' ); ?>
		</main><!-- #main -->
	</div>

<?php get_footer(); ?>
