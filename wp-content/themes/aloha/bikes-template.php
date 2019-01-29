<?php
/*
Template Name: Bike Template
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
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </article>

                    <?php
                    endwhile;
                    else:
                    ?>
                    <p>There's nothing yet to be displayed</p>

                    <?php endif; ?>
            </div>
            <div class="bike-brands">
                <div class="container">
                    <div class="container-top">
                        <div class="one-of-three">
                            <div class="bike-lines"><a href="http://www.bikes.com/" target="_blank"><img src="http://localhost:8888/aloha/wp-content/uploads/2018/10/RMB_Headbadge_white-150.png"></a></div>
                                <p>Rocky Mountain is bike brand near and dear to our heart. Not only do they make rockin' bike, you can just give'r on em and they keep given'n on back. </p>
                            </div>
                        <div class="two-of-three">
                            <div class="bike-lines"><a href="http://www.konaworld.com/" target="_blank"><img src="http://localhost:8888/aloha/wp-content/uploads/2018/10/kona_logo.png"></a></div>
                                <p>Our favorite all-around bike company, Kona makes a bike for any use or user. Mountain, road, cross, commute, or kids… Every single Kona we throw a leg over fits great and feels ready to shred, right out of the box. Located in the Northwest and making bikes since 1988, Kona offers selection, durability, and bikes for any budget.</p>
                            </div>
                        <div class="three-of-three">
                            <div class="bike-lines"><a href="https://www.moots.com/" target="_blank"><img src="http://localhost:8888/aloha/wp-content/uploads/2018/10/moots-logo-white-150.png"></a></div>
                                <p>Moots. They're made in Steamboat Springs out of sweet sweet Ti-Tanium. What else do we really need to say. Crack a beer folks. Kokanee you mother fuckers drink it up!! I'm putting space in here so shit looks right? eh?! </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container-middle">
                        <div class="one-of-three">
                            <div class="bike-lines"><a href="http://www.salsacycles.com/" target="_blank"><img src="http://localhost:8888/aloha/wp-content/uploads/2018/10/salsa-logo-red-150.png"></a></div>
                                <p>Salsa Baby! Who does'nt like salsa? Offering everything from full-on downhill bikes to enduro-style bikes to road bikes, Devinci is at the forefront of the ever-growing carbon bike explosion. Ride one. You’ll want one.</p>
                            </div>
                        <div class="two-of-three">
                            <div class="bike-lines"><a href="https://surlybikes.com/" target="_blank"><img src="http://localhost:8888/aloha/wp-content/uploads/2018/10/surly-bikes-logo-150.png"></a></div>
                                <p>Surly! Whose surly?! I'm fucking Surly and you know you are too! Come ride this Pugsley. Feels like hard steel.</p>
                            </div>
                        <div class="three-of-three">
                            <div class="bike-lines"><a href="https://www.whycycles.com/" target="_blank"><img src="http://dirtyfingersbikes.com/wp-content/uploads/2016/08/transition.png"></a></div>
                                <p>Why Cycles staffed by riders from the ground floor up. These folks are dedicated to making fun-and-fast downhill, trail, and dirt jump bikes. They offer bikes in a variety of travels and wheel sizes with one thing in common: great handling at speed. If you need a one-bike quiver that can handle anything – 44 Road cross-country, Post Canyon jumps and Syncline rocks – Transition is for you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-middle">
                        <div class="one-of-three">
                            <div class="bikes-lines"><a href="https://www.cervelo.com/" target="_blank"><img src="http://localhost:8888/aloha/wp-content/uploads/2018/10/Cervelo-Logo.png"></a></div>                                
                                <p>Salsa Baby! Who does'nt like salsa? Offering everything from full-on downhill bikes to enduro-style bikes to road bikes, Devinci is at the forefront of the ever-growing carbon bike explosion. Ride one. You’ll want one.</p>
                            </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>
    </div>

