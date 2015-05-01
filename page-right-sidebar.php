<?php
/*
Template Name: Right Sidebar
*/
?>
<?php get_header(); ?>
<div class="row">
    <div class="padding"></div>
    <div id="primary" class="content-area large-8 columns">
        <main id="main" class="site-main" role="main">
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <div class="right large-4 columns">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
