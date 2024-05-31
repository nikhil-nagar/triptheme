<?php
/**
* Theme Templage
*
*
* @package triptheme
*/

function triptheme_enqueue_scripts()  {

    wp_register_style('style-css',get_template_directory_uri()."/style.css", [] , filemtime(get_template_directory().'/style.css'), 'all');
    wp_register_script('script-js',get_template_directory_uri()."/assets/script.js", [] , filemtime(get_template_directory().'/assets/script.js'), 'all');

    wp_enqueue_style('style-css');
    wp_enqueue_script('script-js');
}

add_action('wp_enqueue_scripts','triptheme_enqueue_scripts');