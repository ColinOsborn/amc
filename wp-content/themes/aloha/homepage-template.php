<?php
/*
Template Name: Homepage Template
 */

 ?>

 <?php get_header(); ?>

    <div class="content-area">
    <main>
    <section class="middle-area">
        <div class="container">
        
                
                <div class="homepage-template">
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
    </section>

    </main>
    </div>
<?php get_footer(); ?>