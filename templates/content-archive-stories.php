<div class="wrap archive-stories">
    <?php while (have_posts()) : the_post(); ?>
        <div class="card">
            <figure>
                <?php the_post_thumbnail();?>
            </figure>
            <div class="content">
                <h2><?php the_title(); ?></h2>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>