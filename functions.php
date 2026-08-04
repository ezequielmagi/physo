<?php
defined( 'ABSPATH' ) || exit;

define( 'PHYSO_VERSION', '1.6.0' );
define( 'PHYSO_DIR',     get_template_directory() );
define( 'PHYSO_URI',     get_template_directory_uri() );

// Datos de contacto. Están acá porque los usan el footer y el mapa de la
// home, y si difieren el pin cae en otro lado.
define( 'PHYSO_EMAIL',     'hola@physo.pe' );
define( 'PHYSO_TELEFONO',  '+51 942 147 901' );
define( 'PHYSO_DIRECCION', 'Jirón Cruz del Sur 140 Int. 308 Edificio Time, Santiago de Surco, Lima' );

require_once PHYSO_DIR . '/inc/setup.php';
require_once PHYSO_DIR . '/inc/enqueue.php';
require_once PHYSO_DIR . '/inc/menus.php';