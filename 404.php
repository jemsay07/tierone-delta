<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* This template is for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package tierone
*/
get_header(); ?>
<div class="box-404">
	<div id="primary" class="content-area">
		<section class="text-center">
			<span class="text-404">ERROR</span>
			<div class="wrap-404">
				<h1>404</h1>
			</div>
			<span class="text-404">Page not Found</span>			
		</section>
	</div>
</div>
<?php get_footer(); ?>