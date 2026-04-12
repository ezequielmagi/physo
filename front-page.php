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
    <div class="physo-container">
      <div class="physo-section-header physo-reveal">
        <p class="physo-eyebrow">Queremos entender tu punto de partida</p>
        <h2>Elegí la situación que mejor represente lo que estás viviendo</h2>
      </div>
      <div class="physo-selector__grid physo-reveal-group">
        <div class="physo-card physo-selector__card physo-reveal">
          <div class="physo-selector__card-image physo-img-zoom">
            <div class="physo-selector__img-placeholder"></div>
          </div>
          <div class="physo-selector__card-body">
            <h3>Tengo una condición médica</h3>
            <p>Querés trabajar con alguien especializado y entrenado en el cuidado de tu salud.</p>
            <a href="#" class="physo-btn physo-btn--primary">Conocé cómo trabajo →</a>
          </div>
        </div>
        <div class="physo-card physo-selector__card physo-reveal">
          <div class="physo-selector__card-image physo-img-zoom">
            <div class="physo-selector__img-placeholder"></div>
          </div>
          <div class="physo-selector__card-body">
            <h3>Tengo una lesión o quiero mejorar mi estructura corporal</h3>
            <p>Tu objetivo es recuperarte, moverte mejor y fortalecer tu cuerpo.</p>
            <a href="#" class="physo-btn physo-btn--primary">Conocé cómo trabajo →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ TESTIMONIOS ============ -->
  <section class="physo-section physo-section--azul physo-testimonios">
    <div class="physo-container">
      <div class="physo-section-header physo-reveal">
        <h2 class="physo-testimonios__titulo">
          Historias de personas que acompañamos en su mejora.
        </h2>
        <p>Cada proceso es diferente, pero todos comparten algo en común: la decisión de cuidar su cuerpo.</p>
      </div>
      <div class="physo-slider physo-reveal">
        <div class="physo-slider__track">
          <?php
          $testimonios = [
            [ 'nombre' => 'Juliana Black',   'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat tortor non mi ullamcorper, vel pretium nunc fringilla.' ],
            [ 'nombre' => 'Carlos Méndez',   'texto' => 'Physo cambió completamente mi forma de entender el movimiento. El acompañamiento es profesional y muy humano.' ],
            [ 'nombre' => 'Philip Galligan', 'texto' => 'Después de meses con dolor, finalmente encontré un lugar donde se toman el tiempo de escucharme y guiarme.' ],
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
      <div class="physo-stats__grid physo-reveal-group">
        <div class="physo-stat physo-reveal">
          <span class="physo-stat__number physo-counter" data-target="3" data-prefix="+" data-suffix=" años">0</span>
          <span class="physo-stat__label">Acompañando procesos de salud</span>
        </div>
        <div class="physo-stat physo-reveal">
          <span class="physo-stat__number physo-counter" data-target="70" data-prefix="+" data-suffix="">0</span>
          <span class="physo-stat__label">Personas en su camino en entrenamiento supervisado</span>
        </div>
        <div class="physo-stat physo-reveal">
          <span class="physo-stat__number physo-counter" data-target="40" data-prefix="+" data-suffix="">0</span>
          <span class="physo-stat__label">Clínicas Pilates acordes con tu nivel</span>
        </div>
        <div class="physo-stat physo-reveal">
          <span class="physo-stat__number physo-counter" data-target="30" data-prefix="+" data-suffix="">0</span>
          <span class="physo-stat__label">Talleres trabajados</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section class="physo-section physo-section--crema physo-faq-section">
    <div class="physo-container">
      <div class="physo-section-header physo-reveal">
        <p class="physo-eyebrow">Preguntas frecuentes</p>
        <h2>Respondemos algunas de las preguntas más habituales</h2>
      </div>
      <div class="physo-faq physo-reveal">
        <?php
        $faqs = [
          [ 'q' => '¿Cómo es una sesión inicial?',       'a' => 'La primera sesión es una evaluación completa donde analizamos tu historial, objetivos y condición actual.' ],
          [ 'q' => '¿Necesito tener experiencia previa?', 'a' => 'No. Trabajamos con personas de todos los niveles, desde quienes empiezan desde cero hasta deportistas.' ],
          [ 'q' => '¿Con qué frecuencia debo asistir?',   'a' => 'Depende de tu objetivo. Generalmente recomendamos entre 2 y 3 veces por semana.' ],
          [ 'q' => '¿Trabajan con derivaciones médicas?', 'a' => 'Sí. Trabajamos en conjunto con médicos, traumatólogos y kinesiólogos para complementar tu tratamiento.' ],
        ];
        foreach ( $faqs as $faq ) : ?>
          <div class="physo-faq__item">
            <button class="physo-faq__question">
              <?php echo esc_html( $faq['q'] ); ?>
              <span class="physo-faq__icon">+</span>
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
  <section>
    Esto es una prueba.
  </section>

</main>

<?php get_footer(); ?>