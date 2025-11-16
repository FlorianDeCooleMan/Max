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

function greentech_register_sidebar() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'greentech_register_sidebar' );
function greentech_mini_posts_shortcode() {
    ob_start();
    $args = array(
        'posts_per_page' => 4,
        'post_status' => 'publish'
    );
    $recent_posts = new WP_Query($args);

    if ($recent_posts->have_posts()):
        echo '<div class="mini-posts">';
        while ($recent_posts->have_posts()): $recent_posts->the_post(); ?>
            <article class="mini-post">
                <header>
                    <div class="title">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author">
                            <?php echo get_avatar(get_the_author_meta('ID'), 48); ?>
                        </a>
                    </div>
                </header>
                <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail('thumbnail'); ?></a>
                <?php endif; ?>
            </article>
        <?php endwhile;
        echo '</div>';
        wp_reset_postdata();
    endif;

    return ob_get_clean();
}
add_shortcode('mini_posts', 'greentech_mini_posts_shortcode');

?>