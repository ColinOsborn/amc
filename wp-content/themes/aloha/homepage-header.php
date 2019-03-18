<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Aloha Mountain Cylcery</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-10 col-md-8 col-sm-8 col-6">
                    <?php
                        if(is_active_sidebar('social-media')){
                            dynamic_sidebar('social-media');
                        }
                        ?>
                    </div>
                    <div class="search col-xl-12 col-md-12 col-sm-12 col-8 text-right">Open MON-FRI 10AM - 7PM | SAT & SUN 10AM - 5PM | 970-963-2500</div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
               <div class="align">
                <div class="row">
                    <a href="/"><section class="logo col-md-2 col-sm-12 col-12 text-center"><?php the_custom_logo(); ?></section></a>
                    <nav class="main-menu col-md-10 text-right">
                    <?php wp_nav_menu( array('theme_location' => 'my_main_menu' ) ); ?>
                    </nav>
                </div>
               </div>
            </div>
        </section>
    </header>