<div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
        <figure class="slideUp">
            <?php the_post_thumbnail('full'); ?>  
        </figure>
    <article class="article-content article-body">
       <?php the_content(); ?>
    </article>
</div>