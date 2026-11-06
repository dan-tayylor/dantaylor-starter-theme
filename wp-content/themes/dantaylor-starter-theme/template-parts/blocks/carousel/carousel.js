// Simple carousel.
var simple_carousel = document.querySelectorAll( '.simple-carousel' );
simple_carousel.forEach(
    function (slider) {
        var simple_slide = new Splide(
            slider,
            {
                type: 'slide',
                perPage: 3,
                gap: 16,
                arrows: false,
                pagination: false,
                rewind: false,
                easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
                breakpoints: {
                    992: {
                        perPage: 2,
                        gap: 16
                    },
                    640: {
                        perPage: 1,
                        gap: 8,
                        padding: { left: 0, right: 10 }
                    },
                }
            }
        );

        simple_slide.mount();

        // Arrows.
        let arrows = slider.querySelectorAll('.slider-arrow');
        arrows.forEach((arrow) => {
            let direction = arrow.classList.contains('slider-prev') ? '-1' : '+1';
            arrow.addEventListener('click', () => simple_slide.go(direction));
        });

    }
);