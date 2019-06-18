<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package November_Zero
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function november_zero_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'november_zero_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function november_zero_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'november_zero_pingback_header' );


// fonts family 
if( ! function_exists( 'november_zero_body_font_family' ) ):

	function november_zero_body_font_family(){
		 /**
		 *  Returns body font family
		 */
		$body_font_family =  esc_attr ( get_theme_mod('november_zero_theme_font_family') );
		if( $body_font_family ){

			return $body_font_family;
		}
		$body_font_family = 'Roboto Slab';

		return esc_attr($body_font_family);
	}

endif;


if( ! function_exists('november_zero_dynamic_css') ):
function november_zero_dynamic_css(){

	/*Theme Color*/
	$theme_color	=  get_theme_mod('november_zero_theme_color');

	/*Top Header*/

	$top_bg			= get_theme_mod('november_zero_top_header_background_color');
	$top_font		= get_theme_mod('november_zero_top_header_font_color');

	/*menu */
	$site_title_font  	 = get_theme_mod('november_zero_menu_header_site_title_size');
	$site_subtitle_font  = get_theme_mod('november_zero_menu_header_site_sub_title_size');
	$site_titlesub_color = get_theme_mod('november_zero_menu_header_site_title_and_subtitle_color');

	$menu_font  	 = get_theme_mod('november_zero_menu_font_size');
	$menu_color  	 = get_theme_mod('november_zero_menu_font_color');
	$nav_bg_color  	 = get_theme_mod('november_zero_menu_bg_color');

	$about_bg 		= get_theme_mod('november_zero_front_about_background');
	$big_bg 		= get_theme_mod('november_zero_big_title_background');
	$blog_bg		= get_theme_mod('november_zero_front_blog_background');
	$contact_bg 	= get_theme_mod('november_zero_front_contact_background');
	$footer_bg 		= get_theme_mod('november_zero_front_footer_background');

	
	
	?>
	<style>

		body{
			font-family: '<?php echo november_zero_body_font_family() ;?>',sans-serif;			
		}

	<?php if($theme_color): ?>
		 button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.btn-default,.nav-previous a,.nav-next a,
		.page-numbers.current,.page-numbers:hover,
		.content-list-meta:before,
		.content-list-meta>.post-author:after,
		.pricing-t-title:after,
		.navbar-toggle
		{
			background: <?php echo  esc_attr($theme_color); ?> ;
		}
		input[type="search"],
		.page-numbers,
		input[type="search"]{
    		border: 1px solid <?php echo  esc_attr($theme_color); ?> ;
    	}
    	.main-navigation ul ul {
    		border-top: 3px solid <?php echo  esc_attr($theme_color); ?> ;
    	}
    	#site-navigation li a:hover:after,#site-navigation li.current-menu-item a:after{

            background: <?php echo  esc_attr($theme_color); ?> ;

		}
		a, ul.social-icon-list li
		{
			color:<?php echo  esc_attr($theme_color); ?> ;
		}
	<?php endif; ?>


	<?php if($top_bg): ?>
		#top-nav.top-header-wrapper{
			background-color: <?php echo  esc_attr($top_bg); ?> ;
		}
	<?php endif; ?>

	<?php if($top_font): ?>
		#top-nav.top-header-wrapper li>a{
			color: <?php echo  esc_attr($top_font); ?> ;
		}
		#top-nav.top-header-wrapper li{
			border-color: <?php echo  esc_attr($top_font); ?> ;			
		}
	<?php endif; ?>

	<?php if($site_title_font): ?>
		h1.site-title a{
			font-size: <?php echo  esc_attr($site_title_font['font-size']); ?> ;
		}
	<?php endif; ?>
	<?php if($site_subtitle_font): ?>
		p.site-description{
			font-size: <?php echo  esc_attr($site_subtitle_font['font-size']); ?> ;
		}
	<?php endif; ?>

	<?php if($site_titlesub_color): ?>
		h1.site-title a, p.site-description{
			color: <?php echo  esc_attr($site_titlesub_color); ?> ;
		}
	<?php endif; ?>

	<?php if($menu_font): ?>
		#site-navigation li{
			font-size: <?php echo  esc_attr($menu_font['font-size']); ?> ;
		}
	<?php endif; ?>

	<?php if($menu_color): ?>
		#site-navigation li a, #nav-search a i{
			color: <?php echo  esc_attr($menu_color); ?> ;
		}
	<?php endif; ?>

	<?php if($nav_bg_color): ?>
		header#masthead{
			background-color: <?php echo  esc_attr($nav_bg_color); ?> ;
		}
	<?php endif; ?>


	<?php if($about_bg): ?>
	 .about-section#about{
	 	background-color:<?php echo  esc_attr($about_bg['background-color']); ?> ;
	 	background-image:url('<?php echo  esc_url($about_bg['background-image']); ?>') ;
	 	background-repeat:<?php echo  esc_attr($about_bg['background-repeat']); ?>;
	 	background-position:<?php echo  esc_attr($about_bg['background-position']); ?>;
	 	background-size:<?php echo  esc_attr($about_bg['background-size']); ?> ;
	 	background-attachment:<?php echo  esc_attr($about_bg['background-attachment']); ?> ;
	 }
	<?php endif;?>

	<?php if($big_bg): ?>
	 #top-image{
	 	background-color:<?php echo  esc_attr($big_bg['background-color']); ?> ;
	 	background-image:url('<?php echo  esc_url($big_bg['background-image']); ?>') ;
	 	background-repeat:<?php echo  esc_attr($big_bg['background-repeat']); ?>;
	 	background-position:<?php echo  esc_attr($big_bg['background-position']); ?>;
	 	background-size:<?php echo  esc_attr($big_bg['background-size']); ?> ;
	 	background-attachment:<?php echo  esc_attr($big_bg['background-attachment']); ?> ;
	 }
	<?php endif;?>

	<?php if($blog_bg): ?>
	 .blog-section#blog{
	 	background-color:<?php echo  esc_attr($blog_bg['background-color']); ?> ;
	 	background-image:url('<?php echo  esc_url($blog_bg['background-image']); ?>') ;
	 	background-repeat:<?php echo  esc_attr($blog_bg['background-repeat']); ?>;
	 	background-position:<?php echo  esc_attr($blog_bg['background-position']); ?>;
	 	background-size:<?php echo  esc_attr($blog_bg['background-size']); ?> ;
	 	background-attachment:<?php echo  esc_attr($blog_bg['background-attachment']); ?> ;
	 }
	<?php endif;?>

	<?php if($contact_bg): ?>
	 .contact-section#form{
	 	background-color:<?php echo  esc_attr($contact_bg['background-color']); ?> ;
	 	background-image:url('<?php echo  esc_url($contact_bg['background-image']); ?>') ;
	 	background-repeat:<?php echo  esc_attr($contact_bg['background-repeat']); ?>;
	 	background-position:<?php echo  esc_attr($contact_bg['background-position']); ?>;
	 	background-size:<?php echo  esc_attr($contact_bg['background-size']); ?> ;
	 	background-attachment:<?php echo  esc_attr($contact_bg['background-attachment']); ?> ;
	 }
	<?php endif;?>

	<?php if($footer_bg): ?>
	 .footer-top{
	 	background-color:<?php echo  esc_attr($footer_bg['background-color']); ?> ;
	 	background-image:url('<?php echo  esc_url($footer_bg['background-image']); ?>') ;
	 	background-repeat:<?php echo  esc_attr($footer_bg['background-repeat']); ?>;
	 	background-position:<?php echo  esc_attr($footer_bg['background-position']); ?>;
	 	background-size:<?php echo  esc_attr($footer_bg['background-size']); ?> ;
	 	background-attachment:<?php echo  esc_attr($footer_bg['background-attachment']); ?> ;
	 }
	<?php endif;?>
	
	
	<?php if ( true == get_theme_mod( 'november_zero_front_big_title_overlay_enable', true ) ) :?>
		.bg-bigtitle-overlay:after{
			display: block;
			position: absolute;
			z-index: 1;
			top: 0;
			left: 0;
			width: 100%;
			height:100%;
			background-color: <?php echo esc_attr(get_theme_mod('november_zero_big_title_background_overlay')) ?>;
			content: "";
		}

	<?php endif;?>

	<?php if ( true == get_theme_mod( 'november_zero_front_about_background_overlay_enable', true ) ) :?>
		.bg-about-overlay:after{
			display: block;
			position: absolute;
			z-index: 1;
			top: 0;
			left: 0;
			width: 100%;
			height:100%;
			background-color: <?php echo esc_attr(get_theme_mod('november_zero_front_about_background_overlay')) ?>;
			content: "";
		}

	<?php endif;?>

	<?php if ( true == get_theme_mod( 'november_zero_front_blog_background_overlay_enable', true ) ) :?>
		.bg-blog-overlay:after{
			display: block;
			position: absolute;
			z-index: 1;
			top: 0;
			left: 0;
			width: 100%;
			height:100%;
			background-color: <?php echo esc_attr(get_theme_mod('november_zero_front_blog_background_overlay')) ?>;
			content: "";
		}

	<?php endif;?>

	<?php if ( true == get_theme_mod( 'november_zero_front_contact_background_enable', true ) ) :?>
		.bg-contact-overlay:after{
			display: block;
			position: absolute;
			z-index: 1;
			top: 0;
			left: 0;
			width: 100%;
			height:100%;
			background-color: <?php echo esc_attr(get_theme_mod('november_zero_front_contact_background_overlay')) ?>;
			content: "";
		}

	<?php endif;?>

	
	

	 <?php
	 	/*Big title */
	 	$big_title_text_color = get_theme_mod('november_zero_big_title_text_color');
	 	$big_subtitle_text_color = get_theme_mod('november_zero_big_subtitle_text_color');
	 	$big_title_button_bg = get_theme_mod('november_zero_big_button_text_bg_color');
	 	$big_title_text_size = get_theme_mod('november_zero_big_title_text_size');
	 	$big_subtitle_text_size = get_theme_mod('november_zero_big_subtitle_text_size');
	 	$big_title_button_size = get_theme_mod('november_zero_big_button_text_size');

	 	/*About  */
	 	$about_text_color = get_theme_mod('november_zero_front_about_title_text_color');
	 	$about_subtitle_text_color = get_theme_mod('november_zero_front_about_sub_title_text_color');
	 	$about_title_button_bg = get_theme_mod('november_zero_front_about_button_bg_color');
	 	$about_text_size = get_theme_mod('november_zero_front_about_title_text_size');
	 	$about_subtitle_text_size = get_theme_mod('november_zero_front_about_sub_title_text_size');
	 	$about_title_button_size = get_theme_mod('november_zero_front_about_button_text_size');


	 	/*Blog  */
	 	$blog_text_color = get_theme_mod('november_zero_front_blog_title_color');
	 	$blog_subtitle_text_color = get_theme_mod('november_zero_front_blog_sub_title_color'); 
	 	$blog_text_size = get_theme_mod('november_zero_front_blog_title_size');
	 	$blog_subtitle_text_size = get_theme_mod('november_zero_front_blog_sub_title_size');
	 	$blog_content_text_color = get_theme_mod('november_zero_front_blog_content_title_color');
	 	$blog_content_subtitle_text_size = get_theme_mod('november_zero_front_blog_content_title_size');
	 	$blog_see_more_color = get_theme_mod('november_zero_front_blog_content_see_more_bgcolor');

	 
	 	

	 	
	  ?>

	  
	  #bigtitletext{
	  	color:<?php echo esc_attr($big_title_text_color); ?>;
	  	font-size:<?php echo esc_attr($big_title_text_size['font-size']); ?>;
	  }
	  #bigsubtitletext{
		color:<?php echo esc_attr($big_subtitle_text_color); ?>;
		font-size:<?php echo esc_attr($big_subtitle_text_size['font-size']); ?>;
	  }
	  #bigbuttontext{
		background-color:<?php echo esc_attr($big_title_button_bg); ?>;
		font-size:<?php echo esc_attr($big_title_button_size['font-size']); ?>;
	  }
	  

	  #abouttitletext{
	  	color:<?php echo esc_attr($about_text_color); ?>;
	  	font-size:<?php echo esc_attr($about_text_size['font-size']); ?>;
	  }
	  #aboutsubtitletext{
		color:<?php echo esc_attr($about_subtitle_text_color); ?>;
		font-size:<?php echo esc_attr($about_subtitle_text_size['font-size']); ?>;
	  }
	  #aboutbuttontext{
		background-color:<?php echo esc_attr($about_title_button_bg); ?>;
		font-size:<?php echo esc_attr($about_title_button_size['font-size']); ?>;
	  }


	   #blogtitletext{
	  	color:<?php echo esc_attr($blog_text_color); ?>;
	  	font-size:<?php echo esc_attr($blog_text_size['font-size']); ?>;
	  }
	  #blogsubtitletext{
		color:<?php echo esc_attr($blog_subtitle_text_color); ?>;
		font-size:<?php echo esc_attr($blog_subtitle_text_size['font-size']); ?>;
	  }
	  #blogcontenttitletext{
	  color:<?php echo esc_attr($blog_content_text_color); ?>;
		font-size:<?php echo esc_attr($blog_content_subtitle_text_size['font-size']); ?>;
	  }
		#blogseemorebtn{
		background-color:<?php echo esc_attr($blog_see_more_color); ?>;
	   }


	</style>
<?php
}

endif;
add_action( 'wp_head' , 'november_zero_dynamic_css' , 55 );

