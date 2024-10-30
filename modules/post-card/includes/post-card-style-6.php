<div class="post-card-style-6 card" style="background-image: url('<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>'); background-size: contain; background-repeat: no-repeat;">

    <div class="card-info-hover">

        <div class="card-clock-info">
            <?php
				if ($settings->post_meta_data_show_hide == 'post_meta_data_yes') { 
                if (in_array('date', $settings->post_meta_data)) {
                ?>
			<span class="card-time"><?php echo get_the_date('d M, Y'); ?></span><?php }} ?>
        </div>

    </div>

    <div class="card-img" style="background-image: url('<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>');"></div>

    <a href="<?php the_permalink(); ?>" class="card-link">
        <div class="card-img-hover"></div>
    </a>

    <div class="card-info post-content post_bg"><?php
    if (in_array('category', $settings->post_meta_data)) { ?>
        <div class="card-category card_meta post-card_category">
            <?php echo post_card_posted_categories(); ?>
        </div>
        <?php }
         if ($settings->post_title_show_hide == 'post_title_yes') { 
             $tag = $settings->post_html_tag;
            ?>
            <<?php echo esc_attr($tag); ?> class="card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </<?php echo esc_attr($tag); ?>>
            <?php } ?>
		<?php
           if ($settings->post_excerpt_show_hide == 'post_excerpt_yes') {
            if ($settings->post_excerpt_from == 'content') {
                    $content = get_the_content();
                } else if ($settings->post_excerpt_from == 'excerpt') {
                    $content = get_the_excerpt();
                } else {
                    $content = get_the_content();
                }
                if ($settings->post_read_more_show_hide == 'post_read_more_yes') {
                    $read_more = '<a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="entry-read-more post-card_read-more">' . ' &nbsp;' . $settings->post_read_more . '</a>';
                } else {
                    $read_more = "";
                }
                ?> 
                <p class="description post-card_excerpt post-card-alignment">
                    <?php echo wp_kses_post(wp_trim_words($content, $settings->post_excerpt_length, $read_more)); ?>
                </p>
            <?php } ?>
        <div class="card-by">
            <div class="card-author card_aling">
                <?php
			if ($settings->post_meta_data_show_hide == 'post_meta_data_yes') { 
                if (in_array('author', $settings->post_meta_data)) {
                    echo post_card_posted_by();
                }
                if (in_array('comments', $settings->post_meta_data)) {
                    echo post_card_comment_count();
                }
                if (in_array('tags', $settings->post_meta_data)) {
                    echo post_card_posted_tag();
                }
				}
                ?>
            </div>
        </div>
    </div>
</div>
