<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @since Dantaylor Starter Theme 1.0.0
 * @package WordPress
 */

/**
 * Gets the SVG code for a given icon.
 *
 * @since Dantaylor Starter Theme 1.0.0
 * @package WordPress
 *
 * @param string $group The icon group.
 * @param string $icon  The icon.
 * @param int    $size  The icon size in pixels.
 * @return string
 */
function dantaylor_starter_theme_get_icon_svg( $group, $icon, $size = 24 ) {
	return dantaylor_starter_theme_SVG_Icons::get_svg( $group, $icon, $size );
}

if ( ! function_exists( 'dantaylor_starter_theme_post_thumbnail' ) ) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function dantaylor_starter_theme_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail(
				'post-thumbnail',
				array(
					'alt' => the_title_attribute(
						array(
							'echo' => false,
						)
					),
				)
			);
			?>
		</a>

			<?php
		endif; // End is_singular().
	}
}
