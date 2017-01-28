<?php 
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* The Template for displaying for footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package tierone
*/
?>

			<footer class="delta-footer">
				<?php if( is_active_sidebar('tierone_delta_footer_a') || is_active_sidebar('tierone_delta_footer_b') || is_active_sidebar('tierone_delta_footer_c') || is_active_sidebar('tierone_delta_footer_d') ) : ?>
				<div class="container">
					<div class="delta-footer-cont row">
						<div class="col-xs-12 col-sm-12 col-md-3">
							<?php dynamic_sidebar( 'tierone_delta_footer_a' ); ?>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<?php dynamic_sidebar( 'tierone_delta_footer_b' ); ?>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<?php dynamic_sidebar( 'tierone_delta_footer_c' ); ?>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<?php dynamic_sidebar( 'tierone_delta_footer_d' );?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
				<div class="delta-menu-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<?php if( has_nav_menu( 'footer-menu' ) ) :  ?>
									<?php tierone_delat_footer_menu(); ?>
								<?php endif; ?>
							</div>
							<div class="col-md-3">
								<div class="delta-footer-bar">
									<span>Copyright © 2016. All rights reserved.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- <div class="delta-footer-bar">
					<div class="container">
						<span>Designed by Niel Rosini. Built by JBJ Devs</span>
						<span>2016 All Right Reserved</span>
					</div>
				</div> -->
				<a id="back-to-top"><i class="fa fa-angle-up"></i></a><!-- #back-to-top -->
			</footer>
		<?php wp_footer(); ?>
		<?php if( is_active_sidebar('delta-site-box') ) : ?>
			<?php dynamic_sidebar('delta-site-box'); ?>
	
		<?php endif;?>
	</body>
</html>