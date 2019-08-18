<?php if(get_field('section_title')){ ?>
	<section class="container image-grid-3">
		<div class="row" style="padding: 30px 30px;">
				<div class="col-12 text-center">
						<h3><?php the_field('section_title'); ?></h3>
				</div>
		</div>
		<?php if( get_field('block_layout') == 'standard' ): ?>
			<div class="row justify-content-center">
				<div class="col-md-10 col-sm-12">
					<div class="row">
						<?php if( have_rows('content_block')): while( have_rows('content_block')) : the_row(); ?>
							<?php if( have_rows('block_1')): while( have_rows('block_1')) : the_row(); ?>
								 <div class="col-sm-4 p-0">
									<div class="content m-1">
										<?php if(get_sub_field('image')) { ?>
									  		<img class="w-100" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title');?>" />
										<?php } ?>
										<?php if(get_sub_field('title')) { ?>
									  		<p class="card-title"><?php the_sub_field('title'); ?></p>
										<?php } ?>
									</div>
								 </div>
							<?php endwhile; endif; ?>
							<?php if( have_rows('block_2')): while( have_rows('block_2')) : the_row(); ?>
								 <div class="col-sm-4 p-0">
									<div class="content m-1">
										<?php if(get_sub_field('image')) { ?>
									  		<img class="w-100" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title');?>" />
										<?php } ?>
										<?php if(get_sub_field('title')) { ?>
									  		<p class="card-title"><?php the_sub_field('title'); ?></p>
										<?php } ?>
									</div>
								 </div>
							<?php endwhile; endif; ?>
							<?php if( have_rows('block_3')): while( have_rows('block_3')) : the_row(); ?>
								 <div class="col-sm-4 p-0">
									<div class="content m-1">
										<?php if(get_sub_field('image')) { ?>
									  		<img class="w-100" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title');?>" />
										<?php } ?>
										<?php if(get_sub_field('title')) { ?>
									  		<p class="card-title"><?php the_sub_field('title'); ?></p>
										<?php } ?>
									</div>
								 </div>
							<?php endwhile; endif; ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</section>
<?php } ?>

