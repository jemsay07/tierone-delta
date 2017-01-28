<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;
/**
*Register Widget Area
*
*@package TierOne
*/


function tierone_delta_widgets_init(){

	//Register Right Widget
	register_sidebar( array(
		'name'		=> __('Sidebar', 'tierone'),
		'id'		=> 'tierone_delta_sidebar',
		'description'	=> __( 'Add Widgets to show at the right panel','tierone' ),
		'before_widget'	=> '<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>'
	) );

	//Register Metabox
	register_sidebar(array(
		'name'          => __( 'Custom Meta Box', 'tierone' ),
		'id'            => 'delta-site-meta-box',
		'description'   => __('Display the Meta tags', 'tierone'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	) );

	//Register Custom CSS & Script
	register_sidebar(array(
		'name'          => __( 'Custom Box', 'tierone' ),
		'id'            => 'delta-site-box',
		'description'   => __('Display the customize script or style or even normal html tag', 'tierone'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	) );

	//Register Ads727x90
	register_sidebar(array(
		'name'          => __( 'Frontpage: Ads 727x90', 'tierone' ),
		'id'            => 'dt-site-ads',
		'description'   => __('Shows the advertisement in the middle of the page', 'tierone'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="dt-sidebar-title">',
		'after_title'   => '</h2>'
	) );

	//Register Tierone Ticker
	register_sidebar(array(
		'name'          => __( 'Tierone Ticker', 'tierone' ),
		'id'            => 'dt-site-ticker',
		'description'   => __('Show Tierone Ticker', 'tierone'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="dt-sidebar-title">',
		'after_title'   => '</h2>'
	) );

	//Register Tierone slider
	register_sidebar(array(
		'name'          => __( 'Tierone Slider', 'tierone' ),
		'id'            => 'tierone_delta_carousel',
		'description'   => __('Show Tierone Slider', 'tierone'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="dt-sidebar-title">',
		'after_title'   => '</h2>'
	) );

	//Header Featured News
	register_sidebar( array(
		'name'		=> __( 'Front Page: Header Featured Post', 'tierone' ),
		'id'		=> 'tierone_delta_featured_news',
		'description'	=> __( 'Show Tierone Delta header featured news','tierone' ),
		'before_widget'	=> '',
		'after_widget' 	=> '',
		'before_title'	=> '',
		'after_title'	=> ''
	) );

	//Register Front Page Section
    register_sidebar( array(
        'name'          => __( 'Front Page: Tierone Section', 'tierone' ),
        'id'            => 'tierone_delta_sections',
        'description'   => __('Add Widget to show list of tierone from category at Front Page Section', 'tierone'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="dt-sidebar-title">',
        'after_title'   => '</h2>',
    ) );

	//Register Footer Position A
	register_sidebar(array(
		'name'          => __( 'Footer Position A', 'tierone' ),
		'id'            => 'tierone_delta_footer_a',
		'description'   => __('Add widgets to Show widgets at Footer Position A', 'tierone'),
		'before_widget' => '<aside id="%1$s" class="widget dt-footer-a %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );

	//Register Footer Position B
	register_sidebar(array(
		'name'          => __( 'Footer Position B', 'tierone' ),
		'id'            => 'tierone_delta_footer_b',
		'description'   => __('Add widgets to Show widgets at Footer Position B', 'tierone'),
		'before_widget' => '<aside id="%1$s" class="widget dt-footer-b %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );

	//Register Footer Position C
	register_sidebar(array(
		'name'          => __( 'Footer Position C', 'tierone' ),
		'id'            => 'tierone_delta_footer_c',
		'description'   => __('Add widgets to Show widgets at Footer Position C', 'tierone'),
		'before_widget' => '<aside id="%1$s" class="widget dt-footer-c %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );

	//Register Footer Position D
	register_sidebar(array(
		'name'          => __( 'Footer Position D', 'tierone' ),
		'id'            => 'tierone_delta_footer_d',
		'description'   => __('Add widgets to Show widgets at Footer Position D', 'tierone'),
		'before_widget' => '<aside id="%1$s" class="widget dt-footer-d %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );

}

add_action('widgets_init','tierone_delta_widgets_init');

/**
* Enqueue Admin Scripts
*/

function tierone_media_scripts( $hook ){
	if ( 'widgets.php' != $hook) {
		return;
	}
	wp_enqueue_style( 'wp-color-picker' );

	//Update Style with in the admin
	wp_enqueue_style( 'tierone-widgets', get_template_directory_uri() . '/inc/widgets/widgets.css');

	wp_enqueue_media();
	wp_enqueue_script( 'wp-color-picker' );
	wp_enqueue_script( 'tierone-media-upload', get_template_directory_uri() . '/inc/widgets/widgets.js', array('jquery'), ' ' , true);
}
add_action( 'admin_enqueue_scripts', 'tierone_media_scripts');

/**
* Social Media
*/
class tierone_social_media extends WP_Widget{
	
	public function __construct(){
		parent:: __construct(
			'tierone_social_media',
			__('Tierone: Social Media', 'tierone'),
			array(
				'description' => __( 'Social Media Icons', 'tierone' )
			)
		);
	}

	public function widget($args,$instance){
		$title 	= isset( $instance['title'] ) ? $instance['title'] : '';
		$facebook 	= isset( $instance['facebook'] ) ? $instance['facebook'] : '';
		$twitter 	= isset( $instance['twitter'] ) ? $instance['twitter'] : '';
		$pinterest 	= isset( $instance['pinterest'] ) ? $instance['pinterest'] : '';
		$googple_plus 	= isset( $instance['googple_plus'] ) ? $instance['googple_plus'] : '';
		$youtube 	= isset( $instance['youtube'] ) ? $instance['youtube'] : '';
		$linkedin 	= isset( $instance['linkedin'] ) ? $instance['linkedin'] : '';
		?>
		<aside class="social-icon widget">
			<h2 class="widget-title"><?php if( ! empty( $title ) ){ echo esc_attr( $title ); }?></h2>
			<div class="delta-social-box clearfix">
				<?php if( ! empty( $facebook ) ) : ?>
					<div class="widget-social-icons fb-icons">
						<a href="<?php echo esc_url( $facebook ); ?>" target="_blank"><i class="fa fa-facebook fa-3x"></i></a> 
					</div>
				<?php endif; ?>
				<?php if( ! empty( $twitter ) ) : ?>
					<div class="widget-social-icons twitter-icons">
						<a href="<?php echo esc_url( $twitter ); ?>" target="_blank"><i class="fa fa-twitter fa-3x"></i></a> 
					</div>
				<?php endif; ?>
				<?php if( ! empty( $pinterest ) ) : ?>
					<div class="widget-social-icons pinterest-icons">
						<a href="<?php echo esc_url( $pinterest ); ?>" target="_blank"><i class="fa fa-pinterest fa-3x"></i></a> 
					</div>
				<?php endif; ?>
				<?php if( ! empty( $googple_plus ) ) : ?>
					<div class="widget-social-icons gplus-icons">
						<a href="<?php echo esc_url( $googple_plus ); ?>" target="_blank"><i class="fa fa-google-plus fa-3x"></i></a> 
					</div>
				<?php endif; ?>
				<?php if( ! empty( $youtube ) ) : ?>
					<div class="widget-social-icons youtube-icons">
						<a href="<?php echo esc_url( $youtube ); ?>" target="_blank"><i class="fa fa-youtube fa-3x"></i></a> 
					</div>
				<?php endif; ?>
				<?php if( ! empty( $linkedin ) ) : ?>
					<div class="widget-social-icons linkedin-icons">
						<a href="<?php echo esc_url( $linkedin ); ?>" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a> 
					</div>
				<?php endif; ?>
			</div>
		</aside>

		<?php
	}

	public function form($instance){
		$instance = wp_parse_args(
			(array) $instance,array(
				'title' => '',
				'facebook' => '',
				'twitter' => '',
				'pinterest' => '',
				'googple_plus' => '',
				'youtube' => '',
				'linkedin' => ''
			)
		);

		?>
		<div class="delta-social-icons">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:','tierone' ); ?></label>
				<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" >
			</div><!--title-->
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook:','tierone' )?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' );?>" value="<?php echo esc_attr( $instance['facebook'] ); ?>" placeholder="<?php _e( 'https://www.facebook.com/' , 'tierone' ); ?>">
			</div><!--facebook-->
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter:','tierone' )?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' );?>" value="<?php echo esc_attr( $instance['twitter'] ); ?>" placeholder="<?php _e( 'https://www.twitter.com/' , 'twitter' ); ?>">
			</div><!--twitter-->
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e( 'Pinterest:','tierone' )?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' );?>" value="<?php echo esc_attr( $instance['pinterest'] ); ?>" placeholder="<?php _e( 'https://www.pinterest.com/' , 'tierone' ); ?>">
			</div><!--pinterest-->
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'googple_plus' ); ?>"><?php _e( 'Google+:','tierone' )?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'googple_plus' ); ?>" name="<?php echo $this->get_field_name( 'googple_plus' );?>" value="<?php echo esc_attr( $instance['googple_plus'] ); ?>" placeholder="<?php _e( 'https://www.plus.google.com/' , 'tierone' ); ?>">
			</div><!--googple_plus-->
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e( 'Youtube:','tierone' )?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' );?>" value="<?php echo esc_attr( $instance['youtube'] ); ?>" placeholder="<?php _e( 'https://www.youtube.com/' , 'tierone' ); ?>">
			</div><!--youtube-->
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e( 'Linkedin:','tierone' )?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' );?>" value="<?php echo esc_attr( $instance['linkedin'] ); ?>" placeholder="<?php _e( 'https://www.linkedin.com/' , 'tierone' ); ?>">
			</div><!--linkedin-->
		</div>
		<?php
	}

	public function update($new_instance,$old_instance){
		$instance 	= $old_instance;
		$instance['title'] 		= strip_tags( stripslashes( $new_instance['title'] ) );
		$instance['facebook'] 	= strip_tags( stripslashes( $new_instance['facebook'] ) );
		$instance['twitter'] 	= strip_tags( stripslashes( $new_instance['twitter'] ) );
		$instance['pinterest'] 	= strip_tags( stripslashes( $new_instance['pinterest'] ) );
		$instance['googple_plus'] 	= strip_tags( stripslashes( $new_instance['googple_plus'] ) );
		$instance['youtube'] 	= strip_tags( stripslashes( $new_instance['youtube'] ) );
		$instance['linkedin'] 	= strip_tags( stripslashes( $new_instance['linkedin'] ) );

		return $instance;
	}

}


/**
* Custom Meta
*/
class tierone_meta_box extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_meta_box',
			__( 'Tierone: Custom Meta Box' , 'tierone' ),
			array(
				'description' => __( 'Meta Tag Box' , 'tierone' )
			)
		);
	}

	public function widget($args,$instance){
		$custom_box 	= isset( $instance['custom_box'] ) ? $instance['custom_box'] : '';
		
		echo  $custom_box ;
	}

	public function form($instance){
		$instance = wp_parse_args(
			(array) $instance, array(
				'title' 	=> '',
				'custom_box' 	=> ''
			)
		);
		?>
		<div class="delta-meta-box">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'custom_box' );?>"><?php _e( 'Meta Tag:' , 'tierone'); ?></label>
				<textarea id="<?php echo $this->get_field_id('custom_box');?>" name="<?php echo $this->get_field_name('custom_box')?>" placeholder="<?php _e('Custom ','tierone');?>"><?php echo  $instance['custom_box']; ?></textarea>
			</div>
		</div>
		<?php
	}

	public function update($new_instance,$old_instance){
		$instance 		= $old_instance;
		$instance['custom_box']      =    $new_instance['custom_box']  ;

		return $instance;
	}
}

/**
* Custom Box
*/
class tierone_custom_box extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_custom_box',
			__( 'Tierone: Custom Box' , 'tierone' ),
			array(
				'description' => __( 'Show the Custom script , style and normal html tag' , 'tierone' )
			)
		);
	}
	public function widget($args,$instance){
		$box_script = isset( $instance['box_script'] ) ? $instance['box_script'] : '';
		$box_style 	= isset( $instance['box_style'] ) ? $instance['box_style'] : '';
		
		?>
		<script type="text/javascript">
			<?php echo  $box_script ; ?>
		</script>
		<style type="text/css">
			<?php echo  $box_style ; ?>
		</style>
		<?php
	}

	public function form($instance){
		$instance = wp_parse_args(
			(array) $instance, array(
				'title' 	=> '',
				'box_script' 	=> ''
			)
		);
		?>
		<div class="delta-meta-box">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'box_style' );?>"><?php _e( 'CSS Editor:' , 'tierone'); ?></label>
				<textarea id="<?php echo $this->get_field_id('box_style');?>" name="<?php echo $this->get_field_name('box_style')?>" placeholder="<?php _e( 'Put Style Here','tierone' );  ?>"><?php echo  $instance['box_style']; ?></textarea>
			</div>
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'box_script' );?>"><?php _e( 'Script Editor:' , 'tierone'); ?></label>
				<textarea id="<?php echo $this->get_field_id('box_script');?>" name="<?php echo $this->get_field_name('box_script')?>" placeholder="<?php _e( 'Put Script Here','tierone' );  ?>"><?php echo  $instance['box_script']; ?></textarea>
			</div>
		</div>
		<?php
	}

	public function update($new_instance,$old_instance){
		$instance 		= $old_instance;
		$instance['box_script']      =    $new_instance['box_script']  ;
		$instance['box_style']      =    $new_instance['box_style']  ;

		return $instance;
	}
}


/**
* Ads 300x250
*/
class tierone_ads_300x250 extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_ads_300x250',
			__('Tierone: Ads 300x250', 'tierone'),
			array(
				'description' => __('Advertisement with size 300x250 for Sidebar position', 'tierone')
			)
		);
	}

	public function widget($args, $instance){
		$title 		= isset( $instance['title'] ) ? $instance['title'] : '';
		$image_path = isset( $instance['ads_image'] ) ? $instance['ads_image'] : '';
		$ads_link 	= isset( $instance['ads_link'] ) ? $instance['ads_link'] : '';
		$ads_link_type = isset( $instance['ads_link_type'] ) ? $instance['ads_link_type'] : '';

		if ( empty( $title ) ) {
			$title = __( ' ', 'tierone');
		}

		if ( empty( $image_path ) ) {
			$image_path = '';
		}

		if ( empty( $ads_link ) ) {
			$ads_link = esc_url( home_url('/') );
		}

		if ( $ads_link_type == "nofollow" ) {
			$ads_link_type = "nofollow";
		}else{
			$ads_link_type = "dofollow";
		}

	?>
		<aside id="ads300x300" class="widget">
			<h2 class="widget-title"><?php echo esc_attr( $title ); ?></h2>
			<a href="<?php echo esc_url( $ads_link ); ?>" title="<?php echo esc_attr( $title ); ?>" rel="<?php echo esc_attr( $ads_link_type );  ?>" target="_blank">
				<img src="<?php echo esc_url( $image_path ); ?>" alt="<?php echo esc_attr( $title ); ?>">
			</a>
		</aside>
	<?php

	}
	public function form($instance){
		$instance = wp_parse_args(
			(array) $instance,array(
				'title'	=> '',
				'ads_image'	=> '',
				'ads_link'	=> '',
				'ads_link_type'	=> ''
			)
		);
	?>
		<div class="delta-ads300x300">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'tierone' ); ?></label>
				<input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>" id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>">
			</div>
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'ads_link' ); ?>"><?php _e( 'Link:', 'tierone' ); ?></label>
				<input type="text" name="<?php echo $this->get_field_name( 'ads_link' ); ?>" id="<?php echo $this->get_field_id( 'ads_link' ); ?>" value="<?php echo esc_attr( $instance['ads_link'] ); ?>" >
			</div>
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'ads_link_type' ); ?>"><?php _e( 'Link Type:','tierone' ); ?></label>
				<select id="<?php echo $this->get_field_id( 'ads_link_type' ); ?>" name="<?php echo $this->get_field_name( 'ads_link_type' ); ?>">
					<option value="nofollow" <?php selected( $instance['ads_link_type'], 'nofollow' ); ?>>No Follow</option>
					<option value="dofollow" <?php selected( $instance['ads_link_type'], 'dofollow' ); ?>>Do Follow</option>
				</select>
			</div>
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'ads_image' ); ?>"><?php _e( 'Image:','tierone' ); ?></label>

				<?php $image_path_url = $instance['ads_image'];
					if ( !empty( $image_path_url ) ) { ?>
						<img src="<?php echo $image_path_url; ?>">
				<?php }else{ ?>
					<img src="">
				<?php } ?>

        		<input type="hidden" class="delta-custom-media-image" id="<?php echo $this->get_field_id( 'ads_image' );?>" name="<?php echo $this->get_field_name( 'ads_image' );?>" value="<?php echo esc_attr( $instance['ads_image'] ); ?>" />
        		<input type="button" class="delta-img-upload delta-custom-media-button" id="custom_media_button" name="<?php echo $this->get_field_name( 'ads_image' );?>" value="<?php _e( 'select Image', 'tierone' ); ?>">
			</div>
		</div>
	<?php
	}

	public function update($new_instance,$old_instance){
		$instance 	= $old_instance;
		$instance['title'] 	= strip_tags( stripslashes( $new_instance['title'] ) );
		$instance['ads_link'] 	= strip_tags( stripslashes( $new_instance['ads_link'] ) );
		$instance['ads_link_type'] 	= strip_tags( $new_instance['ads_link_type'] );
		$instance['ads_image'] 	= strip_tags( $new_instance['ads_image'] );
		return $instance;
	}
} //ads300x250 

