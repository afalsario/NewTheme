<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package picapicaplaza
 */

get_header(); ?>

	<div class="row">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="section-divider">Archives</h1>
				<?php
					the_archive_title( '<h1 class="entry-title large-8 medium-8 columns left">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div id="primary" class="large-8 medium-8 columns left">
				<main id="main" class="site-main" role="main">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>


				</main><!-- #main -->
			</div><!-- #primary -->
		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		<div class="large-4 medium-4 columns right">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
