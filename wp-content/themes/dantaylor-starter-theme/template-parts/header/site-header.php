<?php
/**
 * Displays the site header.
 *
 * @since Dantaylor Starter Theme 1.0.0
 * @package WordPress
 */

?>

<header id="masthead" class="site-header dt:px-4 dt:md:px-8 dt:py-8">
	<div class="dt:w-full dt:max-w-site dt:mx-auto dt:flex dt:justify-between">
		<?php get_template_part( 'template-parts/header/site-branding' ); ?>
		<?php get_template_part( 'template-parts/header/site-nav' ); ?>
		<div class="menu-button-container dt:lg:hidden">
		<button id="main-menu-toggle" class="dt:flex dt:items-center dt:gap-2 dt:ml-auto dt:md:ml-0 dt:group dt:outline-none dt:cursor-pointer dt:touch-manipulation" aria-label="Navicon">
			<div class="dt:w-8 dt:h-5 dt:flex dt:flex-col dt:justify-between">
				<span class="menu-line dt:block dt:w-full dt:h-1 dt:bg-black dt:transition-transform dt:duration-200"></span>
				<span class="menu-line dt:block dt:w-full dt:h-1 dt:bg-black dt:transition-opacity dt:duration-200"></span>
				<span class="menu-line dt:block dt:w-full dt:h-1 dt:bg-black dt:transition-transform dt:duration-200"></span>
			</div>
		</button>
	</div>
	</div>
	<?php get_template_part( 'template-parts/header/site-nav-mobile' ); ?>
</header>
