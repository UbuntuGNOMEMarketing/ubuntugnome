<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>

<head <?php hybrid_attr( 'head' ); ?>>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

	<div id="container">

		<div class="skip-link">
			<a href="#content" class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'magik' ); ?></a>
		</div><!-- .skip-link -->

			<div class="header-image-container">

				<header <?php hybrid_attr( 'header' ); ?>>

					<div class="wrap">

						<div <?php hybrid_attr( 'branding' ); ?>>
							<?php hybrid_site_title(); ?>
							<?php hybrid_site_description(); ?>
						</div><!-- #branding -->

						<?php hybrid_get_menu( 'primary' ); // Loads the menu/secondary.php template. ?>

					</div><!-- wrap -->
				</header><!-- #header -->

			</div> <!-- .header-image-container -->

		<div id="main" class="main">

			<?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>
