// Keep every page banner below the fixed site navigation, as on the homepage.
(function () {
    function initializeHero() {
        var hero = document.querySelector('.hero, .hero-altoo, .dtt-about-hero, .dtt-join-hero');
        var header = document.querySelector('.Travolo-header');
        if (!hero || !header) return;

        function alignHero() {
            // Measure the natural banner position before adding only the missing space.
            hero.style.marginTop = '0px';
            var headerStyle = window.getComputedStyle(header);
            var fixed = headerStyle.position === 'fixed';
            var headerBottom = header.offsetHeight + (parseFloat(headerStyle.top) || 0);
            var heroTop = hero.getBoundingClientRect().top + window.scrollY;
            var gap = fixed ? Math.max(0, headerBottom + 8 - heroTop) : 0;
            hero.style.marginTop = Math.ceil(gap) + 'px';
        }

        alignHero();
        window.addEventListener('load', alignHero, {once: true});
        window.addEventListener('resize', alignHero, {passive: true});
        if ('ResizeObserver' in window) new ResizeObserver(alignHero).observe(header);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeHero, {once: true});
    } else {
        initializeHero();
    }
})();
