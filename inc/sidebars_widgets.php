<?php
/**
 * Register widget area
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

function ddd_action_register_sidebars() {

    $sidebars_properties = array (
       array(
           'name' => __( 'Sidebar 1', 'dutchdodo-startertheme' ),
           'id'            => '1',
           'description'   => '',
           'class'         => '',
           'before_widget' => '<li id="%1$s" class="widget %2$s">',
           'after_widget'  => '</li>',
           'before_title'  => '<h2 class="widgettitle">',
           'after_title'   => '</h2>'
       )
    );

    foreach( $sidebars_properties as $sidebar_properties ) {
        register_sidebar(
            array(
                'name'			=> $sidebar_properties['name'],
                'id'			=> 'sidebar-'. $sidebar_properties['id'],
                'description'	=> $sidebar_properties['description'],
                'before_widget'	=> '<li class="sidebar-' . $sidebar_properties['id'] . ' %2$s ' . $sidebar_properties['class'] . '" id="%1$s"><div class="inner-wrapper">',
                'after_widget'	=> '</div></li>',
                'before_title'	=> '<h3 class="widget-title">',
                'after_title'	=> '</h3>',
            )
        );
    }
}
add_action('widgets_init', 'ddd_action_register_sidebars');

/**
 * Unregister defaults widgets
 */

function ddd_action_unregister_default_widgets() {

	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));

	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Categories');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_Recent_Posts');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Search');
	unregister_widget('WP_Widget_Tag_Cloud');
	unregister_widget('WP_Widget_Text');
	unregister_widget('WP_Nav_Menu_Widget');
}
add_action('widgets_init', 'ddd_action_unregister_default_widgets');