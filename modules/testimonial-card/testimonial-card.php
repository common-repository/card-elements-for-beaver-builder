<?php

class Testimonial_Card extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Testimonial Card', 'card-elements-for-beaver-builder'),
            'description' => __('An example for coding new modules.', 'card-elements-for-beaver-builder'),
            'category' => __('My Modules', 'card-elements-for-beaver-builder'),
            'group'    =>__( 'Card Elements', 'card-elements-for-beaver-builder' ),
            'dir' => CEBB_DIR . 'modules/testimonial-card/',
            'url' => CEBB_URL . 'modules/testimonial-card/',
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

FLBuilder::register_module('Testimonial_Card', array(
    // Tab General
    'cebb_general_tab' => array(
        'title' => __('General', 'card-elements-for-beaver-builder'),
        'sections' => array(
            // Section Content
            'cebb_content' => array(
                'title' => __('Content', 'card-elements-for-beaver-builder'),
                'fields' => array(
                     // Title
                    'testimonial_style' => array(
                        'type' => 'select',
                        'label' => __('Testimonial Card Style', 'card-elements-for-beaver-builder'),
                        'options' => [
                            'testimonial-card-style-1' => esc_html__('Card Style 1', 'card-elements-for-beaver-builder'),
                            'testimonial-card-style-2' => esc_html__('Card Style 2', 'card-elements-for-beaver-builder'),
                            'testimonial-card-style-6' => esc_html__('Card Style 6', 'card-elements-for-beaver-builder'),
                        ],
                        'default' => 'testimonial-card-style-1',
                        'toggle'        => array(
                            'testimonial-card-style-2'      => array(
                            'sections'      => array( 'cebb_rating','testimonial_style_rating') 
                            ),
                        )
                    ), 
                    // Title
                    'testimonial_title' => array(
                        'type' => 'text',
                        'default' => __('John Doe', 'card-elements-for-beaver-builder'),
                        'label' => __('Name', 'card-elements-for-beaver-builder'),
                    ),
                    // Title Tag
                    'testimonial_html_tag' => array(
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
                    // Designation
                    'testimonial_designation' => array(
                        'type' => 'text',
                        'default' => __('Founder', 'card-elements-for-beaver-builder'),
                        'label' => __('Designation', 'card-elements-for-beaver-builder'),
                    ),
                    // Description
                    'testimonial_description' => array(
                        'type' => 'textarea',
                        'label' => __('Description', 'card-elements-for-beaver-builder'),
                        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'card-elements-for-beaver-builder'),
                        'placeholder' => __('Add Description', 'card-elements-for-beaver-builder'),
                        'rows' => '6',
                    ),
                    // Select Image
                    'testimonial_image' => array(
                        'type' => 'photo',
                        'label' => __('Select Profile Image', 'card-elements-for-beaver-builder'),
                        'show_remove' => true,
                    ),
                )   
            ),
        
            'cebb_rating' => array(
                'title' => __('Rating', 'card-elements-for-beaver-builder'),
                'fields' => array(
                     // Rating scale
                     'rating_scale'  => array(
                        
                        'type'    => 'select',
                        'label'   => __( 'Rating Scale', 'card-elements-for-beaver-builder' ),
                        'default' => '5',
                        'options' => array(
                            '5'  => __( '0-5 Stars', 'card-elements-for-beaver-builder' ),
                            '10' => __( '0-10 Stars', 'card-elements-for-beaver-builder' ),
                        ),
                    ),
                    // Rating 		
                    'rating' => array(
                        'type'    => 'unit',
                        'label'   => __( 'Rating', 'card-elements-for-beaver-builder' ),
                        'default' => '4',
                        'slider'  => array(
                            'step' => .5,
                            'max'  => 10,
                        ),
                    ),
                    // unmarked_star_style		
                    'star_style' => array(
                        'type'    => 'select',
                        'label'   => __( 'Unmarked Style', 'card-elements-for-beaver-builder' ),
                        'default' => 'solid',
                        'options' => array(
                            'solid'   => __( 'Solid', 'card-elements-for-beaver-builder' ),
                            'outline' => __( 'Outline', 'card-elements-for-beaver-builder' ),
                        ),
                    ),
                    // title
                     'rating_title'  => array(
                        'type'        => 'text',
                        'label'       => __( 'Title', 'card-elements-for-beaver-builder' ),
                        'class'       => '',
                        'default'     => __( 'Ratings !!!', 'card-elements-for-beaver-builder' ),
                        'preview'     => array(
                            'type'     => 'text',
                            'selector' => '.tm-rating-title',
                        ),
                    ),
                    //rating layout
                    'rating_layout' => array(
                        'type'    => 'select',
                        'label'   => __( 'Layout', 'card-elements-for-beaver-builder' ),
                        'default' => 'default',
                        'options' => array(
                            'default' => __( 'Default', 'card-elements-for-beaver-builder' ),
                            'inline'  => __( 'Inline', 'card-elements-for-beaver-builder' ),
                        ),
                        'toggle'  => array(
                            'inline' => array(
                                'fields' => array( 'title_spacing' ),
                            ),
                        ),
                    ),
                     // star-position	
                     'star_position' => array(
                        'type'    => 'select',
                        'label'   => __( 'Position', 'card-elements-for-beaver-builder' ),
                        'default' => 'bottom',
                        'options' => array(
                            'top'    => __( 'Star First', 'card-elements-for-beaver-builder' ),
                            'bottom' => __( 'Title First', 'card-elements-for-beaver-builder' ),
                        ),
                    ),
                )
            )
        ),
    ),

    // Tab Style
    'cebb_style_tab' => array(
        'title' => __('Style', 'card-elements-for-beaver-builder'),
        'sections' => array(
              // Section box
            'cebb_style_box' => array(
                'title' => __('Box', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Content alignment
                    'testimonial_box_content_align' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'default' => 'center',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .item, .testimonial-card-style-2 .item, .testimonial-card-style-6 .container',
                            'property' => 'text-align',
                        ),
                    ),
                    // Content padding
                    'testimonial_box_content_padding' => array(
                        'type' => 'dimension',
                        'label' => __('Padding', 'card-elements-for-beaver-builder'),
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
                            'selector' => '.testimonial-card-style-1 .item , .testimonial-card-style-2 .item, .testimonial-card-style-6 .container',
                            'property' => 'padding',
                        ),
                    ),
                    // Background color
                    'testimonial_box_background_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'default' => 'F7F7F7',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .bg-color,.testimonial-card-style-1 .testimonial-box-shape, .testimonial-card-style-2 .item, .testimonial-card-style-6 .container',
                            'property' => 'background-color'
                        ),
                    ),
                )
            ),
             // Section Image
             'testimonial_style_Image' => array(
                'title' => __('Image', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Image size
                    'testimonial_image_size_tm' => array(
                        'type' => 'text',
                        'label' => __('Image Size', 'card-elements-for-beaver-builder'),
                        'placeholder' => '60',
                        'description' => 'px',
                        'maxlength' => '3',
                        'size' => '4',
                    ),
                    // Image border			
                    'testimonial_image_border_tm' => array(
                        'type' => 'border',
                        'label' => __('Border', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .img-fluid, .testimonial-card-style-2 .img-fluid, .testimonial-card-style-6 .img-fluid,.testimonial-card-style-6 .pic, .testimonial-card-style-6 .testimonial-description',
                        ),
                    ),
                )
            ),
            // Section Title
            'cebb_content_style' => array(
                'title' => __('Title', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Title Spacing
                    'testimonial_title_spacing_bottom' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '20',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .testimonial-tag, .testimonial-card-style-2 .testimonial-tag, .testimonial-card-style-6 .testimonial-tag',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // Title Color
                    'testimonial_title_text_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .testimonial-tag, .testimonial-card-style-2 .testimonial-tag,.testimonial-card-style-6 .testimonial-tag',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // Title typography
                    'testimonial_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .testimonial-name, .testimonial-card-style-2 .testimonial-tag, .testimonial-card-style-6 .testimonial-tag',
                        ),
                    ),
                )
            ),
            // Section description
            'cebb_style_description' => array(
                'title' => __('Description', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Sapcing
                    'testimonial_description_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '30',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .testimonial-description, .testimonial-card-style-2 .testimonial-description,.testimonial-card-style-6 .testimonial-description',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // description color
                    'testimonial_description_text_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .testimonial-description, .testimonial-card-style-2 .testimonial-description,.testimonial-card-style-6 .testimonial-description',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // description color
                    'testimonial_description_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .testimonial-description,.testimonial-card-style-2 .testimonial-description, .testimonial-card-style-6 .testimonial-description',
                        ),
                    ),
                )
            ),
            // Section designation
            'testimonial_style_designation' => array(
                'title' => __('Designation', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Sapcing
                    'cebb_designation_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '30',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .testimonial-position, .testimonial-card-style-2 .testimonial-position,.testimonial-card-style-6 .testimonial-position',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // designation color
                    'testimonial_designation_text_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .testimonial-position, .testimonial-card-style-2 .testimonial-position,.testimonial-card-style-6 .testimonial-position',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // designation color
                    'testimonial_designation_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.testimonial-card-style-1 .testimonial-position, .testimonial-card-style-2 .testimonial-position,.testimonial-card-style-6 .testimonial-position',
                        ),
                    ),
                )
            ),
            //section rating
            'testimonial_style_rating' => array(
                'title' => __('Star Rating ', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // rating-color
                    'rating_color'     => array(
                        'type'        => 'color',
                        'label'       => __( 'Color', 'card-elements-for-beaver-builder' ),
                        'default'     => 'f0ad4e',
                        'show_reset'  => true,
                        'show_alpha'  => true,
                        'connections' => array( 'color' ),
                    ),
                    //unmarked_color
                    'rating_unmarked_color' => array(
                        'type'        => 'color',
                        'label'       => __( 'Unmarked Color', 'card-elements-for-beaver-builder' ),
                        'default'     => 'efecdc',
                        'show_reset'  => true,
                        'show_alpha'  => true,
                        'connections' => array( 'color'),
                    ),
                    //star_icon_size
                    'star_icon_size'        => array(
                        'type'       => 'unit',
                        'label'      => __( 'Size', 'card-elements-for-beaver-builder' ),
                        'default'    => '30',
                        'responsive' => true,
                        'units'      => array( 'px' ),
                        'slider'     => array(
                            'min' => 10,
                            'max' => 100,
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '.testimonial-card-style-2 .tm-rating i',
                            'property' => 'font-size',
                            'unit'     => 'px',
                        ),
                    ),
                    'star_icon_spacing'     => array(
                        'type'       => 'unit',
                        'label'      => __( 'Spacing', 'card-elements-for-beaver-builder' ),
                        'responsive' => true,
                        'units'      => array( 'px' ),
                        'slider'     => array(
                            'min' => 0,
                            'max' => 100,
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '.testimonial-card-style-2 .testimonial-rating-content .tm-rating > i',
                            'property' => 'margin-right',
                            'unit'     => 'px',
                        ),
                    ),
                    'alignment'             => array(
                        'type'    => 'select',
                        'label'   => __( 'Alignment', 'card-elements-for-beaver-builder' ),
                        'default' => 'left',
                        'responsive' => true,
                        'options' => array(
                            'left'    => __( 'Left', 'card-elements-for-beaver-builder' ),
                            'center'  => __( 'Center', 'card-elements-for-beaver-builder' ),
                            'right'   => __( 'Right', 'card-elements-for-beaver-builder' ),
                            'justify' => __( 'Justify', 'card-elements-for-beaver-builder' ),
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '.testimonial-card-style-2 .testimonial-rating-content',
                            'property' => 'text-align',
                        ),
                    ),
                    'title_color'   => array(
                        'type'        => 'color',
                        'label'       => __( 'Title Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '000000',
                        'show_reset'  => true,
                        'show_alpha'  => false,
                        'connections' => array( 'color' ),
                        'preview'     => array(
                            'type'     => 'css',
                            'selector' => '.testimonial-card-style-2 .testimonial-rating-content .tm-rating-title',
                            'property' => 'color',
                        ),
                    ),
                    'title_spacing' => array(
                        'type'    => 'unit',
                        'label'   => __( 'Title Spacing', 'card-elements-for-beaver-builder' ),
                        'default' => '10',
                        'units'   => array( 'px' ),
                        'slider'  => true,
                    ),
                    'title_typography' => array(
                        'type'       => 'typography',
                        'label'      => __( 'Typography', 'card-elements-for-beaver-builder' ),
                        'responsive' => true,
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '.testimonial-card-style-2 .tm-rating-title',
                        ),
                    ),
                ) 
            ),
        )
    ),
));

