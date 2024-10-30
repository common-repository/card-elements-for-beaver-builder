<!-- Start Post Card 1 -->  
<article class="grid-item column post-card-container">  
    <!-- Post-->
    <div class="post-module">
        <!-- Thumbnail-->
        <div class="thumbnail post-card-item_img"> 
            <?php
			if ($settings->post_meta_data_show_hide == 'post_meta_data_yes') { 
            if (in_array('date', $settings->post_meta_data)) {
                ?>
                <div class="date post-card_date">
                    <div class="day post-card_date_color"><?php echo get_the_date('d M, Y'); ?></div> 
                </div>
            <?php }}
            ?> 
            <?php if (has_post_thumbnail()) { ?>
                <div class="post-card-image post-card_thumbnail">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($settings->image_size); ?></a>
                </div>                 
            <?php } else {
                ?> 
                <?php  if ($settings->post_title_show_hide == 'post_title_yes') { ?>
                    <h3 class="thumb_title"> <?php the_title(); ?> </h3>
                <?php } ?>
                <?php
            }
            ?>  
        </div>
        <!-- Post Content-->
        <div class="post-content post-card-content-box"> <?php
            if (in_array('category', $settings->post_meta_data)) { ?>
                <div class="category post-card_category post-card_category_background">
                    <?php echo post_card_posted_categories(); ?>
                </div> 
            <?php } ?>          
            <?php if ($settings->post_title_show_hide == 'post_title_yes') {
                $tag = $settings->post_html_tag;
                ?>
                <<?php echo esc_attr($tag); ?> class="title post-card_title post-card-alignment">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </<?php echo esc_attr($tag); ?>> 
            <?php } 
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
            <div class="post-meta post-card_meta-data post-card-alignment">
                <?php
				if ($settings->post_meta_data_show_hide == 'post_meta_data_yes') { 
                    if (in_array('author', $settings->post_meta_data)) {
                        post_card_posted_by();
                    }
                    if (in_array('comments', $settings->post_meta_data)) {
                        post_card_comment_count();
                    }
                    if (in_array('tags', $settings->post_meta_data)) {
                        post_card_posted_tag();
                    }
				} ?> 
            </div>
        </div>
    </div> 
</article>  
<!-- End Post Card -->
