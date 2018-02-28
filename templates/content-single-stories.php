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
            <div class="day-n-night">
                <svg id="icon-night" viewBox="-585 410.9 20 20" width="25px" height="25px">
                    <g>
                        <path d="M-572.8,430.9c-5.4,0-9.8-4.5-9.8-10s4.4-10,9.8-10c1.7,0,3.4,0.5,4.9,1.4l1.5,0.9l-1.5,0.9c-2.4,1.4-3.9,4.1-3.9,6.9
                            s1.5,5.5,3.9,6.9l1.5,0.9l-1.5,0.9C-569.4,430.4-571.1,430.9-572.8,430.9z M-572.8,412.9c-4.3,0-7.8,3.6-7.8,8c0,4.4,3.5,8,7.8,8
                            c0.8,0,1.7-0.1,2.4-0.4c-2.2-1.9-3.4-4.7-3.4-7.6c0-2.9,1.3-5.7,3.4-7.6C-571.1,413-572,412.9-572.8,412.9z"></path>
                    </g>
                </svg>

                <svg id="icon-day" viewBox="-585 410.9 20 20" width="25px" height="25px">
                    <g>
                        <path fill="#17171B" d="M-568.9,416.2l1.7-1.7l-1.4-1.4l-1.7,1.7C-569.8,415.2-569.3,415.7-568.9,416.2z"></path>
                        <path fill="#17171B" d="M-580.9,425.3l-1.9,1.9l1.4,1.4l2-2C-580,426.3-580.4,425.8-580.9,425.3z"></path>
                    </g>
                    <g>
                        <path fill="#FFFFFF" d="M-575,425.6c2.8,0,5-2.2,5-5c0-2.8-2.2-5-5-5s-5,2.2-5,5C-580,423.4-577.8,425.6-575,425.6"></path>
                    </g>
                    <g>
                        <path fill="#17171B" d="M-575,426.6c-3.3,0-6-2.7-6-6c0-3.3,2.7-6,6-6c3.3,0,6,2.7,6,6C-569,424-571.7,426.6-575,426.6z
                            M-575,416.6c-2.2,0-4,1.8-4,4s1.8,4,4,4s4-1.8,4-4S-572.8,416.6-575,416.6z"></path>
                    </g>
                    <g>
                        <path fill="#17171B" d="M-575,428.1c-0.3,0-0.6,0-0.9-0.1v2.8h1.9v-2.8C-574.4,428.1-574.7,428.1-575,428.1z"></path>
                        <path fill="#17171B" d="M-575,413.1c0.3,0,0.6,0,0.9,0.1v-2.3h-1.9v2.3C-575.6,413.2-575.3,413.1-575,413.1z"></path>
                    </g>
                    <g>
                        <path fill="#17171B" d="M-579.7,414.8l-1.7-1.7l-1.4,1.4l1.7,1.7C-580.7,415.7-580.2,415.2-579.7,414.8z"></path>
                        <path fill="#17171B" d="M-569.1,425.3c-0.4,0.5-0.9,1-1.4,1.3l2,2l1.4-1.4L-569.1,425.3z"></path>
                    </g>
                    <g>
                        <path fill="#17171B" d="M-582.5,420.6c0-0.2,0-0.5,0-0.7h-2.5v1.9h2.6C-582.5,421.4-582.5,421.1-582.5,420.6z"></path>
                        <path fill="#17171B" d="M-567.5,419.9c0,0.2,0,0.5,0,0.7c0,0.4,0,0.8-0.1,1.2h2.6v-1.9H-567.5z"></path>
                    </g>
                </svg>
            </div>
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