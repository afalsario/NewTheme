<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package picapicaplaza
 */
?>

	</div><!-- #content -->

    <div id="footer-info"></div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- <div class="row site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'picapicaplaza' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'picapicaplaza' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'picapicaplaza' ), 'picapicaplaza', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  $(document).foundation();
</script>

</body>
</html>
