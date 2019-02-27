<?php
/*
Template Name: Bike Fit Template
 */

 ?>

 <?php get_header(); ?>

 <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

    <div class="content-area">
    <main>
    <section class="middle-area">
        <div class="container">
                
                <div class="general-template">
                    <?php 
                    // If there are any posts    
                     if( have_posts() ):
                        // if they exist, display em 
                        while( have_posts() ): the_post();   
                    ?>
                    <article>
                        <p><?php the_content(); ?></p>
                    </article>

                    <?php
                    endwhile;
                    else:
                    ?>
                    <p>There's nothing yet to be displayed</p>

                    <?php endif; ?>
            </div>
            </div>
        </div>
    </section>
    <div class="container">
            <div class="fit-row">
                <div class="fit-column">
                    <img src="http://localhost:8888/aloha/wp-content/uploads/2018/09/plthumb_step1.jpg" alt="Fit1">
                </div>
                <div class="fit-column">
                    <img src="http://localhost:8888/aloha/wp-content/uploads/2018/09/plthumb_step4.jpg" alt="Fit2">
                </div>
                <div class="fit-column">
                    <img src="http://localhost:8888/aloha/wp-content/uploads/2018/09/plthumb_step3.jpg" alt="Fit3">
                </div>
                </div>
            </div>
    </div>

    </main>
    </div>

    <?php get_footer(); ?>
