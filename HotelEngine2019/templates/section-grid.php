<section class="container-fluid grid">

	
<?php if( have_rows('grid') ): while( have_rows('grid')) : the_row(); ?>	
	<div class="row">
				 <div class="col-md-5 col-sm-4 col-6 p-1 h-25">
				 	<div class="content " style="background-image: url('<?php the_sub_field('image_1'); ?>'); background-position: center; background-size: cover; height: 300px;">
					</div>
				 </div>
				 <div class="col-md-2 col-sm-4 col-6 p-1  h-25">
			         <div class="content " style="background-image: url('<?php the_sub_field('image_2'); ?>'); background-position: center; background-size: cover; height: 300px;">
					</div>
				 </div>
				 <div class="col-md-5 col-sm-4 col-6 p-1 h-25">
			         <div class="content " style="background-image: url('<?php the_sub_field('image_3'); ?>'); background-position: center; background-size: cover; height: 300px;">
					</div>
				 </div>
				 <div class="col-md-2 col-sm-4 col-6 p-1 h-25">
				 	<div class="content " style="background-image: url('<?php the_sub_field('image_4'); ?>'); background-position: center; background-size: cover; height: 300px;">
					</div>
				 </div>
				 <div class="col-md-5 col-sm-4 col-6 p-1 h-25">
			         <div class="content " style="background-image: url('<?php the_sub_field('image_5'); ?>'); background-position: center; background-size: cover; height: 300px;">
					</div>
				 </div>
				 <div class="col-md-5 col-sm-4 col-6 p-1 h-25">
			         <div class="content " style="background-image: url('<?php the_sub_field('image_6'); ?>'); background-position: center; background-size: cover; height: 300px;">
					</div>
				 </div>
	</div>
<?php endwhile; endif; ?>

</section>

