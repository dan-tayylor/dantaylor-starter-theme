<?php
/**
 * Hero Homepage.
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

$heading         = get_field( 'heading' );
$text    = get_field( 'text' );
$cta     = get_field( 'cta' );
$image         = get_field( 'image' );
$video         = get_field( 'video' );
$display_video = get_field( 'display_video' );

// Block ID.
$block_id = 'hero-homepage';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'hero-homepage';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div id="<?php echo esc_html( $block_id ); ?>" class="<?php echo esc_html( $class_name ); ?> dt:relative dt:h-screen">
	<?php if ( $image ) { ?>
		<img class="dt:w-full dt:h-full dt:object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
	<?php } elseif ( $display_video && $video ) { ?>
		<video id="video-hero" class="dt:w-full dt:h-full dt:object-cover" preload="none" playsinline autoplay loop muted>
			<source src="<?php echo esc_html( $video['url'] ); ?>" type="video/mp4">
			<source src="<?php echo esc_html( $video['url'] ); ?>" type="video/mp4">
		</video>
	<?php } ?>
	<div class="dt:absolute dt:inset-0 dt:p-4 dt:md:p-8 dt:bg-black/50">
		<div class="dt:max-w-site dt:mx-auto dt:h-full dt:flex dt:items-center">
			<div class="dt:text-white">
				<h1 class="dt:text-4xl dt:mb-6"><?php echo esc_html( $heading ); ?></h1>
				<div class="prose">
					<?php echo wp_kses_post( $text ); ?>
				</div>
				<?php if( $cta ) { ?>
					<div class="dt:mt-6">
						<a class="btn" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>">
							<?php echo esc_html( $cta['title'] ); ?>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
