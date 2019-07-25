	<section id="testimonials">
		<div class="container">
			<div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
				<?php if(get_field('section_title')) { ?>
					<div class="row">
						<h5>
							<?php the_field('section_title'); ?>
						</h5>
					</div>
				<?php } ?>
				<div class="row">
					<div class="testimonial-outer">
					  <div class="hp-slider__testimonial-outer--reset">
						<div id="hp-slider__testimonial">
							<?php if( have_rows('testimonial') ): while( have_rows('testimonial')) : the_row(); ?>
							  <div class="hp-slider__testimonail-single">
								<blockquote>
								  “<?php the_sub_field('quote'); ?>”
								</blockquote>
								<cite><?php the_sub_field('name'); ?></cite>
							  </div>
							<?php endwhile; endif; ?>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>

