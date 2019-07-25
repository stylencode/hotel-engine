	<section class="container image-grid-team" style="padding: 100px 30px;">
		<div class="row" style="padding: 30px 30px;">
			<?php if(get_field('section_title')) { ?>
				<div class="col-12 text-center">
						<h3><?php the_field('section_title'); ?></h3>
				</div>
			<?php } ?>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-sm-10">
				<div class="row">
					<?php if( have_rows('content_block') ): while( have_rows('content_block')) : the_row(); ?>	
						<?php if( have_rows('block_1') ): while( have_rows('block_1')) : the_row(); ?>	
							 <div class="col-sm-4 p-0">
								<div class="content m-1">
								  <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" class="w-100">
								  <p class="card-title"><b><?php the_sub_field('title'); ?></b></p>
									<p><?php the_sub_field('subtitle'); ?></p>
									<div class="overlay-content" style="display: none;">
										<?php the_sub_field('hover_text_info'); ?>
									</div>
								</div>
							 </div>
						<?php endwhile; endif; ?>
						<?php if( have_rows('block_2') ): while( have_rows('block_2')) : the_row(); ?>	
							 <div class="col-sm-4 p-0">
								<div class="content m-1">
								  <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" class="w-100">
								  <p class="card-title"><b><?php the_sub_field('title'); ?></b></p>
								  <p><?php the_sub_field('subtitle'); ?></p>
								  <div class="overlay-content" style="display: none;">
										<?php the_sub_field('hover_text_info'); ?>
								  </div>
								</div>
							 </div>
						<?php endwhile; endif; ?>
						<?php if( have_rows('block_3') ): while( have_rows('block_3')) : the_row(); ?>	
							 <div class="col-sm-4 p-0">
								<div class="content m-1">
								  <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" class="w-100">
								  <p class="card-title"><b><?php the_sub_field('title'); ?></b></p>
								  <p><?php the_sub_field('subtitle'); ?></p>
								  <div class="overlay-content" style="display: none;">
										<?php the_sub_field('hover_text_info'); ?>
								  </div>
								</div>
							 </div>
						<?php endwhile; endif; ?>
					 <?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</section>

