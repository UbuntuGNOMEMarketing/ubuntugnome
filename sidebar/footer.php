<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : // If the sidebar has widgets. ?>

	<div class="footer-widgets">
		<div class="wrap">

			<aside <?php hybrid_attr( 'footer-widget', '1' ); ?>>

				<?php dynamic_sidebar( 'footer-1' ); // Displays the subsidiary sidebar. ?>

			</aside><!-- #sidebar-subsidiary -->

			<aside <?php hybrid_attr( 'footer-widget', '2' ); ?>>

				<?php dynamic_sidebar( 'footer-2' ); // Displays the subsidiary sidebar. ?>

			</aside><!-- #sidebar-subsidiary -->

			<aside <?php hybrid_attr( 'footer-widget', '3' ); ?>>

				<?php dynamic_sidebar( 'footer-3' ); // Displays the subsidiary sidebar. ?>

			</aside><!-- #sidebar-subsidiary -->

			<aside <?php hybrid_attr( 'footer-widget', '4' ); ?>>

				<?php dynamic_sidebar( 'footer-4' ); // Displays the subsidiary sidebar. ?>

			</aside><!-- #sidebar-subsidiary -->

		</div>
	</div>

<?php endif; // End widgets check. ?>
