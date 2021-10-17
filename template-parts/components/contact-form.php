<section class="contact <?php echo __( $args['background_color'] ); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
        <h2>Contato</h2>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <?php echo do_shortcode('[contact-form-7 id="' . __( $args['contact_form_id'] ) . '" title="Formulário de Contato"]'); ?>
      </div>
    </div>
  </div>
</section>