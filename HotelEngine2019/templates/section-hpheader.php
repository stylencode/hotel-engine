<section id="slideshow" class="container">
      <div class="row">
        <div class="col-12 p-0">
          <div id="hp-section__signup" class="signup-form  d-flex align-content-center flex-wrap" style="background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>');">


            <div class="col-xl-7">
              <div class="signup-form__contain col-md-12">
                <h1 class="h2 main-step mobile-hide"><?php the_field('desktop_title'); ?></h1>
				<h1 class="h2 main-step mobile-show"><?php the_field('mobile_title'); ?></h1>

				<h2 class="h2 second-step" style="display: none;">
					Almost There!
				</h2>

				<p class="second-step" style="display: none;">You're one step closer to saving an average of 26% with your <b><span style="text-decoration: underline;">FREE</span></b> Hotel Engine account. We need just a bit more info, then our team will reach out to get you started."
				</p>

				<h3 class="h3 final-step" style="display: none;">
					Thanks for registering!
				</h3>
				<p class="final-step" style="display: none;">We'll be in touch momentarily to help you get started. If it's after business hours, our team will reach out the following business day.
				</p>
				<a id="final-step-got-it" style="display: none;" class="btn btn-primary final-step">Got it</a>

                <div class="signup-numbers user-count  main-step">
                  <b><div class="count" id="new-user-count">---</div></b> <?php the_field('text_after_dynamic_number', '4'); ?>
                </div>

				
                <!-- EMBEDDED FORM - NEEDS FORMATTING AND STYLING -->
				<?php get_template_part('templates/section', 'hpform'); ?>
				
				  	<div class="small terms-privacy">
						<?php the_field('disclaimer_line'); ?>
					</div>
				<?php if(get_field('login_link','4')){ ?>
					<p>
					  Already a member?<br class="mobile-show" /> <a class="btn btn--inline mr-1 ml-1" href="<?php the_field('login_link', '4'); ?>" target="_blank">Log In Here</a>
					</p>
				<?php } ?>
              </div>
            </div>
            <div class="hp-slider__testimonial-outer mobile-hide">
              <div class="hp-slider__testimonial-outer--reset">
                <div id="hp-slider__testimonial">
					<?php if( have_rows('testimonials', '4') ): while( have_rows('testimonials', '4')) : the_row(); ?>
					  <div class="hp-slider__testimonail-single">
						<blockquote>
						  “<?php the_sub_field('testimonial'); ?>”
						</blockquote>
						<cite><?php the_sub_field('author'); ?></cite>
					  </div>
					<?php endwhile; endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
		<!-- down icon -->
		  <a href="#logos">
			  <img class="abs down mobile-hide" src="<?php echo get_stylesheet_directory_uri();?>/images/icon-down.svg" alt="<?php the_field('trusted_businesses_headline', '4'); ?>" />
		  </a>
      </div>
  	</section>

	<!-- Testimonial Band on Mobile -->
	
	<div class="container mobile-show responsive-container">
		<div class="hp-slider__testimonial-outer">
              <div class="hp-slider__testimonial-outer--reset">
                <div id="hp-slider__testimonial2">
                  <?php if( have_rows('testimonials', '4') ): while( have_rows('testimonials', '4')) : the_row(); ?>
					  <div class="hp-slider__testimonail-single">
						<blockquote>
						  “<?php the_sub_field('testimonial'); ?>”
						</blockquote>
						<cite><?php the_sub_field('author'); ?></cite>
					  </div>
					<?php endwhile; endif; ?>
                </div>
              </div>
            </div>
	</div>

