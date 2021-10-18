<?php 

  $conteudo = get_field('conteudo_sobre');

?>
<section class="benefits">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6 offset-md-3">
        <h2><?php echo $conteudo['beneficios']['titulo']; ?></h2>
      </div>
      <div class="col-md-12">
        <p><?php echo $conteudo['beneficios']['descricao']; ?></p>
      </div>
    </div>
  </div>
</section>