<?php if( have_rows('2_col_about') ): while( have_rows('2_col_about')) : the_row(); ?>	
	<section class="2col-about container">
		  <div class="row text-left m-0 pt-5 pb-5">
			<!-- set up columns for repetition -->
			 <div class="col-sm-6" style="padding: 150px 20px;" >
				 <?php if(get_sub_field('title')) { ?>
					<h3 style="color: #333;"><?php the_sub_field('title'); ?></h2>
				 <?php } ?>
				 <?php if(get_sub_field('content')) { ?>
					<?php the_sub_field('content'); ?>
				 <?php } ?>
			</div>
			 <div class="col-sm-6 p-3 text-center">
				 <?php if(get_sub_field('featured_image')) { ?>
					<img class="img-fluid" src="<?php the_sub_field('featured_image'); ?>" alt="<?php the_sub_field('title'); ?>">
				 <?php } ?>
			</div>
		  </div>
	</section>
<?php endwhile; endif; ?>