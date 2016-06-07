<?php
add_action( 'init', 'cpt_example' );
function cpt_example() {
    register_post_type( 'example',
        array(
            'labels' => array(
                'name' => 'Examples',
                'singular_name' => 'Example',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Example',
                'edit' => 'Edit',
                'edit_item' => 'Edit Example',
                'new_item' => 'New Example',
                'view' => 'View',
                'view_item' => 'View Example',
                'search_items' => 'Search Example',
                'not_found' => 'No Example found',
                'not_found_in_trash' => 'No Example found in Trash',
                'parent' => 'Parent Example'
            ),
 
            'public' => true,
            'menu_position' => 11,
            'supports' => array( 'title', 'editor', 'comments', 'custom-fields' ),
            'taxonomies' => array( '' ),
            // Choose from here: https://developer.wordpress.org/resource/dashicons/#editor-kitchensink
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'has_archive' => true
        )
    );
}