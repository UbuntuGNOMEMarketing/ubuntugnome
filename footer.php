		</div><!-- #main -->

		<footer <?php hybrid_attr( 'footer' ); ?>>

			<div class="wrap">

				<div class="ug_logo footer-section footer-1">
					<?php if ( get_theme_mod( 'ug_logo' ) ) : ?>
						<img src="<?php echo get_theme_mod( 'ug_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					<?php else: ?>
						<p>Please upload a logo under Appearance>>Customize>>Ubuntu GNOME</p>
					<?php endif; ?>
				</div>

				<div class="ug_licence footer-section footer-2">
					<?php if ( get_theme_mod( 'ug_license_text' ) ) : ?>
						<?php echo get_theme_mod( 'ug_license_text' ); ?>
					<?php else: ?>
						<p>Please set text under Appearance>>Customize>>Ubuntu GNOME</p>
					<?php endif; ?>
				</div>

				<div class="ug_trademark footer-section footer-3">
					<?php if ( get_theme_mod( 'ug_trademark_text' ) ) : ?>
						<?php echo get_theme_mod( 'ug_trademark_text' ); ?>
					<?php else: ?>
						<p>Please set text under Appearance>>Customize>>Ubuntu GNOME</p>
					<?php endif; ?>
				</div>

				<div class="ug_social footer-section footer-4">
					<?php hybrid_get_menu( 'subsidiary' ); // Loads the menu/secondary.php template. ?>
				</div>

			</div>

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>
