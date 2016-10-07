<?php
/**
 * dutchdodo starter theme functions and definitions
 *
 * @package dutchdodo startertheme
 */

if ( ! function_exists( 'ddd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function ddd_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on dutchdodo startertheme, use a find and replace
	 * to change 'dutchdodo-startertheme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ddd-startertheme', get_template_directory() . '/languages' );

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
		'primary' => __( 'Primary Menu', 'ddd-startertheme' ),
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
add_action( 'after_setup_theme', 'ddd_setup' );
endif; // ddd_setup

/**
 * Enqueue scripts and styles.
 */
function ddd_scripts() {

	wp_deregister_script('jquery');
	wp_register_script( $handle = 'jquery', $src = '/wp-includes/js/jquery/jquery.js', $deps = array(), $ver = '1.11.2', $in_footer = true );

	wp_register_style( 'googlefont-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800,600', array(), false, 'all' );
	wp_enqueue_style( 'googlefont-open-sans' );

	//wp_register_style( 'googlefont-pt-sans', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i', array(), false, 'all' );
	//wp_enqueue_style( 'googlefont-pt-sans' );

	//wp_register_style( 'googlefont-source-sans-pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600', array(), false, 'all' );
	//wp_enqueue_style( 'googlefont-source-sans-pro' );

	//wp_register_style( 'googlefont-cabin', 'https://fonts.googleapis.com/css?family=Cabin:400,400i,500', array(), false, 'all' );
	//wp_enqueue_style( 'googlefont-cabin' );

	wp_enqueue_style( $handle = 'dutchdodo-startertheme-style', $src = get_stylesheet_directory_uri() . '/dist/css/style.css', $deps = array(), $ver = '1.0' );
	wp_enqueue_script( $handle = 'dutchdodo-startertheme-script', $src = get_stylesheet_directory_uri() . '/dist/js/script.js', $deps = array( 'jquery' ), $version = '1.0', $in_footer = false );
}
add_action( 'wp_enqueue_scripts', 'ddd_scripts' );

/**
 * Enqueue admin styles and scripts
 */
function ddd_load_admin_scripts() {
	wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/assets/css/admin.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'ddd_load_admin_scripts' );


$optional_child_templates = array(
	'inc/extended-cpts.php',		//Library for custom post types
	'inc/extended-taxos.php',		//library for extended-taxonomies
	'inc/posttypes_taxonomies.php', //Custom functions that registers custom post types.Custom functions that registers custom post types
	'inc/sidebars_widgets.php', 	//Custom functions for registering sidebars, deregistering defaults WP widgets and related stuff
	'inc/metabox.php', 				//Add functions for metaboxes
	'inc/utils.php', 				//Utils functions
	'inc/bs4navwalker.php',			// Register Custom Navigation Walker
	'inc/custom.php',				// Register Custom Navigation Walker
);

foreach ( $optional_child_templates as $optional_child_template ) {

	$optional_child_template_location = locate_template( $optional_child_template, $load = false, $require_once = false );
	if ( ! empty( $optional_child_template_location ) ) {
		require $optional_child_template_location;
	}
}
