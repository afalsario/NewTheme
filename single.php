<?php
/**
 * The template for displaying all single posts.
 *
 * @package picapicaplaza
 */

get_header(); ?>
	<div class="row">
	<div class="padding"></div>
		<div id="primary" class="large-8 medium-8 columns left">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="large-4 medium-4 columns right">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
