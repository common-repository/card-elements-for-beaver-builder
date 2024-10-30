<div class="testimonial-card-style-6 fl-node-<?php echo esc_attr($id); ?>">
    <div class="container">
        <div class="pic">
        <?php if ($settings->testimonial_image == '') {?>
            <img src="<?php echo esc_url(CEBB_URL . 'assets/images/default.png'); ?>" class="img-fluid center-block img img-responsive"/>
            <?php } else { ?>
            <img src="<?php echo esc_url($settings->testimonial_image_src); ?>" class="img-fluid center-block img img-responsive">
        <?php } ?>
            </div>
            <p class="testimonial-description"><?php echo esc_attr($settings->testimonial_description); ?></p>
            <div class="testimonial-name"> <<?php echo esc_attr($settings->testimonial_html_tag); ?> class="testimonial-tag"><?php echo esc_attr($settings->testimonial_title); ?></<?php echo esc_attr($settings->testimonial_html_tag); ?>></div>
            <span class="testimonial-position"><?php echo esc_attr($settings->testimonial_designation); ?></span>
    </div>
</div>