<?php
// Box(alignment , padding , background-color)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_box_content_align',
    'selector' => ".profile-card-style-1.fl-node-$id .team-member-info,.profile-card-style-2.fl-node-$id .team-member-info,.profile-card-style-3.fl-node-$id .team-member-info, .profile-card-style-4.fl-node-$id,.profile-card-style-5.fl-node-$id .ct-team-member-layout",
    'props' => array(
        'text-align' => $settings->profile_box_content_align,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_box_content_align',
    'media' => 'medium',
    'selector' => ".profile-card-style-1.fl-node-$id .team-member-info, .profile-card-style-2.fl-node-$id .team-member-info,.profile-card-style-3.fl-node-$id .team-member-info,.profile-card-style-4.fl-node-$id, .profile-card-style-5.fl-node-$id .ct-team-member-layout",
    'props' => array(
        'text-align' => $settings->profile_box_content_align_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_box_content_align',
    'media' => 'responsive',
    'selector' => ".profile-card-style-1.fl-node-$id .team-member-info, .profile-card-style-2.fl-node-$id .team-member-info, .profile-card-style-3.fl-node-$id .team-member-info,.profile-card-style-4.fl-node-$id, .profile-card-style-5.fl-node-$id .ct-team-member-layout",
    'props' => array(
        'text-align' => $settings->profile_box_content_align_responsive,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".profile-card-style-1.fl-node-$id .team-member-info, .profile-card-style-2.fl-node-$id .team-member-info,.profile-card-style-3.fl-node-$id .team-member-info,.profile-card-style-4.fl-node-$id,.profile-card-style-5.fl-node-$id",
    'media' => 'default',
    'setting_name' => 'profile_box_content_padding',
    'props' => array(
        'padding-top' => $settings->profile_box_content_padding_top . $settings->profile_box_content_padding_unit,
        'padding-right' => $settings->profile_box_content_padding_right . $settings->profile_box_content_padding_unit,
        'padding-bottom' => $settings->profile_box_content_padding_bottom . $settings->profile_box_content_padding_unit,
        'padding-left' => $settings->profile_box_content_padding_left . $settings->profile_box_content_padding_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".profile-card-style-1.fl-node-$id .team-member-info, .profile-card-style-2.fl-node-$id .team-member-info,.profile-card-style-3.fl-node-$id .team-member-info, .profile-card-style-4.fl-node-$id,.profile-card-style-5.fl-node-$id",
    'media' => 'medium',
    'setting_name' => 'profile_box_content_padding',
    'props' => array(
        'padding-top' => $settings->profile_box_content_padding_top_medium . $settings->profile_box_content_padding_medium_unit,
        'padding-right' => $settings->profile_box_content_padding_right_medium . $settings->profile_box_content_padding_medium_unit,
        'padding-bottom' => $settings->profile_box_content_padding_bottom_medium . $settings->profile_box_content_padding_medium_unit,
        'padding-left' => $settings->profile_box_content_padding_left_medium . $settings->profile_box_content_padding_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".profile-card-style-1.fl-node-$id .team-member-info, .profile-card-style-2.fl-node-$id .team-member-info,.profile-card-style-3.fl-node-$id .team-member-info,.profile-card-style-4.fl-node-$id,.profile-card-style-5.fl-node-$id",
    'media' => 'responsive',
    'setting_name' => 'profile_box_content_padding',
    'props' => array(
        'padding-top' => $settings->profile_box_content_padding_top_responsive . $settings->profile_box_content_padding_responsive_unit,
        'padding-right' => $settings->profile_box_content_padding_right_responsive . $settings->profile_box_content_padding_responsive_unit,
        'padding-bottom' => $settings->profile_box_content_padding_bottom_responsive . $settings->profile_box_content_padding_responsive_unit,
        'padding-left' => $settings->profile_box_content_padding_left_responsive . $settings->profile_box_content_padding_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".profile-card-style-1.fl-node-$id .team-member-info, .profile-card-style-2.fl-node-$id .team-member-info,.profile-card-style-3.fl-node-$id .team-member,.profile-card-style-4.fl-node-$id .profile-content,.profile-card-style-4.fl-node-$id .profile-bg,.profile-card-style-4.fl-node-$id .ct-team-member-inner",
    'props' => array(
        'background-color' => $settings->profile_box_background_color,
    ),
));
// Image(Size , Border)	
FLBuilderCSS::rule(array(
    'selector' => ".profile-card-style-1.fl-node-$id .img, .profile-card-style-2.fl-node-$id .img,.profile-card-style-3.fl-node-$id .img,.profile-card-style-4.fl-node-$id .img, .profile-card-style-5.fl-node-$id .img",
    'setting_name' => 'profile_image_width_tm',
    'props' => array(
        'width' => $settings->profile_image_width_tm . 'px',
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".profile-card-style-1.fl-node-$id .img, .profile-card-style-2.fl-node-$id .img, .profile-card-style-3.fl-node-$id .img,.profile-card-style-4.fl-node-$id .img.profile-card-style-5.fl-node-$id .img",
    'setting_name' => 'profile_image_height_tm',
    'props' => array(
		'height' => $settings->profile_image_height_tm . 'px',
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_image_border_tm',
    'selector' => ".profile-card-style-1.fl-node-$id .img, .profile-card-style-2.fl-node-$id .img, .profile-card-style-3.fl-node-$id .img, .profile-card-style-4.fl-node-$id .img.profile-card-style-5.fl-node-$id .img,.profile-card-style-11.fl-node-$id",
));

// name(text color , typography )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .profile-card-style-1 .profile-name, .fl-node-$id .profile-card-style-2 .profile-name,.profile-card-style-3.fl-node-$id .profile-name, .profile-card-style-4.fl-node-$id .profile-name,.profile-card-style-5.fl-node-$id .profile-name,.profile-card-style-11.fl-node-$id .profile-name",
    'props' => array(
        'color' => $settings->profile_title_text_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_typography',
    'selector' => ".fl-node-$id .profile-card-style-1 .profile-name, .fl-node-$id .profile-card-style-2 .profile-name, .profile-card-style-3.fl-node-$id .profile-name, .profile-card-style-4.fl-node-$id .profile-name, .profile-card-style-5.fl-node-$id .profile-name,.profile-card-style-11.fl-node-$id .profile-name",
));
FLBuilderCSS::rule(array(
    'selector' => ".profile-card-style-11 .profile-name",
    'props' => array(
        'background-color' => $settings->profile_title_bg_color,
    ),
));

// description(text color , typography )	
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .profile-card-style-1 .profile-description, .fl-node-$id .profile-card-style-2 .profile-description,.profile-card-style-3.fl-node-$id .profile-description, .profile-card-style-4.fl-node-$id .profile-description, .profile-card-style-5.fl-node-$id .profile-description",
    'props' => array(
        'color' => $settings->profile_description_text_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_description_typography',
    'selector' => ".fl-node-$id .profile-card-style-1 .profile-description, .fl-node-$id .profile-card-style-2 .profile-description,.fl-node-$id.profile-card-style-3 .profile-description,.profile-card-style-4.fl-node-$id .profile-description, .profile-card-style-5.fl-node-$id .profile-description",
));

// designation(text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .profile-card-style-1 .profile-position, .fl-node-$id .profile-card-style-2 .profile-position,.profile-card-style-3.fl-node-$id .profile-position, .profile-card-style-4.fl-node-$id .profile-position,.profile-card-style-5.fl-node-$id .profile-position,.profile-card-style-11.fl-node-$id .profile-position",
    'props' => array(
        'color' => $settings->profile_designation_text_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_designation_typography',
    'selector' => ".fl-node-$id .profile-card-style-1 .profile-position, .fl-node-$id .profile-card-style-2 .profile-position,.profile-card-style-3.fl-node-$id .profile-position,.profile-card-style-4.fl-node-$id .profile-position,.profile-card-style-5.fl-node-$id .profile-position.profile-card-style-11.fl-node-$id .profile-position",
));
FLBuilderCSS::rule(array(
    'selector' => ".profile-card-style-11 .profile-position",
    'props' => array(
        'background-color' => $settings->profile_designation_bg_color,
    ),
));

//icon background color
FLBuilderCSS::rule(array(
    'selector' => ".profile-card-style-1.fl-node-$id .team-member__socialmedia,.profile-card-style-2.fl-node-$id .team-member__socialmedia,.profile-card-style-3.fl-node-$id .team-member__socialmedia, .profile-card-style-4.fl-node-$id .team-member__socialmedia, .profile-card-style-5.fl-node-$id .team-member__socialmedia,.profile-card-style-11.fl-node-$id .team-member__socialmedia",
    'props' => array(
        'background-color' => $settings->profile_icon_bg_color,
    ),
));
// icon padding
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".profile-card-style-1.fl-node-$id .beaver-social-icon i, .profile-card-style-2.fl-node-$id .beaver-social-icon i, .profile-card-style-3.fl-node-$id .beaver-social-icon i, .profile-card-style-4.fl-node-$id .beaver-social-icon i, .profile-card-style-5.fl-node-$id .beaver-social-icon i,.profile-card-style-11.fl-node-$id .beaver-social-icon i",
    'media' => 'medium',
    'setting_name' => 'profile_icon_padding',
    'props' => array(
        'padding-top' => $settings->profile_icon_padding_top_medium . $settings->profile_icon_padding_medium_unit,
        'padding-right' => $settings->profile_icon_padding_right_medium . $settings->profile_icon_padding_medium_unit,
        'padding-bottom' => $settings->profile_icon_padding_bottom_medium . $settings->profile_icon_padding_medium_unit,
        'padding-left' => $settings->profile_icon_padding_left_medium . $settings->profile_icon_padding_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".profile-card-style-1.fl-node-$id .beaver-social-icon i, .profile-card-style-2.fl-node-$id .beaver-social-icon i,.profile-card-style-3.fl-node-$id .beaver-social-icon i, .profile-card-style-4.fl-node-$id .beaver-social-icon i,.profile-card-style-5.fl-node-$id .beaver-social-icon i,.profile-card-style-11.fl-node-$id .beaver-social-icon i",
    'media' => 'default',
    'setting_name' => 'profile_icon_padding',
    'props' => array(
        'padding-top' => $settings->profile_icon_padding_top . $settings->profile_icon_padding_unit,
        'padding-right' => $settings->profile_icon_padding_right . $settings->profile_icon_padding_unit,
        'padding-bottom' => $settings->profile_icon_padding_bottom . $settings->profile_icon_padding_unit,
        'padding-left' => $settings->profile_icon_padding_left . $settings->profile_icon_padding_unit,
    ),
));

FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".profile-card-style-1.fl-node-$id .beaver-social-icon i, .profile-card-style-2.fl-node-$id .beaver-social-icon i,.profile-card-style-3.fl-node-$id .beaver-social-icon i,.profile-card-style-4.fl-node-$id .beaver-social-icon i, .profile-card-style-5.fl-node-$id .beaver-social-icon i,.profile-card-style-11.fl-node-$id .beaver-social-icon i",
    'media' => 'responsive',
    'setting_name' => 'profile_icon_padding',
    'props' => array(
        'padding-top' => $settings->profile_icon_padding_top_responsive . $settings->profile_icon_padding_responsive_unit,
        'padding-right' => $settings->profile_icon_padding_right_responsive . $settings->profile_icon_padding_responsive_unit,
        'padding-bottom' => $settings->profile_icon_padding_bottom_responsive . $settings->profile_icon_padding_responsive_unit,
        'padding-left' => $settings->profile_icon_padding_left_responsive . $settings->profile_icon_padding_responsive_unit,
    ),
));

