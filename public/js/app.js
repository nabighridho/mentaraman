/* ============================================
   DESA MENTARAMAN - JavaScript Animations
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {
  initLoader();
  initNavbar();
  initScrollAnimations();
  initParallax();
  initMobileMenu();
  initSmoothScroll();
  initCounterAnimation();
  initParticles();
  initPageTransitions();
  highlightActiveNav();
  initInteractiveTitle();
  initTiltCards();
});

/* ---- LOADING SCREEN (Smart Transition Logic) ---- */
function initLoader() {
  const loader = document.getElementById('pageLoader');
  const bar = document.getElementById('loaderBar');
  const pct = document.getElementById('loaderPercentage');
  const transition = document.getElementById('pageTransition');
  if (!loader || !bar) return;

  // If this load was triggered by internal page navigation, skip loader and TV transitions
  if (sessionStorage.getItem('page_transitioning') === 'true') {
    sessionStorage.removeItem('page_transitioning'); // Clear flag immediately
    loader.style.display = 'none';
    document.body.style.overflow = '';
    if (transition) {
      transition.style.display = 'none';
      transition.classList.remove('entering');
    }
    return;
  }

  // Otherwise (first load, direct entry, or manual refresh), run loading screen and TV transition
  let progress = 0;
  const interval = setInterval(() => {
    progress += Math.random() * 15 + 10;
    if (progress >= 100) {
      progress = 100;
      clearInterval(interval);
      bar.style.width = '100%';
      if (pct) pct.textContent = '100%';
      setTimeout(() => {
        loader.classList.add('hidden');
        document.body.style.overflow = '';
        triggerTVOpen();
      }, 250);
    } else {
      bar.style.width = progress + '%';
      if (pct) pct.textContent = Math.round(progress) + '%';
    }
  }, 40);
}

function triggerTVOpen() {
  const transition = document.getElementById('pageTransition');
  if (!transition) return;
  
  // Slide open from closed (entering) state to open (leaving) state
  transition.classList.remove('entering');
  transition.classList.add('leaving');
  setTimeout(() => {
    transition.classList.remove('leaving');
  }, 800);
}

/* ---- PAGE TRANSITIONS (Internal Link Interception) ---- */
function initPageTransitions() {
  const transition = document.getElementById('pageTransition');
  if (!transition) return;

  // Intercept internal link clicks to set the transitioning flag
  document.querySelectorAll('a[href]').forEach(link => {
    const href = link.getAttribute('href');
    // Skip anchor links, external links, mailto, target blank
    if (!href || href.startsWith('#') || href.startsWith('http') || href.startsWith('mailto') || link.target === '_blank') return;

    link.addEventListener('click', function(e) {
      // Set the session flag so that the destination page knows to skip loader and TV
      sessionStorage.setItem('page_transitioning', 'true');
    });
  });
}

/* ---- NAVBAR SCROLL ---- */
function initNavbar() {
  const navbar = document.querySelector('.navbar');
  if (!navbar) return;

  const handleScroll = () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();
}

/* ---- SCROLL ANIMATIONS ---- */
function initScrollAnimations() {
  const elements = document.querySelectorAll('.animate-on-scroll, .fade-in-left, .fade-in-right, .scale-in, .rotate-in, .blur-in');
  if (!elements.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animated');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15,
    rootMargin: '0px 0px -50px 0px'
  });

  elements.forEach(el => observer.observe(el));
}

/* ---- PARALLAX HERO ---- */
function initParallax() {
  const heroBg = document.querySelector('.hero-bg');
  if (!heroBg) return;

  window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    const rate = scrolled * 0.3;
    heroBg.style.transform = `translateY(${rate}px)`;
  }, { passive: true });
}

/* ---- MOBILE MENU ---- */
function initMobileMenu() {
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');
  if (!hamburger || !navLinks) return;

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
    document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
  });

  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      navLinks.classList.remove('active');
      document.body.style.overflow = '';
    });
  });
}

/* ---- SMOOTH SCROLL ---- */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;

      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        const navHeight = document.querySelector('.navbar')?.offsetHeight || 80;
        const top = target.getBoundingClientRect().top + window.scrollY - navHeight;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });
}

/* ---- COUNTER ANIMATION ---- */
function initCounterAnimation() {
  const counters = document.querySelectorAll('.stat-number[data-target]');
  if (!counters.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
}

function animateCounter(el) {
  const target = parseInt(el.dataset.target, 10);
  const suffix = el.dataset.suffix || '';
  const duration = 2000;
  const start = performance.now();

  function update(now) {
    const elapsed = now - start;
    const progress = Math.min(elapsed / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    const current = Math.round(eased * target);
    el.textContent = current.toLocaleString('id-ID') + suffix;

    if (progress < 1) {
      requestAnimationFrame(update);
    }
  }

  requestAnimationFrame(update);
}

/* ---- FLOATING PARTICLES ---- */
function initParticles() {
  const container = document.querySelector('.hero-particles');
  if (!container) return;

  for (let i = 0; i < 20; i++) {
    const particle = document.createElement('div');
    particle.classList.add('particle');
    particle.style.left = Math.random() * 100 + '%';
    particle.style.width = (Math.random() * 4 + 2) + 'px';
    particle.style.height = particle.style.width;
    particle.style.animationDuration = (Math.random() * 15 + 10) + 's';
    particle.style.animationDelay = (Math.random() * 10) + 's';
    particle.style.opacity = Math.random() * 0.4 + 0.1;
    container.appendChild(particle);
  }
}

/* ---- ACTIVE NAV LINK HIGHLIGHT ---- */
function highlightActiveNav() {
  const path = window.location.pathname;
  document.querySelectorAll('.nav-links a').forEach(link => {
    const href = link.getAttribute('href');
    if (path === href || (href !== '/' && path.startsWith(href))) {
      link.classList.add('active');
    }
  });
}

/* ---- INTERACTIVE TITLE LETTERS ---- */
function initInteractiveTitle() {
  const title = document.querySelector('.hero-title-interactive');
  if (!title) return;

  const text = title.getAttribute('data-text') || title.textContent;
  title.innerHTML = '';

  text.split('').forEach(char => {
    const span = document.createElement('span');
    if (char === ' ') {
      span.classList.add('letter', 'space');
      span.innerHTML = '&nbsp;';
    } else {
      span.classList.add('letter');
      span.textContent = char;
    }
    title.appendChild(span);
  });
}

/* ---- 3D TILT CARDS ---- */
function initTiltCards() {
  document.querySelectorAll('.card, .kegiatan-card, .baca-card').forEach(card => {
    card.addEventListener('mousemove', e => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = (y - centerY) / centerY * -4;
      const rotateY = (x - centerX) / centerX * 4;
      card.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
}
