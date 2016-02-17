		</div><!-- #main -->

		<footer <?php hybrid_attr( 'footer' ); ?>>

			<div class="wrap">

				<div class="ubuntugnome_licence footer-section footer-1">
					<?php
					$licensetext = 'Content licensed under.';
					echo get_theme_mod( 'ubuntugnome_license_text', $licensetext );
					?>
					<?php hybrid_get_menu( 'secondary' ); // Loads the menu/secondary.php template. ?>
				</div>

				<div class="ubuntugnome_social footer-section footer-2">
					<?php hybrid_get_menu( 'social' ); // Loads the menu/secondary.php template. ?>
				</div>

			</div>

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>
