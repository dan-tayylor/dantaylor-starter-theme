<?php
/**
 * Carousel.
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

$heading     = get_field( 'heading' );
$carousel     = get_field( 'carousel' );

// Block ID.
$block_id = 'cards-row-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'cards-row-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} 
?>

<div class="<?php echo esc_html( $class_name ); ?> dt:px-4 dt:md:px-8 dt:py-16 dt:overflow-x-hidden" id="<?php echo esc_html( $block_id ); ?>">
    <div class="dt:w-full dt:max-w-site dt:mx-auto">
        <div class="simple-carousel splide">
            <div class="dt:flex dt:justify-between dt:items-center dt:mb-8">
                <div>
                    <?php if( $heading ) { ?>
                        <h2 class="dt:text-3xl"><?php echo esc_html( $heading ); ?></h2>
                    <?php } ?>
                </div>
                <div class="slider-controls dt:flex dt:justify-end dt:gap-2">
                    <div class="slider-arrow slider-prev" data-target="-1">
                        <?php echo dantaylor_starter_theme_get_icon_svg( 'ui', 'arrow_left', 24 ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
                    </div>
                    <div class="slider-arrow slider-next" data-target="+1">
                        <?php echo dantaylor_starter_theme_get_icon_svg( 'ui', 'arrow_right', 24 ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
                    </div>
                </div>
            </div>
            <div class="splide__track dt:overflow-visible!">
                <ul class="splide__list">
                    <?php foreach( $carousel as $card ) { 
                        $card_title = $card['title'];
                        $text = $card['text'];
                        $cta = $card['cta'];
                        $image = $card['image']; ?>
                        <li class="splide__slide">
                            <div class="dt:flex dt:flex-col dt:justify-between">
                                <div>
                                    <?php if( $image ) { ?>
                                        <img class="dt:w-full dt:h-60 dt:object-cover dt:mb-4" src="<?php echo esc_html( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>">
                                    <?php } ?>
                                    <h3 class="dt:text-lg dt:mb-2">
                                        <?php echo esc_html( $card_title ); ?>
                                    </h3>
                                    <div class="prose">
                                        <?php echo wp_kses_post( $text ); ?>
                                    </div>
                                </div>
                                <?php if( $cta ) { ?>
                                    <div class="dt:mt-6">
                                        <a class="btn" href="<?php echo esc_html( $cta['url'] ); ?>" target="<?php echo esc_html( $cta['target'] ); ?>">
                                            <?php echo esc_html( $cta['title'] ); ?>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
	</div>
</div>
