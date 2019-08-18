<?php if(get_field('group_bookings_section_title')){ ?>
	<section class="container threecol">
			<div class="row" style="padding: 30px 30px;">
				<div class="col-12 text-center">
						<h3><?php the_field('group_bookings_section_title'); ?></h3>
				</div>
			</div>
			<?php if( have_rows('3_col_standard_content_block')): while( have_rows('3_col_standard_content_block')) : the_row(); ?>
			<div class="row justify-content-lg-center">
				<div class="col-lg-11 col-md-12">
						<div class="row">
							<div class="col-12">
								 <div class="card-deck threeup">
									<?php if( have_rows('3_col_standard_block_1')): while( have_rows('3_col_standard_block_1')) : the_row(); ?>	
											<div class="col-lg-4 p-0 card  p-3">
												 <div class="">
													  <div class="card-body">
														  <?php if(get_sub_field('icon')) { ?>
														  	<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
														  <?php } ?>
														  <?php if(get_sub_field('title')) { ?>
																<h4 class="card-title">
																	<?php the_sub_field('title'); ?>
														  		</h4>
														  <?php } ?>
														  <?php if(get_sub_field('title')) { ?>
																<p class="card-text"><?php the_sub_field('text'); ?></p>
														  <?php } ?>
													  </div>
													  <div class="card-footer">
													  </div>
												 </div>
											</div>
									 <?php endwhile; endif; ?>
									 <?php if( have_rows('3_col_standard_block_2')): while( have_rows('3_col_standard_block_2')) : the_row(); ?>	
											<div class="col-lg-4 p-0 card  p-3">
												 <div class="">
													  <div class="card-body">
														  <?php if(get_sub_field('icon')) { ?>
														  	<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
														  <?php } ?>
														  <?php if(get_sub_field('title')) { ?>
																<h4 class="card-title">
																	<?php the_sub_field('title'); ?>
														  		</h4>
														  <?php } ?>
														  <?php if(get_sub_field('title')) { ?>
																<p class="card-text"><?php the_sub_field('text'); ?></p>
														  <?php } ?>
													  </div>
													  <div class="card-footer">
													  </div>
												 </div>
											</div>
									 <?php endwhile; endif; ?>
									 <?php if( have_rows('3_col_standard_block_3')): while( have_rows('3_col_standard_block_3')) : the_row(); ?>	
											<div class="col-lg-4 p-0 card  p-3">
												 <div class="">
													  <div class="card-body">
														  <?php if(get_sub_field('icon')) { ?>
														  	<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
														  <?php } ?>
														  <?php if(get_sub_field('title')) { ?>
																<h4 class="card-title">
																	<?php the_sub_field('title'); ?>
														  		</h4>
														  <?php } ?>
														  <?php if(get_sub_field('title')) { ?>
																<p class="card-text"><?php the_sub_field('text'); ?></p>
														  <?php } ?>
													  </div>
													  <div class="card-footer">
													  </div>
												 </div>
											</div>
									 <?php endwhile; endif; ?>
								</div>
							</div>	 
						</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
	</section>
<?php } ?>

