	<section class="container image-grid-team">
		<div class="row" style="padding: 30px 0;">
			<?php if(get_field('section_title')) { ?>
				<div class="col-12 text-center">
						<h3><?php the_field('section_title'); ?></h3>
				</div>
			<?php } ?>
		</div>
		<div class="row justify-content-center">
			<div class="col-11">
				<div class="row">
					<?php if( have_rows('content_block') ): while( have_rows('content_block')) : the_row(); ?>	
						<?php if( have_rows('block_1') ): while( have_rows('block_1')) : the_row(); ?>	
							<?php if(get_sub_field('image')) { ?>
							 <div class="col-md-4 col-sm-6 offset-sm-0 col-10 offset-1  p-2">
								<div class="content m-1 logo-single">
								  <img class="image" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
									<div class="overlay overlay-content xs-hide tablet-hide mobile-hide">
										<?php the_sub_field('hover_text_info'); ?>
									</div>
								</div>
								<p class="card-title"><b><?php the_sub_field('title'); ?></b></p>
								<p><?php the_sub_field('subtitle'); ?></p>
							 </div>
							<?php } ?>
						<?php endwhile; endif; ?>
						<?php if( have_rows('block_2') ): while( have_rows('block_2')) : the_row(); ?>	
							<?php if(get_sub_field('image')) { ?> 
								<div class="col-md-4 col-sm-6 offset-sm-0 col-10 offset-1 p-2">
									<div class="content m-1 logo-single">
									  <img class="image" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
										<div class="overlay overlay-content xs-hide tablet-hide mobile-hide">
											<?php the_sub_field('hover_text_info'); ?>
										</div>
									</div>
									<p class="card-title"><b><?php the_sub_field('title'); ?></b></p>
									<p><?php the_sub_field('subtitle'); ?></p>
								 </div>
								<?php } ?>
						<?php endwhile; endif; ?>
						<?php if( have_rows('block_3') ): while( have_rows('block_3')) : the_row(); ?>	
							<?php if(get_sub_field('image')) { ?> 
							 <div class="col-md-4 col-sm-6 offset-sm-0 col-10 offset-1 p-2">
								<div class="content m-1 logo-single">
								  <img class="image" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
									<div class="overlay overlay-content xs-hide tablet-hide mobile-hide">
										<?php the_sub_field('hover_text_info'); ?>
									</div>
								</div>
								<p class="card-title"><b><?php the_sub_field('title'); ?></b></p>
								<p><?php the_sub_field('subtitle'); ?></p>
							 </div>
							<?php } ?>
						<?php endwhile; endif; ?>
					 <?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</section>

