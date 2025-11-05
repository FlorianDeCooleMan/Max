<?php
function greentech_enqueue_assets() {
    wp_enqueue_style('greentech-main', get_stylesheet_directory_uri() . '/assets/sass/main.css', array(), '1.0');
    wp_enqueue_style('greentech-fontawesome', get_stylesheet_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0');
    wp_enqueue_script('jquery');
    wp_enqueue_script('greentech-browser', get_stylesheet_directory_uri() . '/assets/js/browser.min.js', array('jquery'), null, true);
    wp_enqueue_script('greentech-breakpoints', get_stylesheet_directory_uri() . '/assets/js/breakpoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('greentech-util', get_stylesheet_directory_uri() . '/assets/js/util.js', array('jquery'), null, true);
    wp_enqueue_script('greentech-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'greentech_enqueue_assets');

function greentech_theme_setup() {
    register_nav_menu('primary', __('Primary Menu', 'greentech'));
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'greentech_theme_setup');

function greentech_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'greentech'),
        'id' => 'sidebar-1',
        'description' => __('Main sidebar that appears on the right.', 'greentech'),
        'before_widget' => '<section class="widget %2$s" id="%1$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'greentech_widgets_init');
?>