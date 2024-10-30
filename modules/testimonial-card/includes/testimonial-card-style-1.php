
<!-- Start Testimonial Card 1 -->
<div class="testimonial-card-style-1 fl-node-<?php echo esc_attr($id); ?>">
    <div class="item">
        <div class="feedback">
            <div class="bg-color">
                <p class="testimonial-description">
                    <?php echo esc_attr($settings->testimonial_description); ?>
                </p>
                <span class="testimonial-box-shape"></span>
            </div>
            <div class="iq-mt-30">
                <div class="iq-avtar iq-mr-20">
                    <?php if ($settings->testimonial_image == '') { ?>
                        <img src="<?php echo esc_url(CEBB_URL . 'assets/images/default.png'); ?>" class="img-fluid center-block img img-responsive"/>
                        <?php
                    } else {
                        ?>
                        <img src="<?php echo esc_url($settings->testimonial_image_src); ?>" class="img-fluid center-block img img-responsive">
                    <?php } ?>
                </div>
                <div class="avtar-name">
                    <div class="testimonial-name">
                        <<?php echo esc_attr($settings->testimonial_html_tag); ?> class="testimonial-tag"><?php echo esc_attr($settings->testimonial_title); ?></<?php echo esc_attr($settings->testimonial_html_tag); ?>></div>
                    <div class="testimonial-position"><?php echo esc_attr($settings->testimonial_designation); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Card -->