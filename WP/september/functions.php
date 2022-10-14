<?php

require_once __DIR__ . '/Test_Menu.php';

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function test_scripts(){
    wp_enqueue_style('test-bootstrapcss', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('test-style', get_stylesheet_uri());

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), false, true);
    //wp_enqueue_script( 'jquery' );
    wp_enqueue_script('test-popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), false, true);
    wp_enqueue_script('test-bootstrapjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'test_scripts');

function test_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    add_theme_support('custom-logo', array(
        'width' => '150',
        'height' => '40',
    ));

    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => get_template_directory_uri() . '/assets/image/background.png',
    ));

    add_theme_support('custom-header', array(
        'default-image' => get_template_directory_uri() . '/assets/image/coffee.jpg',
        'width' => '2000',
        'height' => '1300',
    ));

    add_image_size( 'my-thumb', 100, 100 );
    register_nav_menus( array(
        'header_menu1' => 'Menu Header',
        'footer_menu2' => 'Menu footer',
    ) );
}
add_action( 'after_setup_theme', 'test_setup' );


add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    return '
	<nav class="navigation" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

the_posts_pagination( array(
    'end_size' => 2,
) );

function test_widgets_init(){
    register_sidebar( array(
        'name' => 'Сайдбар справа',
        'id' => 'right-sidebar',
        'description' => 'Область для виджетов в сайдбаре справа',
    ) );
}
add_action('widgets_init', 'test_widgets_init');

function test_customize_register($wp_customize){
    $wp_customize->add_setting('test_link_color', array(
        'default' => '#007bff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'test_link_color',
            array(
                'label' => 'Цвет ссылок',
                'section' => 'colors',
                'setting' => 'test_link_color',
            )
        )
    );
}
add_action('customize_register', 'test_customize_register');

function test_customize_css(){
    $test_link_color = get_theme_mod('test_link_color');
    echo <<<HEREDOC
<style type="text/css">
a { color: $test_link_color; }
</style>
HEREDOC;

    /**/?><!--
    <style type="text/css">
        a { color: <?php /*echo get_theme_mod('test_link_color'); */?>; }
    </style>
    --><?php
}
add_action('wp_head', 'test_customize_css');