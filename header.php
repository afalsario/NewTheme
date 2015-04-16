<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Display the title of the page followed but the name of the blog -->
    <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
    <!-- Link to your favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <!-- Set up your viewport to make sure your theme shows up correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Useful for search engines  -->
    <meta name="Revisit-After" content="7 Days">
    <meta name="robots" content="index,follow">
    <!-- Properly enqueued stylesheets and scripts will appear in this function -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!-- Foundations CDN -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/js/foundation.min.js">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/css/foundation.min.css">

    <?php wp_head(); ?>
</head>
<body>

    <div class="header">
        <div class="social-icons-header">
            <div class="social-icons"><a href="http://www.facebook.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/small-facebook.jpg" alt="Facebook Icon"></div>
            <div class="social-icons"><a href="http://www.youtube.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/small-youtube.jpg" alt="youtube Icon"></div>
            <div class="social-icons"><a href="http://www.twitter.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/small-twitter.jpg" alt="twitter Icon"></div>
            <div class="social-icons"><a href="http://www.yelp.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/small-yelp.jpg" alt="yelp Icon"></div>
        </div>

        <div class="banner"></div>
        <div class="logo">
            <!-- Notice the WordPress function that dynamically creates the path to your theme -->
            <a href='/picapicaplaza/' title="PicaPica Plaza"><img src="<?php echo get_template_directory_uri(); ?>/images/Pica-Pica-Logo.png" alt="PicaPica Plaza"></a>
        </div>
    </div>

    <div class="navigation-wrapper">
        <div class="wrap_1280">
            <div class="navigation">
                <!-- This is a build in function that determines if on a mobile device or not -->
                <?php if (!wp_is_mobile()) {?>
                    <div class="menu-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- This is where you dynamically call your main manu -->
                        <?php wp_nav_menu(array('theme_location' => 'top-menu')); ?>
                    </div>
                <?php } ?>
                <div class="toggle">
                    <a href="#" id="responsive-top-nav-button">MENU</a>
                </div>
                <!-- This is where you dynamically call your mobile menu -->
                <div class="responsive-top-navigation">
                    <?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

