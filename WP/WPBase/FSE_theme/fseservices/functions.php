<?php

if (!function_exists('fse_theme')) :
    function fse_theme()
    {
        wp_enqueue_style('fse-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    }
endif;
add_action('wp_enqueue_scripts', 'fse_theme');
