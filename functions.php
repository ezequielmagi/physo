<?php
defined( 'ABSPATH' ) || exit;

define( 'PHYSO_VERSION', '1.0.0' );
define( 'PHYSO_DIR',     get_template_directory() );
define( 'PHYSO_URI',     get_template_directory_uri() );

require_once PHYSO_DIR . '/inc/setup.php';
require_once PHYSO_DIR . '/inc/enqueue.php';
require_once PHYSO_DIR . '/inc/menus.php';