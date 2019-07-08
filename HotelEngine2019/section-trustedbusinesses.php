<?php if(get_field('trusted_businesses_headline', '4')) {?>
<!-- Trusted by 20,000 Businesses -->
    <section id="logos" class="xs-hide">
      <div class="container">
        <div class="row justify-content-center">
			<div class="col-12 text-center">
				<h5><?php the_field('trusted_businesses_headline'); ?></h5>
			</div>




			<?php 

			// how many total logos are there
			$count = count(get_field('logo')); 

			?>


			<?php 

			// if 5 or less, show just logos
			if( have_rows('logo', '4') && $count < 6 ): while( have_rows('logo', '4')) : the_row(); ?>

			  <div class="col-lg-2 col-sm-4">
				<div class="logo-single">
				  <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" />
				</div>
			  </div>

			<?php endwhile; endif; ?>


			<?php 

			// if more than 5 show carousel
			if( have_rows('logo', '4') && $count > 5 ): ?>

			  <!-- insert slick-logo carousel -->
			  <div class="hp-slider__logos-outer col-lg-10 col-12">
		              <div class="hp-slider__logos-outer--reset">
		                <div id="hp-slider__logos">

							<?php while( have_rows('logo', '4')) : the_row(); ?>
							  
							  <div class="logo-single">
								<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" style="opacity: 1 !important;"/>
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