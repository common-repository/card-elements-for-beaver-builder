<?php

// Box(alignment , padding , background-color)
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'testimonial_box_content_align',
    'selector' => ".testimonial-card-style-1.fl-node-$id .item,.testimonial-card-style-2.fl-node-$id .item, .testimonial-card-style-6.fl-node-$id .container",
    'props' => array(
        'text-align' => $settings->testimonial_box_content_align,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'testimonial_box_content_align',
    'media' => 'medium',
    'selector' => ".testimonial-card-style-1.fl-node-$id .item,.testimonial-card-style-2.fl-node-$id .item, .testimonial-card-style-6.fl-node-$id .container" ,
    'props' => array(
        'text-align' => $settings->testimonial_box_content_align_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'testimonial_box_content_align',
    'media' => 'responsive',
    'selector' => ".testimonial-card-style-1.fl-node-$id .item,.testimonial-card-style-2.fl-node-$id .item, .testimonial-card-style-6.fl-node-$id .container",
    'props' => array(
        'text-align' => $settings->testimonial_box_content_align_responsive,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .testimonial-card-style-1 .item , .fl-node-$id .testimonial-card-style-2 .item, .testimonial-card-style-6.fl-node-$id .container",
    'media' => 'default',
    'setting_name' => 'testimonial_box_content_padding',
    'props' => array(
        'padding-top' => $settings->testimonial_box_content_padding_top . $settings->testimonial_box_content_padding_unit,
        'padding-right' => $settings->testimonial_box_content_padding_right . $settings->testimonial_box_content_padding_unit,
        'padding-bottom' => $settings->testimonial_box_content_padding_bottom . $settings->testimonial_box_content_padding_unit,
        'padding-left' => $settings->testimonial_box_content_padding_left . $settings->testimonial_box_content_padding_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .testimonial-card-style-1 .item , .fl-node-$id .testimonial-card-style-2 .item, .testimonial-card-style-6.fl-node-$id .container",
    'media' => 'medium',
    'setting_name' => 'testimonial_box_content_padding',
    'props' => array(
        'padding-top' => $settings->testimonial_box_content_padding_top_medium . $settings->testimonial_box_content_padding_medium_unit,
        'padding-right' => $settings->testimonial_box_content_padding_right_medium . $settings->testimonial_box_content_padding_medium_unit,
        'padding-bottom' => $settings->testimonial_box_content_padding_bottom_medium . $settings->testimonial_box_content_padding_medium_unit,
        'padding-left' => $settings->testimonial_box_content_padding_left_medium . $settings->testimonial_box_content_padding_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .testimonial-card-style-1 .item , .fl-node-$id .testimonial-card-style-2 .item, .testimonial-card-style-6.fl-node-$id .container",
    'media' => 'responsive',
    'setting_name' => 'testimonial_box_content_padding',
    'props' => array(
        'padding-top' => $settings->testimonial_box_content_padding_top_responsive . $settings->testimonial_box_content_padding_responsive_unit,
        'padding-right' => $settings->testimonial_box_content_padding_right_responsive . $settings->testimonial_box_content_padding_responsive_unit,
        'padding-bottom' => $settings->testimonial_box_content_padding_bottom_responsive . $settings->testimonial_box_content_padding_responsive_unit,
        'padding-left' => $settings->testimonial_box_content_padding_left_responsive . $settings->testimonial_box_content_padding_responsive_unit,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .testimonial-card-style-1 .bg-color,.fl-node-$id .testimonial-card-style-1 .testimonial-box-shape, .fl-node-$id .testimonial-card-style-2 .item, .testimonial-card-style-6.fl-node-$id .container",
    'props' => array(
        'background-color' => $settings->testimonial_box_background_color,
    ),
));

// Image(Size , Border)	
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .testimonial-card-style-1 .img-fluid, .fl-node-$id .testimonial-card-style-2 .img-fluid, .fl-node-$id .testimonial-card-style-6 .img-fluid",
    'setting_name' => 'testimonial_image_size_tm',
    'props' => array(
        'width' => $settings->testimonial_image_size_tm . 'px',
        'height' => $settings->testimonial_image_size_tm . 'px',
    ),
));
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'testimonial_image_border_tm',
    'selector' => ".fl-node-$id .testimonial-card-style-1 .img-fluid, .fl-node-$id .testimonial-card-style-2 .img-fluid, .fl-node-$id .testimonial-card-style-6 .pic, .fl-node-$id .testimonial-card-style-6 .testimonial-description",
));

