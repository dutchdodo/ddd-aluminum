<?php
/**
 * Create connection between posts or page
 * Plugin: https://wordpress.org/plugins/posts-to-posts/
 */

if( function_exists( 'p2p_register_connection_type' ) ) {
    function ys_init_p2p_register_connections() {
        /*
         * Uncomment for usage
        $posttypes_info = array(
            'prefix_cpt' => array('id' => 'cpt', 'title' => 'Example CPT')
        );

        $p2p_koppelingen = array(
            array('from' => 'prefix_cpt_from', 'to' => 'prefix_cpt_to', 'reciprocal' => false),
        );

        $default_args = array(
            'can_create_post' => false,
            'reciprocal' => true,
            'sortable' => 'any',
            'cardinality' => 'one-to-many',
            'duplicate_connections' => false
        );

        foreach ($p2p_koppelingen as $p2p_koppeling) {

            $args = array_merge($default_args, $p2p_koppeling);

            $connection_type = array(
                'id' => $posttypes_info[$p2p_koppeling['from']]['id'] . '_to_' . $posttypes_info[$p2p_koppeling['to']]['id'],
                'from' => $p2p_koppeling['from'],
                'to' => $p2p_koppeling['to'],
                'sortable' => $args['sortable'],
                'title' => array('from' => 'Koppel met een ' . $posttypes_info[$p2p_koppeling['to']]['title'], 'to' => 'Koppel met een ' . $posttypes_info[$p2p_koppeling['from']]['title']),
                'can_create_post' => $args['can_create_post'],
                'reciprocal' => $args['reciprocal'],
            );

            p2p_register_connection_type($connection_type);
        }
        */
    }

    add_action( 'p2p_init', 'ys_init_p2p_register_connections', 3 );
}
