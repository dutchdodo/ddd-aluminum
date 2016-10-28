<?php
/**
 * Registers the metaboxes
 * Plugin: https://wordpress.org/plugins/meta-box/
 */

function ddd_action_register_metaboxes () {

	/********************* META BOXES DEFINITION ***********************/

	/**
	 * Prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * You also can make prefix empty to disable it
	 */
	global $pagenow;
	if ( is_admin() && ( $pagenow == 'post.php' || $pagenow == 'post-new.php' || $pagenow == 'admin-ajax.php' ) ) {
		$prefix = 'ddd_';

		global $meta_boxes;
		$meta_boxes = array();

		$meta_boxes[] = array(
			// Meta box id, UNIQUE per meta box. Optional since 4.1.5
			'id'         => 'project_meta',
			// Meta box title - Will appear at the drag and drop handle bar. Required.
			'title'      => __( 'Project information', 'ddd' ),
			// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
			'post_types' => array( 'ddd-projects'),
			// Where the meta box appear: normal (default), advanced, side. Optional.
			'context'    => 'normal',
			// Order of meta box: high (default), low. Optional.
			'priority'   => 'high',
			// Auto save: true, false (default). Optional.
			'autosave'   => false,
			// List of meta fields
			'fields'     => array(
				array(
					// Field name - Will be used as label
					'name'  => __( 'Clientname', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}client_name",
					// Field description (optional)
					'type'  => 'text',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
				array(
					// Field name - Will be used as label
					'name'  => __( 'URL', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}url_link",
					// Field description (optional)
					'type'  => 'text',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
				array(
					// Field name - Will be used as label
					'name'  => __( 'display URL as', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}url_link_text",
					// Field description (optional)
					'type'  => 'text',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
			)
		);

		// Settings for all post & page & other custompost-types
		$meta_boxes[] = array(
			// Meta box id, UNIQUE per meta box. Optional since 4.1.5
			'id'         => 'post_meta',
			// Meta box title - Will appear at the drag and drop handle bar. Required.
			'title'      => __( 'Page settings', 'ddd' ),
			// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
			'post_types' => array( 'post', 'page', 'ddd-projects'),
			// Where the meta box appear: normal (default), advanced, side. Optional.
			'context'    => 'normal',
			// Order of meta box: high (default), low. Optional.
			'priority'   => 'high',
			// Auto save: true, false (default). Optional.
			'autosave'   => false,
			// List of meta fields
			'fields'     => array(
				array(
					// Field name - Will be used as label
					'name'  => __( 'Hide title of the page', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}hide_page_title",
					// Field description (optional)
					'type'  => 'checkbox',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
				array(
					// Field name - Will be used as label
					'name'  => __( 'First paragraph as lead', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}first_paragraph_as_lead",
					// Field description (optional)
					'type'  => 'checkbox',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
			)
		);

		// Settings for all post & page & other custompost-types
		$meta_boxes[] = array(
			// Meta box id, UNIQUE per meta box. Optional since 4.1.5
			'id'         => 'post_meta',
			// Meta box title - Will appear at the drag and drop handle bar. Required.
			'title'      => __( 'Position meta', 'ddd' ),
			// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
			'post_types' => array( 'ddd-positions' ),
			// Where the meta box appear: normal (default), advanced, side. Optional.
			'context'    => 'normal',
			// Order of meta box: high (default), low. Optional.
			'priority'   => 'high',
			// Auto save: true, false (default). Optional.
			'autosave'   => false,
			// List of meta fields
			'fields'     => array(
				array(
					// Field name - Will be used as label
					'name'  => __( 'function name', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}function_name",
					// Field description (optional)
					'type'  => 'text',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
				array(
					// Field name - Will be used as label
					'name'  => __( 'Startdate', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}start_date",
					// Field description (optional)
					'type'  => 'text',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
				array(
					// Field name - Will be used as label
					'name'  => __( 'Enddate', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}end_date",
					// Field description (optional)
					'type'  => 'text',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
			)
		);

		// Settings for all post & page & other custompost-types
		$meta_boxes[] = array(
			// Meta box id, UNIQUE per meta box. Optional since 4.1.5
			'id'         => 'post_meta',
			// Meta box title - Will appear at the drag and drop handle bar. Required.
			'title'      => __( 'Education meta', 'ddd' ),
			// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
			'post_types' => array( 'ddd-education' ),
			// Where the meta box appear: normal (default), advanced, side. Optional.
			'context'    => 'normal',
			// Order of meta box: high (default), low. Optional.
			'priority'   => 'high',
			// Auto save: true, false (default). Optional.
			'autosave'   => false,
			// List of meta fields
			'fields'     => array(
				array(
					// Field name - Will be used as label
					'name'  => __( 'Course name', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}course_name",
					// Field description (optional)
					'type'  => 'text',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
				array(
					// Field name - Will be used as label
					'name'  => __( 'Startdate', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}start_date",
					// Field description (optional)
					'type'  => 'text',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
				array(
					// Field name - Will be used as label
					'name'  => __( 'Enddate', 'ddd' ),
					// Field ID, i.e. the meta key
					'id'    => "{$prefix}end_date",
					// Field description (optional)
					'type'  => 'text',
					// Default value (optional)
					// 'std'   => __( 'Default text value', 'ddd' ),
					// CLONES: Add to make the field cloneable (i.e. have multiple value)
					'clone' => false,
				),
			)
		);



		foreach ( $meta_boxes as $meta_box ) {

			//Make sure the Meta_Box plugin is active.
			if (class_exists("RW_Meta_Box")) {
				new RW_Meta_Box( $meta_box );
			}
		}
	}
}
add_action('admin_init', 'ddd_action_register_metaboxes');

// Prevent use off undefined function rwmb_meta
if ( ! function_exists( 'rwmb_meta' ) ) {
    function rwmb_meta( $key, $args = '', $post_id = null ) {
        return false;
    }
}
