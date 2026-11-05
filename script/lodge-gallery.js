// Manual lodge photo galleries: arrow buttons and left/right keyboard navigation.
(function () {
    document.querySelectorAll('[data-lodge-gallery]').forEach(function (gallery) {
        var slides = gallery.querySelectorAll('[data-gallery-slide]');
        var previous = gallery.querySelector('[data-gallery-prev]');
        var next = gallery.querySelector('[data-gallery-next]');
        var counter = gallery.querySelector('[data-gallery-counter]');
        var current = 0;
        if (slides.length < 2 || !previous || !next) return;

        function show(index) {
            current = (index + slides.length) % slides.length;
            slides.forEach(function (slide, position) {
                slide.hidden = position !== current;
            });
            if (counter) counter.textContent = 'Photo ' + (current + 1) + ' of ' + slides.length;
        }

        previous.hidden = false;
        next.hidden = false;
        previous.addEventListener('click', function () { show(current - 1); });
        next.addEventListener('click', function () { show(current + 1); });
        gallery.addEventListener('keydown', function (event) {
            if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
                event.preventDefault();
                show(current + (event.key === 'ArrowLeft' ? -1 : 1));
            }
        });
    });
})();
