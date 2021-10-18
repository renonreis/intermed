<section class="partners">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="swiper swiper-partners">
          <div class="swiper-wrapper">
            <?php
              if( have_rows('carrossel_imagens') ):
                while( have_rows('carrossel_imagens') ) : the_row();                
                ?>
                  <div class="swiper-slide">
                    <div class="box">
                      <img src="<?php echo get_sub_field('carrossel_imagem')['url']; ?>" alt="<?php echo get_sub_field('carrossel_imagem')['alt']; ?>">
                    </div>
                  </div>
                <?php
                endwhile;
              else :
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>