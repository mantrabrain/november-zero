<?php

   Kirki::add_section( 'november_zero_front_portfolio', array(
    'title'          => esc_attr__( 'Portfolio Section', 'november-zero' ),
    'description'    => esc_attr__( '', 'november-zero' ),
    'panel'          => 'november_zero_front_panel',
    'priority'       => 160,
    ) );

   Kirki::add_field( 'november_zero_front_portfolio_enable', array(
	'type'        => 'toggle',
	'settings'    => 'november_zero_front_portfolio_enable',
	'label'       => esc_attr__( 'Disable/Enable Section', 'november-zero' ),
	'section'     => 'november_zero_front_portfolio',
	'default'     => '1',
	'priority'    => 10,
  ) );

     Kirki::add_field( 'november_zero_front_portfolio_title', array(
  'type'     => 'text',
  'settings' => 'november_zero_front_portfolio_title',
  'label'    => __( 'Portfolio Title', 'november-zero' ),
  'section'  => 'november_zero_front_portfolio',
  'default'  => esc_attr__( 'Edit Me In Customizer', 'november-zero' ),
  'priority' => 10,
  'transport'=>'postMessage',
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_front_portfolio_title_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_portfolio_title_color',
  'label'     => __( 'Title Color', 'november-zero' ),
  'section'   => 'november_zero_front_portfolio',
  'default'   => '#FFFFFF',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#portfoliotitletext',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_portfolio_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_portfolio_title_size',
  'label'     => __( ' Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_portfolio',
  'default'     => array(   
  'font-size'      => '40px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#portfoliotitletext',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

    Kirki::add_field( 'november_zero_front_portfolio_sub_title', array(
  'type'     => 'text',
  'settings' => 'november_zero_front_portfolio_sub_title',
  'label'    => __( 'Portfolio Sub Title', 'november-zero' ),
  'section'  => 'november_zero_front_portfolio',
  'default'  => esc_attr__( 'Edit Me In Customizer', 'november-zero' ),
  'priority' => 10,
  'transport'=>'postMessage',
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );
     Kirki::add_field( 'november_zero_front_portfolio_sub_title_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_portfolio_sub_title_color',
  'label'     => __( 'Sub Title Color', 'november-zero' ),
  'section'   => 'november_zero_front_portfolio',
  'default'   => '#FFFFFF',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#portfoliosubtitletext',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_portfolio_sub_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_portfolio_sub_title_size',
  'label'     => __( 'Sub Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_portfolio',
  'default'     => array(   
  'font-size'      => '17px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#portfoliosubtitletext',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_portfolio_item', array(
  'type'        => 'repeater',
  'label'       => esc_attr__( 'Portfolio Items', 'november-zero' ),
  'section'     => 'november_zero_front_portfolio',
  'priority'    => 10,
  'row_label' => array(
    'type'  => 'field',
    'value' => esc_attr__('Portfolio', 'november-zero' ),
    'field' => 'link_text',
  ),
  'button_label' => esc_attr__('Add New Portfolio ', 'november-zero' ),
  'settings'     => 'november_zero_portfolio_item_repeater',
 
  'fields' => array(
    'portfolio_icon' => array(
      'type'        => 'image',
      'label'       => esc_attr__( 'Portfolio Image', 'november-zero' ),
      'default'     => '',
    ),
   
    'portfolio_text' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Title', 'november-zero' ),
      'default'     => '',
    ),
     'portfolio_button_text' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Button Text', 'november-zero' ),
      'default'     => '',
    ),
      'portfolio_button_url' => array(
      'type'        => 'text',
      'label'       => esc_attr__( 'Button URL ', 'november-zero' ),
      'default'     => '',
    ),
            
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_front_portfolio_item_title_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_portfolio_item_title_color',
  'label'     => __( 'Portfolio Items Title Color', 'november-zero' ),
  'section'   => 'november_zero_front_portfolio',
  'default'   => '#FFFFFF',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'h4.card-title.portfolio',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

    Kirki::add_field( 'november_zero_front_portfolio_item_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_portfolio_item_title_size',
  'label'     => __( 'Portfolio Items Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_portfolio',
  'default'     => array(   
  'font-size'      => '23px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'h4.card-title.portfolio',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_front_portfolio_item_button_bg_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_portfolio_item_button_bg_color',
  'label'     => __( 'Portfolio Items Button Background Color', 'november-zero' ),
  'section'   => 'november_zero_front_portfolio',
  'default'   => '#FFFFFF',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'a.btn.btn-default.portfolio',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

    Kirki::add_field( 'november_zero_front_portfolio_item_button_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_portfolio_item_button_title_size',
  'label'     => __( 'Portfolio Items Button Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_portfolio',
  'default'     => array(   
  'font-size'      => '23px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'a.btn.btn-default.portfolio',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_portfolio_background', array(
  'type'        => 'background',
  'settings'    => 'november_zero_front_portfolio_background',
  'label'       => esc_attr__( 'Background Control', 'november-zero' ),
  'description' => esc_attr__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'november-zero' ),
  'section'     => 'november_zero_front_portfolio',
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
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  
  ) );

  Kirki::add_field( 'november_zero_front_portfolio_background_overlay_enable', array(
  'type'        => 'toggle',
  'settings'    => 'november_zero_front_portfolio_background_overlay_enable',
  'label'       => esc_attr__( 'Disable/Enable Overlay', 'november-zero' ),
  'section'     => 'november_zero_front_portfolio',
  'default'     => '0',
  'priority'    => 10,
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),  
  ) );

    Kirki::add_field( 'november_zero_front_portfolio_background_overlay', array(
  'type'        => 'color',
  'settings'    => 'november_zero_front_portfolio_background_overlay',
  'label'       => __( 'Overlay', 'november-zero' ),
  'description' => esc_attr__( 'Background Overlay', 'november-zero' ),
  'section'     => 'november_zero_front_portfolio',
  'default'     => '',
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_portfolio_enable',
                'operator' => '==',
                'value'    => '1',
            ),
             array(
                'setting'  => 'november_zero_front_portfolio_background_overlay_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );



// Overlay Opacity
Kirki::add_field('november_zero_front_portfolio_background_overlay_opacity', array(
    'type' => 'slider',
    'settings' => 'november_zero_front_portfolio_background_overlay_opacity',
    'label' => __('Overlay Opacity', 'november-zero'),
    'description' => esc_attr__('Overlay Opacity', 'november-zero'),
    'section' => 'november_zero_front_portfolio',
    'default' => 0.5,
    'choices' => array(
        'max' => 1,
        'min' => 0,
        'step' => 0.05,
    ),

    'required' => array(
        array(
            'setting' => 'november_zero_front_portfolio_enable',
            'operator' => '==',
            'value' => '1',
        ),
        array(
            'setting' => 'november_zero_front_portfolio_background_overlay_enable',
            'operator' => '==',
            'value' => '1',
        ),
    ),
));