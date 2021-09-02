<?php 

function get_files() {
    wp_enqueue_script('jQuery', get_theme_file_uri('/js/jquery.js'), 'jquery', '1.0', false);
    wp_enqueue_script('scripts', get_theme_file_uri('/js/script.js'), 'jquery', '1.0', true);
    wp_enqueue_style('Bootstrap', get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('Font-Awesome', get_theme_file_uri('/css/font-awesome.css'));
    wp_enqueue_style('css-style', get_theme_file_uri('/css/style.css'));
    

}

function get_site_features() {
    add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'get_files'); 
add_action('after_setup_theme', 'get_site_features');

