<?php if( have_rows('hq_block')): while( have_rows('hq_block')) : the_row(); ?>
	<section id="headquarters" class="container">
		  <div class="row text-left m-0 pt-5 pb-5">
			 <?php if(get_sub_field('title')) { ?>
				 <div class="col-sm-5">
						<h4><?php the_sub_field('title'); ?></h4>
				</div>
			 <?php } ?>
			 <div class="col-sm-7 p-3 text-left">
				<div class="row">
					<?php if( have_rows('address')): while( have_rows('address')) : the_row(); ?>
						<div class="col">
							<?php if(get_sub_field('icon')) { ?>
								<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_field('title'); ?>" />
							<?php } ?>
							<p>
								<?php if(get_sub_field('address')) { ?>
									<?php the_sub_field('address'); ?>
								<?php } ?><br />
								<?php if(get_sub_field('button_text')) { ?>
									<a href="<?php the_sub_field('address_link'); ?>" target="_blank"><?php the_sub_field('button_text'); ?></a>
								<?php } ?>
							</p>
						</div>
					<?php endwhile; endif; ?>
					<?php if( have_rows('phone')): while( have_rows('phone')) : the_row(); ?>
						<div class="col">
							<?php if(get_sub_field('icon')) { ?>
								<img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('number'); ?>" />
							<?php } ?>
						<br>
							<a href="tel:+1-<?php the_sub_field('click_to_call'); ?>">
								<?php the_sub_field('number'); ?>
							</a>
						</div>
					<?php endwhile; endif; ?>
				</div>   
			</div>
		  </div>
	</section>
<?php endwhile; endif; ?>
<?php if(get_field('map_embed')) { ?>
	<section id="createAccount" class="container">
		  <div class="row m-0 p-0">
			<div class="w-100 text-center" >
					<?php the_field('map_embed'); ?>
			</div>
		  </div>
	</section>
<?php } ?>