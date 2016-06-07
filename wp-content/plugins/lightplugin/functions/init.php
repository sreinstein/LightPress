<?php
/**
 * Initial setup and constants
 */
function theme_setup() {

    // Enable plugins to manage the document title
    // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
    add_theme_support('title-tag');

    // Add post thumbnails
    // http://codex.wordpress.org/Post_Thumbnails
    // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
    // http://codex.wordpress.org/Function_Reference/add_image_size
    add_theme_support('post-thumbnails');

    // Add post formats
    // http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

    // Add HTML5 markup for captions
    // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
    add_theme_support('html5', array('caption', 'comment-form', 'comment-list'));

    // Add page slug to body_class() classes if it doesn't exist
    function theme_body_class($classes) {
      // Add post/page slug
      if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
          $classes[] = basename(get_permalink());
        }
      }
      return $classes;
    }
    add_filter('body_class', 'theme_body_class');

    // Disable XML-RPC Pingback methods
    add_filter( 'xmlrpc_methods', 'ut_block_xmlrpc' );
    function ut_block_xmlrpc( $methods ) {
       unset( $methods['pingback.ping'] );
       unset( $methods['pingback.extensions.getPingbacks'] );
       unset( $methods['wp.getUsersBlogs'] ); // New method used by attackers to perform brute force discovery of existing users
       return $methods;
    }

}
add_action('after_setup_theme', 'theme_setup');