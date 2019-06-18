<?php 
if ( true == get_theme_mod( 'november_zero_front_big_title_enable', true ) ) :

$title  		= get_theme_mod('november_zero_big_title_text',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
$subtitle  		= get_theme_mod('november_zero_big_subtitle_text',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
$button_text  	= get_theme_mod('november_zero_big_button_text',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
$button_url  	= get_theme_mod('november_zero_big_button_link'); 
$position  	 	= get_theme_mod('november_zero_big_title_position'); 

 if ( true == get_theme_mod( 'november_zero_front_big_title_overlay_enable', true ) ) : 
 	$bgclass= "bg-bigtitle-overlay";
 else:
 	$bgclass= "";
 endif;

?>
<div class="banner-parallex-img ">
		<div id="top-image" class="<?php echo esc_attr($bgclass); ?>">			
			<div class="title-content-wrapper">
				<div class="container">
					<div class="title-content text-<?php echo esc_attr($position); ?> ">
						<h1 class="main-title " id="bigtitletext"><?php  echo esc_html($title); ?></h1>
						<span class="sub-title" id="bigsubtitletext"><?php  echo esc_html($subtitle); ?></span>
						<div class="buttons">
							<a href="<?php echo esc_url($button_url); ?>" title="<?php echo   esc_attr($button_text); ?>" class="btn btn-default"  id="bigbuttontext"><?php  echo esc_html($button_text); ?></a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php endif;?>