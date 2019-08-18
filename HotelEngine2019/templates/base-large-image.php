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


	<div class="row m-0 bgptrn" <?php if ( wp_is_mobile() ) { ?><?php }else { ?>style="background-image:url('<?php the_field('lgImage_desktop_background_image'); ?>'); background-position: top; background-size: cover; background-repeat: no-repeat; "<?php } ?>>             
    
    	<div class="container p-0">        
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
	              <?php if ($lgImage_image) { ?>

						<?php if ( wp_is_mobile() ) { ?>

							<img src="<?php the_field('lgImage_tablet_down_background_image'); ?>" style="display: block;" class="m-auto w-100" /> 
						

						<?php } else { ?>
							<div class="lgimage-wrap m-auto w-100" style="background-image:url('<?php the_field('lgImage_image'); ?>'); background-position: top; background-size: contain; background-repeat: no-repeat;">
								<?php if( have_rows('video') ): while( have_rows('video')) : the_row(); ?>
										<video class="m-auto w-100" id="video" style="position: absolute; top: 0; left: 0;" autoplay="" loop="" muted="" class="skrollable skrollable-between mobile-hide" style="background-position: center center; pointer-events: none;">
											<source src="<?php the_sub_field('mp4_video'); ?>" type="video/mp4">
											<source src="<?php the_sub_field('webm_video'); ?>" type="video/webm">
										</video>
								<?php endwhile; endif; ?>
							</div>
						<?php } ?>


	                    

	              <?php } ?>
             </div>
        </div>

     </div>

     <!-- body of text -->
    <div class="row m-0">
    	<div class="container pt-5 pb-5 justify-content-<?php echo $text_position; ?>">

	          <div class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-3 col-md-12 text-<?php echo $text_position; ?> p-5">

	              
	              <?php if ($lgImage_topic) { ?><h5 class="text-<?php echo $text_position; ?>"><?php echo $lgImage_topic; ?></h5><?php } ?>

	              

	              <?php if ($lgImage_headline) { ?><h3 class="text-<?php echo $text_position; ?>"><?php echo $lgImage_headline; ?></h3>
	              <?php } ?>
	              

	              <?php if ($lgImage_body) { ?><p class="text-<?php echo $text_position; ?>"><?php echo $lgImage_body; ?></p><?php } ?>


					<?php if( have_rows('large_image_button') ): while( have_rows('large_image_button')) : the_row(); ?>
												<a class="btn btn-primary" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
													<?php the_sub_field('button_text'); ?>
												</a>
					<?php endwhile; endif; ?>			  


	          </div>
	    </div>
	</div>
</section>

<?php }; ?>