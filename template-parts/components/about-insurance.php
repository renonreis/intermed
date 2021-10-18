<?php 

  $conteudo = get_field('conteudo_sobre');

?>
<section class="about-insurance">
  <img class="bg-image" src="<?php echo $conteudo['imagem']['url']; ?>" alt="<?php echo $conteudo['imagem']['alt']; ?>">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 overflow">
        <img class="bg-image" src="<?php echo $conteudo['imagem']['url']; ?>" alt="<?php echo $conteudo['imagem']['alt']; ?>">
        <h2 class="boldFirstWord"><?php echo $conteudo['sobre']['titulo']; ?></h2>
        <p><?php echo $conteudo['sobre']['descricao']; ?></p>
      </div>
    </div>
  </div>
</section>