<?php 

  $conteudo = get_field('conteudo_faq');

?>

<section class="faq">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-md-6">
          <h2 class="title"><?php echo $conteudo['titulo']; ?></h2>
          <p class="subtitle"><?php echo $conteudo['descricao']; ?></p>
        </div>
        <div class="col-md-6">
          <?php get_template_part( 'template-parts/components/accordion'); ?>  
        </div>
        
      </div>
    </div>
  </section>