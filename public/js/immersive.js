/* ============================================
   IMMERSIVE PARALLAX & SCROLL SCRUB ENGINE
   Powered by Lenis, GSAP & ScrollTrigger
   ============================================ */

(function() {
  'use strict';

  // Check user preferences
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const isMobile = /Mobi|Android|iPhone/i.test(navigator.userAgent);

  document.addEventListener('DOMContentLoaded', () => {
    if (prefersReducedMotion) {
      document.body.classList.remove('loading-lock');
      return;
    }

    // Register GSAP ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Initialize Smooth Scrolling (Lenis)
    const lenis = initLenis();

    // Initialize Components
    initStars();
    initParallaxHero();
    initDualThemeSwitcher();
    initImageScroller();
    initCinematicReveals();
  });

  /* ---- LENIS SMOOTH SCROLL ---- */
  function initLenis() {
    const lenis = new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Custom exponential ease
      direction: 'vertical',
      gestureDirection: 'vertical',
      smooth: true,
      mouseMultiplier: 1.0,
      smoothTouch: false, // Keep native touch scroll on mobile to avoid lag
      touchMultiplier: 2.0,
      infinite: false,
    });

    // Synchronize Lenis with GSAP ScrollTrigger
    lenis.on('scroll', ScrollTrigger.update);

    gsap.ticker.add((time) => {
      lenis.raf(time * 1000);
    });

    gsap.ticker.lagSmoothing(0);

    return lenis;
  }

  /* ---- STARS POPULATION ---- */
  function initStars() {
    const container = document.querySelector('.layer-stars');
    if (!container) return;
    
    const starCount = isMobile ? 25 : 60;
    for (let i = 0; i < starCount; i++) {
      const star = document.createElement('div');
      star.className = 'star';
      const size = Math.random() * 2 + 0.6;
      star.style.cssText = `
        width: ${size}px;
        height: ${size}px;
        top: ${Math.random() * 70}%;
        left: ${Math.random() * 100}%;
        --dur: ${Math.random() * 4 + 2}s;
        animation-delay: ${Math.random() * 3}s;
        opacity: ${Math.random() * 0.7 + 0.2};
      `;
      container.appendChild(star);
    }
  }

  /* ---- PARALLAX HERO (GSAP SCROLLTRIGGER) ---- */
  function initParallaxHero() {
    const hero = document.querySelector('.parallax-hero');
    if (!hero) return;

    // Collect only layers that actually exist in the DOM
    const layerConfigs = [
      { sel: '.layer-sky', props: { backgroundPosition: '0% 100%' } },
      { sel: '.layer-stars', props: { yPercent: -15, opacity: 0.1 } },
      { sel: '.layer-sun', props: { yPercent: -35, scale: 0.75, opacity: 0.2 } },
      { sel: '.layer-clouds', props: { yPercent: -20, scale: 1.05 } },
      { sel: '.layer-mountains-far', props: { yPercent: -12, scale: 1.06 } },
      { sel: '.layer-mountains-near', props: { yPercent: -8, scale: 1.08 } },
      { sel: '.layer-village', props: { yPercent: -2, scale: 1.12 } },
      { sel: '.layer-beach', props: { yPercent: 2, scale: 1.15 } },
      { sel: '.layer-trees', props: { yPercent: 6, scale: 1.2 } },
      { sel: '.layer-mist', props: { opacity: 0.8 } },
    ];

    // Scroll-bound Parallax (no pinning — sections below naturally stack)
    layerConfigs.forEach(cfg => {
      const el = document.querySelector(cfg.sel);
      if (!el) return; // skip missing layers silently
      gsap.to(cfg.sel, {
        ...cfg.props,
        ease: 'none',
        scrollTrigger: {
          trigger: hero,
          start: 'top top',
          end: 'bottom top',
          scrub: true,
        }
      });
    });

    // Hero Text fade out on scroll
    gsap.to('.hero-content-overlay', {
      opacity: 0,
      scale: 0.95,
      yPercent: 15,
      ease: 'power1.out',
      scrollTrigger: {
        trigger: hero,
        start: 'top top',
        end: '50% top',
        scrub: true,
      }
    });

    // Interactive mouse move depth (only on Desktop for zero mobile lag)
    if (!isMobile) {
      let mouseX = 0, mouseY = 0;
      let targetX = 0, targetY = 0;

      document.addEventListener('mousemove', (e) => {
        targetX = (e.clientX / window.innerWidth - 0.5) * 2;
        targetY = (e.clientY / window.innerHeight - 0.5) * 2;
      }, { passive: true });

      const mouseLayerConfigs = [
        { sel: '.layer-stars', depth: 4 },
        { sel: '.layer-clouds', depth: -6 },
        { sel: '.layer-mountains-far', depth: -10 },
        { sel: '.layer-mountains-near', depth: -16 },
        { sel: '.layer-village', depth: -32 },
        { sel: '.layer-beach', depth: -40 },
        { sel: '.layer-trees', depth: -50 },
      ];

      // LERP loop for silky-smooth cursor depth
      gsap.ticker.add(() => {
        mouseX += (targetX - mouseX) * 0.08;
        mouseY += (targetY - mouseY) * 0.08;

        mouseLayerConfigs.forEach(cfg => {
          const el = document.querySelector(cfg.sel);
          if (!el) return;
          gsap.set(el, { x: mouseX * cfg.depth, y: mouseY * (cfg.depth * 0.5) });
        });

        // Sun gets special xPercent/yPercent treatment
        const sunEl = document.querySelector('.layer-sun');
        if (sunEl) gsap.set(sunEl, { xPercent: -50 + mouseX * 8, yPercent: -50 + mouseY * 4 });
      });
    }
  }

  /* ---- DUA SISI THEME SWITCHER ---- */
  function initDualThemeSwitcher() {
    const section = document.querySelector('.dual-theme-section');
    const track = document.querySelector('.theme-switcher-track');
    const pill = document.querySelector('.theme-switcher-pill');
    if (!section || !track || !pill) return;

    const btnAgraris = document.getElementById('btnThemeAgraris');
    const btnBahari = document.getElementById('btnThemeBahari');
    if (!btnAgraris || !btnBahari) return;

    // Function to slide the selection pill background
    const updatePillPosition = (activeBtn) => {
      const trackRect = track.getBoundingClientRect();
      const btnRect = activeBtn.getBoundingClientRect();
      const leftOffset = btnRect.left - trackRect.left;
      
      gsap.to(pill, {
        x: leftOffset - 6, // Adjust for track padding
        width: btnRect.width,
        duration: 0.5,
        ease: 'power2.out'
      });
    };

    // Initialize Switcher
    updatePillPosition(btnAgraris);
    window.addEventListener('resize', () => {
      const active = section.classList.contains('theme-bahari') ? btnBahari : btnAgraris;
      updatePillPosition(active);
    }, { passive: true });

    // Click Events
    btnAgraris.addEventListener('click', () => {
      if (!section.classList.contains('theme-agraris')) {
        section.classList.remove('theme-bahari');
        section.classList.add('theme-agraris');
        btnBahari.classList.remove('active');
        btnAgraris.classList.add('active');
        updatePillPosition(btnAgraris);

        // Micro-animating the section contents
        gsap.fromTo('.theme-agraris .card-left', 
          { scale: 0.98, opacity: 0.6 },
          { scale: 1, opacity: 1, duration: 0.6, ease: 'power2.out' }
        );
        gsap.to('.theme-agraris .card-right', { scale: 0.98, opacity: 0.45, duration: 0.6 });
      }
    });

    btnBahari.addEventListener('click', () => {
      if (!section.classList.contains('theme-bahari')) {
        section.classList.remove('theme-agraris');
        section.classList.add('theme-bahari');
        btnAgraris.classList.remove('active');
        btnBahari.classList.add('active');
        updatePillPosition(btnBahari);

        // Micro-animating the section contents
        gsap.fromTo('.theme-bahari .card-right', 
          { scale: 0.98, opacity: 0.6 },
          { scale: 1, opacity: 1, duration: 0.6, ease: 'power2.out' }
        );
        gsap.to('.theme-bahari .card-left', { scale: 0.98, opacity: 0.45, duration: 0.6 });
      }
    });
  }

  /* ---- IMAGE PANEL SCROLLER (GSAP + SCROLLTRIGGER) ---- */
  function initImageScroller() {
    const scrubSec = document.querySelector('.scrub-section');
    if (!scrubSec) return;

    const panels = gsap.utils.toArray('.scrub-panel');
    const captions = gsap.utils.toArray('.scrub-caption');

    // Crossfade panels on scroll
    panels.forEach((panel, i) => {
      if (i === 0) return; // First panel starts visible
      const start = (i / panels.length) * 100;
      const end = ((i + 0.3) / panels.length) * 100;

      gsap.to(panel, {
        opacity: 1,
        ease: 'none',
        scrollTrigger: {
          trigger: scrubSec,
          start: `top+=${start}% top`,
          end: `top+=${end}% top`,
          scrub: true
        }
      });

      // Subtle scale on previous panel
      if (panels[i - 1]) {
        gsap.to(panels[i - 1], {
          scale: 1.1,
          ease: 'none',
          scrollTrigger: {
            trigger: scrubSec,
            start: `top+=${start}% top`,
            end: `top+=${end + 20}% top`,
            scrub: true
          }
        });
      }
    });

    // Captions fade in/out per segment
    captions.forEach((cap, i) => {
      const segStart = i * 0.33;
      const segEnd = (i + 1) * 0.33;

      gsap.fromTo(cap,
        { opacity: 0, yPercent: 30 },
        {
          opacity: 1, yPercent: 0, ease: 'power2.out',
          scrollTrigger: {
            trigger: scrubSec,
            start: `top+=${segStart * 100}% top`,
            end: `top+=${(segStart + 0.12) * 100}% top`,
            scrub: true
          }
        }
      );

      gsap.to(cap, {
        opacity: 0, yPercent: -30, ease: 'power2.in',
        scrollTrigger: {
          trigger: scrubSec,
          start: `top+=${(segEnd - 0.1) * 100}% top`,
          end: `top+=${segEnd * 100}% top`,
          scrub: true
        }
      });
    });
  }

  /* ---- CINEMATIC REVEAL OBSERVER (GSAP ALTERNATIVE) ---- */
  function initCinematicReveals() {
    const reveals = gsap.utils.toArray('.cinema-reveal, .cinema-reveal-left, .cinema-reveal-right, .cinema-reveal-scale');
    reveals.forEach(el => {
      gsap.fromTo(el, 
        {
          opacity: 0,
          y: el.classList.contains('cinema-reveal-scale') ? 20 : (el.classList.contains('cinema-reveal-left') || el.classList.contains('cinema-reveal-right') ? 0 : 50),
          x: el.classList.contains('cinema-reveal-left') ? -60 : (el.classList.contains('cinema-reveal-right') ? 60 : 0),
          scale: el.classList.contains('cinema-reveal-scale') ? 0.95 : 1
        },
        {
          opacity: 1,
          x: 0,
          y: 0,
          scale: 1,
          duration: 1.0,
          ease: 'power3.out',
          scrollTrigger: {
            trigger: el,
            start: 'top 90%',
            toggleActions: 'play none none none',
            once: true
          }
        }
      );
    });
  }

})();
