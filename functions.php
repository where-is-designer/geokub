<?php
    add_action('wp_enqueue_scripts', 'geokrug_scripts');

    function geokrug_scripts() {
        wp_enqueue_style( 'geokrug-style', get_stylesheet_uri() );
    };

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
?>