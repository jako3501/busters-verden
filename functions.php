<?php

function ad_remove_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");

}
add_action( "init", "ad_remove_gutenberg");

function buster_get_stylesheet() {
    wp_enqueue_style('style', get_stylesheet_uri('style.css'));
    wp_enqueue_style( 'bootstrap-cdn-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-cdn-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );
    // ------               -------//
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
    wp_enqueue_script('script', get_template_directory_uri('script.js'));
}

add_action('wp_enqueue_scripts', 'buster_get_stylesheet');

function register_custom_menu() {
    register_nav_menu('custom-menu', __('Custom Menu'));
}

add_action('init', 'register_custom_menu');