/**
* Ads 727x90
*/
class tierone_ads_727x90 extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_ads_727x90',
			__('Tierone: Ads 727x90', 'tierone'),
			array(
				'description' => __('Advertisement with size 727x90 for Front Page', 'tieone')
			)
		);
	}

	public function widget($args,$instance){
		$title          = isset( $instance['title'] ) ? $instance['title'] : '';
		$ads_image_path = isset( $instance['ads_image'] ) ? $instance['ads_image'] : '';
		$ads_link       = isset( $instance['ads_link'] ) ? $instance['ads_link'] : '';
		$ads_link_type  = isset( $instance['ads_link_type'] ) ? $instance['ads_link_type'] : '';

		if ( empty($title) ) {
			$title = __('720x90', 'tierone');
		}

		if ( empty($ads_image_path) ) {
			$ads_image_path = '';
		}

		if ( empty($ads_link) ) {
			$ads_link = esc_url( home_url( '/' ) );
		}

		if ( $ads_link_type == "nofollow" ) {
			$ads_link_type = "nofollow";
		}else{
			$ads_link_type = "dofollow";
		}

		?>
		<div class="delta-site-ads">
      		<a href="<?php echo esc_url( $ads_link ); ?>" title="<?php echo esc_attr( $title ); ?>" rel="<?php echo esc_attr( $ads_link_type ); ?>" target="_blank"><img src="<?php echo esc_url( $ads_image_path ); ?>" alt="<?php echo esc_attr( $title ); ?>"> </a>
		</div>
	<?php

    }

    public function form( $instance ) {

        $instance = wp_parse_args(
            (array) $instance, array(
                'title'              => '',
                'ads_link'           => '',
                'ads_image'          => '',
                'ads_link_type'      => ''
            )
        );

        ?>
        <div class="delta-ads-727x90">
        	<div class="delta-admin-input-wrap">
        		<label for="<?php echo $this->get_field_id( 'title' );?>"><?php _e( 'Title:' , 'tierone'); ?></label>
        		<input type="text" id="<?php echo $this->get_field_id( 'title' );?>"  name="<?php echo $this->get_field_name( 'title' );?>"  value="<?php echo esc_attr( $instance['title'] ); ?>" placeholder="<?php _e('Advertise Title','tierone');?>">
        	</div><!--.delta-admin-input-wrap-->

        	<div class="delta-admin-input-wrap">
        		<label for="<?php echo $this->get_field_id( 'ads_link' );?>"><?php _e( 'Ads Link:' , 'tierone'); ?></label>
        		<input type="text" id="<?php echo $this->get_field_id( 'ads_link' );?>"  name="<?php echo $this->get_field_name( 'ads_link' );?>"  value="<?php echo esc_attr( $instance['ads_link'] ); ?>" placeholder="<?php _e('URL','tierone');?>">
        	</div><!--.delta-admin-input-wrap-->

        	<div class="delta-admin-input-wrap">
        		<label for="<?php echo $this->get_field_id( 'ads_link_type' );?>"><?php _e( 'Link Type:' , 'tierone'); ?></label>
        		<select id="<?php echo $this->get_field_id( 'ads_link_type' );?>" name="<?php echo $this->get_field_name( 'ads_link_type' );?>">
					<option value="dofollow" <?php selected( $instance['ads_link_type'], 'dofollow')?>>Do Follow</option>        			
					<option value="nofollow" <?php selected( $instance['ads_link_type'], 'nofollow')?>>No Follow</option>        			
        		</select>
        	</div><!--.delta-admin-input-wrap-->
        	<div class="delta-admin-input-wrap">
        		<label for="<?php echo $this->get_field_id( 'ads_image' );?>"><?php _e( 'Ads Image:' , 'tierone'); ?></label>
        		<?php
        			$dt_ads_img = $instance['ads_image'];
        			if ( !empty( $dt_ads_img ) ) { ?>
        				<img src="<?php echo $dt_ads_img; ?>"/>
        			<?php }else{ ?>
        				<img src="" />
        			<?php } ?>
        			<input type="hidden" class="delta-custom-media-image" id="<?php echo $this->get_field_id( 'ads_image' );?>" name="<?php echo $this->get_field_name( 'ads_image' );?>" value="<?php echo esc_attr( $instance['ads_image'] ); ?>" />
                	<input type="button" class="delta-img-upload delta-custom-media-button" id="custom_media_button" name="<?php echo $this->get_field_name( 'ads_image' ); ?>"  value="<?php _e( 'select Image', 'tierone' ); ?>" />
        	</div><!--.delta-admin-input-wrap-->
        </div><!--.delta-ads-727x90-->
    <?php
	}
    public function update( $new_instance, $old_instance ) {

        $instance               = $old_instance;
        $instance['title']      = strip_tags( stripslashes( $new_instance['title'] ) );
        $instance['ads_link']   = strip_tags( stripslashes( $new_instance['ads_link'] ) );
        $instance['ads_link_type']  = strip_tags( $new_instance['ads_link_type'] );
        $instance['ads_image']  = strip_tags( $new_instance['ads_image'] );
        return $instance;

    }

}

