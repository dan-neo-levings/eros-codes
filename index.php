<?php get_header() ?>

<main class="wrapper">
    <?php get_sidebar(); ?>

    <section class="articles">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                get_template_part( 'content', get_post_format() );

            endwhile; endif; 
        ?>
    </section>

    <a href="#" class="read-more">Load More</a>
</main>

<?php get_footer(); ?>