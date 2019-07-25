<?php if(get_field('hero_layout')) { 


// pull variables for cleaner look

$hero_layout = get_field('hero_layout');

$hero_topic = get_field('hero_topic');
$hero_headline = get_field('hero_headline');
$hero_subheading = get_field('hero_subheading');

$hero_cta = get_field('hero_cta');

$text_color = get_field('hero_text_color');
$text_position = get_field('hero_position');

$height = get_field('hero_height');


} ?>



<?php if ($hero_layout == 'full') { ?>

<section id="hero" class="container p-0 <?php echo $text_color; ?>" style="background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>'); margin-top: 120px; background-position: center; background-size: cover; ">


    <!-- vertical align containers -->
    <div class="d-flex align-items-center justify-content-<?php echo $text_position; ?>" style="height: <?php echo $height; ?>">

          <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 text-<?php echo $text_position; ?> p-5">

              
              <?php if ($hero_topic) { ?><h5 class="text-<?php echo $text_position; ?>"><?php echo $hero_topic; ?></h5><?php } ?>

              

              <?php if ($hero_headline) { ?><h1 class="h2 text-<?php echo $text_position; ?>"><?php echo $hero_headline; ?></h1>
              <?php } ?>
              

              <?php if ($hero_subheading) { ?><p class="text-<?php echo $text_position; ?>"><?php echo $hero_subheading; ?></p><?php } ?>



              <?php if ($hero_cta['hero_cta_url']['url']) { ?>

                    <a class="btn btn-primary" href="<?php echo $hero_cta['hero_cta_url']['url']; ?>" target="_blank" style="color: white;"><?php echo $hero_cta['hero_cta_label']; ?></a>

              <?php } ?>


          </div>
    </div>

</section>

<?php } else { ?>


<section id="hero" class="container p-0 <?php echo $text_color; ?>" style="margin-top: 120px;">

      <div class="row text-left m-0" style="min-height: <?php echo $height; ?>">
        
         <div class="col-sm-6 p-0" style="background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>'); background-position: center; background-size: cover;">
                      
          </div>

         <div class="col-sm-6 text-<?php echo $text_position; ?> p-5">
               
              <!-- vertical align containers -->        
              <div class="d-flex align-items-center justify-content-<?php echo $text_position; ?>" style="height: <?php echo $height; ?>">

                    <div class="content text-<?php echo $text_position; ?> p-5">

                        

                        <?php if ($hero_topic) { ?><h5 class="text-<?php echo $text_position; ?>"><?php echo $hero_topic; ?></h5><?php } ?>

                        

                        <?php if ($hero_headline) { ?><h1 class="h2 text-<?php echo $text_position; ?>"><?php echo $hero_headline; ?></h1>
                        <?php } ?>
                        

                        <?php if ($hero_subheading) { ?><h2 class="h3 text-<?php echo $text_position; ?>"><?php echo $hero_subheading; ?></h2><?php } ?>



                        <?php if ($hero_cta['hero_cta_url']['url']) { ?>

                              <a class="btn btn-primary" href="<?php echo $hero_cta['hero_cta_url']['url']; ?>" target="_blank" style="color: white;"><?php echo $hero_cta['hero_cta_label']; ?></a>

                        <?php } ?>


                    </div>
              </div>


       
        </div>

      </div>
</section>
<?php }; ?>