/**
* Multiple Promo ads 150x150
*/
class tierone_banner_promo_ads extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_banner_promo_ads',
			__('Tierone Delta: Promo Ads','tierone'),
			array(
				'description' => __( 'Multiple Promo Advertisement Banner', 'tierone' )
			)
		);
	}

	public function widget($args,$instance){
		$title1 			= isset( $instance['title1'] ) ? $instance['title1'] : '';
		$alt1 				= isset( $instance['alt1'] ) ? $instance['alt1'] : '';
		$ads_image_path1 	= isset( $instance['ads_image'] ) ? $instance['ads_image'] : '';
		$ads_link1 			= isset( $instance['ads_link1'] ) ? $instance['ads_link1'] : '';
		$ads_link_type1 	= isset( $instance['ads_link_type1'] ) ? $instance['ads_link_type1'] : '';
		$ads_target1 		= isset( $instance['ads_target1'] ) ? $instance['ads_target1'] : '';

		/*bpa 2*/
		$title2 			= isset( $instance['title2'] ) ? $instance['title2'] : '';
		$alt2				= isset( $instance['alt2'] ) ? $instance['alt2'] : '';
		$ads_image_path2 	= isset( $instance['ads_image2'] ) ? $instance['ads_image2'] : '';
		$ads_link2 			= isset( $instance['ads_link2'] ) ? $instance['ads_link2'] : '';
		$ads_link_type2 	= isset( $instance['ads_link_type2'] ) ? $instance['ads_link_type2'] : '';
		$ads_target2 		= isset( $instance['ads_target2'] ) ? $instance['ads_target2'] : '';

		/*bpa 3*/
		$title3 			= isset( $instance['title3'] ) ? $instance['title3'] : '';
		$alt3				= isset( $instance['alt3'] ) ? $instance['alt3'] : '';
		$ads_image_path3 	= isset( $instance['ads_image3'] ) ? $instance['ads_image3'] : '';
		$ads_link3			= isset( $instance['ads_link3'] ) ? $instance['ads_link3'] : '';
		$ads_link_type3 	= isset( $instance['ads_link_type3'] ) ? $instance['ads_link_type3'] : '';
		$ads_target3 		= isset( $instance['ads_target3'] ) ? $instance['ads_target3'] : '';

		/*bpa 4*/
		$title4 			= isset( $instance['title4'] ) ? $instance['title4'] : '';
		$alt4				= isset( $instance['alt4'] ) ? $instance['alt4'] : '';
		$ads_image_path4 	= isset( $instance['ads_image4'] ) ? $instance['ads_image4'] : '';
		$ads_link4			= isset( $instance['ads_link4'] ) ? $instance['ads_link4'] : '';
		$ads_link_type4 	= isset( $instance['ads_link_type4'] ) ? $instance['ads_link_type4'] : '';
		$ads_target4 		= isset( $instance['ads_target4'] ) ? $instance['ads_target4'] : '';

		if( empty( $title1 ) ){
			$title1 	= _e( 'Multiple Promo Ads', 'tieone' );
		};

		if ( empty( $ads_image_path1 ) ) {
			$ads_image_path1 = '';
		};

		if ( empty( $ads_link1 ) ) {
			$ads_link1 = esc_url(home_url('/'));
		};

		if ( $ads_link_type1 == "nofollow") {
			$ads_link_type1 = "nofollow";
		}else{
			$ads_link_type1 = "dofollow";
		}

		if ( $ads_target1 == '_blank' ) {
			$ads_target1 = '_blank';
		}else{
			$ads_target1 = '_self';
		}
		/*2*/
		if( empty( $title2 ) ){
			$title2 	= _e( 'Multiple Promo Ads', 'tieone' );
		};

		if ( empty( $ads_image_path2 ) ) {
			$ads_image_path2 = '';
		};

		if ( empty( $ads_link2 ) ) {
			$ads_link2 = esc_url(home_url('/'));
		};

		if ( $ads_link_type2 == "nofollow") {
			$ads_link_type2 = "nofollow";
		}else{
			$ads_link_type2 = "dofollow";
		}

		if ( $ads_target2 == '_blank' ) {
			$ads_target2 = '_blank';
		}else{
			$ads_target2 = '_self';
		}

		/*3*/
		if( empty( $title3 ) ){
			$title3 	= _e( 'Multiple Promo Ads', 'tieone' );
		};

		if ( empty( $ads_image_path3 ) ) {
			$ads_image_path3 = '';
		};

		if ( empty( $ads_link3 ) ) {
			$ads_link3 = esc_url(home_url('/'));
		};

		if ( $ads_link_type3 == "nofollow") {
			$ads_link_type3 = "nofollow";
		}else{
			$ads_link_type3 = "dofollow";
		}

		if ( $ads_target3 == '_blank' ) {
			$ads_target3 = '_blank';
		}else{
			$ads_target3 = '_self';
		}

		/*4*/
		if( empty( $title4 ) ){
			$title4 	= _e( 'Multiple Promo Ads', 'tieone' );
		};

		if ( empty( $ads_image_path4 ) ) {
			$ads_image_path4 = '';
		};

		if ( empty( $ads_link4 ) ) {
			$ads_link4 = esc_url(home_url('/'));
		};

		if ( $ads_link_type4 == "nofollow") {
			$ads_link_type4 = "nofollow";
		}else{
			$ads_link_type4 = "dofollow";
		}

		if ( $ads_target4 == '_blank' ) {
			$ads_target4 = '_blank';
		}else{
			$ads_target4 = '_self';
		}
		?>
		<div class="delta-site-bpa-ads">
			<div class="delta-site-bpa-box">
				<a href="<?php echo esc_url( $ads_link1 ); ?>" rel="<?php echo esc_attr( $ads_link_type1 ); ?>" target="<?php echo esc_attr( $ads_target1 ); ?>" >
					<img src="<?php echo esc_url( $ads_image_path1 ); ?>" title="<?php echo esc_attr( $title1 ); ?>" alt="<?php echo esc_attr( $alt1 ); ?>">
				</a>
			</div>
			<div class="delta-site-bpa-box">
				<a href="<?php echo esc_url( $ads_link2 ); ?>" rel="<?php echo esc_attr( $ads_link_type2 ); ?>" target="<?php echo esc_attr( $ads_target2 ); ?>" >
					<img src="<?php echo esc_url( $ads_image_path2 ); ?>" title="<?php echo esc_attr( $title2 ); ?>" alt="<?php echo esc_attr( $alt2 ); ?>">
				</a>
			</div>
			<div class="delta-site-bpa-box">
				<a href="<?php echo esc_url( $ads_link3 ); ?>" rel="<?php echo esc_attr( $ads_link_type3 ); ?>" target="<?php echo esc_attr( $ads_target3 ); ?>" >
					<img src="<?php echo esc_url( $ads_image_path3 ); ?>" title="<?php echo esc_attr( $title3 ); ?>" alt="<?php echo esc_attr( $alt3 ); ?>">
				</a>
			</div>
			<div class="delta-site-bpa-box">
				<a href="<?php echo esc_url( $ads_link4 ); ?>" rel="<?php echo esc_attr( $ads_link_type4 ); ?>" target="<?php echo esc_attr( $ads_target4 ); ?>" >
					<img src="<?php echo esc_url( $ads_image_path4 ); ?>" title="<?php echo esc_attr( $title4 ); ?>" alt="<?php echo esc_attr( $alt4 ); ?>">
				</a>
			</div>
			<span class="clearfix"></span>
		</div>

		<?php
	}

	public function form($instance){
		$instance = wp_parse_args(
			(array) $instance, array(
				'title1'				=> '',
				'alt1'					=> '',
				'ads_image'				=> '',
				'ads_link1'				=> '',
				'ads_link_type1'		=> '',
				'ads_target1'			=> '',
				'title2'				=> '',
				'alt2'					=> '',
				'ads_image2'			=> '',
				'ads_link2'				=> '',
				'ads_link_type2'		=> '',
				'ads_target2'			=> '',
				'title3'				=> '',
				'alt3'					=> '',
				'ads_image3'			=> '',
				'ads_link3'				=> '',
				'ads_link_type3'		=> '',
				'ads_target3'			=> '',
				'title4'				=> '',
				'alt4'					=> '',
				'ads_image4'			=> '',
				'ads_link4'				=> '',
				'ads_link_type4'		=> '',
				'ads_target4'			=> ''
			)
		);
		?>
		<div class="delta-ads300x300">
			<div class="delta-admin-input-wrap" id="accordionArray">
				<div id="tb" >
					<button class="accordion"><label for="<?php  $this->get_field_id( 'bannertitle'  ); ?>"><?php _e('Promo Ads 1' , 'tierone' ); ?><?php echo $add; ?></label></button>
					<div class='panel'>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'title1' ); ?>"><?php _e( 'Title:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'title1' ); ?>" id="<?php echo $this->get_field_id( 'title1' ); ?>" value="<?php echo esc_attr( $instance['title1'] ); ?>">
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'alt1' ); ?>"><?php _e( 'Alt Text:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'alt1' ); ?>" id="<?php echo $this->get_field_id( 'alt1' ); ?>" value="<?php echo esc_attr( $instance['alt1'] ); ?>">
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_link1' ); ?>"><?php _e( 'Link:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'ads_link1' ); ?>" id="<?php echo $this->get_field_id( 'ads_link1' ); ?>" value="<?php echo esc_attr( $instance['ads_link1'] ); ?>" >
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_link_type1' ); ?>"><?php _e( 'Link Type:','tierone' ); ?></label>
							<select id="<?php echo $this->get_field_id( 'ads_link_type1' ); ?>" name="<?php echo $this->get_field_name( 'ads_link_type1' ); ?>">
								<option value="nofollow" <?php selected( $instance['ads_link_type1'], 'nofollow' ); ?>>No Follow</option>
								<option value="dofollow" <?php selected( $instance['ads_link_type1'], 'dofollow' ); ?>>Do Follow</option>
							</select>
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id('ads_target1'); ?>"><?php _e( 'Link Target:','tierone' ); ?></label>
							<select id="<?php echo $this->get_field_id('ads_target1'); ?>" name="<?php echo $this->get_field_name('ads_target1'); ?>">
								<option value="_blank" <?php selected( $instance['ads_target1'], '_blank' ); ?>>_blank</option>
								<option value="_self" <?php selected( $instance['ads_target1'], '_self' ); ?>>_self</option>
							</select>			
						</div><!--.dt-admin-input-wrap-->
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_image' ); ?>"><?php _e( 'Image:','tierone' ); ?></label>

							<?php $image_path_url = $instance['ads_image'];
								if ( !empty( $image_path_url ) ) { ?>
									<img src="<?php echo $image_path_url; ?>">
							<?php }else{ ?>
								<img src="">
							<?php } ?>

			        		<input type="hidden" class="dt-custom-media-image" id="<?php echo $this->get_field_id( 'ads_image' );?>" name="<?php echo $this->get_field_name( 'ads_image' );?>" value="<?php echo esc_attr( $instance['ads_image'] ); ?>" />
			        		<input type="button" class="delta-img-upload delta-custom-media-button" id="custom_media_button" name="<?php echo $this->get_field_name( 'ads_image' );?>" value="<?php _e( 'select Image', 'tierone' ); ?>">
						</div>
					</div>
				</div>
				<div id="tb" >
					<button class="accordion"><label for="<?php  $this->get_field_id( 'bannertitle'  ); ?>"><?php _e('Promo Ads 2' , 'tierone' ); ?><?php echo $add; ?></label></button>
					<div class='panel'>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'title2' ); ?>"><?php _e( 'Title:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'title2' ); ?>" id="<?php echo $this->get_field_id( 'title2' ); ?>" value="<?php echo esc_attr( $instance['title2'] ); ?>">
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'alt2' ); ?>"><?php _e( 'Alt Text:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'alt2' ); ?>" id="<?php echo $this->get_field_id( 'alt2' ); ?>" value="<?php echo esc_attr( $instance['alt2'] ); ?>">
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_link2' ); ?>"><?php _e( 'Link:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'ads_link2' ); ?>" id="<?php echo $this->get_field_id( 'ads_link2' ); ?>" value="<?php echo esc_attr( $instance['ads_link2'] ); ?>" >
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_link_type2' ); ?>"><?php _e( 'Link Type:','tierone' ); ?></label>
							<select id="<?php echo $this->get_field_id( 'ads_link_type2' ); ?>" name="<?php echo $this->get_field_name( 'ads_link_type2' ); ?>">
								<option value="nofollow" <?php selected( $instance['ads_link_type2'], 'nofollow' ); ?>>No Follow</option>
								<option value="dofollow" <?php selected( $instance['ads_link_type2'], 'dofollow' ); ?>>Do Follow</option>
							</select>
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id('ads_target2'); ?>"><?php _e( 'Link Target :','tierone' ); ?></label>
							<select id="<?php echo $this->get_field_id('ads_target2'); ?>" name="<?php echo $this->get_field_name('ads_target2'); ?>">
								<option value="_blank" <?php selected( $instance['ads_target2'], '_blank' ); ?>>_blank</option>
								<option value="_self" <?php selected( $instance['ads_target2'], '_self' ); ?>>_self</option>
							</select>			
						</div><!--.dt-admin-input-wrap-->
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_image2' ); ?>"><?php _e( 'Image:','tierone' ); ?></label>

							<?php $image_path_url2 = $instance['ads_image2'];
								if ( !empty( $image_path_url2 ) ) { ?>
									<img src="<?php echo $image_path_url2; ?>">
							<?php }else{ ?>
								<img src="">
							<?php } ?>

			        		<input type="hidden" class="dt-custom-media-image" id="<?php echo $this->get_field_id( 'ads_image2' );?>" name="<?php echo $this->get_field_name( 'ads_image2' );?>" value="<?php echo esc_attr( $instance['ads_image2'] ); ?>" />
			        		<input type="button" class="delta-img-upload delta-custom-media-button" id="custom_media_button" name="<?php echo $this->get_field_name( 'ads_image2' );?>" value="<?php _e( 'select Image', 'tierone' ); ?>">
						</div>
					</div>
				</div><!--tab2-->
				<div id="tb" >
					<button class="accordion"><label for="<?php  $this->get_field_id( 'bannertitle'  ); ?>"><?php _e('Promo Ads 3' , 'tierone' ); ?><?php echo $add; ?></label></button>
					<div class='panel'>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'title3' ); ?>"><?php _e( 'Title:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'title3' ); ?>" id="<?php echo $this->get_field_id( 'title3' ); ?>" value="<?php echo esc_attr( $instance['title3'] ); ?>">
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'alt3' ); ?>"><?php _e( 'Alt Text:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'alt3' ); ?>" id="<?php echo $this->get_field_id( 'alt3' ); ?>" value="<?php echo esc_attr( $instance['alt3'] ); ?>">
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_link3' ); ?>"><?php _e( 'Link:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'ads_link3' ); ?>" id="<?php echo $this->get_field_id( 'ads_link3' ); ?>" value="<?php echo esc_attr( $instance['ads_link3'] ); ?>" >
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_link_type3' ); ?>"><?php _e( 'Link Type:','tierone' ); ?></label>
							<select id="<?php echo $this->get_field_id( 'ads_link_type3' ); ?>" name="<?php echo $this->get_field_name( 'ads_link_type3' ); ?>">
								<option value="nofollow" <?php selected( $instance['ads_link_type3'], 'nofollow' ); ?>>No Follow</option>
								<option value="dofollow" <?php selected( $instance['ads_link_type3'], 'dofollow' ); ?>>Do Follow</option>
							</select>
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id('ads_target3'); ?>"><?php _e( 'Link Target 1 :','tierone' ); ?></label>
							<select id="<?php echo $this->get_field_id('ads_target3'); ?>" name="<?php echo $this->get_field_name('ads_target3'); ?>">
								<option value="_blank" <?php selected( $instance['ads_target3'], '_blank' ); ?>>_blank</option>
								<option value="_self" <?php selected( $instance['ads_target3'], '_self' ); ?>>_self</option>
							</select>			
						</div><!--.dt-admin-input-wrap-->
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_image3' ); ?>"><?php _e( 'Image:','tierone' ); ?></label>

							<?php $image_path_url3 = $instance['ads_image3'];
								if ( !empty( $image_path_url3 ) ) { ?>
									<img src="<?php echo $image_path_url3; ?>">
							<?php }else{ ?>
								<img src="">
							<?php } ?>

			        		<input type="hidden" class="dt-custom-media-image" id="<?php echo $this->get_field_id( 'ads_image3' );?>" name="<?php echo $this->get_field_name( 'ads_image3' );?>" value="<?php echo esc_attr( $instance['ads_image3'] ); ?>" />
			        		<input type="button" class="delta-img-upload delta-custom-media-button" id="custom_media_button" name="<?php echo $this->get_field_name( 'ads_image3' );?>" value="<?php _e( 'select Image', 'tierone' ); ?>">
						</div>
					</div>
				</div><!--tab3-->
				<div id="tb" >
					<button class="accordion"><label for="<?php  $this->get_field_id( 'bannertitle'  ); ?>"><?php _e('Promo Ads 4' , 'tierone' ); ?><?php echo $add; ?></label></button>
					<div class='panel'>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'title4' ); ?>"><?php _e( 'Title:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'title4' ); ?>" id="<?php echo $this->get_field_id( 'title4' ); ?>" value="<?php echo esc_attr( $instance['title4'] ); ?>">
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'alt4' ); ?>"><?php _e( 'Alt Text:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'alt4' ); ?>" id="<?php echo $this->get_field_id( 'alt4' ); ?>" value="<?php echo esc_attr( $instance['alt4'] ); ?>">
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_link4' ); ?>"><?php _e( 'Link:', 'tierone' ); ?></label>
							<input type="text" name="<?php echo $this->get_field_name( 'ads_link4' ); ?>" id="<?php echo $this->get_field_id( 'ads_link4' ); ?>" value="<?php echo esc_attr( $instance['ads_link4'] ); ?>" >
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_link_type4' ); ?>"><?php _e( 'Link Type:','tierone' ); ?></label>
							<select id="<?php echo $this->get_field_id( 'ads_link_type4' ); ?>" name="<?php echo $this->get_field_name( 'ads_link_type4' ); ?>">
								<option value="nofollow" <?php selected( $instance['ads_link_type4'], 'nofollow' ); ?>>No Follow</option>
								<option value="dofollow" <?php selected( $instance['ads_link_type4'], 'dofollow' ); ?>>Do Follow</option>
							</select>
						</div>
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id('ads_target4'); ?>"><?php _e( 'Link Target:','tierone' ); ?></label>
							<select id="<?php echo $this->get_field_id('ads_target4'); ?>" name="<?php echo $this->get_field_name('ads_target4'); ?>">
								<option value="_blank" <?php selected( $instance['ads_target4'], '_blank' ); ?>>_blank</option>
								<option value="_self" <?php selected( $instance['ads_target4'], '_self' ); ?>>_self</option>
							</select>			
						</div><!--.dt-admin-input-wrap-->
						<div class="delta-admin-input-wrap">
							<label for="<?php echo $this->get_field_id( 'ads_image4' ); ?>"><?php _e( 'Image:','tierone' ); ?></label>

							<?php $image_path_url4 = $instance['ads_image4'];
								if ( !empty( $image_path_url4 ) ) { ?>
									<img src="<?php echo $image_path_url4; ?>">
							<?php }else{ ?>
								<img src="">
							<?php } ?>

			        		<input type="hidden" class="dt-custom-media-image" id="<?php echo $this->get_field_id( 'ads_image4' );?>" name="<?php echo $this->get_field_name( 'ads_image4' );?>" value="<?php echo esc_attr( $instance['ads_image4'] ); ?>" />
			        		<input type="button" class="delta-img-upload delta-custom-media-button" id="custom_media_button" name="<?php echo $this->get_field_name( 'ads_image4' );?>" value="<?php _e( 'select Image', 'tierone' ); ?>">
						</div>
					</div>
				</div><!--tab4-->
			</div>
		</div>


		<script type="text/javascript">
			jQuery(document).ready(function(){
	            var acc = jQuery('div#accordionArray').find("button.accordion");
	            jQuery('div#accordionArray').unbind().on('click', 'button.accordion', function(e){
	                e.preventDefault();
	                jQuery(this).toggleClass('active').parent().find('div.panel').toggleClass('show');
	                return false;
	            });
			});
		</script>



		<?php		
	}

	public function update($new_instance,$old_instance){

        $instance               = $old_instance;
        $instance['title1']      		= strip_tags( stripslashes( $new_instance['title1'] ) );
        $instance['alt1']      			= strip_tags( stripslashes( $new_instance['alt1'] ) );
        $instance['ads_link1']   		= strip_tags( stripslashes( $new_instance['ads_link1'] ) );
        $instance['ads_link_type1']  	= strip_tags( $new_instance['ads_link_type1'] );
        $instance['ads_target1']  		= strip_tags( $new_instance['ads_target1'] );
        $instance['ads_image']  		= strip_tags( $new_instance['ads_image'] );
        /*2*/
        $instance['title2']      		= strip_tags( stripslashes( $new_instance['title2'] ) );
        $instance['alt2']      			= strip_tags( stripslashes( $new_instance['alt2'] ) );
        $instance['ads_link2']   		= strip_tags( stripslashes( $new_instance['ads_link2'] ) );
        $instance['ads_link_type2']  	= strip_tags( $new_instance['ads_link_type2'] );
        $instance['ads_target2']  		= strip_tags( $new_instance['ads_target2'] );
        $instance['ads_image2']  		= strip_tags( $new_instance['ads_image2'] );
        /*3*/
        $instance['title3']      		= strip_tags( stripslashes( $new_instance['title3'] ) );
        $instance['alt3']      			= strip_tags( stripslashes( $new_instance['alt3'] ) );
        $instance['ads_link3']   		= strip_tags( stripslashes( $new_instance['ads_link3'] ) );
        $instance['ads_link_type3']  	= strip_tags( $new_instance['ads_link_type3'] );
        $instance['ads_target3']  		= strip_tags( $new_instance['ads_target3'] );
        $instance['ads_image3']  		= strip_tags( $new_instance['ads_image3'] );
        /*4*/
        $instance['title4']      		= strip_tags( stripslashes( $new_instance['title4'] ) );
        $instance['alt4']      			= strip_tags( stripslashes( $new_instance['alt4'] ) );
        $instance['ads_link4']   		= strip_tags( stripslashes( $new_instance['ads_link4'] ) );
        $instance['ads_link_type4']  	= strip_tags( $new_instance['ads_link_type4'] );
        $instance['ads_target4']  		= strip_tags( $new_instance['ads_target4'] );
        $instance['ads_image4']  		= strip_tags( $new_instance['ads_image4'] );
        return $instance;

	}
}


