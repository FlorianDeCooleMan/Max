<?php
function schoolopdracht_setup() {
    // Titel en HTML5 support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

    // Menu registreren
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'schoolopdracht-thema' ),
    ) );
}
add_action( 'after_setup_theme', 'schoolopdracht_setup' );

// CSS en JS toevoegen
function schoolopdracht_assets() {
    $theme_uri = get_template_directory_uri();

    // Styles
    wp_enqueue_style( 'fontawesome', $theme_uri . '/assets/css/fontawesome-all.min.css' );
    wp_enqueue_style( 'main-style', $theme_uri . '/assets/sass/main.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

    // Scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'browser', $theme_uri . '/assets/js/browser.min.js', array(), null, true );
    wp_enqueue_script( 'breakpoints', $theme_uri . '/assets/js/breakpoints.min.js', array(), null, true );
    wp_enqueue_script( 'util', $theme_uri . '/assets/js/util.js', array(), null, true );
    wp_enqueue_script( 'main', $theme_uri . '/assets/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'schoolopdracht_assets' );

// Sidebar (widget area) registreren
function schoolopdracht_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'schoolopdracht-thema' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in deze sidebar verschijnen rechts.', 'schoolopdracht-thema' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'schoolopdracht_widgets_init' );
