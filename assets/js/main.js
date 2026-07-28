document.addEventListener('DOMContentLoaded', () => {

  // ─── Mobile nav toggle ────────────────────────────────────
  const toggle = document.getElementById('nav-toggle');
  const nav    = document.getElementById('nav-primary');

  if ( toggle && nav ) {

    toggle.addEventListener('click', () => {
      const isOpen = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', String(isOpen));
      toggle.textContent = isOpen ? '✕' : '☰';
    });

    // Cerrar al hacer click fuera
    document.addEventListener('click', (e) => {
      if ( nav.classList.contains('is-open') &&
           ! nav.contains(e.target) &&
           ! toggle.contains(e.target) ) {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.textContent = '☰';
      }
    });

    // Cerrar con Escape
    document.addEventListener('keydown', (e) => {
      if ( e.key === 'Escape' && nav.classList.contains('is-open') ) {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.textContent = '☰';
        toggle.focus();
      }
    });
  }

  // ─── Ítems de menú que sólo agrupan ───────────────────────
  // "Servicios" no es una página: existe para desplegar el submenú y
  // apunta a "#". Sin esto, al hacer click la página salta al inicio.
  document.querySelectorAll('.nav-primary .menu-item-has-children > a[href$="#"]')
    .forEach( link => {
      link.addEventListener('click', (e) => e.preventDefault());
    });

  // ─── Reproductor de video flotante ────────────────────────
  // Se usa <dialog> a propósito: el navegador ya resuelve el cierre con
  // Escape, el atrapado del foco y la devolución del foco al cerrar.
  const videoModal = document.getElementById('physo-video-modal');
  const videoTriggers = document.querySelectorAll('.physo-video-trigger');

  if ( videoModal && videoTriggers.length ) {
    const video = videoModal.querySelector('.physo-video-modal__video');
    const btnCerrar = videoModal.querySelector('.physo-video-modal__close');

    videoTriggers.forEach( trigger => {
      trigger.addEventListener('click', () => {
        const src = trigger.dataset.video;
        if ( ! src ) return;
        video.src = src;
        // El load() es necesario: con preload="none" asignar src no
        // descarga nada, y si el navegador bloquea la reproducción
        // automática el play() se rechaza sin haber cargado. Sin esto
        // el reproductor puede quedar vacío.
        video.load();
        videoModal.showModal();
        // Puede rechazar igual; en ese caso quedan los controles nativos
        // sobre el primer frame ya cargado.
        video.play().catch( () => {} );
      });
    });

    if ( btnCerrar ) {
      btnCerrar.addEventListener('click', () => videoModal.close());
    }

    // Click en el fondo, fuera del cuadro del video.
    videoModal.addEventListener('click', (e) => {
      if ( e.target === videoModal ) videoModal.close();
    });

    // Cubre también el cierre con Escape, que dispara 'close' igual.
    // Sin liberar el src el video sigue descargándose de fondo.
    videoModal.addEventListener('close', () => {
      video.pause();
      video.removeAttribute('src');
      video.load();
    });
  }

  // ─── Header scroll ────────────────────────────────────────
  const header = document.getElementById('site-header');
  if ( header ) {
    window.addEventListener('scroll', () => {
      header.classList.toggle('is-scrolled', window.scrollY > 50);
    }, { passive: true });
  }

  // ─── Scroll reveal ────────────────────────────────────────
  const revealEls = document.querySelectorAll('.physo-reveal');
  if ( revealEls.length ) {
    const observer = new IntersectionObserver( (entries) => {
      entries.forEach( entry => {
        if ( entry.isIntersecting ) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    revealEls.forEach( el => observer.observe(el) );
  }

  // ─── Contadores animados ──────────────────────────────────
  const counters = document.querySelectorAll('.physo-counter');
  if ( counters.length ) {
    const counterObserver = new IntersectionObserver( (entries) => {
      entries.forEach( entry => {
        if ( entry.isIntersecting ) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach( el => counterObserver.observe(el) );
  }

  function animateCounter(el) {
    const target    = parseInt( el.dataset.target, 10 );
    const prefix    = el.dataset.prefix || '';
    const suffix    = el.dataset.suffix || '';
    const duration  = 1800;
    const step      = 16;
    const increment = target / (duration / step);
    let current     = 0;

    function render(value) {
      if ( prefix ) {
        el.innerHTML = '<span style="color:#f97316">' + prefix + '</span>' + value + suffix;
      } else {
        el.textContent = value + suffix;
      }
    }

    const timer = setInterval(() => {
      current += increment;
      if ( current >= target ) {
        render(target);
        clearInterval(timer);
      } else {
        render(Math.floor(current));
      }
    }, step);
  }

  // ─── Accordion FAQ ────────────────────────────────────────
  document.querySelectorAll('.physo-faq__item').forEach( item => {
    const btn    = item.querySelector('.physo-faq__question');
    const answer = item.querySelector('.physo-faq__answer');
    if ( ! btn || ! answer ) return;
    btn.addEventListener('click', () => {
      const isOpen = item.classList.contains('is-open');
      document.querySelectorAll('.physo-faq__item.is-open').forEach( open => {
        open.classList.remove('is-open');
        open.querySelector('.physo-faq__answer').style.maxHeight = null;
        open.querySelector('.physo-faq__question').setAttribute('aria-expanded', 'false');
      });
      if ( ! isOpen ) {
        item.classList.add('is-open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // ─── Slider ───────────────────────────────────────────────
  document.querySelectorAll('.physo-slider').forEach( slider => {
    const track   = slider.querySelector('.physo-slider__track');
    const slides  = slider.querySelectorAll('.physo-slider__slide');
    const btnPrev = slider.querySelector('.physo-slider__prev');
    const btnNext = slider.querySelector('.physo-slider__next');
    if ( ! track || slides.length < 2 ) return;

    let current = 0;
    let slideWidth = slides[0].getBoundingClientRect().width;
    const getVisibleSlides = () => window.matchMedia('(max-width: 768px)').matches ? 1 : 2;
    const getMaxIndex = () => Math.max(0, slides.length - getVisibleSlides());

    const updateDimensions = () => {
      slideWidth = slides[0].getBoundingClientRect().width;
    };

    const updateVisibility = () => {
      const visible = getVisibleSlides();
      slides.forEach( (slide, i) => {
        const isCentered = i >= current && i < current + visible;
        slide.classList.toggle('is-centered', isCentered);
      });
    };

    function goTo(index) {
      current = Math.min(getMaxIndex(), Math.max(0, index));
      track.style.transform = `translateX(-${current * slideWidth}px)`;
      if (btnPrev) btnPrev.disabled = current === 0;
      if (btnNext) btnNext.disabled = current === getMaxIndex();
      updateVisibility();
    }

    window.addEventListener('resize', () => {
      updateDimensions();
      goTo(current);
    });

    if (btnPrev) btnPrev.addEventListener('click', () => goTo(current - 1));
    if (btnNext) btnNext.addEventListener('click', () => goTo(current + 1));

    setInterval(() => {
      if (getMaxIndex() === 0) return;
      const next = current === getMaxIndex() ? 0 : current + 1;
      goTo(next);
    }, 5000);
    goTo(0);
  });

});