<?php get_header() ?>
        
<section class="homepage">
            <div class="wrapper">
                <!-- Slideshow -->
                <div class="homepage-slideshow">
                    <?php
                    $args = array( 'posts_per_page' => 5, 'category_name' => 'featured' );
                    $featured_posts = get_posts( $args );
                    foreach ( $featured_posts as $post ) : setup_postdata( $post ); ?>

                    <figure class="slide">
                        <img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php echo the_title(); ?>" class="fit-parent" />
                        <figcaption class="slide-info recent">
                            <div class="slide-info_type">Featured</div>
                            <h1 class="slide-info_heading"><?php echo the_title(); ?></h1>
                            <span class="slide-info_comments"><i class="fa fa-comments"></i><?php echo comments_number(); ?></span>
                            <span class="slide-info_likes"><i class="fa fa-heart"></i>5 devotes</span>
                        </figcaption>
                    </figure>

                    <?php endforeach; ?>

                    <script>
                        document.querySelector('.slide').className += " active";
                    </script>

                </div>
                <!-- / Slideshow -->

                <!-- Featured Content -->
                <div class="homepage-featured">
                    <div class="hr-title" data-title="Featured Scribbles"></div>
                    <?php  
                    foreach ( $featured_posts as $post ) : setup_postdata( $post ); ?>

                    <div class="featured-scribble block-post">
                        <figure class="featured-img-container">
                            <img class="featured-img" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" />
                        </figure>
                        <h2 class="featured-title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                        <span class="featured-subtitle"><?php echo get_the_date(); ?></span>
                        <span class="featured-comments"> <i class="fa fa-comments"></i><?php echo comments_number(); ?></span>
                        <span class="featured-likes"><i class="fa fa-heart"></i>10</span>
                        <span class="featured-tags"><?php echo the_tags(); ?></span>
                    </div>

                    <?php endforeach; ?>
                </div>
                <!-- / Featured Content -->

                <!-- Popular Content -->
                <div class="homepage-popular">
                    <div class="hr-title" data-title="Popular Scribbles"></div>
                    
                    <?php
                    $args = array( 'posts_per_page' => 5, 'category' => 29 );

                    $popular_posts = get_posts( $args );
                    foreach ( $popular_posts as $post ) : setup_postdata( $post ); ?>

                    <div class="popular-scribble block-post">
                        <figure class="popular-img-container">
                            <img class="popular-img" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" />
                        </figure>
                        <h2 class="popular-title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                        <span class="popular-subtitle"><?php echo get_the_date(); ?></span>
                        <span class="popular-comments"> <i class="fa fa-comments"></i><?php echo comments_number(); ?></span>
                        <span class="popular-likes"><i class="fa fa-heart"></i>10</span>
                        <span class="popular-tags"><?php echo the_tags(); ?></span>
                    </div>

                    <?php endforeach; ?>

                    
                </div>
                <!-- / Popular Content -->
            </div>
        </section>

<main class="wrapper">
    <?php get_sidebar(); ?>
    <section class="articles">
        <?php
            $args = array( 'posts_per_page' => 5 );

            $all_posts = get_posts( $args );
            foreach ( $all_posts as $post ) : setup_postdata( $post ); 
            
                get_template_part( 'content', get_post_format() );

            endforeach;
        ?>
        <a href="#" class="read-more load-more">Load More Articles</a>
    </section>

    
</main>

<?php get_footer(); ?>