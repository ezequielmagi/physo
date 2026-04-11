<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', function() {
    register_nav_menus( array(
        'primary' => 'Menú principal',
        'footer'  => 'Menú del footer',
    ) );
} );