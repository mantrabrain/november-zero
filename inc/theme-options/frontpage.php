<?php 

 Kirki::add_panel( 'november_zero_front_panel', array(
    'priority'    => 10,
    'title'       => __( 'FrontPage Options', 'november-zero' ),
    'description' => __( 'November Zero FrontPage Options', 'november-zero' ),
   ) );

 $sections = array('bigtitle','about','blog','contact');

 foreach ($sections as $key => $value) {

 	require get_template_directory() . '/inc/theme-options/frontpage/'.$value.'.php';
 	
 }
