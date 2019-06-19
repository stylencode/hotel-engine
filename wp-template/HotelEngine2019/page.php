<?php get_header(); ?>
<!-- get featured image -->
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div id="category-hero" class="container-fluid rel" style="background-image: url(<?php echo $url; ?>); background-size: cover; background-position: center; background-repeat: no-repeat; ">
	<div class="abs contents">
		<h1><?php the_title(); ?></h1>		
	</div>
	<?php if(is_page('7')) { ?>
	<?php }else { ?>
	<!-- PRIMARY CTA -->
					<?php if( have_rows('primary_cta','5') ): while( have_rows('primary_cta', '5')) : the_row(); ?>
						<a class="button btn-secondary abs mobile-hide" href="<?php the_sub_field('button_link'); ?>" >
							<?php the_sub_field('button_title'); ?>
						</a>
					<?php endwhile; endif; ?>
			<!-- END PRIMARY CTA -->
	<?php } ?>
	<div class="headeroverlay">
			</div>
</div>
<div class="container" >
<div class="row">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
</div>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php if( have_rows('flexible_content') ): ?>
            		<?php while ( have_rows('flexible_content') ) : the_row(); ?>
						<?php if( get_row_layout() == 'secondary_heading' ) { ?>
							<!-- H2 -->
							<div class="row secondary_heading">
								<h2>
									 <?php the_sub_field('title'); ?>
								</h2>
							</div>
						<?php } ?>
						<?php if( get_row_layout() == 'wysywig' ) { ?>
						<!-- HTML CONTENT -->
							<div class="row wysiwyg">
								<div class="col-md-12 col-sm-12 ">
									<?php the_sub_field('fancy_content'); ?>
								</div>
							</div>
						<?php } ?>
						<?php if( get_row_layout() == 'break' ) { ?>
						<!-- HR's -->
								<div class="row">
									<hr />
								</div>
						<?php } ?>
						<?php if( get_row_layout() == 'paragraph' ) { ?>
							<!-- Paragraph Block -->
								<div class="row">
									<div class="col-md-8 offset-md-2 col-sm-12">
										<?php the_sub_field('text'); ?>
									</div>
								</div>
						<?php } ?>
						<?php if( get_row_layout() == 'ordered_list' ) { ?>	
						<!-- OL -->
							<div class="row">
								<div class="col-md-4 offset-md-4 col-sm-10 offset-sm-1">
									<ol>
										<?php if( have_rows('list') ): while( have_rows('list')) : the_row(); ?>
											<li>
												<?php the_sub_field('list_item'); ?>
											</li>
										<?php endwhile; endif; ?>
									</ol>
								</div>
							</div>
						<?php } ?>
						<?php if( get_row_layout() == 'unordered_list' ) { ?>
						<!-- UL -->
							<div class="row">
								<div class="col-md-4 offset-md-4 col-sm-10 offset-sm-1">
									<ul>
										<?php if( have_rows('list') ): while( have_rows('list')) : the_row(); ?>
											<li>
												<?php the_sub_field('list_item'); ?>
											</li>
										<?php endwhile; endif; ?>
									</ul>
								</div>
							</div>
						<?php } ?>
						<?php if( get_row_layout() == 'terciary_headline' ) { ?>
						<!-- H3 -->
							<div class="row">
								<h3>
									<?php the_sub_field('title'); ?>
								</h3>
							</div>
						<?php } ?>
						<?php if( get_row_layout() == 'full_image' ) { ?>
						<!-- FULL WIDTH IMAGE -->
							<div class="row full_image">
								<div class="full center">
									<div class="fullimg full left">
										<img class="full" src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>" />
									</div>
								</div>
							</div>
						<?php } ?>
						<?php if( get_row_layout() == 'pull_quote' ) { ?>
						<!-- BLOCKQUOTE -->
							<div class="row pull_quote">
								<div class="col-md-11 offset-md-1 col-sm-11 offset-sm-1 ">
									<blockquote>
										<div class="row">
											<p>
												<?php the_sub_field('text'); ?>
											</p>
										</div>
										<h5>
											<?php if(get_sub_field('author')) { ?>
												<span>
													- <?php the_sub_field('author'); ?>
												</span>
											<?php } ?> 
										</h5>
									</blockquote>
								</div>
							</div>
						<?php } ?>
						<?php if( get_row_layout() == 'button_link' ) { ?>
						<!-- BUTTON -->
									<div class="row button_link center" style="padding: 25px;">
										<?php if( have_rows('button') ): while( have_rows('button')) : the_row(); ?>
											<a class="button" href="<?php if(get_sub_field('internal_link')) { ?>
													<?php the_sub_field('internal_link'); ?>
												<?php }else {?>
													<?php the_sub_field('external_link'); ?>
														<?php } ?>" <?php if(get_sub_field('external_link')) { ?>target="_blank"<?php } ?>>
														<?php the_sub_field('button_text'); ?>
													</a>
										<?php endwhile; endif; ?>
									</div>
						<?php } ?>
						<?php if( get_row_layout() == 'slideshow_gallery' ) { ?>
						<!-- SLIDER -->
							<div class="row slideshow_gallery">
								<div class="col-md-12">
									<section class="full left slider-rel">
									<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
										 <ol class="carousel-indicators">
											<?php $i = 0; ?>
											<?php while( have_rows('slideshow') ): the_row(); $values = get_sub_field('image'); ?>
													 <li data-target="#carouselExampleControls" data-slide-to="<?php echo $i; ?>"></li>
												<?php $i++; ?>
											 <?php endwhile; ?>
										 </ol>
										<div class="carousel-inner animated fadeIn">
											<?php while( have_rows('slideshow') ): the_row(); 
												$values = get_sub_field('image'); ?>
												<div class="carousel-item" style="background-image: url(<?php the_sub_field('image'); ?>);">
                                                    <figcaption class="abs">
                                                        <?php the_sub_field('caption'); ?>
                                                    </figcaption>
												</div>
											 <?php endwhile; ?>
										</div>
									</div>
									</section>
								</div>
							</div>
						<?php } ?>
						<?php if( get_row_layout() == '50_50_content' ) { ?>
						<!-- 50/50 SPLIT -->    
							<div class="row">
								<div class="col-sm-12">
									<?php if( have_rows('half_split') ): while( have_rows('half_split')) : the_row(); ?>
										<!-- HALF -->
										<div class="half left " style="padding: 25px;">
											<div class="row">
												<div class="fiddyimg full left" >
													<img src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>" />
												</div>
											</div>
											<div class="row">
												<h4>
													<?php the_sub_field('title'); ?>
												</h4>
											</div>
											<?php if(get_sub_field('paragraph')) { ?>
												<div class="row">
													<p>
														<?php the_sub_field('paragraph'); ?>
													</p>
												</div>
											<?php } ?>
											<?php if(get_sub_field('button_text')) { ?>
												<div class="row">
													<a class="button" href="<?php if(get_sub_field('internal_link')) { ?>
															<?php the_sub_field('internal_link'); ?>
														<?php }else {?>
															<?php the_sub_field('external_link'); ?>
																<?php } ?>" <?php if(get_sub_field('external_link')) { ?>target="_blank"<?php } ?>>
														<?php the_sub_field('button_text'); ?>
													</a>
												</div>
											<?php } ?>
										</div>
									<?php endwhile; endif; ?>
								</div>
							</div>
						<?php } ?>
						<?php if( get_row_layout() == 'image_left_content_right' ) { ?>
							<!-- IMG Left Content Right -->  
							 <?php if( have_rows('block') ): while( have_rows('block')) : the_row(); ?>
								<div class="row pingpong image_left_content_right">
									<div class="col-md-5 sameheight" style="display: block;">
											<div class="full left" >
												<img class="vertalign" src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>" />
											</div>
									</div>
									<div class="col-md-6 offset-md-1 sameheight">
										<div class="row">
											<h3>
												<?php the_sub_field('title'); ?>
											</h3>
											
										</div>
										<?php if(get_sub_field('paragraph')) { ?>
											<div class="row">
												<p>
													<?php the_sub_field('paragraph'); ?>
												</p>
											</div>
										<?php } ?>
										<?php if(get_sub_field('button_text')) { ?>
											<div class="row">
												<a class="button" href="<?php if(get_sub_field('internal_link')) { ?>
														<?php the_sub_field('internal_link'); ?>
													<?php }else {?>
														<?php the_sub_field('external_link'); ?>
															<?php } ?>" <?php if(get_sub_field('external_link')) { ?> target="_blank"<?php } ?>>
													<?php the_sub_field('button_text'); ?>
												</a>
											</div>
										<?php } ?>
									</div>
								</div>
								<div class="row">
									<hr />
								</div>
							<?php endwhile; endif; ?>
						<?php } ?>
						<?php if( get_row_layout() == 'image_right_content_left' ) { ?>
						<!-- IMG Right Content Left --> 
							<?php if( have_rows('block') ): while( have_rows('block')) : the_row(); ?>
								<div class="row image_right_content_left">
									<div class="col-sm-12  tablet-show mobile-show">
										 <div class="full left" >
												<img class="vertalign" src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>" />
										 </div>   
									</div>
									<div class="col-md-5 sameheight" style="display: block;">
										<div class="row">
											<h3>
												<?php the_sub_field('title'); ?>
											</h3>
										</div>
										<?php if(get_sub_field('paragraph')) { ?>
											<div class="row">
												<p>
													<?php the_sub_field('paragraph'); ?>
												</p>
											</div>
										<?php } ?>
										<?php if(get_sub_field('button_text')) { ?>
											<div class="row">
												<a class="button" href="<?php if(get_sub_field('internal_link')) { ?>
														<?php the_sub_field('internal_link'); ?>
													<?php }else {?>
														<?php the_sub_field('external_link'); ?>
															<?php } ?>" <?php if(get_sub_field('external_link')) { ?>target="_blank"<?php } ?>>
													<?php the_sub_field('button_text'); ?>
												</a>
											</div>
										<?php } ?>
									</div>
									<div class="col-md-6 offset-md-1 tablet-hide mobile-hide sameheight">
										 <div class="full left" >
												<img src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>" />
										 </div>   
									</div>
								</div>
								<div class="row">
									<hr />
								</div>
							<?php endwhile; endif; ?>
						 <?php } ?>
		<?php endwhile; endif; ?>
</div>
<!-- AFFILIATES -->
<?php get_template_part('section', 'affiliates'); ?>

<?php if( ! is_page( array( '7', '2249' ) ) ) { ?>
	<!-- CONSULTATION -->
	<?php get_template_part('section', 'consultation'); ?>
<?php } ?>
<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
<?php /* footer */ get_footer(); ?>