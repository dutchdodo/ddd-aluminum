<?php
/**
 * Registers the metaboxes
 * Plugin: https://wordpress.org/plugins/meta-box/
 */

function ys_action_register_metaboxes () {

	/********************* META BOXES DEFINITION ***********************/

	/**
	 * Prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * You also can make prefix empty to disable it
	 */
	global $pagenow;
	if ( is_admin() && ( $pagenow == 'post.php' || $pagenow == 'post-new.php' || $pagenow == 'admin-ajax.php' ) ) {
		$prefix = '_';

		$meta_boxes = array( );

		/**
		 * Example of metabox
		 * Delete me when adding a metabox
		 *
		 * $meta_boxes[] = array(
			'id' => 'expertise_meta',		                        // Meta box id, unique per meta box
			'title' => 'Gegevens',					                // Meta box title
			'pages' => array( 'ssv_expertise' ),	                // Post types, accept custom post types as well, default is array('post'); optional
			'context' => 'normal',					                // Where the meta box appear: normal (default), advanced, side; optional
			'priority' => 'high',					                // Order of meta box: high (default), low; optional
				'fields' => array(						            // List of meta fields
					array(
						'name' => 'Subtitel:',      		        // Field name
						'desc' => 'Geef subtitel in (optioneel)',   // Field description, optional
						'id' => $prefix . 'expertise_subtitel',     // Field id, i.e. the meta key
						'type' => 'text',                           // Field type: text box
						'std' => ''                                 // Default value, optional
					)
				)
			);
		 */

		//Register meta boxes
		foreach ( $meta_boxes as $meta_box ) {

			//Make sure the Meta_Box plugin is active.
			if (class_exists("RW_Meta_Box")) {
				new RW_Meta_Box( $meta_box );
			}
		}
	}
}
add_action('admin_init', 'ys_action_register_metaboxes');

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function ys_metabox_maybe_include($conditions) {
    // Include in back-end only
    if (!defined('WP_ADMIN') || !WP_ADMIN) {
        return false;
    }
    // Always include for ajax
    if (defined('DOING_AJAX') && DOING_AJAX) {
        return true;
    }
    if (isset($_GET['post'])) {
        $post_id = intval($_GET['post']);
    } elseif (isset($_POST['post_ID'])) {
        $post_id = intval($_POST['post_ID']);
    } else {
        $post_id = false;
    }
    $post_id = (int)$post_id;
    $post = get_post($post_id);
    foreach ($conditions as $cond => $v) {
        // Catch non-arrays too
        if (!is_array($v)) {
            $v = array($v);
        }
        switch ($cond) {
            case 'id':
                if (in_array($post_id, $v)) {
                    return true;
                }
                break;
            case 'parent':
                $post_parent = $post->post_parent;
                if (in_array($post_parent, $v)) {
                    return true;
                }
                break;
            case 'slug':
                $post_slug = $post->post_name;
                if (in_array($post_slug, $v)) {
                    return true;
                }
                break;
            case 'category': //post must be saved or published first
                $categories = get_the_category($post->ID);
                $catslugs = array();
                foreach ($categories as $category) {
                    array_push($catslugs, $category->slug);
                }
                if (array_intersect($catslugs, $v)) {
                    return true;
                }
                break;
            case 'template':
                $template = get_post_meta($post_id, '_wp_page_template', true);
                if (in_array($template, $v)) {
                    return true;
                }
                break;
        }
    }
    // If no condition matched
    return false;
}
