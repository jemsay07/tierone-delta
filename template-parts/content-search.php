<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* This Template display result for search
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package tierone
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<div class="delta-post">
		<header class="entry-header">		
			<?php the_title( sprintf( '<h2 class="delta-site-header" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ,'</a></h2>' ); ?>
		</header>
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
				<div class="entry-summary">
					<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php tierone_posted_on(); ?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
				<footer class="entry-footer">
					<?php tierone_footer(); ?>
				</footer><!-- .entry-footer -->

			</div>
		</div>
	</div>
</article>