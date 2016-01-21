		</div><!-- #main -->

		<footer <?php hybrid_attr( 'footer' ); ?>>

			<div class="wrap">

				<div class="ubuntugnome_logo footer-section footer-1">
					<?php if ( get_theme_mod( 'ubuntugnome_logo' ) ) : ?>
						<img src="<?php echo get_theme_mod( 'ubuntugnome_logo', $default=true ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php else: ?>
						<p>Please upload a logo under Appearance >> Customize >> Ubuntu GNOME</p>
					<?php endif; ?>
				</div>

				<div class="ubuntugnome_licence footer-section footer-2">
					<?php
					$licensetext = 'Content licensed under.';
					echo get_theme_mod( 'ubuntugnome_license_text', $licensetext );
					?><br />
					<img src="<?php echo get_theme_mod( 'ubuntugnome_license_image', true ); ?>" alt="Copyleft, Creative commons, Public domain" />
				</div>

				<div class="ubuntugnome_trademark footer-section footer-3">
					<?php
					$tmtext = 'Ubuntu is a trademark of Canonical.<br>GNOME is a trademark of the GNOME Foundation.<br>Used by permission.';
					echo get_theme_mod( 'ubuntugnome_trademark_text', $tmtext );
					?>
				</div>

				<div class="ubuntugnome_social footer-section footer-4">
					<?php hybrid_get_menu( 'subsidiary' ); // Loads the menu/secondary.php template. ?>
				</div>

			</div>

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>
