<?php 

  $conteudo = get_field('conteudo_sobre');
  $imagem = get_field('imagem_sobre');
  $planos = get_field('textos_planos');

?>

<section class="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="box-image">
          <img src="<?php echo esc_url( $imagem['imagem']['url'] ); ?>" alt="<?php echo esc_url( $imagem['imagem']['alt'] ); ?>">
        </div>
      </div>
      <div class="col-md-5 offset-md-1 text-center text-md-end">
        <h2 class="boldFirstWord"><?php echo $conteudo['titulo']; ?></h2>
        <p><?php echo $conteudo['subtitulo']; ?></p>
        <a href="<?php echo $conteudo['link_botao']; ?>" class="btn-planos"><?php echo $conteudo['texto_botao']; ?> <?php get_template_part( 'template-parts/svg/arrow-right'); ?></a>
      </div>
    </div>
    <div class="row planos">
      <div class="col-md-12 text-center">
        <h2 class="boldFirstWord"><?php echo $planos['titulo']; ?></h2>
      </div>
      <?php
        
        if( have_rows('conteudo_planos') ):
          $index = 1;
          while( have_rows('conteudo_planos') ) : the_row();

          ?>
            <div class="col-md-6 col-lg-4">
              <div class="box">
                <a href="<?php echo get_sub_field('link'); ?>">
                  <p class="number"><?php echo sprintf("%02d", $index++); ?></p>
                  <h3>Plano <span><?php echo get_sub_field('titulo_plano'); ?></span></h3>
                  <p><?php echo get_sub_field('descricao'); ?></p>
                </a>
              </div>
            </div>
          <?php              
          endwhile;
        else :
        endif;
      ?>
      
      <div class="col-md-12 text-center">
        <a href="<?php echo $planos['link_botao']; ?>" class="btn"><?php echo $planos['texto_botao']; ?></a>
      </div>
    </div>
  </div>
</section>