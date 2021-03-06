<?php
/**
 * Sneaker Head Theme Customizer
 *
 * @package Sneaker_Head
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sh_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'sh_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'sh_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_setting(	'sh_logo_alt' );
	$wp_customize->add_control( new WP_Customize_Media_Control($wp_customize,'sh_logo_alt', array(
		'label' 		=>	'Logo(Alt)',
		'section'  		=> 	'title_tagline',
		'priority' 		=>  9,
	 )  ) );


	$wp_customize->add_panel('sh_social_media', array(
		'title' => esc_html__( 'Social media', 'sh' ),	
		));
	

	$wp_customize->add_section('sh_facebook', array(
	'title' => esc_html__( 'Facebook', 'sh' ),	
	'panel' => 'sh_social_media'
 	));

	$wp_customize->add_setting(	'sh_facebook_title' );

	$wp_customize->add_control(	'sh_facebook_title', array(
		'label' 		=>	'title',
		'description' 	=> 'Enter Your Link title ',
		'section'  		=> 	'sh_facebook',
	 ) );

	$wp_customize->add_setting(	'sh_facebook_url' );

	$wp_customize->add_control(	'sh_facebook_url', array(
		'label' 		=>	'Url',
		'description' 	=> 'Enter Your Facebook Profile Link ',
		'type'  		=> 	'url',
		'section'  		=> 	'sh_facebook',
	 ) );

	 $wp_customize->add_setting(	'sh_facebook_icon' );

	 $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize,'sh_facebook_icon', array(
		'label' 		=>	'Icon',
		'section'  		=> 	'sh_facebook',
	 )  ) );

	 $wp_customize->add_section('sh_twitter', array(
		'title' => esc_html__( 'Twitter', 'sh' ),	
		'panel' => 'sh_social_media'
		));

	$wp_customize->add_setting('sh_twitter_title' );

	$wp_customize->add_control(	'sh_twitter_title', array(
		'label' 		=>	'Title',
		'description' 	=> 'Enter Your Link Title',
		'section'  		=> 	'sh_twitter',
	 ) );

	$wp_customize->add_setting('sh_twitter_url' );

	$wp_customize->add_control(	'sh_twitter_url', array(
		'label' 		=>	'Url',
		'description' 	=> 'Enter Your twitter Profile Link ',
		'type'  		=> 	'url',
		'section'  		=> 	'sh_twitter',
	 ) );

	 $wp_customize->add_setting('sh_twitter_icon' );

	 $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize,'sh_twitter_icon', array(
		'label' 		=>	'Icon',
		'section'  		=> 	'sh_twitter',
	 )  ) );

	 $wp_customize->add_section('sh_instagram', array(
		'title' => esc_html__( 'Instagram', 'sh' ),	
		'panel' => 'sh_social_media'
		));

	$wp_customize->add_setting('sh_instagram_title' );

	$wp_customize->add_control(	'sh_instagram_title', array(
		'label' 		=>	'Title',
		'description' 	=> 'Enter Your Link Title',
		'section'  		=> 	'sh_instagram',
	 ) );

	$wp_customize->add_setting('sh_instagram_url' );

	$wp_customize->add_control(	'sh_instagram_url', array(
		'label' 		=>	'Url',
		'description' 	=> 'Enter Your instagram Profile Link ',
		'type'  		=> 	'url',
		'section'  		=> 	'sh_instagram',
	 ) );

	 $wp_customize->add_setting('sh_instagram_icon' );

	 $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize,'sh_instagram_icon', array(
		'label' 		=>	'Icon',
		'section'  		=> 	'sh_instagram',
	 )  ) );
}
add_action( 'customize_register', 'sh_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function sh_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function sh_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sh_customize_preview_js() {
	wp_enqueue_script( 'sh-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'sh_customize_preview_js' );
