<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
    <!-- Preloader HTML -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- nav -->
    <nav class="custom-navbar">
        <div class="nav-item">
            <a href="#hero" class="navbar-brand">SunomS</a>
            <a href="mailto:sunoms@outlook.com" target="_blank" class="btn btn-dark custom-btn-nav"><i
                    class="fa-solid fa-envelope"></i>
                Contact</a>
        </div>
    </nav>
    </header>

