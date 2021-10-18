<section class="telemedicina-planos mt-5 mb-5">
  <div class="container">
    <?php
      if( have_rows('produtos_telemedicina') ):
        while( have_rows('produtos_telemedicina') ) : the_row();                
        ?>

        <div class="row align-items-center justify-content-between">
          <div class="col-md-6">
            <div class="box-image">
              <img src="<?php echo get_sub_field('imagem_telemedicina')['url']; ?>" alt="<?php echo get_sub_field('imagem_telemedicina')['alt']; ?>">
            </div>
          </div>
          <div class="col-md-6 col-lg-5 orders text-center text-md-end">
            <h2><?php echo get_sub_field('conteudo_telemedicina')['titulo']; ?></h2>
            <p><?php echo get_sub_field('conteudo_telemedicina')['subtitulo']; ?></p>
            <a href="<?php echo get_sub_field('conteudo_telemedicina')['link_botao']; ?>" class="btn">
              <?php echo get_sub_field('conteudo_telemedicina')['texto_botao']; ?>
            </a>
          </div>
        </div>
          
        <?php
        endwhile;
      else :
      endif;
    ?>  
  </div>
</section>