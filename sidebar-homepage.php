<?php 

if (function_exists('register_sidebar')) {
    register_sidebar( array(
        'name'          => __( 'Home Page Sidebar', 'picapicaplaza' ),
        'id'            => 'homepage-sidebar',
        'description'   => 'Widget area for slider',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}


 ?>
