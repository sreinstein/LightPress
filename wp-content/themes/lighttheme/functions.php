<?php
/**
 * Includes
 *
 * The $theme_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 */
$lighttheme_includes = array(
    'functions/scripts.php',         // Enqueue the CSS/JS scripts
    'functions/comments.php',        // Adjusted comment layout
);

foreach ($lighttheme_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'uttheme'), $file), E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);