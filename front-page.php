<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>

<main class="site-main" id="main">

  <!-- ============ HERO ============ -->
  <section class="physo-hero">

    <!-- Imagen de fondo -->
    <div class="physo-hero__bg">
      <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/hero-bg.png' ); ?>"
           alt="Physo hero">
    </div>

    <!-- Overlay oscuro encima de la imagen -->
    <div class="physo-hero__overlay"></div>

    <!-- Contenido -->
    <div class="physo-container">
      <div class="physo-hero__content">
        <h1 class="physo-hero__title">
          Un espacio de movimiento seguro para tu proceso de salud.
        </h1>
        <div class="physo-hero__text">
          <p>
            Cuando aparece un diagnóstico o una lesión, la relación con el cuerpo cambia. Empieza una etapa en la que comprender cómo moverse, fortalecerse y cuidarse adquiere un nuevo significado.</p>
          <br>
          <p>
            En Physo acompañamos ese proceso a través de un enfoque integral que une movimiento adaptado, nutrición y bienestar emocional. Todo comienza con una evaluación funcional personalizada, pensada para comprender tu situación y definir el camino más adecuado para ti.
          </p>
        </div>
        <a href="#contacto" class="physo-btn physo-btn--hero">
          Agenda tu evaluación y sesión gratuita →
        </a>
      </div>
    </div>

    <div class="physo-hero__deco"></div>
  </section>

  <!-- ============ SELECTOR DE PERFIL ============ -->
<section class="physo-section physo-section--crema physo-selector">
  <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/cruz-ocho.webp' ); ?>"
       alt=""
       aria-hidden="true"
       class="physo-selector__deco-cruz">
  <div class="physo-container">

    <div class="physo-section-header physo-reveal">
      <h2 class="physo-selector__h2">Queremos entender tu punto de partida</h2>
      <p class="physo-selector__p">Cada proceso de salud es diferente.<br>Elige la situación que mejor represente lo que estás viviendo.</p>
    </div>

    <div class="physo-selector__grid physo-reveal-group">

      <div class="physo-selector__card physo-reveal">
        <div class="physo-selector__card-image physo-img-zoom">
          <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/selector-medica.png' ); ?>"
               alt="Lesión o estructura corporal"
               onerror="this.parentElement.classList.add('physo-selector__img-placeholder')">
        </div>
        <div class="physo-selector__card-body">
          <h3>Tengo una condición médica</h3>
          <p>Querés moverte con seguridad y entender qué tipo de ejercicio es adecuado para mi estado de salud.</p>
          <a href="#" class="physo-btn physo-btn--secondary">
            Conocé movimiento adaptado →
          </a>
        </div>
        <!-- Sombra naranja decorativa -->
        <div class="physo-selector__card-shadow"></div>
      </div>

      <div class="physo-card physo-selector__card physo-reveal">
        <div class="physo-selector__card-image physo-img-zoom">
          <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/selector-lesion.png' ); ?>"
               alt="Lesión o estructura corporal"
               onerror="this.parentElement.classList.add('physo-selector__img-placeholder')">
        </div>
        <div class="physo-selector__card-body">
          <h3>Tengo una lesión o quiero mejorar mi estructura corporal</h3>
          <p>Buscás recuperarte, sentirte mejor y desarrollar un cuerpo más sólido y fuerte.</p>
          <a href="#" class="physo-btn physo-btn--secondary">
            Conocé cómo trabajamos →
          </a>
        </div>
        <!-- Sombra naranja decorativa -->
        <div class="physo-selector__card-shadow"></div>
      </div>
      </div>

    </div>
  </div>


