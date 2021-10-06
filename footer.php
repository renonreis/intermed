<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package intermed
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<div class="row align-items-center text-center">
				<div class="col-md-6">
					<nav class="navbar navbar-expand-lg">
						<?php
							wp_nav_menu( array(
								'theme_location'    => 'footer-menu',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'col',
								'container_id'      => 'bs-example-navbar-collapse',
								'menu_class'        => 'navbar-nav justify-content-start flex-grow-1',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
						?>
					</nav>
				</div>
				<div class="col-md-6 text-md-end">
					<p><?php echo date("Y"); ?> - Intermed - Todos os direitos reservados ©</p>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
