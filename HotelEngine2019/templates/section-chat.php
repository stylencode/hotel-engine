
<?php if(get_field('chat_section_title')) { ?>
	<section class="join">
		<div class="container">
		  <div class="row text-center">
			<div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12" >
					<h3 style="color: #333;"><?php the_field('chat_section_title'); ?></h3>
					<?php if(get_field('intro')) { ?>
						<?php the_field('intro'); ?>
					<?php } ?>
			</div>
		  </div>
		  <!-- Positions FEED -->
		  <div class="row text-center">
			 <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12" >
					<?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
									<a class="btn" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
										<?php the_sub_field('button_text'); ?>
									</a>
					<?php endwhile; endif; ?>
			</div>
		  </div>
	</section>
<?php } ?>