
    <article>
        <figure class="teardrop-image">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="image" />
        </figure>

        <header class="article-header">
            <h1><?php the_title(); ?></h1>
            <span class="date"><?php the_date(); ?></span>
            <span class="comments"><i class="fa fa-comments"></i><?php comments_number(); ?></span>
            <span class="likes"><i class="fa fa-heart"></i>10</span>
        </header>

        <?php the_content(); ?>
    </article>

    