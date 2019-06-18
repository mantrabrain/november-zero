<?php 
	if ( true == get_theme_mod( 'november_zero_front_feature_enable', true ) ) :

	$title  		= get_theme_mod('november_zero_front_feature_title',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
	$subtitle  		= get_theme_mod('november_zero_front_feature_sub_title',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
	$items  		= get_theme_mod( 'november_zero_features_item_repeater' );

	if ( true == get_theme_mod( 'november_zero_front_feature_background_overlay_enable', true ) ) : 
 	$bgclass= "bg-feature-overlay";
	else:
	 	$bgclass= "";
	endif;
	?>
	<section class="feature-section <?php echo esc_attr($bgclass); ?>" id="services">
			<div class="container">
						<?php if($title): ?>
						<div class="feature-title text-center">
							<h2 class="main-title" id="featuretitletext"><?php  echo esc_html($title); ?></h2>
							<h5 class="descp" id="featuresubtitletext"><?php  echo esc_html($subtitle); ?></h5>
						</div>
						<?php endif;?>
				<div class="feature-content">
					<div class="grid-col col-3">
					<?php if($items): ?>
						<?php foreach( $items as $item ) : ?>

						<div class="feature-card-design text-center">
							<div class="feature-icon-holder">
								<i class="<?php echo esc_attr($item['feature_icon']); ?>"  style="color:<?php echo esc_attr($item['feature_icon_color']); ?>"></i>
							</div> 
							<div class="feature-content-wrapper">
								<h4 class="card-title "><?php  echo esc_html($item['feature_title']); ?></h4>
								<p class="descp"><?php  echo esc_html($item['feature_details']); ?></p>
							</div>
							<span class="underline"></span>
						</div>

						<?php endforeach; ?>
					<?php endif;?>


					</div>

				</div>
			</div>
		</section>

<?php endif;?>