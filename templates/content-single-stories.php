<?php use Roots\Sage\Extras; ?>

<div class="container">
    <article>
        <?php while (have_posts()) : the_post(); ?>
            <div class="singleStory--title">
                <h1><?php the_title(); ?></h1>
                <?php if (get_field('local')) { ?>
                    <h2><?php the_field('local') ?></h2>
                <?php } ?>
            </div>
            <figure>
                <?php the_post_thumbnail('full'); ?>  
            </figure>
            <div class="article-content article-body">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </article>

    <div class="related wrap">
        <?php
            $related = Extras\get_related_posts( get_the_ID(), 5 );

            if ( $related->have_posts() ): ?>
            
                <h3><?php _e('More Stories', 'voicesofwomen') ?></h3>
                <div class="swiper-container" id="relatedStories">
                    <div class="swiper-wrapper">
                        <?php while ( $related->have_posts() ): $related->the_post(); ?>
                            <div class="related__thumbnail swiper-slide">
                                <figure style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');"></figure>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif;
            wp_reset_postdata();
        ?>
    </div>
</div>