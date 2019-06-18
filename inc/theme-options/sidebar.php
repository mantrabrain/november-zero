<?php


    Kirki::add_section( 'november_zero_sidebar_option', array(
    'title'          => __( 'Sidebar Options', 'november-zero' ),
    'description'    => __( 'For pages/posts/archives', 'november-zero' ),
    'panel'          => 'november_zero_panel',
    'priority'       => 160,
    ) );

     Kirki::add_field( 'november_zero_post_archive_sidebar', array(
    
    'type'        => 'radio-buttonset',
    'settings'    => 'november_zero_post_archive_sidebar',
    'label'       => __( 'Post Archive Sidebar', 'november-zero' ),
    'section'     => 'november_zero_sidebar_option',
    'default'     => 'right',
    'priority'    => 10,
    'choices'     => array(
        'left'  => __( 'Left ', 'november-zero' ),
        'right' => __( 'Right', 'november-zero' ),
        'no' => __( 'NO Sidebar', 'november-zero' ),
    ),
   

    ) );

      Kirki::add_field( 'november_zero_post_single_sidebar', array(
    
    'type'        => 'radio-buttonset',
    'settings'    => 'november_zero_post_single_sidebar',
    'label'       => __( 'Post Single Sidebar', 'november-zero' ),
    'section'     => 'november_zero_sidebar_option',
    'default'     => 'right',
    'priority'    => 10,
    'choices'     => array(
        'left'  => __( 'Left ', 'november-zero' ),
        'right' => __( 'Right', 'november-zero' ),
        'no' => __( 'NO Sidebar', 'november-zero' ),
    ),

    ) );     

      Kirki::add_field( 'november_zero_page_single_sidebar', array(
    
    'type'        => 'radio-buttonset',
    'settings'    => 'november_zero_page_single_sidebar',
    'label'       => __( 'Page Single Sidebar', 'november-zero' ),
    'section'     => 'november_zero_sidebar_option',
    'default'     => 'right',
    'priority'    => 10,
    'choices'     => array(
        'left'  => __( 'Left ', 'november-zero' ),
        'right' => __( 'Right', 'november-zero' ),
        'no' => __( 'NO Sidebar', 'november-zero' ),
    ),

    ) );