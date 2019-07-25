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

		<div class="row m-0 flex-row d-flex align-items-center" style="background-image: url('<?php the_field('featureTag_image'); ?>'); background-size: cover; background-position: center; min-height: <?php echo $featureTag_height; ?>">

				                <div class="col-md-6 offset-md-6 col-sm-12  <?php if($featureTag_alignment == 'right') { echo "offset-md-6"; }?> p-5">

					                  
					                  <?php if ($featureTag_topic) { ?><h5 class="text-<?php echo $featureTag_text_position; ?>">

					                  <?php echo $featureTag_topic; ?></h5><?php } ?>

									              

									  <?php if ($featureTag_headline) { ?><h3 class="text-<?php echo $featureTag_text_position; ?>">	<?php echo $featureTag_headline; ?></h3>
									  <?php } ?>
									              

									    <?php if ($featureTag_body) { ?><p class="text-<?php echo $featureTag_text_position; ?>"><?php echo $featureTag_body; ?></p><?php } ?>



									    <?php if ($featureTag_cta['featureTag_cta_url']['url']) { ?>

									        <a class="btn btn-primary" href="<?php echo $featureTag_cta['cta_url']['url']; ?>" target="_blank" style="color: white;"><?php echo $featureTag_cta['cta_label']; ?></a>

									    <?php } ?>


				                </div>
				                
		</div>

		
	</section>





<?php


};

?>

