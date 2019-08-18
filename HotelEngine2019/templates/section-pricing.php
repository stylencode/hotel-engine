<section id="pricing">
	<div class="container">
		<div class="row">
		<div class="card-deck">
		<?php if( have_rows('pricing_block') ): while( have_rows('pricing_block')) : the_row(); ?>
			<div class="card p-4 col-lg-4 col-md-10">
				<div class="card-body">
					<?php if(get_sub_field('title')) { ?>
							<h4>
								<?php the_sub_field('title'); ?>
							</h4>
					<? } php ?>
					<?php if(get_sub_field('description')) { ?>
							<p>
								<?php the_sub_field('description'); ?>
							</p>
					<? } php ?>
					<?php if(get_sub_field('description')) { ?>
							<mark class="price">
								<?php the_sub_field('price'); ?>
							</mark>
					<? } php ?>



					<!-- HIDE ON Tablet down -->
					<div class="mobile-hide tablet-hide">
						<?php if(get_sub_field('sub_title')) { ?>
								<p>
									<b>
										<?php the_sub_field('sub_title'); ?>
									</b>
								</p>
						<? } php ?>
						<?php if( have_rows('advantages') ): ?>
									<ul>
										<?php while( have_rows('advantages')) : the_row(); ?>
										<li>
											<?php the_sub_field('advantage'); ?>
										</li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
						
					</div>
					
				</div>


				<div class="card-footer p-0">

					<!-- HIDE ON Tablet down -->
					<?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
								<a class="btn mobile-hide tablet-hide" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
									<?php the_sub_field('button_text'); ?>
								</a>
					<?php endwhile; endif; ?>


					<!-- SHOW ON Tablet down -->
					<div class="mobile-show tablet-show">
						<p class="toggle expand-collapse">
								Read More
						</p>
						<div class="item-content">
							<?php if(get_sub_field('sub_title')) { ?>
									<p>
										<b>
											<?php the_sub_field('sub_title'); ?>
										</b>
									</p>
							<? } php ?>
							<?php if( have_rows('advantages') ): ?>
										<ul>
											<?php while( have_rows('advantages')) : the_row(); ?>
											<li>
												<?php the_sub_field('advantage'); ?>
											</li>
											<?php endwhile; ?>
										</ul>
									<?php endif; ?>
							<?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
								<div class="row">
									<a class="btn" <?php if(get_sub_field('button_page_link')) { ?> href="<?php the_sub_field('button_page_link'); ?>" <?php }else { ?> href="<?php the_sub_field('external_link'); ?>" target="_blank"<?php } ?>>
										<?php the_sub_field('button_text'); ?>
									</a>
								</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
     
        		</div>



			</div>
		<?php endwhile; endif; ?>
		</div>
		</div>
		<div class="row small">
			<p>* approval required
			</p>
		</div>
</section>

