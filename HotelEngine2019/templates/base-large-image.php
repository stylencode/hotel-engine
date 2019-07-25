<?php if(get_field('lgImage_headline')) { 


// pull variables for cleaner look
$lgImage_topic = get_field('lgImage_topic');
$lgImage_headline = get_field('lgImage_headline');
$lgImage_body = get_field('lgImage_body');
$lgImage_bkg_image = get_field('lgImage_bkg_image');
$lgImage_image = get_field('lgImage_image');

$lgImage_cta = get_field('lgImage_cta');

$text_color = get_field('lgImage_text_color');
$text_position = get_field('lgImage_position');


?>


<section id="largeImage" class="container-fluid p-0 <?php echo $text_color; ?>">


	<div class="row m-0" <?php if ( wp_is_mobile() ) { ?><?php }else { ?>style="background-image:url('<?php the_field('lgImage_desktop_background_image'); ?>'); background-position: top; background-size: cover; background-repeat: no-repeat; "<?php } ?>>             
    
    	<div class="container p-0">        
            <div class="col-sm-10 offset-sm-1 col-12">
	              <?php if ($lgImage_image) { ?>

						<?php if ( wp_is_mobile() ) { ?>

							<img src="<?php the_field('lgImage_tablet_down_background_image'); ?>" style="display: block;" class="m-auto w-100" /> 
						

						<?php } else { ?>

							<img src="<?php the_field('lgImage_image'); ?>" style="display: block;" class="m-auto w-100" /> 

						<?php } ?>


	                    

	              <?php } ?>
             </div>
        </div>

     </div>

     <!-- body of text -->
    <div class="row m-0">
    	<div class="container pt-5 pb-5 justify-content-<?php echo $text_position; ?>">

	          <div class="col-md-12 text-<?php echo $text_position; ?> p-5">

	              
	              <?php if ($lgImage_topic) { ?><h5 class="text-<?php echo $text_position; ?>"><?php echo $lgImage_topic; ?></h5><?php } ?>

	              

	              <?php if ($lgImage_headline) { ?><h3 class="text-<?php echo $text_position; ?>"><?php echo $lgImage_headline; ?></h3>
	              <?php } ?>
	              

	              <?php if ($lgImage_body) { ?><p class="text-<?php echo $text_position; ?>"><?php echo $lgImage_body; ?></p><?php } ?>



	              <?php if ($lgImage_cta['cta_url']['url']) { ?>

	                    <a class="btn btn-primary" href="<?php echo $lgImage_cta['cta_url']['url']; ?>" target="_blank" style="color: white;"><?php echo $lgImage_cta['cta_label']; ?></a>

	              <?php } ?>


	          </div>
	    </div>
	</div>
</section>

<?php }; ?>