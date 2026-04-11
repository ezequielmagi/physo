<?php
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {

    wp_enqueue_style(
        'physo-style',
        get_stylesheet_uri(),
        [],
        PHYSO_VERSION
    );

    wp_enqueue_script(
        'physo-main',
        PHYSO_URI . '/assets/js/main.js',
        [],
        PHYSO_VERSION,
        true
    );

} );