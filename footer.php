			</div><!-- .wrap -->
		</div><!-- #main -->

		<?php hybrid_get_sidebar( 'footer' ); // Loads the sidebar/subsidiary.php template. ?>

		<footer <?php hybrid_attr( 'footer' ); ?>>

			<p class="credit">
				<?php printf(
					// Translators: 1 is current year, 2 is site name/link
					esc_html__( 'Copyright &#169; %1$s %2$s', 'magik' ),
					date_i18n( 'Y' ), hybrid_get_site_link()
				); ?>
			</p><!-- .credit -->
			<p class="credit">
				<?php
				echo __( 'Built with <big>&hearts;</big> at <a href="https://magikpress.com">MagikPress</a>', 'magik' );
				?>
			</p>

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>
