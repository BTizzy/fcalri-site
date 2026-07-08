/* Franklin Court — site interactions */

(function () {
  'use strict';

  // Set no-js class off, js-on so we can hide things without JS support
  document.documentElement.classList.remove('no-js');
  document.documentElement.classList.add('js');

  // Mark reveals that are within the initial viewport as immediate
  document.querySelectorAll('.reveal').forEach(function (el) {
    var r = el.getBoundingClientRect();
    if (r.top < window.innerHeight && r.bottom > 0) {
      el.classList.add('is-initial');
    }
  });

  // Mobile menu toggle
  var toggle = document.getElementById('navToggle');
  var menu = document.getElementById('mobileMenu');
  var closeBtn = document.getElementById('mobileClose');
  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      menu.classList.add('is-open');
      toggle.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    });
  }
  if (closeBtn && menu) {
    closeBtn.addEventListener('click', function () {
      menu.classList.remove('is-open');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    });
  }
  if (menu) {
    menu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        menu.classList.remove('is-open');
        if (toggle) toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });
  }

  // Scroll reveal
  if ('IntersectionObserver' in window) {
    var reveals = document.querySelectorAll('.reveal');
    if (reveals.length) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) {
            e.target.classList.add('is-visible');
            io.unobserve(e.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });
      reveals.forEach(function (el) { io.observe(el); });
    }
  } else {
    // Fallback: just show everything
    document.querySelectorAll('.reveal').forEach(function (el) { el.classList.add('is-visible'); });
  }

  // Mark current page in nav
  var path = location.pathname.replace(/\/$/, '').split('/').pop() || 'index';
  if (path === '' || path === 'index.html') path = 'index';
  document.querySelectorAll('.nav-links a, .mobile-menu > ul a').forEach(function (a) {
    var href = (a.getAttribute('href') || '').split('#')[0];
    var ah = href.replace(/^\.\//, '').replace(/^\//, '').replace(/\.html$/, '');
    if (ah === path || (path === 'index' && href === '/')) {
      a.classList.add('is-active');
    }
  });

  // Lightweight contact form submission stub
  document.querySelectorAll('form[data-ajax]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var btn = form.querySelector('button[type=submit]');
      if (btn) {
        var original = btn.textContent;
        btn.disabled = true;
        btn.textContent = 'Sending…';
        setTimeout(function () {
          btn.textContent = '✓ Sent — we will be in touch within 24 hours.';
          btn.disabled = false;
          setTimeout(function () { btn.textContent = original; }, 4000);
          form.reset();
        }, 900);
      }
    });
  });

})();