// name(text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .testimonial-card-style-1 .testimonial-tag, .fl-node-$id .testimonial-card-style-2 .testimonial-tag,.fl-node-$id .testimonial-card-style-6 .testimonial-tag",
    'props' => array(
        'color' => $settings->testimonial_title_text_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'testimonial_typography',
    'selector' => ".fl-node-$id .testimonial-card-style-1 .testimonial-name, .fl-node-$id .testimonial-card-style-2 .testimonial-tag, .fl-node-$id .testimonial-card-style-6 .testimonial-tag",
));

// description(text color , typgraphy )	
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .testimonial-card-style-1 .testimonial-description, .fl-node-$id .testimonial-card-style-2 .testimonial-description,.fl-node-$id .testimonial-card-style-6 .testimonial-description",
    'props' => array(
        'color' => $settings->testimonial_description_text_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'testimonial_description_typography',
    'selector' => ".fl-node-$id .testimonial-card-style-1 .testimonial-description, .fl-node-$id .testimonial-card-style-2 .testimonial-description,.fl-node-$id .testimonial-card-style-6 .testimonial-description",
));

// designation(text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .testimonial-card-style-1 .testimonial-position, .fl-node-$id .testimonial-card-style-2 .testimonial-position,.fl-node-$id .testimonial-card-style-6 .testimonial-position",
    'props' => array(
        'color' => $settings->testimonial_designation_text_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'testimonial_designation_typography',
    'selector' => ".fl-node-$id .testimonial-card-style-1 .testimonial-position, .fl-node-$id .testimonial-card-style-2 .testimonial-position,.fl-node-$id .testimonial-card-style-6 .testimonial-position",
));

FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'title_typography',
		'selector'     => ".testimonial-card-style-2.fl-node-$id .tm-rating-title",
	)
);
//star-ratting 
FLBuilderCSS::responsive_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'star_icon_size',
		'selector'     => "testimonial-card-style-2.fl-node-$id .tm-rating i",
		'prop'         => 'font-size',
		'unit'         => 'px',
	)
);

FLBuilderCSS::responsive_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'star_icon_spacing',
		'selector'     => "testimonial-card-style-2.fl-node-$id .tm-rating i:not(:last-of-type)",
		'prop'         => 'margin-right',
		'unit'         => 'px',
	)
);

//star-rating
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id .testimonial-card-style-2 .testimonial-rating-content .tm-rating-title",
    'props' => array(
        'color' => $settings->title_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'title_typography',
    'selector' => ".testimonial-card-style-2.fl-node-$id .tm-rating-title",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'alignment',
    'selector' => ".testimonial-card-style-2.fl-node-$id .testimonial-rating-content",
    'props' => array(
        'text-align' => $settings->alignment,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.testimonial-card-style-1 .testimonial-tag,.fl-node-$id.testimonial-card-style-2 .testimonial-tag,.fl-node-$id.testimonial-card-style-6 .testimonial-tag",
    'media' => 'default',
    'setting_name' => 'testimonial_title_spacing_bottom',
    'props' => array(
        'margin-bottom' => $settings->testimonial_title_spacing_bottom . $settings->testimonial_title_spacing_bottom_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.testimonial-card-style-1 .testimonial-description,.fl-node-$id.testimonial-card-style-2 .testimonial-description,.fl-node-$id.testimonial-card-style-6 .testimonial-description",
    'media' => 'default',
    'setting_name' => 'testimonial_description_spacing',
    'props' => array(
        'margin-bottom' => $settings->testimonial_description_spacing . $settings->testimonial_description_spacing_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.testimonial-card-style-1 .testimonial-position,fl-node-$id.testimonial-card-style-2 .testimonial-position,fl-node-$id.testimonial-card-style-6 .testimonial-position",
    'media' => 'default',
    'setting_name' => 'cebb_designation_spacing',
    'props' => array(
        'margin-bottom' => $settings->cebb_designation_spacing . $settings->cebb_designation_spacing_unit,
    ),
));
?>


