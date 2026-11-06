<?php
/**
 * Displays header site branding
 *
 * @since Dantaylor Starter Theme 1.0.0
 * @package WordPress
 */

$description = get_bloginfo( 'description', 'display' );

?>

<div class="site-branding">

	<?php if ( has_custom_logo() ) : ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>

	<?php if ( $description && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
		<p class="site-description">
			<?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
		</p>
	<?php endif; ?>
</div>
