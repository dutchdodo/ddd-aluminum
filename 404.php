<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Yard startertheme
 */

get_header(); ?>

	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Oops! Pagina niet gevonden.', 'yard-startertheme' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<div class="error-404--text">404</div>
						<p><?php _e( 'Helaas is er niets gevonden op deze locatie. Probeer anders de zoekfunctie?', 'yard-startertheme' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- /container -->

<?php get_footer(); ?>
