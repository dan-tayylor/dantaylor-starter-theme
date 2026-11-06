<?php
/**
 * Custom post type functions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

/**
 * Register custom post types.
 */
function dantaylor_starter_theme_custom_post_type() {

	// Work.
	$faqs_labels = array(
		'name'           => _x( 'FAQs', 'Post Type General Name', 'dantaylor_starter_theme' ),
		'singular_name'  => _x( 'FAQs', 'Post Type Singular Name', 'dantaylor_starter_theme' ),
		'menu_name'      => __( 'FAQs', 'dantaylor_starter_theme' ),
		'name_admin_bar' => __( 'FAQs', 'dantaylor_starter_theme' ),
		'add_new'        => __( 'Add FAQs', 'dantaylor_starter_theme' ),
		'view_item'      => __( 'View FAQs', 'dantaylor_starter_theme' ),
		'view_items'     => __( 'View FAQs', 'dantaylor_starter_theme' ),
		'all_items'      => __( 'All FAQs', 'dantaylor_starter_theme' ),
	);
	$faqs_args   = array(
		'label'               => __( 'FAQs', 'dantaylor_starter_theme' ),
		'description'         => __( 'FAQs', 'dantaylor_starter_theme' ),
		'labels'              => $faqs_labels,
		'supports'            => array( 'title', 'editor' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-format-video',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => false,
	);
	register_post_type( 'faqs', $faqs_args );
}
add_action( 'init', 'dantaylor_starter_theme_custom_post_type', 0 );