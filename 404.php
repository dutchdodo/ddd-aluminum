<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package dutchdodo startertheme
 */

get_header(); ?>

	<div class="container">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h2 class="page-title"><?php _e( 'Oops! Pagina niet gevonden.', 'dutchdodo-startertheme' ); ?></h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="error-404--text">404</div>
					<p><?php _e( 'Helaas is er niets gevonden op deze locatie. Probeer anders de zoekfunctie?', 'dutchdodo-startertheme' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- /container -->

<?php get_footer(); ?>
