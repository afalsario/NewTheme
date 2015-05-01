<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package picapicaplaza
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="text-center">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'picapicaplaza' ); ?></h1>
				</header><!-- .page-header -->

				<p>It looks like nothing was found at this location. Maybe try one of the links in the navigation bar or click the rooster to go home.</p>
				<a href="http://localhost:8888/picapicaplaza/"><img src="<?php echo get_template_directory_uri(); ?>/images/leasing-bird.JPG"></a>
				<div class="padding"></div>
			</section><!-- .error-404 -->
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>

