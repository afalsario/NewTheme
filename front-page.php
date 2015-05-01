<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package picapicaplaza
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <br>
        <div class="row">
            <div class="slider large-8 medium-8 columns align-right">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-widget')): endif; ?>
            </div>
            <div class="hours large-4 medium-4 columns">
                <h1 class="text-center">Join Us!</h1>
                <h2>Open</h2>
                    <p>Tues - Sat 10am - 7pm</p>
                    <p>Sun 11am - 7pm</p>
                <h2>Location</h2>
                    <p>910 S.E. Military Drive</p>
                    <p>San Antonio, TX 78214</p>
                <h2>Contact</h2>
                    <p><a href="tel:2109277422">210.927.7422</a></p>
                    <p><a href="mailto:info@picapicaplaza.com">info@picapicaplaza.com</a></p>
            </div>
        </div>
        <br>
        <?php if($post->post_content !== "") :?>

        <div id="event">
            <div class="row">
                <?php if ( has_post_thumbnail() ) { ?>

                    <div class="event-photo-box small-12 medium-4 large-4 columns">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="small-12 medium-4 large-4 columns feature-content">
                        <?php the_content(); ?>
                    </div>

                    <div class="small-12 medium-4 large-4 columns"><a href="#" class="small button round feature-button">Round Button</a></div>

                <?php } ?>
            </div>
        </div>

        <?php endif; ?>

        <div class="clearfix"></div>

        <div class="row">
            <h1 class="section-divider">Eat</h1>
            <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
            <a href="#" class="section-button small button round">Explore</a>
            <img class="section-image" src="<?php echo get_template_directory_uri(); ?>/images/photo-box.jpg">
        </div>

        <div class="row">
            <h1 class="section-divider">Shop</h1>
            <p class="section-text">A unique shopping experience. Come support local family businesses.</p>
            <a href="#" class="section-button small button round">Explore</a>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_bI1LIjOMdE" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="parallax"><p class="section-text">Enjoy live entertainment with friends and family.</p></div>

        <div class="row">
            <h1 class="section-divider">Activities</h1>
            <img class="section-image large-12 columns" src="<?php echo get_template_directory_uri(); ?>/images/flipz.png">
            <div  class="large-5 medium-5 small-12 columns">
                <img class="activities-image" src="<?php echo get_template_directory_uri(); ?>/images/picapica-clowns.jpg">
            </div>
            <div class="large-7 medium-7 small-12 columns">
                <div class="calendar">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('calendar-widget')): endif; ?>
                </div>
                <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                <a href="#" class="section-button small button round">Explore</a>
            </div>
        </div>

        <div class="row">
            <h1 class="section-divider">Lease</h1>
            <p class="section-text">Start a business? Expand a business?<br>
PicaPica Plaza has the flexible spaces and terms to help you succeed.<br>
Call 210-927-PICA for more information!</p>
                <a href="#" class="section-button small button round">Contact</a>
        </div>

        <div class="row">
            <h1 class="section-divider">Celebrate</h1>
            <p class="section-text">Looking for that special place to host your next event?</p>
            <a href="#" class="section-button small button round">Inquire</a>
            <img class="section-image" src="<?php echo get_template_directory_uri(); ?>/images/picapica-event.jpg">
        </div>

        <div class="row">
            <h1 class="hours text-center">Get Social</h1>
            <div class="big-social-icons social-icons-header">
                    <a href="http://www.facebook.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/big-facebook.jpg" alt="Facebook Icon"></a>
                    <a href="http://www.youtube.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/big-youtube.jpg" alt="youtube Icon"></a>
                    <a href="http://www.twitter.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/big-twitter.jpg" alt="twitter Icon"></a>
                    <a href="http://www.yelp.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/big-yelp.jpg" alt="yelp Icon"></a>
            </div>
        </div>

        <div class="padding"></div>

    </main><!-- #main -->
</div><!-- #primary -->
<div id="tagline"><h2 class="text-center">a family place to eat, shop, play, & celebrate</h2></div>
<?php get_footer(); ?>




