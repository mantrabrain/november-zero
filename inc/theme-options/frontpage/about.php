<?php

   Kirki::add_section( 'november_zero_front_about', array(
    'title'          => __( 'About Section', 'november-zero' ),
    'description'    => __( 'First make about page and select here .', 'november-zero' ),
    'panel'          => 'november_zero_front_panel',
    'priority'       => 160,
    ) );

   Kirki::add_field( 'november_zero_front_about_ebable', array(
	'type'        => 'toggle',
	'settings'    => 'november_zero_front_about_ebable',
	'label'       => __( 'Disable/Enable Section', 'november-zero' ),
	'section'     => 'november_zero_front_about',
	'default'     => '1',
	'priority'    => 10,
	) );


   Kirki::add_field( 'november_zero_front_about_title_text', array(
	'type'     => 'text',
	'settings' => 'november_zero_front_about_title_text',
	'label'    => __( 'Title ', 'november-zero' ),
	'section'  => 'november_zero_front_about',
	'default'  => __( 'Edit Me In Customizer', 'november-zero' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );
   Kirki::add_field( 'november_zero_front_about_title_text_color', array(
	'type'      => 'color',
	'settings'  => 'november_zero_front_about_title_text_color',
	'label'     => __( 'Title Color', 'november-zero' ),
	'section'   => 'november_zero_front_about',
	'default'   => '#6e6e6e',
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#abouttitletext',
			'property' => 'color'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

   Kirki::add_field( 'november_zero_front_about_title_text_size', array(
	'type'      => 'typography',
	'settings'  => 'november_zero_front_about_title_text_size',
	'label'     => __( ' Title Font Size', 'november-zero' ),
	'section'   => 'november_zero_front_about',
	'default'     => array(		
	'font-size'      => '40px',		
	),	
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#abouttitletext',
			'property' => 'font-size'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

    Kirki::add_field( 'november_zero_front_about_subtitle_text', array(
	'type'     => 'text',
	'settings' => 'november_zero_front_about_subtitle_text',
	'label'    => __( 'Sub Title ', 'november-zero' ),
	'section'  => 'november_zero_front_about',
	'default'  => __( 'Edit Me In Customizer', 'november-zero' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

	 Kirki::add_field( 'november_zero_front_about_sub_title_text_color', array(
	'type'      => 'color',
	'settings'  => 'november_zero_front_about_sub_title_text_color',
	'label'     => __( 'Sub Title Color', 'november-zero' ),
	'section'   => 'november_zero_front_about',
	'default'   => '#6e6e6e',
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#aboutsubtitletext',
			'property' => 'color'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

	 Kirki::add_field( 'november_zero_front_about_sub_title_text_size', array(
	'type'      => 'typography',
	'settings'  => 'november_zero_front_about_sub_title_text_size',
	'label'     => __( 'Sub Title Font Size', 'november-zero' ),
	'section'   => 'november_zero_front_about',
	'default'     => array(		
	'font-size'      => '17px',		
	),	
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#aboutsubtitletext',
			'property' => 'font-size'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

   Kirki::add_field( 'november_zero_front_about_button_text', array(
	'type'     => 'text',
	'settings' => 'november_zero_front_about_button_text',
	'label'    => __( 'Button Text', 'november-zero' ),
	'section'  => 'november_zero_front_about',
	'default'  => __( 'Edit Me In Customizer', 'november-zero' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );


    Kirki::add_field( 'november_zero_front_about_button_link', array(
	'type'     => 'text',
	'settings' => 'november_zero_front_about_button_link',
	'label'    => __( 'Button Link', 'november-zero' ),
	'section'  => 'november_zero_front_about',
	'default'  => __( '#', 'november-zero' ),
	'priority' => 10,
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );
	 Kirki::add_field( 'november_zero_front_about_button_bg_color', array(
	'type'      => 'color',
	'settings'  => 'november_zero_front_about_button_bg_color',
	'label'     => __( 'Button Background Color', 'november-zero' ),
	'section'   => 'november_zero_front_about',
	'default'   => '#15a7bf',
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#aboutbuttontext',
			'property' => 'background-color'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

	 Kirki::add_field( 'november_zero_front_about_button_text_size', array(
	'type'      => 'typography',
	'settings'  => 'november_zero_front_about_button_text_size',
	'label'     => __( 'Button Font Size', 'november-zero' ),
	'section'   => 'november_zero_front_about',
	'default'   => array(		
	'font-size' => '17px',		
	),	
	'priority'  => 10,
	'transport' => 'auto',
	'output'    => array(
		array(
			'element'  => '#aboutbuttontext',
			'property' => 'font-size'
		),
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

	 Kirki::add_field( 'november_zero_front_about_page', array(
	'type'     => 'select',
	'settings' => 'november_zero_front_about_page',
	'label'    => __( 'Select About Page', 'november-zero' ),
	'section'  => 'november_zero_front_about',
	'default'  => '1',
	'priority' => 10,
	'multiple' => 1,
	'choices'  => Kirki_Helper::get_posts(
		array(
			'posts_per_page' => -1,
			'post_type'      => 'page'
		) 
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );


	Kirki::add_field( 'november_zero_front_about_content_type', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'november_zero_front_about_content_type',
	'label'       => esc_html__( 'Page Content Type', 'november-zero' ),
	'section'     => 'november_zero_front_about',
	'default'     => 'excerpt',
	'priority'    => 10,
	'choices'     => array(
		'full'   => __( 'Full Page  Content', 'november-zero' ),
		'excerpt' => __( 'Excerpt', 'november-zero' ),
		
		
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	
	) );

   Kirki::add_field( 'november_zero_front_about_excerpt_length', array(
	'type'        => 'slider',
	'settings'    => 'november_zero_front_about_excerpt_length',
	'label'       => __( 'Excerpt Length', 'november-zero' ),
	'section'     => 'november_zero_front_about',
	'default'     => 30,
	'choices'     => array(
		'min'  => '10',
		'max'  => '100',
		'step' => '1',
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_content_type',
                'operator' => '==',
                'value'    => 'excerpt',
            ),
             array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

     Kirki::add_field( 'november_zero_front_about_background', array(
	'type'        => 'background',
	'settings'    => 'november_zero_front_about_background',
	'label'       => __( 'Background Control', 'november-zero' ),
	'description' => __( 'Background conrols are pretty complex - but extremely useful if properly used.', 'november-zero' ),
	'section'     => 'november_zero_front_about',
	'default'     => array(
		'background-color'      => '#fafaf6',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	),
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	
	) );

     Kirki::add_field( 'november_zero_front_about_background_overlay_enable', array(
	'type'        => 'toggle',
	'settings'    => 'november_zero_front_about_background_overlay_enable',
	'label'       => __( 'Disable/Enable Overlay', 'november-zero' ),
	'section'     => 'november_zero_front_about',
	'default'     => '0',
	'priority'    => 10,
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),	
	) );

    Kirki::add_field( 'november_zero_front_about_background_overlay', array(
	'type'        => 'color',
	'settings'    => 'november_zero_front_about_background_overlay',
	'label'       => __( 'Overlay', 'november-zero' ),
	'description' => __( 'Background Overlay', 'november-zero' ),
	'section'     => 'november_zero_front_about',
	'default'     => '',
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_about_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
             array(
                'setting'  => 'november_zero_front_about_background_overlay_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

