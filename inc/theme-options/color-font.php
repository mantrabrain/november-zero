<?php

    Kirki::add_section( 'november_zero_color_font', array(
    'title'          => __( 'Color & Font', 'november-zero' ),
    'description'    => __( 'Other color options are in respective sections .', 'november-zero' ),
    'panel'          => 'november_zero_panel',
    'priority'       => 160,
    ) );

   Kirki::add_field( 'november_zero_theme_color', array(
  'type'        => 'color',
  'settings'    => 'november_zero_theme_color',
  'label'       => __( 'Theme Color', 'november-zero' ),
  'description' => __( 'Whole Site Theme  Color', 'november-zero' ),
  'section'     => 'november_zero_color_font',
  'default'     => '#15a7bf',  
 
  ) );

  Kirki::add_field( 'november_zero_theme_font', array(
  'type'        => 'text',
  'settings'    => 'november_zero_theme_font',
  'label'       => __( 'Theme Font', 'november-zero' ),
  'description' => __( 'Google font name & sets. e.g. Gothic+A1|Roboto+Slab:100,300,400,700', 'november-zero' ),
  'section'     => 'november_zero_color_font',
  'default'     => 'Gothic+A1|Roboto+Slab:100,300,400,700',  
 
  ) );

  Kirki::add_field( 'november_zero_theme_font_family', array(
  'type'        => 'text',
  'settings'    => 'november_zero_theme_font_family',
  'label'       => __( ' Font Family', 'november-zero' ),
  'description' => __( 'Font Family', 'november-zero' ),
  'section'     => 'november_zero_color_font',
  'default'     => 'Roboto Slab',  
 
  ) );

