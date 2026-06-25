/* املاک امید — ROYALE interactions */
(function () {
  'use strict';

  var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var toFa = function (n) {
    var fa = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    return String(n).replace(/\d/g, function (d) { return fa[d]; }).replace(/,/g, '٬');
  };

  document.addEventListener('DOMContentLoaded', function () {

    /* ---- Nav condense on scroll ---- */
    var nav = document.querySelector('.r-nav');
    if (nav) {
      var onScroll = function () { nav.classList.toggle('scrolled', window.scrollY > 40); };
      onScroll();
      window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ---- Mobile overlay menu (with focus management) ---- */
    var burger = document.querySelector('.r-burger');
    var overlay = document.getElementById('r-overlay');
    var closeBtn = overlay && overlay.querySelector('.r-overlay__close');
    var lastFocused = null;
    var FOCUSABLE = 'a[href], button:not([disabled])';
    var setMenu = function (open) {
      if (!overlay) return;
      overlay.classList.toggle('open', open);
      if (burger) burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.style.overflow = open ? 'hidden' : '';
      if (open) {
        lastFocused = document.activeElement;
        var first = overlay.querySelector(FOCUSABLE);
        if (first) first.focus();
      } else if (lastFocused && lastFocused.focus) {
        lastFocused.focus();
      }
    };
    if (burger && overlay) {
      burger.addEventListener('click', function () { setMenu(!overlay.classList.contains('open')); });
      if (closeBtn) closeBtn.addEventListener('click', function () { setMenu(false); });
      overlay.addEventListener('click', function (e) { if (e.target.tagName === 'A') setMenu(false); });
      document.addEventListener('keydown', function (e) {
        if (!overlay.classList.contains('open')) return;
        if (e.key === 'Escape') { setMenu(false); return; }
        if (e.key === 'Tab') {
          var items = overlay.querySelectorAll(FOCUSABLE);
          if (!items.length) return;
          var f = items[0], l = items[items.length - 1];
          if (e.shiftKey && document.activeElement === f) { e.preventDefault(); l.focus(); }
          else if (!e.shiftKey && document.activeElement === l) { e.preventDefault(); f.focus(); }
        }
      });
    }

    /* ---- Champagne bubbles (fills every bubble layer: hero + invitation) ---- */
    if (!reduced) {
      document.querySelectorAll('.r-hero__bubbles').forEach(function (bubbles) {
        var count = window.innerWidth < 600 ? 12 : 26;
        var frag = document.createDocumentFragment();
        for (var i = 0; i < count; i++) {
          var b = document.createElement('span');
          b.className = 'r-bubble';
          var size = 3 + Math.floor((i % 7) * 1.8) + (i % 3) * 2; // 3–18px, deterministic
          var dur = 7 + (i % 9);            // 7–15s
          var delay = -(i % 12) * 1.3;      // staggered, negative for instant fill
          var left = (i * 37 + 11) % 100;   // spread across width
          b.style.width = size + 'px';
          b.style.height = size + 'px';
          b.style.insetInlineStart = left + '%';
          b.style.animationDuration = dur + 's';
          b.style.animationDelay = delay + 's';
          frag.appendChild(b);
        }
        bubbles.appendChild(frag);
      });
    }

    /* ---- Scroll reveal ---- */
    var reveals = document.querySelectorAll('.r-reveal');
    if ('IntersectionObserver' in window && reveals.length) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) { if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); } });
      }, { threshold: 0.12 });
      reveals.forEach(function (el) { io.observe(el); });
    } else {
      reveals.forEach(function (el) { el.classList.add('in'); });
    }

    /* ---- Counters ---- */
    var counters = document.querySelectorAll('[data-count]');
    var run = function (el) {
      var target = parseFloat(el.getAttribute('data-count')), dur = 1800, start = null;
      var step = function (ts) {
        if (!start) start = ts;
        var p = Math.min((ts - start) / dur, 1);
        var v = Math.floor((1 - Math.pow(1 - p, 3)) * target);
        el.textContent = toFa(v.toLocaleString('en-US'));
        if (p < 1) requestAnimationFrame(step);
        else el.textContent = toFa(target.toLocaleString('en-US'));
      };
      requestAnimationFrame(step);
    };
    if ('IntersectionObserver' in window && counters.length) {
      var cio = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) { if (en.isIntersecting) { run(en.target); cio.unobserve(en.target); } });
      }, { threshold: 0.6 });
      counters.forEach(function (el) { cio.observe(el); });
    } else {
      counters.forEach(run);
    }

    /* ---- Collection horizontal scroller ---- */
    var scroller = document.querySelector('.r-scroller');
    if (scroller) {
      var step2 = function () {
        var card = scroller.querySelector('.r-estate');
        return card ? card.getBoundingClientRect().width + 24 : 320;
      };
      // RTL: "next" advances toward the inline-end (negative scrollLeft in RTL).
      var prev = document.querySelector('[data-scroll="prev"]');
      var next = document.querySelector('[data-scroll="next"]');
      if (prev) prev.addEventListener('click', function () { scroller.scrollBy({ left: step2(), behavior: 'smooth' }); });
      if (next) next.addEventListener('click', function () { scroller.scrollBy({ left: -step2(), behavior: 'smooth' }); });
    }

    /* ---- Demo forms ---- */
    document.querySelectorAll('form[data-demo]').forEach(function (f) {
      f.addEventListener('submit', function (e) {
        e.preventDefault();
        var note = f.querySelector('.form-note');
        if (note) note.hidden = false;
        f.reset();
      });
    });
  });
})();
