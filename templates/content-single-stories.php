<?php use Roots\Sage\Extras; ?>

<div class="container">
    <article>
        <?php while (have_posts()) : the_post(); ?>
            <div class="singleStory--title">
                <h1><?php the_title(); ?></h1>
                <span class="vert-line"></span>
                <?php if (get_field('location')) { ?>
                    <h2><?php the_field('location') ?></h2>
                <?php } ?>
            </div>
            <figure>
                <?php the_post_thumbnail('full'); ?>  
            </figure>
            <div class="article-content article-body">
                <?php the_content(); ?>
            </div>
            <div class="article-share">
                <h6>Share this:</h6>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="facebook">
     
                            <svg width="14px" height="26px" viewBox="0 0 14 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path d="M8.5329816,25.015 L8.5329816,13.6113658 L12.3608118,13.6113658 L12.9338541,9.16707456 L8.5329816,9.16707456 L8.5329816,6.32970244 C8.5329816,5.04297529 8.89020716,4.166087 10.7354185,4.166087 L13.0888845,4.16498025 L13.0888845,0.190122254 C12.68177,0.136061665 11.2847933,0.015 9.65957021,0.015 C6.26643821,0.015 3.94362072,2.08607392 3.94362072,5.88964073 L3.94362072,9.16707456 L0.106,9.16707456 L0.106,13.6113658 L3.94362072,13.6113658 L3.94362072,25.015 L8.5329816,25.015" id="Fill-75" fill="#FFFFFE"></path>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank" class="twitter">  
                            <svg width="31px" height="26px" viewBox="0 0 31 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path d="M9.67415271,25.411 C21.282693,25.411 27.6308213,15.793694 27.6308213,7.45433146 C27.6308213,7.18104892 27.6252842,6.90899683 27.6127337,6.63842128 C28.8449045,5.74769984 29.9161327,4.636236 30.7612045,3.37072005 C29.6302995,3.87298899 28.4133863,4.21160833 27.1367963,4.36418391 C28.4398409,3.5830954 29.4401953,2.34674107 29.9119491,0.873156336 C28.6923289,1.59604464 27.3421581,2.12181515 25.9046255,2.40494127 C24.7530491,1.17830748 23.1128616,0.411 21.2979506,0.411 C17.812337,0.411 14.9858745,3.23746251 14.9858745,6.72172262 C14.9858745,7.21710105 15.0413677,7.69857543 15.1495241,8.16073176 C9.90449261,7.89704672 5.2533985,5.38557894 2.14097983,1.56688302 C1.59847523,2.49931665 1.28631053,3.5830954 1.28631053,4.73885538 C1.28631053,6.92856096 2.40048135,8.861472 4.09468545,9.99225388 C3.05963244,9.96038527 2.08696316,9.67590565 1.23635433,9.20267528 C1.23487779,9.22900687 1.23487779,9.25546151 1.23487779,9.28314659 C1.23487779,12.340072 3.41067931,14.8917755 6.29817205,15.4704553 C5.76821802,15.6146638 5.21033281,15.6924281 4.63448306,15.6924281 C4.22794299,15.6924281 3.83247694,15.6521925 3.44808493,15.5786117 C4.25156759,18.0860189 6.58129817,19.9106506 9.34390042,19.9620833 C7.18347951,21.6548108 4.46246641,22.6635323 1.50557639,22.6635323 C0.99629389,22.6635323 0.494024944,22.6344937 0,22.5761704 C2.79324041,24.3661034 6.10954434,25.411 9.67415271,25.411" id="Fill-4" fill="#FFFFFE"></path>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:?&amp;body=<?php the_permalink(); ?>" class="email"> 
                            <svg width="38px" height="26px" viewBox="0 0 38 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path d="M18.7508125,16.471158 L2.94702946,0.667 L34.5549705,0.667 L18.7508125,16.471158 Z M0.001,0.667 L0.001,24.1939853 L11.7644926,12.4304926 L0.001,0.667 Z M18.7508125,19.4168125 L13.2375074,13.9035074 L1.47401473,25.667 L36.0272353,25.667 L24.2671177,13.9005073 L18.7508125,19.4168125 Z M37.50025,0.667 L25.7375074,12.4304926 L25.7367574,12.4308676 L37.500625,24.1939853 L37.50025,0.667 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        <?php endwhile; ?>
    </article>

    <div class="related">
        <?php
            $related = Extras\get_related_posts( get_the_ID(), 5 );

            if ( $related->have_posts() ): ?>
            
                <h3><?php _e('More Stories', 'voicesofwomen') ?></h3>
                <div class="swiper-container" id="relatedStories">
                        <div class="swiper-wrapper">
                            <?php while ( $related->have_posts() ): $related->the_post(); ?>
                                <div class="related__thumbnail swiper-slide">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                                        <div class="related__details">
                                            <h1><?php the_title(); ?></h1>
                                            <h2><?php the_field("location"); ?></h2>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="button-prev"></div>
                        <div class="button-next"></div>
                </div>
            <?php endif;
            wp_reset_postdata();
        ?>
    </div>
</div>