<?php defined( 'ABSPATH' ) || exit; ?>
</div><!-- .site-content -->

<footer class="site-footer">
  <div class="physo-container">
    <div class="site-footer__grid">

      <div class="site-footer__col">
        <div class="site-footer__logo">physo</div>
        <p class="site-footer__desc">
          Centro de acompañamiento integral en movimiento, salud y bienestar.
        </p>
        <div class="physo-social">
          <a href="#" aria-label="Facebook">f</a>
          <a href="#" aria-label="Instagram">ig</a>
        </div>
      </div>

      <div class="site-footer__col">
        <h4 class="site-footer__heading">Navegación</h4>
        <nav class="site-footer__nav">
          <?php wp_nav_menu( [
            'theme_location' => 'footer',
            'container'      => false,
            'fallback_cb'    => false,
          ] ); ?>
        </nav>
      </div>

      <div class="site-footer__col">
        <h4 class="site-footer__heading">Contacto</h4>
        <div class="site-footer__contact">
          <p>contacto@physo.com</p>
          <p>+54 9 11 0000-0000</p>
        </div>
      </div>

    </div>

    <div class="site-footer__bottom">
      <span>&copy; <?php echo date('Y'); ?> Physo. Todos los derechos reservados.</span>
    </div>
  </div>
</footer>

</div><!-- .site -->
<?php wp_footer(); ?>
</body>
</html>