<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package November_Zero
 */

get_header();
?>
<header class="page-header">
	<h1 class="page-title">
		<?php
		/* translators: %s: search query. */
		printf( esc_html__( 'Search Results for: %s', 'november-zero' ), '<span>' . get_search_query() . '</span>' );
		?>
	</h1>
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
	<section id="primary" class="content-area <?php echo esc_attr($class); ?> cols">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
	</section><!-- #primary -->
	<?php 
		if($sidebar == "right"):
				get_sidebar();
		endif;
	?>
</div>
</div>

<?php

get_footer();
