<?php if( have_rows('career_benefits')): while( have_rows('career_benefits')) : the_row(); ?>
	<section id="benefits">
			<div class="container-fluid p-0"> 
			  <div class="row text-left m-0">
					 <div class="col-xl-4 offset-xl-1 col-md-5 col-sm-6 col-12">
						 <?php if(get_sub_field('icon')) { ?>
							<img src="<?php the_sub_field('icon'); ?>" alt="Image">
						  <?php } ?>
						  <?php if(get_sub_field('topic')) { ?>
							<h5 style="color: white;"><?php the_sub_field('topic'); ?></h5>
						  <?php } ?>
						  <?php if(get_sub_field('title')) { ?>
							<h4 style="color: white;"><?php the_sub_field('title'); ?></h4>
						  <?php } ?>
						  <?php if(get_sub_field('description')) { ?>
							<p style="color: white;"><?php the_sub_field('description'); ?></p>
						  <?php } ?>
					</div>
					 <div class="col-md-5 offset-md-1 col-sm-6 col-12">
						 <?php if( have_rows('list_item')): ?>
							<ul style="color: white;">
								<?php while( have_rows('list_item')) : the_row(); ?>
									<li><?php the_sub_field('item'); ?></li>
								<?php endwhile; ?>
							</ul>
						 <?php endif; ?>
					</div>
				</div>
			  </div>
	</section>
<?php endwhile; endif; ?>
