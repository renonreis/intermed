<?php 

  $conteudo = get_field('conteudo_depoimentos');

?>

<section class="testimonials <?php echo __( $args['background_color'] ); ?>">
  <img class="bg-image" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/img-testimonials.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo $conteudo['titulo']; ?></h2>
        <p class="subtitle"><?php echo $conteudo['descricao']; ?></p>
      </div>
      <div class="col-md-12 overflow">
        <img class="bg-image" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/img-testimonials.jpg">
        <div class="swiper-testimonials">
          <div class="swiper-wrapper">
            <?php
              if( have_rows('depoimentos') ):
                while( have_rows('depoimentos') ) : the_row();
                ?>
                  <div class="swiper-slide">
                    <div class="box">
                      <p><?php echo get_sub_field('descricao'); ?></p>
                      <h3><?php echo get_sub_field('autor'); ?></h3>
                    </div>
                  </div>
                <?php
                endwhile;
              else :
              endif;
            ?>
          </div>  
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mt-5">
            <div class="row">
              <div class="col button-prev"><?php get_template_part( 'template-parts/svg/chevron-left'); ?></div>
              <div class="col button-next text-end"><?php get_template_part( 'template-parts/svg/chevron-right'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>