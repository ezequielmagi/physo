document.addEventListener('DOMContentLoaded', () => {
  // Mobile nav
  const toggle = document.getElementById('nav-toggle');
  const nav    = document.getElementById('nav-primary');
  if ( toggle && nav ) {
    toggle.addEventListener('click', () => {
      const open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open);
    });
  }
});

/* agrego animacion */

document.addEventListener('DOMContentLoaded', () => {

  // ─── Mobile nav ───────────────────────────────────────────
  const toggle = document.getElementById('nav-toggle');
  const nav    = document.getElementById('nav-primary');
  if ( toggle && nav ) {
    toggle.addEventListener('click', () => {
      const open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open);
    });
  }

  // ─── Header scroll effect ─────────────────────────────────
  const header = document.getElementById('site-header');
  if ( header ) {
    window.addEventListener('scroll', () => {
      header.classList.toggle('is-scrolled', window.scrollY > 50);
    }, { passive: true });
  }

  // ─── Scroll reveal (todas las secciones) ──────────────────
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
    const target   = parseInt( el.dataset.target, 10 );
    const duration = 1800;
    const step     = 16;
    const increment = target / (duration / step);
    let current = 0;
    const timer = setInterval(() => {
      current += increment;
      if ( current >= target ) {
        el.textContent = el.dataset.prefix + target + el.dataset.suffix;
        clearInterval(timer);
      } else {
        el.textContent = el.dataset.prefix + Math.floor(current) + el.dataset.suffix;
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
      // Cerrar todos
      document.querySelectorAll('.physo-faq__item.is-open').forEach( open => {
        open.classList.remove('is-open');
        open.querySelector('.physo-faq__answer').style.maxHeight = null;
      });
      // Abrir el clickeado si estaba cerrado
      if ( ! isOpen ) {
        item.classList.add('is-open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  // ─── Slider genérico ──────────────────────────────────────
  document.querySelectorAll('.physo-slider').forEach( slider => {
    const track  = slider.querySelector('.physo-slider__track');
    const slides = slider.querySelectorAll('.physo-slider__slide');
    const btnPrev = slider.querySelector('.physo-slider__prev');
    const btnNext = slider.querySelector('.physo-slider__next');
    if ( ! track || slides.length < 2 ) return;

    let current = 0;

    function goTo(index) {
      current = (index + slides.length) % slides.length;
      track.style.transform = `translateX(-${current * 100}%)`;
      slides.forEach( (s, i) => s.classList.toggle('is-active', i === current) );
    }

    if (btnPrev) btnPrev.addEventListener('click', () => goTo(current - 1));
    if (btnNext) btnNext.addEventListener('click', () => goTo(current + 1));

    // Auto-play cada 5s
    setInterval(() => goTo(current + 1), 5000);
    goTo(0);
  });

});