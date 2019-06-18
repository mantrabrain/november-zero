<?php

   Kirki::add_section( 'november_zero_front_big_title', array(
    'title'          => __( 'Big Title Section', 'november-zero' ),
    'description'    => __( 'Banner Section For FrontPage', 'november-zero' ),
    'panel'          => 'november_zero_front_panel',
    'priority'       => 160,
    ) );


   Kirki::add_field( 'november_zero_front_big_title_enable', array(
	'type'        => 'toggle',
	'settings'    => 'november_zero_front_big_title_enable',
	'label'       => __( 'Disable/Enable Section', 'november-zero' ),
	'section'     => 'november_zero_front_big_title',
	'default'     => '1',
	'priority'    => 10,
	) );

   Kirki::add_field( 'november_zero_big_title_position', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'november_zero_big_title_position',
	'label'       => esc_html__( 'Section Position', 'november-zero' ),
	'section'     => 'november_zero_front_big_title',
	'default'     => 'center',
	'priority'    => 10,
	'choices'     => array(
		'left'   => __( 'Left', 'november-zero' ),
		'center' => __( 'Center', 'november-zero' ),
		'right' => __( 'Right', 'november-zero' ),
		
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

   Kirki::add_field( 'november_zero_big_title_background', array(
	'type'        => 'background',
	'settings'    => 'november_zero_big_title_background',
	'label'       => __( 'Background Control', 'november-zero' ),
	'description' => __( 'Background conrols are pretty complex - but extremely useful if properly used.', 'november-zero' ),
	'section'     => 'november_zero_front_big_title',
	'default'     => array(
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      =>  get_template_directory_uri().'/assets/img/blog2.jpg',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

    Kirki::add_field( 'november_zero_front_big_title_overlay_enable', array(
	'type'        => 'toggle',
	'settings'    => 'november_zero_front_big_title_overlay_enable',
	'label'       => __( 'Disable/Enable Overlay', 'november-zero' ),
	'section'     => 'november_zero_front_big_title',
	'default'     => '0',
	'priority'    => 10,
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),	
	) );

    Kirki::add_field( 'november_zero_big_title_background_overlay', array(
	'type'        => 'color',
	'settings'    => 'november_zero_big_title_background_overlay',
	'label'       => __( 'Overlay', 'november-zero' ),
	'description' => __( 'Background Overlay', 'november-zero' ),
	'section'     => 'november_zero_front_big_title',
	'default'     => '',
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
             array(
                'setting'  => 'november_zero_front_big_title_overlay_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

   Kirki::add_field( 'november_zero_big_title_text', array(
	'type'     => 'text',
	'settings' => 'november_zero_big_title_text',
	'label'    => __( 'Title', 'november-zero' ),
	'section'  => 'november_zero_front_big_title',
	'default'  => __( 'Edit Me In Customizer', 'november-zero' ),
	'priority' => 10,	
	'transport'=>'postMessage',
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );
   	Kirki::add_field( 'november_zero_big_title_text_color', array(
	'type'      => 'color',
	'settings'  => 'november_zero_big_title_text_color',
	'label'     => __( 'Title Color', 'november-zero' ),
	'section'   => 'november_zero_front_big_title',
	'default'   => '#FFFFFF',
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#bigtitletext',
			'property' => 'color'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );
	Kirki::add_field( 'november_zero_big_title_text_size', array(
	'type'      => 'typography',
	'settings'  => 'november_zero_big_title_text_size',
	'label'     => __( ' Title Font Size', 'november-zero' ),
	'section'   => 'november_zero_front_big_title',
	'default'     => array(		
	'font-size'      => '60px',		
	),	
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#bigtitletext',
			'property' => 'font-size'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );


   Kirki::add_field( 'november_zero_big_subtitle_text', array(
	'type'     => 'text',
	'settings' => 'november_zero_big_subtitle_text',
	'label'    => __( 'Subtitle', 'november-zero' ),
	'section'  => 'november_zero_front_big_title',
	'default'  => __( 'Edit Me In Customizer', 'november-zero' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

   	Kirki::add_field( 'november_zero_big_subtitle_text_color', array(
	'type'      => 'color',
	'settings'  => 'november_zero_big_subtitle_text_color',
	'label'     => __( 'Sub Title Color', 'november-zero' ),
	'section'   => 'november_zero_front_big_title',
	'default'   => '#FFFFFF',
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#bigsubtitletext',
			'property' => 'color'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

	Kirki::add_field( 'november_zero_big_subtitle_text_size', array(
	'type'      => 'typography',
	'settings'  => 'november_zero_big_subtitle_text_size',
	'label'     => __( 'Sub Title Font Size', 'november-zero' ),
	'section'   => 'november_zero_front_big_title',
	'default'     => array(		
		'font-size'      => '19px',		
	),	
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#bigsubtitletext',
			'property' => 'font-size'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

   Kirki::add_field( 'november_zero_big_button_text', array(
	'type'     => 'text',
	'settings' => 'november_zero_big_button_text',
	'label'    => __( 'Button Text', 'november-zero' ),
	'section'  => 'november_zero_front_big_title',
	'default'  => __( 'Edit Me In Customizer', 'november-zero' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );  

	Kirki::add_field( 'november_zero_big_button_text_size', array(
	'type'      => 'typography',
	'settings'  => 'november_zero_big_button_text_size',
	'label'     => __( ' Button Font Size', 'november-zero' ),
	'section'   => 'november_zero_front_big_title',
	'default'     => array(		
	'font-size'      => '17px',		
	),	
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#bigbuttontext',
			'property' => 'font-size'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) ); 

    Kirki::add_field( 'november_zero_big_button_link', array(
	'type'     => 'text',
	'settings' => 'november_zero_big_button_link',
	'label'    => __( 'Button Link', 'november-zero' ),
	'section'  => 'november_zero_front_big_title',
	'default'  => __( '#', 'november-zero' ),
	'priority' => 10,
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );
	
	Kirki::add_field( 'november_zero_big_button_text_bg_color', array(
	'type'      => 'color',
	'settings'  => 'november_zero_big_button_text_bg_color',
	'label'     => __( 'Button Background Color', 'november-zero' ),
	'section'   => 'november_zero_front_big_title',
	'default'   => '#15a7bf',
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#bigbuttontext',
			'property' => 'background-color'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_big_title_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );


