<?php

$myStory = get_post(75); 
$myStoryExcerpt = $myStory->post_excerpt;
$myStoryUrl = get_permalink($myStory);
$myStoryImage = get_the_post_thumbnail($myStory->ID, 'medium');
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
                <?php echo $myStoryImage ?>
            </div>
            <div class="homepage--featured__content col-xs-12 col-md-6 align-center">
                <div class="wrapper">
                    <h2><?php echo get_the_title($myStory); ?></h2>
                    <p>
                        <?php echo $myStoryExcerpt; ?>
                    </p>
                    <a class="btn btn-light-brown" href="<?php echo $myStoryUrl ?>"><?php _e('Read More', 'voicesofwomen') ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="homepage--stories">
    <h1>Stories</h1>
    <div class="container">
        <div class="row">
            <?php
            $loop = new WP_Query( array( 'post_type' => 'stories', 'posts_per_page' => 3, 'post__not_in' => array(75), ) );
            if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-xs-12 col-md-4">
                        <div class="homepage--stories__each">
                            <a class="homepageStory-link" href="<?php the_permalink(); ?>">
                                <div class="blur-overlay">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </div>
                            </a>
                            <div class="homepage--stories__content">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php if (get_field('location')) { ?>
                                    <h3><?php the_field('location') ?></h3>
                                <?php } ?>
                                <a class="btn btn-brown" href="<?php the_permalink(); ?>"><?php _e('Read More', 'voicesofwomen') ?></a>
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
    <a class="btn btn-yellow" href="<?php echo get_post_type_archive_link( 'stories' ); ?>"><?php _e('All Stories.', 'thevoicesofwomen') ?></a>
</section>
