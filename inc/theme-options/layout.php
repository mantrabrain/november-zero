<?php 


    Kirki::add_section( 'november_zero_layout', array(
    'title'          => __( 'Layout Type', 'november-zero' ),
    'description'    => __( 'Layout Type', 'november-zero' ),
    'panel'          => 'november_zero_panel',
    'priority'       => 160,
    ) );
    Kirki::add_field( 'november_zero_layout_stting', array(    
   'type'        => 'radio-buttonset',
	'settings'    => 'november_zero_layout_stting',
	'label'       => __( 'Site Layout Type', 'november-zero' ),
	'section'     => 'november_zero_layout',
	'default'     => 'sectionboxed',
	'priority'    => 10,
	'choices'     => array(
		'fullwidth'   => __( 'Full Width', 'november-zero' ),
		'boxed' => __( 'Boxed', 'november-zero' ),
		'sectionboxed' => __( 'Only Section Boxed', 'november-zero' ),
		
	),
    ) );