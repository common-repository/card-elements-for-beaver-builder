<?php
// Grid Gap
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.post-card-grid-gap",
    'media' => 'default',
    'setting_name' => 'post_card_grid_gap',
    'props' => array(
        'grid-column-gap' => $settings->post_card_grid_gap . $settings->post_card_grid_gap_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.post-card-grid-gap",
    'media' => 'medium',
    'setting_name' => 'post_card_grid_gap',
    'props' => array(
        'grid-column-gap' => $settings->post_card_grid_gap_medium . $settings->post_card_grid_gap_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.post-card-grid-gap",
    'media' => 'responsive',
    'setting_name' => 'post_card_grid_gap',
    'props' => array(
        'grid-column-gap' => $settings->post_card_grid_gap_responsive . $settings->post_card_grid_gap_responsive_unit,
    ),
));

// Row Gap
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.post-card-style-1 .post-card-container,.fl-node-$id.post-card-style-2 .post-card-container,.fl-node-$id.post-card-style-6",
    'media' => 'default',
    'setting_name' => 'post_card_row_gap',
    'props' => array(
        'margin-bottom' => $settings->post_card_row_gap . $settings->post_card_row_gap_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id .post-card-style-1.post-card-container,.fl-node-$id.post-card-style-2 .post-card-container,.fl-node-$id .post-card-style-6",
    'media' => 'medium',
    'setting_name' => 'post_card_row_gap',
    'props' => array(
        'margin-bottom' => $settings->post_card_row_gap_medium . $settings->post_card_row_gap_medium_unit,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.post-card-style-1 .post-card-container,.fl-node-$id.post-card-style-2 .post-card-container,.fl-node-$id.post-card-style-6",
    'media' => 'responsive',
    'setting_name' => 'post_card_row_gap',
    'props' => array(
        'margin-bottom' => $settings->post_card_row_gap_responsive . $settings->post_card_row_gap_responsive_unit,
    ),
));

//post card Boder 
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'post_card_border_radius',
    'selector' => ".fl-node-$id.post-card-style-2 .post-card-image,.fl-node-$id.post-card-style-6 .card",
));

// Box alignment
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'post_alignment',
    'selector' => ".fl-node-$id.post-card-style-1 .post-card-alignment,.fl-node-$id.post-card-style-1 .card_align,.fl-node-$id.post-card-style-1 .card-category,.fl-node-$id.post-card-style-1 .card_title,.fl-node-$id.post-card-style-2 .post-card-alignment,.fl-node-$id.post-card-style-2 .card_align,.fl-node-$id.post-card-style-2 .card-category,.fl-node-$id.post-card-style-2 .card_title,.fl-node-$id.post-card-style-6 .post-card-alignment,.fl-node-$id.post-card-style-6 .post-content",
    'props' => array(
        'text-align' => $settings->post_alignment,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'post_alignment',
    'media' => 'medium',
    'selector' => ".fl-node-$id.post-card-style-1 .post-card-alignment,.fl-node-$id.post-card-style-1 .card_align,.fl-node-$id.post-card-style-1 .card-category,.fl-node-$id.post-card-style-1 .card_title,.fl-node-$id.post-card-style-2 .post-card-alignment,.fl-node-$id.post-card-style-2 .card_align,.fl-node-$id.post-card-style-2 .card-category,.fl-node-$id.post-card-style-2 .card_title,.fl-node-$id.post-card-style-6 .post-card-alignment,.fl-node-$id.post-card-style-6 .post-card-style-6 .post-content",
    'props' => array(
        'text-align' => $settings->post_alignment_medium,
    ),
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'setting_name' => 'post_alignment',
    'media' => 'responsive',
    'selector' => ".fl-node-$id.post-card-style-1 .post-card-alignment,.fl-node-$id.post-card-style-1 .card_align,.fl-node-$id.post-card-style-1 .card-category,.fl-node-$id.post-card-style-1 .card_title,.fl-node-$id.post-card-style-2 .post-card-alignment,.fl-node-$id.post-card-style-2 .card_align,.fl-node-$id.post-card-style-2 .card-category,.fl-node-$id.post-card-style-2 .card_title,.fl-node-$id.post-card-style-6 .post-card-style-6 .post-content",
    'props' => array(
        'text-align' => $settings->post_alignment_responsive,
    ),
));
//Image border
FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'post_image_border',
    'selector' => ".fl-node-$id.post-card-style-1 .post-card-item_img,.fl-node-$id.post-card-style-2 .post-card-item_img,.fl-node-$id.post-card-style-6 .post-card-item_img",
));

//Content background color
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-card-content-box,.fl-node-$id.post-card-style-2 .post-card-content-bg-box",
    'props' => array(
        'background-color' => $settings->content_box_bg_color,
    ),
));

//Category background color
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-module .post-content .category",
    'props' => array(
        'background-color' => $settings->category_bg_color,
    ),
));

//Date background color
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-module .thumbnail .date",
    'props' => array(
        'background-color' => $settings->date_bg_color,
    ),
));

//Category background hover color
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-module .post-content .category:hover",
    'props' => array(
        'background-color' => $settings->category_bg_hover_color,
    ),
));

//Date background hover color
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-module .thumbnail .date:hover",
    'props' => array(
        'background-color' => $settings->date_bg_hover_color,
    ),
));

