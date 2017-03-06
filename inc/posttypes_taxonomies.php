<?php
/**
 * Registering the post types and taxonomies
 */

if( function_exists( 'register_extended_post_type' ) ) {
    function ddd_init_register_extended_post_type() {
        // Examples of registering post types: http://johnbillion.com/extended-cpts/

        register_extended_post_type( 'ddd-projects', array(

			# Add the post type to the site's main RSS feed:
			'show_in_feed' => true,
			'supports'     => array( 'title', 'editor', 'page-attributes', 'thumbnail' ),
            'hierarchical' => false,
			'menu_icon'    => 'dashicons-feedback',

			# Show all posts on the post type archive:
			'archive' => array(
				'nopaging' => true
			),
			'show_in_rest' => true,

			'labels' => array(
				'all_items'				=> 'All projects',
				'add_new'				=> 'Add new project',
				'add_new_item'			=> 'New project',
				'featured_image'        => 'Image project',
				'set_featured_image'    => 'Set featured image',
				'remove_featured_image' => 'Remove featured image',
				'use_featured_image'    => 'set as featured image',
			),


			# Add some custom columns to the admin screen:
			'admin_cols' => array(
				'projects_role' => array(
					'title'    => 'Role',
					'taxonomy' => 'ddd-projects-role',
				),
				'date'
			),

			# Add a dropdown filter to the admin screen:
			'admin_filters' => array(
				'project_role' => array(
					'title'    => 'Sector',
					'taxonomy' => 'ddd-projects-role',
				),
			)
		), array(

			# Override the base names used for labels:
			'singular' => 'Project',
			'plural'   => 'Projects',
			'slug'     => 'projects'

		) );

        register_extended_post_type( 'ddd-positions', array(

            # Add the post type to the site's main RSS feed:
            'show_in_feed' => true,
            'supports'     => array( 'title', 'editor', 'page-attributes', 'thumbnail' ),
            'hierarchical' => false,
            'menu_icon'    => 'dashicons-feedback',

            # Show all posts on the post type archive:
            'archive' => array(
                'nopaging' => true
            ),
            'show_in_rest' => true,

            'labels' => array(
                'all_items'				=> 'All Positions',
                'add_new'				=> 'Add new Position',
                'add_new_item'			=> 'New Position',
                'featured_image'        => 'Image Position',
                'set_featured_image'    => 'Set featured image',
                'remove_featured_image' => 'Remove featured image',
                'use_featured_image'    => 'set as featured image',
            )
        ), array(

            # Override the base names used for labels:
            'singular' => 'Position',
            'plural'   => 'Positions',
            'slug'     => 'position'

        ) );

        register_extended_post_type( 'ddd-education', array(

            # Add the post type to the site's main RSS feed:
            'show_in_feed' => true,
            'supports'     => array( 'title', 'editor', 'page-attributes', 'thumbnail' ),
            'hierarchical' => false,
            'menu_icon'    => 'dashicons-feedback',

            # Show all posts on the post type archive:
            'archive' => array(
                'nopaging' => true
            ),
            'show_in_rest' => true,

            'labels' => array(
                'all_items'				=> 'All Education',
                'add_new'				=> 'Add new Education',
                'add_new_item'			=> 'New Education',
                'featured_image'        => 'Image Position',
                'set_featured_image'    => 'Set featured image',
                'remove_featured_image' => 'Remove featured image',
                'use_featured_image'    => 'set as featured image',
            )
        ), array(

            # Override the base names used for labels:
            'singular' => 'Education',
            'plural'   => 'Education',
            'slug'     => 'education'

        ) );


        register_extended_post_type( 'ddd-tools', array(

            # Add the post type to the site's main RSS feed:
            'show_in_feed' => false,
            'supports'     => array( 'title', 'editor', 'page-attributes', 'thumbnail' ),
            'hierarchical' => false,
            'menu_icon'    => 'dashicons-feedback',

            # Show all posts on the post type archive:
            'archive' => array(
                'nopaging' => true
            ),
            'show_in_rest' => true,

            'labels' => array(
                'all_items'				=> 'All Tools',
                'add_new'				=> 'Add new Tool',
                'add_new_item'			=> 'New Tool',
                'featured_image'        => 'Image Tool',
                'set_featured_image'    => 'Set featured image',
                'remove_featured_image' => 'Remove featured image',
                'use_featured_image'    => 'set as featured image',
            )
        ), array(

            # Override the base names used for labels:
            'singular' => 'Tool',
            'plural'   => 'Tools',
            'slug'     => 'tools'

        ) );

        register_extended_post_type( 'ddd-keywords', array(

            # Add the post type to the site's main RSS feed:
            'show_in_feed' => false ,
            'supports'     => array( 'title' ),
            'hierarchical' => false,
            'menu_icon'    => 'dashicons-feedback',

            # Show all posts on the post type archive:
            'archive' => array(
                'nopaging' => true
            ),
            'show_in_rest' => true,

            'labels' => array(
                'all_items'				=> 'All Keywords',
                'add_new'				=> 'Add new Keyword',
                'add_new_item'			=> 'New Keyword',
            )
        ), array(

            # Override the base names used for labels:
            'singular' => 'Keyword',
            'plural'   => 'Keywords',
            'slug'     => 'keywords'

        ) );

        register_extended_post_type( 'ddd-interests', array(

            # Add the post type to the site's main RSS feed:
            'show_in_feed' => false ,
            'supports'     => array( 'title' ),
            'hierarchical' => false,
            'menu_icon'    => 'dashicons-feedback',

            # Show all posts on the post type archive:
            'archive' => array(
                'nopaging' => true
            ),
            'show_in_rest' => true,

            'labels' => array(
                'all_items'				=> 'All Interests',
                'add_new'				=> 'Add new Interest',
                'add_new_item'			=> 'New Interests',
            )
        ), array(

            # Override the base names used for labels:
            'singular' => 'Interest',
            'plural'   => 'Interests',
            'slug'     => 'interests'

        ) );

    }

    add_action( 'init', 'ddd_init_register_extended_post_type', 3 );
}


if( function_exists( 'register_extended_taxonomy' ) ) {
    function ddd_init_register_extended_taxonomy() {

        register_extended_taxonomy( 'ddd-projects-role', 'ddd-projects', array(

			# Use radio buttons in the meta box for this taxonomy on the post editing screen:
			'meta_box' => 'simple',

			# Show this taxonomy in the 'At a Glance' dashboard widget:
			'dashboard_glance' => true,

			# Add a custom column to the admin screen:
			'admin_cols' => array(

			),

		), array(

			# Override the base names used for labels:
			'singular' => 'Role project',
			'plural'   => 'Role projects',
			'slug'     => 'project_role'

		)  );

    }
    add_action( 'init', 'ddd_init_register_extended_taxonomy', 3 );
}
