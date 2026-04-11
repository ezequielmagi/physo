<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ] );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    // Tamaños de imagen para Physo
    add_image_size( 'physo-hero',    1440, 700, true );
    add_image_size( 'physo-card',    600,  400, true );
    add_image_size( 'physo-thumb',   400,  400, true );
    add_image_size( 'physo-galeria', 800,  600, true );
} );