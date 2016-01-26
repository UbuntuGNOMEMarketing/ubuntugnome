<?php

# Call late so child themes can override.
add_action( 'after_setup_theme', 'ubuntugnome_custom_header_setup', 15 );

/**
 * Adds support for the WordPress 'custom-header' theme feature and registers custom headers.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function ubuntugnome_custom_header_setup() {

	add_theme_support(
		'custom-header',
		array(
			'default-image'          => sprintf( '%s/images/ug-header.jpg', get_template_directory_uri() ),
			'random-default'         => false,
			'width'                  => 1600,
			'height'                 => 400,
			'flex-height'            => true,
			'header-text'            => false,
			'uploads'                => true,
			'wp-head-callback'       => 'ubuntugnome_custom_header_wp_head'
		)
	);

	// Registers default headers for the theme.
	//register_default_headers();
}

/**
 * Callback function for outputting the custom header CSS to `wp_head`.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function ubuntugnome_custom_header_wp_head() {

	$header_image = get_header_image();

	//$image = array( 'src' => $header_image );
	//wp_localize_script( 'ug-backstretch-set', 'BackStretchImg', $image );

	$style = sprintf(".header-image-container { background: url(%s) center center no-repeat; background-size: cover; }", $header_image );
	echo "\n" . '<style type="text/css" id="custom-header-css">' . trim( $style ) . '</style>' . "\n";
}
