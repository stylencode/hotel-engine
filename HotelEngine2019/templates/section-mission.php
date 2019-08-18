<?php if(get_field('mission_objectives')) {?>
    <section id="logos" class="missions">
      <div class="container">
		<div class="row justify-content-md-center">
			<?php 
			$count = count(get_field('mission_objectives')); 
			?>
			<?php 
			if( have_rows('mission_objectives')): while( have_rows('mission_objectives')) : the_row(); ?>
			  <div class="col-lg-3 col-md-6 col-12 p-2">
				<div class="logo-single" >
				  <img class="image" src="<?php the_sub_field('mission_image'); ?>" alt="<?php the_sub_field('mission_description'); ?>" />
					<?php if(get_sub_field('mission_description')) { ?>
						<div class="overlay tablet-hid mobile-hide">
							<p><?php the_sub_field('mission_description'); ?><p>
						</div>
					<?php } ?>
				</div>
				<?php if(get_sub_field('mission_description')) { ?>
					<div class="mobile-show tablet-show">
						<p style="color: black;"><?php the_sub_field('mission_description'); ?><p>
					</div>
				<?php } ?>
			  </div>
			<?php endwhile; endif; ?>
        </div>
      </div> 
    </section>
<?php } ?>

