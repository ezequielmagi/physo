<?php defined( 'ABSPATH' ) || exit; ?>
</div><!-- .site-content -->

<footer class="site-footer">
  <div class="physo-container">
    <div class="site-footer__grid">

      <div class="site-footer__col site-footer__col--marca">
        <div class="site-footer__logo">
          <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/logo-footer.png' ); ?>" alt="Physo">
        </div>
        <p class="site-footer__desc">
          Una boutique donde el movimiento vuelve a tener sentido.
        </p>
        <div class="physo-social">
          <a href="#" aria-label="Physo en Facebook">
            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M24 12a12 12 0 1 0-13.88 11.85v-8.38H7.08V12h3.04V9.36c0-3 1.79-4.67 4.53-4.67 1.31 0 2.68.24 2.68.24v2.95h-1.51c-1.49 0-1.95.92-1.95 1.87V12h3.32l-.53 3.47h-2.79v8.38A12 12 0 0 0 24 12"/></svg>
          </a>
          <a href="#" aria-label="Physo en Instagram">
            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.69 4.92 4.92.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85C2.38 3.92 3.89 2.38 7.15 2.23 8.42 2.17 8.8 2.16 12 2.16M12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.69.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.2 4.36 2.62 6.78 6.98 6.98C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c4.35-.2 6.78-2.62 6.98-6.98.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.2-4.35-2.62-6.78-6.98-6.98C15.67.01 15.26 0 12 0m0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32M12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8m6.41-11.85a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88"/></svg>
          </a>
        </div>
      </div>

      <div class="site-footer__col">
        <h4 class="site-footer__heading">Navegación</h4>
        <ul class="site-footer__nav">
          <li><a href="<?php echo esc_url( home_url('/movimiento-adaptado') ); ?>">Movimiento Adaptado</a></li>
          <li><a href="<?php echo esc_url( home_url('/movimiento-evolutivo') ); ?>">Movimiento Evolutivo</a></li>
          <li><a href="<?php echo esc_url( home_url('/presencia') ); ?>">Presencia</a></li>
          <li><a href="<?php echo esc_url( home_url('/metodologia') ); ?>">Metodología</a></li>
          <li><a href="<?php echo esc_url( home_url('/sobre-nosotros') ); ?>">Sobre Nosotros</a></li>
          <li><a href="<?php echo esc_url( home_url('/blog') ); ?>">Blog</a></li>
        </ul>
      </div>

      <div class="site-footer__col">
        <h4 class="site-footer__heading">Contacto</h4>
        <ul class="site-footer__contacto">
          <li>
            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="none" stroke="currentColor" stroke-width="1.8" d="M3 6.5h18v11H3zM3 7l9 6 9-6"/></svg>
            <a href="mailto:<?php echo esc_attr( PHYSO_EMAIL ); ?>"><?php echo esc_html( PHYSO_EMAIL ); ?></a>
          </li>
          <li>
            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M6 3h3l2 5-2.5 1.5a12 12 0 0 0 6 6L16 13l5 2v3a2 2 0 0 1-2.2 2A17 17 0 0 1 4 5.2 2 2 0 0 1 6 3"/></svg>
            <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', PHYSO_TELEFONO ) ); ?>"><?php echo esc_html( PHYSO_TELEFONO ); ?></a>
          </li>
          <li>
            <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 22s7-6.2 7-12a7 7 0 1 0-14 0c0 5.8 7 12 7 12"/><circle cx="12" cy="10" r="2.6" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
            <span><?php echo esc_html( PHYSO_DIRECCION ); ?></span>
          </li>
        </ul>
      </div>

    </div>

    <div class="site-footer__bottom">
      <span>Copyright &copy; <?php echo esc_html( date('Y') ); ?></span>
      <nav class="site-footer__legal" aria-label="Enlaces legales">
        <a href="<?php echo esc_url( home_url('/terminos-y-condiciones') ); ?>">Terminos y Condiciones</a>
        <a href="<?php echo esc_url( home_url('/politica-de-privacidad') ); ?>">Política de privacidad</a>
        <a href="<?php echo esc_url( home_url('/tratamiento-de-datos-personales') ); ?>">Tratamiento de datos personales</a>
        <a href="<?php echo esc_url( home_url('/libro-de-reclamaciones') ); ?>">Libro de reclamaciones</a>
      </nav>
    </div>
  </div>
</footer>

</div><!-- .site -->

<!-- Reproductor flotante. Lo abre cualquier .physo-video-trigger de la página. -->
<dialog class="physo-video-modal" id="physo-video-modal" aria-label="Reproductor de video">
  <button type="button" class="physo-video-modal__close" aria-label="Cerrar video">&#10005;</button>
  <video class="physo-video-modal__video" controls playsinline preload="none"></video>
</dialog>

<?php wp_footer(); ?>
</body>
</html>