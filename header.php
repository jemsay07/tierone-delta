<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* The header of our Theme
*
* This is the template displays the <head> section and everything up until <div id="primary">
*
*@link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
*@package TierOne
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo(); ?>">
		<?php if( is_active_sidebar('delta-site-meta-box') ) : ?>
			<?php dynamic_sidebar('delta-site-meta-box'); ?>
		<?php endif;
		 wp_head(); ?>
	</head>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage" itemprop="mainContentOfPage">
		
		<?php
			$padding = 30;
			if ( is_home() && ! is_front_page() ) {
				$padding = 0;
			}
		if ( is_singular() ) {
			facebook_javascript_sdk();
		}
		?>

		<header id="masthead" class="delta-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" style="padding:30px 0 <?php echo $padding; ?>px ">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="delta-logo clearfix">
							<?php
								if ( function_exists( 'get_custom_logo' ) && has_custom_logo() ) {
									the_custom_logo();
								}else{
									?>
									<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
									$description = get_bloginfo( 'description', 'tierone' );
									if ( $description || is_customize_preview() ) { ?>
										<p class="delta-site-description"><?php echo $description; ?></p>
									<?php
									}
								}
							?>
						</div><!--delta-logo-->
					</div><!--column-4-->
					<div class="col-md-7">
						<?php 
							if ( is_active_sidebar( 'dt-site-ads' ) ) {
								dynamic_sidebar( 'dt-site-ads' );
							}
						?>
					</div><!--column-8-->
				</div><!--row-->
			</div><!--container-->
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#delta_menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="sr-only"><?php _e('Tierone', 'tierone'); ?></span>
						</button>
					</div>
					<div id="delta_menu" class="collapse navbar-collapse">
						<?php 
						if ( has_nav_menu('primary-menu') ):
							tierone_delta_menu(); 
						endif;
						?>
					</div>
				</div>
			</nav><!--navigation-->
		</header>
		<?php if ( is_active_sidebar( 'tierone_float_ads' ) ) {
			dynamic_sidebar('tierone_float_ads');
		} ?>
		<?php if ( ! is_front_page() && ! is_home() ) : ?>
			<div  class="breadcrumb-list">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<?php echo  custom_breadcrumbs(); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
