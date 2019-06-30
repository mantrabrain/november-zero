<?php 
	if ( true == get_theme_mod( 'november_zero_front_portfolio_enable', true ) ) :

	$title  		= get_theme_mod('november_zero_front_portfolio_title',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
	$subtitle  		= get_theme_mod('november_zero_front_portfolio_sub_title',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
	$items  		= get_theme_mod( 'november_zero_portfolio_item_repeater' );

	if ( true == get_theme_mod( 'november_zero_front_portfolio_background_overlay_enable', true ) ) : 
 	$bgclass= "bg-portfolio-overlay";
	else:
	 	$bgclass= "";
	endif;
	
	
?>
<section class="Portfolio-section <?php echo esc_attr($bgclass); ?>" id="portfolio">
			<div class="container">
				<?php if($title): ?>
						<div class="feature-title text-center">
							<h2 class="main-title" id="portfoliotitletext"><?php  echo esc_html($title); ?></h2>
							<h5 class="descp" id="portfoliosubtitletext"><?php  echo esc_html($subtitle); ?></h5>
						</div>
				<?php endif;?>
				<div class="">
					<div class="grid-col col-3">
					<?php if($items): ?>

						<?php
						 foreach( $items as $item ) :
						 	$image_id = $item['portfolio_icon'];
						 	$image =wp_get_attachment_url($image_id,'november-zero-front-blog');

						  ?>

						
						<div class="article-wrap article-background" style="background-image: url('<?php echo  $image; ?>');">
							<div class="card-content-wrapper">
								<div class="card-content">
								<?php if($item['portfolio_button_text']): ?>
									<a href="<?php echo  esc_url($item['portfolio_button_url']); ?>" title="<?php  echo esc_html($item['portfolio_text']); ?>" class="btn btn-default portfolio"><?php  echo esc_html($item['portfolio_button_text']); ?></a>
								<?php endif;?>
								
								<h4 class="card-title portfolio"><?php  echo esc_html($item['portfolio_text']); ?></h4>
								</div>

							</div>

						</div>
						<?php endforeach; ?>
					<?php endif;?>


					</div>

					
				</div>
			</div>
		</section>
<?php endif;?>