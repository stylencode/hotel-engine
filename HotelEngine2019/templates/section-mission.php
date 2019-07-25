<?php if(get_field('mission_objectives')) {?>

<!-- AWARDS -->

    <section id="logos" class="xs-hide">
      <div class="container">
        
		<div class="row justify-content-md-center">


			<?php 

			// how many total logos are there
			$count = count(get_field('mission_objectives')); 

			?>


			<?php 

			// if 5 or less, show just logos
			if( have_rows('mission_objectives')): while( have_rows('mission_objectives')) : the_row(); ?>

			  <div class="col-lg-3 col-sm-3">
				<div class="logo-single">
				  <img src="<?php the_sub_field('mission_image'); ?>" alt="<?php the_sub_field('mission_description'); ?>" />
				  <p><?php the_sub_field('mission_description'); ?></p>
				</div>
			  </div>

			<?php endwhile; endif; ?>


	

        </div>
      </div> 
    </section>
<?php } ?>

