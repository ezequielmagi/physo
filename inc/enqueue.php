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

    /**
 * Registrar fuentes del tema en el selector de tipografía de Elementor.
 */
add_filter( 'elementor/fonts/additional_fonts', function( $fonts ) {
	$fonts['TT Commons'] = 'system';
	$fonts['Unbounded']  = 'system';
	return $fonts;
} );

} );