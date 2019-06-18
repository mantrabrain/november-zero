<?php 

if ( isset( $wp_customize->selective_refresh ) ) {		

		$wp_customize->selective_refresh->add_partial( 'november_zero_big_title_text', array(
			'selector'        => '#bigtitletext',
			'render_callback' => 'november_zero_big_title_text',
		) );
		$wp_customize->selective_refresh->add_partial( 'november_zero_big_subtitle_text', array(
			'selector'        => '#bigsubtitletext',
			'render_callback' => 'november_zero_big_subtitle_text',
		) );
		$wp_customize->selective_refresh->add_partial( 'november_zero_big_button_text', array(
			'selector'        => '#bigbuttontext',
			'render_callback' => 'november_zero_big_button_text',
		) );


		$wp_customize->selective_refresh->add_partial( 'november_zero_front_about_title_text', array(
			'selector'        => '#abouttitletext',
			'render_callback' => 'november_zero_front_about_title_text',
		) );
		$wp_customize->selective_refresh->add_partial( 'november_zero_front_about_subtitle_text', array(
			'selector'        => '#aboutsubtitletext',
			'render_callback' => 'november_zero_front_about_subtitle_text',
		) );
		$wp_customize->selective_refresh->add_partial( 'november_zero_front_about_button_text', array(
			'selector'        => '#aboutbuttontext',
			'render_callback' => 'november_zero_front_about_button_text',
		) );


		
		$wp_customize->selective_refresh->add_partial( 'november_zero_front_blog_title', array(
			'selector'        => '#blogtitletext',
			'render_callback' => 'november_zero_front_blog_title',
		) );
		$wp_customize->selective_refresh->add_partial( 'november_zero_front_blog_sub_title', array(
			'selector'        => '#blogsubtitletext',
			'render_callback' => 'november_zero_front_blog_sub_title',
		) );


		
		
}
