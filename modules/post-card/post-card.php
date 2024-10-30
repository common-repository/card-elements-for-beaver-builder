<?php

class Post_Card extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Post Card', 'card-elements-for-beaver-builder'),
            'description' => __('An example for coding new modules.', 'card-elements-for-beaver-builder'),
            'category' => __('My Modules', 'card-elements-for-beaver-builder'),
            'group'    =>__( 'Card Elements', 'card-elements-for-beaver-builder' ),
            'dir' => CEBB_DIR . 'modules/post-card/',
            'url' => CEBB_URL . 'modules/post-card/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'icon' => 'icon.svg',
        ));
        $this->add_css( 'font-awesome-5' );
    }

}

/**
 * Register the module and its form settings.
 */

FLBuilder::register_module('Post_Card', array(
    // Tab General
    'cebb_general_tab' => array(
        'title' => __('General', 'card-elements-for-beaver-builder'),
        'sections' => array(
            // Section Post Layout
            'cebb_post_layout' => array(
                'title' => __('Post Layout', 'card-elements-for-beaver-builder'),
                'fields' => array(
                     // Title
                    'post_card_style' => array(
                        'type' => 'select',
                        'label' => __('Post Card Style', 'card-elements-for-beaver-builder'),
                        'options' => [
                            'post-card-style-1' => esc_html__('Post Card Style 1', 'card-elements-for-beaver-builder'),
                            'post-card-style-2' => esc_html__('Post Card Style 2', 'card-elements-for-beaver-builder'),
                            'post-card-style-6' => esc_html__('Post Card Style 6', 'card-elements-for-beaver-builder'),
                        ],
                        'default' => 'post-card-style-1',
                        'toggle'        => array(
                            'post-card-style-1'      => array(
                            'fields'      => array('category_bg_color','date_bg_color','category_bg_hover_color','date_bg_hover_color'), 
                            'sections'    => array('section_design_image_layout','section_design_content_bg'),
                            ),
                            'post-card-style-2'      => array(
                                'fields'      => array('post_category_spacing','post_card_border_radius','section_design_content_bg'),
                                'sections'    => array('section_design_image_layout'),
                            ),
                            'post-card-style-6'      => array(
                            'fields'      => array('post_category_spacing','post_card_border_radius'),
                            ),
                        )
                    ), 

                    //post card columns
                    'post_card_columns' => array(
                        'type' => 'select',
                        'label' => __('Post Card Colums', 'card-elements-for-beaver-builder'),
                        'responsive'  => array(
                            'placeholder' => array(
                              'default'    =>  '3',
                              'medium'     =>  '2',
                              'responsive' =>  '1',
                            ),
                        ),
                        'options' => [
                            '1' => '1',
                            '2' => '2',
                            '3' => '3',
                            '4' => '4',
                            '5' => '5',
                            '6' => '6',
                        ],
                        'default'    =>  '3',
                        'show' => true,
                    ), 
                    //number of post
                    'number_of_posts' => array(
                        'type'    => 'unit',
                        'label'   => __( 'Display No. of Posts', 'card-elements-for-beaver-builder' ),
                        'default' => '6',
                    ),
                    // Image Size
                    'image_size'          => array(
						'type'    => 'photo-sizes',
						'label'   => __( 'Image Size', 'card-elements-for-beaver-builder' ),
						'default' => 'medium',
					),
                )   
            ),
            'cebb_post_content' => array(
                'title' => __('Post Content', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Title
                    // Show & Hide Title
                    'post_title_show_hide' => array(
                        'type' => 'button-group',
                        'label' => __('Show/Hide Title', 'card-elements-for-beaver-builder'),
                        'options' => array(
                            'post_title_yes' => __('Yes', 'card-elements-for-beaver-builder'),
                            'post_title_no' => __('No', 'card-elements-for-beaver-builder'),
                        ),
                        'toggle' => array(
                            'post_title_yes' => array(
                                'fields' => array('post_html_tag'), 
                                'sections' => array('cebb_style_title'),
                            ),
                        ),
                        'default' => 'post_title_yes',
                    ),
                    // Title Tag
                    'post_html_tag' => array(
                        'type' => 'select',
                        'label' => __('Name HTML Tag', 'card-elements-for-beaver-builder'),
                        'default' => 'h2',
                        'options' => array(
                            'h1' => __('H1', 'card-elements-for-beaver-builder'),
                            'h2' => __('H2', 'card-elements-for-beaver-builder'),
                            'h3' => __('H3', 'card-elements-for-beaver-builder'),
                            'h4' => __('H4', 'card-elements-for-beaver-builder'),
                            'h5' => __('H5', 'card-elements-for-beaver-builder'),
                            'h6' => __('H6', 'card-elements-for-beaver-builder'),
                        ),
                    ),

                    // Show & Hide post excerpt
                    'post_excerpt_show_hide' => array(
                        'type' => 'button-group',
                        'label' => __('Show/Hide Excerpt', 'card-elements-for-beaver-builder'),
                        'options' => array(
                            'post_excerpt_yes' => __('Yes', 'card-elements-for-beaver-builder'),
                            'post_excerpt_no' => __('No', 'card-elements-for-beaver-builder'),
                        ),
                        'toggle' => array(
                            'post_excerpt_yes' => array(
                                'fields' => array('post_excerpt_length','post_excerpt_from'),
                                'sections' => array('cebb_style_excerpt'),
                            ),
                        ),
                        'default' => 'post_excerpt_yes',
                    ),

                    //post excerpt length
                    'post_excerpt_length' => array(
                        'type'    => 'unit',
                        'label'   => __( 'Excerpt Length', 'card-elements-for-beaver-builder' ),
                        'default' => apply_filters('excerpt_length', 25),
                        'default' => '6',
                    ),

                    //excert form
                    'post_excerpt_from' => array(
                        'type' => 'select',
                        'label' => __('Excerpt From', 'card-elements-for-beaver-builder'),
                        'default' => 'content',
                        'options' => array(
                            'content' => __('Content', 'card-elements-for-beaver-builder'),
                            'excerpt' => __('Excerpt', 'card-elements-for-beaver-builder'),
                        ),
                    ),        
                )   
            ),
            'cebb_post_read_more' => array(
                'title' => __('Read More', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // show hide read more text
                    'post_read_more_show_hide' => array(
                        'type' => 'button-group',
                        'label' => __('Read More', 'card-elements-for-beaver-builder'),
                        'options' => array(
                            'post_read_more_yes' => __('Yes', 'card-elements-for-beaver-builder'),
                            'post_read_more_no' => __('No', 'card-elements-for-beaver-builder'),
                        ),
                        'toggle' => array(
                            'post_read_more_yes' => array(
                                'fields' => array('post_read_more'), 
                                'sections' => array('cebb_style_read_more'),
                            ),
                        ),
                        'default' => 'post_read_more_yes',
                    ),
                    // Read More text
                    'post_read_more' => array(
                        'type' => 'text',
                        'label' => __('Read More Text', 'card-elements-for-beaver-builder'),
                        'default' => __('Read More »', 'card-elements-for-beaver-builder'),
                    ),
                )   
            ),   
            'cebb_post_meta_data' => array(
                'title' => __('Meta data', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // show hide meta data text
                    'post_meta_data_show_hide' => array(
                        'type' => 'button-group',
                        'label' => __('Show/Hide Meta Data', 'card-elements-for-beaver-builder'),
                        'options' => array(
                            'post_meta_data_yes' => __('Yes', 'card-elements-for-beaver-builder'),
                            'post_meta_data_no' => __('No', 'card-elements-for-beaver-builder'),
                        ),
                        'toggle' => array(
                            'post_meta_data_yes' => array(
                                'fields' => array('post_meta_data'), 
                            ),
                        ),
                        'default' => 'post_meta_data_yes',
                    ),
                    // Post meta data
                    'post_meta_data' => array(
                        'type'          => 'select',
                        'label'         => __( 'Meta Data', 'card-elements-for-beaver-builder' ),
                        'default'       => ['author', 'date', 'comments', 'tags', 'category'],
                        'options'       => array(
                            'author' => __('Author', 'card-elements-for-beaver-builder'),
                            'date' => __('Date', 'card-elements-for-beaver-builder'),
                            'comments' => __('Comments', 'card-elements-for-beaver-builder'),
                            'tags' => __('Tags', 'card-elements-for-beaver-builder'),
                            'category' => __('Category', 'card-elements-for-beaver-builder'),
                        ),
                        'multi-select'  => true
                    ),   
                )   
            ), 
            'cebb_post_post_query' => array(
                'title' => __('Query', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Post query
                    'blog_categories' => array(
                        'type'          => 'select',
                        'label'         => __( 'Categories', 'card-elements-for-beaver-builder' ),
                        'default'       => ['author', 'date', 'comments', 'tags', 'category'],
                        'options'       => card_elements_post_categories(),
                        'multi-select'  => true
                    ),   
                )   
            ),
            'cebb_post_advanced' => array(
                'title' => __('Advanced', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Post order by
                    'post_card_orderby' => array(
                        'type'          => 'select',
                        'label'         => __( 'Order By', 'card-elements-for-beaver-builder' ),
                        'default' => 'post_date',
                        'options'       => array(
                            'post_date' => __('Date', 'card-elements-for-beaver-builder'),
                            'post_title' => __('Title', 'card-elements-for-beaver-builder'),
                            'menu_order' => __('Menu Order', 'card-elements-for-beaver-builder'),
                            'rand' => __('Random', 'card-elements-for-beaver-builder'),
                        ),
                    ), 
                    //Post sort by
                    'post_sort_order' => array(
                        'type'          => 'select',
                        'label'         => __( 'Sort By', 'card-elements-for-beaver-builder' ),
                        'default' => 'desc',
                        'options'       => array(
                            'asc' => __('ASC', 'card-elements-for-beaver-builder'),
                            'desc' => __('DESC', 'card-elements-for-beaver-builder'),
                        ),
                    ),     
                )   
            ),  
        ),
    ),

 // Tab Style
    'cebb_style_tab' => array(
        'title' => __('Style', 'card-elements-for-beaver-builder'),
        'sections' => array(
              // Section layout
            'cebb_design_layout' => array(
                'title' => __('Layout', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Post card grid gap
                    'post_card_grid_gap' => array(
                        'type' => 'unit',
                        'label' => __('Grid Gap', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'slider' => true,
                        'units' => array(
                            'px',
                            'em',
                            '%',
                            'vw',
                            'vh',
                        ),
                        'default' => 30,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-grid-gap',
                            'property' => 'grid-column-gap',
                        ),
                    ),
                    // Post card row gap
                    'post_card_row_gap' => array(
                        'type' => 'unit',
                        'label' => __('Rows Gap', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'slider' => true,
                        'units' => array(
                            'px',
                            'em',
                            '%',
                            'vw',
                            'vh',
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card-container,.post-card-style-2 .post-card-container,.post-card-style-6',
                            'property' => 'margin-bottom',
                        ),
                    ),
                     // Post card Border radius
                     'post_card_border_radius' => array(
                        'type'        => 'unit',
                        'label'       => __( 'Border Radius', 'card-elements-for-beaver-builder' ),
                        'maxlength'   => '3',
                        'size'        => '6',
                        'placeholder' => '0',
                        'units'       => array( 'px' ),
                        'slider'      => array(
                            'px' => array(
                                'min'  => 0,
                                'max'  => 1000,
                                'step' => 10,
                            ),
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-2 .post-card-image,.post-card-style-6 .card',
                            'property' => 'border-radius'
                        ),
                    ),
                    'post_alignment' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'default' => 'left',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card-alignment,.post-card-style-1 .card_align,post-card-style-1 .card-category,.post-card-style-2 .card_title,post-card-style-2 .post-card-alignment,.post-card-style-6 .card-info',
                            'property' => 'text-align',
                        ),
                    ),
                )
            ),
            // Section Image
             'section_design_image_layout' => array(
                'title' => __('Image', 'card-elements-for-beaver-builder'),
                'fields' => array(
                        // Image border			
                    'post_image_border' => array(
                        'type' => 'border',
                        'label' => __('Border', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card-item_img,.post-card-style-2 .post-card-item_img,.post-card-style-6 .post-card-item_img',
                        ),
                    ),
                )
            ),
            // Section background color
            'section_design_content_bg' => array(
                'title' => __('Background Color', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Background Color
                    'category_bg_color' => array(
                        'type' => 'color',
                        'label' => __('Category Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-module .post-content .category',
                            'property' => 'background-color'
                        ),
                    ),
                    'category_bg_hover_color' => array(
                        'type' => 'color',
                        'label' => __('Category Hover Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-module .post-content .category:hover',
                            'property' => 'background-color'
                        ),
                    ),
                    // Title Color
                    'date_bg_color' => array(
                        'type' => 'color',
                        'label' => __('Date Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-module .thumbnail .date ',
                            'property' => 'background-color'
                        ),
                    ),
                    'date_bg_hover_color' => array(
                        'type' => 'color',
                        'label' => __('Date Hover Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-module .thumbnail .date:hover',
                            'property' => 'background-color'
                        ),
                    ),
                    'content_box_bg_color' => array(
                        'type' => 'color',
                        'label' => __('Content Box Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card-content-box,.post-card-style-2 .post-card-content-bg-box',
                            'property' => 'background-color'
                        ),
                    ),
                )
            ),
            // Section date
            'cebb_style_date' => array(
                'title' => __('Date', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // date color
                    'post_date_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-module .thumbnail .date .day,.post-card-style-2 .day,.post-card-style-6 .card-time',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),

                    'post_date_hover_color' => array(
                        'type' => 'color',
                        'label' => __('Hover Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-module .thumbnail .date .day:hover,.post-card-style-2 .day:hover,.post-card-style-6 .card-time:hover',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    
                    // date typography
                    'post_date_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-module .thumbnail .date .day,.post-card-style-2 .day,.post-card-style-6 .card-time,.post-card-style-6 .card-clock-info ',
                        ),
                    ),
                )
            ),
            // Section category
            'cebb_style_category' => array(
                'title' => __('Category', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // category color
                    'post_category_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .category span.cat-links a,.post-card-style-2 .card_meta a,.post-card-style-6 .card-category a',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // category hover color
                    'post_category_hover_color' => array(
                        'type' => 'color',
                        'label' => __('Hover Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .category:hover span.cat-links a,.post-card-style-2 .card_meta a:hover,.post-card-style-6 .card-category a:hover',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // category typography
                    'post_category_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_category a,.post-card-style-2 .card_meta a,.post-card-style-2 .post-card_category,.post-card-style-6 .card-category',
                        ),
                    ),
                    // spacing
                    'post_category_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '30',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-2 .post-card_category,.post-card-style-6 .card-category',
                            'property' => 'margin-bottom',
                        ),
                    ),
                )
            ),
            //section title
            'cebb_style_title' => array(
                'title' => __('Title', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // title color
                    'post_title_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_title a,.post-card-style-2 .card_title .title a,.post-card-style-6 .post-content .card-title a',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // title hover color
                    'post_title_hover_color' => array(
                        'type' => 'color',
                        'label' => __('Hover Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_title a:hover,.post-card-style-2 .card_title .title a:hover,.post-card-style-6 .card-title a:hover',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // title typography
                    'post_title_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_title,.post-card-style-2 .post-card_title,.post-card-style-6 .card-title',
                        ),
                    ),
                    // title spacing
                    'post_title_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '30',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_title,.post-card-style-2 .post-card_title,.post-card-style-6 .card-title',
                            'property' => 'margin-bottom',
                        ),
                    ),
                )
            ),
            //section excerpt
            'cebb_style_excerpt' => array(
                'title' => __('excerpt', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // excerpt color
                    'post_excerpt_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_excerpt,.post-card-style-2 .post-card_excerpt,.post-card-style-6 .post-card_excerpt',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // excerpt typography
                    'post_excerpt_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_excerpt,.post-card-style-2 .post-card_excerpt,.post-card-style-6 .post-card_excerpt',
                        ),
                    ),
                    // excerpt spacing
                    'post_excerpt_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '30',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_excerpt,.post-card-style-2 .post-card_excerpt,.post-card-style-6 .post-card_excerpt',
                            'property' => 'margin-bottom',
                        ),
                    ),
                )
            ),
            //section read more
            'cebb_style_read_more' => array(
                'title' => __('Read More', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // read_more color
                    'post_read_more_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_read-more,.post-card-style-2 .description .entry-read-more,.post-card-style-6 .description .entry-read-more',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                     // read_more hover color
                     'post_read_more_hover_color' => array(
                        'type' => 'color',
                        'label' => __('Hover Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_read-more:hover,.post-card-style-2 .description .entry-read-more:hover,.post-card-style-6 .description .entry-read-more:hover',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // read_more typography
                    'post_read_more_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-card_read-more,.post-card-style-2 .post-card_read-more,.post-card-style-6 .post-card_read-more,.post-card-style-6 .description .entry-read-more',
                        ),
                    ),
                )
            ),
            // Section Meta
            'cebb_style_meta' => array(
                'title' => __('Meta', 'card-elements-for-beaver-builder'),
                'fields' => array(
                     // meta icon color
                     'post_meta_icon_color' => array(
                        'type' => 'color',
                        'label' => __('Icon Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-meta i,.post-card-style-2 .post-card_meta-data i,.post-card-style-6 .card-author i',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // meta color
                    'post_meta_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-meta a,.post-card-style-2 .card_action span a,.post-card-style-6 .card-by a',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                     // meta hover color
                     'post_meta_hover_color' => array(
                        'type' => 'color',
                        'label' => __('Hover Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-meta a:hover,.post-card-style-2 .card_action span a:hover,.post-card-style-6 .card-by a:hover',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // meta typography
                    'post_meta_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-meta a,.post-card-style-2 .card_action span a,.post-card-style-2 .post-card_meta-data,.post-card-style-6 .card-by a,.post-card-style-6 .card-by',
                        ),
                    ),
                    // meta spacing
                    'post_meta_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '30',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.post-card-style-1 .post-meta,.post-card-style-2 .post-card_meta-data,.post-card-style-6 .card-by',
                            'property' => 'margin-bottom',
                        ),
                    ),
                )
            ),
        ),
    ),
));

