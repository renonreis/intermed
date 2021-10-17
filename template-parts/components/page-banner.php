<section class="pages-banner <?php if($args['with_title']){ echo 'with-title '; }; ?>d-flex align-items-end">
  <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/img-telemedicina.jpg">
  <?php if($args['with_title']){ ?>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-10 text-center">
          <div class="row align-items-center justify-content-md-center title-banner">
            <div class="col-lg-6 text-lg-start">
              <h1>Telemedicina</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="#" class="btn">Contratar</a>
            </div>
          </div>
        </div>
      </div>
    <?php }; ?>
  </div>
</section>