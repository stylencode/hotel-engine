<?php if(get_field('section_title', '4')) { ?>
<section id="solution-icons">
      <div id="solution-icons_push">
        <div class="container">
          <div class="row text-center">
            <div class="col-12 title_row">
              <h3><?php the_field('section_title'); ?></h3>
            </div>
			<?php if( have_rows('block', '4') ): while( have_rows('block', '4')) : the_row(); ?>
				<div class="col-lg-4 col-md-6 col-sm-12">
				  <div class="solution-single">
					<div class="solution-single__icon" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
					<p><b><?php the_sub_field('title'); ?></b><?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?><a class="mobile-show" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a><?php endwhile; endif; ?></p>
					<p class="mobile-hide"><?php the_sub_field('excerpt'); ?>
					</p>
					<?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
						<a href="<?php the_sub_field('button_link'); ?>" class="mobile-hide btn"><?php the_sub_field('button_text'); ?></a>
					<?php endwhile; endif; ?>
				  </div>
				</div>
			<?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </section>
<?php } ?>