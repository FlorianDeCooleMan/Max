<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>" class="logo" />
        </a>

        <!-- Primary navigation (links) -->
        <nav class="links">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'fallback_cb' => 'wp_page_menu'
            ));
            ?>
        </nav>

        <!-- Secondary navigation (main) -->
        <nav class="main">
            <ul>
                <li class="search">
                    <a class="fa-search" href="#search">Search</a>
                    <form id="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="text" name="s" placeholder="Search" />
                    </form>
                </li>
                <li class="menu">
                    <a class="fa-bars" href="#menu">Menu</a>
                </li>
            </ul>
        </nav>
    </header>
