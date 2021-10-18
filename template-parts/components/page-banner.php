<?php 

	$conteudo = get_field('conteudo_banner');
	$imagem = get_field('imagem_banner');

?>

<section class="pages-banner <?php if($args['with_title']){ echo 'with-title '; }; ?>d-flex align-items-end">
  <img src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_url( $imagem['imagem_fundo']['alt'] ); ?>">
  <?php if($args['with_title']){ ?>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-10 text-center">
          <div class="row align-items-center justify-content-md-center title-banner">
            <div class="col-lg-6 text-lg-start">
              <h1><?php echo $conteudo['titulo']; ?></h1>
              <p><?php echo $conteudo['subtitulo']; ?></p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="<?php echo $conteudo['link_botao']; ?>" class="btn"><?php echo $conteudo['texto_botao']; ?></a>
            </div>
          </div>
        </div>
      </div>
    <?php }; ?>
  </div>
</section>