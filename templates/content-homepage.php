<section class="homepage--hero swiper-container" id="homeHero">
    <div class="container">
        <div class="swiper-wrapper">
        <div class="homepage--hero__slide swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/background.jpg" alt="">
        </div>
        <div class="homepage--hero__slide swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/background2.jpg" alt="">
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    </div>
</section>
<section class="homepage--featured">
    <div class="homepage--featured__photo">
        <a href="#">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/home_featured.jpg" alt="">
        </a>
    </div>
    <div class="homepage--featured__content">
        <p>
            This is Shu Shu and she is a 34 year old woman from the Hmong tribe, one of ethnic groups from Sapa, north of Vietnam. As tradition dictates she is married (arranged marriage at 16) and a mother of four, the youngest is the cute baby you see…
        </p>
        <a href="#"><?php _e('Read More', 'voicesofwomen') ?></a>
    </div>
</section>
<section class="homepage--stories swiper-container" id="featuredStories">
    <div class="swiper-wrapper">
        <?php
            $loop = new WP_Query( array( 'post_type' => 'stories' ) );
            if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="homepage--stories__each swiper-slide">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                            <div class="homepage--stories__content">
                                <h2><?php the_title(); ?></h2>
                                <?php if (get_field('local')) { ?>
                                    <h3><?php the_field('local') ?></h3>
                                <?php } ?>
                                <span><?php _e('Read More', 'voicesofwomen') ?></span>
                            </div>
                        </a>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </div>
    <div class="swiper-pagination"></div>
</section>
<section class="homepage--moreStories">
    <a href="#"><?php _e('Show more stories.', 'voicesofwomen') ?></a>
</section>
