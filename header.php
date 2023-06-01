<!DOCTYPE HTML>
<html lang="pt_BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
        <?php
        if (is_home()) {
            bloginfo('name');
        } elseif (is_category()) {
            single_cat_title();
            echo ' -  ';
            bloginfo('name');
        } elseif (is_single()) {
            single_post_title();
        } elseif (is_page()) {
            bloginfo('name');
            echo ': ';
            single_post_title();
        } else {
            wp_title('', true);
        }
        ?>
    </title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width:device-width, initial-scale=1">
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_directory'); ?>/cdn/boot.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fc56681566.js" crossorigin="anonymous"></script>
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="main_header">
        <div class="main_header_content">
            <div class="logo">
                <a href="<?php echo site_url($path, $scheme); ?>" title="Logomarca">
                    LOGO CLIENTE
                </a>
            </div>

            <nav class="main_header_content_menu">
                <?php wp_nav_menu(array('theme_location' => 'MenuHeader')); ?>
                <i class="fa-solid fa-bars"></i>
            </nav>

        </div>
    </header>