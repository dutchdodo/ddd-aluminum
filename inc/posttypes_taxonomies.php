<?php
/**
 * Registering the post types and taxonomies
 */

if( function_exists( 'register_extended_post_type' ) ) {
    function ys_init_register_extended_post_type() {
        // Examples of registering post types: http://johnbillion.com/extended-cpts/
        //register_extended_post_type( 'article' );
    }
    add_action( 'init', 'ys_init_register_extended_post_type', 3 );
}


if( function_exists( 'register_extended_taxonomy' ) ) {
    function ys_init_register_extended_taxonomy() {
        // Example of register custom taxonomy
        // register_extended_taxonomy( 'news-article', 'article' );
    }
    add_action( 'init', 'ys_init_register_extended_taxonomy', 3 );
}




