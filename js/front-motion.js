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
    var scheduled = false;
    var hero = home.querySelector('.sl-hero');
    var storyboard = home.querySelector('[data-system-svg]');
    var dots = home.querySelector('[data-system-dots]');
    var grid = home.querySelector('[data-system-grid]');
    var network = home.querySelector('[data-system-network]');
    var shapes = home.querySelectorAll('.sl-hero-shape');

    function clamp(value) { return Math.max(0, Math.min(1, value)); }
    function rangeProgress(element) {
      if (!element) return 0;
      var rect = element.getBoundingClientRect();
      var viewport = window.innerHeight || document.documentElement.clientHeight;
      return clamp((viewport - rect.top) / (viewport + rect.height));
    }
    function setTransform(element, value) { if (element) element.style.transform = value; }
    function resetDecorations() {
      Array.prototype.forEach.call(shapes, function (shape) { shape.style.transform = ''; });
      [dots, grid, network].forEach(function (part) { if (part) { part.style.transform = ''; part.style.opacity = ''; } });
    }
    function paint() {
      scheduled = false;
      if (reduced) { resetDecorations(); return; }
      var heroProgress = rangeProgress(hero);
      if (shapes[0]) setTransform(shapes[0], 'translate3d(0,' + Math.round(heroProgress * -34) + 'px,0) rotate(' + Math.round(heroProgress * 38) + 'deg)');
      if (shapes[1]) setTransform(shapes[1], 'translate3d(' + Math.round(heroProgress * 48) + 'px,0,0) rotate(' + Math.round(-28 + heroProgress * 32) + 'deg)');
      if (shapes[2]) setTransform(shapes[2], 'translate3d(0,' + Math.round(heroProgress * 28) + 'px,0) rotate(' + Math.round(18 + heroProgress * 90) + 'deg)');
      if (shapes[3]) setTransform(shapes[3], 'translate3d(' + Math.round(heroProgress * -38) + 'px,0,0) rotate(-35deg)');
      var p = rangeProgress(storyboard);
      setTransform(dots, 'translate(' + Math.round(p * 105) + 'px,' + Math.round(p * -10) + 'px)');
      setTransform(grid, 'translate(' + Math.round((1 - p) * -35) + 'px,0)');
      setTransform(network, 'translate(' + Math.round((1 - p) * 45) + 'px,0)');
      if (dots) dots.style.opacity = String(1 - p * 0.32);
      if (grid) grid.style.opacity = String(0.45 + p * 0.55);
      if (network) network.style.opacity = String(0.45 + p * 0.55);
    }
    function schedulePaint() {
      if (!scheduled && !reduced) { scheduled = true; window.requestAnimationFrame(paint); }
    }
    window.addEventListener('scroll', schedulePaint, { passive: true });
    window.addEventListener('resize', schedulePaint, { passive: true });
    schedulePaint();

    function reveal(item) {
      if (item.dataset.slEntranceDone || reduced) return;
      item.dataset.slEntranceDone = 'true';
      if (!item.animate) return;
      var delay = Number(item.getAttribute('data-sl-delay') || 0);
      var animation = item.animate([
        { opacity: 0.01, transform: 'translate3d(0, 18px, 0)' },
        { opacity: 1, transform: 'translate3d(0, 0, 0)' }
      ], { duration: 520, delay: delay, easing: 'cubic-bezier(.2,.8,.2,1)', fill: 'both' });
      entranceAnimations.push(animation);
    }
    var revealItems = home.querySelectorAll('[data-sl-reveal]');
    var entranceAnimations = [];
    function cancelEntrances() {
      entranceAnimations.forEach(function (animation) { animation.cancel(); });
      entranceAnimations = [];
      Array.prototype.forEach.call(revealItems, function (item) {
        item.style.opacity = '';
        item.style.transform = '';
      });
    }
    if (reduced || !('IntersectionObserver' in window)) {
      Array.prototype.forEach.call(revealItems, function (item) { item.dataset.slEntranceDone = 'true'; });
    } else {
      var revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) { if (entry.isIntersecting) { reveal(entry.target); revealObserver.unobserve(entry.target); } });
      }, { threshold: 0.08, rootMargin: '0px 0px -5% 0px' });
      Array.prototype.forEach.call(revealItems, function (item) { revealObserver.observe(item); });
    }

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
      if (reduced) { cancelEntrances(); resetDecorations(); pauseAll(); }
      else { schedulePaint(); syncVideos(); }
    }
    if (media) {
      if (media.addEventListener) media.addEventListener('change', motionPreferenceChanged);
      else if (media.addListener) media.addListener(motionPreferenceChanged);
    }
  });
}());
