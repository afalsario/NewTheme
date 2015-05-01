<?php
/**
 * picapicaplaza functions and definitions
 *
 * @package picapicaplaza
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'picapicaplaza_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function picapicaplaza_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on picapicaplaza, use a find and replace
	 * to change 'picapicaplaza' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'picapicaplaza', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'top-menu' => __( 'Top Menu', 'picapicaplaza' ),
		'primary-menu' => __( 'Primary Menu', 'picapicaplaza' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'picapicaplaza_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'post-thumbnails' ); 
}
endif; // picapicaplaza_setup
add_action( 'after_setup_theme', 'picapicaplaza_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function picapicaplaza_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'picapicaplaza' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div class="sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'picapicaplaza' ),
		'id'            => 'blog-sidebar',
		'description'   => '',
		'before_widget' => '<div class="sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page Slider Widget', 'picapicaplaza' ),
		'id'            => 'homepage-widget',
		'description'   => 'Widget area for slider',
		'before_widget' => '<aside id="" class="widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page Calendar Widget', 'picapicaplaza' ),
		'id'            => 'calendar-widget',
		'description'   => 'Widget area for calendar',
		'before_widget' => '<aside id="" class="widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Left', 'picapicaplaza' ),
		'id'            => 'footer-left',
		'description'   => 'Left widget area for footer',
		'before_widget' => '<div class="footer-left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Center', 'picapicaplaza' ),
		'id'            => 'footer-center',
		'description'   => 'Center widget area for footer',
		'before_widget' => '<div class="footer-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Right', 'picapicaplaza' ),
		'id'            => 'footer-right',
		'description'   => 'Right widget area for footer',
		'before_widget' => '<div class="footer-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'picapicaplaza_widgets_init' );

add_filter('widget_text', 'do_shortcode');
/**
 * Enqueue scripts and styles.
 */
function picapicaplaza_scripts() {
	wp_enqueue_style( 'foundation_css', '//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/css/foundation.min.css' );

	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

	wp_enqueue_style( 'picapicaplaza-style', get_stylesheet_uri() );

	wp_enqueue_style('picapica-style', get_template_directory_uri() . '/picapica.css');

	wp_enqueue_script( 'picapicaplaza-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'picapicaplaza-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'picapicaplaza_scripts' );

function register_my_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(),'2.1.0',false);
  wp_enqueue_script('modernizer',get_template_directory_uri() . '/js/vendor/modernizr.js',array(),'2.7.1', false);
  wp_enqueue_script('foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'),'5.1.1',true);
  wp_enqueue_script('top-bar', get_template_directory_uri() . '/js/foundation/foundation.topbar.js',array(),'5.5.1', false);

  wp_enqueue_script(array('jquery','modernizer','foundation'));
}

add_action('wp_print_scripts','register_my_scripts');

// Google Fonts

function load_google_fonts() {
        wp_register_style('googleFontsDeliusSwashCaps','http://fonts.googleapis.com/css?family=Delius+Swash+Caps');
        wp_enqueue_style( 'googleFontsDeliusSwashCaps');

        wp_register_style('googleFontsMontserrat','http://fonts.googleapis.com/css?family=Montserrat');
        wp_enqueue_style( 'googleFontsMontserrat');

}
add_action('wp_print_styles', 'load_google_fonts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
