<?php
/**
 * Theme functions.
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

/**
 * Load styles only for rendered blocks in a page.
 */
add_filter( 'should_load_separate_core_block_assets', '__return_true' );