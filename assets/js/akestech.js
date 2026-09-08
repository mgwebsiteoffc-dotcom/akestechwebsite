/* ==========================================================================
   AKESTECH — MOTION & INTERACTION LAYER
   Vanilla JS, no dependencies. Everything degrades gracefully and respects
   prefers-reduced-motion.
   ========================================================================== */
(function () {
  'use strict';

  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ------------------------------------------------------------------
     1. Scroll progress bar
     ------------------------------------------------------------------ */
  var bar = document.createElement('div');
  bar.className = 'ak-progress';
  document.body.appendChild(bar);

  /* ------------------------------------------------------------------
     2. Scroll reveal (sections, cards, steps)
     ------------------------------------------------------------------ */
  var revealEls = document.querySelectorAll('.ak-reveal, .ak-words');
  if (reduce || !('IntersectionObserver' in window)) {
    revealEls.forEach(function (el) { el.classList.add('is-in'); });
  } else {
    var revealIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) { en.target.classList.add('is-in'); revealIO.unobserve(en.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { revealIO.observe(el); });
  }

  /* ------------------------------------------------------------------
     3. Word-by-word heading reveal
     ------------------------------------------------------------------ */
  if (!reduce) {
    document.querySelectorAll('.ak-words').forEach(function (h) {
      if (h.dataset.split === '1') return;
      var words = h.textContent.trim().split(/\s+/);
      if (!words.length) return;
      h.dataset.split = '1';
      h.innerHTML = words.map(function (w, i) {
        return '<span class="ak-word"><i style="transition-delay:' + (i * 55) + 'ms">' +
               w.replace(/&/g, '&amp;').replace(/</g, '&lt;') + '</i></span>';
      }).join(' ');
      h.setAttribute('aria-label', words.join(' '));
    });
  }

  /* ------------------------------------------------------------------
     4. Animated counters
     ------------------------------------------------------------------ */
  var counters = document.querySelectorAll('[data-ak-count]');
  if (counters.length) {
    if (reduce || !('IntersectionObserver' in window)) {
      counters.forEach(function (el) {
        el.textContent = (el.dataset.akPrefix || '') + el.dataset.akCount + (el.dataset.akSuffix || '');
      });
    } else {
      var countIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (!en.isIntersecting) return;
          var el = en.target;
          countIO.unobserve(el);
          var target = parseFloat(el.dataset.akCount) || 0;
          var prefix = el.dataset.akPrefix || '';
          var suffix = el.dataset.akSuffix || '';
          var dur = 1500, start = null;
          function tick(ts) {
            if (start === null) start = ts;
            var p = Math.min((ts - start) / dur, 1);
            var eased = 1 - Math.pow(1 - p, 3);
            var val = (target % 1 !== 0) ? (target * eased).toFixed(1) : Math.round(target * eased);
            el.textContent = prefix + val + suffix;
            if (p < 1) requestAnimationFrame(tick);
            else el.textContent = prefix + target + suffix;
          }
          requestAnimationFrame(tick);
        });
      }, { threshold: 0.4 });
      counters.forEach(function (c) { countIO.observe(c); });
    }
  }

  /* ------------------------------------------------------------------
     5. Cursor spotlight on .ak-spot elements
     ------------------------------------------------------------------ */
  if (!reduce && window.matchMedia('(hover: hover)').matches) {
    /* ---- Smooth glow that follows the cursor across card grids ----
       Each card keeps a target glow + target highlight position; every frame we
       ease the current values toward the target, so sliding from one box to the
       next looks like one continuous light instead of an on/off switch. */
    var spots = [].slice.call(document.querySelectorAll('.ak-spot'));
    if (spots.length) {
      spots.forEach(function (el) {
        el._tx = 50; el._ty = 50;   /* target highlight position (%) */
        el._cx = 50; el._cy = 50;   /* eased highlight position (%)  */
        el._tg = 0;  el._g = 0;     /* target / eased glow strength   */
        el.classList.add('ak-spot--js');
      });

      var mx = -9999, my = -9999, raf = null;

      function frame() {
        raf = null;
        var moving = false;
        for (var i = 0; i < spots.length; i++) {
          var el = spots[i];
          var r = el.getBoundingClientRect();
          if (!r.width || !r.height) continue;

          /* distance from the cursor to the card's rectangle (0 when inside) */
          var dx = Math.max(r.left - mx, 0, mx - r.right);
          var dy = Math.max(r.top - my, 0, my - r.bottom);
          var dist = Math.sqrt(dx * dx + dy * dy);

          /* proximity falloff — neighbours light up slightly as you approach */
          el._tg = Math.min(1, Math.max(0, 1 - dist / 340) * 1.15);
          el._tx = ((mx - r.left) / r.width) * 100;
          el._ty = ((my - r.top) / r.height) * 100;

          el._cx += (el._tx - el._cx) * 0.14;
          el._cy += (el._ty - el._cy) * 0.14;
          el._g  += (el._tg - el._g) * 0.11;

          if (Math.abs(el._g - el._tg) > 0.003 ||
              Math.abs(el._cx - el._tx) > 0.05 ||
              Math.abs(el._cy - el._ty) > 0.05) moving = true;

          el.style.setProperty('--mx', el._cx.toFixed(2) + '%');
          el.style.setProperty('--my', el._cy.toFixed(2) + '%');
          el.style.setProperty('--glow', el._g.toFixed(3));
        }
        if (moving) raf = requestAnimationFrame(frame);
      }

      window.addEventListener('pointermove', function (e) {
        mx = e.clientX; my = e.clientY;
        if (!raf) raf = requestAnimationFrame(frame);
      }, { passive: true });

      window.addEventListener('scroll', function () {
        if (!raf) raf = requestAnimationFrame(frame);
      }, { passive: true });
    }

    /* Subtle magnetic lift on primary buttons */
    document.querySelectorAll('.ak-btn--dark, .ak-navcta').forEach(function (btn) {
      btn.addEventListener('pointermove', function (e) {
        var r = btn.getBoundingClientRect();
        var x = (e.clientX - r.left - r.width / 2) / r.width;
        var y = (e.clientY - r.top - r.height / 2) / r.height;
        btn.style.transform = 'translate(' + (x * 5).toFixed(2) + 'px,' + (y * 4).toFixed(2) + 'px)';
      });
      btn.addEventListener('pointerleave', function () { btn.style.transform = ''; });
    });
  }

  /* ------------------------------------------------------------------
     6. Logo marquee — duplicate track for a seamless loop
     ------------------------------------------------------------------ */
  document.querySelectorAll('.ak-marquee__track').forEach(function (t) {
    if (t.dataset.dup === '1') return;
    t.dataset.dup = '1';
    t.innerHTML += t.innerHTML;
  });

  /* ------------------------------------------------------------------
     7. Accordion rows (FAQ + service rows)
     ------------------------------------------------------------------ */
  document.querySelectorAll('.ak-acc').forEach(function (group) {
    var rows = group.querySelectorAll('.ak-row');
    rows.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var body = btn.nextElementSibling;
        var open = btn.classList.contains('is-open');
        rows.forEach(function (b) {
          b.classList.remove('is-open');
          if (b.nextElementSibling) b.nextElementSibling.style.maxHeight = null;
        });
        if (!open && body) { btn.classList.add('is-open'); body.style.maxHeight = body.scrollHeight + 'px'; }
      });
    });
  });

  /* ------------------------------------------------------------------
     8. Mobile navigation
     ------------------------------------------------------------------ */
  var burger = document.getElementById('akBurger');
  var mnav = document.getElementById('akMnav');
  if (burger && mnav) {
    burger.addEventListener('click', function () {
      var open = mnav.classList.toggle('is-open');
      burger.classList.toggle('is-open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    mnav.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        mnav.classList.remove('is-open');
        burger.classList.remove('is-open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* ------------------------------------------------------------------
     9. Sticky nav shadow
     ------------------------------------------------------------------ */
  var nav = document.querySelector('.ak-nav');
  if (nav) {
    var lastY = -1;
    window.addEventListener('scroll', function () {
      var y = window.scrollY;
      if ((y > 20) !== (lastY > 20)) nav.style.borderBottomColor = y > 20 ? '#c9c9c3' : '';
      lastY = y;
      var h = document.documentElement.scrollHeight - window.innerHeight;
      bar.style.width = (h > 0 ? (y / h) * 100 : 0) + '%';
    }, { passive: true });
  } else {
    window.addEventListener('scroll', function () {
      var h = document.documentElement.scrollHeight - window.innerHeight;
      bar.style.width = (h > 0 ? (window.scrollY / h) * 100 : 0) + '%';
    }, { passive: true });
  }

  /* ------------------------------------------------------------------
     10a. Sequential typewriter for hero headings  ([data-ak-seq])
          Renders one .ak-typeline at a time with a live caret. The full
          text stays in the HTML source, so crawlers always read it.
     ------------------------------------------------------------------ */
  if (!reduce) {
    document.querySelectorAll('[data-ak-seq]').forEach(function (seq) {
      var lines = [].slice.call(seq.querySelectorAll('.ak-typeline'));
      if (!lines.length) return;

      var texts = lines.map(function (l) { return l.textContent.replace(/\s+/g, ' ').trim(); });
      var full = texts.join(' ');
      var speed = parseInt(seq.dataset.akSpeed || '72', 10);
      var gap = parseInt(seq.dataset.akGap || '170', 10);
      var start = parseInt(seq.dataset.akStart || '320', 10);

      /* keep the heading readable to screen readers while it types */
      seq.setAttribute('aria-label', full);
      lines.forEach(function (l) { l.textContent = ''; });

      var caret = document.createElement('span');
      caret.className = 'ak-caret';
      var li = 0, ci = 0;

      function typeLine() {
        if (li >= lines.length) return;
        var line = lines[li];
        line.classList.add('is-typing');
        line.appendChild(caret);

        function step() {
          ci++;
          line.textContent = texts[li].slice(0, ci);
          line.appendChild(caret);
          if (ci < texts[li].length) return setTimeout(step, speed);
          line.classList.remove('is-typing');
          line.classList.add('is-done');
          li++; ci = 0;
          if (li < lines.length) return setTimeout(typeLine, gap);
        }
        setTimeout(step, 80);
      }

      setTimeout(typeLine, start);
    });
  }

  /* ------------------------------------------------------------------
     10b. Typing effect for [data-ak-type]  (single element, looping)
     ------------------------------------------------------------------ */
  if (!reduce) {
    document.querySelectorAll('[data-ak-type]').forEach(function (el) {
      var phrases = (el.dataset.akType || '').split('|');
      if (!phrases.length || !phrases[0]) return;
      var pi = 0, ci = 0, deleting = false;
      var caret = document.createElement('span');
      caret.className = 'ak-caret';
      el.textContent = '';
      el.appendChild(caret);
      (function loop() {
        var phrase = phrases[pi % phrases.length];
        if (!deleting) {
          ci++;
          el.insertBefore(document.createTextNode(phrase.charAt(0)), caret);
          el.textContent = phrase.slice(0, ci);
          el.appendChild(caret);
          if (ci === phrase.length) { deleting = true; return setTimeout(loop, 1900); }
          return setTimeout(loop, 55);
        }
        ci--;
        el.textContent = phrase.slice(0, ci);
        el.appendChild(caret);
        if (ci === 0) { deleting = false; pi++; return setTimeout(loop, 380); }
        setTimeout(loop, 28);
      })();
    });
  }

  /* ------------------------------------------------------------------
     11. Lead forms — post to save-enquiry.php, WhatsApp fallback
     ------------------------------------------------------------------ */
  document.querySelectorAll('form[data-ak-form]').forEach(function (form) {
    var msg = form.querySelector('.ak-msg');
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      var name = (form.elements.name || {}).value ? form.elements.name.value.trim() : '';
      var phone = (form.elements.phone || {}).value ? form.elements.phone.value.trim() : '';
      var email = (form.elements.email || {}).value ? form.elements.email.value.trim() : '';
      var business = (form.elements.business || {}).value ? form.elements.business.value : '';
      var plan = (form.elements.plan || {}).value ? form.elements.plan.value : '';

      function fail(t) { if (msg) { msg.className = 'ak-msg ak-msg--err'; msg.textContent = t; } }

      if (!name || !phone || !email) return fail('Please fill in your name, phone and email.');
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return fail('Please enter a valid email address.');

      var payload = {
        name: name, phone: phone, email: email, business: business, plan: plan,
        timestamp: new Date().toISOString(),
        date: new Date().toLocaleDateString('en-IN'),
        time: new Date().toLocaleTimeString('en-IN'),
        source: form.dataset.akForm || 'website'
      };

      var btn = form.querySelector('button[type=submit]');
      var original = btn ? btn.innerHTML : '';
      if (btn) { btn.disabled = true; btn.textContent = 'Sending…'; }

      var done = function (ok, text, openWa) {
        if (msg) { msg.className = 'ak-msg ' + (ok ? 'ak-msg--ok' : 'ak-msg--err'); msg.textContent = text; }
        if (ok) {
          form.reset();
          if (typeof window.fbq === 'function') window.fbq('track', 'Lead');
          if (typeof window.gtag === 'function') window.gtag('event', 'generate_lead', { form_name: form.dataset.akForm || 'website' });
        }
        if (openWa) {
          var t = encodeURIComponent('Hi AKESTECH, I\'d like to discuss a project.\nName: ' + name +
            '\nPhone: ' + phone + '\nEmail: ' + email + (business ? '\nNeed: ' + business : ''));
          setTimeout(function () { window.open('https://wa.me/917275013628?text=' + t, '_blank'); }, 700);
        }
        if (btn) { btn.disabled = false; btn.innerHTML = original; }
      };

      fetch(form.getAttribute('action') || 'save-enquiry.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
        body: JSON.stringify(payload)
      })
        .then(function (r) { return r.json().catch(function () { return null; }); })
        .then(function (d) {
          if (d && d.success === false) throw new Error('server');
          done(true, 'Thanks — your enquiry is in. We\'ll get back to you within one business day.', false);
        })
        .catch(function () {
          done(true, 'Thanks! Opening WhatsApp so we can confirm your enquiry.', true);
        });
    });
  });

  /* ------------------------------------------------------------------
     12. Cookie consent (shared with existing layout logic)
     ------------------------------------------------------------------ */
  var popup = document.getElementById('cookie-popup');
  if (popup) {
    try {
      if (!localStorage.getItem('cookie_consent')) setTimeout(function () { popup.classList.remove('hidden'); }, 1200);
      var acc = document.getElementById('cookie-accept');
      var rej = document.getElementById('cookie-reject');
      if (acc) acc.onclick = function () { localStorage.setItem('cookie_consent', 'accepted'); popup.classList.add('hidden'); };
      if (rej) rej.onclick = function () { localStorage.setItem('cookie_consent', 'rejected'); popup.classList.add('hidden'); };
    } catch (e) { /* storage blocked — ignore */ }
  }
})();
