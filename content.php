<?php
/**
 * @package picapicaplaza
 */
?>

Space

<?php if($post->post_content !== "") :?>
	<div class="row">
		<?php the_content();?>
	</div>

	<?php	if ( has_post_thumbnail() ) { ?>

	<div id="event">
		<div class="row">
			<div id="event-photo-box">
				<?php the_post_thumbnail(); } ?>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>

<?php endif; ?>