/**
* Tierone Ticker
*/
class tierone_ticker extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_ticker',
			__( 'Tierone: Ticker' , 'tierone' ),
			array(
				'description'	=> __( 'Tierone Ticker','tierone' )
			)
		);
	}

	public function widget($args,$instance){
		$title 		= isset( $instance['title'] ) ? $instance['title'] : 'Headlines';
		$show_posts_from = isset( $instance[ 'show_posts_from' ] ) ? $instance[ 'show_posts_from' ] : '';
		$category = isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : '';
		$no_of_posts     = isset( $instance['no_of_posts'] ) ? $instance['no_of_posts'] : '5';

		if ( $show_posts_from == "recent" ) {
			$tierone_ticker_posts = new WP_Query( array(
				'post_type' 		=> 'post',
				'category__in' 		=> $category,
				'posts_per_page' 	=> $no_of_posts,
				'ignore_sticky_posts' => true
			) );
		}else{
			$tierone_ticker_posts = new WP_Query( array(
				'post_type' 		=> 'post',
				'category__in' 		=> $category,
				'posts_per_page' 	=> $no_of_posts
			) );
		}

		if ( $tierone_ticker_posts->have_posts() ) : ?>
		<div class="dt-tier-ticker ticker">

			<?php if( ! empty( $title ) ) : ?><span class="dt-ticker-tag"><?php echo esc_attr( $title ); ?> /// </span><?php endif;?>

		    <ul class="dt-tierone-ticker">
		    	<?php while( $tierone_ticker_posts->have_posts() ) : $tierone_ticker_posts->the_post(); ?>
                    <li><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"> <?php esc_attr( the_title() ); ?></a> - <?php echo strip_tags( esc_attr( tierone_excerpt_max_charlength(85) ) ) ?></li>
				<?php endwhile;?>
		    </ul>
		</div>
		<?php else : ?>
			<p><?php _e('Sorry, no posts found in selected category','tierone'); ?></p>
		<?php endif;
	}

	public function form($instance){
        $instance = wp_parse_args(
            (array) $instance, array(
                'title'              => 'headlines',
                'show_posts_from'    => 'recent',
                'category'           => '',
                'no_of_posts'        => '5'
            )
        );
      ?>

        <div class="delta-featured-post-slider">
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php _e( 'Title', 'tierone' ); ?></strong></label>
                <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>">
            </div>

            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'show_posts_from' ); ?>"><strong><?php _e( 'Chose Type', 'tierone' ); ?></strong></label>

                <input type="radio" id="<?php echo $this->get_field_id( 'show_posts_from' ); ?>" name="<?php echo $this->get_field_name( 'show_posts_from' ); ?>" value="<?php _e( 'recent', 'tierone' ); ?>" <?php checked( $instance[ 'show_posts_from' ], 'recent' ); ?> ><?php _e( 'Recent Posts', 'tierone' ); ?>
                <input type="radio" id="<?php echo $this->get_field_id( 'show_posts_from' ); ?>" name="<?php echo $this->get_field_name( 'show_posts_from' ); ?>" value="<?php _e( 'category', 'tierone' ); ?>" <?php checked( $instance[ 'show_posts_from' ], 'category' ); ?> ><?php _e( 'Category', 'tierone' ); ?>

                <br /><br />
            </div>

            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'category' ); ?>"><strong><?php _e( 'Category', 'tierone' ); ?></strong></label>

                <select id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">

                    <?php foreach(get_terms('category','parent=0&hide_empty=0') as $term) { ?>
                        <option <?php selected( $instance['category'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'no_of_posts' ); ?>"><strong><?php _e( 'No. of Posts', 'tierone' ); ?></strong></label>
                <input type="number" id="<?php echo $this->get_field_id( 'no_of_posts' ); ?>" name="<?php echo $this->get_field_name( 'no_of_posts' ); ?>" value="<?php echo esc_attr( $instance['no_of_posts'] ); ?>">
            </div>
        </div>
      <?php
	}
	public function update($new_instance,$old_instance){

        $instance                       = $old_instance;
        $instance[ 'title' ]            = strip_tags( stripslashes( $new_instance[ 'title' ] ) );
        $instance[ 'show_posts_from' ]  = $new_instance[ 'show_posts_from' ];
        $instance[ 'category' ]         = $new_instance[ 'category' ];
        $instance[ 'no_of_posts' ]      = strip_tags( stripslashes( $new_instance[ 'no_of_posts' ]  ) );
        return $instance;
	}
}


