<?php

$myStory = get_post(22); 
$myStoryExcerpt = $myStory->post_excerpt;
$myStoryUrl = get_permalink($myStory);
?>

<section class="homepage--hero">
    <div class="container">
        <div class="swiper-container" id="homeHero">
            <div class="swiper-wrapper">
                <div class="homepage--hero__slide swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/background.jpg" alt="">
                </div>
                <div class="homepage--hero__slide swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/background2.jpg" alt="">
                </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            </div>
        </div>
    </div>
</section>
<section class="homepage--featured">
    <div class="container">
        <div class="row no-gutters">
            <div class="homepage--featured__photo col-xs-12 col-md-6">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/raquel.jpg" alt="My Story">
            </div>
            <div class="homepage--featured__content col-xs-12 col-md-6 align-center">
                <p>
                    <?php echo $myStoryExcerpt ?>
                </p>
                <a href="<?php echo $myStoryUrl ?>"><?php _e('Read More', 'voicesofwomen') ?></a>
            </div>
        </div>
    </div>
</section>
<section class="homepage--stories">
    <div class="container">
        <div class="row">
            <?php
            $loop = new WP_Query( array( 'post_type' => 'stories', 'posts_per_page=3' ) );
            if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-xs-12 col-md-4">
                        <div class="homepage--stories__each">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <div class="homepage--stories__content">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php if (get_field('location')) { ?>
                                    <h3><?php the_field('location') ?></h3>
                                <?php } ?>
                                <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'voicesofwomen') ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </div>
    </div>
</section>
<section class="homepage--moreStories">
    <a href="#"><?php _e('Show more stories.', 'voicesofwomen') ?></a>
</section>
