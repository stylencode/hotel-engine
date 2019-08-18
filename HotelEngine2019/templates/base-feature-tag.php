<?php 

	

	if (get_field('featureTag_headline'))
	{

	$featureTag_text_color = get_field('featureTag_text_color');
	$featureTag_text_position = get_field('featureTag_text_position');

	$featureTag_alignment = get_field('featureTag_alignment');

	$featureTag_topic = get_field('featureTag_topic');
	$featureTag_headline = get_field('featureTag_headline');
	$featureTag_body = get_field('featureTag_body');

	$featureTag_tagline = get_field('featureTag_tagline');

	$featurette_cta = get_field('featureTag_cta');

	// text link or button
	$featureTag_cta_type = get_field('featureTag_cta_type');

	$featureTag_height = get_field('featureTag_min_height');

	//echo "LOADING ".$layout." - ".$featurette_alignment; 

?>



	<section class=" featurewithtag container p-0" style="position: relative;">

		<div class="w-25 tag-wrap xs-hide">

				                <div class="col p-5">	
									

									    <?php if ($featureTag_tagline) { ?><h4 class="text-<?php echo $featureTag_text_position; ?>"><?php echo $featureTag_tagline; ?></h4><?php } ?>


				                </div>
				                
		</div>

		<div class="row m-0 flex-row d-flex align-items-center" style="background-image: url('<?php if ( wp_is_mobile() ) { ?><?php the_field('featureTag_image_sm'); ?><?php } else { ?><?php the_field('featureTag_image'); ?><?php } ?>'); background-size: cover; background-position: center; min-height: <?php echo $featureTag_height; ?>">

				                <div class="col-md-6 offset-md-6 col-sm-12  <?php if($featureTag_alignment == 'right') { echo "offset-md-6"; }?> p-5">

					                  
					                  <?php if ($featureTag_topic) { ?><h5 class="text-<?php echo $featureTag_text_position; ?>" <?php if ( wp_is_mobile() ) { ?> style="color:white;"<?php } ?>>
					                  <?php echo $featureTag_topic; ?></h5><?php } ?>
									  <?php if ($featureTag_headline) { ?><h3 class="text-<?php echo $featureTag_text_position; ?>" <?php if ( wp_is_mobile() ) { ?> style="color:white;"<?php } ?>>	<?php echo $featureTag_headline; ?></h3>
									  <?php } ?>
									    <?php if ($featureTag_body) { ?><p class="text-<?php echo $featureTag_text_position; ?>" <?php if ( wp_is_mobile() ) { ?> style="color:white;"<?php } ?>><?php echo $featureTag_body; ?></p><?php } ?>




									       <?php if( have_rows('feature_tag_button') ): while( have_rows('feature_tag_button')) : the_row(); ?>
														<a class="btn" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
															<?php the_sub_field('button_text'); ?>
														</a>
													<?php endwhile; endif; ?>


				                </div>
				                
		</div>

		
	</section>





<?php


};

?>