/**
* Tierone Slider
*/
class tierone_slider extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_slider',
			__('Tierone: Slider', 'tierone'),
			array(
				'description'	=> __('Tierone Image Slider with title and content','tierone')
			)
		);
	}

	public function widget($args,$instance){
		global $post;
		$show_posts_from	=	isset( $instance[ 'show_posts_from' ] ) ? $instance[ 'show_posts_from' ] : '';
		$category 			= 	isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : '';
		$no_of_posts     = isset( $instance['no_of_posts'] ) ? $instance['no_of_posts'] : '5';

		if ( $show_posts_from == "recent" ) {
			$tierone_recent_slider_posts = new WP_Query( array(
				'post_type' 		=> 'post',
				'category__in' 		=> $category,
				'posts_per_page' 	=> $no_of_posts,
				'ignore_sticky_posts' => true
			) );
		} else {
			$tierone_recent_slider_posts = new WP_Query( array(
				'post_type' 		=> 'post',
				'category__in' 		=> $category,
				'posts_per_page' 	=> $no_of_posts
			) );
		}

		if ( $tierone_recent_slider_posts->have_posts() ) : ?>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php
						$count_ia = 0;

						while ( $tierone_recent_slider_posts->have_posts() ) : $tierone_recent_slider_posts->the_post();

							if($count_ia == 0 ){
								$activate = 'active';
							}else{
								$activate = '';
							}
					?>
					<li data-target="#myCarousel" data-slide-to="<?php echo $count_ia; ?>" class="<?php echo $activate; ?>" ></li>
					<?php	
						$count_ia++;	
						endwhile;
					?>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php 
						$count_ib = 0;
						while ( $tierone_recent_slider_posts->have_posts() ) : $tierone_recent_slider_posts->the_post(); 
						if($count_ib == 0 ){
							$activate = 'active';
						}else{
							$activate = '';
						}
						?>
					<div class="item <?php echo $activate; ?>">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><div class="delta-carousel-overlay"></div></a>
						<figure class="delta-carousel">
							<div class="carousel-img-box">
								<?php										
								$src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'dt-featured-post-slider-post' );
								$first_image = '';
								if ( !has_post_thumbnail() ) { $first_image = get_first_image(); }
								
								if( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url('tier-featured-slider'); ?>" title="<?php echo get_the_title();?>"></a>
								<?php elseif ( is_url_exist($first_image) ) : ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="tier-featured-slider" src="<?php echo get_first_image(); ?>"/></a>
								<?php else: ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-post-large.jpg" alt="<?php the_title(); ?>" /></a>
								<?php endif;?>

                            </div>
						</figure>
						<div class="carousel-caption">
							 <header class="entry-header">
							 	<h3 class="entry-Title"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></h3>
							 </header>
						</div>
					</div>
					<?php 
						$count_ib++;
						endwhile;
					?>
				</div>
			</div>
		<?php else : ?>
			<p><?php _e('Sorry, no posts found in selected category','tierone'); ?></p>
		<?php endif;
	}

	public function form($instance){
        $instance = wp_parse_args(
            (array) $instance, array(
                'title'              => '',
                'show_posts_from'    => 'recent',
                'category'           => '',
                'no_of_posts'        => '5'
            )
        );
        ?>
        <div class="delta-featured-post-slider">
        	<div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php _e( 'Title', 'tierone' ); ?></strong></label>
                <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" placeholder="<?php _e( 'Title for Featured Posts', 'tierone' ); ?>">
        	</div><!-- .dt-admin-input-wrap -->
           <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'show_posts_from' ); ?>"><strong><?php _e( 'Chose Type', 'tierone' ); ?></strong></label>

               <input type="radio" id="<?php echo $this->get_field_id( 'show_posts_from' ); ?>" name="<?php echo $this->get_field_name( 'show_posts_from' ); ?>" value="<?php _e( 'recent', 'tierone' ); ?>" <?php checked( $instance[ 'show_posts_from' ], 'recent' ); ?> ><?php _e( 'Recent Posts', 'tierone' ); ?>
               <input type="radio" id="<?php echo $this->get_field_id( 'show_posts_from' ); ?>" name="<?php echo $this->get_field_name( 'show_posts_from' ); ?>" value="<?php _e( 'category', 'tierone' ); ?>" <?php checked( $instance[ 'show_posts_from' ], 'category' ); ?> ><?php _e( 'Category', 'tierone' ); ?>
                <br /><br />
            </div><!-- .dt-admin-input-wrap -->
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'category' ); ?>"><strong><?php _e( 'Category', 'tierone' ); ?></strong></label>

                <select id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">

                    <?php foreach(get_terms('category','parent=0&hide_empty=0') as $term) { ?>
                        <option <?php selected( $instance['category'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                    <?php } ?>
                </select>
            </div><!-- .dt-admin-input-wrap -->
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'no_of_posts' ); ?>"><strong><?php _e( 'No. of Posts', 'tierone' ); ?></strong></label>
                <input type="number" id="<?php echo $this->get_field_id( 'no_of_posts' ); ?>" name="<?php echo $this->get_field_name( 'no_of_posts' ); ?>" value="<?php echo esc_attr( $instance['no_of_posts'] ); ?>">
            </div><!-- .dt-admin-input-wrap -->
        </div>
        <?php
	}

	public function update($new_instance,$old_instance){

        $instance                       = $old_instance;
        $instance[ 'title' ]            = strip_tags( stripslashes( $new_instance[ 'title' ] ) );
        $instance[ 'show_posts_from' ]  = $new_instance[ 'show_posts_from' ];
        $instance[ 'category' ]         = $new_instance[ 'category' ];
        $instance[ 'no_of_posts' ]      = strip_tags( stripslashes( $new_instance[ 'no_of_posts' ]  ) );
        return $instance;
	}
}

/**
* Custome Archive
*/
class cus_archive extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'cus_archive',
			__( 'Tierone Delta: Custom Archive', 'tierone' ),
			array(
				__( 'Display monthly archive of your site\'s posts', 'tierone' )
			)
		);
	}

	public function widget($args,$instance){
		$title  = isset( $instance['title'] ) ? $instance['title'] : '';
		$show_counts = isset( $instance['show_counts'] ) ? $instance['show_counts'] : '';

		if ( empty( $title ) ) {
			$title = __( 'Archives', 'tierone' );
		}
		?>
		<aside class="widget delta_widget_archive">
			<h2 class="widget-title"><?php echo esc_attr( $title ); ?></h2>
			<?php
			global $wpdb;
			$year_prev = null;
			$months = $wpdb->get_results(	"SELECT DISTINCT MONTH( post_date ) AS month ,
											YEAR( post_date ) AS year,
											COUNT( id ) as post_count FROM $wpdb->posts
											WHERE post_status = 'publish' and post_date <= now( )
											and post_type = 'post'
											GROUP BY month , year
											ORDER BY post_date DESC");
			foreach($months as $month) :
				$year_current = $month->year;
				if ($year_current != $year_prev){
					if ($year_prev != null){?>
					</ul>
					<?php } ?>
				<div class="arch-title"><h3><?php echo $month->year; ?></h3></div>
				<ul class="delta-archive-list">
				<?php } ?>
				<li>
					<a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
						<span class="delta-archive-month"><?php echo date("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span>
						<?php if ( $show_counts == "on" ) : ?>
						<span class="delta-archive-count"><?php echo $month->post_count; ?></span>
						<?php endif; ?>
					</a>
				</li>
			<?php $year_prev = $year_current;
			endforeach;
			?>
			</ul>
			<span class="clearfix"></span>
		</aside>
		<?php
	}

	public function form($instance){
		$instance = wp_parse_args(
			(array) $instance, array(
				'title' => '',
				'show_counts' => ''
			)
		);
	?>
	<div class="delta-archive">
		<div class="delta-admin-input-wrap">
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'tierone' ); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" placeholder="<?php _e( 'Title for Featured Posts', 'tierone' ); ?>">
		</div>
		<div class="delta-admin-input-wrap">
			<label for="<?php echo $this->get_field_id( 'show_counts' ) ?>" ><?php _e( 'Show post counts','tierone' ); ?></label>
			<input type="checkbox" <?php checked( $instance[ 'show_counts' ], 'on'  ); ?> id="<?php echo $this->get_field_id( 'show_counts' ); ?>" name="<?php echo $this->get_field_name( 'show_counts' ); ?>">
		</div>
	</div>
	<?php
	}

	public function update($new_instance, $old_instance){
		$instance  = $old_instance;
		$instance['title']  =  strip_tags( stripslashes( $new_instance['title'] ) );
		$instance['show_counts']    = $new_instance['show_counts'];
		return $instance;
	}
}

/**
* Featured Post
*/
class tierone_featured_post extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_featured_post',
			__( 'Front Page: Featured Post', 'tierone' ),
			array(
				'description' => __( 'Display the Featured post', 'tierone' )
			)
		);
	}
	public function widget($args,$instance){

        global $post;
        $category1      = isset( $instance[ 'category1' ] ) ? $instance[ 'category1' ] : '';
        $category2      = isset( $instance[ 'category2' ] ) ? $instance[ 'category2' ] : '';

        $featured_post1 = new WP_Query( array(
            'post_type'         => 'post',
            'category__in'      => $category1,
            'posts_per_page'    => '1'
        ) );

        $featured_post2 = new WP_Query( array(
            'post_type'         => 'post',
            'category__in'      => $category2,
            'posts_per_page'    => '1'
        ) );

        ?>
		<div class="delta-side-lights">
	        <?php
	        if ( $featured_post1->have_posts() && $category1 != '' ) : ?>

	            <?php while ( $featured_post1->have_posts() ) : $featured_post1->the_post(); ?>
	                <div class="delta-featured-holder">
	                    <figure class="delta-featured-img">
	                        <?php

	                        if ( has_post_thumbnail() ) :
	                            $image = '';
	                            $title_attribute = get_the_title( $post->ID );
	                            $image .= '<a href="'. esc_url( get_permalink() ) . '" title="' . esc_html( the_title( '', '', false ) ) .'">';
	                            $image .= get_the_post_thumbnail( $post->ID, 'tier-featured-lights', array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ).'</a>';
	                            echo $image;
	                        endif;

	                        ?>
	                    </figure><!-- .delta-featured-img -->

	                    <div class="delta-featured-desc">
	                        <h2 ><a href="<?php esc_attr( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php esc_attr( the_title() ); ?></a></h2>
	                    </div><!-- .delta-featured-desc -->
	                </div><!-- .delta-featured-holder -->

	            <?php endwhile; ?>

	        <?php else : ?>
	            <p><?php _e( 'Sorry, no posts found in selected category.', 'tierone' ); ?></p>
	        <?php endif; ?>
	        <?php

	        if ( $featured_post2->have_posts() && $category1 != '' ) : ?>

	            <?php while ( $featured_post2->have_posts() ) : $featured_post2->the_post(); ?>
	                <div class="delta-featured-holder">
	                    <figure class="delta-featured-img">
	                        <?php

	                        if ( has_post_thumbnail() ) :
	                            $image = '';
	                            $title_attribute = get_the_title( $post->ID );
	                            $image .= '<a href="'. esc_url( get_permalink() ) . '" title="' . esc_html( the_title( '', '', false ) ) .'">';
	                            $image .= get_the_post_thumbnail( $post->ID, 'tier-featured-lights', array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ) ) ).'</a>';
	                            echo $image;
	                        endif;

	                        ?>
	                    </figure><!-- .delta-featured-img -->

	                    <div class="delta-featured-desc">

	                        <h2 ><a href="<?php esc_attr( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php esc_attr( the_title() ); ?></a></h2>
	                    </div><!-- .delta-featured-desc -->
	                </div><!-- .delta-featured-holder -->

	            <?php endwhile; ?>

	        <?php else : ?>
	            <p><?php _e( 'Sorry, no posts found in selected category.', 'tierone' ); ?></p>
	        <?php endif; ?>
		</div>
        <?php
	}
	public function form($instance){
		$instance = wp_parse_args(
            (array) $instance, array(
                'title'              => '',
                'category1'          => '',
                'category2'          => ''
            )
        );
       ?>
       <div class="delta-featured-box">
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php _e( 'Title', 'tierone' ); ?></strong></label>
                <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" placeholder="<?php _e( 'Title for Featured Posts', 'tierone' ); ?>">
            </div><!-- .dt-admin-input-wrap -->

            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'category1' ); ?>"><strong><?php _e( 'Category 1', 'tierone' ); ?></strong></label>

                <select id="<?php echo $this->get_field_id( 'category1' ); ?>" name="<?php echo $this->get_field_name( 'category1' ); ?>">

                    <?php foreach( get_terms( 'category','parent=0&hide_empty=0' ) as $term) { ?>
                        <option <?php selected( $instance[ 'category1' ], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                    <?php } ?>
                </select>
            </div><!-- .dt-admin-input-wrap -->

            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'category2' ); ?>"><strong><?php _e( 'Category 2', 'tierone' ); ?></strong></label>

                <select id="<?php echo $this->get_field_id( 'category2' ); ?>" name="<?php echo $this->get_field_name( 'category2' ); ?>">

                    <?php foreach( get_terms( 'category','parent=0&hide_empty=0' ) as $term) { ?>
                        <option <?php selected( $instance[ 'category2' ], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                    <?php } ?>
                </select>
            </div><!-- .dt-admin-input-wrap -->

       </div>
       <?php
	}
}

