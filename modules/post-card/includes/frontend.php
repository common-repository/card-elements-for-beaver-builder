<?php
$card_style = $settings->post_card_style;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => $settings->number_of_posts,
    'post_status' => 'publish',
    'orderby' => $settings->post_card_orderby,
    'order' => $settings->post_sort_order
);

if (isset($settings->blog_categories) && !empty($settings->blog_categories)) {
    $args['tax_query'][] = array(
        'taxonomy' => 'category',
        'field' => 'ID',
        'terms' => $settings->blog_categories,
    );
}

$blog_posts = new \WP_Query($args);

if ($blog_posts->have_posts()) :?> 
    <div class="fl-node-<?php echo esc_attr($id);?> post_card grid-container post-card-grid-gap beaver-grid <?php echo esc_attr($card_style); ?> beaver-grid-<?php echo esc_attr($settings->post_card_columns); ?> beaver-grid-md-<?php echo esc_attr($settings->post_card_columns_medium); ?> beaver-grid-sm-<?php echo esc_attr($settings->post_card_columns_responsive); ?>" > 
    <?php while ($blog_posts->have_posts()) : $blog_posts->the_post();

        switch ($settings->post_card_style) {
            case 'post-card-style-1':
                include CEBB_DIR . 'modules/post-card/includes/post-card-style-1.php';  // Card Style 1
                break;
            case 'post-card-style-2':
                include CEBB_DIR . 'modules/post-card/includes/post-card-style-2.php';  // Card Style 2
                break;
            case 'post-card-style-6':
                include CEBB_DIR . 'modules/post-card/includes/post-card-style-6.php';  // Card Style pro
                break;
            default:
                include CEBB_DIR . 'modules/post-card/includes/post-card-style-1.php';  // Default Card Style 1
                break;
        }
        endwhile;
        wp_reset_postdata();
        ?>
    </div> 
    <?php
endif;
