<?php
/**
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */

// Get the template directory and make sure it has a trailing slash.
$ubuntugnome_dir = trailingslashit( get_template_directory() );

// Load the Hybrid Core framework and theme files.
require_once( $ubuntugnome_dir . 'library/hybrid.php'        );
require_once( $ubuntugnome_dir . 'inc/custom-background.php' );
require_once( $ubuntugnome_dir . 'inc/custom-header.php'     );
require_once( $ubuntugnome_dir . 'inc/theme.php'             );
require_once( $ubuntugnome_dir . 'inc/customizer.php'             );

// Launch the Hybrid Core framework.
new Hybrid();

// Do theme setup on the 'after_setup_theme' hook.
add_action( 'after_setup_theme', 'ubuntugnome_theme_setup', 5 );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function ubuntugnome_theme_setup() {

	// Theme layouts.
	add_theme_support( 'theme-layouts', array( 'default' => is_rtl() ? '2c-r' :'2c-l' ) );

	// Enable custom template hierarchy.
	add_theme_support( 'hybrid-core-template-hierarchy' );

	// The best thumbnail/image script ever.
	add_theme_support( 'get-the-image' );

	// Breadcrumbs. Yay!
	//add_theme_support( 'breadcrumb-trail' );

	// Nicer [gallery] shortcode implementation.
	add_theme_support( 'cleaner-gallery' );

	// Automatically add feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Post formats.
	add_theme_support(
		'post-formats',
		array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' )
	);

	// WordPress Custom Logo
	add_theme_support( 'custom-logo', array(
		'width' => 100,
		'height' => 100,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// Handle content width for embeds and images.
	hybrid_set_content_width( 1280 );
}
