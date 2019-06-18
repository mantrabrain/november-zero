<?php


    Kirki::add_section( 'november_zero_footer_section', array(
    'title'          => __( 'Footer ', 'november-zero' ),
    'description'    => __( 'Footer Setting', 'november-zero' ),
    'panel'          => 'november_zero_panel',
    'priority'       => 160,
    ) );

    Kirki::add_field( 'november_zero_footer_section_ebable', array(
    'type'        => 'toggle',
    'settings'    => 'november_zero_footer_section_ebable',
    'label'       => __( 'Disable/Enable Section', 'november-zero' ),
    'section'     => 'november_zero_footer_section',
    'default'     => '1',
    'priority'    => 10,
    ) );

    Kirki::add_field( 'november_zero_footer_section_col', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'november_zero_footer_section_col',
    'label'       => __( 'Footer Columns', 'november-zero' ),
    'description' => __( 'Set Footer columns for footer and Go to Appearance ->Widgets to add your content. ', 'november-zero' ),
    'section'     => 'november_zero_footer_section',
    'default'     => '4',
    'priority'    => 10,
    'choices'     => array(
        '1'   => __( 'One', 'november-zero' ),
        '2' => __( 'Two', 'november-zero' ),
        '3' => __( 'Three', 'november-zero' ),
        '4' => __( 'Four', 'november-zero' ),
        
        
    ),
    'required'  => array(
            array(
                'setting'  => 'november_zero_footer_section_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
    ) );
   Kirki::add_field( 'november_zero_footer_copyright', array(
    'type'     => 'text',
    'settings' => 'november_zero_footer_copyright',
    'label'    => __( 'Footer Copyright', 'november-zero' ),
    'section'  => 'november_zero_footer_section',
    'default'  => __( 'Edit Copyright Text In Customizer ', 'november-zero' ),
    'priority' => 10,
    ) );

    Kirki::add_field( 'november_zero_front_footer_background', array(
    'type'        => 'background',
    'settings'    => 'november_zero_front_footer_background',
    'label'       => __( 'Background Control', 'november-zero' ),
    'description' => __( 'Background conrols are pretty complex - but extremely useful if properly used.', 'november-zero' ),
    'section'     => 'november_zero_footer_section',
    'default'     => array(
        'background-color'      => '#444',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ),
    'required'  => array(
            array(
                'setting'  => 'november_zero_footer_section_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
    
    ) );

