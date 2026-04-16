<?php defined( 'ABSPATH' ) || exit; ?>
</div><!-- .site-content -->

<footer class="site-footer">
  <div class="physo-container">
    <div class="site-footer__grid">

      <div class="site-footer__col">
        <div class="site-footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="Physo Logo">
        </div>
        <div class="site-footer__desc-container">
          <p class="site-footer__desc">
            Centro de acompañamiento integral en movimiento, salud y bienestar.
          </p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png" alt="Flecha hacia abajo">
        </div>
        <div class="physo-social">
          <a href="#" aria-label="Facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt=""></a>
          <a href="#" aria-label="Instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt=""></a>
        </div>
      </div>

      <div class="site-footer__col">
        <h4 class="site-footer__heading">Navegación</h4>
        <ul class="site-footer__nav">
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">Movimiento Adaptado</a></li>
          <li><a href="<?php echo esc_url( home_url('/nosotros') ); ?>">Readaptación funcional</a></li>
          <li><a href="<?php echo esc_url( home_url('/servicios') ); ?>">Yoga nidra</a></li>
          <li><a href="<?php echo esc_url( home_url('/contacto') ); ?>">Metodología</a></li>
          <li><a href="<?php echo esc_url( home_url('/contacto') ); ?>">Sobre Nosotros</a></li>
          <li><a href="<?php echo esc_url( home_url('/contacto') ); ?>">Blog</a></li>
        </ul>
      </div>

      <div class="site-footer__col">
        <h4 class="site-footer__heading">Contacto</h4>
        <div class="site-footer__contact">
          <p>contacto@physo.com</p>
          <p>(414) 687 - 5892</p>
          <p>Jirón Cruz del Sur #140,<br>Int. 308 (Edificio Time) - Surco</p>
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