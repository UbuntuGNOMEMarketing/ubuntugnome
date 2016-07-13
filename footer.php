		</div><!-- #main -->

		<footer <?php hybrid_attr( 'footer' ); ?>>

			<?php hybrid_get_sidebar( 'footer' ); // Loads the sidebar/subsidiary.php template. ?>

			<div class="ubuntugnome_social">
				<?php hybrid_get_menu( 'social' ); // Loads the menu/secondary.php template. ?>
			</div>

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>
