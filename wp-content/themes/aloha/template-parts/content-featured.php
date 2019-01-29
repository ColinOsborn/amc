<article <?php post_class( array( 'class' => "featured" )); ?>>

<div class="thubmnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(275, 275)); ?></a>
</div>

<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

    <div class="meta-info">
        <p>Posted <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
        <p><?php the_tags( 'Tags: ', ',' ); ?></p>
    </div>
    <p><?php the_excerpt(); ?></p>
 </article>