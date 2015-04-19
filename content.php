<?php
/**
 * @package picapicaplaza
 */
?>

Space

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

	<div class="clearfix"></div>
Space
<?php endif; ?>

