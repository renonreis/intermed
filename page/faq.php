<?php
	/* Template Name: FAQ */
	get_header();

?>
<main id="primary" class="site-main">
	
	<?php 
	
    get_template_part( 'template-parts/components/page-banner', '', $args = array( 'with_title' => false ));

    get_template_part( 'template-parts/components/faq');

		get_template_part( 'template-parts/components/contact-form', '', $args = array( 'background_color' => 'bg-grey', 'contact_form_id' => '67' ));
	
	?>

</main>

<?php get_footer(); ?>