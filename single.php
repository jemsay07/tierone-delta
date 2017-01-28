<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* Template for displaying the Single page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package tierone
*/

get_header(); ?>

<div class="delta-single-page">
	<div class="container">
		<div class="col-md-8">
			<main id="main" class="delta-site-main" role="main">
				<?php
					while ( have_posts() ) : the_post();
						
						get_template_part('template-parts/content','single');
				?>

				<div class="divider"></div>
					<?php tierone_next_prev_link(); /* Next and Prev */  ?>
				<div class="divider"></div>

				<?php
					/*Related Post*/
					if( get_theme_mod( 'tierone_related_posts_setting', 0 ) == 1 ) :
						get_template_part( 'template-parts/related-post','related' );
					endif;
				?>
				
				<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="100%"></div>
				
				<?php
						/*comments*/
						if ( comments_open() || get_comments_number() ) {
							comments_template( '', true ); // comments
						}

					endwhile;
				?>
			</main>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>