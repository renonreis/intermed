<?php
	/* Template Name: Home */
	get_header();

?>
<main id="primary" class="site-main">

	<section class="home-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1>Lorem Ipsum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
					<h3>Ligue agora</h3>
					<a href="" class="btn">0800-000-0000</a>
				</div>
				<div class="col-md-6">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/img-banner.jpg">
				</div>
			</div>
		</div>
	</section>

	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
				</div>
				<div class="col-md-6">
					<h2>Quem somos</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="" class="btn-planos">Conheça nossos planos</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2>Conheça nossos planos</h2>
				</div>
				<div class="col">
					<p>01</p>
					<h3>Plano Xxxxx</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				</div>
				<div class="col">
					<p>01</p>
					<h3>Plano Xxxxx</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				</div>
				<div class="col">
					<p>01</p>
					<h3>Plano Xxxxx</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				</div>
				<div class="col">
					<p>01</p>
					<h3>Plano Xxxxx</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				</div>
				<div class="col-md-12">
					<a href="" class="btn">Contrate agora</a>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Depoimentos</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
				</div>
				<div class="col-md-12">
					<div class="swiper">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide">Slide 1</div>
							<div class="swiper-slide">Slide 2</div>
							<div class="swiper-slide">Slide 3</div>
							<div class="swiper-slide">Slide 3</div>
							<div class="swiper-slide">Slide 3</div>
							<div class="swiper-slide">Slide 3</div>
						</div>
						
						
					</div>
					<div class="row">
						<div class="col button-prev">Volta</div>
						<div class="col button-next">Vai</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>