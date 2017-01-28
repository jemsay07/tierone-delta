<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* Template for displaying archive page
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package tierone
*/
?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="delta-archive-wrap">
				<div id="primary" class="content-area">
					<main  class="delta-site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
						<?php if ( have_posts() ) : ?>
							<header class="page-header">
								<?php the_archive_title( '<h1>','</h1>' );?>
								<?php the_archive_description( '<div class="taxonomy-description">' , '</div>'); ?>
							</header>
							<div class="delta-archive-posts">
								<?php while ( have_posts() ) : the_post(); ?>
									<div class="delta-post">
										<?php
											the_title( sprintf( '<h2 itemprop="headline" class="delta-site-header"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
										?>
										<div class="row">
											<div class="col-md-6">
												<?php if( has_post_thumbnail() ) : ?>
													<figure class="delta-post-img">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'tier-featured' ); ?></a>
													</figure>
												<?php else: ?>
													<figure class="delta-post-img">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/default/dt-featured-image.jpg"></a>
													</figure>
												<?php endif;?>
											</div>
											<div class="col-md-6">
												<div class="delta-post-content text-justify">
													<div class="entry-meta">
														<?php tierone_posted_on(); ?>
													</div><!--Title of the post-->
													<?php the_excerpt(); ?>
													<a href="<?php the_permalink(); ?>" class="delta-view-site pull-right" rel="bookmark">Read</a>
												</div>
											</div>
											<span class="clearfix"></span>
										</div>
									</div>
								<?php
									endwhile;

									wp_reset_postdata();
								?>
								<div class="delta-pagination-nav clearfix">
									<?php echo paginate_links(); ?>
								</div><!---- .jw-pagination-nav ---->

							</div>
						<?php else : ?>
							<p><?php _e('Sorry, no posts matched your criteria.','tierone-delta'); ?></p>
						<?php endif; ?>

					</main>			
				</div>			
			</div>			
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>