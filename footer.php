<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Yard startertheme
 */
?>

	</div><!-- #content -->

	<div class="container">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'yard-startertheme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'yard-startertheme' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'yard-startertheme' ), 'Yard startertheme', '<a href="http://www.yard.nl/" rel="designer">Yard</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- /container -->
	
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
