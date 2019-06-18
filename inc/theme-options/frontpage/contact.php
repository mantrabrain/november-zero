<?php

   Kirki::add_section( 'november_zero_front_contact', array(
    'title'          => __( 'Contact Section', 'november-zero' ),
    'description'    => __( 'First make Contact details page and form page . You can add Contact form 7 shortcode in form page ', 'november-zero' ),
    'panel'          => 'november_zero_front_panel',
    'priority'       => 160,
    ) );

   Kirki::add_field( 'november_zero_front_contact_ebable', array(
	'type'        => 'toggle',
	'settings'    => 'november_zero_front_contact_ebable',
	'label'       => __( 'Disable/Enable Section', 'november-zero' ),
	'section'     => 'november_zero_front_contact',
	'default'     => '1',
	'priority'    => 10,
) );

 

   Kirki::add_field( 'november_zero_front_contact_page1', array(
	'type'     => 'select',
	'settings' => 'november_zero_front_contact_page1',
	'label'    => __( 'Select Page for Contact form', 'november-zero' ),
	'section'  => 'november_zero_front_contact',
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
                'setting'  => 'november_zero_front_contact_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

    Kirki::add_field( 'november_zero_front_contact_page2', array(
	'type'     => 'select',
	'settings' => 'november_zero_front_contact_page2',
	'label'    => __( 'Select Page for Contact Details', 'november-zero' ),
	'section'  => 'november_zero_front_contact',
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
                'setting'  => 'november_zero_front_contact_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );

	  Kirki::add_field( 'november_zero_front_contact_background', array(
	'type'        => 'background',
	'settings'    => 'november_zero_front_contact_background',
	'label'       => __( 'Background Control', 'november-zero' ),
	'description' => __( 'Background conrols are pretty complex - but extremely useful if properly used.', 'november-zero' ),
	'section'     => 'november_zero_front_contact',
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
                'setting'  => 'november_zero_front_contact_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	
	) );

	   Kirki::add_field( 'november_zero_front_contact_background_enable', array(
	'type'        => 'toggle',
	'settings'    => 'november_zero_front_contact_background_enable',
	'label'       => __( 'Disable/Enable Overlay', 'november-zero' ),
	'section'     => 'november_zero_front_contact',
	'default'     => '0',
	'priority'    => 10,
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_contact_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),	
	) );

    Kirki::add_field( 'november_zero_front_contact_background_overlay', array(
	'type'        => 'color',
	'settings'    => 'november_zero_front_contact_background_overlay',
	'label'       => __( 'Overlay', 'november-zero' ),
	'description' => __( 'Background Overlay', 'november-zero' ),
	'section'     => 'november_zero_front_contact',
	'default'     => '',
	'required'  => array(
            array(
                'setting'  => 'november_zero_front_contact_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
             array(
                'setting'  => 'november_zero_front_contact_background_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
	) );