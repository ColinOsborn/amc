<article <?php post_class() ?>>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <div class="thubmnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(275, 275)); ?></a>
    </div>
    <div class="meta-info">
        <p><?php the_tags( 'Tags: ', ',' ); ?></p>
        <p><?php the_content(); ?></p>
    </div>
 </article>