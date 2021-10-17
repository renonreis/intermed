<?php
	/* Template Name: Sobre */
	get_header();

?>
<main id="primary" class="site-main">

  <?php 
  
    get_template_part( 'template-parts/components/page-banner', '', $args = array( 'with_title' => false )); 

    get_template_part( 'template-parts/components/benefits');

    get_template_part( 'template-parts/components/team');
    
    get_template_part( 'template-parts/components/testimonials', '', $args = array( 'background_color' => 'bg-grey' )); 
    
    get_template_part( 'template-parts/components/contact-form', '', $args = array( 'contact_form_id' => '68' )); 
  
  ?>
</main>

<?php get_footer(); ?>