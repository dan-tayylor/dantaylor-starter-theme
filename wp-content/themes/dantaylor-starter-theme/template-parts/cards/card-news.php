<?php
/**
 * News Card.
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

$card_id = $args ?? null;
if ( $card_id ) {
	$card_id = $card_id;
} else {
	$card_id = '';
}

$image = get_the_post_thumbnail(
	$card_id,
	'small',
	array(
		'class' => 'dt:w-full dt:h-56 dt:object-cover',
	)
);

$post_title = get_the_title( $card_id );
$excerpt    = get_the_excerpt( $card_id );
$post_link = get_the_permalink( $card_id );
?>

<div class="dt:flex dt:flex-col dt:justify-between">
    <div>
        <a class="dt:block dt:mb-2" href="<?php echo esc_html( $post_link ); ?>">
            <?php echo wp_kses_post( $image ); ?>
        </a>
        <h3 class="dt:text-lg dt:mb-2"><?php echo esc_html( $post_title ); ?></h3>
        <div class="prose dt:mb-3">
            <?php echo wp_kses_post( $excerpt ); ?>
        </div>
    </div>
    <div>
        <a href="<?php echo esc_html( $post_link ); ?>">Read more</a>
    </div>
</div>
