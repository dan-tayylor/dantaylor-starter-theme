/**
 * News functions.
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

(function ($) {

	function fetch_news_posts(filters, page) {

        $.ajax(
			{
				url:  news_ajax.ajax_url,
				method: 'POST',
				data: {
					action: 'fetch_news_posts',
					filters: filters,
					page: page,
					security: news_ajax.nonce
				},
				dataType: 'json',
				success: function (response) {

                    // Show news cards.
                    if (page === 1) {
						$( '#news-listings-container' ).html( response.cards );
					} else {
						$( '#news-listings-container' ).append( response.cards );
					}

                    // Increment page number.
                    $( '#load-more-button' ).data( 'page', page + 1 );

                    // Check if more cards to load.
                    if ( ! response.has_more) {
						$( '#load-more-button' ).addClass('dt:!hidden');
					} else {
                        $( '#load-more-button' ).removeClass('dt:!hidden');
					}

                },
				error: function (xhr, status, error) {
					console.error( 'Error fetching posts:', error );
				}
			}
		);
    }

    // Load more button.
    $( '#load-more-button' ).click(
		function () {
			const page = $( this ).data( 'page' );
            let filters = getSelectedFilters();
			fetch_news_posts(filters, page);
		}
	);

    // Selected filters function.
    function getSelectedFilters() {
        let filters = {};
        ['categories-filter'].forEach(name => {
            filters[name] = $(`input[name="${name}"]:checked`)
                .map(function () { return this.value; })
                .get();
        });
        return filters;
    }

    // Filter checkboxes.
    $('.filter-checkbox').change(function () {
        let filters = getSelectedFilters();
        $('#load-more-btn').data('page', 1);
        fetch_news_posts(filters, 1);
        $(this).parent('label').toggleClass('active');
    });

})( jQuery );
