<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>
<header>

    <nav>
        <a href="http://localhost/crunchyjumpBap5/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
            </a>
         <?php 
        wp_nav_menu( 
            array( 
                'theme_location' => 'main', 
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'crunchy_header_menu', // ma classe personnalisée 
            ) 
        );
        ?>
    </nav>
  
</header>



<body <?php body_class(); ?>>



<?php wp_body_open(); ?>