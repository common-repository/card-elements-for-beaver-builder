<!-- Start Testimonial Card 2 -->
<div class="testimonial-card-style-2 fl-node-<?php echo esc_attr($id); ?>">
    <div class="item">
        <div class="media">
            <div class="media-left">
            <?php if ($settings->testimonial_image == '') {
                        ?>
                        <img src="<?php echo esc_url(CEBB_URL . 'assets/images/default.png'); ?>" class="img-fluid center-block img img-responsive"/>
                        <?php
                    } else {
                        ?>
                        <img src="<?php echo esc_url($settings->testimonial_image_src); ?>" class="img-fluid center-block img img-responsive">
                    <?php } ?>
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <p class="testimonial-description">
                        <?php echo esc_attr($settings->testimonial_description); ?>
                    </p>
                    <div class="blog">
                        <div class="testimonial-name">
                            <<?php echo esc_attr($settings->testimonial_html_tag); ?> class="testimonial-tag"><?php echo esc_attr($settings->testimonial_title); ?></<?php echo esc_attr($settings->testimonial_html_tag); ?>>
                        </div>
                    </div>
                        <div class="testimonial-position"><?php echo esc_attr($settings->testimonial_designation); ?></div>
                    <?php 
                        $rating = !empty( $settings->rating ) ? $settings->rating : 0;
                        $layout = 0;
                        ?>
                        <div class="testimonial-rating-content">

                        <?php
                        if ( 'bottom' === $settings->star_position ) {
                            ?>
                            <div class="tm-rating-title"><?php echo esc_attr($settings->rating_title); ?></div>
                            <?php
                        }
                        ?>
                            <div class="tm-rating">
                            <?php
                            $icon = '&#9733;';

                            if ( 'outline' === $settings->star_style ) {
                                $icon = '&#9734;';
                            }
                            $rating_scale =   (int) $settings->rating_scale;
                            $rating         = (float) $rating > $rating_scale ? $rating_scale : $rating;
                            $floored_rating = (int) $rating;
                            $stars_html     = '';
                            for ( $stars = 1; $stars <= $settings->rating_scale; $stars++ ) {
                                if ( $stars <= $floored_rating ) {
                                    $stars_html .= '<i class="tm-star-full">' . $icon . '</i>';
                                } elseif ( $floored_rating + 1 === $stars && $rating !== $floored_rating ) {
                                    $stars_html .= '<i class="tm-star-' . ( $rating - $floored_rating ) * 10 . '">' . $icon . '</i>';

                                } else {
                                    $stars_html .= '<i class="tm-star-empty">' . $icon . '</i>';
                                }
                            }

                                echo $stars_html;
                            ?>
                            </div>

                        <?php
                        if ( 'top' === $settings->star_position ) {
                            ?>
                            <div class="tm-rating-title"><?php echo esc_attr($settings->rating_title); ?></div>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.testimonial-card-style-2.fl-node-<?php echo esc_attr( $id ); ?> .tm-rating i {
	color: #<?php echo esc_attr($settings->rating_unmarked_color) ?>;
}
.testimonial-card-style-2.fl-node-<?php echo esc_attr( $id ); ?> .tm-rating i:not(.tm-star-empty):before {
	content: "\002605";
}

.testimonial-card-style-2.fl-node-<?php echo esc_attr( $id ); ?> .tm-rating i::before {
	color: #<?php echo esc_attr($settings->rating_color) ?>;
}

.testimonial-card-style-2.fl-node-<?php echo esc_attr( $id ); ?> .testimonial-rating-content {

	<?php
	if ( 'inline' === $settings->rating_layout ) {
		?>
		-webkit-box-align: center;
		-webkit-align-items: center;
		-ms-flex-align: center;
		align-items: center;
		flex-direction: row;
		justify-content: space-between;
		<?php
	} elseif ( 'inline' === $settings->rating_layout ) {
		?>
		display: block;
		<?php
	}
	?>
}

.testimonial-card-style-2.fl-node-<?php echo esc_attr( $id ); ?> .testimonial-rating-content .tm-rating-title {
	color: <?php echo esc_attr( $settings->title_color ); ?>;
	<?php
	if ( 'inline' === $settings->rating_layout ) {
		if ( 'justify' !== $settings->alignment ) {

			if ( 'top' === $settings->star_position ) {
				?>
				margin-left: <?php echo esc_attr( $settings->title_spacing ) . 'px'; ?>;
				<?php
			} else {
				?>
				margin-right: <?php echo esc_attr( $settings->title_spacing ) . 'px'; ?>;
				<?php
			}
		}
	}
	?>
}

<?php
if ( 'inline' === $settings->rating_layout && 'justify' !== $settings->alignment ) {
	?>
	.testimonial-card-style-2.fl-node-<?php echo esc_attr( $id ); ?> .testimonial-rating-content > div {
		display: inline-block;
	}
	<?php
}
?>
</style>
<!-- End Testimonial Card -->