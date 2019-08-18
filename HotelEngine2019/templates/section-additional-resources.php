<?php if(get_field('ar_headline')) { 


// pull variables for cleaner look
$ar_headline = get_field('ar_headline');
$ar_subheading = get_field('ar_subheading');
} ?>

<?php if ($ar_headline) { ?>

<section id="additionalResources" class="container">
      <div class="row text-left m-0 pt-5 pb-5">
        <div class="col-md-4 col-sm-12">
                <h3><?php echo $ar_headline; ?></h3>
                <p><?php echo $ar_subheading; ?></p>
        </div>
         <div class="col-md-7 offset-md-1 col-sm-12 text-left">
               <div id="accordionAdditionalResources">
         			<?php if( have_rows('ar_sections')) { 
         			 	$i = 0;
         			 	// target controls with diff suffix
         			 	$sfx = '_ar';
         				while( have_rows('ar_sections')) {							
         				 	$i ++;	
         				 	the_row(); 
							?>
							<div class="card">
							    <div class="card-header" id="heading_<?php echo $i.$sfx; ?>">
							        <div class="row collapsed p-3" data-toggle="collapse" data-target="#collapse_<?php echo $i.$sfx; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $i.$sfx; ?>">
							          <?php the_sub_field('title'); ?>
							        </div>
							    </div>
							    <div id="collapse_<?php echo $i.$sfx; ?>" class="collapse" aria-labelledby="heading_<?php echo $i.$sfx; ?>" data-parent="#accordionAdditionalResources">
							      <div class="card-body">
							        <?php the_sub_field('text'); ?>
							      </div>
							    </div>
							 </div>	  
					<?php }}; ?>
				</div> <!-- end Additional Resources -->
				<!-- Say hi to CEO -->
			 	<?php if( have_rows('ceo_block')): while( have_rows('ceo_block')) : the_row(); ?>
					<div id="hiToCEO" class="mt-3">
								<div class="card">
									<div class="card-header" id="heading_hiceo">
										<div class="row collapsed" data-toggle="collapse" data-target="#collapse_hiceo" aria-expanded="false" aria-controls="collapse_hiceo">
										<?php if(get_sub_field('image')) { ?>
										  <div class="col-1">
											  <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
										  </div>
										<?php } ?>
										<?php if(get_sub_field('image')) { ?>
										  <div class="col-8 m-2">
											  <?php the_sub_field('title'); ?>
										  </div>
										<?php } ?>
										</div>
									</div>
									<?php if(get_sub_field('info')) { ?>
										<div id="collapse_hiceo" class="collapse" aria-labelledby="heading_hiceo" data-parent="#hiToCEO">
										  <div class="card-body">
												<?php the_sub_field('info'); ?>
										  </div>
										</div>
									<?php } ?>
								 </div>	  
					</div>
			 	<?php endwhile; endif; ?>
        </div>
      </div>
</section>
<?php }; ?>
