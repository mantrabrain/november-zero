<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package November_Zero
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<?php 
		if ( true == get_theme_mod( 'november_zero_footer_section_ebable', true ) ) :

		$widget_areas = esc_attr( get_theme_mod('november_zero_footer_section_col') );
		if( ! $widget_areas ){
			$widget_areas = 4;
		}
		if ($widget_areas == 3) {
			$cols = '3';
		} elseif ($widget_areas == 4 ) {
			$cols = '4';
		} elseif ($widget_areas == 2) {
			$cols = '2';
		} elseif ($widget_areas == 1) {
			$cols = '1';
		}
	?>
		<div class="footer-top">
			<div class="container">
				<div class="grid col-<?php echo esc_attr($cols); ?>">

					<?php get_template_part( 'template-parts/footer' , 'sidebar' ); ?>
				
			</div>
		
		</div>
	</div>
	<?php 
		endif;
	?>
		
	<div class="site-info">
			<?php  echo esc_html(get_theme_mod('november_zero_footer_copyright')); ?>
			<span class="sep"> | </span>
				 <?php  echo sprintf( esc_html__( 'Powered by %s', 'november-zero' ), '<a target="_blank" rel="designer" href="https://mantrabrain.com/">' . esc_html__( 'NovemberThemes', 'november-zero' ) . '</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
