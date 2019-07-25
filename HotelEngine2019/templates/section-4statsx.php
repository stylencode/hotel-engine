<?php if( have_rows('stats') ): while( have_rows('stats')) : the_row(); ?>	
	<section id="statistics" class="container statistics-wrapper" style="padding: 70px 30px; background-color: #efefef; ">
		<div class="row" style="padding: 30px 30px;">
			 <?php if(get_sub_field('title')) { ?>
				<div class="col-12 text-center">
						<h2><?php the_sub_field('title'); ?></h2>
						<?php if(get_sub_field('intro')) { ?>
							<?php the_sub_field('intro'); ?>
						<?php } ?>
				</div>
			<?php } ?>
		</div>
			<div class="row justify-content-md-center">
				<?php if( have_rows('stat_info') ): while( have_rows('stat_info')) : the_row(); ?>	
						 <div class="col-sm-3 p-0" >
							<div class="statistic m-3 text-center p-3" style="background-color: white;">
							  <h3><mark class="count" style="display: none;">
							  	<?php the_sub_field('number'); ?>
							  		




							  	</mark>+</h3>
							  <p class="card-title"><?php the_sub_field('descriptor'); ?></p>
							</div>
						 </div>
				<?php endwhile; endif; ?>
			</div>
	</section>
<?php endwhile; endif; ?>

