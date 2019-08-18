<?php if( get_field('block_layout') == 'icon' ): ?>
	<section class="feature-section partner-blocks container">
		<div class="row justify-content-lg-center">
				<div class="col-lg-11 col-md-12">
					<?php if( have_rows('content_block')): while( have_rows('content_block')) : the_row(); ?>
						<div class="row">
							<div class="col-12">
								 <div class="card-deck">
									<?php if( have_rows('block_1')): while( have_rows('block_1')) : the_row(); ?>
										<div class="col-lg-6 col-10 offset-1 p-0 mb-4 card">
												  <div class="card-body">
													 <?php if(get_sub_field('icon')) { ?>
													 	<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
													 <?php } ?>
													 <?php if(get_sub_field('topic')) { ?>
														<h5 class="card-title"><?php the_sub_field('topic'); ?></h5>
													 <?php } ?>
													 <?php if(get_sub_field('title')) { ?>
														<h3><?php the_sub_field('title'); ?></h3>
													 <?php } ?>
													 <?php if(get_sub_field('text')) { ?>
														<p class="card-text"><?php the_sub_field('text'); ?></p>
													  <?php } ?>
												  </div>
										</div>
									<?php endwhile; endif; ?>
									<?php if( have_rows('block_2')): while( have_rows('block_2')) : the_row(); ?>
										<div class="col-lg-6 col-10 offset-1 p-0 mb-4 card">
												  <div class="card-body">
													 <?php if(get_sub_field('icon')) { ?>
													 	<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
													 <?php } ?>
													 <?php if(get_sub_field('topic')) { ?>
														<h5 class="card-title"><?php the_sub_field('topic'); ?></h5>
													 <?php } ?>
													 <?php if(get_sub_field('title')) { ?>
														<h3><?php the_sub_field('title'); ?></h3>
													 <?php } ?>
													 <?php if(get_sub_field('text')) { ?>
														<p class="card-text"><?php the_sub_field('text'); ?></p>
													  <?php } ?>
												  </div>
										</div>
									<?php endwhile; endif; ?>
								</div>
							</div>
						</div>
				<?php endwhile; endif; ?>
			</div>
	</div>
	</section>
<?php endif; ?>

<?php if( get_field('block_layout') == 'imgbottom' ): ?>
	<section class="twocol-section container">
		  <div class="row justify-content-lg-center">
				<div class="col-lg-11 col-md-12">
					<?php if( have_rows('content_block')): while( have_rows('content_block')) : the_row(); ?>
						<div class="row">
							<div class="col-12">
								 <div class="card-deck">
									<?php if( have_rows('block_1')): while( have_rows('block_1')) : the_row(); ?>
										<div class="col-lg-6 p-0 mb-5 card">
												  <div class="card-body">
													 
													 <?php if(get_sub_field('topic')) { ?>
														<h5 class="card-title"><?php the_sub_field('topic'); ?></h5>
													 <?php } ?>
													 <?php if(get_sub_field('title')) { ?>
														<h3><?php the_sub_field('title'); ?></h3>
													 <?php } ?>
													 <?php if(get_sub_field('text')) { ?>
														<p class="card-text"><?php the_sub_field('text'); ?></p>
													  <?php } ?>

													  

												  </div>

												  <div class="card-footer">

									                <?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
																<a class="btn mobile-hide tablet-hide" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
																	<?php the_sub_field('button_text'); ?>
																</a>
													<?php endwhile; endif; ?>

									           
									              </div>

									              <?php if(get_sub_field('image_bottom')) { ?>
													 	<img class="card-img-bottom" src="<?php the_sub_field('image_bottom'); ?>" alt="<?php the_sub_field('title'); ?>">
												  <?php } ?>
									           


										</div>
									<?php endwhile; endif; ?>
									<?php if( have_rows('block_2')): while( have_rows('block_2')) : the_row(); ?>
										<div class="col-lg-6 p-0 mb-5 card">
												  <div class="card-body">
													 <?php if(get_sub_field('icon')) { ?>
													 	<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
													 <?php } ?>
													 <?php if(get_sub_field('topic')) { ?>
														<h5 class="card-title"><?php the_sub_field('topic'); ?></h5>
													 <?php } ?>
													 <?php if(get_sub_field('title')) { ?>
														<h3><?php the_sub_field('title'); ?></h3>
													 <?php } ?>
													 <?php if(get_sub_field('text')) { ?>
														<p class="card-text"><?php the_sub_field('text'); ?></p>
													  <?php } ?>
												  </div>
												  <div class="card-footer">

									                <?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
																<a class="btn mobile-hide tablet-hide" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
																	<?php the_sub_field('button_text'); ?>
																</a>
													<?php endwhile; endif; ?>

									           
									              </div>

									              <?php if(get_sub_field('image_bottom')) { ?>
													 	<img class="card-img-bottom" src="<?php the_sub_field('image_bottom'); ?>" alt="<?php the_sub_field('title'); ?>">
												  <?php } ?>


										</div>
									<?php endwhile; endif; ?>
								</div>
							</div>	 
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
	</section>
<?php endif; ?>