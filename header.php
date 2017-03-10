<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eros Code</title>
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/src/style.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/src/swiper.min.css" />

        <?php wp_enqueue_script("jquery"); ?>

        <?php wp_head(); ?>
    </head>
    <body>
        <!-- Large Top Banner -->
        <div class="subscribe-banner">
            <div class="wrapper">
                <div class="subscribe-deal">
                    <h1>Get 500+ free stock images</h1>
                    <p>plus weekly updates on the latest popular articles</p>
                </div>
                <div class="subscribe-email">
                    <input type="email" name="email" placeholder="Email Address"/>
                </div>
                <div class="subscribe-button">
                    <button type="submit">Subscribe</button>
                    <a href="#" class="remove-banner">No, thanks!</a>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="top">
            <div class="wrapper">
                <!-- Logo Area -->
                <div class="logo-area">
                    <a href="<?php bloginfo( 'wpurl' );?>">
                        <img src="<?php bloginfo('template_directory');?>/images/logo.svg" alt="EROS CODE, Official World Skills UK Training for Web Dev" />
                    </a>
                </div>
                <!-- / Logo Area -->
            </div>
        </header>
        <!-- / Header -->

        <!-- Navigation -->
        <nav>
            <div class="wrapper">
                <ul class="main-navigation">
                    <li>About</li>
                    <li>Categories</li>
                    <li>Tags</li>
                </ul>

                <ul class="main-navigation-side">
                    <li>
                        <input type="text" name="search-bar" placeholder="Search"/>
                    </li>
                    <li>
                        <a href="#" class='btn-primary'>Sign In / Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- / Navigation -->