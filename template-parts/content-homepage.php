<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dutchdodo startertheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mainarticle'); ?>>
	<header class="entry-header" <?php if( rwmb_meta('ddd_hide_page_title') ) echo 'hidden'; ?>>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="d_gravatar d_gravatar--home">
	<?php
		// grab admin email and their photo
		$admin_email = get_option('admin_email');
		echo get_avatar( $admin_email, 100 );
	?>
	</div><!--/ author -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'dutchdodo-startertheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'dutchdodo-startertheme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
