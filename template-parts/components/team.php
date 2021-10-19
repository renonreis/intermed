<?php 

  $conteudo = get_field('conteudo_time');

?>
<section class="team">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h2 class="boldFirstWord"><?php echo $conteudo['titulo']; ?></h2>
        <p><?php echo $conteudo['descricao']; ?></p>
      </div>
    </div>
    <div class="row">
      <?php
        if( have_rows('time') ):
          while( have_rows('time') ) : the_row();                
          ?>

          <div class="col-md-6 col-lg-4 mb-5">
            <div class="box">
              <img src="<?php echo get_sub_field('imagem')['url']; ?>" alt="">
              <h3><?php echo get_sub_field('conteudo')['nome']; ?></h3>
              <p><?php echo get_sub_field('conteudo')['cargo']; ?></p>
            </div>
          </div>
            
          <?php
          endwhile;
        else:
        endif;
      ?>
    </div>
  </div>
</section>