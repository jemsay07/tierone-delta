<?php
if ( !defined( 'ABSPATH' ) ) :
 exit; // Exit if accessed directly
endif;

/**
* Tierone Theme Customizer.
*
* @package tierone
*/
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tierone_customize_register( $wp_customize ){
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	* Header Settings
	*/
	$wp_customize->add_panel( 
		'tierone_header_settings',
		array(
			'title' => __( 'Header Settings', 'tierone' ),
			'description' => __( 'Use this panel to set your header settings', 'tierone' ),
			'priority'	  => 25,
			'capability'  => 'edit_theme_options'
		) 
	);

	
	/**
	* Related Post
	*/
	$wp_customize->add_section(
		'tierone_related_posts_section',
		array(
			'priority'		=> 100,
			'title'			=> __( 'Related Post' , 'tierone' )
		)
	);
	$wp_customize->add_setting( 
		'tierone_related_posts_setting',
		array(
			'default'		=> 0,
			'capability'	=> 'edit_theme_options',
			'sanitize_callback'	=> 'tierone_checkbox_sanitize'
		)
	);
	$wp_customize->add_control( 
		'tierone_related_posts',
		array(
			'type'  		=> 'checkbox',
			'label'			=> __( 'Check to activate the related posts' , 'tierone' ),
			'section'		=> 'tierone_related_posts_section',
			'settings'		=> 'tierone_related_posts_setting'
			
		)
	);

	/**
	* Share Social Media
	*/
	$wp_customize->add_section(
		'tierone_share_social_media_section',
		array(
			'priority'		=> 100,
			'title'			=> __( 'Share Social Media' , 'tierone')
		)
	);

	$wp_customize->add_setting( 
		'tierone_share_social_media_setting',
		array(
			'default'		=> '1',
			'capability'	=> 'edit_theme_options',
			'sanitize_callback' => 'tierone_checkbox_sanitize'
		)
	);

	$wp_customize->add_control( 
		'tierone_social_media_sharing',
		array(
			'type'			=> 'checkbox',
			'label'			=> __( 'Check to enable the Social Sharing' , 'tierone' ),
			'section'		=> 'tierone_share_social_media_section',
			'settings'		=> 'tierone_share_social_media_setting'
		)
	);


	/**
	* Primary Color
	*/
	$wp_customize->add_setting(
		'tierone_primary_color',
		array(
			'default' 			     => '#2e84ff',
			'capability' 			 => 'edit_theme_options',
			'sanitize_callback'		 => 'tierone_color_sanitize',
			'sanitize_js_callback'   => 'tierone_color_escaping_sanitize'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'tierone_primary_color',
			array(
				'label' 		=> __( 'Primary Color', 'tierone' ),
				'section' 		=> 'colors',
				'settings' 		=> 'tierone_primary_color'
			)
		)
	);

	/**
	* Checkbox Sanitize
	*/
	function  tierone_checkbox_sanitize( $input ){
		if( $input == 1 ){
			return 1;
		}else{
			return '';
		}
	}

	// Color Escape Sanitize
	function tierone_color_escaping_sanitize( $input ) {
		$input = esc_attr( $input );
		return $input;
	}

	/**
	* Layout Sanitize
	*/
	function tierone_site_layout_sanitize(){
		$valid_keys = array(
			'boxed_layout' => __( 'Boxed Layout', 'tierone' ),
			'wide_layout'  => __( 'Wide Layout', 'tierone' )
		);

		if ( array_key_exists( $input, $valid_keys ) ) {
			return $input;
		} else {
			return '';
		}
	}

	/**
	* Page Layout Sanitize
	*/
	function tierone_page_layout_sanitize( $input ) {
		$valid_keys = array(
			'right_sidebar' => __( 'Right Sidebar', 'tierone'),
			'left_sidebar'  => __( 'Left Sidebar', 'tierone' ),
			'full_width'  	=> __( 'Full Width', 'tierone' )
		);

		if ( array_key_exists( $input, $valid_keys ) ) {
			return $input;
		} else {
			return '';
		}
	}


	/**
	* Number Integer
	*/
	function tierone_sanitize_integer( $input ) {
		return absint( $input );
	}

}

add_action( 'customize_register', 'tierone_customize_register' );

/**
* Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
*/

function tierone_customise_prev_js(){
	wp_enqueue_script( 'tierone_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20161102', true );
}
add_action( 'wp_enqueue_scripts', 'tierone_customise_prev_js' );


?>