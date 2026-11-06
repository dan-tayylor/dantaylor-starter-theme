<?php
/**
 * FAQ Card.
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

$question = $args['question'];
$answer   = $args['answer'];
?>

<div class="accordion-card dt:border dt:mb-6 dt:px-4 dt:overflow-hidden dt:transition-all dt:duration-300 dt:ease-bezier">
	<div class="accordion-title dt:flex dt:justify-between dt:items-start dt:gap-4 dt:py-5 dt:cursor-pointer">
		<p class="dt:text-lg"><?php echo esc_html( $question ); ?></p>
		<div class="plus-minus dt:relative dt:w-4 dt:h-4 dt:mt-1.5">
			<span class="plus-toggle dt:absolute dt:top-0 dt:w-0.5 dt:h-full dt:bg-black dt:transition-transform dt:duration-300 dt:ease-bezier"></span>
			<span class="dt:absolute dt:w-0.5 dt:h-full dt:bg-black dt:-rotate-90"></span>
		</div>
	</div>
	<div class="accordion-body dt:h-0 dt:transition-all dt:duration-300 dt:ease-bezier">
		<div class="accordion-inner dt:opacity-0 dt:transition-all dt:duration-500 dt:ease-bezier">
            <div class="prose dt:pb-6"><?php echo wp_kses_post( $answer ); ?></div>
		</div>
	</div>
</div>
