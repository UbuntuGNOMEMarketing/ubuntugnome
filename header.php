<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>

<head <?php hybrid_attr( 'head' ); ?>>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

	<div id="container">

		<div class="skip-link">
			<a href="#content" class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'vaidusworld' ); ?></a>
		</div><!-- .skip-link -->

		<header <?php hybrid_attr( 'header' ); ?>>

				<div <?php hybrid_attr( 'branding' ); ?>>
					<?php hybrid_site_title(); ?>
					<?php hybrid_site_description(); ?>
				</div><!-- #branding -->

		</header><!-- #header -->
		
		<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>

		<?php hybrid_get_menu( 'secondary' ); // Loads the menu/secondary.php template. ?>

		<div id="main" class="main">
			<div class="wrap">

			<?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>
