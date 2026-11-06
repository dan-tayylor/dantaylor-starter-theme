<?php
/**
 * Image / Text
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

$heading = get_field( 'heading' );
$text    = get_field( 'text' );
$cta     = get_field( 'cta' );
$image   = get_field( 'image' );
$image_position = get_field( 'image_position' );

if( 'right' === $image_position ) {
    $row = 'dt:md:flex-row-reverse';
} else {
    $row = '';
}

// Block ID.
$block_id = 'image-text-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'image-text-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div id="<?php echo esc_html( $block_id ); ?>" class="<?php echo esc_html( $class_name ); ?> dt:px-4 dt:md:px-8 dt:py-16">
	<div class="dt:w-full dt:max-w-site dt:mx-auto">
        <div class="dt:md:flex dt:gap-6 <?php echo esc_html( $row ); ?>">
            <div class="dt:md:w-1/2">
                <img class="dt:w-full dt:h-96 dt:object-cover" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>" loading="lazy">
            </div>
            <div class="dt:md:w-1/2 dt:flex dt:items-center dt:mt-8 dt:md:mt-0 dt:md:py-6 dt:md:px-6">
                <div>
                    <h2 class="dt:text-2xl dt:mb-5"><?php echo esc_html( $heading ); ?></h2>
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
</div>
