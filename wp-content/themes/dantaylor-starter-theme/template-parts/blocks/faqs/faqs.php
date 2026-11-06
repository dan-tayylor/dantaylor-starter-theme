<?php
/**
 * FAQs.
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

$heading     = get_field( 'heading' );
$faqs     = get_field( 'faqs' );

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
        <?php if($faqs) { ?>
            <div>
                <?php
				foreach ( $faqs as $faq ) {
					$question = $faq->post_title;
					$answer   = $faq->post_content;
					$faq_args = array(
						'question' => $question,
						'answer'   => $answer,
					);
					get_template_part( 'template-parts/cards/card', 'faq', $faq_args );
				}
				?>
            </div>
        <?php } ?>
	</div>
</div>