/**
* Popular Post
*/
class tierone_popular_post extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_popular_post',
			__('Tierone: Popular Post', 'tierone'),
			array(
				'description' => __('Show the Popular post', 'tieone')
			)
		);
	}


	public function widget( $args, $instance ){
		extract($args);
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$nop = ( ! empty( $instance['nop'] ) ) ? (int)( $instance['nop'] ) : 5;

		if ( empty($title) ) {
			$title = __('Popular Post', 'tierone');
		}
		echo $before_widget; ?>
				<h2 class="dt-sidebar-title"><?php echo esc_attr( $title ); ?></h2>
				<?php 
					$args = array( 'ignore_sticky_posts' => 1, 'posts_per_page' => $nop, 'post_status' => 'publish', 'orderby' => 'comment_count', 'order' => 'desc' );
					$popular = new WP_Query( $args );

					if ( $popular->have_posts() ) :
						while ( $popular->have_posts() ) : $popular->the_post(); ?>
						<div class="dt-site-pupolar-post dt-site-post clearfix">
							<figure class="dt-site-post-img col-xs-4 col-sm-4 col-md-4 site-no-pad">
                                <?php                                       
                                $src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'dt-featured-post-xxs-small' );
                                $first_image = '';
                                if ( !has_post_thumbnail() ) { $first_image = get_first_image(); }
                                
                                if( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url('dt-featured-post-xxs-small'); ?>" title="<?php echo get_the_title();?>"></a>
                                <?php elseif ( is_url_exist($first_image) ) : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="dt-featured-post-xxs-small"> src="<?php echo get_first_image(); ?>"/></a>
                                <?php else: ?>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-post-medium.jpg" alt="<?php the_title(); ?>" /></a>
                                <?php endif;?>

							</figure>
							<div class="dt-site-content col-xs-8 col-sm-8 col-md-8 site-no-pad-r">
								<a href="<?php echo esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><h3><?php echo wp_trim_words( get_the_title(), 7, '...' ); ?></h3></a>
								<div class="dt-post-meta">
									<span class="dt-post-calendar"><?php the_time('F j, Y'); ?></span>
								</div>
							</div>

						</div>
					<?php
						endwhile;
					endif;
				?>
		<?php
		echo $after_widget;	
	}


	public function form($instance){
        $instance = wp_parse_args(
            (array) $instance, array(
                'title'              => ''
            )
        );
		$nop = ! empty( $instance['nop'] ) ? absint( $instance['nop'] ) : 5;

		?>
		 <div class="dt-pupolar-post">
		 	<div class="dt-admin-input-wrap">
		 		<label for="<?php echo $this->get_field_id( 'title' );?>"><?php _e( 'Title:' , 'tierone'); ?></label>
        		<input type="text" id="<?php echo $this->get_field_id( 'title' );?>"  name="<?php echo $this->get_field_name( 'title' );?>"  value="<?php echo esc_attr( $instance['title'] ); ?>" placeholder="<?php _e('Popular Post Title','tierone');?>">
		 	</div>
		 	<div class="dt-admin-input-wrap">
		 		<label for="<?php echo $this->get_field_id( 'nop' ); ?>"><?php _e( 'Number of popular posts:', 'tierone' ); ?></label>
		 		<input id="<?php echo $this->get_field_id( 'nop' ); ?>" name="<?php echo $this->get_field_name( 'nop' ); ?>" type="text" value="<?php echo esc_attr( $nop ); ?>">
		 	</div>
		 </div>
	<?php	
	}

	public function update($new_instance, $old_instance){
		$instance = array();
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$instance['nop'] = ( ! empty( $new_instance['nop'] ) ) ? (int)( $new_instance['nop'] ) : '';
		return $instance;
	}

}

/**
* Show Landing Page or Any Site that you want
*/
class tierone_landing_page extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_landing_page',
			__('Tierone: Show Site', 'tierone'),
			array(
				'description' => __('Put Site to show in the fornt page', 'tierone')
			)
		);
	}

	public function widget( $args, $instance){
		$title         = isset( $instance['title'] ) ? $instance['title'] : '';
		$dt_image_path = isset( $instance['dt_image_path'] ) ? $instance['dt_image_path'] : '';
		$dt_link       = isset( $instance['dt_link'] ) ? $instance['dt_link'] : '';
		$dt_link_type  = isset( $instance['dt_link_type'] ) ? $instance['dt_link_type'] : '';
		$dt_link_alt  = isset( $instance['dt_link_alt'] ) ? $instance['dt_link_alt'] : '';
		$dt_desc       = isset(  $instance['dt_desc']  ) ? $instance['dt_desc']  : '';
		$display_url = preg_replace( "(^https?://)", "", $dt_link);

		if ( empty($title) ) {
			$title = __('', 'tierone');
		}

		if ( empty($dt_image_path) ) {
			$dt_image_path = '';
		}

		if ( empty($dt_link) ) {
			$dt_link = esc_url( home_url( '/' ) );
		}

		if ( $dt_link_type == "nofollow" ) {
			$dt_link_type = "nofollow";
		}else{
			$dt_link_type = "dofollow";
		}

		if (empty($dt_link_alt)) {
			$dt_link_alt = __('','tierone');
		}

		if (empty($dt_desc)) {
			$dt_desc = "";
		}
		?>
		<aside class="dt-show-site-wrap">
			<h2 class="dt-sidebar-title"><?php echo esc_attr( $title ); ?></h2>
			<div class="dt-sidebar-landing clearfix">
				<figure>
					<img src="<?php echo esc_url( $dt_image_path ); ?>" alt="<?php echo esc_attr( $title ); ?>">
				</figure>
				<div class="dt-site-content">
					<span><a href="<?php echo esc_url( $dt_link ); ?>"><?php echo $display_url; ?></a></span> <?php echo esc_textarea( $dt_desc ); ?>
				</div>
				<div class="pull-right">
					<a href="<?php echo esc_url($dt_link);?>" target="_blank" class="btn btn-primary">Visit</a>
				</div>
			</div>
		</aside>
		<?php
		
	}

	public function form($instance){
        $instance = wp_parse_args(
            (array) $instance, array(
                'title'              => '',
                'dt_link'           => '',
                'dt_image_path'          => '',
                'dt_link_type'      => '',
                'dt_link_alt'      => '',
                'dt_desc'      => ''
            )
        );
      ?>

		<div class="dt-show-site">
			<div class="dt-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'title' );?>"><?php _e( 'Title:' , 'tierone'); ?></label>
				<input type="text" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title')?>" value="<?php echo esc_attr( $instance['title'] ); ?>" placeholder="<?php _e('Site Title','tierone');?>">
			</div><!--.dt-admin-input-wrap-->
			<div class="dt-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'dt_link' );?>"><?php _e( 'Site Link:' , 'tierone'); ?></label>
				<input type="text" id="<?php echo $this->get_field_id('dt_link');?>" name="<?php echo $this->get_field_name('dt_link')?>" value="<?php echo esc_attr( $instance['dt_link'] ); ?>" placeholder="<?php _e('Site Link','tierone');?>">
			</div><!--.dt-admin-input-wrap-->
			<div class="dt-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'dt_link_alt' );?>"><?php _e( 'Link Alt:' , 'tierone'); ?></label>
				<input type="text" id="<?php echo $this->get_field_id('dt_link_alt');?>" name="<?php echo $this->get_field_name('dt_link_alt')?>" value="<?php echo esc_attr( $instance['dt_link_alt'] ); ?>" placeholder="<?php _e('Link Alternative','tierone');?>">
			</div><!--.dt-admin-input-wrap-->
			<div class="dt-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'dt_link_type' );?>"><?php _e( 'Link Type:' , 'tierone'); ?></label>
				<select id="<?php echo $this->get_field_id( 'dt_link_type' );?>" name="<?php echo $this->get_field_name( 'dt_link_type' );?>">
					<option value="dofollow" <?php selected( $instance['dt_link_type'], 'dofollow')?>>Do Follow</option>        			
					<option value="nofollow" <?php selected( $instance['dt_link_type'], 'nofollow')?>>No Follow</option>        			
				</select>
			</div><!--.dt-admin-input-wrap-->
			<div class="dt-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'dt_desc' );?>"><?php _e( 'Site Desc:' , 'tierone'); ?></label>
				<textarea id="<?php echo $this->get_field_id('dt_desc');?>" name="<?php echo $this->get_field_name('dt_desc')?>" placeholder="<?php _e('Site Description','tierone');?>"><?php echo esc_attr( $instance['dt_desc'] ); ?></textarea>
			</div><!--.dt-admin-input-wrap-->
        	<div class="dt-admin-input-wrap">
        		<label for="<?php echo $this->get_field_id( 'dt_image_path' );?>"><?php _e( 'Ads Image:' , 'tierone'); ?></label>
        		<?php
        			$dt_ads_img = $instance['dt_image_path'];
        			if ( !empty( $dt_ads_img ) ) { ?>
        				<img src="<?php echo $dt_ads_img; ?>"/>
        			<?php }else{ ?>
        				<img src="" />
        			<?php } ?>
        			<input type="hidden" class="dt-custom-media-image" id="<?php echo $this->get_field_id( 'dt_image_path' );?>" name="<?php echo $this->get_field_name( 'dt_image_path' );?>" value="<?php echo esc_attr( $instance['dt_image_path'] ); ?>" />
                	<input type="button" class="dt-img-upload dt-custom-media-button" id="custom_media_button" name="<?php echo $this->get_field_name( 'dt_image_path' ); ?>"  value="<?php _e( 'select Image', 'tierone' ); ?>" />
        	</div><!--.dt-admin-input-wrap-->

		</div>
      <?php
	}

	public function update($new_instance,$old_instance){


        $instance               = $old_instance;
        $instance['title']      = strip_tags( stripslashes( $new_instance['title'] ) );
        $instance['dt_link']   = strip_tags( stripslashes( $new_instance['dt_link'] ) );
        $instance['dt_link_type']  = strip_tags( $new_instance['dt_link_type'] );
        $instance['dt_image_path']  = strip_tags( $new_instance['dt_image_path'] );
        $instance['dt_link_alt']  = strip_tags( $new_instance['dt_link_alt'] );
        $instance['dt_desc']  = strip_tags( $new_instance['dt_desc'] );
        return $instance;
	}

}

/**
* Displays recent post, tags and comments in tabbed panel
*/
class tierone_tabbed_widget extends WP_Widget{
	public function __construct(){
		parent::__construct(
			'tierone_tabbed_widget',
			__('Tierone: Recent Posts, Tags, Comment', 'tierone'),
			array(
				'description' => __('Display your recent post , tags, and comment in tabbed panel','tierone')
			)
		);
	}


	public function widget($args,$instance){
		extract($args);

		$nop = ( ! empty($instance['$nop']) ) ? (int)($instance['$nop']) : 5;
		$nor = ( ! empty($instance['$nor']) ) ? (int)($instance['$nor']) : 5;
		$noc = ( ! empty( $instance['noc'] ) ) ? (int)( $instance['noc'] ) : 5;

		echo $before_widget; ?>

		<div class="widget widget-tabbed">
			<ul class="nav nav-pills">
				<li class="active"><a data-toggle="pill" href="#popular">Popular</a></li>
				<li><a data-toggle="pill" href="#recent">Recent</a></li>
				<li><a data-toggle="pill" href="#comment_tag">Comment</a></li>
			</ul>
			<div class="tab-content">
				<div id="popular" class="tab-pane fade in active">
					<?php
						$args = array( 'ignore_sticky_posts' => 1, 'posts_per_page' => $nop, 'post_status' => 'publish', 'orderby' => 'comment_count', 'order' => 'desc' );
						$popular = new WP_Query( $args );

						if ( $popular->have_posts() ) :
							while( $popular-> have_posts() ) : $popular->the_post(); 
					?>
							<div class="delta-tab-post">
								<figure class="delta-tab-thumbnail">
									<?php if ( has_post_thumbnail() ) { ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'tier-featured-xs', array('title' => get_the_title()) ); ?></a>
									<?php } else { ?>
										<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-post-small.jpg" alt="<?php the_title(); ?>" /></a>
									<?php } ?>
								</figure>
								<div class="delta-tab-details">
									<?php the_title( sprintf( '<h3 class="tab-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
									<p class="enter-meta"><?php tierone_posted_on(); ?></p>
								</div>
							</div>
					<?php 
							endwhile;
						endif;
					?>
				</div>
				<div id="recent" class="tab-pane fade">
					<?php
						$args = array( 'posts_per_page' => $nor, 'post_status' => 'publish', 'order' => 'desc' );
						query_posts($args);
						if ( have_posts() ) :
							while (have_posts()) : the_post();
					?>
							<div class="delta-tab-post">
								<figure class="delta-tab-thumbnail">
									<?php if ( has_post_thumbnail() ) { ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'tier-featured-xs', array('title' => get_the_title()) ); ?></a>
									<?php } else { ?>
										<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-post-small.jpg" alt="<?php the_title(); ?>" /></a>
									<?php } ?>
								</figure>
								<div class="delta-tab-details">
									<?php the_title( sprintf( '<h3 class="tab-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
									<p class="enter-meta"><?php tierone_posted_on(); ?></p>
								</div>
							</div>
					<?php 
							endwhile;
						endif;
					?>
				</div>
				<div id="comment_tag" class="tab-pane fade">
					<?php

						$avatar_size = 80;
						$comment_length = 90;
						$args = array(
							'number'       => $noc,
						);
						$comments_query = new WP_Comment_Query;
						$comments = $comments_query->query( $args );	
					
						if ( $comments ) {
							foreach ( $comments as $comment ) { ?>
								<div class="delta-container clearfix">
								<figure class="delta_avatar">
				                    <a href="<?php echo get_comment_link($comment->comment_ID); ?>">
										<?php echo get_avatar( $comment->comment_author_email, $avatar_size ); ?>     
				                    </a>                               
								</figure> 
								<span class="delta_comment_author"><?php echo get_comment_author( $comment->comment_ID ); ?> </span> - <span class="delta_comment_post"><?php echo get_the_title($comment->comment_post_ID); ?></span>
								<?php echo '<p class="delta-comment-body">' . $comment->comment_content . '</p>'; ?>
								</div>
							<?php }
						} else {
							echo 'No comments found.';
						}
					?>
				</div>
			</div>
		</div>

		<?php
		echo $after_widget;
	}

	public function form($instance){
		$nop =  ! empty($instance['$nor']) ? (int)($instance['$nop']) : 5;
		$nor =  ! empty($instance['$nor']) ? (int)($instance['$nor']) : 5;
		$noc =  ! empty($instance['$noc']) ? (int)($instance['$noc']) : 5;
		?>
		<div class="delta-tabbed-widget">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'nop' ); ?>"><?php _e( 'No. Popular Posts:', 'tierone' ); ?></label>
				<input id="<?php echo $this->get_field_id( 'nop' ); ?>" name="<?php echo $this->get_field_name( 'nop' ); ?>" type="text" value="<?php echo esc_attr( $nop ); ?>"  placeholder="<?php _e('Number of popular post to show','tierone'); ?>">
			</div><!--.dt-admin-input-wrap-->
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'nor' ); ?>"><?php _e( 'No. Recent Posts:', 'tierone' ); ?></label>
				<input id="<?php echo $this->get_field_id( 'nor' ); ?>" name="<?php echo $this->get_field_name( 'nor' ); ?>" type="text" value="<?php echo esc_attr( $nor ); ?>" placeholder="<?php _e('Number of recent post to show','tierone'); ?>">
			</div>
 			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'noc' ); ?>" ><?php _e( 'No. Comments:','tierone' ); ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'noc' ); ?>" name="<?php echo $this->get_field_name( 'noc' ); ?>" value="<?php echo esc_attr( $noc ); ?>" placeholder="<?php _e('Number of comments to show','tierone'); ?>">
			</div> 
		</div>
		<?php
	}

	public function update($new_instance, $old_instance){

		$instance = array();
		$instance['nop'] = ( ! empty( $new_instance['nop'] ) ) ? (int)( $new_instance['nop'] ) : '';
		$instance['nor'] = ( ! empty( $new_instance['nor'] ) ) ? (int)( $new_instance['nor'] ) : '';
		$instance['noc'] = ( ! empty( $new_instance['noc'] ) ) ? (int)( $new_instance['noc'] ) : '';
		return $instance;
	}
}

