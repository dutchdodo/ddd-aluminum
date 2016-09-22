<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dutchdodo startertheme
 */
?>
	<footer class="site-footer container" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'dutchdodo-startertheme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'dutchdodo-startertheme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'dutchdodo-startertheme' ), 'dutchdodo startertheme', '<a href="http://www.dutchdodo.nl/" rel="designer">dutchdodo</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


</div><!-- #page -->
</body>
</html>
