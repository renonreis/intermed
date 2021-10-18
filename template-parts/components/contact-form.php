<?php 

	$conteudo = get_field('conteudo_contato');

?>

<section class="contact <?php echo __( $args['background_color'] ); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
        <h2><?php echo $conteudo['titulo']; ?></h2>
        <p><?php echo $conteudo['descricao']; ?></p>
        <?php echo do_shortcode('[contact-form-7 id="' . $conteudo['formulario_de_contato'] . '" title="Formulário de Contato"]'); ?>
      </div>
    </div>
  </div>
</section>