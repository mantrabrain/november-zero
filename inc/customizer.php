<?php
/**
 * November Zero Theme Customizer
 *
 * @package November_Zero
 */

/**
 * Load Update to Pro section
 */
 require get_template_directory() . '/inc/upgrade/class-customize.php';
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function november_zero_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';	
	$wp_customize->get_section( 'header_image' )->title = __('Header Image' , 'november-zero');
	$wp_customize->get_section( 'header_image' )->panel = 'november_zero_panel';
 

	require get_template_directory() . '/inc/customizer-partials.php';

   
        
        $wp_customize->add_control( new November_Zero_cstmz_Static_Text_Control( $wp_customize, 'upgrade_text', array(
            'section'     => 'theme_detail',
            'label'       => __( 'Upgrade to PRO', 'november-zero' )
        ) ) );

	
	

}
add_action( 'customize_register', 'november_zero_customize_register' );


/********Theme Options************/

  Kirki::add_panel( 'november_zero_panel', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Theme Options', 'november-zero' ),
    'description' => esc_attr__( 'November Zero Theme Options', 'november-zero' ),
   ) );



 $fields = array('color-font','layout','header','navigation','sidebar','footer','frontpage');

 foreach ($fields as $key => $value) {

 	require get_template_directory() . '/inc/theme-options/'.$value.'.php';
 	
 }

  Kirki::add_panel( 'november_zero_ordering_panel', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Sections Ordering', 'november-zero' ),
    'description' => esc_attr__( 'November Zero Sections Order', 'november-zero' ),
   ) );

  require get_template_directory() . '/inc/theme-options/ordering/ordering.php';

/********End of Theme Options************/

 require get_template_directory() . '/inc/customizer-render-callback.php';

 
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function november_zero_customize_preview_js() {
	wp_enqueue_script( 'november-zero-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery','customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'november_zero_customize_preview_js' );

  