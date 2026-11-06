<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @since Dantaylor Starter Theme 1.0.0
 * @package WordPress
 */

get_header();
?>

	<header>
		<h1><?php esc_html_e( 'Error 404.', 'dantaylor_starter_theme' ); ?></h1>
	</header>
	<p><?php esc_html_e( 'Nothing was found at this location.', 'dantaylor_starter_theme' ); ?></p>

<?php
get_footer();
