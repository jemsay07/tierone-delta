<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* The template for displaying search result pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package tierone
*/
get_header();

?>
<div class="container">
	<div class="row">
		<div class="delta-search-wrap">
			<div class="col-md-8">
				<?php if ( have_posts() ) : ?>
					<header class="entry-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for : %s', 'tierone-delta' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header>

					<?php
						/*Start of looping*/
						while ( have_posts() ) : the_post();

							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );


						endwhile;?>

						<div class="delta-pagination-nav clearfix">
							<?php echo paginate_links(); ?>
						</div><!---- .jw-pagination-nav ---->

				<?php else : ?>	

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
				
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>