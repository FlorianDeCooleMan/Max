<?php
// Register menus and widget areas, enqueue styles/scripts
function schoolthema_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'schoolthema'),
    ));
}
add_action('after_setup_theme', 'schoolthema_setup');

function schoolthema_assets() {
    // Main stylesheet (the theme's style.css will import assets)
    wp_enqueue_style('schoolthema-style', get_stylesheet_uri());
    // If the original site has a main JS file, enqueue it if exists in assets
    $js = get_template_directory() . '/assets/main.js';
    if (file_exists($js)) {
        wp_enqueue_script('schoolthema-main', get_template_directory_uri() . '/assets/main.js', array('jquery'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'schoolthema_assets');

// Register sidebar widget area
function schoolthema_widgets_init() {
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'schoolthema'),
        'id' => 'primary-sidebar',
        'description' => __('Main sidebar that appears on posts and pages', 'schoolthema'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'schoolthema_widgets_init');
