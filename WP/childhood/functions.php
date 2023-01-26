<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts(){
    wp_enqueue_style('childhood-style', get_stylesheet_uri());

    wp_enqueue_script('childhood-scrip', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
}
;
add_theme_support( 'custom-logo', [
    'height'      => 190,
    'width'       => 190,
    'flex-width'  => false,
    'flex-height' => false,
    'header-text' => '',
] );




?>