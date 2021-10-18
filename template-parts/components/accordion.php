<div class="accordion" id="accordionFAQ">
  <?php
    if( have_rows('perguntas_frequentes') ):
      $index = 1;
      while( have_rows('perguntas_frequentes') ) : the_row();
      ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading_<?php echo $index; ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $index; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $index; ?>">
              <?php echo get_sub_field('pergunta'); ?>
            </button>
          </h2>
          <div id="collapse_<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading_<?php echo $index; ?>" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              <?php echo get_sub_field('resposta'); ?>
            </div>
          </div>
        </div>
      <?php
      $index++;
      endwhile;
    else :
    endif;
  ?>
  
</div>