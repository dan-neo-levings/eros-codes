<?php

    $query_images_args = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => 5,
    );

    $query_images = new WP_Query( $query_images_args );

    $images = array();
    foreach ( $query_images->posts as $image ) {
        $images[] = wp_get_attachment_url( $image->ID );
    }

?>

<!-- Recent Images -->
        <section class="recent-images">

            <?php foreach($images as $image) : ?>
            <figure class="recent-image">
                <img src="<?= $image ?>"/>
            </figure>
            <?php endforeach; ?>
        </section>
        <!-- / Recent Images -->

        <footer>
            <div class="wrapper">
                <section class="footer-info">
                    <h5>What is Eros Lives?</h5>
                    <p>Proin sit amet orci sit amet mauris mollis facilisis. In accumsan venenatis quam. Suspendisse potenti. Vestibulum vel libero non metus congue tincidunt. Proin magna velit, mollis at sagittis sit amet, aliquet sit amet risus. Sed tincidunt, purus id accumsan faucibus, orci mauris fermentum mauris, at dapibus lorem odio porttitor lorem. Donec non dictum neque, ut ultrices mauris.</p>
                    <a href="#">Find out More</a>
                </section>
                <section class="footer-facebook">
                    <h5>Find us on Facebook</h5>
                </section>
                <section class="copyright">
                    &copy; 2017 Dan Levings
                </section>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>