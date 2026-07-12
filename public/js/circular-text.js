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

  const { useState, useEffect, useRef, createElement: h } = React;

  const HOVER_CLASS_MAP = {
    speedUp: 'hover-speed-up',
    slowDown: 'hover-slow-down',
    pause: 'hover-pause',
    goBonkers: 'hover-go-bonkers',
  };

  function CircularText({
    text = 'UMBBM Mentaraman*2026*',
    spinDuration = 20,
    onHover = 'speedUp',
    className = '',
    radius = 85,
  }) {
    const [hovering, setHovering] = useState(false);
    const letters = Array.from(text);

    const hoverClass = hovering && onHover ? HOVER_CLASS_MAP[onHover] || '' : '';

    const style = {
      '--spin-duration': spinDuration + 's',
    };

    const spans = letters.map(function (letter, i) {
      const rotationDeg = (360 / letters.length) * i;
      const transform = 'rotateZ(' + rotationDeg + 'deg) translateY(' + (-radius) + 'px)';

      return h(
        'span',
        {
          key: i,
          style: { transform: transform, WebkitTransform: transform },
        },
        letter
      );
    });

    return h(
      'div',
      {
        className: ['circular-text', className, hoverClass].filter(Boolean).join(' '),
        style: style,
        onMouseEnter: function () { setHovering(true); },
        onMouseLeave: function () { setHovering(false); },
      },
      spans
    );
  }

  // --- Mount ---
  var mountNode = document.getElementById('circular-text-root');
  if (mountNode) {
    var props = {};
    try {
      // Read props from data attributes if provided
      if (mountNode.dataset.text) props.text = mountNode.dataset.text;
      if (mountNode.dataset.spinDuration) props.spinDuration = Number(mountNode.dataset.spinDuration);
      if (mountNode.dataset.onHover) props.onHover = mountNode.dataset.onHover;
      if (mountNode.dataset.className) props.className = mountNode.dataset.className;
      if (mountNode.dataset.radius) props.radius = Number(mountNode.dataset.radius);
    } catch (e) { /* use defaults */ }

    var root = ReactDOM.createRoot(mountNode);
    root.render(h(CircularText, props));
  }

  // Expose globally so other scripts can mount additional instances
  window.CircularText = CircularText;
})();
