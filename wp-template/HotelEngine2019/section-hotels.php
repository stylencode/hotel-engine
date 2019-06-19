<?php if(get_field('hotels_section_title', '4')) { ?>
<section id="logorow">
      <div id="logorow-push">
        <div class="container">
          <div class="row text-center rte">
            <div class="col-12">
              <h4 class="h3"><?php the_field('hotels_section_title', '4'); ?></h4>
            </div>
            <div class="col-12">
              <?php the_field('intro_paragraph', '4'); ?>
            </div>
          </div>
          <div class="row text-center">
				<?php if( have_rows('logos', '4') ): while( have_rows('logos', '4')) : the_row(); ?>
					<div class="col logorow_single">
					  <img src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('name'); ?>" />
					</div>
				<?php endwhile; endif; ?>
            <div class="col-12">
              <div class="btn btn--inline btn--pale"><?php the_field('partner_number'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php } ?>