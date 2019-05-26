<?php

/*

@package sunset-theme

======================
    ADMIN ENQUEUE FUNCTIONS
======================

*/

function sunset_load_admin_scripts( $where ) {
    if ($where != 'toplevel_page_erind_sunset') { 
        return;
    }
    wp_register_style('sunset_admin', get_template_directory_uri() . '/css/sunset.admin.css' , '1.0.0', 'all');
    wp_enqueue_style('sunset_admin');

    
    wp_register_script('sunset-admin-scripts', get_template_directory_uri() . '/js/sunset.admin.js' , array('jquery'), true);
    wp_enqueue_script('sunset-admin-scripts');
}

add_action('admin_enqueue_scripts', 'sunset_load_admin_scripts');

function load_media_files() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_media_files' );
