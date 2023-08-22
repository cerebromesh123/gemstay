<?php
function add_theme_scripts()
{

    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/css/slick_slick.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');

    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-2.2.0.min.js');
    wp_enqueue_script('slick-script', get_stylesheet_directory_uri() . '/js/slick_slick.min.js');
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
?>