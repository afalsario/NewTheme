<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Display the title of the page followed but the name of the blog -->
    <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
    <!-- Link to your favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <!-- Set up your viewport to make sure your theme shows up correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Useful for search engines  -->
    <meta name="Revisit-After" content="7 Days">
    <meta name="robots" content="index,follow">
    <!-- Properly enqueued stylesheets and scripts will appear in this function -->
    <?php wp_head(); ?>
</head>
<body>

    <div class="header">
        <div class="wrap_1280">
            <div class="logo">
                <a href='/picapicaplaza/index.php' title="PicaPicaPlaza"
            </div>
        </div>
    </div>

</body>
</html>
