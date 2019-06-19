<?php

   Kirki::add_section( 'november_zero_front_features', array(
    'title'          => esc_attr__( 'Features Section', 'november-zero' ),
    'description'    => esc_attr__( '', 'november-zero' ),
    'panel'          => 'november_zero_front_panel',
    'priority'       => 160,
    ) );

   Kirki::add_field( 'november_zero_front_feature_enable', array(
	'type'        => 'toggle',
	'settings'    => 'november_zero_front_feature_enable',
	'label'       => esc_attr__( 'Disable/Enable Section', 'november-zero' ),
	'section'     => 'november_zero_front_features',
	'default'     => '1',
	'priority'    => 10,
  ) );

  Kirki::add_field( 'november_zero_front_feature_title', array(
  'type'     => 'text',
  'settings' => 'november_zero_front_feature_title',
  'label'    => __( 'Features Title', 'november-zero' ),
  'section'  => 'november_zero_front_features',
  'default'  => esc_attr__( 'Edit Me In Customizer', 'november-zero' ),
  'priority' => 10,
  'transport'=>'postMessage',  
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );
  Kirki::add_field( 'november_zero_front_feature_title_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_feature_title_color',
  'label'     => __( 'Title Color', 'november-zero' ),
  'section'   => 'november_zero_front_features',
  'default'   => '#FFFFFF',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#featuretitletext',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_feature_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_feature_title_size',
  'label'     => __( ' Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_features',
  'default'     => array(   
  'font-size'      => '40px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#featuretitletext',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

    Kirki::add_field( 'november_zero_front_feature_sub_title', array(
  'type'     => 'text',
  'settings' => 'november_zero_front_feature_sub_title',
  'label'    => __( 'Features Sub Title', 'november-zero' ),
  'section'  => 'november_zero_front_features',
  'default'  => esc_attr__( 'Edit Me In Customizer', 'november-zero' ),
  'priority' => 10,
  'transport'=>'postMessage',
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_front_feature_sub_title_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_feature_sub_title_color',
  'label'     => __( 'Sub Title Color', 'november-zero' ),
  'section'   => 'november_zero_front_features',
  'default'   => '#FFFFFF',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#featuresubtitletext',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_feature_sub_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_feature_sub_title_size',
  'label'     => __( 'Sub Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_features',
  'default'     => array(   
  'font-size'      => '17px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#featuresubtitletext',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_features_item', array(
  'type'        => 'repeater',
  'label'       => esc_attr__( 'Feature Items', 'november-zero' ),
  'section'     => 'november_zero_front_features',
  'priority'    => 10,
  'row_label' => array(
    'type'  => 'field',
    'value' => esc_attr__('Feature', 'november-zero' ),
    'field' => 'link_text',
  ),
  'button_label' => esc_attr__('Add New Feature ', 'november-zero' ),
  'settings'     => 'november_zero_features_item_repeater',
  'default'      => array(
   
    
    array(
      'feature_icon' => esc_attr__( 'fa fa-mobile-alt', 'november-zero' ),
      'feature_icon_color' => esc_attr__( '#dd3333', 'november-zero' ),
      'feature_title'  => esc_attr__( 'Responsive', 'november-zero' ),
      'feature_details'=> esc_attr__( 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum', 'november-zero' ),
    ),
    
  ),
  'fields' => array(
    'feature_icon' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Font Awesome Icon', 'november-zero' ),
      'description' => esc_attr__( 'eg:fa fa-mobile-alt  Reference: https://fontawesome.com/icons ', 'november-zero' ),
      'default'     => 'fa fa-mobile-alt',
    ),
    'feature_icon_color' => array(
      'type'        => 'color',
      'label'       => esc_attr__( 'Icon Color', 'november-zero' ),
      'default'     => '#dd3333',
      
    ),
    'feature_title' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Title', 'november-zero' ),
      'default'     => '',
      'transport' => 'postMessage',

    ),
     'feature_details' => array(
      'type'        => 'textarea',
      'label'       => esc_attr__( 'Details', 'november-zero' ),
      'default'     => '',
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_feature_item_icon_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_feature_item_icon_size',
  'label'     => __( 'Feature Items Icon Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_features',
  'default'     => array(   
  'font-size'      => '64px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#services .feature-icon-holder i',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_feature_item_title_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_feature_item_title_color',
  'label'     => __( 'Feature Items Title Color', 'november-zero' ),
  'section'   => 'november_zero_front_features',
  'default'   => '#FFFFFF',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '.card-title',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

    Kirki::add_field( 'november_zero_front_feature_item_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_feature_item_title_size',
  'label'     => __( 'Feature Items Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_features',
  'default'     => array(   
  'font-size'      => '23px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '.card-title',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_front_feature_item_details_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_feature_item_details_color',
  'label'     => __( 'Feature Items Details Color', 'november-zero' ),
  'section'   => 'november_zero_front_features',
  'default'   => '#FFFFFF',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '.feature-content-wrapper p.descp',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_front_feature_item_details_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_feature_item_details_size',
  'label'     => __( 'Feature Items Details Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_features',
  'default'     => array(   
  'font-size'      => '15px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '.feature-content-wrapper p.descp',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );


   Kirki::add_field( 'november_zero_front_feature_background', array(
  'type'        => 'background',
  'settings'    => 'november_zero_front_feature_background',
  'label'       => esc_attr__( 'Background Control', 'november-zero' ),
  'description' => esc_attr__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'november-zero' ),
  'section'     => 'november_zero_front_features',
  'default'     => array(
    'background-color'      => 'rgba(20,20,20,.8)',
    'background-image'      => '',
    'background-repeat'     => 'repeat',
    'background-position'   => 'center center',
    'background-size'       => 'cover',
    'background-attachment' => 'scroll',
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  
  ) );

    Kirki::add_field( 'november_zero_front_feature_background_overlay_enable', array(
  'type'        => 'toggle',
  'settings'    => 'november_zero_front_feature_background_overlay_enable',
  'label'       => esc_attr__( 'Disable/Enable Overlay', 'november-zero' ),
  'section'     => 'november_zero_front_features',
  'default'     => '0',
  'priority'    => 10,
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),  
  ) );

    Kirki::add_field( 'november_zero_front_feature_background_overlay', array(
  'type'        => 'color',
  'settings'    => 'november_zero_front_feature_background_overlay',
  'label'       => __( 'Overlay', 'november-zero' ),
  'description' => esc_attr__( 'Background Overlay', 'november-zero' ),
  'section'     => 'november_zero_front_features',
  'default'     => '',
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_feature_enable',
                'operator' => '==',
                'value'    => '1',
            ),
             array(
                'setting'  => 'november_zero_front_feature_background_overlay_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );
