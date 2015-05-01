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

    <div id="footer-info">
    	<div class="row">
	    	<div class="widget large-4 medium-4 small-12 columns">
	    		<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/Pica-Pica-Logo.png" alt="PicaPica Plaza">
	    		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left')): endif; ?>
	    	</div>
	    	<div class="widget large-4 medium-4 small-12 columns">
	    		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-center')): endif; ?>
	    	</div>
	    	<div class="widget large-4 medium-4 small-12 columns">
	    		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right')): endif; ?>
	    	</div>
    	</div>
    </div>

	<footer id="colophon" class="site-footer" role="contentinfo">
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/fastclick.js"></script>
<script src="/js/foundation.min.js"></script>
<script src="/js/foundation/foundation.topbar.js"></script>
<?php wp_footer(); ?>
<script>
  $(document).foundation();
</script>
</body>
</html>
