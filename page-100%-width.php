<?php
/*
Template Name: 100% Width
 */
?>

<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

            <?php the_title( '<h1 class="fullwidth">', '</h1>' ); ?>


        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->


    <?php endwhile; // end of the loop. ?>


    <footer class="entry-footer">
        <?php edit_post_link( __( 'Edit', 'picapicaplaza' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->

<?php get_footer(); ?>
