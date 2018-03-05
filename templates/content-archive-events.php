<div class="container">
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="article-content article-body">
    <?php the_content(); ?>
  </div>
  <div class="events-list">
    <?php
      // The Query
      $the_query = new WP_Query(array(
          'post_type'         => 'events',
          'order'             => 'ASC',
          'orderby'           => 'meta_value',
          'meta_key'          => 'day',
          'meta_type'         => 'DATETIME'
      ));

      // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
          $the_query->the_post();?>
            <div class="event" data-url="<?php the_permalink() ?>">
              <div class="event-click"></div>
              <div class="event-content">
                <h2><?php the_title(); ?></h2>
                <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                <ul>
                  <?php if( get_field('location') ): ?>
                    <li>
                      <span><?php _e('Location', 'thevoicesofwomen') ?>:</span> 
                      <?php the_field('location'); ?>
                    </li>
                  <?php endif; ?>
                  
                  <?php if( get_field('date') ): ?>
                    <li>
                      <span><?php _e('Date', 'thevoicesofwomen') ?>:</span> 
                      <?php the_field('date'); ?>
                    </li>
                  <?php endif; ?>
                  
                  <?php if( get_field('price') ): ?>
                    <li>
                      <span><?php _e('Price', 'thevoicesofwomen') ?>:</span> 
                      <?php the_field('price'); ?>
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
              <div class="event-photo">
                <?php the_post_thumbnail('small'); ?>
                <a href="<?php the_permalink(); ?>" class="icon-circle-more">
                  <svg viewBox="0 0 41 23" class="icon-svg">
                    <title class="hide">View more</title>
                    <path fill="#ffffff" d="M19.3 18.2L1.7 0.3 0.1 1.9l20.4 20.8L40.9 1.9l-1.7-1.7L21.7 18.2 20 18.7 19.3 18.2z"></path>
                  </svg>
                </a>
              </div>
            </div>
          <?php }
        /* Restore original Post Data */
        wp_reset_postdata();
      } else {
        // no posts found
      }
    ?>
  </div>
</div>