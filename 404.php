<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package November_Zero
 */

get_header();
?>
<header class="page-header">
	<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'november-zero' ); ?></h1>
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

			<section class="error-404 not-found">
				
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'november-zero' ); ?></p>

					<?php
					get_search_form();

					
					?>



				</div><!-- .page-content -->
			</section><!-- .error-404 -->

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