// date(text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-module .thumbnail .date .day,.fl-node-$id.post-card-style-2 .day,.fl-node-$id.post-card-style-6 .card-time",
    'props' => array(
        'color' => $settings->post_date_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-module .thumbnail .date .day:hover,.fl-node-$id.post-card-style-2 .day:hover,.fl-node-$id.post-card-style-6 .card-time:hover",
    'props' => array(
        'color' => $settings->post_date_hover_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'post_date_typography',
    'selector' => ".fl-node-$id.post-card-style-1 .post-module .thumbnail .date .day,.fl-node-$id.post-card-style-2 .day,.fl-node-$id.post-card-style-6 .card-time,.fl-node-$id.post-card-style-6 .card-clock-info ",
));


// Category(text color , typgraphy )	
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .category span.cat-links a,.fl-node-$id.post-card-style-2 .card_meta a,.fl-node-$id.post-card-style-6 .card-category a",
    'props' => array(
        'color' => $settings->post_category_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .category:hover span.cat-links a,.fl-node-$id.post-card-style-1 .category span.cat-links a:hover,.fl-node-$id.post-card-style-2 .card_meta a:hover,.fl-node-$id.post-card-style-6 .card-category a:hover",
    'props' => array(
        'color' => $settings->post_category_hover_color,
    ),
));

FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'post_category_typography',
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_category a,.fl-node-$id.post-card-style-2 .card_meta a,.fl-node-$id.post-card-style-2 .post-card_category,.fl-node-$id.post-card-style-6 .card-category",
));

FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.post-card-style-2 .post-card_category,.fl-node-$id.post-card-style-6 .card-category",
    'media' => 'default',
    'setting_name' => 'post_category_spacing',
    'props' => array(
        'margin-bottom' => $settings->post_category_spacing . $settings->post_category_spacing_unit,
    ),
));

// title (text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_title a,.fl-node-$id.post-card-style-2 .card_title .title a,.fl-node-$id.post-card-style-6 .card-title a",
    'props' => array(
        'color' => $settings->post_title_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_title a:hover,.fl-node-$id.post-card-style-2 .card_title .title a:hover,.fl-node-$id.post-card-style-6 .card-title a:hover",
    'props' => array(
        'color' => $settings->post_title_hover_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'post_title_typography',
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_title,.fl-node-$id.post-card-style-2 .post-card_title,.fl-node-$id.post-card-style-6 .card-title",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_title,.fl-node-$id.post-card-style-2 .post-card_title,.fl-node-$id.post-card-style-6 .card-title",
    'media' => 'default',
    'setting_name' => 'post_title_spacing',
    'props' => array(
        'margin-bottom' => $settings->post_title_spacing . $settings->post_title_spacing_unit,
    ),
));

// Excerpt (text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_excerpt,.fl-node-$id.post-card-style-2 .post-card_excerpt,.fl-node-$id.post-card-style-6 .post-card_excerpt",
    'props' => array(
        'color' => $settings->post_excerpt_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'post_excerpt_typography',
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_excerpt,.fl-node-$id.post-card-style-2 .post-card_excerpt,.fl-node-$id.post-card-style-6 .post-card_excerpt",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_excerpt,.fl-node-$id.post-card-style-2 .post-card_excerpt,.fl-node-$id.post-card-style-6 .post-card_excerpt",
    'media' => 'default',
    'setting_name' => 'post_excerpt_spacing',
    'props' => array(
        'margin-bottom' => $settings->post_excerpt_spacing . $settings->post_excerpt_spacing_unit,
    ),
));
// read more (text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_read-more,.fl-node-$id.post-card-style-2 .description .entry-read-more,.fl-node-$id.post-card-style-6 .description .entry-read-more",
    'props' => array(
        'color' => $settings->post_read_more_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_read-more:hover,.fl-node-$id.post-card-style-2 .description .entry-read-more:hover,.fl-node-$id.post-card-style-6 .description .entry-read-more:hover",
    'props' => array(
        'color' => $settings->post_read_more_hover_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'post_read_more_typography',
    'selector' => ".fl-node-$id.post-card-style-1 .post-card_read-more,.fl-node-$id.post-card-style-2 .post-card_read-more.fl-node-$id.post-card-style-6 .post-card_read-more,.fl-node-$id.post-card-style-6 .description .entry-read-more",
));
// meta (text color , typgraphy )
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-meta i,.fl-node-$id.post-card-style-2 .post-card_meta-data i,.post-card-style-6 .card-author i",
    'props' => array(
        'color' => $settings->post_meta_icon_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-meta a,.fl-node-$id.post-card-style-2 .card_action span a,.fl-node-$id.post-card-style-6 .card-by a",
    'props' => array(
        'color' => $settings->post_meta_color,
    ),
));
FLBuilderCSS::rule(array(
    'selector' => ".fl-node-$id.post-card-style-1 .post-meta a:hover,.fl-node-$id.post-card-style-2 .card_action span a:hover,.fl-node-$id.post-card-style-6 .card-by a:hover",
    'props' => array(
        'color' => $settings->post_meta_hover_color,
    ),
));
FLBuilderCSS::typography_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'post_meta_typography',
    'selector' => ".fl-node-$id.post-card-style-1 .post-meta a,.fl-node-$id.post-card-style-2 .card_action span a,.fl-node-$id.post-card-style-2 .post-card_meta-data,.fl-node-$id.post-card-style-6 .card-by a,.fl-node-$id.post-card-style-6 .card-by",
));
FLBuilderCSS::rule(array(
    'settings' => $settings,
    'selector' => ".fl-node-$id.post-card-style-1 .post-meta,.fl-node-$id.post-card-style-2 .post-card_meta-data,.fl-node-$id.post-card-style-6 .card-by",
    'media' => 'default',
    'setting_name' => 'post_meta_spacing',
    'props' => array(
        'margin-bottom' => $settings->post_meta_spacing . $settings->post_meta_spacing_unit,
    ),
));

