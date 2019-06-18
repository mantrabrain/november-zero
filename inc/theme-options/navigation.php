<?php 


    Kirki::add_section( 'november_zero_navigation', array(
    'title'          => __( 'Menu Setting', 'november-zero' ),
    'description'    => __( 'Mene Settings', 'november-zero' ),
    'panel'          => 'november_zero_panel',
    'priority'       => 160,
    ) );

     Kirki::add_field( 'november_zero_nav_search', array(
    
    'type'        => 'radio-buttonset',
    'settings'    => 'november_zero_nav_search',
    'label'       => __( 'Show Search Icon On Navigation', 'november-zero' ),
    'section'     => 'november_zero_navigation',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => array(
        'on'  => __( 'Show ', 'november-zero' ),
        'off' => __( 'Hide', 'november-zero' ),
    ),

    ) );

   Kirki::add_field( 'november_zero_navigation', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'november_zero_navigation',
	'label'       => esc_html__( 'Header Type', 'november-zero' ),
	'section'     => 'november_zero_navigation',
	'default'     => 'sticky',
	'priority'    => 10,
	'choices'     => array(
		'sticky'  =>  __( 'Sticky ', 'november-zero' ),
		'static'  =>  __( 'Static ', 'november-zero' ),
		
	),
	) );

    Kirki::add_field( 'november_zero_menu_display', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'november_zero_menu_display',
    'label'       => esc_html__( 'Menu Display', 'november-zero' ),
    'section'     => 'november_zero_navigation',
    'default'     => 'inline',
    'priority'    => 10,
    'choices'     => array(
        'inline'  =>  __( 'Inline ', 'november-zero' ),
        'centered'  =>  __( 'centered ', 'november-zero' ),
        
    ),
    ) );

  Kirki::add_field( 'november_zero_menu_header_site_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_menu_header_site_title_size',
  'label'     => __( ' Site Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_navigation',
  'default'     => array(   
  'font-size'      => '32px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'h1.site-title a',
      'property' => 'font-size'
    ),
  )
  ) );

   Kirki::add_field( 'november_zero_menu_header_site_sub_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_menu_header_site_sub_title_size',
  'label'     => __( ' Site Sub Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_navigation',
  'default'     => array(   
  'font-size'      => '17px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'p.site-description',
      'property' => 'font-size'
    ),
  )
  ) );

  Kirki::add_field( 'november_zero_menu_header_site_title_and_subtitle_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_menu_header_site_title_and_subtitle_color',
  'label'     => __( 'Title & Subtitle  Color', 'november-zero' ),
  'section'   => 'november_zero_navigation',
  'default'   => '#6e6e6e',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'h1.site-title a, p.site-description',
      'property' => 'color'
    ),
  )
  ) );


  Kirki::add_field( 'november_zero_menu_font_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_menu_font_size',
  'label'     => __( ' Menu Font Size', 'november-zero' ),
  'section'   => 'november_zero_navigation',
  'default'     => array(   
  'font-size'      => '17px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#site-navigation li',
      'property' => 'font-size'
    ),
  )
  ) );

  Kirki::add_field( 'november_zero_menu_font_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_menu_font_color',
  'label'     => __( 'Menu Font  Color', 'november-zero' ),
  'section'   => 'november_zero_navigation',
  'default'   => '#777',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#site-navigation li a, #nav-search a i',
      'property' => 'color'
    ),
  )
  ) );

   Kirki::add_field( 'november_zero_menu_bg_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_menu_bg_color',
  'label'     => __( 'Menu Background  Color', 'november-zero' ),
  'section'   => 'november_zero_navigation',
  'default'   => '#fff',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'header#masthead',
      'property' => 'background-color'
    ),
  )
  ) );

