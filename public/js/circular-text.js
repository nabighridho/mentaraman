/**
 * CircularText — React Bits component (CDN-compatible, no module imports)
 *
 * Uses global React & ReactDOM loaded via <script> tags.
 * Rotation is handled via CSS @keyframes; hover variants toggle CSS classes.
 *
 * Props:
 *   text         {string}  – Text to render circularly (default: 'UMBBM Mentaraman*2026*')
 *   spinDuration {number}  – Seconds for one full rotation (default: 20)
 *   onHover      {string}  – 'speedUp' | 'slowDown' | 'pause' | 'goBonkers' | undefined
 *   className    {string}  – Extra CSS classes
 */
(function () {
  'use strict';

  function initCircularText(mountNode) {
    if (!mountNode) return;

    var text = mountNode.dataset.text || 'UMBBM MENTARAMAN*2026*';
    var radius = Number(mountNode.dataset.radius) || 67;
    var spinDuration = Number(mountNode.dataset.spinDuration) || 25;
    var onHover = mountNode.dataset.onHover || 'speedUp';
    var className = mountNode.dataset.className || '';

    var hoverClassMap = {
      speedUp: 'hover-speed-up',
      slowDown: 'hover-slow-down',
      pause: 'hover-pause',
      goBonkers: 'hover-go-bonkers',
    };

    var container = document.createElement('div');
    container.className = 'circular-text ' + className;
    container.style.setProperty('--spin-duration', spinDuration + 's');

    if (onHover && hoverClassMap[onHover]) {
      var hoverClass = hoverClassMap[onHover];
      container.addEventListener('mouseenter', function() {
        container.classList.add(hoverClass);
      });
      container.addEventListener('mouseleave', function() {
        container.classList.remove(hoverClass);
      });
    }

    var letters = Array.from(text);
    letters.forEach(function(letter, i) {
      var rotationDeg = (360 / letters.length) * i;
      var transform = 'rotateZ(' + rotationDeg + 'deg) translateY(' + (-radius) + 'px)';
      
      var span = document.createElement('span');
      span.style.transform = transform;
      span.style.WebkitTransform = transform;
      span.textContent = letter;
      
      container.appendChild(span);
    });

    mountNode.appendChild(container);
  }

  // Auto-init on DOMContentLoaded
  document.addEventListener('DOMContentLoaded', function() {
    var root = document.getElementById('circular-text-root');
    if (root) {
      initCircularText(root);
    }
  });

  // Expose globally
  window.initCircularText = initCircularText;
})();
