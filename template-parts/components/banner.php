<?php

$conteudo = get_field('conteudo_banner');
$imagem = get_field('imagem_banner');

?>
<section class="home-banner">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1><?php echo $conteudo['titulo']; ?></h1>
        <p><?php echo $conteudo['subtitulo']; ?></p>
        <h3><?php echo $conteudo['titulo_botao']; ?></h3>
        <a href="<?php echo $conteudo['link_botao']; ?>" class="btn">
          <?php echo $conteudo['texto_botao']; ?>
        </a>
        <div class="d-block app">
          <h4><?php echo $conteudo['titulo_app']; ?></h4>
          <a href="<?php echo $conteudo['google_play']; ?>" target="_blank">
            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/icon-google-play.png" alt="Disponível no Google Play" />
          </a>
          <a href="<?php echo $conteudo['apple_store']; ?>" target="_blank">
            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/icon-apple-store.png" alt="Baixe na Apple Store" />
          </a>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center text-center text-md-end">
        <div class="box">
          <img src="<?php echo esc_url( $imagem['imagem_fundo']['url'] ); ?>" alt="<?php echo esc_url( $imagem['imagem_fundo']['alt'] ); ?>">
          <div class="content">
            <h2><?php echo $imagem['titulo']; ?></h2>
            <p><?php echo $imagem['subtitulo']; ?></p>
            <a href="<?php echo $imagem['link_botao']; ?>" class="btn"><?php echo $imagem['texto_botao']; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>