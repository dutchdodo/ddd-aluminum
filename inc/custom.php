<?php
/**
 * Define here project specific functions
 */

 function ddd_get_projects() {

 	$args = array (
 		'post_type'				 => 'ddd-projects',
 		'post_status'			 => 'publish',
 		//'posts_per_page' 		 => -1,
 		//'order'					 => 'DESC',
 		//'orderby'				 => 'date',
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
			if ( has_post_thumbnail( $query->post->ID ) ) {
				$query->post->ddd_featured_image = wp_get_attachment_image_src( rwmb_meta('_thumbnail_id') , 'thumbnail' )[0];
			}
			$taxo_terms =  wp_get_post_terms( $query->post->ID, 'ddd-projects-role', array( 'fields' => 'names' ) );
			$query->post->job_role = implode(', ', $taxo_terms );

			$output[]  = $query->post;
 		}
 	}
 	wp_reset_postdata(); // reset the query

 	return $output;
 }
