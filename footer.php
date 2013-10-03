		</div> <!-- .container -->
	</div> <!-- #body-area -->

	<?php get_sidebar( 'footer' ); ?>

	<div id="footer-area">
		<div class="container">
			<?php get_sidebar( 'footer' ); ?>

			<div id="footer-bottom" class="clearfix">
			<?php
				$menu_class = 'bottom-nav';
				$footerNav = '';

				if ( function_exists( 'wp_nav_menu' ) ) $footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menu_class, 'echo' => false, 'depth' => '1' ) );
				if ( '' == $footerNav ) show_page_menu( $menu_class );
				else echo( $footerNav );
			?>
			<div id="footer-contact">
				<p class="small">3257 Quakerbridge Rd Mercerville, New Jersey | 609-890-2221</p>
			</div>
			</div> <!-- #footer-bottom -->
		</div> <!-- .container -->
	</div> <!-- #footer-area -->

	<div id="footer-bottom-area" class="container">
		<p id="copyright">Website by <a href="http://laurenpittenger.com">Lauren Pittenger</a></p>
	</div>

	<?php wp_footer(); ?>
</body>
</html>