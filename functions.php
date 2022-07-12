<?php

/**
 * Assets
 */

function ibgc_enqueue_resources()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/vendor/slick-carousel/slick/slick-theme.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/vendor/slick-carousel/slick/slick.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/dist/js/bootstrap.min.js', ['jquery'], false, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/vendor/slick-carousel/slick/slick.min.js', ['bootstrap-js'], false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['slick'], false, true);
}
add_action('wp_enqueue_scripts', 'ibgc_enqueue_resources');

/**
 * Move all JS to footer
 */
add_action('init', function () {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
});
