<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since Dantaylor Starter Theme 1.0.0
 * @package WordPress
 */

?>
</main>
</div>
</div>

<footer id="colophon" class="site-footer dt:px-4 dt:md:px-8 dt:py-16">
	<div class="dt:w-full dt:max-w-site dt:mx-auto">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'dantaylor_starter_theme' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul>
			</nav>
		<?php endif; ?>
		<div class="site-info">
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			}
			?>

			<div>
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Website by %s.', 'dantaylor_starter_theme' ),
					'<a href="' . esc_url( __( '', 'dantaylor_starter_theme' ) ) . '">Dan Taylor</a>'
				);
				?>
			</div>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>