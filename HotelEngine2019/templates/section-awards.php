<?php if(get_field('awards_logo')) {?>

<!-- AWARDS -->

    <section id="logos" class="xs-hide">
      <div class="container">
        <div class="row justify-content-center">
			<div class="col-12 text-center">
				<h2><?php the_field('awards_headline'); ?></h2>
			</div>

		</div>
		<div class="row justify-content-md-center">


			<?php 

			// how many total logos are there
			$count = count(get_field('awards_logo')); 

			?>


			<?php 

			// if 5 or less, show just logos
			if( have_rows('awards_logo') && $count < 6 ): while( have_rows('awards_logo')) : the_row(); ?>

			  <div class="col-lg-2 col-sm-4">
				<div class="logo-single">
				  <img src="<?php the_sub_field('awards_image'); ?>" alt="<?php the_sub_field('awards_title'); ?>" />
				</div>
			  </div>

			<?php endwhile; endif; ?>


			<?php 

			// if more than 5 show carousel
			if( have_rows('awards_logo', '4') && $count > 5 ): ?>

			  <!-- insert slick-logo carousel -->
			  <div class="hp-slider__logos-outer col-lg-10 col-12">
		              <div class="hp-slider__logos-outer--reset">
		                <div id="hp-slider__logos">

							<?php while( have_rows('awards_logo')) : the_row(); ?>
							  
							  <div class="logo-single">
								<img src="<?php the_sub_field('awards_image'); ?>" alt="<?php the_sub_field('awards_title'); ?>" style="opacity: 1 !important;"/>
							  </div>

							<?php endwhile;	?>


		                </div>
		              </div>
	           </div>
			  <!-- end carousel -->
			<?php  endif; 	?>

        </div>
      </div> 
    </section>
<?php } ?>