/**
* Youtube Video
*
*/
class tierone_youtube extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_youtube',
			__( 'Tierone Youtube', 'tierone' ),
			array(
				'description' => __( 'Display Youtube', 'tierone' )
			)
		);
	}
	public function widget($args,$instance){
		$title 	= isset( $instance['title'] ) ? $instance['title'] : '';
		$url 	= isset( $instance['url'] )   ? $instance['url'] : '';
		$tag_line = isset( $instance['tag_line'] ) ? $instance['tag_line'] : '';

		if ( empty( $title ) ) {
			$title = __( 'Youtube Video', 'tierone' );
		}

		if ( empty( $url ) ) {
			$url   = __( 'ytsXgBcJxX8', 'tierone' );
		}
		?>
		<aside class="detla-youtube-box widget">
			<h2 class="widget-title"><?php echo esc_attr( $title ); ?></h2>
			<iframe width="100%" height="100%" src="http://www.youtube.com/embed/<?php echo $url; ?>" frameborder="0" allowfullscreen></iframe>
			<p class="delta-ams-content"><?php echo esc_attr($tag_line); ?></p>
		</aside> 
		<?php
	}

	public function form($instance){
		$instance = wp_parse_args(
			(array) $instance ,array(
				'title'		=> '',
				'url'		=>  'ytsXgBcJxX8',
				'tag_line'  => '',
			)
		);
	?>
		<div class="youtube-widget">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:','tierone' ); ?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' );?>"  value="<?php echo esc_attr( $instance['title'] ); ?>"  placeholder="<?php _e('Video Title','tierone');?>">
			</div>
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id('url'); ?>"><?php _e( 'Url:','tierone' ); ?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' );?>"  value="<?php echo esc_attr( $instance['url'] ); ?>"  placeholder="<?php _e('Video URL','tierone');?>">
			</div>
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id('tag_line'); ?>"><?php _e( 'Tag Line:','tierone' ); ?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'tag_line' ); ?>" name="<?php echo $this->get_field_name( 'tag_line' );?>"  value="<?php echo esc_attr( $instance['tag_line'] ); ?>"  placeholder="<?php _e('Video Tag Line','tierone');?>">
			</div>
		</div>
	<?php
	}

	public function update($new_instance,$old_instance){
		$instance 	= $old_instance;
		$instance['title']	= strip_tags( stripcslashes( $new_instance['title']  )  );
		$instance['url']	= strip_tags( stripcslashes( $new_instance['url']  )  );
		$instance['tag_line']	= strip_tags( stripcslashes( $new_instance['tag_line']  )  );

		return $instance;
	}
}

/**
* Tierone Layout A
*/
class tierone_layout_a extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_layout_a',
			__('Tierone: Layout A', 'tierone'),
			array(
				'description' => __('Posts display layout A for recently published post','tierone')
			)
		);
	}

	public function widget($args,$instance){
		$title 	= isset( $instance['title'] ) ? $instance['title'] : '';
		$category = isset( $instance['category'] ) ? $instance['category'] : '' ;

		$delta_layout_a = new WP_Query( array(
            'post_type'         => 'post',
            'category__in'      => $category,
			'posts_per_page' => 2,
		) );
		?>
		<div class="category-delta-a">
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="widget-title"><?php echo esc_html($title); ?></h2>
			<?php endif; ?>
			<div class="row">
				<?php if ( $delta_layout_a->have_posts() ) : ?>
					<?php while( $delta_layout_a->have_posts() ) : $delta_layout_a->the_post(); ?>
						<div class="delta-post">
							<div class="col-md-5">
								<figure class="delta-post-img">
									<?php										
									$src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'tier-featured' );
									$first_image = '';
									if ( !has_post_thumbnail() ) { $first_image = get_first_image(); }
									
									if( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url('tier-featured'); ?>" title="<?php echo get_the_title();?>"></a>
									<?php elseif ( is_url_exist($first_image) ) : ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="dt-featured-post-t5" src="<?php echo get_first_image(); ?>"/></a>
									<?php else: ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-post-medium.jpg" alt="<?php the_title(); ?>" /></a>
									<?php endif;?>
								</figure>
							</div>
							<div class="col-md-7">
								<div class="delta-content">
									<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ,'</a></h3>' ); ?><!--Title of the post-->
									<div class="delta-post-meta">
										<?php tierone_posted_on(); ?>
									</div><!--Title of the post-->
									<div class="delta-post-desc">
										<?php $excerpt = get_the_excerpt();
		                                $limit   = "350";
		                                $pad     = "...";

		                                if( strlen( $excerpt ) <= $limit ) {
		                                    echo esc_html( $excerpt );
		                                } else {
		                                $excerpt = substr( $excerpt, 0, $limit ) . $pad;
		                                    echo esc_html( $excerpt );
		                                } ?>
									</div><!--delta-post-desc-->
								</div>
							</div>
							<span class="clearfix"></span>
						</div>
					<?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>

		<?php
	}


	public function form($instance){
		$instance = wp_parse_args(
			(array) $instance, array(
                'title'              => '',
                'category'           => '',
                'no_of_posts'        => '2'

			)
		);
		?>
		<div class="delta-layout-a">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo _e( 'Title:','tierone' ); ?></label>
				<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" >
			</div><!--delta-admin-input-wrap-->
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php echo _e( 'Category:','tierone' ); ?></label>
				<select id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>" >
					<?php foreach (get_terms( 'category','parent=0&hide_empty=0' ) as $term) { ?>
							<option <?php selected( $instance['category'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>" ><?php echo $term->name; ?></option>
					<?php } ?>					
				</select>
			</div><!--delta-admin-input-wrap-->
		</div>

		<?php
	}

	public function update($new_instance,$old_instance){
		$instance 	= $old_instance;
		$instance['title'] = strip_tags( stripslashes( $new_instance[ 'title' ] ) );
		$instance['category'] = $new_instance[ 'category' ];
		return $instance;
	}

}

/**
* Tierone Layout B
*/

class tierone_layout_b extends WP_Widget{
	
	public function  __construct(){
		parent::__construct(
			'tierone_layout_btierone_layout_b',
			__('Tierone: Layout B', 'tierone'),
			array(
				'description'	=> __('Posts display layout B for recently published post','tierone')
			)
		);
	}

	public function widget($args,$instance){
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$category = isset( $instance['category'] ) ? $instance['category'] : '';

		$delta_layout_b = new WP_Query(
			array(
				'post_type' => 'post',
				'category__in' => $category,
				'posts_per_page' => 3
			)
		);
		?>
		<div class="category-delta-b">
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="widget-title"><?php echo esc_html($title); ?></h2>
			<?php endif; ?>
			<?php if ( $delta_layout_b->have_posts() ) : ?>
				<div class="row">
					<?php $count = 1; ?>
					<?php while( $delta_layout_b->have_posts() ) : $delta_layout_b->the_post(); ?>

						<?php if ( $count == 1 ) : ?>
						<div class="col-md-5">
							<div class="delta-post">
								<figure class="delta-post-img">
									<?php										
									$src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'tier-featured-post-ba' );
									$first_image = '';
									if ( !has_post_thumbnail() ) { $first_image = get_first_image(); }
									
									if( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url('tier-featured-post-ba'); ?>" title="<?php echo get_the_title();?>"></a>
									<?php elseif ( is_url_exist($first_image) ) : ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="tier-featured-post-ba" src="<?php echo get_first_image(); ?>"/></a>
									<?php else: ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-post-medium.jpg" alt="<?php the_title(); ?>" /></a>
									<?php endif;?>
								</figure>
								<div class="delta-content">											
									<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ,'</a></h3>' ); ?><!--Title of the post-->
									<div class="delta-post-meta">
										<?php tierone_posted_on(); ?>
									</div><!--Title of the post-->
								</div>
							</div><!--delta-post-->
						</div><!--col-md-5-->
						<?php else: ?>
						<div class="col-md-7">
							<div class="row">
								<div class="delta-post delta-side">
								    <div class="col-md-5">
										<figure class="delta-post-img">
											<?php										
											$src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'tier-featured-post-bc' );
											$first_image = '';
											if ( !has_post_thumbnail() ) { $first_image = get_first_image(); }
											
											if( has_post_thumbnail() ) : ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url('tier-featured-post-bc'); ?>" title="<?php echo get_the_title();?>"></a>
											<?php elseif ( is_url_exist($first_image) ) : ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="tier-featured-post-ba" src="<?php echo get_first_image(); ?>"/></a>
											<?php else: ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-post-medium.jpg" alt="<?php the_title(); ?>" /></a>
											<?php endif;?>
										</figure>
									</div>
									<div class="col-md-7">
										<div class="delta-side-content">
											<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ,'</a></h3>' ); ?><!--Title of the post-->
											<div class="delta-post-meta">
												<?php tierone_posted_on(); ?>
											</div><!--Title of the post-->
										</div>
									</div>
									<span class="clearfix"></span>
								</div><!--delta-post-->
							</div><!--row-->
						</div><!--col-md-7-->


					<?php 
						endif;

						$count++; //count
						endwhile; ?>	
					<?php wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>
		</div>
		<?php
	}
	public function form($instance){
		$instance = wp_parse_args(
			(array) $instance, array(
                'title'              => '',
                'category'           => '',
                'no_of_posts'        => '3'
			)
		);
		?>
			<div class="delta-layout-b">
				<div class="delta-admin-input-wrap">
					<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:','tierone' ); ?></label>
					<input type="text" id="<?php echo $this->get_field_id('title'); ?>"  name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_html( $instance['title'] ); ?>" >
				</div>
	            <div class="delta-admin-input-wrap">
	                <label for="<?php echo $this->get_field_id( 'category' ); ?>"><strong><?php _e( 'Category', 'tierone' ); ?></strong></label>
	                <select id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">
	                    <?php foreach(get_terms('category','parent=0&hide_empty=0') as $term) { ?>
	                        <option <?php selected( $instance['category'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
	                    <?php } ?>
	                </select>
	            </div><!-- .dt-admin-input-wrap -->
			</div>
		<?php
	}

	public function update($new_instance,$old_instance){
		$instance 	= $old_instance;
		$instance['title'] = strip_tags( stripslashes( $new_instance[ 'title' ] ) );
		$instance['category'] = $new_instance[ 'category' ];
		return $instance;
	}

}


/**
* Tierone Layout C
*/
class tierone_layout_c extends WP_Widget{
	public function  __construct(){
		parent::__construct(
			'tierone_layout_c',
			__('Tierone: Layout C', 'tierone'),
			array(
				'description'	=> __('Posts display layout 2 for recently published post randomly','tierone')
			)
		);
	}

	public function widget($args,$instance){
		global $post;
		$title 			= isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
		$category 		= isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : '';
		$no_of_post 	= isset( $instance[ 'no_of_post' ] ) ? $instance[ 'no_of_post' ] : '';
		$random_posts 		= isset( $instance[ 'random_posts' ] ) ? $instance[ 'random_posts' ] : '';

		if ( $random_posts == "on") {
			$random_posts = "rand";
		}

		$delta_layout_c = new WP_Query(
			array(
			'post_type' 	 => 'post',
			'category__in' 	 => $category,
			'posts_per_page' => $no_of_post,
			'orderby'		 => $random_posts
			)
		);
		?>
		<div class="category-delta-c">
			<?php if( $delta_layout_c->have_posts() ) : ?>
				<?php if ( ! empty( $title ) ) : ?>
					<h2 class="widget-title"><?php echo esc_html($title); ?></h2>
				<?php endif; ?>
				<div class="row">
					<?php while( $delta_layout_c->have_posts() ) : $delta_layout_c->the_post(); ?>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="delta-post">
								<figure class="delta-post-img">




									<?php if ( has_post_thumbnail() ) { ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'tier-featured', array('title' => get_the_title()) ); ?></a>
									<?php } else { ?>
										<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-post-small.jpg" alt="<?php the_title(); ?>" /></a>
									<?php } ?>
									</figure>
								<div class="delta-content">											
									<!-- <?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ,'</a></h3>' ); ?> --><!--Title of the post-->
									<h3><a href="<?php echo esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></a></h3>
									<div class="delta-post-meta">
										<span class="posted-on"><i class="fa fa-calendar"></i> <?php the_time ( get_option ( 'date_format' ) ); ?></span>
									</div><!--Title of the post-->
								</div>
							</div>
						</div>
					<?php endwhile;?>
				</div>
			<?php endif; ?>
		</div>

		<?php
	}

	public function form($instance){

		$instance = wp_parse_args(
			(array) $instance, array(
				'title'       => '',
				'category'    => '',
				'no_of_post'  => '6'
			)
		);
		?>
		<div class="delta-layout-c">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:','tierone' ); ?></label>
				<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" >
			</div>
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'category' ); ?>"><strong><?php _e( 'Category', 'tierone' ); ?></strong></label>
                <select id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">
                    <?php foreach(get_terms('category','parent=0&hide_empty=0') as $term) { ?>
                        <option <?php selected( $instance['category'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                    <?php } ?>
                </select>
            </div><!-- .dt-admin-input-wrap -->
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'no_of_post' ); ?>"><?php _e( 'No. of Posts', 'tierone' ); ?></label>
                <input type="number" id="<?php echo $this->get_field_id( 'no_of_post' ); ?>" name="<?php echo $this->get_field_name( 'no_of_post' ); ?>" value="<?php echo esc_attr( $instance['no_of_post'] ); ?>">
            </div><!-- .dt-admin-input-wrap -->
            <div class="delta-admin-input-wrap">
        		<label for="<?php echo $this->get_field_id('random_posts')?>"><?php _e('Random Posts:','tierone');?></label>
        		<input type="checkbox" <?php checked( $instance[ 'random_posts' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'random_posts' ); ?>" name="<?php echo $this->get_field_name( 'random_posts' ); ?>" />
            </div><!-- .dt-admin-input-wrap -->
		</div>
		<?php
	}

	public function update($new_instance,$old_instance){
		$instance 	= $old_instance;
		$instance['title'] = strip_tags( stripslashes( $new_instance[ 'title' ] ) );
		$instance['category'] = $new_instance[ 'category' ];
        $instance['no_of_post'] = strip_tags( stripslashes( $new_instance['no_of_post'] ) );
        $instance['random_posts']    = $new_instance['random_posts'];
		return $instance;
	}
}

