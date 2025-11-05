<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav id="nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => '',
                'menu_class' => 'links',
                'fallback_cb' => 'wp_page_menu'
            ));
            ?>
        </nav>
    </header>
