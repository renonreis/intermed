<?php
	/* Template Name: Home */
	get_header();

?>
<main id="primary" class="site-main">
	
	<?php 
	
		get_template_part( 'template-parts/components/banner'); 

		get_template_part( 'template-parts/components/about');

		get_template_part( 'template-parts/components/testimonials');

		get_template_part( 'template-parts/components/partners');

		get_template_part( 'template-parts/components/milestones');

		get_template_part( 'template-parts/components/contact-form', '', $args = array( 'background_color' => 'bg-grey', 'contact_form_id' => '67' ));
	
	?>

</main>

<?php get_footer(); ?>