// icon align
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_icon_align',
    'selector' => ".profile-card-style-3.fl-node-$id .team-member__socialmedia, .profile-card-style-4.fl-node-$id .team-member__socialmedia,.profile-card-style-5.fl-node-$id .team-member__socialmedia",
    'props' => array(
        'text-align' => $settings->profile_icon_align,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_icon_align',
    'media' => 'medium',
    'selector' => ".profile-card-style-3.fl-node-$id .team-member__socialmedia, .profile-card-style-4.fl-node-$id .team-member__socialmedia,.profile-card-style-5.fl-node-$id .team-member__socialmedia",
    'props' => array(
        'text-align' => $settings->profile_icon_align_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'profile_icon_align',
    'media' => 'responsive',
    'selector' => ".profile-card-style-3.fl-node-$id .team-member__socialmedia, .profile-card-style-4.fl-node-$id .team-member__socialmedia,.profile-card-style-5.fl-node-$id .team-member__socialmedia",
    'props' => array(
        'text-align' => $settings->profile_icon_align_responsive,
    ),
));

FLBuilderCSS::rule(array(
    'selector' => ".profile-card-style-11.fl-node-$id .triangle-div",
    'props' => array(
        'border-color' => $settings->profile_triagle_color,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.profile-card-style-1 .profile-name,.fl-node-$id.profile-card-style-2 .profile-name,.fl-node-$id.profile-card-style-3 .profile-name,.fl-node-$id.profile-card-style-4 .profile-name,.fl-node-$id.profile-card-style-5 .profile-name,.fl-node-$id.profile-card-style-11 .profile-name",
    'media' => 'default',
    'setting_name' => 'profile_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->profile_title_spacing_bottom . $settings->profile_title_spacing_bottom_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.profile-card-style-1 .profile-description,.fl-node-$id.profile-card-style-2 .profile-description,.fl-node-$id.profile-card-style-3 .profile-description,.fl-node-$id.profile-card-style-4 .profile-description,.fl-node-$id.profile-card-style-5 .profile-description",
    'media' => 'default',
    'setting_name' => 'profile_description_spacing',
    'props' => array(
        'margin-bottom' => $settings->profile_description_spacing . $settings->profile_description_spacing_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.profile-card-style-1 .profile-position,.fl-node-$id.profile-card-style-2 .profile-position,.fl-node-$id.profile-card-style-3 .profile-position,.fl-node-$id.profile-card-style-4 .profile-position,.fl-node-$id.profile-card-style-5 .profile-position,.fl-node-$id.profile-card-style-11 .profile-position",
    'media' => 'default',
    'setting_name' => 'cebb_designation_spacing',
    'props' => array(
        'margin-bottom' => $settings->cebb_designation_spacing. $settings->cebb_designation_spacing_unit,
    ),
));

?>





