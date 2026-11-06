/**
 * Main js scripts.
 *
 * @package WordPress
 */

// Open/close mobile main menu.
document.getElementById( 'main-menu-toggle' ).addEventListener('click', function () {
	const menu_panel = document.getElementById( 'site-nav-mobile' );

	if (menu_panel.classList.contains( 'open' )) {
		menu_panel.classList.remove( 'open', 'dt:-translate-x-full' );
		this.classList.remove( 'active' );
		document.getElementsByTagName( 'html' )[0].classList.remove( 'dt:overflow-hidden' );
	} else {
		menu_panel.classList.add( 'open', 'dt:-translate-x-full' );
		this.classList.add( 'active' );
		document.getElementsByTagName( 'html' )[0].classList.add( 'dt:overflow-hidden' );
	}
});

// Accordion function.
var accordion_cards = document.querySelectorAll( '.accordion-card' );
accordion_cards.forEach(
	function (accordion) {
		const accordion_title = accordion.querySelector( '.accordion-title' );
		accordion_title.addEventListener(
			'click',
			function () {
                let accordion_body  = accordion.querySelector( '.accordion-body' );
				let accordion_inner = accordion.querySelector( '.accordion-inner' );
				let body_height     = accordion_inner.offsetHeight;
				let plus_toggle     = accordion.querySelector( '.plus-toggle' );

				if (accordion.classList.contains( 'open' )) {
					accordion_body.style.height = '0px';
					accordion.classList.remove( 'open' );
					accordion_inner.classList.remove( 'dt:opacity-100' );
					plus_toggle.classList.remove( 'dt:-rotate-90' );
				} else {
					accordion_body.style.height = body_height + 'px';
					accordion.classList.add( 'open' );
					accordion_inner.classList.add( 'dt:opacity-100' );
					plus_toggle.classList.add( 'dt:-rotate-90' );
				}
			}
		);
	}
);

// Load image or gif on scroll.
document.addEventListener('DOMContentLoaded', () => {
  const gifs = document.querySelectorAll('.lazy-gif');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const gif = entry.target;
        gif.src = gif.dataset.gif;
        observer.unobserve(gif);
      }
    });
  });

  gifs.forEach(gif => observer.observe(gif));
});