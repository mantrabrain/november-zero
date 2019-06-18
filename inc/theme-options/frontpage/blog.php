<?php

   Kirki::add_section( 'november_zero_front_blog', array(
    'title'          => __( 'Blog Section', 'november-zero' ),
    'description'    => __( 'Posts Appears in this section', 'november-zero' ),
    'panel'          => 'november_zero_front_panel',
    'priority'       => 160,
    ) );

   Kirki::add_field( 'november_zero_front_blog_ebable', array(
	'type'        => 'toggle',
	'settings'    => 'november_zero_front_blog_ebable',
	'label'       => __( 'Disable/Enable Section', 'november-zero' ),
	'section'     => 'november_zero_front_blog',
	'default'     => '1',
	'priority'    => 10,
  ) );

   Kirki::add_field( 'november_zero_front_blog_title', array(
  'type'     => 'text',
  'settings' => 'november_zero_front_blog_title',
  'label'    => __( 'Blog Title', 'november-zero' ),
  'section'  => 'november_zero_front_blog',
  'default'  => __( 'Edit Me In Customizer', 'november-zero' ),
  'priority' => 10,
  'transport'=>'postMessage',
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_front_blog_title_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_blog_title_color',
  'label'     => __( 'Title Color', 'november-zero' ),
  'section'   => 'november_zero_front_blog',
  'default'   => '#6e6e6e',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#blogtitletext',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_blog_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_blog_title_size',
  'label'     => __( ' Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_blog',
  'default'     => array(   
  'font-size'      => '40px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#blogtitletext',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

    Kirki::add_field( 'november_zero_front_blog_sub_title', array(
  'type'     => 'text',
  'settings' => 'november_zero_front_blog_sub_title',
  'label'    => __( 'Blog Sub Title', 'november-zero' ),
  'section'  => 'november_zero_front_blog',
  'default'  => __( 'Edit Me In Customizer', 'november-zero' ),
  'priority' => 10,
  'transport'=>'postMessage',
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_front_blog_sub_title_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_blog_sub_title_color',
  'label'     => __( 'Sub Title Color', 'november-zero' ),
  'section'   => 'november_zero_front_blog',
  'default'   => '#6e6e6e',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#blogsubtitletext',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_blog_sub_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_blog_sub_title_size',
  'label'     => __( ' Sub Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_blog',
  'default'     => array(   
  'font-size'      => '17px',   
  ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#blogsubtitletext',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

    Kirki::add_field( 'november_zero_front_blog_post_number', array(
  'type'        => 'number',
  'settings'    => 'november_zero_front_blog_post_number',
  'label'       => __( 'Number  Of Posts ', 'november-zero' ),
  'section'     => 'november_zero_front_blog',
  'default'     => 3,
  'choices'     => array(
    'min'  => 1,
    'max'  => 12,
    'step' => 1,
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

  Kirki::add_field( 'november_zero_front_blog_background', array(
  'type'        => 'background',
  'settings'    => 'november_zero_front_blog_background',
  'label'       => __( 'Background Control', 'november-zero' ),
  'description' => __( 'Background conrols are pretty complex - but extremely useful if properly used.', 'november-zero' ),
  'section'     => 'november_zero_front_blog',
  'default'     => array(
    'background-color'      => '#fff',
    'background-image'      => '',
    'background-repeat'     => 'repeat',
    'background-position'   => 'center center',
    'background-size'       => 'cover',
    'background-attachment' => 'scroll',
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  
  ) );

    Kirki::add_field( 'november_zero_front_blog_background_overlay_enable', array(
  'type'        => 'toggle',
  'settings'    => 'november_zero_front_blog_background_overlay_enable',
  'label'       => __( 'Disable/Enable Overlay', 'november-zero' ),
  'section'     => 'november_zero_front_blog',
  'default'     => '0',
  'priority'    => 10,
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),  
  ) );

    Kirki::add_field( 'november_zero_front_blog_background_overlay', array(
  'type'        => 'color',
  'settings'    => 'november_zero_front_blog_background_overlay',
  'label'       => __( 'Overlay', 'november-zero' ),
  'description' => __( 'Background Overlay', 'november-zero' ),
  'section'     => 'november_zero_front_blog',
  'default'     => '',
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
             array(
                'setting'  => 'november_zero_front_blog_background_overlay_enable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );


  Kirki::add_field( 'november_zero_front_blog_edit_more', array(
  'type'        => 'toggle',
  'settings'    => 'november_zero_front_blog_edit_more',
  'label'       => __( 'More Setting', 'november-zero' ),
  'section'     => 'november_zero_front_blog',
  'default'     => '0',
  'priority'    => 10,
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
        ),  
  ) );


  Kirki::add_field( 'november_zero_front_blog_content_title_color', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_blog_content_title_color',
  'label'     => __( 'Post  Title Color', 'november-zero' ),
  'section'   => 'november_zero_front_blog',
  'default'   => '#15a7bf',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#blogcontenttitletext',
      'property' => 'color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
            array(
                'setting'  => 'november_zero_front_blog_edit_more',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_blog_content_title_size', array(
  'type'      => 'typography',
  'settings'  => 'november_zero_front_blog_content_title_size',
  'label'     => __( 'Post Title Font Size', 'november-zero' ),
  'section'   => 'november_zero_front_blog',
  'default'   => array(   
                'font-size' => '24px',   
                ),  
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#blogcontenttitletext',
      'property' => 'font-size'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
             array(
                'setting'  => 'november_zero_front_blog_edit_more',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_blog_content_see_more_bgcolor', array(
  'type'      => 'color',
  'settings'  => 'november_zero_front_blog_content_see_more_bgcolor',
  'label'     => __( 'Button Background Color', 'november-zero' ),
  'section'   => 'november_zero_front_blog',
  'default'   => '#15a7bf',
  'priority'  => 10,
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => '#blogseemorebtn',
      'property' => 'background-color'
    ),
  ),
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
            array(
                'setting'  => 'november_zero_front_blog_edit_more',
                'operator' => '==',
                'value'    => '1',
            ),
        ),
  ) );

   Kirki::add_field( 'november_zero_front_blog_disable_postmeta', array(
  'type'        => 'toggle',
  'settings'    => 'november_zero_front_blog_disable_postmeta',
  'label'       => __( 'Enable/Disable Postmeta', 'november-zero' ),
  'section'     => 'november_zero_front_blog',
  'default'     => '1',
  'priority'    => 10,
  'required'  => array(
            array(
                'setting'  => 'november_zero_front_blog_ebable',
                'operator' => '==',
                'value'    => '1',
            ),
            array(
                'setting'  => 'november_zero_front_blog_edit_more',
                'operator' => '==',
                'value'    => '1',
            ),
        ),  
  ) );

   

