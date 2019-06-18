<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package November_Zero
 */

get_header(); 
?>
<header class="page-header">
	<h2><?php the_title(); ?></h2>
</header><!-- .page-header -->
<div class="container">
<div class="grid-col">
	<?php
		$sidebar = esc_attr(get_theme_mod('november_zero_page_single_sidebar','right'));
		if($sidebar=="right" || $sidebar=="left"):
			$class = "hasaside";
		else:
			$class = "noaside";
		endif;
		if($sidebar == "left"):
				get_sidebar();
		endif;

	 ?>

	<div id="primary" class="content-area <?php echo esc_attr($class); ?> cols ">
		<main id="main" class="site-main">
			

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php 
		if($sidebar == "right"):
				get_sidebar();
		endif;
	?>
	

</div>
</div>
<?php
get_footer();
