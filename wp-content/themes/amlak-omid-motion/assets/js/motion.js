/* املاک امید — MOTION (پویا) interactions. All non-essential motion gated by reduced-motion. */
(function () {
  'use strict';

  var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var fine = !window.matchMedia || window.matchMedia('(pointer: fine)').matches;
  var rtl = (document.documentElement.getAttribute('dir') || 'rtl') === 'rtl';
  var clamp = function (v, a, b) { return Math.max(a, Math.min(b, v)); };
  var toFa = function (n) {
    var fa = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
    return String(n).replace(/\d/g, function (d) { return fa[d]; }).replace(/,/g, '٬');
  };

  document.addEventListener('DOMContentLoaded', function () {

    /* ---- Scroll progress + nav + back-to-top (single rAF-throttled handler) ---- */
    var progress = document.querySelector('.m-progress');
    var nav = document.querySelector('.m-nav');
    var toTop = document.querySelector('.m-top');
    var ticking = false;
    var docScrollRange = 0;
    var refreshRange = function () { docScrollRange = document.documentElement.scrollHeight - window.innerHeight; };
    var onScroll = function () {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(function () {
        var st = window.scrollY || window.pageYOffset;
        var p = docScrollRange > 0 ? st / docScrollRange : 0;
        if (progress) progress.style.transform = 'scaleX(' + p.toFixed(4) + ')';
        if (nav) nav.classList.toggle('scrolled', st > 30);
        if (toTop) toTop.classList.toggle('show', st > 700);
        if (pinned) updateShowcase(st);
        ticking = false;
      });
    };

    /* ---- Mobile overlay (with focus management) ---- */
    var burger = document.querySelector('.m-burger');
    var overlay = document.getElementById('m-overlay');
    var lastFocus = null;
    var focusables = function () {
      return overlay ? Array.prototype.filter.call(
        overlay.querySelectorAll('a[href], button:not([disabled])'),
        function (el) { return el.offsetParent !== null; }
      ) : [];
    };
    var setMenu = function (open) {
      if (!overlay) return;
      overlay.classList.toggle('open', open);
      if (burger) burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.style.overflow = open ? 'hidden' : '';
      if (open) {
        lastFocus = document.activeElement;
        var f = focusables();
        if (f.length) f[0].focus();
      } else if (lastFocus && typeof lastFocus.focus === 'function') {
        lastFocus.focus();
        lastFocus = null;
      }
    };
    if (burger && overlay) {
      burger.addEventListener('click', function () { setMenu(!overlay.classList.contains('open')); });
      overlay.addEventListener('click', function (e) { if (e.target.tagName === 'A') setMenu(false); });
      document.addEventListener('keydown', function (e) {
        if (!overlay.classList.contains('open')) return;
        if (e.key === 'Escape') { setMenu(false); return; }
        if (e.key === 'Tab') {
          var f = focusables();
          if (!f.length) { e.preventDefault(); return; }
          var first = f[0], last = f[f.length - 1];
          if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
          else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
        }
      });
    }

    /* ---- Hero spotlight (cursor) ---- */
    var hero = document.querySelector('.m-hero');
    var spot = hero && hero.querySelector('.m-hero__spot');
    if (hero && spot && fine && !reduced) {
      var smx = 0, smy = 0, spotTick = false;
      hero.addEventListener('mousemove', function (e) {
        smx = e.clientX; smy = e.clientY;
        if (spotTick) return;
        spotTick = true;
        requestAnimationFrame(function () {
          var r = hero.getBoundingClientRect();
          spot.style.setProperty('--mx', (smx - r.left) + 'px');
          spot.style.setProperty('--my', (smy - r.top) + 'px');
          spotTick = false;
        });
      });
    }

    /* ---- Kinetic split-text headline ---- */
    document.querySelectorAll('[data-split]').forEach(function (el) {
      if (el.dataset.done) return;
      el.dataset.done = '1';
      var words = el.textContent.trim().split(/\s+/);
      el.textContent = '';
      words.forEach(function (w, i) {
        var word = document.createElement('span');
        word.className = 'm-word';
        var inner = document.createElement('span');
        inner.textContent = w;
        inner.style.transitionDelay = (i * 0.07) + 's';
        word.appendChild(inner);
        el.appendChild(word);
        el.appendChild(document.createTextNode(' '));
      });
      if (reduced) { el.classList.add('in'); }
      else { requestAnimationFrame(function () { requestAnimationFrame(function () { el.classList.add('in'); }); }); }
    });

    /* ---- Rotating words ---- */
    var rotator = document.querySelector('.m-hero__rotator');
    if (rotator && !reduced) {
      var items = rotator.querySelectorAll('span');
      if (items.length > 1) {
        var ri = 0; items[0].classList.add('active');
        setInterval(function () {
          items[ri].classList.remove('active');
          ri = (ri + 1) % items.length;
          items[ri].classList.add('active');
        }, 2400);
      } else if (items.length) { items[0].classList.add('active'); }
    } else if (rotator) {
      var first = rotator.querySelector('span'); if (first) first.classList.add('active');
    }

    /* ---- Reveal + stagger ---- */
    var reveals = document.querySelectorAll('.m-reveal, [data-stagger]');
    if ('IntersectionObserver' in window && reveals.length) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) { if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); } });
      }, { threshold: 0.12 });
      reveals.forEach(function (el) { io.observe(el); });
    } else {
      reveals.forEach(function (el) { el.classList.add('in'); });
    }

    /* ---- Count-up + progress rings ---- */
    var counters = document.querySelectorAll('[data-count]');
    var runCount = function (el) {
      if (reduced) { el.textContent = toFa(parseFloat(el.getAttribute('data-count')).toLocaleString('en-US')); return; }
      var target = parseFloat(el.getAttribute('data-count')), dur = 1700, start = null;
      var stepFn = function (ts) {
        if (!start) start = ts;
        var p = Math.min((ts - start) / dur, 1);
        var v = Math.floor((1 - Math.pow(1 - p, 3)) * target);
        el.textContent = toFa(v.toLocaleString('en-US'));
        if (p < 1) requestAnimationFrame(stepFn); else el.textContent = toFa(target.toLocaleString('en-US'));
      };
      requestAnimationFrame(stepFn);
    };
    var rings = document.querySelectorAll('.m-ring .bar');
    var setRing = function (bar) {
      var pct = clamp(parseFloat(bar.getAttribute('data-pct')) || 100, 0, 100);
      var r = bar.r.baseVal.value, c = 2 * Math.PI * r;
      bar.style.strokeDasharray = c;
      bar.style.strokeDashoffset = reduced ? c * (1 - pct / 100) : c;
      if (!reduced) requestAnimationFrame(function () { bar.style.strokeDashoffset = c * (1 - pct / 100); });
    };
    if ('IntersectionObserver' in window) {
      var countObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) { if (en.isIntersecting) { runCount(en.target); countObs.unobserve(en.target); } });
      }, { threshold: 0.6 });
      counters.forEach(function (el) { countObs.observe(el); });

      var statObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (!en.isIntersecting) return;
          en.target.classList.add('in');
          en.target.querySelectorAll('.m-ring .bar').forEach(setRing);
          statObs.unobserve(en.target);
        });
      }, { threshold: 0.4 });
      document.querySelectorAll('.m-stat').forEach(function (s) { statObs.observe(s); });
    } else {
      counters.forEach(runCount); rings.forEach(setRing);
    }

    /* ---- Animated SVG timeline draw ---- */
    document.querySelectorAll('.m-timeline .draw').forEach(function (path) {
      var len = path.getTotalLength();
      path.style.strokeDasharray = len;
      path.style.strokeDashoffset = reduced ? 0 : len;
    });
    var tl = document.querySelector('.m-timeline');
    if (tl && 'IntersectionObserver' in window && !reduced) {
      var tio = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (en.isIntersecting) {
            en.target.querySelectorAll('.draw').forEach(function (p) { p.style.strokeDashoffset = 0; });
            tio.unobserve(en.target);
          }
        });
      }, { threshold: 0.4 });
      tio.observe(tl);
    }

    /* ---- Scroll-pinned horizontal showcase ---- */
    var showcase = document.querySelector('.m-showcase');
    var track = showcase && showcase.querySelector('.m-track');
    var pinned = false, overflowPx = 0, showcaseTop = 0;
    var measureShowcase = function () {
      if (!showcase || !track) return;
      var enable = window.innerWidth > 820 && !reduced;
      if (!enable) {
        pinned = false; showcase.classList.remove('is-pinned');
        showcase.style.height = ''; track.style.transform = '';
        return;
      }
      // measure against an un-pinned track to get true content width
      showcase.classList.remove('is-pinned'); showcase.style.height = '';
      overflowPx = Math.max(0, track.scrollWidth - track.clientWidth);
      if (overflowPx < 40) { pinned = false; track.style.transform = ''; return; }
      pinned = true;
      showcase.classList.add('is-pinned');
      showcase.style.height = (window.innerHeight + overflowPx) + 'px';
      showcaseTop = showcase.getBoundingClientRect().top + (window.scrollY || window.pageYOffset);
      updateShowcase(window.scrollY || window.pageYOffset);
    };
    var updateShowcase = function (st) {
      if (!pinned) return;
      var p = clamp((st - showcaseTop) / overflowPx, 0, 1);
      var x = overflowPx * p;
      track.style.transform = 'translateX(' + (rtl ? x : -x) + 'px)';
    };

    /* ---- Card tilt (rAF-coalesced) ---- */
    if (fine && !reduced) {
      document.querySelectorAll('[data-tilt]').forEach(function (card) {
        var rect = null, raf = 0, mx = 0, my = 0;
        card.addEventListener('mouseenter', function () { rect = card.getBoundingClientRect(); });
        card.addEventListener('mousemove', function (e) {
          mx = e.clientX; my = e.clientY;
          if (raf) return;
          raf = requestAnimationFrame(function () {
            raf = 0;
            if (!rect) rect = card.getBoundingClientRect();
            var rx = ((my - rect.top) / rect.height - 0.5) * -8;
            var ry = ((mx - rect.left) / rect.width - 0.5) * 8;
            card.style.transform = 'perspective(800px) rotateX(' + rx + 'deg) rotateY(' + ry + 'deg) translateY(-6px)';
          });
        });
        card.addEventListener('mouseleave', function () { if (raf) { cancelAnimationFrame(raf); raf = 0; } card.style.transform = ''; });
      });

      /* ---- Magnetic buttons (rAF-coalesced) ---- */
      document.querySelectorAll('.m-magnetic').forEach(function (btn) {
        var rect = null, raf = 0, mx = 0, my = 0;
        btn.addEventListener('mouseenter', function () { rect = btn.getBoundingClientRect(); });
        btn.addEventListener('mousemove', function (e) {
          mx = e.clientX; my = e.clientY;
          if (raf) return;
          raf = requestAnimationFrame(function () {
            raf = 0;
            if (!rect) rect = btn.getBoundingClientRect();
            btn.style.transform = 'translate(' + (mx - rect.left - rect.width / 2) * 0.3 + 'px,' + (my - rect.top - rect.height / 2) * 0.4 + 'px)';
          });
        });
        btn.addEventListener('mouseleave', function () { if (raf) { cancelAnimationFrame(raf); raf = 0; } btn.style.transform = ''; });
      });
    }

    /* ---- Testimonials rotation ---- */
    var tst = document.querySelector('.m-tst');
    if (tst) {
      var slides = tst.querySelectorAll('.m-tst__item');
      var dots = tst.querySelectorAll('.m-tst__dots button');
      var ti = 0, timer = null;
      var show = function (n) {
        slides[ti].classList.remove('active'); if (dots[ti]) { dots[ti].classList.remove('active'); dots[ti].removeAttribute('aria-current'); }
        ti = (n + slides.length) % slides.length;
        slides[ti].classList.add('active'); if (dots[ti]) { dots[ti].classList.add('active'); dots[ti].setAttribute('aria-current', 'true'); }
      };
      if (slides.length) {
        slides[0].classList.add('active'); if (dots[0]) dots[0].classList.add('active');
        dots.forEach(function (d, i) { d.addEventListener('click', function () { show(i); restart(); }); });
        var stop = function () { clearInterval(timer); timer = null; };
        var restart = function () { if (reduced) return; stop(); timer = setInterval(function () { show(ti + 1); }, 5000); };
        // WCAG 2.2.2: pause auto-rotation on hover and keyboard focus.
        tst.addEventListener('mouseenter', stop);
        tst.addEventListener('mouseleave', restart);
        tst.addEventListener('focusin', stop);
        tst.addEventListener('focusout', restart);
        restart();
      }
    }

    /* ---- Back to top ---- */
    if (toTop) toTop.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: reduced ? 'auto' : 'smooth' }); });

    /* ---- Demo forms ---- */
    document.querySelectorAll('form[data-demo]').forEach(function (f) {
      f.addEventListener('submit', function (e) {
        e.preventDefault();
        var note = f.querySelector('.m-cta__note, .form-note');
        if (note) note.hidden = false;
        f.reset();
      });
    });

    /* ---- Wire up scroll + resize ---- */
    // Re-sync after layout settles (font swap / full load) so the pinned-scroll
    // geometry and progress range are measured against the final layout.
    var resync = function () { measureShowcase(); refreshRange(); onScroll(); };
    resync();
    if (document.fonts && document.fonts.ready) { document.fonts.ready.then(resync); }
    window.addEventListener('load', resync);
    window.addEventListener('scroll', onScroll, { passive: true });
    var rt;
    window.addEventListener('resize', function () { clearTimeout(rt); rt = setTimeout(resync, 200); });
  });
})();
