<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'widgets' );

function my_custom_menu() {
    register_nav_menus(
        array(
            'header_menu' => _( 'Header menu' ),
            'footer_menu1' =>_('Footer Menu1'),
			'footer_menu2' =>_('Footer Menu2'),
			'footer_menu3' =>_('Footer Menu3')
        )
    );
}
add_action( 'init', 'my_custom_menu' );


function theme_customize_section($wp_customize)
{
	//Header section

	$wp_customize->add_section( 'header_section' , array(
		'title'      => __( 'Header Section', 'themename' ),
		'priority'   => 30, 
		));

		$wp_customize->add_setting("header_logo", [
			"default" => "",
			'sanitize_callback' => 'esc_url_raw',
		]);

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
			'label'    => __( 'Header Logo', 'themename' ),
			'section'  => 'header_section',
			
		) ) );


		$wp_customize->add_setting("phone_logo", [
			"default" => "",
			'sanitize_callback' => 'esc_url_raw',
		]);

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'phone_logo', array(
			'label'    => __( 'Phone Logo', 'themename' ),
			'section'  => 'header_section',
			
		) ) );


		$wp_customize->add_setting("phone_text", [
			"default" => "",
			
		]);

		$wp_customize->add_control('phone_text', array(
			'label'    => __( 'Phone Text', 'themename' ),
			'section'  => 'header_section',
			'type'=>'text'
			
		) );

   //Footer section

   $wp_customize->add_section( 'footer_section' , array(
	'title'      => __( 'Footer Section', 'themename' ),
	'priority'   => 30, 
	));


	$wp_customize->add_setting("footer_address", [
		"default" => "",
		'sanitize_callback' => 'wp_kses_post',
		
	]);

	$wp_customize->add_control('footer_address', array(
		'label'    => __( 'Footer Address', 'themename' ),
		'section'  => 'footer_section',
		'type'=>'textarea'
		
	) );

	$wp_customize->add_setting("conatct_text", [
		"default" => "",
		
	]);

	$wp_customize->add_control('conatct_text', array(
		'label'    => __( 'Conatct Text', 'themename' ),
		'section'  => 'footer_section',
		'type'=>'text'
		
	) );

	$wp_customize->add_setting("conatct_number", [
		"default" => "",
		
	]);

	$wp_customize->add_control('conatct_number', array(
		'label'    => __( 'Conatct Number', 'themename' ),
		'section'  => 'footer_section',
		'type'=>'text'
		
	) );


	$wp_customize->add_setting("email", [
		"default" => "",
		
	]);

	$wp_customize->add_control('email', array(
		'label'    => __( 'email', 'themename' ),
		'section'  => 'footer_section',
		'type'=>'text'
		
	) );


	
	$wp_customize->add_setting("copyright_text", [
		"default" => "",
		
	]);

	$wp_customize->add_control('copyright_text', array(
		'label'    => __( 'CopyRight text', 'themename' ),
		'section'  => 'footer_section',
		'type'=>'textarea'
		
	) );

	$wp_customize->add_setting("term_text", [
		"default" => "",
		
	]);

	$wp_customize->add_control('term_text', array(
		'label'    => __( 'Term text', 'themename' ),
		'section'  => 'footer_section',
		'type'=>'text'
		
	) );

	$wp_customize->add_setting("term_link", [
		"default" => "",
		
	]);

	$wp_customize->add_control('term_link', array(
		'label'    => __( 'Term Link', 'themename' ),
		'section'  => 'footer_section',
		'type'=>'text'
		
	) );



	
	$wp_customize->add_setting("privacy_text", [
		"default" => "",
		
	]);

	$wp_customize->add_control('privacy_text', array(
		'label'    => __( 'Privacy Text', 'themename' ),
		'section'  => 'footer_section',
		'type'=>'text'
		
	) );

	$wp_customize->add_setting("privacy_link", [
		"default" => "",
		
	]);

	$wp_customize->add_control('privacy_link', array(
		'label'    => __( 'Privacy Link', 'themename' ),
		'section'  => 'footer_section',
		'type'=>'text'
		
	) );
		
}
add_action( 'customize_register', 'theme_customize_section');
