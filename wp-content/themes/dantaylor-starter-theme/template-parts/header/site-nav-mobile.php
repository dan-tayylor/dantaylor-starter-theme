<?php
/**
 * Displays mobile nav
 *
 * @since Dantaylor Starter Theme 1.0.0
 * @package WordPress
 */

?>

<div id="site-nav-mobile" class="mobile-nav dt:fixed dt:top-24 dt:left-full dt:w-full dt:h-[100dvh] dt:z-100 dt:overflow-x-hidden dt:bg-white dt:transition-all dt:duration-300 dt:ease-bezier">
	<div class="dt:h-full dt:pt-[88px] dt:p-4 dt:overflow-y-auto">
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'dt:text-black',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'add_li_class'    => 'dt:leading-none dt:mb-2',
				'fallback_cb'     => false,
			)
		); ?>
	</div>
</div>