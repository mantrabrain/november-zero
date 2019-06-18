<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package November_Zero
 */

get_header();
?>
<header class="page-header">
	<h2><?php echo  $november_zero_description = get_bloginfo( 'description', 'display' ); ?></h2>
</header><!-- .page-header -->

<div class="container">

<div class="grid-col">
	<?php
		$sidebar = esc_attr(get_theme_mod('november_zero_post_archive_sidebar','right'));
		if($sidebar=="right" || $sidebar=="left"):
			$class = "hasaside";
		else:
			$class = "noaside";
		endif;
		if($sidebar == "left"):
				get_sidebar();
		endif;

	 ?>
	<div id="primary" class="content-area <?php echo esc_attr($class); ?> cols">
		<main id="main" class="site-main">
			

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_pagination( array(
					    'mid_size' => 2,
					    'prev_text' => __( '<<', 'november-zero' ),
					    'next_text' => __( '>>', 'november-zero' ),
					) );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php 
		if($sidebar == "right"):
				get_sidebar();
		endif;
	?>
</div>
</div> <!---conatiner -->
<?php
get_footer();
