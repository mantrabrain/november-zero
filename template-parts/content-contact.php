<?php 
	if ( true == get_theme_mod( 'november_zero_front_contact_ebable', true ) ) :

	$page_id_1 		= esc_attr(get_theme_mod('november_zero_front_contact_page1',esc_attr__( '1', 'november-zero' )));
	$page_id_2 		= esc_attr(get_theme_mod('november_zero_front_contact_page2',esc_attr__( '1', 'november-zero' )));

	if ( true == get_theme_mod( 'november_zero_front_contact_background_enable', true ) ) : 
 	$bgclass= "bg-contact-overlay";
	else:
	 	$bgclass= "";
	endif;

?>
<section class="contact-section <?php echo esc_attr($bgclass); ?>" id="form">
			<div class="container">

				<div class="">
					<div class="col-2">
						<div class="content">
							<?php $the_query = new WP_Query( 'page_id='.$page_id_1.'' ); 

							if($the_query -> have_posts()) :

							 while ($the_query -> have_posts()) : $the_query -> the_post();
							 		
							         	   the_content();
							      
							        
							  endwhile;

							 endif;

							wp_reset_query();
							 ?>			
							
						</div>
						<div class="form-wrapper">
							<?php $the_query = new WP_Query( 'page_id='.$page_id_2.'' ); 

							if($the_query -> have_posts()) :

							 while ($the_query -> have_posts()) : $the_query -> the_post();
							 		
							         	   the_content();
							      
							        
							  endwhile;
							 endif;

							wp_reset_query();
							 ?>			
							
						</div>
					</div>
				</div>
			</div>
		</section>

<?php endif;?>