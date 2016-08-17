<?php

/**
 * Filter to support the Ankyler plugin
 */
if( class_exists( 'Ankyler' ) ) {

    /**
     * @param $instance
     * @param $widget_class
     * @param $args
     *
     * @return mixed
     */
    function ys_filter_sidebar_id_into_widget( $instance, $widget_class, $args ) {
        $instance['joyo_sidebar_id'] = $args['id'];
        return $instance;
    }
    add_filter( 'widget_display_callback', 'ys_filter_sidebar_id_into_widget', 10, 3 );

    /**
     * @param $instance
     * @param $widget
     *
     * @return mixed
     */
    function ys_filter_sidebar_id_into_admin_widget( $instance, $widget ) {

        $sidebar = is_active_widget( true, $widget->id );
        $instance['joyo_sidebar_id'] = $sidebar;

        return $instance;
    }
    add_filter( 'widget_form_callback', 'ys_filter_sidebar_id_into_admin_widget', 10, 2 );
}