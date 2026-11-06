<?php
/**
 * Cards row.
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

$heading     = get_field( 'heading' );
$cards     = get_field( 'cards' );

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

<div class="<?php echo esc_html( $class_name ); ?> dt:px-4 dt:md:px-8 dt:py-16" id="<?php echo esc_html( $block_id ); ?>">
    <div class="dt:w-full dt:max-w-site dt:mx-auto">
        <?php if( $heading ) { ?>
            <h2 class="dt:text-3xl dt:mb-8"><?php echo esc_html( $heading ); ?></h2>
        <?php } ?>
        <div class="dt:grid dt:md:grid-cols-3 dt:gap-x-4 dt:gap-y-8">
            <?php foreach($cards as $card) { 
                $card_title = $card['title'];
                $text = $card['text'];
                $cta = $card['cta'];
                $image = $card['image']; ?>
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
            <?php } ?>
        </div>
	</div>
</div>
