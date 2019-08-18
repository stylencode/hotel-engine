<?php if(get_field('hero_layout')) { 


// pull variables for cleaner look

$hero_layout = get_field('hero_layout');

$hero_topic = get_field('hero_topic');
$hero_headline = get_field('hero_headline');
$hero_subheading = get_field('hero_subheading');

$hero_cta = get_field('hero_button');

$text_color = get_field('hero_text_color');
$text_position = get_field('hero_position');

$height = get_field('hero_height');


} ?>



<?php if ($hero_layout == 'full') { ?>

<section id="hero" class="container p-0 <?php echo $text_color; ?>" style="background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>'); background-position: center; background-size: cover; ">


    <!-- vertical align containers -->
    <div class="d-flex align-items-center justify-content-<?php echo $text_position; ?>" style="height:<?php if ( wp_is_mobile() ) { ?><?php if(get_field('hero_mobile_height')){ ?><?php the_field('hero_mobile_height'); ?><?php } ?><?php } else { ?><?php echo $height; ?><?php } ?>">

          <div class="lg-header-width col-sm-10 text-<?php echo $text_position; ?> p-5">

              
              <?php if ($hero_topic) { ?><h5 class="text-<?php echo $text_position; ?>"><?php echo $hero_topic; ?></h5><?php } ?>

              

              <?php if ($hero_headline) { ?><h1 class="h2 text-<?php echo $text_position; ?>"><?php echo $hero_headline; ?></h1>
              <?php } ?>
              

              <?php if ($hero_subheading) { ?><p class="text-<?php echo $text_position; ?>"><?php echo $hero_subheading; ?></p><?php } ?>


				<?php if ($hero_cta) { ?>
              		<?php if( have_rows('hero_button') ): while( have_rows('hero_button')) : the_row(); ?>
														<a class="btn" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
															<?php the_sub_field('button_text'); ?>
														</a>
													<?php endwhile; endif; ?>
			 	<?php } ?>


          </div>
    </div>

</section>

<?php } else { ?>


<section id="hero" class="container p-0 <?php echo $text_color; ?>">

      <div class="row text-left m-0" style="min-height: <?php echo $height; ?>">
        
         <div class="col-md-6 p-0 xs-hide" style="background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>'); background-position: center; background-size: cover;">
                      
          </div>

         <div class="col-md-6 padz text-<?php echo $text_position; ?>">
               
              <!-- vertical align containers -->        
              <div class="d-flex align-items-center justify-content-<?php echo $text_position; ?>" style="height:<?php if ( wp_is_mobile() ) { ?><?php if(get_field('hero_mobile_height')){ ?><?php the_field('hero_mobile_height'); ?><?php } ?><?php } else { ?><?php echo $height; ?><?php } ?>">

                    <div class="content text-<?php echo $text_position; ?>">
						<div class="col-xxl-10 col-lg-12">
							<?php if ($hero_topic) { ?>
								<h5 class="text-<?php echo $text_position; ?>"><?php echo $hero_topic; ?></h5>
							<?php } ?>
							<?php if ($hero_headline) { ?>
								<h1 class="h2 text-<?php echo $text_position; ?>"><?php echo $hero_headline; ?></h1>
							<?php } ?>
							<?php if ($hero_subheading) { ?>
								<p class="text-<?php echo $text_position; ?>"><?php echo $hero_subheading; ?></p><?php } ?>
							<?php if ($hero_cta) { ?>
								<?php if( have_rows('hero_button') ): while( have_rows('hero_button')) : the_row(); ?>
														<a class="btn" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
															<?php the_sub_field('button_text'); ?>
														</a>
													<?php endwhile; endif; ?>
							<?php } ?>
						</div>
                    </div>
              </div>
       		</div>
		  	<div class="col-md-6 p-0 xs-show" style="background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>'); background-position: center; background-size: cover;">
                      
          	</div>
      </div>
</section>
<?php }; ?>