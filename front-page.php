<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>

<main class="site-main" id="main">

  <!-- ============ HERO ============ -->
  <section class="physo-hero">

    <!-- Imagen de fondo -->
    <div class="physo-hero__bg">
      <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/hero-gym.webp' ); ?>"
           alt=""
           aria-hidden="true"
           fetchpriority="high"
           width="1289"
           height="723">
    </div>

    <!-- Overlay azul encima de la imagen -->
    <div class="physo-hero__overlay"></div>

    <!-- Contenido -->
    <div class="physo-container">
      <div class="physo-hero__content">
        <h1 class="physo-hero__title">
          Una boutique donde el movimiento vuelve a tener sentido.
        </h1>
        <div class="physo-hero__text">
          <p>
            <strong>Physo</strong> es un espacio donde <strong>acompañamos a personas con condiciones médicas, lesiones, alteraciones posturales</strong> o miedo a volver a lesionarse a través de movimiento supervisado, regulación del sistema nervioso y seguimiento personalizado, para que vuelvan a moverse con mayor seguridad y confianza.
          </p>
        </div>
        <a href="#contacto" class="physo-btn physo-btn--hero">
          Agenda tu evaluación y sesión gratuita
          <span class="physo-btn__arrow" aria-hidden="true">→</span>
        </a>
      </div>
    </div>

    <div class="physo-hero__deco"></div>
  </section>

  <!-- ============ SELECTOR DE PERFIL ============ -->
