/* Lievore Home Services – Main JS */
(function () {
  'use strict';

  // Mobile nav toggle
  const toggle = document.querySelector('.nav-toggle');
  const nav    = document.querySelector('.site-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      nav.classList.toggle('open');
      const open = nav.classList.contains('open');
      toggle.setAttribute('aria-expanded', open);
    });
    document.addEventListener('click', (e) => {
      if (!toggle.contains(e.target) && !nav.contains(e.target)) {
        nav.classList.remove('open');
      }
    });
  }

  // Active nav link
  const currentPath = window.location.pathname;
  document.querySelectorAll('.site-nav a').forEach((link) => {
    if (link.getAttribute('href') && currentPath.includes(link.getAttribute('href').replace(/\/$/, ''))) {
      if (link.getAttribute('href') !== '/') link.classList.add('current');
    }
  });

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((a) => {
    a.addEventListener('click', (e) => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // Contact form AJAX submission (works with wp_ajax or CF7 fallback)
  const form = document.getElementById('quote-form');
  if (form) {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const btn = form.querySelector('[type="submit"]');
      const success = document.getElementById('form-success');
      btn.disabled = true;
      btn.textContent = 'Sending…';

      const data = new FormData(form);
      data.append('action', 'lhs_quote_request');
      data.append('nonce', (window.lhsVars && window.lhsVars.nonce) || '');

      try {
        const res = await fetch((window.lhsVars && window.lhsVars.ajaxUrl) || '/wp-admin/admin-ajax.php', {
          method: 'POST',
          body: data,
        });
        const json = await res.json();
        if (json.success) {
          if (success) { success.classList.add('show'); }
          form.reset();
        } else {
          alert(json.data || 'Something went wrong. Please try again.');
        }
      } catch {
        alert('Unable to send. Please call or email us directly.');
      } finally {
        btn.disabled = false;
        btn.textContent = 'Send My Request';
      }
    });
  }

  // Animate elements into view
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );
    document.querySelectorAll('.service-card, .feature-item, .testimonial-card, .value-card').forEach((el) => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity .4s ease, transform .4s ease';
      observer.observe(el);
    });
  }
})();
