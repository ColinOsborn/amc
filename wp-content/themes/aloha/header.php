<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-10 col-md-8 col-sm-8 col-6">
                    <a href="https://www.carbondale.com/visit/things-to-do/" target="_blank"><img class="cc-icon" src="https://drncvpyikhjv3.cloudfront.net/sites/109/2016/08/31123954/logo.png" alt="Town of Carbondale" width='32' height='32'></a>
                    <?php
                        if(is_active_sidebar('social-media')){
                            dynamic_sidebar('social-media');
                        }
                        ?>
                    </div>
                    <div class="hours col-xl-12 col-md-12 col-sm-12 col-8 text-right">Open MON-FRI 10am - 7pm | SAT 9am - 5pm | SUN 10am - 5am | 970-963-2500</div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
               <div class="align">
                <div class="row">
                    <section class="logo col-md-2 col-sm-10 col-10 text-center"><?php the_custom_logo(); ?></section>
                    <nav class="main-menu col-md-12 text-right">
                    <?php wp_nav_menu( array('theme_location' => 'my_main_menu' ) ); ?>
                    </nav>
                </div>
               </div>
            </div>
        </section>
    </header>