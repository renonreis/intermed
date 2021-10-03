<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package intermed
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">			

				<div class="row align-items-center">
					
					<div class="col-4 col-sm-3">
						<?php
							the_custom_logo();					
						?>
					</div>		

					<div class="col text-end d-lg-none">	
						<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
							<span class="navbar-toggler-icon"></span>
						</button>		
					</div>

					<div class="col col-sm-9 offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body row">
							<?php
								wp_nav_menu( array(
										'theme_location'    => 'header-menu',
										'depth'             => 2,
										'container'         => 'div',
										'container_class'   => 'col',
										'container_id'      => 'bs-example-navbar-collapse',
										'menu_class'        => 'navbar-nav justify-content-end flex-grow-1',
										'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										'walker'            => new WP_Bootstrap_Navwalker(),
								) );
							?>
						</div>
					</div>

				</div>

			</div>
		</nav>
	</header><!-- #masthead -->
