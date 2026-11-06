<?php
/**
 * Displays the site navigation.
 *
 * @since Dantaylor Starter Theme 1.0.0
 * @package WordPress
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'dantaylor_starter_theme' ); ?>">
		<div class="dt:hidden dt:md:block">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'menu_class'      => 'menu-wrapper dt:flex dt:gap-4',
					'container_class' => 'primary-menu-container',
					'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
					'fallback_cb'     => false,
				)
			);
			?>
		</div>
	</nav>
	<?php
endif;
