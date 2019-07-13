<?php if(get_field('hero_topic')) { 

$text_color = get_field('hero_text_color');
$text_position = get_field('hero_position');
$hero_layout = get_field('hero_layout');

} ?>



<?php if ($hero_layout == 'full') { ?>

<section id="hero" class="container" style="padding: 150px; background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>');">


      <div class="row text-<?php echo $text_position; ?> m-0 <?php echo $text_color; ?>">
         <div class="col-sm-12 p-0">

               
                <h5 class="h5" style="color: #333;"><?php the_field('hero_topic'); ?></h5>
                <h2 class="h1" style="color: #333;"><?php the_field('hero_headline'); ?></h2>
                <h3 class="h2" style="color: #333;"><?php the_field('hero_subheading'); ?></h3>
       
                <a class="btn btn-primary" href="<?php the_field('hero_cta'); ?>" target="_blank" style="color: white;">Submit Request</a>
       
        </div>
      </div>
</section>

<?php } else { ?>

<section id="hero" class="container">


      <div class="row text-left m-0">
        
         <div class="col-sm-6 p-0" style="background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>'); background-color: #333;">
                      
          </div>

         <div class="col-sm-6" style="padding: 150px 50px;">
               
                <h5 class="h5" style="color: #333;"><?php the_field('hero_topic'); ?></h5>
                <h2 class="h1" style="color: #333;"><?php the_field('hero_headline'); ?></h2>
                <h3 class="h2" style="color: #333;"><?php the_field('hero_subheading'); ?></h3>
       
                <a class="btn btn-primary" href="<?php the_field('hero_cta'); ?>" target="_blank" style="color: white;">Submit Request</a>
       
        </div>
      </div>
</section>
<?php }; ?>