<?php
function school_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => __('Hoofdmenu', 'schoolthema'),
    ));
}
add_action('after_setup_theme', 'school_theme_setup');

function school_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'schoolthema'),
        'id' => 'sidebar-1',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'school_widgets_init');

function school_enqueue_assets() {
    $theme_uri = get_stylesheet_directory_uri();

    // CSS
    wp_enqueue_style('fontawesome', $theme_uri . '/assets/css/fontawesome-all.min.css');
    wp_enqueue_style('school-main', $theme_uri . '/assets/sass/main.css', array(), null);

    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('browser', $theme_uri . '/assets/js/browser.min.js', array('jquery'), null, true);
    wp_enqueue_script('breakpoints', $theme_uri . '/assets/js/breakpoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('util', $theme_uri . '/assets/js/util.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', $theme_uri . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'school_enqueue_assets');

?>