<?php 

  $conteudo = get_field('conteudo_sobre');

?>
<section class="cta">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6 offset-lg-3">
        <h2><?php echo $conteudo['cta']['titulo']; ?></h2>
        <a href="<?php echo $conteudo['cta']['link_botao']; ?>" class="btn"><?php echo $conteudo['cta']['texto_botao']; ?></a>
      </div>
    </div>
  </div>
</section>