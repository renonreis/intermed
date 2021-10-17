<?php
	/* Template Name: Planos */
	get_header();

?>
<main id="primary" class="site-main">

  <?php 
  
    get_template_part( 'template-parts/components/page-banner', '', $args = array( 'with_title' => true )); 
    
    get_template_part( 'template-parts/components/telemedicina-planos'); 

    get_template_part( 'template-parts/components/about-insurance'); 

    get_template_part( 'template-parts/components/benefits');

    get_template_part( 'template-parts/components/cta-planos'); 
    
    get_template_part( 'template-parts/components/testimonials', '', $args = array( 'background_color' => 'bg-grey' )); 
    
    get_template_part( 'template-parts/components/faq'); 
    
    get_template_part( 'template-parts/components/contact-form', '', $args = array( 'background_color' => 'bg-grey', 'contact_form_id' => '67' )); 
  
  ?>
</main>

<?php get_footer(); ?>