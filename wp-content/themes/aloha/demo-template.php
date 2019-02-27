<?php
/*
Template Name: Demo Template
 */

 ?>

 <?php get_header(); ?>

 <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

    <div class="content-area">
    <main>
    <section class="middle-area">
        <div class="container">
        
                
                <div class="general-template">

                <div class="row">
                    <div class="container">
                        <h1>Aloha Mountain Cyclery Demo/Rental Bikes</h1>
                        <br>
                        <p>There's nothing like testing before you buy. Our demo bikes are here to fuel the stoke or help you out when your ride is on sick leave.
With the winter season creeping around, we will be more than happy to show our selection of fat bikes. It is recommended to call in to find availability of our bicycles.</p>
                        <br>
                        <p>Demos are charged on a 24hr Rate</p>
                        <p>Rentals are charged on a half day or full day rate.</p>
                        <p>At Aloha Mountain Cyclery, we have hand-picked brands that we feel are optimal for all conditions in and around the Roaring Fork Valley. They range from the more affordable spectrum, all the way up to performance-oriented race machines. We offer a great and variable range from Rocky Mountain, Kona and even Niner bikes that we feel complement the best of the riding in our valley.</p>
                        <p>Also, say you ride the demo and love it. Great! We will refund up to two days worth of demo'ing bikes toward the sale of a new bike from the demo.</p>
                        <p>To see specifics on bikes we offer for demos, click on bike photo for exact bike specs and details.</p>
                    </div>
                </div>
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