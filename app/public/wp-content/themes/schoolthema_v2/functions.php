<?php
function schoolthema_v2_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'schoolthema_v2'),
    ));
}
add_action('after_setup_theme', 'schoolthema_v2_setup');

function schoolthema_v2_assets() {
    // Enqueue main theme stylesheet (style.css) so WP sees the theme name
    wp_enqueue_style('schoolthema_v2-style', get_stylesheet_uri());

    $assets_uri = get_template_directory_uri() . '/assets/';

    // Enqueue CSS files found in assets (common names first)
    $css_files = array(
        'css/fontawesome-all.min.css',
        'css/main.css',
        'main.css',
        'css/style.css',
        'style.css'
    );

    foreach ($css_files as $css) {
        $path = get_template_directory() . '/assets/' . $css;
        if (file_exists($path)) {
            wp_enqueue_style('schoolthema_v2-' . md5($css), $assets_uri . $css, array(), null);
        }
    }

    // Also enqueue any top-level .css files in assets root
    $assets_dir = get_template_directory() . '/assets';
    if ( is_dir($assets_dir) ) {
        $files = scandir($assets_dir);
        foreach ($files as $f) {
            if (preg_match('/\.css$/i', $f)) {
                wp_enqueue_style('schoolthema_v2-' . md5($f), $assets_uri . $f, array(), null);
            }
        }
    }

    // Enqueue JS in correct order if present
    // Priority: jquery -> browser.min.js -> breakpoints.min.js -> util.js -> main.js
    if (file_exists(get_template_directory() . '/assets/js/jquery.min.js')) {
        wp_enqueue_script('schoolthema_v2-jquery', $assets_uri . 'js/jquery.min.js', array(), null, true);
    } else {
        // rely on WP jquery
        wp_enqueue_script('jquery');
    }

    if (file_exists(get_template_directory() . '/assets/js/browser.min.js')) {
        wp_enqueue_script('schoolthema_v2-browser', $assets_uri . 'js/browser.min.js', array('jquery'), null, true);
    }
    if (file_exists(get_template_directory() . '/assets/js/breakpoints.min.js')) {
        wp_enqueue_script('schoolthema_v2-breakpoints', $assets_uri . 'js/breakpoints.min.js', array('jquery'), null, true);
    }
    if (file_exists(get_template_directory() . '/assets/js/util.js')) {
        wp_enqueue_script('schoolthema_v2-util', $assets_uri . 'js/util.js', array('jquery'), null, true);
    }
    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        // depend on util so breakpoints is available
        $deps = array('jquery');
        if (wp_script_is('schoolthema_v2-util', 'enqueued')) $deps[] = 'schoolthema_v2-util';
        wp_enqueue_script('schoolthema_v2-main', $assets_uri . 'js/main.js', $deps, null, true);
    }
}
add_action('wp_enqueue_scripts', 'schoolthema_v2_assets');

function schoolthema_v2_widgets_init() {
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'schoolthema_v2'),
        'id' => 'primary-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'schoolthema_v2_widgets_init');
