<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='<?php echo get_template_directory_uri();?>/style.css'>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();?>/images/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Rick Randy - Web Developer</title>
    <?php wp_head();?>
</head>

<header class="header-wrapper">
    <div class="logo-wrapper">
        <img src="" alt="" srcset="">
    </div>
    <nav>
        <div class="nav-left">
            <img src="<?php echo get_template_directory_uri();?>/images/Logo.svg" alt="Logo" />
        </div>
        <div class="wrapper">
            <?php
                $menu_name = 'NavBar';
                $menu_locations = get_nav_menu_locations();
                $menu_id = $menu_locations[$menu_name];
                $menu = wp_get_nav_menu_object($menu_id);
                wp_nav_menu( array(
                    'main' => $menu,
                    'container' => 'div',
                    'container_class' => 'nav-center',
                    'menu_class' => 'menu',
                    'fallback_cb' => false
                ) );
            ?>
            <div class="nav-right">
                <a href="#" class="button button-primary">Login</a>
                <a href="#" class="button button-secondary">Sign Up</a>
            </div>
            <div class="hamburger" id="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="mobile-menu d-none" id="nav">
                <div class="top-bar">
                    <img class="logo" src="Logo.svg" alt="Logo" height="50" width="50" />
                    <div>Rick Randy</div>
                    <div class="close">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="menu-content">
                    <div class="title">Content</div>
                    <ul>
                        <li>
                            <a href="" class="">Home</a>
                        </li>
                        <li>
                            <a href="" class="">About me</a>
                        </li>
                        <li>
                            <a href="" class="">Books</a>
                        </li>
                        <li>
                            <a href="" class="">Workshop</a>
                        </li>
                        <li>
                            <a href="" class="">Consulting</a>
                        </li>
                    </ul>
                <div class="title">Account</div>
                    <ul>
                        <li>
                            <a href="" class="">Login</a>
                        </li>
                        <li>
                            <a href="" class="">Sign Up</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-joke">
                    <span>"Why do JavaScripters wear Glasses? Becuase they don't C#"</span>
                </div>
            </div>
        </div>
    </nav>
</header>
<body>
