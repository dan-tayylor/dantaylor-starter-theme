<?php
/**
 * Admin functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @since Dantaylor Starter Theme 1.0.0
 * @package dantaylor_starter_theme
 */

/** Remove items from admin bar. */
function dantaylor_starter_theme_remove_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'new-content' );
	$wp_admin_bar->remove_node( 'customize' );
	$wp_admin_bar->remove_node( 'updates' );
	$wp_admin_bar->remove_node( 'comments' );
	$wp_admin_bar->remove_node( 'wpseo-menu' );
}
add_action( 'wp_before_admin_bar_render', 'dantaylor_starter_theme_remove_admin_bar' );