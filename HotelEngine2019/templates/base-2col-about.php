<?php if( have_rows('2_col_about') ): while( have_rows('2_col_about')) : the_row(); ?>	
	<section class="twocol-about container">
		  <div class="row text-left m-0 pt-5 pb-5">
			<!-- set up columns for repetition -->
			 <div class="col-md col-sm-12 my-auto">
				 <div class="col-lg-9 col-md-12">
					 <?php if(get_sub_field('title')) { ?>
						<h3><?php the_sub_field('title'); ?></h2>
					 <?php } ?>
					 <?php if(get_sub_field('content')) { ?>
						<?php the_sub_field('content'); ?>
					 <?php } ?>
				  </div>
			</div>
			 <div class="col-md col-sm-12 p-3 text-center">
				 <?php if(get_sub_field('featured_image')) { ?>
					<img class="img-fluid" src="<?php the_sub_field('featured_image'); ?>" alt="<?php the_sub_field('title'); ?>">
				 <?php } ?>
			</div>
		  </div>
	</section>
<?php endwhile; endif; ?>