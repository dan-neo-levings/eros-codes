<?php

    ini_set( 'upload_max_filesize' , '64M' );
    ini_set( 'post_max_size', '64M');
    ini_set( 'max_execution_time', '300' );


    if ( function_exists( 'add_theme_support' ) ) { 
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

        // additional image sizes
        // delete the next line if you do not need additional image sizes
        add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
    }

    add_action( 'wp_enqueue_scripts', 'custom_script' );

    function custom_script() {
        wp_enqueue_script('jquery');
        wp_enqueue_script(
            'swiper', // name your script so that you can attach other scripts and de-register, etc.
            get_template_directory_uri() . '/js/swiper.jquery.js', // this is the location of your script file
            array('jquery') // this array lists the scripts upon which your script depends
        );
        wp_enqueue_script(
            'custom_script', // name your script so that you can attach other scripts and de-register, etc.
            get_template_directory_uri() . '/js/custom-script.js', // this is the location of your script file
            array('jquery') // this array lists the scripts upon which your script depends
        );
    }