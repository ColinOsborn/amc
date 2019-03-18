<?php
/*
Template Name: Bike Template
 */

 ?>

<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="" />

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
                        <p class="revert"><?php the_content(); ?></p>
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
    </main>
</div>
<br>
<div class="container">
    <div class="bike-brands">
        <div class="container">
            <div class="container-top">
                <div class="one-of-three">
                    <div class="bike-lines"><a href="http://www.bikes.com/" target="_blank"><img
                                src="http://localhost:8888/aloha/wp-content/uploads/2018/10/RMB_Headbadge_white-150.png"></a>
                    </div>
                    <p>Rocky Mountain Bicycles is a Canadian company that helped define freeride mountain biking.  By staffing former spomsored pro riders, they insure that every bike they design has top level rider input and will help you have the ride of your life. </p>
                </div>
                <div class="two-of-three">
                    <div class="bike-lines"><a href="http://www.konaworld.com/" target="_blank"><img
                                src="http://localhost:8888/aloha/wp-content/uploads/2018/10/kona_logo.png"></a></div>
                    <p>Our favorite all-around bike company, Kona makes a bike for any use or user. Mountain, road,
                        cross, commute, or kids… Every single Kona we throw a leg over fits great and feels ready to
                        shred, right out of the box.</p>
                </div>
                <div class="three-of-three">
                    <div class="bike-lines"><a href="https://www.moots.com/" target="_blank"><img
                                src="http://localhost:8888/aloha/wp-content/uploads/2018/10/moots-logo-white-150.png"></a>
                    </div>
                    <p>Very few companies have the cycling heretige that Moots has.  Located just two hours away in beautiful Steamboat Springs, Moots designs, fabricates, and produces all of their bikes from top grade USA sourced titanium.  If you want a bicycle that will feel like you have been riding it for twenty years the first time you ever throw a leg over it, you want a Moots. </p>
                </div>
            </div>
        </div>
        <br>
        <div class="container-middle">
            <div class="one-of-three">
                <div class="bike-lines"><a href="http://www.salsacycles.com/" target="_blank"><img 
                            src="http://localhost:8888/aloha/wp-content/uploads/2018/10/salsa-logo-red-150.png"></a>
                </div>
                <p>Salsa is adventure by bike. This is the company that has helped create fat bike racing, bikepacking, and gravel racing. If you want a bike for your next cycling adventure, look no further than Salsa.</p>
            </div>
            <div class="two-of-three">
                <div class="bike-lines"><a href="https://surlybikes.com/" target="_blank"><img class="surly-img"
                            src="http://localhost:8888/aloha/wp-content/uploads/2019/03/surly-images.png"></a>
                </div>
                <p>Surly is functional steel with soul. This Minnesota company has been on the forefront of bicycle design, but have always stayed true to their steel roots.</p>
            </div>
            <div class="three-of-three">
                <div class="bike-lines"><a href="https://www.whycycles.com/" target="_blank"><img class="why-img"
                            src="http://localhost:8888/aloha/wp-content/uploads/2019/03/why-cycles-logo-1.png"></a></div>
                <p>Why Cycles is a small bike company located right here in Carbondale that specializes in beautiful ti bikes with progressive geometry that makes them ride as good as they look.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container-bottom">
        <br>
            <div class="one-of-three">
                <div class="bike-lines"><a href="https://www.cervelo.com/en_US/" target="_blank"><img class="cervelo-img"
                            src="http://localhost:8888/aloha/wp-content/uploads/2019/03/cervelo.png"></a>
                </div>
                    <p>From the pro peleton to the Hawaii Ironman World Championships, Cervelo is the leader in road and triathlon aerodynamic bicycle technology.
                </p>
            </div>
            <div class="two-of-three">
                <div class="bike-lines"><a href="https://ninerbikes.com/" target="_blank"><img class="surly-img"
                            src="http://localhost:8888/aloha/wp-content/uploads/2019/03/niner-logo.png"></a>
                </div>
                    <p>Niner Bikes started the whole twenty nine inch wheel revolution and now make everything from full suspension and hardtail mountain bikes to carbon & steel gravel grinders.</p>
            </div>
            <div class="three-of-three">
                <div class="bike-lines"><a href="https://allcitycycles.com/" target="_blank"><img class="all-city-img"
                            src="http://localhost:8888/aloha/wp-content/uploads/2019/03/hdr_allcity_logo.png"></a></div>
                <p>All-City Cycles is committed to the concept of "Steel is Real"!  Their bikes are not only beautiful, but they ride like a dream.</p>
            </div>
        </div>
    </div>
</div>
<br>
