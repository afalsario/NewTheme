<?php
/**
 * @package picapicaplaza
 */
?>
<br>
<div class="row">
	<div class="slider large-8 columns">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-sidebar')): endif; ?>
	</div>
	<div class="hours large-4 columns">
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
	<h1 class="scroll-pattern">Eat</h1>
</div>

