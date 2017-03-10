<?php get_header() ?>

<main class="wrapper">
    <?php get_sidebar(); ?>

    <section class="articles">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                get_template_part( 'content-single', get_post_format() );

            endwhile; endif; 
        ?>

        
    </section>
</main>

<?php get_footer(); ?>