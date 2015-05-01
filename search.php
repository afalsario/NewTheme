<?php
/**
 * The template for displaying search results pages.
 *
 * @package picapicaplaza
 */

get_header(); ?>
<div class="row">
	<div class="padding"></div>
		<section id="primary" class="large-8 medium-8 columns left">
			<main id="main" class="site-main" role="main">
				<div class="news-box">
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'picapicaplaza' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'content', 'search' );
							?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>

				</div>
			</main><!-- #main -->
		</section><!-- #primary -->
	<div class="large-4 medium-4 columns right">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
