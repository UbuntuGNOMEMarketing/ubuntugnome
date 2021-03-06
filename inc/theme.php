<?php

# Register custom image sizes.
add_action( 'init', 'ubuntugnome_register_image_sizes', 5 );

# Register custom menus.
add_action( 'init', 'ubuntugnome_register_menus', 5 );

# Register custom layouts.
add_action( 'hybrid_register_layouts', 'ubuntugnome_register_layouts' );

# Register sidebars.
add_action( 'widgets_init', 'ubuntugnome_register_sidebars', 5 );

# Add custom scripts and styles
add_action( 'wp_enqueue_scripts', 'ubuntugnome_enqueue_scripts', 5 );
add_action( 'wp_enqueue_scripts', 'ubuntugnome_enqueue_styles',  5 );

# Modify Read More link for excerpts
add_filter('excerpt_more', 'ubuntugnome_excerpt_more');

/**
 * Registers custom image sizes for the theme.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function ubuntugnome_register_image_sizes() {

	// Sets the 'post-thumbnail' size.
	//set_post_thumbnail_size( 150, 150, true );
	
}

/**
 * Registers nav menu locations.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function ubuntugnome_register_menus() {
	register_nav_menu( 'primary',    esc_html_x( 'Primary',    'nav menu location', 'ubuntugnome' ) );
	register_nav_menu( 'social',  esc_html_x( 'Social',        'nav menu location', 'ubuntugnome' ) );
	register_nav_menu( 'footer',  esc_html_x( 'Footer',        'nav menu location', 'ubuntugnome' ) );
}

/**
 * Registers layouts.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function ubuntugnome_register_layouts() {

	hybrid_register_layout( '1c',   array( 'label' => esc_html__( '1 Column', 'ubuntugnome' ), 'image' => '%s/images/layouts/1c.png'   ) );
}

/**
 * Registers sidebars.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function ubuntugnome_register_sidebars() {

	hybrid_register_sidebar(
		array(
			'id'          => 'footer-1',
			'name'        => esc_html_x( 'Footer 1', 'sidebar', 'magik' ),
			'description' => esc_html__( 'Add sidebar description.', 'magik' )
		)
	);
	hybrid_register_sidebar(
		array(
			'id'          => 'footer-2',
			'name'        => esc_html_x( 'Footer 2', 'sidebar', 'magik' ),
			'description' => esc_html__( 'Add sidebar description.', 'magik' )
		)
	);
	hybrid_register_sidebar(
		array(
			'id'          => 'footer-3',
			'name'        => esc_html_x( 'Footer 3', 'sidebar', 'magik' ),
			'description' => esc_html__( 'Add sidebar description.', 'magik' )
		)
	);

	hybrid_register_sidebar(
		array(
			'id'          => 'footer-4',
			'name'        => esc_html_x( 'Footer 4', 'sidebar', 'magik' ),
			'description' => esc_html__( 'Add sidebar description.', 'magik' )
		)
	);

}

/**
 * Load scripts for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function ubuntugnome_enqueue_scripts() {
	wp_enqueue_script( 'ug-nav-menu', get_template_directory_uri() . '/js/nav-menu.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'hybrid-mobile-toggle' );

}

/**
 * Load stylesheets for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function ubuntugnome_enqueue_styles() {

	// Load one-five base style.
	wp_enqueue_style( 'hybrid-one-five' );

	// Load gallery style if 'cleaner-gallery' is active.
	if ( current_theme_supports( 'cleaner-gallery' ) )
		wp_enqueue_style( 'hybrid-gallery' );

	// Load parent theme stylesheet if child theme is active.
	if ( is_child_theme() )
		wp_enqueue_style( 'hybrid-parent' );

	// Load active theme stylesheet.
	wp_enqueue_style( 'hybrid-style' );

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic,800', array(), 1.0 );
}

// Replaces the excerpt "more" text by a link
function ubuntugnome_excerpt_more($more) {
	   global $post;
	return '<div class="moretag"><a href="'. get_permalink($post->ID) . '">[ Read More ]</a></div>';
}

/**
 * Return early if Site Logo is not available.
 */
function ubuntugnome_the_site_logo() {
	if ( ! function_exists( 'the_custom_logo' ) ) {
		return;
	} else {
		the_custom_logo();
	}
}
