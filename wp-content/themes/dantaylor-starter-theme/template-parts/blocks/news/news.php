<?php
/**
 * News
 *
 * @package dantaylor_starter_theme
 * @since 1.0.0
 */

$heading = get_field( 'heading' );
$categories = get_categories();

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$news_posts = get_posts( $args );

// Block ID.
$block_id = 'news-block';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Additional classes.
$class_name = 'news-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
} ?>

<div id="<?php echo esc_html( $block_id ); ?>" class="<?php echo esc_html( $class_name ); ?> dt:px-4 dt:md:px-8 dt:py-16">
	<div class="dt:w-full dt:max-w-site dt:mx-auto">
        <h2 class="dt:text-3xl dt:mb-5"><?php echo esc_html( $heading ); ?></h2>
        <?php if($categories) { ?>
            <div class="dt:py-8">
                <div class="dt:flex dt:gap-6 dt:mt-2">
                    <label class="filter-item">
                        <input type="radio" name="categories-filter" value="all" class="filter-checkbox dt:hidden">
                        <?php echo __( 'All' ); ?>
                    </label>
                    <?php foreach($categories as $category) { 
                        $category_name = $category->name;
                        $category_id = $category->term_id;
                        ?>
                        <label class="filter-item">
                            <input type="radio" name="categories-filter" value="<?php echo esc_html($category_id); ?>" class="filter-checkbox dt:hidden">
                            <?php echo esc_html( $category_name ); ?>
                        </label>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <?php if($news_posts) { ?>
            <div id="news-listings-container" class="dt:grid dt:grid-cols-3 dt:gap-6">
                <?php foreach($news_posts as $news) { 
                    $post_id = $news->ID;
                    get_template_part( 'template-parts/cards/card', 'news', $post_id );
                } ?>
            </div>
            <div class="dt:pt-16 dt:text-center">
				<div id="load-more-button" class="btn" data-page="2">
					<?php echo __( 'Load More', 'dantaylor-starter-theme' ); ?>
				</div>
			</div>
        <?php } ?>
    </div>
</div>
