<?php
/*
 * This stuff is for custom options in theme customizer
 *
 */
 function ug_customize_register( $wp_customize ) {
		//All our sections, settings, and controls will be added here

		$wp_customize->add_section( 'ubuntugnome', array(
			'title' => __( 'Ubuntu GNOME' ),
			'description' => __( 'Custom options for Ubuntu GNOME' ),
			'priority' => 160,
			'capability' => 'edit_theme_options',
			'theme_supports' => '', // Rarely needed.
		) );

		$wp_customize->add_setting( 'ug_logo', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ug_logo', array(
			'label' => __( 'Footer Logo Image', 'ug' ),
			'section' => 'ubuntugnome',
			'settings'	=> 'ug_logo',
		) ) );

		$wp_customize->add_setting( 'ug_license_text', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
			'sanitize_callback' => '',
		) );

		$wp_customize->add_control( 'ug_license_text', array(
			'label' => __( 'license text' ),
			'type' => 'textarea',
			'section' => 'ubuntugnome',
      'settings' => 'ug_license_text'
		) );

    $wp_customize->add_setting( 'ug_trademark_text', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
			'sanitize_callback' => '',
		) );

		$wp_customize->add_control( 'ug_trademark_text', array(
			'label' => __( 'Trademark text' ),
			'type' => 'textarea',
			'section' => 'ubuntugnome',
      'settings' => 'ug_trademark_text'
		) );
 }
 add_action( 'customize_register', 'ug_customize_register' );
