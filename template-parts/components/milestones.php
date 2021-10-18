<?php 

	$conteudo = get_field('conteudo_informacoes');

?>
<section class="milestones">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12 col-xl-10 offset-xl-1 mb-5">
					<h2><?php echo $conteudo['titulo']; ?></h2>
					<p><?php echo $conteudo['descricao']; ?></p>
				</div>				
			</div>
			<div class="row text-center">
				<?php					
					if( have_rows('conteudo_contadores') ):
						while( have_rows('conteudo_contadores') ) : the_row();
						?>
							<div class="col-md-6 col-lg-3">
								<div class="box">
									<h3 class="counter-value" data-count="<?php echo get_sub_field('numero'); ?>">0</h3>
									<p><?php echo get_sub_field('descricao'); ?></p>
								</div>
							</div>
						<?php              
						endwhile;
					else :
					endif;
				?>	
			</div>
		</div>
	</section>