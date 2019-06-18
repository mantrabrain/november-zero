<?php 
	if ( true == get_theme_mod( 'november_zero_front_about_ebable', true ) ) :

	$title  		= get_theme_mod('november_zero_front_about_title_text',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
	$subtitle  		= get_theme_mod('november_zero_front_about_subtitle_text',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
	$button_text  	= get_theme_mod('november_zero_front_about_button_text',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
	$button_url  	= get_theme_mod('november_zero_front_about_button_link');
	$page_id  		= esc_attr(get_theme_mod('november_zero_front_about_page',esc_attr__( '1', 'november-zero' )));
	$content_type  	= esc_attr(get_theme_mod('november_zero_front_about_content_type',esc_attr__( 'excerpt', 'november-zero' )));
	

	if ( true == get_theme_mod( 'november_zero_front_about_background_overlay_enable', true ) ) : 
 	$bgclass= "bg-about-overlay";
	else:
	 	$bgclass= "";
	endif;
?>

<section class="about-section <?php echo esc_attr($bgclass); ?>" id="about">
			<div class="container">
				<div class="grid-col col-2">
					<div class="feature-content">
						<?php if($title): ?>
						<div class="feature-title">
							<h2 class="main-title" id="abouttitletext"><?php echo esc_html($title); ?></h2>
							<h5 class="descp" id="aboutsubtitletext"><?php  echo esc_html($subtitle); ?></h5>
						</div>
						<?php endif;?>
						<div class="content-detail">
							<?php $the_query = new WP_Query( 'page_id='.$page_id.'' );

							if($the_query -> have_posts()) :

							 while ($the_query -> have_posts()) : $the_query -> the_post();
							 		if($content_type=='excerpt'):
							              the_excerpt();
							         else:
							         	   the_content();
							         	   wp_link_pages( array(
												'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'november-zero' ),
												'after'  => '</div>',
											) );
							        endif;
							        
							  endwhile;

							endif;

							wp_reset_query();
							 ?>						
							
							<?php if($button_text): ?>
							<div class="buttons">
								<a href="<?php echo esc_url($button_url); ?>" title="<?php echo   esc_attr($button_text); ?>" class="btn btn-default" id="aboutbuttontext"><?php  echo esc_html($button_text); ?></a>
							</div>
						<?php endif; ?>
						</div>
					</div>
					<?php 
					$the_query = new WP_Query( 'page_id='.$page_id.'' ); 
						if($the_query -> have_posts()) :
							 while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
					<div class="feature-image">
						<div class="feature-image-holder">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
				<?php 						
							  endwhile;
						endif;

							wp_reset_query();
				?>
					
				</div>
			</div>
		</section>
<?php endif;?>