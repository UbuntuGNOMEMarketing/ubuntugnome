<?php
/*
 * This stuff is for custom options in theme customizer
 *
 */
 function ubuntugnome_customize_register( $wp_customize ) {
		//All our sections, settings, and controls will be added here

		$wp_customize->add_section( 'ubuntugnome', array(
			'title' => __( 'Ubuntu GNOME' ),
			'description' => __( 'Custom options for Ubuntu GNOME' ),
			'priority' => 160,
			'capability' => 'edit_theme_options',
			'theme_supports' => '', // Rarely needed.
		) );

    $wp_customize->add_setting( 'ubuntugnome_top_logo', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ubuntugnome_top_logo', array(
			'label' => __( 'Header Logo Image', 'ubuntugnome' ),
      'description' => __( 'Please use an image that is 294 x 36', 'ubuntugnome' ),
			'section' => 'ubuntugnome',
			'settings'	=> 'ubuntugnome_top_logo',
		) ) );

    $wp_customize->add_setting( 'ubuntugnome_logo', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ubuntugnome_logo', array(
			'label' => __( 'Footer Logo Image', 'ubuntugnome' ),
			'section' => 'ubuntugnome',
			'settings'	=> 'ubuntugnome_logo',
		) ) );

    $licensetext = 'Content licensed under.';
		$wp_customize->add_setting( 'ubuntugnome_license_text', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
			'sanitize_callback' => '',
      'default'  => $licensetext,
		) );

		$wp_customize->add_control( 'ubuntugnome_license_text', array(
			'label' => __( 'License Text' ),
			'type' => 'textarea',
			'section' => 'ubuntugnome',
      'settings' => 'ubuntugnome_license_text'
		) );

    $wp_customize->add_setting( 'ubuntugnome_license_image', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ubuntugnome_license_image', array(
			'label' => __( 'License Image', 'ubuntugnome' ),
			'section' => 'ubuntugnome',
			'settings'	=> 'ubuntugnome_license_image',
		) ) );

    $tmtext = 'Ubuntu is a trademark of Canonical.<br>GNOME is a trademark of the GNOME Foundation.<br>Used by permission.';
    $wp_customize->add_setting( 'ubuntugnome_trademark_text', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
			'sanitize_callback' => '',
      'default' => $tmtext
		) );

		$wp_customize->add_control( 'ubuntugnome_trademark_text', array(
			'label' => __( 'Trademark text' ),
			'type' => 'textarea',
			'section' => 'ubuntugnome',
      'settings' => 'ubuntugnome_trademark_text'
		) );
 }
 add_action( 'customize_register', 'ubuntugnome_customize_register' );

 function ubuntugnome_customize_output() {
   $styles = '';
   if( $toplogo = get_theme_mod( 'ubuntugnome_top_logo' ) ) {
     $styles .= sprintf( '#branding .site-title a { background: url(%1$s) left center no-repeat !important;background-size: 250px 30px !important; min-height: 30px; color: transparent;}', esc_url( $toplogo ) );
   }

   echo "\n" . '<style type="text/css" id="customizer-css">' . trim( $styles ) . '</style>' . "\n";

 }
add_action( 'wp_head', 'ubuntugnome_customize_output' );
