<?php


    Kirki::add_section( 'november_zero_top_header', array(
    'title'          => __( 'Top Header', 'november-zero' ),
    'description'    => __( 'This is header details section', 'november-zero' ),
    'panel'          => 'november_zero_panel',
    'priority'       => 160,
    ) );

    Kirki::add_field( 'november_zero_top_header_enable', array(
    
    'type'        => 'radio-buttonset',
    'settings'    => 'november_zero_top_header_enable',
    'label'       => __( 'Enable Top Header', 'november-zero' ),
    'section'     => 'november_zero_top_header',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => array(
        'on'  => __( 'Enabled', 'november-zero' ),
        'off' => __( 'Disabled', 'november-zero' ),
    ),

    ) );

     Kirki::add_field( 'november_zero_top_header_phone', array(
    'type'     => 'text',
    'settings' => 'november_zero_top_header_phone',
    'label'    => __( 'Phone  ', 'november-zero' ),
    'section'  => 'november_zero_top_header',
    'default'  => __( '123-456-789', 'november-zero' ),
    'priority' => 10,
    'required'  => array(
            array(
                'setting'  => 'november_zero_top_header_enable',
                'operator' => '==',
                'value'    => 'on',
            ),
        ),
    ) );

      Kirki::add_field( 'november_zero_top_header_email', array(
    'type'     => 'text',
    'settings' => 'november_zero_top_header_email',
    'label'    => __( 'Email  ', 'november-zero' ),
    'section'  => 'november_zero_top_header',
    'default'  => __( 'admin@example.com', 'november-zero' ),
    'priority' => 10,
    'required'  => array(
            array(
                'setting'  => 'november_zero_top_header_enable',
                'operator' => '==',
                'value'    => 'on',
            ),
        ),
    ) );

  Kirki::add_field( 'november_zero_top_scoial', array(
  'type'        => 'repeater',
  'label'       => __( 'Social  Links', 'november-zero' ),
  'section'     => 'november_zero_top_header',
  'priority'    => 10,
  'row_label' => array(
    'type'  => 'field',
    'value' => __('Social Medeia Links', 'november-zero' ),
    'field' => 'link_text',
  ),
  'button_label' => __('Add New Social Media ', 'november-zero' ),
  'settings'     => 'november_zero_top_scoial_items',
   'default'      => array( 
    array(
       'social_item' => __( 'https://facebook.com', 'november-zero' ),      
      'social_item_icon' => __( 'fa fa-facebook-f ', 'november-zero' ),
    ),    
  ), 
  'fields' => array(
   
    'social_item' => array(
      'type'        => 'text',
      'label'       => __( 'Social Media Link', 'november-zero' ),
      'default'     => '',
    ),
     'social_item_icon' => array(
      'type'        => 'text',
      'label'       => __( 'Icon', 'november-zero' ),
      'description' => __( 'eg: fa fa-facebook-f  Reference: https://fontawesome.com/icons ', 'november-zero' ),
      'default'     => 'fa fa-facebook-f',
    ),
     
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_top_header_enable',
                'operator' => '==',
                'value'    => 'on',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_top_header_background_color', array(
  'type'        => 'color',
  'settings'    => 'november_zero_top_header_background_color',
  'label'       => __( 'Baground Color', 'november-zero' ),
  'description' => __( 'Top Header Background Color', 'november-zero' ),
  'section'     => 'november_zero_top_header',
  'default'     => '#fff',
   'transport' => 'auto',
   'output'    => array(
    array(
      'element'  => '#top-nav.top-header-wrapper',
      'property' => 'background-color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_top_header_enable',
                'operator' => '==',
                'value'    => 'on',
            )
        ),
  ) );

  Kirki::add_field( 'november_zero_top_header_font_color', array(
  'type'        => 'color',
  'settings'    => 'november_zero_top_header_font_color',
  'label'       => __( 'Font Color', 'november-zero' ),
  'description' => __( 'Top Header Font Color', 'november-zero' ),
  'section'     => 'november_zero_top_header',
  'default'     => '#666',
   'transport' => 'auto',
   'output'    => array(
    array(
      'element'  => '#top-nav.top-header-wrapper li>a',
      'property' => 'color'
    ),
    array(
      'element'  => '#top-nav.top-header-wrapper li',
      'property' => 'border-color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_top_header_enable',
                'operator' => '==',
                'value'    => 'on',
            )
        ),
  ) );



   