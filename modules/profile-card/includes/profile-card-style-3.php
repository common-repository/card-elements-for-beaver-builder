<!-- Start Profile Card 3 -->
<?php
$classes = array();
if ( 'yes' === $settings->profile_icon_animation ) {
	if ( 'none' !== $settings->profile_icon_animation_hover ) {
		$classes[] = esc_attr( $settings->profile_icon_animation_hover ); 
    }    
}?>
<div class="profile-card-style-3 fl-node-<?php echo esc_attr($id); ?>" style="background-image:url(<?php if ($settings->profile_bg_image == '') { echo esc_url(CEBB_URL . 'assets/images/default.png'); } else { echo esc_url($settings->profile_bg_image_src); } ?>);">
    <div class="team-member">
        <div class="team-member-profile">
        <?php if ($settings->profile_image == '') { ?>
                <img src="<?php echo esc_url(CEBB_URL . 'assets/images/default.png'); ?>" class="img img-responsive"/>
            <?php } else { ?>
                <img src="<?php echo esc_url($settings->profile_image_src); ?>" class="img img-responsive" sizes="(max-width: 700px) 100vw, 700px" width="700" height="700">
            <?php } ?>
        </div>
        <div class="team-member-info">
            <!-- Description -->
            <?php if ($settings->profile_description_show_hide == 'profile_description_yes') { ?>
                <p class="profile-description"><?php echo esc_attr($settings->profile_description); ?></p>
            <?php } ?>
            <<?php echo esc_attr($settings->profile_html_tag); ?> class="profile-name"><?php echo esc_attr($settings->profile_title); ?> </<?php echo esc_attr($settings->profile_html_tag); ?>>
            <p class="profile-position"><?php echo esc_attr($settings->profile_designation); ?></p>
        </div>
        <?php if ($settings->profile_icon_show_hide == 'profile_icon_yes') { ?>
        <div class="team-member__socialmedia">
            <?php $icon_count = 1;
            $classes[0] = isset($classes[0]) ? $classes[0] : '';
            foreach ( $settings->profile_icons as $icon ) {
                if ( ! is_object( $icon ) ) {
                    continue;
                }
                    // check if themer connection is set.
                if ( ! empty( $icon->connections->link ) && empty( $icon->link ) ) {
                    echo '';
                } else {
                    echo '<a class="beaver-icon beaver-social-icon ' . esc_attr($classes[0]). ' beaver-social-icon-' . esc_attr( $icon_count ) . '" href="' . $icon->link . '" target="' . esc_attr( $icon->link_target ) . '">'; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    $imageicon_array = array(
                        /* Icon Basics */
                        'icon'                    => $icon->icon,
                        'icon_size'               => $settings->size,
                        'icon_align'              => 'center',
                        /* Icon Style */
                        'icon_style'                      => $settings->profile_icoimage_style,
                        'icon_profile_bg_size'            => $settings->profile_bg_size,
                        'icon_profile_border_style'       => $settings->profile_border_style,
                        'icon_profile_border_width'       => $settings->profile_border_width,
                        'icon_profile_bg_border_radius'   => $settings->profile_bg_border_radius,
                        /* Image Style */
                        'image_style'             => $settings->profile_icoimage_style,
                        'img_profile_bg_size'             => $settings->profile_bg_size,
                        'img_profile_border_style'        => $settings->profile_border_style,
                        'img_profile_border_width'        => $settings->profile_border_width,
                        'img_profile_bg_border_radius'    => $settings->profile_bg_border_radius,
                        /* Preset Color variable new */
                        'icon_color_preset'       => 'preset1',
                        /* Icon Colors */
                        'icon_color'              => $settings->color,
                        'icon_profile_hover_color'        => $settings->profile_hover_color,
                        'icon_profile_bg_color'           => $settings->profile_bg_color,
                        'icon_profile_bg_hover_color'     => $settings->profile_bg_hover_color,
                        'icon_profile_border_color'       => $settings->profile_border_color,
                        'icon_profile_border_hover_color' => $settings->profile_border_hover_color,
                        /* Image Colors */
                        'img_profile_bg_color'            => $settings->profile_bg_color,
                        'img_profile_bg_hover_color'      => $settings->profile_bg_hover_color,
                        'img_profile_border_color'        => $settings->profile_border_color,
                        'img_profile_border_hover_color'  => $settings->profile_border_hover_color,
                    );?>
                    <i class="<?php echo esc_attr($icon->icon); ?>"></i> <?php
                    echo '</a>'; 
                }
                $icon_count++;
            }?>    
        </div>
        <?php } ?>
    </div>
</div>
<!-- End Profile Card -->

<style>
.profile-card-style-3.fl-node-<?php echo esc_attr($id); ?> .team-member__socialmedia .beaver-icon i,.profile-card-style-2.fl-node-<?php echo esc_attr($id); ?> .team-member__socialmedia .beaver-icon i:before{ 
    /* Icon Color */
    <?php if ( ! empty( $settings->color) ) { ?>
        /* Icon Color */
            color: #<?php echo esc_attr($settings->color);
    }?>;
    font-size: <?php echo esc_attr($settings->size); ?>px;
    height: auto;
    width: auto;
    <?php if ( 'simple' != $settings->profile_icoimage_style ) { // Rounded Styles. ?> 
        background: #<?php echo esc_attr($settings->profile_bg_color); ?>;
            <?php if ( 'circle' == $settings->profile_icoimage_style || 'custom' == $settings->profile_icoimage_style ) { ?>
                border-radius: <?php echo ( 'custom' == $settings->profile_icoimage_style ) ? esc_attr($settings->profile_bg_border_radius) . 'px' : '100%'; ?>;
                -moz-border-radius: <?php echo ( 'custom' == $settings->profile_icoimage_style ) ? esc_attr($settings->profile_bg_border_radius) . 'px' : '100%'; ?>;
                -webkit-border-radius: <?php echo ( 'custom' == $settings->profile_icoimage_style ) ? esc_attr($settings->profile_bg_border_radius) . 'px' : '100%'; ?>;
            <?php } 
            if ( 'circle' == $settings->profile_icoimage_style || 'square' == $settings->profile_icoimage_style || 'custom' == $settings->profile_icoimage_style ) { ?>
                line-height: 
                <?php echo esc_attr(
                ( ( 'custom' != $settings->profile_icoimage_style ) ? ( $settings->size * 2 ) : $settings->size )
                +
                ( ( 'custom' == $settings->profile_icoimage_style ) ? $settings->profile_bg_size : 0 )
                    . 'px' ) ?>;
                height:
                    <?php
                    echo esc_attr(
                    ( ( 'custom' != $settings->profile_icoimage_style ) ? ( $settings->size * 2 ) : $settings->size )
                    +
                    ( ( 'custom' == $settings->profile_icoimage_style ) ? $settings->profile_bg_size : 0 )
                        . 'px' )
                    ?>;
                width:
                    <?php
                    echo esc_attr(
                    ( ( 'custom' != $settings->profile_icoimage_style ) ? ( $settings->size * 2 ) : $settings->size )
                    +
                    ( ( 'custom' == $settings->profile_icoimage_style ) ? $settings->profile_bg_size : 0 )
                    . 'px' )
                    ?>;
                text-align: center;
            <?php }
    } else {  // else rounded style.
        ?>
        line-height: <?php echo esc_attr($settings->size); ?>px;
        height: <?php echo esc_attr($settings->size); ?>px;
        width: <?php echo esc_attr($settings->size); ?>px;
        text-align: center;
    <?php }; ?>
    <?php if ( 'custom' == $settings->profile_icoimage_style && 'none' != $settings->profile_border_style ) : ?>
        border-style: <?php echo esc_attr($settings->profile_border_style); ?>;
        box-sizing:content-box;
        <?php if ( ! empty( $settings->profile_border_color ) ) : ?>
            border-color: #<?php echo esc_attr($settings->profile_border_color); ?>;
        <?php endif; ?>
        border-width: <?php echo esc_attr($settings->profile_border_width); ?>px;
    <?php endif; ?>  
}
.profile-card-style-3.fl-node-<?php echo esc_attr($id); ?> .team-member__socialmedia .beaver-icon i:hover,
.profile-card-style-3.fl-node-<?php echo esc_attr($id); ?> .team-member__socialmedia .beaver-icon i:hover:before {
    <?php if ( 'simple' != $settings->profile_icoimage_style ) : ?>
        <?php if ( ! empty( $settings->profile_bg_hover_color ) ) : ?>
        background: #<?php echo esc_attr($settings->profile_bg_hover_color);?>;
        <?php endif;
     endif; ?>
     color: #<?php echo esc_attr($settings->profile_hover_color); ?>; 
    <?php /* Border Style */ ?>
    <?php if ( 'custom' == $settings->profile_icoimage_style && 'none' != $settings->profile_border_style ) : ?>
        <?php if ( ! empty( $settings->profile_border_color ) ) : ?>
            border-color: #<?php echo esc_attr($settings->profile_border_hover_color); ?>;
        <?php endif; 
        endif; ?>
}
.profile-card-style-3.fl-node-<?php echo esc_attr($id); ?> .beaver-icon:not(:last-child){
    margin-right:<?php echo esc_attr($settings->profile_icon_spacing); ?>px; 
}
</style>
<!-- End Profile Card -->