</section>
  <!-- ============ TESTIMONIOS ============ -->
  <section class="physo-section physo-section--azul physo-testimonios">
    <div class="physo-container">
      <div class="physo-section-header-testimonios physo-reveal">
        <h4 class="physo-testimonios__titulo">
          Historias de personas que acompañamos en su mejora.
        </h4>
        <p>Cada proceso es diferente, pero todos comparten algo en común:<br>la decisión de volver a confiar en su cuerpo.</p>
      </div>
      <div class="physo-slider physo-reveal">
        <div class="physo-slider__track">
          <?php
          $testimonios = [
            [ 'nombre' => 'Juliana Black',   'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat tortor non mi ullamcorper, vel pretium nunc fringilla.' ],
            [ 'nombre' => 'Carlos Méndez',   'texto' => 'Physo cambió completamente mi forma de entender el movimiento. El acompañamiento es profesional y muy humano.' ],
            [ 'nombre' => 'Philip Galligan', 'texto' => 'Después de meses con dolor, finalmente encontré un lugar donde se toman el tiempo de escucharme y guiarme.' ],
            [ 'nombre' => 'Sofía Herrera',   'texto' => 'El equipo me ayudó a recuperar movilidad y confianza en mi cuerpo con ejercicios personalizados y seguimiento constante.' ],
          ];
          foreach ( $testimonios as $t ) : ?>
            <div class="physo-slider__slide">
              <div class="physo-testimonio__card">
                <div class="physo-testimonio__estrellas">★★★★★</div>
                <p class="physo-testimonio__texto">"<?php echo esc_html( $t['texto'] ); ?>"</p>
                <p class="physo-testimonio__nombre"><?php echo esc_html( $t['nombre'] ); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="physo-slider__prev" aria-label="Anterior">←</button>
        <button class="physo-slider__next" aria-label="Siguiente">→</button>
      </div>
    </div>
  </section>

  <!-- ============ ESTADÍSTICAS ============ -->
  <section class="physo-section physo-stats">
    <div class="physo-container">
      <div class="physo-stats__header physo-reveal">
        <h2 class="physo-stats__heading">Una comunidad construida alrededor del movimiento y la salud</h2>
        <p class="physo-stats__desc"><strong>Physo</strong> es un centro especializado en acompañamiento integral para condiciones de salud y procesos de lesión, donde el movimiento, la nutrición y el bienestar emocional forman parte de un mismo enfoque.</p>
      </div>
      <div class="physo-stats__grid physo-reveal-group">
        <div class="physo-stat physo-reveal .physo-stat__card">
          <span class="physo-stat__number physo-counter" data-target="3" data-prefix="+" data-suffix=" años">0</span>
          <span class="physo-stat__label">Acompañando procesos de salud.</span>
        </div>
        <div class="physo-stat physo-reveal .physo-stat__card">
          <span class="physo-stat__number physo-counter" data-target="70" data-prefix="+" data-suffix="">0</span>
          <span class="physo-stat__label">Personas actualmente en entrenamiento supervisado.</span>
        </div>
        <div class="physo-stat physo-reveal .physo-stat__card">
          <span class="physo-stat__number physo-counter" data-target="40" data-prefix="+" data-suffix="">0</span>
          <span class="physo-stat__label">Condiciones médicas abordadas a través de movimiento adaptado.</span>
        </div>
        <div class="physo-stat physo-reveal .physo-stat__card">
          <span class="physo-stat__number physo-counter" data-target="30" data-prefix="+" data-suffix="">0</span>
          <span class="physo-stat__label">Tipos de lesiones trabajadas mediante fortalecimiento estructural.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ ESPACIO ============ -->
  <section class="physo-section physo-espacio">

    <!-- Círculos decorativos -->
    <div class="physo-espacio__deco" aria-hidden="true">
      <span class="physo-espacio__deco-ring physo-espacio__deco-ring--1"></span>
      <span class="physo-espacio__deco-ring physo-espacio__deco-ring--2"></span>
      <span class="physo-espacio__deco-ring physo-espacio__deco-ring--3"></span>
    </div>

    <div class="physo-container">

      <!-- Cabecera: título + flechas -->
      <div class="physo-espacio__header physo-reveal">
        <h2 class="physo-espacio__heading">Un espacio pensado para el cuidado<br>y el movimiento consciente</h2>
        <div class="physo-espacio__nav">
          <button class="physo-espacio__btn" aria-label="Anterior">←</button>
          <button class="physo-espacio__btn" aria-label="Siguiente">→</button>
        </div>
      </div>

      <!-- Grilla de imágenes -->
      <div class="physo-espacio__grid physo-reveal-group">
        <div class="physo-espacio__img physo-img-zoom physo-reveal">
          <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/espacio-1.png' ); ?>"
               alt="Sesión de movimiento adaptado"
               onerror="this.parentElement.classList.add('physo-espacio__img--placeholder')">
        </div>
        <div class="physo-espacio__img physo-img-zoom physo-reveal">
          <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/espacio-2.png' ); ?>"
               alt="Entrenamiento supervisado"
               onerror="this.parentElement.classList.add('physo-espacio__img--placeholder')">
        </div>
        <div class="physo-espacio__img physo-img-zoom physo-reveal">
          <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/espacio-1.png ' ); ?>"
               alt="Bienestar y calma"
               onerror="this.parentElement.classList.add('physo-espacio__img--placeholder')">
        </div>
        <div class="physo-espacio__img physo-img-zoom physo-reveal">
          <img src="<?php echo esc_url( PHYSO_URI . '/assets/images/espacio-2.png' ); ?>"
               alt="Acompañamiento profesional"
               onerror="this.parentElement.classList.add('physo-espacio__img--placeholder')">
        </div>
      </div>

      <!-- Descripción -->
      <p class="physo-espacio__caption physo-reveal">
        Cada detalle del centro está diseñado para <strong>acompañar procesos de salud</strong> con <strong>seguridad, calma y supervisión profesional</strong>.
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
            'q'    => '¿Cómo es una sesión inicial?',
            'a'    => 'La primera sesión es una evaluación completa donde analizamos tu historial, objetivos y condición actual.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a16,16,0,1,1,16,16A16,16,0,0,1,112,84Z"/></svg>',
          ],
          [
            'q'    => '¿Necesito tener experiencia previa?',
            'a'    => 'No. Trabajamos con personas de todos los niveles, desde quienes empiezan desde cero hasta deportistas.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-48-56H96a8,8,0,0,1,0-16h64a8,8,0,0,1,0,16Zm0,32H96a8,8,0,0,1,0-16h64a8,8,0,0,1,0,16Z"/></svg>',
          ],
          [
            'q'    => '¿Con qué frecuencia debo asistir?',
            'a'    => 'Depende de tu objetivo. Generalmente recomendamos entre 2 y 3 veces por semana.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM32,64H224V96H32ZM32,192V112H224v80Z"/></svg>',
          ],
          [
            'q'    => '¿Trabajan con derivaciones médicas?',
            'a'    => 'Sí. Trabajamos en conjunto con médicos, traumatólogos y kinesiólogos para complementar tu tratamiento.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12l16-27.71A92.06,92.06,0,0,1,36,140V88a92,92,0,0,1,184,0v52a92.06,92.06,0,0,1-5.08,44.29l16,27.71A8,8,0,0,1,230.93,220ZM196,88a68,68,0,0,0-136,0v52a68,68,0,0,0,136,0Zm-36,52a8,8,0,0,0-8-8H136V120a8,8,0,0,0-16,0v12H108a8,8,0,0,0,0,16h12v12a8,8,0,0,0,16,0V148h12A8,8,0,0,0,160,140Z"/></svg>',
          ],
          [
            'q'    => '¿Qué diferencia a Physo de otros centros?',
            'a'    => 'Nuestro enfoque combina entrenamiento funcional, recuperación y bienestar en un mismo espacio, con profesionales especializados.',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" fill="currentColor"><path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12l16-27.71A92.06,92.06,0,0,1,36,140V88a92,92,0,0,1,184,0v52a92.06,92.06,0,0,1-5.08,44.29l16,27.71A8,8,0,0,1,230.93,220ZM196,88a68,68,0,0,0-136,0v52a68,68,0,0,0,136,0Z"/></svg>',
          ],
          [
            'q'    => '¿Tienen opciones online?',
            'a'    => 'Sí, ofrecemos sesiones de seguimiento y asesoramiento de forma remota para mayor comodidad.',
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
    <div class="physo-container">
      <div class="physo-section-header physo-reveal">
        <p class="physo-eyebrow">Conversemos sobre tu situación</p>
        <h2>Si tenés preguntas o querés empezar, escribinos</h2>
        <p>Nuestro equipo responde en menos de 24 horas a través del formulario paso.</p>
      </div>
      <form class="physo-form physo-reveal" method="post">
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
            <input type="tel" id="telefono" name="telefono" placeholder="+54 9 11 0000-0000">
          </div>
        </div>
        <div class="physo-form__group physo-form__group--full">
          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" rows="5" placeholder="Contanos brevemente tu situación..." required></textarea>
        </div>
        <div class="physo-form__submit">
          <button type="submit" class="physo-btn physo-btn--primary">
            Agendar una consulta →
          </button>
        </div>
      </form>
    </div>
  </section>


</main>

<?php get_footer(); ?>