<?php 


// defaults
$featurette_layout = "1";


// check if the flexible content field has rows of data
if( have_rows('featurette') ):

     // loop through the rows of data
    while ( have_rows('featurette') ) : the_row();

        if( get_row_layout() == 'add_featurette' ){

			$featurette_layout = get_sub_field('featurette_layout');	
        	
        	load_view($featurette_layout);

        }

    endwhile;

else :

    // no layouts found

endif;
?>




<?php 

function load_view($layout){


	$featurette_alignment = get_sub_field('featurette_alignment');

	$featurette_text_color = get_sub_field('featurette_text_color');
	$featurette_text_position = get_sub_field('featurette_text_position');
	$featurette_bkg_color = get_sub_field('featurette_bkg_color');

	$featurette_topic = get_sub_field('featurette_topic');
	$featurette_headline = get_sub_field('featurette_headline');
	$featurette_body = get_sub_field('featurette_body');


	$featurette_cta = get_sub_field('button');

	// text link or button
	$featurette_cta_type = get_sub_field('featurette_cta_type');

	$featurette_height = get_sub_field('min_height');

	//echo "LOADING ".$layout." - ".$featurette_alignment; 

	?>




	<section class="container featuresection p-0 <?php echo $featurette_text_color; ?>" style="background-color: <?php echo $featurette_bkg_color; ?>;">

			
		<?php if($layout == '1') { ?>
			<!-- BASIC LAYOUT -->
		
 
				<div class="row m-0 p-5 flex-row d-flex align-items-center" style="min-height: <?php echo $featurette_height; ?>">

				                <div class="col-md-6 <?php if($featurette_alignment == 'right') { echo "order-md-2"; }?>">
					                  <!-- vertical align containers -->
									  			<div class="col-lg-9 offset-lg-1">					              
									              <?php if ($featurette_topic) { ?><h5 class="text-<?php echo $featurette_text_position; ?>"><?php echo $featurette_topic; ?></h5><?php } ?>

									              

									              <?php if ($featurette_headline) { ?><h3 class="text-<?php echo $featurette_text_position; ?>"><?php echo $featurette_headline; ?></h3>
									              <?php } ?>
									              

									              <?php if ($featurette_body) { ?><p class="text-<?php echo $featurette_text_position; ?>"><?php echo $featurette_body; ?></p><?php } ?>



									              <?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
														<a class="btn" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
															<?php the_sub_field('button_text'); ?>
														</a>
													<?php endwhile; endif; ?>
												</div>
				                </div>

				                <div class="col-md-6 <?php if($featurette_alignment == 'right') { echo "order-md-1"; }?>">

				                			<img src="<?php the_sub_field('featurette_image'); ?>" style="display: block;" class="m-auto w-100 p-3" />                 		
				                  
				                </div>
				                
				</div>

			


		<?php	 }; ?>




		<?php if($layout == '2') { ?>

				<!-- bkg full one col -->
				<div class="row m-0 flex-row d-flex align-items-center" >


				                <div class="col-md-6 <?php if($featurette_alignment == 'right') { echo "order-md-2"; }?>" style="background-image: url('<?php the_sub_field('featurette_image'); ?>'); background-size: cover; background-position: center; min-height: <?php echo $featurette_height; ?>">
				                  
				                </div>

				                <div class="col-md-6 <?php if($featurette_alignment == 'right') { echo "order-md-1"; }?> p-5 mt-2">

					                  
					                  <?php if ($featurette_topic) { ?><h5 class="text-<?php echo $featurette_text_position; ?>">

					                  <?php echo $featurette_topic; ?></h5><?php } ?>

									              

									  <?php if ($featurette_headline) { ?><h3 class="text-<?php echo $featurette_text_position; ?>">	<?php echo $featurette_headline; ?></h3>
									  <?php } ?>
									              

									    <?php if ($featurette_body) { ?><p class="text-<?php echo $featurette_text_position; ?>"><?php echo $featurette_body; ?></p><?php } ?>



									    <?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
												<a class="btn" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
													<?php the_sub_field('button_text'); ?>
												</a>
										<?php endwhile; endif; ?>
				                </div>
				                
				</div>

		<?php }; ?>






		
		<?php if($layout == '3') { ?>
		<!-- full bkg image text column -->

				<div class="row m-0 flex-row d-flex align-items-center" style="background-image: url('<?php if ( wp_is_mobile() ) { ?><?php if(get_sub_field('tablet_down_image')) { ?><?php the_sub_field('tablet_down_image'); ?><?php } ?><? } else { ?><?php the_sub_field('featurette_image'); ?><?php } ?>'); background-size: cover; background-position: center; min-height: <?php echo $featurette_height; ?>">

				                <div class="col-md-6 <?php if($featurette_alignment == 'right') { echo "offset-md-6"; }?> p-5">

					                  
					                  <?php if ($featurette_topic) { ?><h5 class="text-<?php echo $featurette_text_position; ?>">

					                  <?php echo $featurette_topic; ?></h5><?php } ?>

									              

									  <?php if ($featurette_headline) { ?><h3 class="text-<?php echo $featurette_text_position; ?>">	<?php echo $featurette_headline; ?></h3>
									  <?php } ?>
									              

									    <?php if ($featurette_body) { ?><p class="text-<?php echo $featurette_text_position; ?>"><?php echo $featurette_body; ?></p><?php } ?>



									    <?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
												<a class="btn" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
													<?php the_sub_field('button_text'); ?>
												</a>
										<?php endwhile; endif; ?>


				                </div>
				                
				</div>



		<?php }; ?>






		</section>













<?php


};

?>