/**
* Tierone Layout 4 - Recent Post
*/
class tierone_layout_d extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_layout_d',
			__('Tierone: Layout D','tierone'),
			array(
				'description'	=> __('Posts display layout D for recently published post','tierone')
			)
		);
	}

	public function widget($args,$instance){
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$category = isset( $instance[ 'category' ] ) ? $instance['category'] : '';
		$no_of_post = isset( $instance['no_of_post'] ) ? $instance['no_of_post'] : '';
 
		$delta_layout_d = new WP_Query(
			array(
				'post_type' => 'post',
				'category__in' => $category,
				'posts_per_page' => $no_of_post
			)
		);
		?>

		<div class="category-delta-d">
			<?php if ( $delta_layout_d->have_posts() ) : ?>
				<?php if ( ! empty( $title ) ) : ?>
					<h2 class="widget-title"><?php echo esc_html($title); ?></h2>
				<?php endif; ?>
				<div class="row">
					<?php 
						$count_1 = 1;
						while ( $delta_layout_d->have_posts() ) : $delta_layout_d->the_post();

						if ( $count_1 == 1 ) :
					?>
						<div class="delta-post">
							<div class="col-md-6">
								<figure class="delta-post-img">
									<?php										
									$src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'tier-featured-medium' );
									$first_image = '';
									if ( !has_post_thumbnail() ) { $first_image = get_first_image(); }
									
									if( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url('tier-featured-medium'); ?>" title="<?php echo get_the_title();?>"></a>
									<?php elseif ( is_url_exist($first_image) ) : ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="tier-featured-medium" src="<?php echo get_first_image(); ?>"/></a>
									<?php else: ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-image-d.jpg" alt="<?php the_title(); ?>" /></a>
									<?php endif;?>
								</figure>
							</div>
							<div class="col-md-6">
								<div class="delta-content">
									<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ,'</a></h3>' ); ?><!--Title of the post-->
									<div class="delta-post-meta">
										<?php tierone_posted_on(); ?>
									</div><!--Title of the post-->
									<div class="delta-post-desc">
										<?php $excerpt = get_the_excerpt();
	                                    $limit   = "390";
	                                    $pad     = "...";

	                                    if( strlen( $excerpt ) <= $limit ) {
	                                        echo esc_html( $excerpt );
	                                    } else {
	                                    $excerpt = substr( $excerpt, 0, $limit ) . $pad;
	                                        echo esc_html( $excerpt );
	                                    }
	                                    ?>
									</div><!--delta-post-desc-->
								</div>
							</div>
							<span class="clearfix"></span>
						</div><!--first Post-->

					<?php  else : ?>
						<div class="col-md-6 delta-second-post">
							<figure class="delta-post-img">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'tier-featured-d', array('title' => get_the_title()) ); ?></a>
							<?php } else { ?>
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-image-d.jpg" alt="<?php the_title(); ?>" /></a>
							<?php } ?>
							</figure>
							<div class="delta-content">
								<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ,'</a></h3>' ); ?><!--Title of the post-->
								<div class="delta-post-meta">
									<?php tierone_posted_on(); ?>
								</div><!--Title of the post-->
							</div>
						</div>
					<?php
						endif;
						$count_1++;
						endwhile;
					?>
				</div>
			<?php else : ?>
				<p><?php _e('Sorry, no posts found in selected category','tierone'); ?></p>
			<?php endif; ?>
		</div>
	<?php }
	public function form($instance){

		$instance = wp_parse_args(
			(array) $instance, array(
				'title'       => '',
				'category'    => '',
				'no_of_post'  => '3'
			)
		);
		?>
		<div class="delta-layout-d">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:','tierone' ); ?></label>
				<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" >
			</div>
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'category' ); ?>"><strong><?php _e( 'Category', 'tierone' ); ?></strong></label>
                <select id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">
                    <?php foreach(get_terms('category','parent=0&hide_empty=0') as $term) { ?>
                        <option <?php selected( $instance['category'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                    <?php } ?>
                </select>
            </div><!-- .dt-admin-input-wrap -->
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'no_of_post' ); ?>"><?php _e( 'No. of Posts', 'tierone' ); ?></label>
                <input type="number" id="<?php echo $this->get_field_id( 'no_of_post' ); ?>" name="<?php echo $this->get_field_name( 'no_of_post' ); ?>" value="<?php echo esc_attr( $instance['no_of_post'] ); ?>">
            </div><!-- .dt-admin-input-wrap -->
		</div>
		<?php
	}

	public function update($new_instance,$old_instance){
		$instance  	= $old_instance;
		$instance['title']  =  strip_tags( stripslashes( $new_instance['title'] ) );
		$instance['category'] = $new_instance['category'];
		$instance['no_of_post'] = $new_instance['no_of_post'];
		return $instance;
	}

}

/**
* Tierone Layout 5 - Random Recent Posts
*/
class tierone_layout_e extends WP_Widget{
	
	public function __construct(){
		parent::__construct(
			'tierone_layout_e',
			__('Tierone: Layout E - Recent Post Randomly','tierone'),
			array(
				'description'	=> __('Posts display layout E for recently published post','tierone')
			)
		);
	}

	public function widget($args,$instance){
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		$category = isset( $instance[ 'category' ] ) ? $instance['category'] : '';
		$no_of_post = isset( $instance['no_of_post'] ) ? $instance['no_of_post'] : '';
 
		$delta_layout_e = new WP_Query(
			array(
				'post_type' => 'post',
				'category__in' => $category,
				'posts_per_page' => $no_of_post
			)
		);
	?>
	<div class="category-delta-e">
		<?php if ( $delta_layout_e->have_posts() ) : ?>
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="widget-title"><?php echo esc_html($title); ?></h2>
			<?php endif; ?>
				<?php 
					$count_1 = 1;
					while ( $delta_layout_e->have_posts() ) : $delta_layout_e->the_post();
					if ( $count_1 == 1 ) :
				?>
				<div class="cat-delta-e-box">
					<figure class="delta-e-box">
						<?php if ( has_post_thumbnail() ) { 
							$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
						?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><div class="delta-e-img-wrap" style="background-image: url('<?php echo $feat_image_url; ?>');"></div></a>
						<?php } else { ?>
							 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><div class="delta-e-img-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-image-d.jpg');" ></div></a>
						<?php } ?>
					</figure>
					<div class="delta-overlay-post">
						<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ,'</a></h3>' ); ?><!--Title of the post-->
						<div class="delta-post-meta">
							<?php tierone_posted_on(); ?>
						</div><!--Title of the post-->
						<div class="delta-post-desc">
							<?php $excerpt = get_the_excerpt();
                            $limit   = "130";
                            $pad     = "...";

                            if( strlen( $excerpt ) <= $limit ) {
                                echo esc_html( $excerpt );
                            } else {
                            $excerpt = substr( $excerpt, 0, $limit ) . $pad;
                                echo esc_html( $excerpt );
                            }
                            ?>
						</div><!--delta-post-desc-->
					</div>
				</div>
				<div class="row">
				<?php else: ?>
					<div class="col-md-3">
						<div class="delta-post">
							<figure class="delta-post-img">
								<!-- <a href="#!"><img src="http://placehold.it/311x228"></a> -->
								<?php if ( has_post_thumbnail() ) { ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'tier-featured-post-ba', array('title' => get_the_title()) ); ?></a>
								<?php } else { ?>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/img/default/dt-featured-image.jpg" alt="<?php the_title(); ?>" /></a>
								<?php } ?>
							</figure>
							<div class="delta-content">											
								<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ,'</a></h3>' ); ?><!--Title of the post-->
							</div>
						</div><!--delta-post-->
					</div>
				<?php endif;?>
				<?php
					$count_1++;
					endwhile;
				?>
				</div>
		<?php else : ?>
			<p><?php _e('Sorry, no posts found in selected category','tierone'); ?></p>
		<?php endif; ?>
	</div>
	<?php
	}

	public function form($instance){

		$instance = wp_parse_args(
			(array) $instance, array(
				'title'       => '',
				'category'    => '',
				'no_of_post'  => '5'
			)
		);
		?>
		<div class="delta-layout-e">
			<div class="delta-admin-input-wrap">
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:','tierone' ); ?></label>
				<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" >
			</div>
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'category' ); ?>"><strong><?php _e( 'Category', 'tierone' ); ?></strong></label>
                <select id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">
                    <?php foreach(get_terms('category','parent=0&hide_empty=0') as $term) { ?>
                        <option <?php selected( $instance['category'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                    <?php } ?>
                </select>
            </div><!-- .dt-admin-input-wrap -->
            <div class="delta-admin-input-wrap">
                <label for="<?php echo $this->get_field_id( 'no_of_post' ); ?>"><?php _e( 'No. of Posts', 'tierone' ); ?></label>
                <input type="number" id="<?php echo $this->get_field_id( 'no_of_post' ); ?>" name="<?php echo $this->get_field_name( 'no_of_post' ); ?>" value="<?php echo esc_attr( $instance['no_of_post'] ); ?>">
            </div><!-- .dt-admin-input-wrap -->
		</div>
		<?php
	}

	public function update($new_instance,$old_instance){
		$instance  	= $old_instance;
		$instance['title']  =  strip_tags( stripslashes( $new_instance['title'] ) );
		$instance['category'] = $new_instance['category'];
		$instance['no_of_post'] = $new_instance['no_of_post'];
		return $instance;
	}
}


function tierone_register_widgets(){
	register_widget('tierone_social_media');
	register_widget('tierone_meta_box');
	register_widget('tierone_custom_box');
	register_widget('tierone_ads_300x250');
	register_widget('tierone_ads_727x90');
	register_widget('tierone_banner_promo_ads');
	register_widget('tierone_ticker');
	register_widget('tierone_slider');
	register_widget('cus_archive');
	register_widget('tierone_featured_post');
	register_widget('tierone_popular_post');
	register_widget('tierone_landing_page');
	register_widget('tierone_tabbed_widget');
	register_widget('tierone_youtube');	
	register_widget('tierone_layout_a');
	register_widget('tierone_layout_b');
	register_widget('tierone_layout_c');
	register_widget('tierone_layout_d');
	register_widget('tierone_layout_e');
}

add_action('widgets_init','tierone_register_widgets');