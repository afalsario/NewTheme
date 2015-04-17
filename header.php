<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package picapicaplaza
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	 <!-- Useful for search engines  -->
	<meta name="Revisit-After" content="7 Days">
	<meta name="robots" content="index,follow">
	<!-- Link to your favicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'picapicaplaza' ); ?></a>



	<header id="masthead" class="site-header" role="banner">

<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
    <div class="social-icons-header">
        <div class="social-icons"><a href="http://www.facebook.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/small-facebook.jpg" alt="Facebook Icon"></div>
        <div class="social-icons"><a href="http://www.youtube.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/small-youtube.jpg" alt="youtube Icon"></div>
        <div class="social-icons"><a href="http://www.twitter.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/small-twitter.jpg" alt="twitter Icon"></div>
        <div class="social-icons"><a href="http://www.yelp.com" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/images/small-yelp.jpg" alt="yelp Icon"></div>
    </div>
      <h1><a href="#"></a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
        <li class="active">
            <div class="menu-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- This is where you dynamically call your main manu -->
                <?php wp_nav_menu(array('theme_location' => 'top-menu')); ?>
            </div>
        </li>
    </ul>

    <!-- Left Nav Section -->
  </section>
</nav>
        <div class="banner"></div>
        <div class="logo">
            <!-- Notice the WordPress function that dynamically creates the path to your theme -->
            <a href='/picapicaplaza/' title="PicaPica Plaza"><img src="<?php echo get_template_directory_uri(); ?>/images/Pica-Pica-Logo.png" alt="PicaPica Plaza"></a>
        </div>
    <!--    <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        </div> -->
        <!-- .site-branding -->



	</header><!-- #masthead -->

	<div id="content" class="site-content">
