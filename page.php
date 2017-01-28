<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* This Template will display all pages.
* 
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package tierone
*/

get_header();?>
<div class="delta-default-page">
	<div class="container">
		<div class="row">
			<div class="col-md-8" >
				<main id="main" class="delta-site-main" role="main">
					<?php
						while ( have_posts() ) : the_post();
							
							get_template_part('template-parts/content','page');
						
							/*Comments*/
							if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;

						endwhile;
					?>
				</main>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>