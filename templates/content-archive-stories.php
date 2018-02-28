<h1 class="page-title">Stories</h1>
<div class="container">
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card ">
                <figure>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                    </a>
                </figure>
                <div class="content">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <h3><?php the_field('location') ?></h3>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</div>