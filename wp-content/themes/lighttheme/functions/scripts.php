<?php
/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/main.css
 *
 * Enqueue scripts in the following order:
 * 1. jquery-1.11.1.min.js via Google CDN
 * 2. /theme/assets/js/vendor/modernizr.min.js
 * 3. /theme/assets/js/scripts.js
 */
function lighttheme_scripts() {
    $assets = array(
        'css'       => '/assets/build/style.min.css',
        'js'        => '/assets/build/scripts.min.js',
        'modernizr' => '/assets/vendor/modernizr/modernizr.js',
        'jquery'    => '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'
    );

    wp_enqueue_style('theme_css', get_template_directory_uri() . $assets['css'], false, null);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_script('modernizr', get_template_directory_uri() . $assets['modernizr'], array(), null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('theme_js', get_template_directory_uri() . $assets['js'], array(), null, true);
}
add_action('wp_enqueue_scripts', 'lighttheme_scripts', 100);