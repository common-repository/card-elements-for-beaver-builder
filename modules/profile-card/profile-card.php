<?php

class Profile_Card extends FLBuilderModule {

    public function __construct() {
        parent::__construct(array(
            'name' => __('Profile Card', 'card-elements-for-beaver-builder'),
            'description' => __('An example for coding new modules.', 'card-elements-for-beaver-builder'),
            'category' => __('My Modules', 'card-elements-for-beaver-builder'),
            'group'           =>__( 'Card Elements', 'card-elements-for-beaver-builder' ),
            'dir' => CEBB_DIR . 'modules/profile-card/',
            'url' => CEBB_URL . 'modules/profile-card/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true, // Defaults to true and can be omitted.
            'icon' => 'icon.svg',
        ));
        $this->add_css( 'font-awesome-5' );
        $this->add_css( 'cebb-hover', CEBB_URL . 'assets/css/hover-min.css', array(), CEBB_VERSION, 'all' );
    }

}

/**
 * Register the module and its form settings.
 */

FLBuilder::register_module('Profile_Card', array(
    // Tab General
    'cebb_general_tab' => array(
        'title' => __('General', 'card-elements-for-beaver-builder'),
        'sections' => array(
            // Section Content
            'cebb_content' => array(
                'title' => __('Content', 'card-elements-for-beaver-builder'),
                'fields' => array(
                     // Title
                     'profile_style' => array(
                        'type' => 'select',
                        'label' => __('Profile Card Style', 'card-elements-for-beaver-builder'),
                        'options' => [
                            'profile-card-style-1' => esc_html__('Card Style 1', 'card-elements-for-beaver-builder'),
                            'profile-card-style-2' => esc_html__('Card Style 2', 'card-elements-for-beaver-builder'),
                            'profile-card-style-3' => esc_html__('Card Style 3', 'card-elements-for-beaver-builder'),
                            'profile-card-style-4' => esc_html__('Card Style 4', 'card-elements-for-beaver-builder'),
                            'profile-card-style-5' => esc_html__('Card Style 5', 'card-elements-for-beaver-builder'),
                            'profile-card-style-11' => esc_html__('Card Style 11', 'card-elements-for-beaver-builder'),
                        ],
                        'default' => 'profile-card-style-1',
                        'toggle'        => array(
                            'profile-card-style-1'      => array(
                            'fields'      => array( 'profile_icon_bg_color','cebb_designation_spacing','profile_bg_size','profile_description_show_hide','profile_description','profile_bg_image'), 
                            'sections'    => array( 'cebb_style_box','cebb_style_description','profile_style_Image') 
                            ),
                            'profile-card-style-2'      => array(
                                'fields'      => array( 'profile_icon_bg_color','cebb_designation_spacing','profile_bg_size','profile_description_show_hide','profile_description','profile_bg_image'),
                                'sections'    => array( 'cebb_style_box','cebb_style_description','profile_style_Image')
                            ),
                            'profile-card-style-3'      => array(
                                'fields'      => array('cebb_designation_spacing','profile_icon_align','profile_description_show_hide','profile_description','profile_bg_image'),
                                'sections'    => array( 'cebb_style_box','cebb_style_description','profile_style_Image')  
                            ),
                            'profile-card-style-4'      => array(
                                'fields'      => array('profile_icon_align','profile_description_show_hide','profile_description','profile_bg_image'),
                                'sections'    => array( 'cebb_style_box','cebb_style_description','profile_style_Image') 
                            ),
                            'profile-card-style-5'      => array(
                                'fields'      => array('profile_icon_align','cebb_designation_spacing','profile_description_show_hide','profile_description','profile_bg_image'),
                                'sections'    => array( 'cebb_style_box','cebb_style_description','profile_style_Image') 
                            ),
                            'profile-card-style-11'      => array(
                                'fields'      => array( 'profile_icon_bg_color','profile_bg_size','profile_title_bg_color','profile_designation_bg_color'),
                                'sections'    => array('profile_triagle_style')     
                            ),
                        )
                    ),
                    // Title
                    'profile_title' => array(
                        'type' => 'text',
                        'default' => __('John Doe', 'card-elements-for-beaver-builder'),
                        'label' => __('Name', 'card-elements-for-beaver-builder'),
                    ),
                    // Title Tag
                    'profile_html_tag' => array(
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
                    'profile_designation' => array(
                        'type' => 'text',
                        'default' => __('Founder', 'card-elements-for-beaver-builder'),
                        'label' => __('Designation', 'card-elements-for-beaver-builder'),
                    ),
                    // Show & Hide description
                    'profile_description_show_hide' => array(
                        'type' => 'button-group',
                        'label' => __('Show/Hide Description', 'card-elements-for-beaver-builder'),
                        'options' => array(
                            'profile_description_yes' => __('Yes', 'card-elements-for-beaver-builder'),
                            'profile_description_no' => __('No', 'card-elements-for-beaver-builder'),
                        ),
                        'toggle' => array(
                            'profile_description_yes' => array(
                                'fields' => array('profile_description'), 
                                'sections' => array('cebb_style_description')
                            ),
                        ),
                        'default' => 'profile_description_yes',
                    ),
                    // Description
                    'profile_description' => array(
                        'type' => 'textarea',
                        'label' => __('Description', 'card-elements-for-beaver-builder'),
                        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'card-elements-for-beaver-builder'),
                        'placeholder' => __('Add Description', 'card-elements-for-beaver-builder'),
                        'rows' => '6',
                    ),
                    // Select Image
                    'profile_image' => array(
                        'type' => 'photo',
                        'label' => __('Select Profile Image', 'card-elements-for-beaver-builder'),
                        'show_remove' => true,
                    ),
                    // Select Image
                    'profile_bg_image' => array(
                        'type' => 'photo',
                        'label' => __('Select Profile Background Image', 'card-elements-for-beaver-builder'),
                        'show_remove' => true,
                    ),
                    // Show & Hide icon
                    'profile_icon_show_hide' => array(
                    'type' => 'button-group',
                    'label' => __('Show/Hide Icon', 'card-elements-for-beaver-builder'),
                    'options' => array(
                        'profile_icon_yes' => __('Yes', 'card-elements-for-beaver-builder'),
                        'profile_icon_no' => __('No', 'card-elements-for-beaver-builder'),
                    ),
                    'toggle' => array(
                        'profile_icon_yes' => array(
                            'fields' => array('profile_icons'),
                            'sections'=> array('profile_style_structure','profile_style_colors')
                        ),
                    ),
                    'default' => 'profile_icon_yes',
                    ),
                    'profile_icons' => array(
                        'type'         => 'form',
                        'label'        => __( 'Icon', 'card-elements-for-beaver-builder' ),
                        'form'         => 'cebb_advicon_group_form', // ID from registered form below.
                        'multiple'     => true,
                    ),
                )   
            )
        )
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
                    'profile_box_content_align' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'default' => 'center',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member-info, .profile-card-style-2 .team-member-info, .profile-card-style-3 .team-member-info,.profile-card-style-4,.profile-card-style-5 .ct-team-member-layout',
                            'property' => 'text-align',
                        ),
                    ),
                    // Content padding
                    'profile_box_content_padding' => array(
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
                            'selector' => '.profile-card-style-1 .team-member-info, .profile-card-style-2 .team-member-info, .profile-card-style-3 .team-member-info,.profile-card-style-4,.profile-card-style-5',
                            'property' => 'padding',
                        ),
                    ),
                    // Background color
                    'profile_box_background_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'default' => 'F7F7F7',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member-info, .profile-card-style-2 .team-member-info, .profile-card-style-3 .team-member, .profile-card-style-4 .profile-content,.profile-card-style-4 .profile-bg,.profile-card-style-5 .ct-team-member-inner',
                            'property' => 'background-color'
                        ),
                    ),
                )
            ),
             // Section Image
             'profile_style_Image' => array(
                'title' => __('Image', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Image size
                    'profile_image_width_tm' => array(
                        'type' => 'text',
                        'label' => __('Image Width', 'card-elements-for-beaver-builder'),
                        'placeholder' => '60',
                        'description' => 'px',
                        'maxlength' => '3',
                        'size' => '4',
                    ),
                    'profile_image_height_tm' => array(
                        'type' => 'text',
                        'label' => __('Image Height', 'card-elements-for-beaver-builder'),
                        'placeholder' => '60',
                        'description' => 'px',
                        'maxlength' => '3',
                        'size' => '4',
                    ),
                    // Image border			
                    'profile_image_border_tm' => array(
                        'type' => 'border',
                        'label' => __('Border', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .img, .profile-card-style-2 .img, .profile-card-style-3 .img,.profile-card-style-4 .img,.profile-card-style-5 .ct-team-image .img,.profile-card-style-11',
                        ),
                    ),
                )
            ),
            // Section Title
            'cebb_content_style' => array(
                'title' => __('Title', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Title Spacing
                    'profile_title_spacing_bottom' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '20',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .profile-name, .profile-card-style-2 .profile-name, .profile-card-style-3 .profile-name, .profile-card-style-4 .profile-name,.profile-card-style-5 .profile-name,.profile-card-style-11 .profile-name',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // Title Color
                    'profile_title_text_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .profile-name, .profile-card-style-2 .profile-name, .profile-card-style-3 .profile-name,.profile-card-style-4 .profile-name,.profile-card-style-5 .profile-name, .profile-card-style-11 .profile-name',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // Title typography
                    'profile_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .profile-name, .profile-card-style-2 .profile-name, .profile-card-style-3 .profile-name, .profile-card-style-4 .profile-name, .profile-card-style-5 .profile-name,.profile-card-style-11 .profile-name',
                        ),
                    ),
                    'profile_title_bg_color'           => array(
                        'type'        => 'color',
                        'label'       => __( 'Background Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-11 .profile-name',
                            'property' => 'background'
                        ),
                    ),
                )
            ),
            // Section description
            'cebb_style_description' => array(
                'title' => __('Description', 'card-elements-for-beaver-builder'),
                'fields' => array(
                    // Sapcing
                    'profile_description_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '30',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .profile-description, .profile-card-style-2 .profile-description, .profile-card-style-3 .profile-description, .profile-card-style-4 .profile-description, .profile-card-style-5 .profile-description',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // description color
                    'profile_description_text_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .profile-description, .profile-card-style-2 .profile-description, .profile-card-style-3 .profile-description, .profile-card-style-4 .profile-description, .profile-card-style-5 .profile-description',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // description color
                    'profile_description_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .profile-description,.profile-card-style-2 .profile-description, profile-card-style-3 .profile-description, .profile-card-style-4 .profile-description, .profile-card-style-5 .profile-description',
                        ),
                    ),
                )
            ),
            // Section designation
            'profile_style_designation' => array(
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
                            'selector' => '.profile-card-style-1 .profile-position, .profile-card-style-2 .profile-position, .profile-card-style-3 .profile-position, .profile-card-style-4 .profile-position, .profile-card-style-5 .profile-position, .profile-card-style-11 .profile-position',
                            'property' => 'margin-bottom',
                        ),
                    ),
                    // designation color
                    'profile_designation_text_color' => array(
                        'type' => 'color',
                        'label' => __('Color', 'card-elements-for-beaver-builder'),
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .profile-position, .profile-card-style-2 .profile-position, .profile-card-style-3 .profile-position, .profile-card-style-4 .profile-position, .profile-card-style-5 .profile-position,.profile-card-style-11 .profile-position',
                            'property' => 'color'),
                        'connections' => array('color'),
                    ),
                    // designation color
                    'profile_designation_typography' => array(
                        'type' => 'typography',
                        'label' => __('Typography', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .profile-position, .profile-card-style-2 .profile-position, .profile-card-style-3 .profile-position, .profile-card-style-4 .profile-position,.profile-card-style-5 .profile-position,.profile-card-style-11 .profile-position',
                        ),
                    ),
                    'profile_designation_bg_color' => array(
                        'type'        => 'color',
                        'label'       => __( 'Background Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-11 .profile-position',
                            'property' => 'background'
                        ),
                    ),
                )
            ),
            'profile_triagle_style' => array( // Section.
                'title'  => __( 'Triagle Color', 'card-elements-for-beaver-builder' ), // Section Title.
                'fields' => array( // Section Fields.
                    'profile_triagle_color'              => array(
                        'type'        => 'color',
                        'label'       => __( 'Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-11 .triangle-div',
                            'property' => 'border-color',
                        ),
                    ),
                ),
            ),
            'profile_style_structure' => array( // Section.
                'title'  => __( 'Social Icon', 'card-elements-for-beaver-builder' ), // Section Title.
                'fields' => array( // Section Fields.
                    'profile_icon_align' => array(
                        'type' => 'align',
                        'label' => __('Alignment', 'card-elements-for-beaver-builder'),
                        'responsive' => true,
                        'default' => 'center',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-3 .team-member__socialmedia,.profile-card-style-4 .team-member__socialmedia,.profile-card-style-5 .team-member__socialmedia,.profile-card-style-11 .team-member__socialmedia',
                            'property' => 'text-align',
                        ),
                    ),
                    'size'             => array(
                        'type'        => 'unit',
                        'label'       => __( 'Icon Size', 'card-elements-for-beaver-builder' ),
                        'default' => '40',
                        'responsive'  => 'true',
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
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-1 .team-member__socialmedia .beaver-icon i, .profile-card-style-2 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-2 .team-member__socialmedia .beaver-icon i, .profile-card-style-3 .team-member__socialmedia .beaver-icon i, .profile-card-style-4 .team-member__socialmedia .beaver-icon i, .profile-card-style-5 .team-member__socialmedia .beaver-icon i,.profile-card-style-11 .team-member__socialmedia .beaver-icon i',
                            'property' => 'font-size'
                        ),
                    ),
                    'profile_icoimage_style'   => array(
                        'type'    => 'select',
                        'label'   => __( 'Social Area Background Color', 'card-elements-for-beaver-builder' ),
                        'default' => 'simple',
                        'options' => array(
                            'simple' => __( 'Simple', 'card-elements-for-beaver-builder' ),
                            'circle' => __( 'Circle Background', 'card-elements-for-beaver-builder' ),
                            'square' => __( 'Square Background', 'card-elements-for-beaver-builder' ),
                            'custom' => __( 'Design your own', 'card-elements-for-beaver-builder' ),
                        ),
                        'toggle'  => array(
                            'circle' => array(
                                'fields' => array( 'color_preset', 'profile_bg_color', 'profile_bg_hover_color' ),
                            ),
                            'square' => array(
                                'fields' => array( 'color_preset', 'profile_bg_color', 'profile_bg_hover_color' ),
                            ),
                            'custom' => array(
                                'fields' => array( 'color_preset', 'profile_border_style', 'profile_border_width','profile_bg_color', 'profile_bg_hover_color', 'profile_bg_size', 'profile_bg_border_radius' ),
                            ),
                        ),
                    ),
                    'profile_bg_size'          => array(
                        'type'        => 'unit',
                        'label'       => __( 'Background Size', 'card-elements-for-beaver-builder' ),
                        'help'        => __( 'Spacing between Icon & Background edge', 'card-elements-for-beaver-builder' ),
                        'default' => '10',
                        'maxlength'   => '3',
                        'size'        => '6',
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
                            'selector' => '.profile-card-style-1 .team-member__socialmedia,.profile-card-style-2 .team-member__socialmedia, .profile-card-style-11 .team-member__socialmedia',
                            'property' => 'padding',
                        ),
                    ),
                    'profile_icon_padding' => array(
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
                            'selector' => '.profile-card-style-1 .beaver-social-icon i,.profile-card-style-2 .beaver-social-icon i, .profile-card-style-3 .beaver-social-icon i,.profile-card-style-4 .beaver-social-icon i, .profile-card-style-5 .beaver-social-icon i,.profile-card-style-11 .beaver-social-icon i',
                            'property' => 'padding',
                        ),
                    ),

                    'profile_icon_spacing' => array(
                        'type' => 'unit',
                        'label' => __('Spacing', 'card-elements-for-beaver-builder'),
                        'units' => array('px', '%'),
                        'responsive' => true,
                        'default_unit' => 'px',
                        'default' => '5',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .beaver-icon:not(:last-child),.profile-card-style-2 .beaver-icon:not(:last-child),.profile-card-style-3 .beaver-icon:not(:last-child),.profile-card-style-4 .beaver-icon:not(:last-child),.profile-card-style-5 .beaver-icon:not(:last-child),.profile-card-style-11 .beaver-icon:not(:last-child)',
                            'property' => 'margin-right',
                        ),
                    ),
                    'profile_border_style'     => array(
                        'type'    => 'select',
                        'label'   => __( 'Border Style', 'card-elements-for-beaver-builder' ),
                        'default' => 'none',
                        'help'    => __( 'The type of border to use. Double borders must have a width of at least 3px to render properly.', 'card-elements-for-beaver-builder' ),
                        'options' => array(
                            'none'   => __( 'None', 'card-elements-for-beaver-builder' ), // Removed args  'Border type.'.
                            'solid'  => __( 'Solid', 'card-elements-for-beaver-builder' ), // Removed args  'Border type.'.
                            'dashed' => __( 'Dashed', 'card-elements-for-beaver-builder' ), // Removed args  'Border type.'.
                            'dotted' => __( 'Dotted', 'card-elements-for-beaver-builder' ), // Removed args  'Border type.'.
                            'double' => __( 'Double', 'card-elements-for-beaver-builder' ), // Removed args  'Border type.'.
                        ),
                        'toggle'  => array(
                            'solid'  => array(
                                'fields' => array( 'profile_border_width', 'profile_border_color', 'profile_border_hover_color' ),
                            ),
                            'dashed' => array(
                                'fields' => array( 'profile_border_width', 'profile_border_color', 'profile_border_hover_color' ),
                            ),
                            'dotted' => array(
                                'fields' => array( 'profile_border_width', 'profile_border_color', 'profile_border_hover_color' ),
                            ),
                            'double' => array(
                                'fields' => array( 'profile_border_width', 'profile_border_color', 'profile_border_hover_color' ),
                            ),
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-1 .team-member__socialmedia .beaver-icon i,.profile-card-style-2 .team-member__socialmedia .beaver-icon i, .profile-card-style-3 .team-member__socialmedia .beaver-icon i, .profile-card-style-4 .team-member__socialmedia .beaver-icon i, .profile-card-style-5 .team-member__socialmedia .beaver-icon i,.profile-card-style-11 .team-member__socialmedia .beaver-icon i',
                            'property' => 'border-style'
                        ),
                    ),
                    'profile_border_width'     => array(
                        'type'        => 'unit',
                        'label'       => __( 'Border Width', 'card-elements-for-beaver-builder' ),
                        'maxlength'   => '3',
                        'size'        => '6',
                        'placeholder' => '1',
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
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-1 .team-member__socialmedia .beaver-icon i, .profile-card-style-2 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-2 .team-member__socialmedia .beaver-icon i, .profile-card-style-3 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-3 .team-member__socialmedia .beaver-icon i, .profile-card-style-4 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-4 .team-member__socialmedia .beaver-icon i,.profile-card-style-5 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-5 .team-member__socialmedia .beaver-icon i,.profile-card-style-11 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-11 .team-member__socialmedia .beaver-icon i',
                            'property' => 'border-width'
                        ),
                    ),
                    'profile_bg_border_radius' => array(
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
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-1 .team-member__socialmedia .beaver-icon i, .profile-card-style-2 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-2 .team-member__socialmedia .beaver-icon i,.profile-card-style-3 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-3 .team-member__socialmedia .beaver-icon i,.profile-card-style-4 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-4 .team-member__socialmedia .beaver-icon i,.profile-card-style-5 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-5 .team-member__socialmedia .beaver-icon i,.profile-card-style-11 .team-member__socialmedia .beaver-icon i:before,.profile-card-style-11 .team-member__socialmedia .beaver-icon i',
                            'property' => 'border-radius'
                        ),
                    ),
                ),
            ),
            'profile_style_colors'    => array( // Section.
                'title'  => __( 'Icon Colors', 'card-elements-for-beaver-builder' ), // Section Title.
                'fields' => array( // Section Fields.
                    'profile_icon_bg_color'           => array(
                        'type'        => 'color',
                        'label'       => __( 'Icon Background Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member__socialmedia, .profile-card-style-2 .team-member__socialmedia, .profile-card-style-3 .team-member__socialmedia, .profile-card-style-4 .team-member__socialmedia,.profile-card-style-5 .team-member__socialmedia,.profile-card-style-11 .team-member__socialmedia',
                            'property' => 'background'
                        ),
                    ),
                    'color'              => array(
                        'type'        => 'color',
                        'label'       => __( 'Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i,.profile-card-style-2 .team-member__socialmedia .beaver-icon i, .profile-card-style-3 .team-member__socialmedia .beaver-icon i, .profile-card-style-4 .team-member__socialmedia .beaver-icon i,.profile-card-style-5 .team-member__socialmedia .beaver-icon i,.profile-card-style-11 .team-member__socialmedia .beaver-icon i',
                            'property' => 'color'
                        ),
                    ),
                    'profile_hover_color'        => array(
                        'type'        => 'color',
                        'label'       => __( 'Hover Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview'     => array(
                            'type' => 'none',
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i:hover, .profile-card-style-2 .team-member__socialmedia .beaver-icon i:hover, .profile-card-style-3 .team-member__socialmedia .beaver-icon i:hover,.profile-card-style-4 .team-member__socialmedia .beaver-icon i:hover, .profile-card-style-5 .team-member__socialmedia .beaver-icon i:hover,.profile-card-style-11 .team-member__socialmedia .beaver-icon i:hover',
                            'property' => 'color'
                        ),
                    ),
                    'profile_bg_color'           => array(
                        'type'        => 'color',
                        'label'       => __( 'Background Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i, .profile-card-style-2 .team-member__socialmedia .beaver-icon i, .profile-card-style-3 .team-member__socialmedia .beaver-icon i, .profile-card-style-4 .team-member__socialmedia .beaver-icon i, .profile-card-style-5 .team-member__socialmedia .beaver-icon i,.profile-card-style-11 .team-member__socialmedia .beaver-icon i',
                            'property' => 'background-color'
                        ),
                    ),
                    'profile_bg_hover_color'     => array(
                        'type'        => 'color',
                        'label'       => __( 'Background Hover Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i:hover ,.profile-card-style-2 .team-member__socialmedia .beaver-icon i:hover,.profile-card-style-3 .team-member__socialmedia .beaver-icon i:hover,.profile-card-style-4 .team-member__socialmedia .beaver-icon i:hover, .profile-card-style-5 .team-member__socialmedia .beaver-icon i:hover,.profile-card-style-11 .team-member__socialmedia .beaver-icon i:hover',
                            'property' => 'background-color'
                        ),
                    ),
                    'profile_border_color'       => array(
                        'type'        => 'color',
                        'label'       => __( 'Border Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i, .profile-card-style-2 .team-member__socialmedia .beaver-icon i, .profile-card-style-3 .team-member__socialmedia .beaver-icon i, .profile-card-style-4 .team-member__socialmedia .beaver-icon i,.profile-card-style-5 .team-member__socialmedia .beaver-icon i,.profile-card-style-11 .team-member__socialmedia .beaver-icon i',
                            'property' => 'border-color'
                        ),
                    ),
                    'profile_border_hover_color' => array(
                        'type'        => 'color',
                        'label'       => __( 'Border Hover Color', 'card-elements-for-beaver-builder' ),
                        'default'     => '',
                        'connections' => array( 'color' ),
                        'show_alpha'  => true,
                        'show_reset'  => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.profile-card-style-1 .team-member__socialmedia .beaver-icon i:hover, .profile-card-style-2 .team-member__socialmedia .beaver-icon i:hover,.profile-card-style-3 .team-member__socialmedia .beaver-icon i:hover, .profile-card-style-4 .team-member__socialmedia .beaver-icon i:hover, .profile-card-style-5 .team-member__socialmedia .beaver-icon i:hover,.profile-card-style-11 .team-member__socialmedia .beaver-icon i:hover',
                            'property' => 'border-color'
                        ),
                    ),
                    'profile_icon_animation' => array(
                        'type'    => 'select',
                        'label'   => __( 'Allow Icon Hover Animations', 'card-elements-for-beaver-builder' ),
                        'options' => array(
                            'yes' => __( 'Yes', 'card-elements-for-beaver-builder' ),
                            'no'  => __( 'No', 'card-elements-for-beaver-builder' ),
                        ),
                        'default' => 'no',
                        'toggle'  => array(
                            'yes' => array(
                                'fields' => array(
                                    'profile_icon_animation_hover',
                                ),
                            ),
                        ),
                    ),
                    'profile_icon_animation_hover'            => array(
                        'type'    => 'select',
                        'label'   => __( 'Icon Hover Animation Type', 'card-elements-for-beaver-builder' ),
                        'options' => array(
                            'none'                    => __( 'None', 'card-elements-for-beaver-builder' ),
                            'hvr-grow'                => __( 'Grow', 'card-elements-for-beaver-builder' ),
                            'hvr-shrink'              => __( 'Shrink', 'card-elements-for-beaver-builder' ),
                            'hvr-pulse'               => __( 'Pulse', 'card-elements-for-beaver-builder' ),
                            'hvr-pulse-grow'          => __( 'Pulse Grow', 'card-elements-for-beaver-builder' ),
                            'hvr-pulse-shrink'        => __( 'Pulse Shrink', 'card-elements-for-beaver-builder' ),
                            'hvr-push'                => __( 'Push', 'card-elements-for-beaver-builder' ),
                            'hvr-pop'                 => __( 'Pop', 'card-elements-for-beaver-builder' ),
                            'hvr-bounce-in'           => __( 'Bounce In', 'card-elements-for-beaver-builder' ),
                            'hvr-bounce-out'          => __( 'Bounce Out', 'card-elements-for-beaver-builder' ),
                            'hvr-rotate'              => __( 'Rotate', 'card-elements-for-beaver-builder' ),
                            'hvr-grow-rotate'         => __( 'Grow Rotate', 'card-elements-for-beaver-builder' ),
                            'hvr-float'               => __( 'Float', 'card-elements-for-beaver-builder' ),
                            'hvr-sink'                => __( 'Sink', 'card-elements-for-beaver-builder' ),
                            'hvr-bob'                 => __( 'Bob', 'card-elements-for-beaver-builder' ),
                            'hvr-hang'                => __( 'Hang', 'card-elements-for-beaver-builder' ),
                            'hvr-skew'                => __( 'Skew', 'card-elements-for-beaver-builder' ),
                            'hvr-skew-forward'        => __( 'Skew Forward', 'card-elements-for-beaver-builder' ),
                            'hvr-skew-backward'       => __( 'Skew Backward', 'card-elements-for-beaver-builder' ),
                            'hvr-wobble-horizontal'   => __( 'Wobble Horizontal', 'card-elements-for-beaver-builder' ),
                            'hvr-wobble-vertical'     => __( 'Wobble Vertical', 'card-elements-for-beaver-builder' ),
                            'hvr-wobble-to-bottom-right' => __( 'Wobble to Bottom Right', 'card-elements-for-beaver-builder' ),
                            'hvr-wobble-to-top-right' => __( 'Wobble to Top Right', 'card-elements-for-beaver-builder' ),
                            'hvr-wobble-top'          => __( 'Wobble Top', 'card-elements-for-beaver-builder' ),
                            'hvr-wobble-bottom'       => __( 'Wobble Bottom', 'card-elements-for-beaver-builder' ),
                            'hvr-wobble-skew'         => __( 'Wobble Skew', 'card-elements-for-beaver-builder' ),
                            'hvr-buzz'                => __( 'Buzz', 'card-elements-for-beaver-builder' ),
                            'hvr-buzz-out'            => __( 'Buzz Out', 'card-elements-for-beaver-builder' ),
                            'hvr-forward'             => __( 'Forward', 'card-elements-for-beaver-builder' ),
                            'hvr-backward'            => __( 'Backward', 'card-elements-for-beaver-builder' ),
                        ),
                        'default' => 'none',
                    ),
                ),
            ),                    
        )
    ),
));

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form(
	'cebb_advicon_group_form',
	array(
		'title' => __( 'Add Icon', 'card-elements-for-beaver-builder' ),
		'tabs'  => array(
			'form_general' => array( // Tab.
				'title'    => __( 'General', 'card-elements-for-beaver-builder' ), // Tab title.
				'sections' => array( // Tab Sections.
					'general' => array( // Section.
						'title'  => '', // Section Title.
						'fields' => array( // Section Fields.
							'icon'       => array(
								'type'        => 'icon',
								'label'       => __( 'Icon', 'card-elements-for-beaver-builder' ),
								'default'     => 'ua-icon ua-icon-facebook-with-circle',
								'show_remove' => true,
							),
							'link'       => array(
								'type'          => 'link',
								'label'         => __( 'Link', 'card-elements-for-beaver-builder' ),
								'description'   => '',
								'show_target'   => true,
								'show_nofollow' => true,
								'preview'       => array(
									'type' => 'none',
								),
								'connections'   => array( 'url' ),
							),
						),
					),
				),
			),
		),
	)
);
