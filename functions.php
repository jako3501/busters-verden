<?php

function ad_remove_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");

}
add_action( "init", "ad_remove_gutenberg");

function buster_get_stylesheet() {
    wp_enqueue_style('style', get_stylesheet_uri('style.css'));
    wp_enqueue_style('bootstrap', get_template_directory_uri('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'));
    wp_enqueue_script('script', get_template_directory_uri('script.js'));
}

add_action('wp_enqueue_scripts', 'buster_get_stylesheet');

