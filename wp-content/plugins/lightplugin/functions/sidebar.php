<?php
	function lightplugin_widgets_init() {
	    register_sidebar( array(
	        'name' => __( 'Main Sidebar', 'lightplugin' ),
	        'id' => 'sidebar',
	        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'lighttheme' ),
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ) );
	}
	add_action( 'widgets_init', 'lightplugin_widgets_init' );