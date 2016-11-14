<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package dutchdodo startertheme
 */

get_header(); ?>
		<main>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		</main>
		<sidebar>
			is is an example page.
			It’s different from a blog post because
			it will stay in one place and will show
			up in your site navigation (in most themes).
			Most people start with an About page that
			introduces them to potential site
		</sidebar>
<?php get_footer(); ?>
