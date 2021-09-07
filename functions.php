<?php 


// Function for connecting all the scripts and styles
function get_files() {

    wp_enqueue_script('jQuery', get_theme_file_uri('/js/jquery.js'), 'jquery', '1.0', false);
    wp_enqueue_script('scripts', get_theme_file_uri('/js/script.js'), 'script', '1.0', true);
    wp_enqueue_style('Bootstrap', get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('Font-Awesome', get_theme_file_uri('/css/font-awesome.css'));
    wp_enqueue_style('css-style', get_theme_file_uri('/css/style.css'));
    
 
}

// Function for posting thumbnails in wordpress admin
function get_site_features() {
    add_theme_support('post-thumbnails');
}

// Function for getting the menu's from wordpress admin 
function mytheme_register_nav_menu(){
    register_nav_menus( array(
        'main-menu' => __( 'Main Menu', 'text_domain' ),
        'secondary-menu'  => __( 'Secondary Menu', 'text_domain' ),
        'side-menu' => __( 'Side Menu', 'text_domain'),
        'arcive-menu' => __('Arcive Menu', 'text_domain'),
        'category-menu' => __('Category Menu', 'text_domain')

    ) );
}

// Action the functions so they can run 
add_action('wp_enqueue_scripts', 'get_files'); 
add_action('after_setup_theme', 'get_site_features');
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );


