<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">

<head>
    <!-- Meta Data -->
    <meta  charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
    <?php if (is_front_page()) { ?>
        Home | <?php bloginfo('name'); ?>
    <?php } elseif (is_page()) { ?>
        <?php the_title(); ?> | <?php bloginfo('name'); ?>
    <?php } else { ?>
        <?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?>
    <?php } ?>
</title>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="" />

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/feather-font/css/iconfont.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/icomoon-font/css/icomoon.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/font-awesome/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/wpbingofont/css/wpbingofont.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/elegant-icons/css/elegant.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/slick/css/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/slick/css/slick-theme.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/mmenu/css/mmenu.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>"> 
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/app.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/custom.css" />

    <!-- Google Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
        rel="stylesheet" />
        <?php wp_head();?>

</head>

<body class="home home-4 title-4" <?php body_class();?>>
    <div id="page" class="hfeed page-wrapper">
        <header id="site-header" class="site-header header-v4">
            <div class="header-mobile">
                <div class="section-padding">
                    <div class="section-container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                                <div class="navbar-header">
                                    <button type="button" id="show-megamenu" class="navbar-toggle"></button>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
                                <div class="site-logo">
                                    <a href="#">
                                        <img width="400" height="79" src="media/logo.png"
                                            alt="Mojuri – Jewelry Store HTML Template" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                                <div class="mojuri-topcart dropdown">
                                    <div class="dropdown mini-cart top-cart">
                                        <div class="remove-cart-shadow"></div>
                                        <a class="dropdown-toggle cart-icon" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="icons-cart">
                                                <i class="icon-large-paper-bag"></i><span class="cart-count">0</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-mobile-fixed">
                    <!-- Shop -->
                    <div class="shop-page">
                        <a href="#"><i class="wpb-icon-shop"></i></a>
                    </div>

                    <!-- Login -->
                    <div class="my-account">
                        <div class="login-header">
                            <a href="#"><i class="wpb-icon-user"></i></a>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="search-box">
                        <div class="search-toggle">
                            <i class="wpb-icon-magnifying-glass"></i>
                        </div>
                    </div>

                    <!-- Wishlist -->
                    <div class="wishlist-box">
                        <a href="#"><i class="wpb-icon-heart"></i></a>
                    </div>
                </div>
            </div>

            <div class="header-bottom">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="block block-feature">
                            <div class="block-widget-wrap">
                                <div class="row">
                                    <div class="col-md-12 sm-m-b-50">
                                        <div class="box">
                                           
                                            <div class="box-title-wrap">
                                                <h3 class="box-title">
                                                <?php echo get_theme_mod('top_header_title');?>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-desktop">
                <div class="header-wrapper">
                    <div class="section-padding">
                        <div class="section-container large p-l-r">
                            <div class="row justify-content-between">
                                <div class=" header-left">
                                    <div class="site-logo">
                                    <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_mod('header_logo');?>" alt=""></a>
                                    </div>
                                </div>

                                <div class=" text-center header-center">
                                    <div class="site-navigation">
                                        <nav id="main-navigation">
                                            <ul id="menu-main-menu" class="menu">
                                            <?php   
                                                wp_nav_menu( array(
                                                    'menu'  => 'header_menu', 
                                                    'items_wrap' => '%3$s',
                                                    'container' => false,
                                                ) );
                                                 ?>    
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                                <div class=" header-right">
                                    <div class="header-page-link">
                                        <!-- Search -->
                                        <div class="search-box">
                                            <div class="search-toggle">
                                                <i class="icon-search"></i>
                                            </div>
                                        </div>

                                        <!-- Login -->
                                        <div class="login-header icon">
                                            <a class="active-login" href="#"><i class="icon-user"></i></a>
                                        </div>

                                        <!-- Wishlist -->
                                        <div class="wishlist-box">
                                            <a href="#"><i class="icon-heart"></i></a>
                                            <span class="count-wishlist">0</span>
                                        </div>

                                        <!-- Cart -->
                                        <div class="mojuri-topcart dropdown light">
                                            <div class="dropdown mini-cart top-cart">
                                                <div class="remove-cart-shadow"></div>
                                                <a class="dropdown-toggle cart-icon" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="icons-cart">
                                                        <i class="icon-large-paper-bag"></i><span
                                                            class="cart-count">0</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>