<?php
/**
* Theme Templage
*
*
* @package triptheme
*/

function triptheme_enqueue_scripts()  {

    wp_enqueue_style('style-css', get_stylesheet_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/scr/library/css/bootstrap.min.css', [] , false, 'all');

    wp_register_script('script-js',get_template_directory_uri().'/assets/script.js', [] , filemtime(get_template_directory().'/assets/script.js'), 'all');
    wp_register_script('bootstrap-js',get_template_directory_uri().'/assets/scr/library/js/bootstrap.min.js', [] , false , 'all');

    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    wp_enqueue_script('script-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts','triptheme_enqueue_scripts');