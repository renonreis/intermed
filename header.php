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
	
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/favicon/site.webmanifest">

	<?php the_field( 'scripts_header', 'option' ); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php the_field( 'scripts_body', 'option' ); ?>

<?php wp_body_open(); ?>

<div id="page" class="site">

	<header id="masthead" class="site-header">
		<nav class="navbar fixed-top">
			<div class="container-fluid justify-content-center">			

				<div class="row align-items-center menu-header">
					
					<div class="col-9 col-xl-3">
						<a href="<?php echo get_site_url(); ?>" class="custom-logo-link">
							<?php get_template_part( 'template-parts/svg/logo' ); ?>
						</a>
					</div>
					
					<div class="col d-none d-xl-block">
						<?php
							wp_nav_menu( array(
									'theme_location'    => 'header-menu',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'navbar navbar-expand-lg',
									'container_id'      => 'bs-navbar-collapse',
									'menu_class'        => 'navbar-nav justify-content-end flex-grow-1',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker(),
							) );
						?>
					</div>

					<div class="col-3 text-end d-xl-none">	
						<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
							<?php get_template_part('template-parts/svg/menu-mobile'); ?>
						</button>
						<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
							<div class="offcanvas-header">
								<h5 class="offcanvas-title" id="offcanvasNavbarLabel">
									<?php get_template_part( 'template-parts/svg/logo' ); ?>
								</h5>
								<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
									<?php get_template_part( 'template-parts/svg/close' ); ?>
								</button>
							</div>
							<div class="offcanvas-body row">
								<?php
									wp_nav_menu( array(
											'theme_location'    => 'header-menu',
											'depth'             => 2,
											'container'         => 'div',
											'container_class'   => 'col',
											'container_id'      => 'bs-example-navbar-collapse',
											'menu_class'        => 'navbar-nav justify-content-start flex-grow-1',
											'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
											'walker'            => new WP_Bootstrap_Navwalker(),
									) );
								?>
							</div>
						</div>
					</div>

					

				</div>

			</div>
		</nav>
	</header><!-- #masthead -->
