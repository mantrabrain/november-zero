<?php 
	if ( true == get_theme_mod( 'november_zero_front_blog_ebable', true ) ) : 

	$title  		= get_theme_mod('november_zero_front_blog_title',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));
	$subtitle  		= get_theme_mod('november_zero_front_blog_sub_title',esc_attr__( 'Edit Me In Customizer', 'november-zero' ));

	$number0fposts  = get_theme_mod('november_zero_front_blog_post_number',esc_attr__( '3', 'november-zero' ));


	if ( true == get_theme_mod( 'november_zero_front_blog_background_overlay_enable', true ) ) : 
 	$bgclass= "bg-blog-overlay";
	else:
	 	$bgclass= "";
	endif;
?>


<section class="blog-section <?php echo esc_attr($bgclass); ?>" id="blog">
			<div class="container">

				<?php if($title): ?>

				<div class="feature-title text-center">
					<h2 class="main-title" id="blogtitletext"><?php  echo esc_html($title); ?></h2>
					<h5 class="descp" id="blogsubtitletext"><?php  echo esc_html($subtitle); ?></h5>
				</div>

				<?php endif;?>

				<div class="blog-component col-3">
				<?php 
						$args = array('post_type' => 'post' , 'posts_per_page' => $number0fposts );
						$loop = new WP_Query( $args );

						if($loop -> have_posts()) :

						while( $loop->have_posts()):$loop->the_post();
				?>					


					<div class="article-wrap">

						<?php if(has_post_thumbnail()):?>

						<div class="article-img-wrap">
							<?php the_post_thumbnail( 'ovember-zero-front-blog' );?>
						</div>

					<?php endif;?>

						<div class="blog-artical-content">
							<h3 class="blog-title">
								<a href="<?php the_permalink();?>" class="article-title-link" id="blogcontenttitletext">
									<?php the_title();?>
								</a>
							</h3>

							<div class="blog-para">
								<p>
									<?php 
										the_excerpt(); 
									?>
									
								</p>
								<div class="buttons">
									<a href="<?php the_permalink();?>" title="<?php the_title();?>" class="btn btn-default" id="blogseemorebtn"><?php esc_html_e('See more','november-zero'); ?></a>
								</div>
							</div>
							<?php if ( true == get_theme_mod( 'november_zero_front_blog_disable_postmeta', true ) ) : ?>
								<ul class="content-list-meta">
									<li class="post-author">
										<div class="article-author-info flex-box">
											<span class="img"><img alt="" src="<?php echo esc_url(get_template_directory_uri().'/assets/images/author.png'); ?>" class="avatar avatar-30 photo" height="30" width="30"></span>
											<span class="infos">
												<span class="author-name"><a class="" href=><?php  echo esc_html( get_the_author() ); ?></a></span>
											</span>
										</div> 
									</li>
									<li class="post-posted">
										<?php echo november_zero_posted_on(); ?>
									</li>
								</ul>
							<?php endif;?>
						</div>

					</div>

					<?php endwhile; endif;?>

				<?php wp_reset_postdata(); ?>


				</div>

			</div>

		</section>
<?php endif;?>