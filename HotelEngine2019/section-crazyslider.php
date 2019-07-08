<?php if(get_field('business_travel_section_title', '4')) { ?>
<section class="container p-0">
      <div id="lodginginfo">
        <div class="row mobile-hide">
          <div class="col-xl-5 col-lg-6">
            <div class="lodginginfo-thumbnail-col">
              <h3><?php the_field('business_travel_section_title', '4'); ?></h3>
              <div id="slideshow-lodging-thumbnails">
				 <!-- left side navigation -->
				<!-- SLIDE 1 Nav-->
				<?php if( have_rows('slide_1_info', '4') ): while( have_rows('slide_1_info', '4')) : the_row(); ?>
					<div class="lodginginfo-single d-lg-inline-flex">
					  <span class="lodginginfo-single_icon icon-coin"></span>
					  <span class="lodginginfo-single_text">
						<b><?php the_sub_field('slide_title'); ?></b>
						<?php the_sub_field('info'); ?>
					  </span>
					</div>
				<?php endwhile; endif; ?>
				<!-- SLIDE 2 Nav -->
				<?php if( have_rows('slide_2_info', '4') ): while( have_rows('slide_2_info', '4')) : the_row(); ?>
					<div class="lodginginfo-single d-lg-inline-flex">
					  <span class="lodginginfo-single_icon icon-document"></span>
					  <span class="lodginginfo-single_text">
						<b><?php the_sub_field('slide_title'); ?></b>
						<?php the_sub_field('info'); ?>
					  </span>
					</div>
				<?php endwhile; endif; ?>
				<!-- SLIDE 3 Nav-->
				<?php if( have_rows('slide_3_info', '4') ): while( have_rows('slide_3_info', '4')) : the_row(); ?>
					<div class="lodginginfo-single d-lg-inline-flex">
					  <span class="lodginginfo-single_icon icon-collab"></span>
					  <span class="lodginginfo-single_text">
						<b><?php the_sub_field('slide_title'); ?></b>
						<?php the_sub_field('info'); ?>
					  </span>
					</div>
				 <?php endwhile; endif; ?>
				  <!-- end left side navigation -->
              </div>
            </div>
          </div>
          <div class="col-xl-7 col-lg-6">
            <div id="slideshow-lodging-main">
			<!-- right side image 1 -->
			<?php if( have_rows('slide_1_info', '4') ): while( have_rows('slide_1_info', '4')) : the_row(); ?>
				<?php if( have_rows('visual_content') ): while( have_rows('visual_content')) : the_row(); ?>
					  <div class="main-single main-single-image" style="background-image:url('<?php the_sub_field('image'); ?>');">
						  <?php if(get_sub_field('video')) { ?>
								<video id="video mobile-hide" autoplay="" loop="" muted="" class="skrollable skrollable-between mobile-hide" style="background-position: center center; pointer-events: none;">
									<source src="<?php the_sub_field('mp4_video'); ?>" type="video/mp4">
									<source src="<?php the_sub_field('webm_video'); ?>" type="video/webm">
								</video>
						 <?php } ?>
					  </div>
				<?php endwhile; endif; ?>
			<?php endwhile; endif; ?>
            <!-- right side image 2 -->
			<?php if( have_rows('slide_2_info', '4') ): while( have_rows('slide_2_info', '4')) : the_row(); ?>
				<?php if( have_rows('visual_content') ): while( have_rows('visual_content')) : the_row(); ?>
				  <div class="main-single main-single-text" style="background-color:#2F58EB;">
					<h2><?php the_sub_field('title'); ?></h2>
					<ul class="checklist">
						<?php if( have_rows('checklist') ): while( have_rows('checklist')) : the_row(); ?>
						  <li><?php the_sub_field('item'); ?></li>
						<?php endwhile; endif; ?>
					</ul>
					<?php if(get_sub_field('button_text')) { ?>
						<a href="<?php the_sub_field('button_link'); ?>" class="btn btn--white"><?php the_sub_field('button_text'); ?></a>
					<?php } ?>
				  </div>
				<?php endwhile; endif; ?>
			<?php endwhile; endif; ?>
			<!-- right side image 3 -->
			<?php if( have_rows('slide_3_info', '4') ): while( have_rows('slide_3_info', '4')) : the_row(); ?>
              <?php if( have_rows('visual_content') ): while( have_rows('visual_content')) : the_row(); ?>
					  <div class="main-single main-single-image" style="background-image:url('<?php the_sub_field('image'); ?>');">
						  <?php if(get_sub_field('video')) { ?>
								<video id="video mobile-hide" autoplay="" loop="" muted="" class="skrollable skrollable-between mobile-hide" style="background-position: center center; pointer-events: none;">
									<source src="<?php the_sub_field('mp4_video'); ?>" type="video/mp4">
									<source src="<?php the_sub_field('webm_video'); ?>" type="video/webm">
								</video>
						 <?php } ?>
					  </div>
				<?php endwhile; endif; ?>
			<?php endwhile; endif; ?>
            </div>
			
			</div>
          </div>
		  <!-- 992px & Down -->
		  <div class="row mobile-show">
			  <div class="lodginginfo-thumbnail-col">
              <h3><?php the_field('business_travel_section_title', '4'); ?></h3>
              <div id="slideshow-lodging-thumbnails">
				<!-- SLIDE 1 -->
				<?php if( have_rows('slide_1_info', '4') ): while( have_rows('slide_1_info', '4')) : the_row(); ?>
					<div class="lodginginfo-single d-lg-inline-flex">
						<?php if( have_rows('visual_content') ): while( have_rows('visual_content')) : the_row(); ?>
							  <div class="main-single main-single-image" style="background-image:url('<?php the_sub_field('image'); ?>');">
							  </div>
						<?php endwhile; endif; ?>
					  <span class="lodginginfo-single_text">
						<b><?php the_sub_field('slide_title'); ?></b>
						<?php the_sub_field('info'); ?>
					  </span>
					</div>
				<?php endwhile; endif; ?>
				<!-- SLIDE 2  -->
				<?php if( have_rows('slide_2_info', '4') ): while( have_rows('slide_2_info', '4')) : the_row(); ?>
					<div class="lodginginfo-single d-lg-inline-flex">
						<?php if( have_rows('visual_content') ): while( have_rows('visual_content')) : the_row(); ?>
						  <div class="main-single main-single-text" style="background-color:#2F58EB;">
							<h2><?php the_sub_field('title'); ?></h2>
							<ul class="checklist">
								<?php if( have_rows('checklist') ): while( have_rows('checklist')) : the_row(); ?>
								  <li><?php the_sub_field('item'); ?></li>
								<?php endwhile; endif; ?>
							</ul>
							<?php if(get_sub_field('button_text')) { ?>
								<a href="<?php the_sub_field('button_link'); ?>" class="btn btn--white"><?php the_sub_field('button_text'); ?></a>
							<?php } ?>
						  </div>
						<?php endwhile; endif; ?>
					  <span class="lodginginfo-single_text">
						<b><?php the_sub_field('slide_title'); ?></b>
						<?php the_sub_field('info'); ?>
					  </span>
					</div>
				<?php endwhile; endif; ?>
				<!-- SLIDE 3 -->
				<?php if( have_rows('slide_3_info', '4') ): while( have_rows('slide_3_info', '4')) : the_row(); ?>
					<div class="lodginginfo-single d-lg-inline-flex">
					  <?php if( have_rows('visual_content') ): while( have_rows('visual_content')) : the_row(); ?>
							  <div class="main-single main-single-image" style="background-image:url('<?php the_sub_field('image'); ?>');">
							  </div>
						<?php endwhile; endif; ?>
					  <span class="lodginginfo-single_text">
						<b><?php the_sub_field('slide_title'); ?></b>
						<?php the_sub_field('info'); ?>
					  </span>
					</div>
				 <?php endwhile; endif; ?>
              </div>
            </div>
		  </div>
		  <!-- End 992px & Down Display -->
      </div>
</section>
<?php } ?>
