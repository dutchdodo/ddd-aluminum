<?php
/* Template Name: Resume */

get_header(); ?>

		<main class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php echo '<div class="d_section d_cvcard">' ?>
				<?php echo '<div class="d_section__innerwrapper">' ?>
				<?php echo '<div class="d_section--max-and-center">' ?>
				<?php get_template_part( 'template-parts/content', 'homepage' ); ?>

				<?php //echo '<a href="#portfolio" class="btn">View my portfolio</a>'; ?>
				<?php echo '</div>' ?>
				<?php echo '</div>' ?>
				<?php echo '</div>' ?>
			<?php endwhile; // end of the loop. ?>

			<?php echo '<div class="d_section d_keywords d_section--attach-bottom">' ?>
			<?php echo '<h2 class="d_section__title">Keywords</h2>' ?>
			<?php get_template_part( 'template-parts/content', 'keyword-label' ); ?>
			<?php echo '</div>' ?>

			<?php echo '<div class="d_section d_home-skillboard d_section--attach-bottom">' ?>
			<?php echo '<h2 class="d_section__title">Skillboard</h2>' ?>
			<?php echo '<div class="d_section__innerwrapper">' ?>
			<?php echo '<div class="d_section--max-and-center">' ?>
			<?php get_template_part( 'template-parts/content', 'skillboard' ); ?>
			<?php echo '</div>' ?>
			<?php echo '</div>' ?>
			<?php echo '</div>' ?>

			<?php echo '<div class="d_section d_interests">' ?>
			<?php echo '<h2 class="d_section__title">Interests</h2>' ?>
			<?php get_template_part( 'template-parts/content', 'interest-label' ); ?>
			<?php echo '</div>' ?>

			<?php echo '<div class="d_section d_home-positions">' ?>
			<?php echo '<h2 class="d_section__title">Work</h2>' ?>
			<?php echo '<div class="d_section__innerwrapper">' ?>
			<?php echo '<div class="d_section--max-and-center">' ?>
			<?php get_template_part( 'template-parts/content', 'positions' ); ?>
			<?php echo '</div>' ?>
			<?php echo '</div>' ?>

			<?php echo '<h2 class="d_section__title">Education</h2>' ?>
			<?php echo '<div class="d_section__innerwrapper">' ?>
			<?php echo '<div class="d_section--max-and-center">' ?>
			<?php get_template_part( 'template-parts/content', 'education' ); ?>
			<?php echo '</div>' ?>
			<?php echo '</div>' ?>

			<?php echo '</div>' ?>

			<?php echo '<div class="d_section d_home-cards">' ?>
			<?php echo '<h2 class="d_section__title">Recent Projects</h2>' ?>
			<?php get_template_part( 'template-parts/content', 'project-card' ); ?>
			<?php echo '</div>' ?>

			<?php echo '<div class="d_section d_home-contact">' ?>
			<?php echo '<h2 class="d_section__title">Contact Me</h2>' ?>
			<?php echo '<div class="d_section__innerwrapper">' ?>
			<?php echo '<div class="d_section--max-and-center">' ?>
			<?php echo do_shortcode( '[ninja_form id=1]' ); ?>
			<?php echo '</div>' ?>
			<?php echo '</div>' ?>
			<?php echo '</div>' ?>

		</main><!-- #main -->


<?php get_footer(); ?>
