<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package November_Zero
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
 
	$layout = esc_attr(get_theme_mod('november_zero_layout_stting','sectionboxed'));
	if($layout=="boxed"):
	  $class= "november-boxed";
	else:
	  $class= "";
	endif;
	 
?> 
<div id="page" class="site <?php echo esc_attr($class); ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'november-zero' ); ?></a>

<?php 
 
	$top_header = esc_attr(get_theme_mod('november_zero_top_header_enable','on'));
	if($top_header=="on"):
?>
	<div id="top-nav" class=" top-header-wrapper">
		<div class="container">
			<div class="header-flex">
				<div class="top-header-right">
					<ul class="menu-top">
						<?php if(esc_attr(get_theme_mod('november_zero_top_header_phone'))): ?>
						<li><a href=""><i class="fa fa-phone-volume"></i> <?php echo esc_html(get_theme_mod('november_zero_top_header_phone')); ?></a></li>
						<?php endif;?>
						<?php if(esc_attr(get_theme_mod('november_zero_top_header_email'))): ?>
						<li><a href="" class="tt-no"><i class="far fa-envelope"></i> <?php echo esc_html(get_theme_mod('november_zero_top_header_email')); ?></a></li>
						<?php endif;?>
					</ul>
				</div>
				<div class="social-widget top-header-left">
					<div class="menu-social-icon ">
						<ul class="">
						<?php
						$items = get_theme_mod( 'november_zero_top_scoial_items' );
						if($items):
						 foreach( $items as $item ) : 
						 ?>
							<li class="social-items">
								<a href="<?php echo esc_url($item['social_item']); ?>" target="_blank" class="" ><span class="si-icon"><i class="<?php  echo esc_html($item['social_item_icon']); ?>"></i></span></a>
							</li>
						<?php 
							endforeach;
						endif;
						?>			

						</ul>
					</div>                
				</div>
			</div>

		</div>
	</div>
<?php endif;?>
	<?php 
		$sticky_header = esc_attr(get_theme_mod('november_zero_navigation','sticky'));
		if($sticky_header=="sticky"):
			$stickyclass = "sticky-header";
		else:
			$stickyclass = "";
		endif;
	?>
	<header id="masthead" class="site-header <?php echo esc_attr($stickyclass); ?>">
		<div class="container">
	<?php 
		$sticky_header = esc_attr(get_theme_mod('november_zero_menu_display','inline'));
		if($sticky_header=="centered"):
			$centerclass = "text-center";
		else:
			$centerclass = "header-flex";
		endif;
	?>
			<div class="<?php echo esc_attr($centerclass); ?>">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
			$november_zero_description = get_bloginfo( 'description', 'display' );
			if ( $november_zero_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $november_zero_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="desktop-menu">
			<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container_class'=> 'november-menu',
						'walker'         => '',
                        'fallback_cb'    => 'wp_page_menu',
					) );
			?>
			<?php 
				$search_enable = esc_attr(get_theme_mod('november_zero_nav_search','on'));
				if($search_enable=="on"):
			 ?>
				<div id="nav-search">
						<a href="#" id="nav-search-trigger"><i class="fa fa-search"></i><i class="fa fa-times"></i></a>
						<?php get_search_form(); ?>						
				</div>
			<?php endif;?>					      
			</div>
		      <div class="mobile-menu">
		      <div id="mySidenav" class="sidenav">
  				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'november-mbl-menu',
						'walker'        => '',
                        'fallback_cb'    => 'wp_page_menu',
					) );
					?>
				</div>
			<span  onclick="openNav()">&#9776;</span>
			</div>


		</nav><!-- #site-navigation -->
	</div>
</div>
</header><!-- #masthead -->

	<div id="content" class="site-content">
		