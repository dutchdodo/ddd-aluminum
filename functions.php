<?php
/**
 * Yard starter theme functions and definitions
 *
 * @package Yard startertheme
 */

if ( ! function_exists( 'ys_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function ys_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Yard startertheme, use a find and replace
	 * to change 'yard-startertheme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'yard-startertheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'yard-startertheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

    /*
     * Styling for the editor
     */
    add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'ys_setup' );
endif; // ys_setup

/**
 * Enqueue scripts and styles.
 */
function ys_scripts() {

	wp_deregister_script('jquery');
	wp_register_script( $handle = 'jquery', $src = '/wp-includes/js/jquery/jquery.js', $deps = array(), $ver = '1.11.2', $in_footer = true );

	wp_enqueue_style( $handle = 'yard-startertheme-style', $src = get_stylesheet_directory_uri() . '/assets/css/style.min.css', $deps = array(), $ver = '1.0' );
	wp_enqueue_script( $handle = 'yard-startertheme-main', $src = get_stylesheet_directory_uri() . '/assets/js/combined.min.js', $deps = array( 'jquery' ), $version = '1.0', $in_footer = true );
}
add_action( 'wp_enqueue_scripts', 'ys_scripts' );

/**
 * Enqueue admin styles and scripts
 */
function ys_load_admin_scripts() {
	wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/assets/css/admin.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'ys_load_admin_scripts' );

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) :
	require __DIR__ . '/vendor/autoload.php';
endif;

$optional_child_templates = array(
	'inc/posttypes_taxonomies.php', //Custom functions that registers custom post types.Custom functions that registers custom post types
	'inc/sidebars_widgets.php', 	//Custom functions for registering sidebars, deregistering defaults WP widgets and related stuff
	'inc/widget_filters.php', 		//Custom filter functions widgets
	'inc/metabox.php', 				//Add functions for metaboxes
	'inc/p2p.php', 					//Add functions for post2post koppelingen
    'inc/ankyler.php',              //
	'inc/custom.php', 				//Custom functions
	'inc/utils.php', 				//Utils functions
);

foreach ( $optional_child_templates as $optional_child_template ) {

	$optional_child_template_location = locate_template( $optional_child_template, $load = false, $require_once = false );
	if ( ! empty( $optional_child_template_location ) ) {
		require $optional_child_template_location;
	}
}