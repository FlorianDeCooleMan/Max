<?php
function school_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => __('Hoofdmenu', 'schoolthema'),
    ));
}
add_action('after_setup_theme', 'school_theme_setup');

function school_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'schoolthema'),
        'id'            => 'sidebar-1',
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'school_widgets_init');

function school_enqueue_styles() {
    // main css copied from the original html site
    wp_enqueue_style('school-main', get_template_directory_uri() . '/assets/sass/main.css', array(), null);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), null);
    wp_enqueue_script('school-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'school_enqueue_styles');
?>