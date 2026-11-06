<?php
/**
 * Enqueues scripts and styles.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

/** Enqueue function frontend. */
function dantaylor_starter_theme_scripts() {

	// Styles.
	wp_enqueue_style( 'splide-style', get_template_directory_uri() . '/assets/css/vendor/splide.min.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'dantaylor_starter_theme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	
	// Scripts.
	wp_enqueue_script( 'splide-js', get_template_directory_uri() . '/assets/js/vendor/splide.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'dantaylor_starter_theme-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery', 'splide-js' ), wp_get_theme()->get( 'Version' ), true );

	// Work Listings filters js.
	if ( has_block( 'acf/news' ) ) {
		wp_enqueue_script( 'news-js', get_template_directory_uri() . '/assets/js/news.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );

		// Localize script.
		wp_localize_script(
			'news-js',
			'news_ajax',
			array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce'    => wp_create_nonce( 'fetch_news_nonce' ),
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'dantaylor_starter_theme_scripts' );

/** Enqueue backend scripts and styles. */
function dantaylor_starter_theme_backend_scripts() {
	wp_enqueue_style( 'dantaylor_starter_theme-admin-style', get_template_directory_uri() . '/assets/admin.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'admin_enqueue_scripts', 'dantaylor_starter_theme_backend_scripts' );