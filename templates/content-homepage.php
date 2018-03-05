<?php

// Raquel Story
$myStory = get_post(48); 
$myStoryExcerpt = $myStory->post_excerpt;
$myStoryUrl = get_permalink($myStory);
$myStoryImage = get_the_post_thumbnail($myStory->ID, 'medium');

// Slider Posts
$sliderPosts = get_field('content');

// vars
$order = array();

// populate order
foreach( $sliderPosts as $i ) {
    $order[] = $i['post'];
}

$the_query = new WP_Query( array(
    'post_type' => array('any'),
    'post__in' => $order,
    'orderby' => 'post__in'
) );
?>

<div class="container">
    <?php 
    // The Loop
    if ( $the_query->have_posts() ) { ?>
        <section class="homepage--hero">
            <div class="swiper-container" id="homeHero">
                <div class="swiper-wrapper">
                    <?php while ( $the_query->have_posts() ) {
                        $the_query->the_post(); ?>
                        <div class="homepage--hero__slide swiper-slide">
                            <div class="heroSlide--content">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <span id="sliderProgress"></span>
                                <p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p>
                            </div>
                            <div class="heroSlide--photo">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                
                <div class="heroSlide--navigation">
                    <div class="button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 24 30" x="0px" y="0px">
                          <path fill="#ffffff" d="M7.708 20.971l8.485-8.486-8.485-8.485-0.708 0.707 7.778 7.778-7.778 7.779z"/>
                          </svg>
                    </div>
                    <div class="button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 24 30" x="0px" y="0px">
                          <path fill="#ffffff" d="M7.708 20.971l8.485-8.486-8.485-8.485-0.708 0.707 7.778 7.778-7.778 7.779z"/>
                          </svg>
                    </div>
                </div>
            </div>
            <div class="pagination"></div>
            <span class="scroll-line init"></span>
        </section>
        <?php wp_reset_postdata();
    } 
    ?>
</div>
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
    <a class="btn btn-yellow" href="<?php echo get_post_type_archive_link( 'stories' ); ?>"><?php _e('All Stories', 'thevoicesofwomen') ?></a>
</section>
