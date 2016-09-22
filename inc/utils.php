<?php
/**
 * Utility functions that is being used for every projects, for custom functions use custom.php
 * These functions can be overriden by custom.php
 */

/**
 * Remove everything with emojis
 */

if ( ! function_exists( 'ddd_action_disable_wp_emojicons' ) ) {

	function ddd_action_disable_wp_emojicons() {

		// all actions related to emojis
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

		// filter to remove TinyMCE emojis
		add_filter( 'tiny_mce_plugins', 'ddd_disable_emojicons_tinymce' );
	}
	add_action( 'init', 'ddd_action_disable_wp_emojicons' );
}

if ( ! function_exists( 'ddd_disable_emojicons_tinymce' ) ) {
	function ddd_disable_emojicons_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}
}

/**
 * @param $classes
 *
 * @return array
 */

if ( ! function_exists( 'ddd_filter_body_classes' ) ) {

	function ddd_filter_body_classes( $classes ) {
		global $post;

		$post_type     = get_post_type();
		$wp_post_types = array( 'page', 'post', 'revision', 'attachment', 'nav-menu' );
		if ( ! in_array( $post_type, $wp_post_types ) ) {
			if ( get_post_type() !== false ) {
				$classes[] = get_post_type();
			}
		}

		if ( !empty( $post->post_name ) ) {
			$classes[] = sprintf( 'page-%s', $post->post_name );
		}

		return $classes;
	}
	add_filter( 'body_class', 'ddd_filter_body_classes' );
}

/**
 * @param $tag
 * @param $handle
 * @return mixed
 */

if ( ! function_exists( 'ddd_add_script_attribute' ) ) {

    function ddd_add_script_attribute($tag, $handle) {
        if ( strpos( $handle, 'async' ) !== false ) {
            return str_replace( ' src', ' async="async" src', $tag );
        } elseif ( strpos( $handle, 'defer' ) !== false ) {
            return str_replace( ' src', ' defer="defer" src', $tag );
        } else {
            return $tag;
        }
    }
    add_filter( 'script_loader_tag', 'ddd_add_script_attribute', 10, 2 );
}

if ( ! function_exists( 'ddd_add_action_wp_footer_browsersync' ) ) {
    function ddd_add_action_wp_footer_browsersync() {
        if (WP_DEBUG) : ?>
			<script type='text/javascript' id="__bs_script__">//<![CDATA[
				document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
				//]]></script>
		<?php endif;
    }
}

add_action( 'wp_footer', 'ddd_add_action_wp_footer_browsersync' );
add_action( 'admin_footer', 'ddd_add_action_wp_footer_browsersync' );

/**
 * Used for debugging purposes. The debug.log must be created in the wp-content folder
 * @param $log
 */

if ( ! function_exists( 'ddd_write_log' ) ) {

	function ddd_write_log( $log ) {
		if ( true === WP_DEBUG ) {
			if ( is_array( $log ) || is_object( $log ) ) {
				error_log( print_r( $log, true ) );
			} else {
				error_log( $log );
			}
		}
	}
}