<section class="physo-section physo-section--claro physo-selector">
  <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/cruz-ocho.webp' ); ?>"
       alt=""
       aria-hidden="true"
       class="physo-selector__deco-cruz">
  <div class="physo-container">

    <div class="physo-section-header physo-reveal">
      <h2 class="physo-selector__h2">Queremos entender tu punto de partida</h2>
      <p class="physo-selector__p">Cada cuerpo vive procesos distintos.<br>Elige la situación que mejor represente lo que estás viviendo hoy.</p>
    </div>

    <div class="physo-selector__grid physo-reveal-group">

      <?php
      $physo_selector_cards = [
        [
          'titulo'  => 'Tengo una condición médica',
          'texto'   => 'Quiero moverme con más seguridad, recuperar energía y entender qué tipo de ejercicio es adecuado para mi condición de salud.',
          'boton'   => 'Conoce MOVIMIENTO ADAPTADO',
          'enlace'  => '/movimiento-adaptado',
          'video'   => 'movimiento-adaptado.mp4',
          'poster'  => 'poster-movimiento-adaptado.webp',
        ],
        [
          'titulo'  => 'Tengo una lesión, alteración postural o quiero fortalecerme',
          'texto'   => 'Quiero recuperar confianza en mi movimiento, mejorar mi estabilidad y volver a hacer lo que disfruto sin miedo a lesionarme.',
          'boton'   => 'Conoce MOVIMIENTO EVOLUTIVO',
          'enlace'  => '/movimiento-evolutivo',
          'video'   => 'movimiento-evolutivo.mp4',
          'poster'  => 'poster-movimiento-evolutivo.webp',
        ],
      ];

      foreach ( $physo_selector_cards as $card ) : ?>
        <div class="physo-selector__card physo-reveal">
          <div class="physo-selector__card-image">
            <button type="button"
                    class="physo-video-trigger"
                    data-video="<?php echo esc_url( PHYSO_URI . '/assets/videos/' . $card['video'] ); ?>"
                    aria-label="Reproducir el video: <?php echo esc_attr( $card['titulo'] ); ?>">
              <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/' . $card['poster'] ); ?>"
                   alt=""
                   aria-hidden="true"
                   loading="lazy"
                   onerror="this.remove()">
              <span class="physo-video-trigger__play" aria-hidden="true">
                <svg viewBox="0 0 16 18" focusable="false"><path d="M16 9 0 18V0z" fill="currentColor"/></svg>
              </span>
            </button>
          </div>
          <div class="physo-selector__card-body">
            <h3><?php echo esc_html( $card['titulo'] ); ?></h3>
            <p><?php echo esc_html( $card['texto'] ); ?></p>
            <a href="<?php echo esc_url( home_url( $card['enlace'] ) ); ?>" class="physo-btn physo-btn--naranja">
              <?php echo esc_html( $card['boton'] ); ?>
              <span class="physo-btn__flecha" aria-hidden="true">→</span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
  <!-- ============ TESTIMONIOS ============ -->
  <section class="physo-section physo-section--azul physo-testimonios">
    <div class="physo-container">
      <div class="physo-testimonios__cabecera physo-reveal">
        <div class="physo-section-header-testimonios">
          <h4 class="physo-testimonios__titulo">
            Historias de personas que acompañamos en su mejora.
          </h4>
          <p>Cada proceso es diferente, pero todos comparten algo en común:<br>la decisión de volver a confiar en su cuerpo.</p>
        </div>
        <div class="physo-slider__nav">
          <button class="physo-slider__prev" aria-label="Testimonio anterior">&#8592;</button>
          <button class="physo-slider__next" aria-label="Testimonio siguiente">&#8594;</button>
        </div>
      </div>
      <div class="physo-slider physo-reveal">
        <div class="physo-slider__track">
          <?php
          // 'foto' vacío cae en un avatar con las iniciales.
          // 'destacado' pinta la card de naranja.
          $testimonios = [
            [
              'nombre' => 'Alfredo Celis',
              'foto'   => 'testimonio-alfredo-celis.webp',
              'texto'  => 'Elegí Physo porque es un concepto diferente de actividad física centrado en la necesidad de cada persona. La actividad física no se basa en máquinas sino que utiliza la fuerza de la misma persona para lograr la recuperación o mejoramiento de la salud. Es muy personalizado, siempre hay un personal guiándote o apoyándote en la ejecución de los ejercicios.',
            ],
            [
              'nombre'    => 'Farah Wong',
              'foto'      => 'testimonio-farah-wong.webp',
              'destacado' => true,
              'texto'     => 'Elijo Physo porque me apoyan a luchar por mi mejor versión, mi cuerpo necesita ejercicio y movimiento. Ellos me han hecho entender que tener un cuerpo saludable es elegirse día a día. Y aunque todos los días no podré dar lo mejor de mí sigo intentándolo.',
            ],
            [
              'nombre' => 'Rosario Olivera',
              'foto'   => 'testimonio-rosario-olivera.webp',
              'texto'  => 'Elijo Physo porque el entrenamiento personalizado me permite hacer ejercicios de forma segura y adaptadas a mis necesidades. Valoro mucho contar con profesionales que entienden mi condición y supervisan mi progreso de cerca. Esto me da la confianza necesaria para mantenerme activa y cuidar mejor de mi salud cada día.',
            ],
            [
              'nombre' => 'Marta Soler',
              'cargo'  => 'Empresaria',
              'foto'   => 'testimonio-marta-soler.webp',
              'texto'  => 'La atención y el cuidado al detalle son excepcionales. Realmente se preocupan por tu bienestar a largo plazo.',
            ],
            [
              'nombre' => 'Marisol Leyva',
              'foto'   => 'testimonio-marisol-leyva.webp',
              'texto'  => 'Después de años lidiando con dolores crónicos y diagnósticos incompletos, encontrar a Physo fue el alivio que mi cuerpo y mi familia tanto esperábamos. Gracias a su evaluación funcional y al trato humano de su increíble equipo, hoy no solo entiendo mi salud, sino que he recuperado la independencia para caminar sin molestias y vivir con alegría. Es mucho más que un entrenamiento; es el lugar donde encontré los resultados reales que me devolvieron la libertad de moverme.',
            ],
            [
              'nombre' => 'Sergio Yap',
              'foto'   => 'testimonio-sergio-yap.webp',
              'texto'  => 'Elijo Physo porque me ayuda a poder realizar mis actividades diarias de ejercicio para practicar otros deportes (fútbol) y llegar bien a la vejez. El equipo es super amable, divertido y muy expertos en las diferentes maneras de fortalecer el cuerpo o aliviar dolores/ tensiones. También la locación está bastante céntrica.',
            ],
            [
              'nombre' => 'Gerardo Chulluncuy',
              'foto'   => 'testimonio-gerardo-chulluncuy.webp',
              'texto'  => 'De inicio, acudí para recuperarme físicamente de un accidente que tuve. En el lapso de estos años me parece la mejor opción para entrenar personalizadamente y con la seguridad que estás al costado de excelentes profesionales que forman parte del equipo de Physo.',
            ],
            [
              'nombre' => 'Esther Villavicencio',
              'foto'   => 'testimonio-esther-villavicencio.webp',
              'texto'  => 'Vine para mejorar mi postura y, poco a poco, también he empezado a sentirme mucho mejor en mi día a día. Además, el acompañamiento hace que todo el proceso sea más seguro y constante.',
            ],
          ];

          foreach ( $testimonios as $t ) :
            $destacado = ! empty( $t['destacado'] );

            // Iniciales para el avatar cuando todavía no hay foto.
            $partes    = preg_split( '/\s+/', trim( $t['nombre'] ) );
            $iniciales = mb_strtoupper( mb_substr( $partes[0], 0, 1 ) );
            if ( isset( $partes[1] ) ) {
              $iniciales .= mb_strtoupper( mb_substr( $partes[1], 0, 1 ) );
            }
            ?>
            <div class="physo-slider__slide">
              <div class="physo-testimonio__card<?php echo $destacado ? ' physo-testimonio__card--destacado' : ''; ?>">
                <span class="physo-testimonio__comilla" aria-hidden="true">&rdquo;</span>
                <p class="physo-testimonio__texto">&ldquo;<?php echo esc_html( $t['texto'] ); ?>&rdquo;</p>
                <div class="physo-testimonio__persona">
                  <?php if ( $t['foto'] ) : ?>
                    <img class="physo-testimonio__foto"
                         src="<?php echo esc_url( PHYSO_URI . '/assets/images/' . $t['foto'] ); ?>"
                         alt=""
                         aria-hidden="true"
                         loading="lazy">
                  <?php else : ?>
                    <span class="physo-testimonio__foto physo-testimonio__foto--iniciales" aria-hidden="true"><?php echo esc_html( $iniciales ); ?></span>
                  <?php endif; ?>
                  <span class="physo-testimonio__identidad">
                    <span class="physo-testimonio__nombre"><?php echo esc_html( $t['nombre'] ); ?></span>
                    <?php if ( ! empty( $t['cargo'] ) ) : ?>
                      <span class="physo-testimonio__cargo"><?php echo esc_html( $t['cargo'] ); ?></span>
                    <?php endif; ?>
                  </span>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ ESTADÍSTICAS ============ -->
  <section class="physo-section physo-stats">
    <div class="physo-container">
      <div class="physo-stats__inner physo-reveal">

        <div class="physo-stats__collage">
          <img class="physo-stats__foto physo-stats__foto--a"
               src="<?php echo esc_url( PHYSO_URI . '/assets/images/comunidad-evaluacion.webp' ); ?>"
               alt="Un profesional de Physo explicando anatomía muscular a una paciente"
               width="493" height="461" loading="lazy">
          <img class="physo-stats__foto physo-stats__foto--b"
               src="<?php echo esc_url( PHYSO_URI . '/assets/images/comunidad-consulta.webp' ); ?>"
               alt="Un profesional de Physo mostrando un modelo de rodilla durante una consulta"
               width="342" height="453" loading="lazy">
        </div>

        <div class="physo-stats__contenido">
          <h2 class="physo-stats__heading">Una comunidad construida alrededor del movimiento y el bienestar</h2>

          <div class="physo-stats__grid physo-reveal-group">
            <?php
            $physo_stats = [
              [ 'valor' => 3,  'sufijo' => ' años', 'label' => 'Transformando la relación de las personas con el movimiento.' ],
              [ 'valor' => 70, 'sufijo' => '',      'label' => 'Personas trabajando hoy por recuperar movimiento, bienestar y confianza.' ],
              [ 'valor' => 40, 'sufijo' => '',      'label' => 'Condiciones médicas acompañadas a través de Movimiento Adaptado.' ],
              [ 'valor' => 30, 'sufijo' => '',      'label' => 'Lesiones y alteraciones posturales abordadas mediante Movimiento Evolutivo.' ],
            ];
            foreach ( $physo_stats as $s ) : ?>
              <div class="physo-stat physo-reveal">
                <span class="physo-stat__number physo-counter"
                      data-target="<?php echo esc_attr( $s['valor'] ); ?>"
                      data-prefix="+"
                      data-suffix="<?php echo esc_attr( $s['sufijo'] ); ?>">0</span>
                <span class="physo-stat__label"><?php echo esc_html( $s['label'] ); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ ESPACIO ============ -->
  <section class="physo-section physo-espacio">

    <!-- Asterisco decorativo -->
    <svg class="physo-espacio__asterisco" viewBox="0 0 100 100" aria-hidden="true" focusable="false">
      <g fill="currentColor">
        <rect x="44" y="0" width="12" height="100" rx="6"/>
        <rect x="44" y="0" width="12" height="100" rx="6" transform="rotate(45 50 50)"/>
        <rect x="44" y="0" width="12" height="100" rx="6" transform="rotate(90 50 50)"/>
        <rect x="44" y="0" width="12" height="100" rx="6" transform="rotate(135 50 50)"/>
      </g>
    </svg>

    <div class="physo-container">

      <!-- Cabecera: título + flechas -->
      <div class="physo-espacio__header physo-reveal">
        <h2 class="physo-espacio__heading">Un espacio pensado para el cuidado<br>y el movimiento consciente</h2>
        <div class="physo-slider__nav">
          <button class="physo-slider__prev" aria-label="Foto anterior">&#8592;</button>
          <button class="physo-slider__next" aria-label="Foto siguiente">&#8594;</button>
        </div>
      </div>

      <!-- Carrusel de fotos -->
      <div class="physo-slider physo-espacio__slider physo-reveal" data-visibles="2">
        <div class="physo-slider__track">
          <?php
          $physo_espacio = [
            [ 'archivo' => 'espacio-01.webp', 'alt' => 'Entrenamiento con barra supervisado por un profesional' ],
            [ 'archivo' => 'espacio-02.webp', 'alt' => 'Ejercicio con banda elástica acompañado por un entrenador' ],
            [ 'archivo' => 'espacio-03.webp', 'alt' => 'Trabajo de movilidad con pelota junto a un profesional' ],
            [ 'archivo' => 'espacio-04.webp', 'alt' => 'Rack de mancuernas y pesas rusas del centro' ],
            [ 'archivo' => 'espacio-05.webp', 'alt' => 'Espaldera con bandas de suspensión' ],
            [ 'archivo' => 'espacio-06.webp', 'alt' => 'Estantería con pelotas y material de entrenamiento' ],
            [ 'archivo' => 'espacio-07.webp', 'alt' => 'Dos profesionales del equipo revisando material' ],
            [ 'archivo' => 'espacio-08.webp', 'alt' => 'Vista general de la sala de entrenamiento' ],
          ];
          foreach ( $physo_espacio as $e ) : ?>
            <div class="physo-slider__slide">
              <div class="physo-espacio__img">
                <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/' . $e['archivo'] ); ?>"
                     alt="<?php echo esc_attr( $e['alt'] ); ?>"
                     width="576" height="348" loading="lazy">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Descripción -->
      <p class="physo-espacio__caption physo-reveal">
        Cada detalle de la boutique está diseñada para <strong>acompañar procesos de salud y movimiento</strong> con <strong>seguridad, calma y supervisión profesional</strong>.
      </p>

    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section class="physo-section physo-section--crema physo-faq-section">
    <div class="physo-container">
      <div class="physo-section-header physo-reveal">
        <h2>Preguntas frecuentes</h2>
        <p>Respondemos algunas de las preguntas más habituales</p>
      </div>
      <div class="physo-faq physo-reveal">
        <?php
        $faqs = [
          [
            'q'    => '¿Qué es Physo?',
            'a'    => 'Physo es un centro de acompañamiento integral en Lima orientado a mejorar la funcionalidad del cuerpo, el movimiento, los hábitos y el bienestar general. Su enfoque combina ejercicio supervisado, nutrición clínica e integral y regulación del sistema nervioso.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a16,16,0,1,1,16,16A16,16,0,0,1,112,84Z"/></svg>',
          ],
          [
            'q'    => '¿Qué servicios ofrece Physo?',
            'a'    => 'Physo ofrece tres servicios principales: Movimiento Adaptado para personas con condiciones médicas, Movimiento Evolutivo para lesiones, alteraciones posturales y fortalecimiento estructural, y Yoga Nidra como práctica guiada orientada al descanso, la recuperación y la regulación del sistema nervioso.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-48-56H96a8,8,0,0,1,0-16h64a8,8,0,0,1,0,16Zm0,32H96a8,8,0,0,1,0-16h64a8,8,0,0,1,0,16Z"/></svg>',
          ],
          [
            'q'    => '¿Para quién está pensado Physo?',
            'a'    => 'Physo está pensado para quienes necesitan un enfoque más personalizado que el de un gimnasio tradicional: personas con condiciones médicas, lesiones, molestias recurrentes, alteraciones posturales o quienes buscan fortalecer su cuerpo con mayor seguridad y criterio.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM32,64H224V96H32ZM32,192V112H224v80Z"/></svg>',
          ],
          [
            'q'    => '¿Cómo comienza el proceso en Physo?',
            'a'    => 'El proceso comienza con una evaluación funcional y una sesión de prueba gratuita. En ese primer encuentro se observan variables como movilidad, estabilidad, fuerza funcional, postura, dolor, fatiga y respuesta al movimiento, para orientar el trabajo de forma más precisa.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12l16-27.71A92.06,92.06,0,0,1,36,140V88a92,92,0,0,1,184,0v52a92.06,92.06,0,0,1-5.08,44.29l16,27.71A8,8,0,0,1,230.93,220ZM196,88a68,68,0,0,0-136,0v52a68,68,0,0,0,136,0Zm-36,52a8,8,0,0,0-8-8H136V120a8,8,0,0,0-16,0v12H108a8,8,0,0,0,0,16h12v12a8,8,0,0,0,16,0V148h12A8,8,0,0,0,160,140Z"/></svg>',
          ],
          [
            'q'    => '¿Es seguro hacer ejercicio en Physo si tengo una condición médica o una lesión?',
            'a'    => 'Sí. El trabajo en Physo se adapta a la situación de cada caso, con supervisión constante, progresión gradual y ajustes según la respuesta del cuerpo. En algunos casos específicos también puede solicitarse autorización médica para empezar.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12l16-27.71A92.06,92.06,0,0,1,36,140V88a92,92,0,0,1,184,0v52a92.06,92.06,0,0,1-5.08,44.29l16,27.71A8,8,0,0,1,230.93,220ZM196,88a68,68,0,0,0-136,0v52a68,68,0,0,0,136,0Z"/></svg>',
          ],
          [
            'q'    => '¿Necesito experiencia previa para empezar?',
            'a'    => 'No. Muchas personas llegan sin experiencia previa en ejercicio o después de haber pasado por dolor, inactividad, cirugía o rehabilitación. El trabajo comienza desde el punto en el que se encuentra cada cuerpo y progresa de forma guiada.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8H96a8,8,0,0,0,8-8V160h48v56a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H168V152a8,8,0,0,0-8-8H96a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z"/></svg>',
          ],
        ];
        foreach ( $faqs as $faq ) : ?>
          <div class="physo-faq__item">
            <button type="button" class="physo-faq__question" aria-expanded="false">
              <span class="physo-faq__item-icon"><?php echo $faq['icon']; ?></span>
              <span class="physo-faq__item-text"><?php echo esc_html( $faq['q'] ); ?></span>
              <span class="physo-faq__toggle">
                <svg class="physo-faq__plus"  xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 256 256" fill="currentColor"><path d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z"/></svg>
                <svg class="physo-faq__minus" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 256 256" fill="currentColor"><path d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128Z"/></svg>
              </span>
            </button>
            <div class="physo-faq__answer">
              <p><?php echo esc_html( $faq['a'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============ FORMULARIO DE CONTACTO ============ -->
  <section class="physo-section physo-contacto" id="contacto">
    <!-- Decoraciones -->
    <svg class="physo-contacto__anillos" viewBox="0 0 200 200" aria-hidden="true" focusable="false">
      <g fill="none" stroke="currentColor" stroke-width="11">
        <circle cx="100" cy="100" r="32"/>
        <circle cx="100" cy="100" r="59"/>
        <circle cx="100" cy="100" r="86"/>
      </g>
    </svg>
    <svg class="physo-contacto__asterisco" viewBox="0 0 100 100" aria-hidden="true" focusable="false">
      <g fill="currentColor">
        <rect x="44" y="0" width="12" height="100" rx="6"/>
        <rect x="44" y="0" width="12" height="100" rx="6" transform="rotate(45 50 50)"/>
        <rect x="44" y="0" width="12" height="100" rx="6" transform="rotate(90 50 50)"/>
        <rect x="44" y="0" width="12" height="100" rx="6" transform="rotate(135 50 50)"/>
      </g>
    </svg>

    <div class="physo-container">
      <div class="physo-contacto__card physo-reveal">
      <div class="physo-section-header">
        <h2 class="physo-contacto__titulo">Conversemos sobre tu situación</h2>
        <p class="physo-contacto__bajada">¿Tienes dudas o quieres empezar?<br>Nuestro equipo se pondrá en contacto contigo para ayudarte a encontrar el servicio más adecuado para tu proceso.</p>
      </div>
      <form class="physo-form" method="post">
        <?php wp_nonce_field( 'physo_contacto', 'physo_nonce' ); ?>
        <div class="physo-form__grid">
          <div class="physo-form__group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
          </div>
          <div class="physo-form__group">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" placeholder="Tu apellido" required>
          </div>
          <div class="physo-form__group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="tu@email.com" required>
          </div>
          <div class="physo-form__group">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Tu número de celular">
          </div>
        </div>
        <div class="physo-form__group physo-form__group--full">
          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" rows="5" placeholder="Cuéntanos brevemente qué te gustaría mejorar, recuperar o volver a hacer." required></textarea>
        </div>
        <div class="physo-form__submit">
          <button type="submit" class="physo-btn physo-btn--naranja">
            Agenda tu evaluación y sesión GRATUITA
            <span class="physo-btn__flecha" aria-hidden="true">→</span>
          </button>
        </div>
      </form>
      </div>
    </div>
  </section>

  <!-- ============ UBICACIÓN ============ -->
  <?php
  // Misma dirección que figura en el footer (footer.php).
  $physo_direccion = 'Jirón Cruz del Sur 140, Santiago de Surco, Lima, Perú';
  ?>
  <section class="physo-section physo-ubicacion" id="ubicacion">
    <div class="physo-container">
      <div class="physo-ubicacion__grid physo-reveal">

        <div class="physo-ubicacion__col">
          <h2 class="physo-ubicacion__titulo">Dónde nos encontramos:</h2>
          <p class="physo-ubicacion__bajada">Aquí puedes ver cómo llegar a nuestras instalaciones.</p>

          <div class="physo-ubicacion__video">
            <button type="button"
                    class="physo-video-trigger"
                    data-video="<?php echo esc_url( PHYSO_URI . '/assets/videos/ubicacion.mp4' ); ?>"
                    aria-label="Reproducir el video de cómo llegar a Physo">
              <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/poster-ubicacion.webp' ); ?>"
                   alt=""
                   aria-hidden="true"
                   loading="lazy">
              <span class="physo-video-trigger__play" aria-hidden="true">
                <svg viewBox="0 0 16 18" focusable="false"><path d="M16 9 0 18V0z" fill="currentColor"/></svg>
              </span>
            </button>
          </div>
        </div>

        <div class="physo-ubicacion__mapa">
          <iframe
            src="https://maps.google.com/maps?q=<?php echo rawurlencode( $physo_direccion ); ?>&amp;z=16&amp;hl=es&amp;output=embed"
            title="Mapa con la ubicación de Physo"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen></iframe>
        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>