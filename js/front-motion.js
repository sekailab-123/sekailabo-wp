/* SEKAILABO' homepage: standalone, dependency-free motion and reel control. */
(function () {
  'use strict';

  function ready(callback) {
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', callback, { once: true });
    else callback();
  }

  ready(function () {
    var home = document.querySelector('.sl-home');
    if (!home) return;

    var media = window.matchMedia ? window.matchMedia('(prefers-reduced-motion: reduce)') : null;
    var reduced = media ? media.matches : false;
    var finePointer = window.matchMedia ? window.matchMedia('(pointer: fine)').matches : false;
    var hero = home.querySelector('.sl-hero');
    var storyboard = home.querySelector('[data-system-svg]');
    var dots = home.querySelector('[data-system-dots]');
    var grid = home.querySelector('[data-system-grid]');
    var network = home.querySelector('[data-system-network]');
    var shapes = home.querySelectorAll('[data-sl-depth]');
    var meter = home.querySelector('[data-sl-meter]');
    var marquee = home.querySelector('[data-sl-marquee]');
    var mogsCard = home.querySelector('.sl-project-mogs');
    var mogsMark = home.querySelector('.sl-project-mark');
    var contact = home.querySelector('.sl-contact');
    var contactSymbols = home.querySelectorAll('.sl-contact-symbol');
    var revealItems = home.querySelectorAll('[data-sl-reveal]');

    function clamp(value, min, max) { return Math.max(min, Math.min(max, value)); }
    function viewportHeight() { return window.innerHeight || document.documentElement.clientHeight; }
    function rangeProgress(element) {
      if (!element) return 0;
      var rect = element.getBoundingClientRect();
      var viewport = viewportHeight();
      return clamp((viewport - rect.top) / (viewport + rect.height), 0, 1);
    }

    // Split the hero headline into characters for the kinetic entrance.
    // Screen readers get the original sentence through aria-label.
    var PUNCTUATION = /[、。，．！？」』）]/;
    function splitHeadline(heading) {
      if (!heading || heading.dataset.slSplitDone) return;
      heading.dataset.slSplitDone = 'true';
      heading.setAttribute('aria-label', heading.textContent.replace(/\s+/g, ' ').trim());
      var index = 0;
      (function walk(node) {
        Array.prototype.slice.call(node.childNodes).forEach(function (child) {
          if (child.nodeType === 1) { child.setAttribute('aria-hidden', 'true'); walk(child); return; }
          if (child.nodeType !== 3) return;
          var fragment = document.createDocumentFragment();
          var previous = null;
          Array.prototype.forEach.call(child.textContent, function (character) {
            if (!character.trim()) { fragment.appendChild(document.createTextNode(character)); previous = null; return; }
            if (previous && PUNCTUATION.test(character)) { previous.textContent += character; return; }
            var span = document.createElement('span');
            span.className = 'sl-char';
            span.setAttribute('aria-hidden', 'true');
            span.style.setProperty('--sl-i', String(index++));
            span.textContent = character;
            fragment.appendChild(span);
            previous = span;
          });
          node.replaceChild(fragment, child);
        });
      }(heading));
    }

    // Scroll-linked reveal: CSS owns the animation, JS only flags visibility.
    var revealObserver = null;
    function markAllRevealed() { Array.prototype.forEach.call(revealItems, function (item) { item.classList.add('is-sl-in'); }); }
    function startReveals() {
      if (!('IntersectionObserver' in window)) { markAllRevealed(); return; }
      Array.prototype.forEach.call(revealItems, function (item) {
        var delay = Number(item.getAttribute('data-sl-delay') || 0);
        if (delay) item.style.setProperty('--sl-delay', delay + 'ms');
      });
      revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) { entry.target.classList.add('is-sl-in'); revealObserver.unobserve(entry.target); }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
      Array.prototype.forEach.call(revealItems, function (item) { revealObserver.observe(item); });
    }

    // One rAF loop drives the marquee, scroll meter and parallax layers.
    var pointer = { x: 0, y: 0, tx: 0, ty: 0 };
    var lastScrollY = window.pageYOffset;
    var scrollVelocity = 0;
    var marqueeOffset = 0;
    var marqueeDirection = 1;
    var marqueeWidth = 0;
    var marqueeVisible = true;
    var lastTime = 0;
    var frame = 0;

    function measureMarquee() {
      var set = marquee && marquee.firstElementChild;
      marqueeWidth = set ? set.offsetWidth : 0;
    }
    function paintMarquee(delta) {
      if (!marquee || !marqueeWidth || !marqueeVisible) return;
      var speed = 70 + Math.min(Math.abs(scrollVelocity) * 26, 900);
      marqueeOffset = (marqueeOffset + marqueeDirection * speed * delta) % marqueeWidth;
      if (marqueeOffset < 0) marqueeOffset += marqueeWidth;
      marquee.style.transform = 'translate3d(' + (-marqueeOffset).toFixed(1) + 'px,0,0) skewX(' + clamp(scrollVelocity * -0.35, -10, 10).toFixed(2) + 'deg)';
    }
    function paintParallax() {
      var scrollY = window.pageYOffset;
      var heroHeight = hero ? hero.offsetHeight : 0;
      var heroScroll = Math.min(scrollY, heroHeight);
      pointer.x += (pointer.tx - pointer.x) * 0.08;
      pointer.y += (pointer.ty - pointer.y) * 0.08;
      if (scrollY < heroHeight + 200) {
        Array.prototype.forEach.call(shapes, function (shape) {
          var depth = Number(shape.getAttribute('data-sl-depth')) || 1;
          var x = pointer.x * depth * 22;
          var y = pointer.y * depth * 22 + heroScroll * depth * 0.2;
          shape.style.translate = x.toFixed(1) + 'px ' + y.toFixed(1) + 'px';
        });
      }
      if (meter) {
        var max = document.documentElement.scrollHeight - viewportHeight();
        meter.style.transform = 'scaleX(' + (max > 0 ? clamp(scrollY / max, 0, 1) : 0).toFixed(4) + ')';
      }
      if (mogsMark && mogsCard) {
        var mogs = rangeProgress(mogsCard);
        mogsMark.style.translate = '0 ' + ((mogs - 0.5) * -120).toFixed(1) + 'px';
        mogsMark.style.rotate = ((mogs - 0.5) * -14).toFixed(2) + 'deg';
      }
      if (contact) {
        var c = rangeProgress(contact);
        Array.prototype.forEach.call(contactSymbols, function (symbol, i) {
          symbol.style.translate = '0 ' + ((c - 0.5) * (i ? 160 : -110)).toFixed(1) + 'px';
        });
      }
      if (storyboard) {
        var p = rangeProgress(storyboard);
        if (dots) { dots.style.transform = 'translate(' + Math.round(p * 105) + 'px,' + Math.round(p * -10) + 'px)'; dots.style.opacity = String(1 - p * 0.32); }
        if (grid) { grid.style.transform = 'translate(' + Math.round((1 - p) * -35) + 'px,0)'; grid.style.opacity = String(0.45 + p * 0.55); }
        if (network) { network.style.transform = 'translate(' + Math.round((1 - p) * 45) + 'px,0)'; network.style.opacity = String(0.45 + p * 0.55); }
      }
    }
    function tick(time) {
      frame = 0;
      if (reduced) return;
      var delta = lastTime ? Math.min((time - lastTime) / 1000, 0.05) : 0;
      lastTime = time;
      var scrollY = window.pageYOffset;
      var instant = scrollY - lastScrollY;
      lastScrollY = scrollY;
      if (instant) marqueeDirection = instant > 0 ? 1 : -1;
      scrollVelocity += (instant - scrollVelocity) * 0.18;
      paintMarquee(delta);
      paintParallax();
      frame = window.requestAnimationFrame(tick);
    }
    function startLoop() { if (!frame && !reduced) { lastTime = 0; frame = window.requestAnimationFrame(tick); } }
    function stopLoop() { if (frame) window.cancelAnimationFrame(frame); frame = 0; }

    function resetDecorations() {
      Array.prototype.forEach.call(shapes, function (shape) { shape.style.translate = ''; });
      Array.prototype.forEach.call(contactSymbols, function (symbol) { symbol.style.translate = ''; });
      if (mogsMark) { mogsMark.style.translate = ''; mogsMark.style.rotate = ''; }
      if (marquee) marquee.style.transform = '';
      if (meter) meter.style.transform = '';
      [dots, grid, network].forEach(function (part) { if (part) { part.style.transform = ''; part.style.opacity = ''; } });
    }

    if (hero && finePointer) {
      hero.addEventListener('pointermove', function (event) {
        var rect = hero.getBoundingClientRect();
        pointer.tx = (event.clientX - rect.left) / rect.width - 0.5;
        pointer.ty = (event.clientY - rect.top) / rect.height - 0.5;
      }, { passive: true });
      hero.addEventListener('pointerleave', function () { pointer.tx = 0; pointer.ty = 0; }, { passive: true });
    }
    if (marquee && 'IntersectionObserver' in window) {
      new IntersectionObserver(function (entries) { marqueeVisible = entries[0].isIntersecting; }).observe(marquee);
    }
    window.addEventListener('resize', measureMarquee, { passive: true });
    if (document.fonts && document.fonts.ready) document.fonts.ready.then(measureMarquee);

    function enableMotion() {
      splitHeadline(home.querySelector('[data-sl-split]'));
      measureMarquee();
      startReveals();
      home.classList.add('sl-motion-on');
      startLoop();
    }
    function disableMotion() {
      stopLoop();
      if (revealObserver) { revealObserver.disconnect(); revealObserver = null; }
      markAllRevealed();
      home.classList.remove('sl-motion-on');
      resetDecorations();
    }
    // Loading screen: progress eases toward 100 once the page has loaded (min 1.4s, max ~4s),
    // then colour panels sweep over it and the page's own entrance motion starts underneath.
    var LOADER_MIN_MS = 1400;
    var LOADER_MAX_MS = 4000;
    var LOADER_EXIT_MS = 1400;
    var LOADER_REVEAL_MS = 520;
    function runLoader(done) {
      var loader = document.querySelector('[data-sl-loader]');
      if (!loader) { done(); return; }
      if (reduced) { loader.parentNode.removeChild(loader); done(); return; }
      var bar = loader.querySelector('[data-sl-loader-bar]');
      var count = loader.querySelector('[data-sl-loader-count]');
      var root = document.documentElement;
      var start = window.performance ? performance.now() : Date.now();
      var loaded = document.readyState === 'complete';
      var progress = 0;
      var previousOverflow = root.style.overflow;
      root.style.overflow = 'hidden';
      if (!loaded) window.addEventListener('load', function () { loaded = true; }, { once: true });

      function finish() {
        loader.classList.add('is-sl-leaving');
        root.style.overflow = previousOverflow;
        window.setTimeout(done, LOADER_REVEAL_MS);
        window.setTimeout(function () { if (loader.parentNode) loader.parentNode.removeChild(loader); }, LOADER_EXIT_MS);
      }
      function step(now) {
        var elapsed = now - start;
        var ready = loaded || elapsed > LOADER_MAX_MS;
        var target = ready ? 100 : 88;
        progress = Math.min(target, progress + (target - progress) * 0.08 + 0.4);
        var shown = Math.min(progress, (elapsed / LOADER_MIN_MS) * 100);
        if (bar) bar.style.transform = 'scaleX(' + (shown / 100).toFixed(3) + ')';
        if (count) count.textContent = ('00' + Math.floor(shown)).slice(-3);
        if (shown >= 100) { finish(); return; }
        window.requestAnimationFrame(step);
      }
      window.requestAnimationFrame(step);
    }

    runLoader(function () { if (reduced) markAllRevealed(); else enableMotion(); });

    var videos = home.querySelectorAll('[data-reel-video]');
    function controlFor(video) { var figure = video.closest('.sl-project-reel'); return figure && figure.querySelector('[data-reel-control]'); }
    function updateControl(video) {
      var control = controlFor(video); if (!control) return;
      control.textContent = video.paused ? 'PLAY' : 'PAUSE';
      control.setAttribute('aria-label', video.paused ? '動画を再生' : '動画を一時停止');
    }
    function pause(video, automatic) {
      if (video.paused) return;
      // pause is asynchronous in some browsers. Keep this intent until the
      // pause event consumes it so an offscreen pause never becomes manual.
      if (automatic) video._slAutomaticPauseIntent = true;
      video.pause();
    }
    function play(video, automatic) {
      if (document.hidden || (reduced && automatic)) return;
      video._slAutoRequest = !!automatic;
      var result;
      try { result = video.play(); } catch (error) { updateControl(video); }
      if (result && result.catch) result.catch(function () { updateControl(video); });
    }
    Array.prototype.forEach.call(videos, function (video) {
      video.autoplay = false; video.removeAttribute('autoplay'); video.muted = true; video.defaultMuted = true; video.playsInline = true;
      video.addEventListener('play', function () { if (video._slAutoRequest) video._slAutoRequest = false; else video._slManualPause = false; updateControl(video); });
      video.addEventListener('pause', function () {
        var automaticPause = !!video._slAutomaticPauseIntent;
        video._slAutomaticPauseIntent = false;
        if (!automaticPause && !document.hidden) video._slManualPause = true;
        updateControl(video);
      });
      var control = controlFor(video);
      if (control) control.addEventListener('click', function () { if (video.paused) { video._slManualPause = false; play(video, false); } else { video._slManualPause = true; pause(video, false); } });
      updateControl(video);
    });
    function pauseAll() { Array.prototype.forEach.call(videos, function (video) { pause(video, true); }); }
    function syncVideos() {
      Array.prototype.forEach.call(videos, function (video) {
        var rect = video.getBoundingClientRect();
        var viewport = window.innerHeight || document.documentElement.clientHeight;
        var visible = Math.max(0, Math.min(rect.bottom, viewport) - Math.max(rect.top, 0));
        var ratio = rect.height ? visible / rect.height : 0;
        if (!reduced && !document.hidden && ratio >= 0.2 && !video._slManualPause) play(video, true);
        else if (ratio < 0.2 || reduced || document.hidden) pause(video, true);
      });
    }
    if ('IntersectionObserver' in window) {
      var videoObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          var video = entry.target;
          if (!reduced && !document.hidden && entry.isIntersecting && entry.intersectionRatio >= 0.2 && !video._slManualPause) play(video, true);
          else if (!entry.isIntersecting || entry.intersectionRatio === 0 || reduced || document.hidden) pause(video, true);
        });
      }, { threshold: [0, 0.2] });
      Array.prototype.forEach.call(videos, function (video) { videoObserver.observe(video); });
    }
    document.addEventListener('visibilitychange', function () { if (document.hidden) pauseAll(); else syncVideos(); });

    function motionPreferenceChanged(event) {
      reduced = event.matches;
      if (reduced) { disableMotion(); pauseAll(); }
      else { enableMotion(); syncVideos(); }
    }
    if (media) {
      if (media.addEventListener) media.addEventListener('change', motionPreferenceChanged);
      else if (media.addListener) media.addListener(motionPreferenceChanged);
    }
  });
}());
