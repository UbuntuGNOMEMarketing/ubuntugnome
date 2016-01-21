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

    $wp_customize->add_setting( 'ug_top_logo', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ug_top_logo', array(
			'label' => __( 'Header Logo Image', 'ug' ),
      'description' => __( 'Please use an image that is 294 x 36', 'ug' ),
			'section' => 'ubuntugnome',
			'settings'	=> 'ug_top_logo',
		) ) );

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

    $licensetext = 'Content licensed under.<div><span class="icon ug-copyleft" title="Copyleft"><span class="screen-reader-text">Copyleft</span></span><span class="icon ug-creative-commons"title="Creative Commons"><span class="screen-reader-text">Creative Commons</span></span><span class="icon ug-public-domain" title="Public Domain"><span class="screen-reader-text">Public Domain</span></span></div>';
		$wp_customize->add_setting( 'ug_license_text', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
			'sanitize_callback' => '',
      'default'  => $licencetext,
		) );

		$wp_customize->add_control( 'ug_license_text', array(
			'label' => __( 'license text' ),
			'type' => 'textarea',
			'section' => 'ubuntugnome',
      'settings' => 'ug_license_text'
		) );

    $tmtext = 'Ubuntu is a trademark of Canonical.<br>GNOME is a trademark of the GNOME Foundation.<br>Used by permission.';
    $wp_customize->add_setting( 'ug_trademark_text', array(
			'type' => 'theme_mod', // or 'option'
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', // or postMessage
			'sanitize_callback' => '',
      'default' => $tmtext
		) );

		$wp_customize->add_control( 'ug_trademark_text', array(
			'label' => __( 'Trademark text' ),
			'type' => 'textarea',
			'section' => 'ubuntugnome',
      'settings' => 'ug_trademark_text'
		) );
 }
 add_action( 'customize_register', 'ug_customize_register' );

 function ug_customize_output() {
   $styles = '';
   if( $toplogo = get_theme_mod( 'ug_top_logo' ) ) {
     $styles .= sprintf( '#branding { background: url(%1$s) left center no-repeat !important; text-indent: -9999px;background-size: 294px 36px !important; min-height: 36px}', esc_url( $toplogo ) );
   }

   echo "\n" . '<style type="text/css" id="customizer-css">' . trim( $styles ) . '</style>' . "\n";

 }
add_action( 'wp_head', 'ug_customize_output' );
