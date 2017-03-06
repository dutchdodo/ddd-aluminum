<?php
/**
 * Define here project specific functions
 */

 function ddd_get_projects() {

 	$args = array (
 		'post_type'				 => 'ddd-projects',
 		'post_status'			 => 'publish',
 		'posts_per_page' 		 => -1,
 		//'order'					 => 'DESC',
 		'orderby'				 => 'menu_order',
 		'no_found_rows'          => true, //useful when pagination is not needed.
 		'update_post_meta_cache' => false, //useful when post meta will not be utilized.
 		'update_post_term_cache' => false, //useful when taxonomy terms will not be utilized.
 	);

 	$output = array();

 	$query = new WP_Query( $args );

 	if ( $query->have_posts() ) {
 		while( $query->have_posts() ) {

 			$query->the_post();
			$query->post->ddd_the_title = get_the_title();
			$query->post->ddd_client_name = rwmb_meta('ddd_client_name');
			$query->post->ddd_url_link = rwmb_meta('ddd_url_link');
			$query->post->ddd_url_link_text = rwmb_meta('ddd_url_link_text');
			if ( has_post_thumbnail($query->post->ID) ) {
                $full_image_path = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ) , 'medium-complete' );
                $query->post->ddd_featured_image = $full_image_path[0];
            }
			$taxo_terms =  wp_get_post_terms( $query->post->ID, 'ddd-projects-role', array( 'fields' => 'names' ) );
			$query->post->job_role = implode(', ', $taxo_terms );

			$output[]  = $query->post;
 		}
 	}
 	wp_reset_postdata(); // reset the query

 	return $output;
 }


 function ddd_get_positions() {

    $args = array (
        'post_type'				 => 'ddd-positions',
        'post_status'			 => 'publish',
        'posts_per_page' 		 => -1,
        'orderby'				 => 'menu_order',
        //'order'					 => 'DESC',
        'order'					 => 'ASC',
        'no_found_rows'          => true, //useful when pagination is not needed.
        'update_post_meta_cache' => false, //useful when post meta will not be utilized.
        'update_post_term_cache' => false, //useful when taxonomy terms will not be utilized.
    );

    $output = array();

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while( $query->have_posts() ) {

            $query->the_post();
            $query->post->ddd_the_title = get_the_title();
            $query->post->ddd_the_content = get_the_content();
            $query->post->ddd_function_name = rwmb_meta('ddd_function_name');
            $query->post->ddd_start_date = rwmb_meta('ddd_start_date');
            $query->post->ddd_end_date = rwmb_meta('ddd_end_date');
            if ( has_post_thumbnail($query->post->ID) ) {
                $full_image_path = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ) , 'medium-complete' );
                $query->post->ddd_featured_image = $full_image_path[0];
            }
            $output[]  = $query->post;
        }
    }
    wp_reset_postdata(); // reset the query

    return $output;
 }

 function ddd_get_education() {

    $args = array (
        'post_type'				 => 'ddd-education',
        'post_status'			 => 'publish',
        'posts_per_page' 		 => -1,
        //'order'					 => 'DESC',
        'orderby'				 => 'menu_order',
        'no_found_rows'          => true, //useful when pagination is not needed.
        'update_post_meta_cache' => false, //useful when post meta will not be utilized.
        'update_post_term_cache' => false, //useful when taxonomy terms will not be utilized.
    );

    $output = array();

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while( $query->have_posts() ) {

            $query->the_post();
            $query->post->ddd_the_title = get_the_title();
            $query->post->ddd_the_content = get_the_content();
            $query->post->ddd_course_name = rwmb_meta('ddd_course_name');
            $query->post->ddd_start_date = rwmb_meta('ddd_start_date');
            $query->post->ddd_end_date = rwmb_meta('ddd_end_date');
            if ( has_post_thumbnail($query->post->ID) ) {
                $full_image_path = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ) , 'medium-complete' );
                $query->post->ddd_featured_image = $full_image_path[0];
            }
            $output[]  = $query->post;
        }
    }
    wp_reset_postdata(); // reset the query

    return $output;
 }

 function ddd_get_tools() {

    $args = array (
        'post_type'				 => 'ddd-tools',
        'post_status'			 => 'publish',
        'posts_per_page' 		 => -1,
        //'order'					 => 'DESC',
        'orderby'				 => 'menu_order',
        'no_found_rows'          => true, //useful when pagination is not needed.
        'update_post_meta_cache' => false, //useful when post meta will not be utilized.
        'update_post_term_cache' => false, //useful when taxonomy terms will not be utilized.
    );

    $output = array();

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while( $query->have_posts() ) {

            $query->the_post();
            $query->post->ddd_the_title = get_the_title();
            $query->post->ddd_the_content = get_the_content();
            $query->post->ddd_tools_score = rwmb_meta('ddd_tools_score');
            if ( has_post_thumbnail($query->post->ID) ) {
                $full_image_path = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ) , 'medium-complete' );
                $query->post->ddd_featured_image = $full_image_path[0];
            }
            $output[]  = $query->post;
        }
    }
    wp_reset_postdata(); // reset the query

    return $output;
 }

 function ddd_get_keywords() {

    $args = array (
        'post_type'				 => 'ddd-keywords',
        'post_status'			 => 'publish',
        'posts_per_page' 		 => -1,
        //'order'					 => 'DESC',
        'orderby'				 => 'menu_order',
        'no_found_rows'          => true, //useful when pagination is not needed.
        'update_post_meta_cache' => false, //useful when post meta will not be utilized.
        'update_post_term_cache' => false, //useful when taxonomy terms will not be utilized.
    );

    $output = array();

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while( $query->have_posts() ) {

            $query->the_post();
            $query->post->ddd_the_title = get_the_title();
            $output[]  = $query->post;
        }
    }
    wp_reset_postdata(); // reset the query

    return $output;
 }

 function ddd_get_interests() {

    $args = array (
        'post_type'				 => 'ddd-interests',
        'post_status'			 => 'publish',
        'posts_per_page' 		 => -1,
        //'order'					 => 'DESC',
        'orderby'				 => 'menu_order',
        'no_found_rows'          => true, //useful when pagination is not needed.
        'update_post_meta_cache' => false, //useful when post meta will not be utilized.
        'update_post_term_cache' => false, //useful when taxonomy terms will not be utilized.
    );

    $output = array();

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while( $query->have_posts() ) {

            $query->the_post();
            $query->post->ddd_the_title = get_the_title();
            $output[]  = $query->post;
        }
    }
    wp_reset_postdata(); // reset the query

    return $output;
 }
