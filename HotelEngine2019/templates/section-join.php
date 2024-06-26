
<?php if(get_field('team_section_title')) { ?>
	<section class="join">
		<div class="container">
		  <div class="row text-center">
				<div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
					<h3><?php the_field('team_section_title'); ?></h3>
					<?php if(get_field('intro')) { ?>
						<p><?php the_field('intro'); ?></p>
					<?php } ?>
				</div>
			</div>
		  <!-- Positions FEED -->
		  <div class="row text-center">
			 <div class="col-12" >
				 	<?php if(get_field('careers_embed')) { ?>
				 		<div class="iframe-responsive">
				 			<?php the_field('careers_embed'); ?>
						</div>
				 	<?php } ?>
					<!-- goes here -->
					<?php if( have_rows('join_button') ): while( have_rows('join_button')) : the_row(); ?>
									<a class="btn" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
										<?php the_sub_field('button_text'); ?>
									</a>
					<?php endwhile; endif; ?>
			</div>
		  </div>
	</section>
<?php } ?>