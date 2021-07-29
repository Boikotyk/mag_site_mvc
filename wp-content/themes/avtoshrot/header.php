<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Автомагазин деталей вживаних автомобілів у м. Яремча Івано-Франківської обл. розроблений Івасюком Михайлом для дипломної роботи">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
   <?php
        wp_head();
    ?>

</head>
    <body <?php body_class(); ?>>

        <!-- HEADER-AREA START -->
        <header class="header-area">
            <!-- HEADER-TOP START -->
            <div class="header-top hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="top-menu">
                                <p class="welcome-msg">Ми раді вас бачити</p>
                            </div>
                            <!-- Start Top-Link -->
                            <!-- <div class="top-link">
                                <ul class="link">
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i> </a></li>
                                    <li><a href="checkout.html"><i class="fa fa-share"></i> Checkout</a></li>
                                </ul>
                            </div>
 -->                            <!-- End Top-Link -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- HEADER-TOP END -->
            <!-- HEADER-MIDDLE START -->
            <div class="header-middle">
                <div class="container">
                    <!-- Start Support-Client -->
                    <div class="support-client hidden-xs">
                        <div class="row">
                            <!-- Start Single-Support -->
                            <div class="col-md-3 col-sm-12">
                                <div class="logo">
                                    <?php $custom_logo_url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); ?>
                                    <a href="<?php echo get_home_url(); ?>" title="Автошрот"><img src="<?php echo $custom_logo_url[0]; ?>" alt="Автошрот"></a>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm">
                                <div class="single-support">
                                    <div class="support-content">
                                        <i class="fa fa-clock-o"></i>
                                        <div class="support-text">
                                            <h1 class="zero gfont-1">Робочі години</h1>
                                            <p>Пд-Пн: 8.00 - 18.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-Support -->
                            <!-- Start Single-Support -->
                            <div class="col-md-3 col-sm-4">
                                <div class="single-support">
                                    <i class="fa fa-truck"></i>
                                    <div class="support-text">
                                        <h1 class="zero gfont-1">Доставка</h1>
                                        <p>Безкоштовна від покупки на $199</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-Support -->
                            <!-- Start Single-Support -->
                            <div class="col-md-3 col-sm-4">
                                <div class="single-support">
                                    <i class="fa fa-phone-square"></i>
                                    <div class="support-text">
                                        <h1 class="zero gfont-1">Робочий телефон: 0123456789</h1>
                                        <p>Ми завжди на звязку !</ne p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-Support -->
                        </div>
                    </div>
                </div> 
            </div>
            <!-- HEADER-MIDDLE END -->
            <!-- START MAINMENU-AREA -->
            <div class="mainmenu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mainmenu hidden-sm hidden-xs">
                                <nav>
                                    <?php wp_nav_menu( array(
                                'menu'            => 'top',
                                'container'       => 'ul', 
                                'theme_location'  => 'top',
                                                        
                            ) ); ?>  
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN-MENU-AREA -->
            <!-- Start Mobile-menu -->
            <div class="mobile-menu-area hidden-md hidden-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <nav id="mobile-menu">
                                <?php wp_nav_menu( array(
                                'menu'            => 'topmobile',
                                'container'       => 'ul', 
                                'theme_location'  => 'topmobile',
                                                         
                            ) ); ?>  
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mobile-menu -->
        </header>
        <div class="container">