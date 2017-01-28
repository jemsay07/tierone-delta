<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package tierone
*/
?>

<article id="page-<?php the_ID();?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost" >
	<header class="entry-header">
		<?php the_title(sprintf( '<h1 class="delta-site-header" itemprop="headline"><a href="%s" rel="bookmark">' , esc_url( get_permalink() ) ) , '</a></h1>' ); ?>
	</header>
	<div class="entry-content">
		<div class="row">
			<div class="col-md-6">
				<?php										
				$src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'tier-featured' );
				$first_image = '';
				if ( !has_post_thumbnail() ) { $first_image = get_first_image(); }
				
				if( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url('tier-featured'); ?>" title="<?php echo get_the_title();?>"></a>
				<?php elseif ( is_url_exist($first_image) ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="tier-featured" src="<?php echo get_first_image(); ?>"/></a>
				<?php else: ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-image.jpg" alt="<?php the_title(); ?>" /></a>
				<?php endif;?>
			</div>
			<div class="col-md-6 text-justify">	
				<div class="entry-meta">
					<?php if( 'post' == get_post_type() ) : ?>
						<?php tierone_posted_on(); ?>
					<?php endif; ?>
				</div>

				<?php the_excerpt(); ?>
				
				<?php 
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tierone-delta' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div>
		
	</div>
</article>