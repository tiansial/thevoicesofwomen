<div class="container">
    <article class="article-content">
        <header><h1><?php the_title(); ?></h1></header>
        <div class="article-body">
            <?php the_content(); ?>
        </div>
        <div class="article-share">
            <h6>Share this:</h6>
            <ul>
                <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="facebook">
                        Facebook
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank" class="twitter">
                        Twitter
                    </a>
                </li>
                <li>
                    <a href="mailto:?&amp;body=<?php the_permalink(); ?>" class="email"> 
                        Email
                    </a>
                </li>
            </ul>
        </div>
    </article>
</div>