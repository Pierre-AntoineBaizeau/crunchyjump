<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function crunchy_register_assets() {
    
    // Déclarer jQuery
    wp_enqueue_script( 
        'jquery', 
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
        false, 
        '3.3.1', 
        true 
    );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'crunchy', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'crunchy',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'crunchy', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'crunchy_register_assets' );

register_nav_menus( array(
	'main' => 'Menu Principal',
    'footer' => 'Bas de page',
    'equipe' => 'equipe',
    'apropos' => 'A propos'
) );