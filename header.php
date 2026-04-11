<?php defined( 'ABSPATH' ) || exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site" id="site">

<header class="site-header" id="site-header">
  <div class="physo-container">
    <div class="site-header__inner">

      <div class="site-logo">
        <?php if ( has_custom_logo() ) :
          the_custom_logo();
        else : ?>
          <a href="<?php echo esc_url( home_url('/') ); ?>">
            <span>physo</span>
          </a>
        <?php endif; ?>
      </div>

      <nav class="nav-primary" id="nav-primary">
        <?php wp_nav_menu( [
          'theme_location' => 'primary',
          'menu_class'     => 'menu',
          'container'      => false,
          'fallback_cb'    => false,
        ] ); ?>
      </nav>

      <button class="nav-toggle" id="nav-toggle" aria-expanded="false">☰</button>

    </div>
  </div>
</header>

<div class="site-content">