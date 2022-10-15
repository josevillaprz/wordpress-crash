<?php 

function themecrash_register_styles(){
    wp_enqueue_style('themecrash-styles', get_template_directory_uri() . "/styles.css" );
};

function themecrash_register_scripts(){
    wp_enqueue_script('themecrash-scripts', get_template_directory_uri() . "/assets/js/main.js", false, null, true);
};

add_action('wp_enqueue_scripts', 'themecrash_register_styles');
add_action('wp_enqueue_scripts', 'themecrash_register_scripts');

?>