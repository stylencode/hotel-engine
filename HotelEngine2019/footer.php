<footer class="container">
	<div id="footer-wrap">
		<div class="row">
			<div class="col-xxl-4 col-xl-3 col-lg-3 mobile-hide">
				<p class="title">
					Chat with Sales
				</p>
				<?php if( have_rows('phone', '4') ): while( have_rows('phone', '4')) : the_row(); ?>
					<a href="tel:=+1-<?php the_sub_field('call_formatted_number'); ?>">
						<span class="phone">
							<?php the_sub_field('viewable_number'); ?>
						</span>
					</a>
				<?php endwhile; endif; ?>
				<?php if(get_field('primary_email', '4')){ ?>
					<a href="mailto:<?php the_field('primary_email', '4'); ?>">
						<span class="email">
							<?php the_field('primary_email', '4'); ?>
						</span>
					</a>
				<?php } ?>
				<?php if(get_field('google_play_link', '4')){ ?>
					<a href="<?php the_field('google_play_link', '4'); ?>" target="_blank">
						<img class="app" src="<?php echo get_stylesheet_directory_uri();?>/images/icon-google-play.svg" alt="Get it on Google Play" />
					</a>
				<?php } ?>
				<?php if(get_field('app_store_link', '4')){ ?>
					<a href="<?php the_field('app_store_link', '4'); ?>" target="_blank">
						<img class="app" src="<?php echo get_stylesheet_directory_uri();?>/images/icon-apple.svg" alt="Download on the App Store" />
					</a>
				<?php } ?>
			</div>
			<div class="col-xxl-8 col-xl-9 col-lg-9">
					<ul>
						<p class="title">
							Features
						</p>
						<?php wp_nav_menu( array(
                                 'theme_location' => 'footer-nav1',
                                 'container' => false,
                                 'items_wrap' => '%3$s'
                          ) ); ?>
					</ul>
				<ul>
					<p class="title">
						Customers
					</p>
					<?php wp_nav_menu( array(
                                 'theme_location' => 'footer-nav2',
                                 'container' => false,
                                 'items_wrap' => '%3$s'
                          ) ); ?>
				</ul>
				<ul>
					<p class="title">
						About Us
					</p>
					<?php wp_nav_menu( array(
                                 'theme_location' => 'footer-nav3',
                                 'container' => false,
                                 'items_wrap' => '%3$s'
                          ) ); ?>
				</ul>
				<ul>
					<p class="title">
						Resources
					</p>
					<?php wp_nav_menu( array(
                                 'theme_location' => 'footer-nav4',
                                 'container' => false,
                                 'items_wrap' => '%3$s'
                          ) ); ?>
				</ul>
			</div>
			<div class="col-xxl-4 col-xl-3 col-lg-3 mobile-show">
				<p class="title">
					Contact Sales
				</p>
				<?php if( have_rows('phone', '4') ): while( have_rows('phone', '4')) : the_row(); ?>
					<a href="tel:=+1-<?php the_sub_field('call_formatted_number'); ?>">
						<span class="phone">
							<?php the_sub_field('viewable_number'); ?>
						</span>
					</a>
				<?php endwhile; endif; ?>
				<?php if(get_field('primary_email', '4')){ ?>
					<a href="mailto:<?php the_field('primary_email', '4'); ?>">
						<span class="email">
							<?php the_field('primary_email', '4'); ?>
						</span>
					</a>
				<?php } ?>
				<?php if(get_field('google_play_link', '4')){ ?>
					<a href="<?php the_field('google_play_link', '4'); ?>" target="_blank">
						<img class="app" src="<?php echo get_stylesheet_directory_uri();?>/images/icon-google-play.svg" alt="Get it on Google Play" />
					</a>
				<?php } ?>
				<?php if(get_field('app_store_link', '4')){ ?>
					<a href="<?php the_field('app_store_link', '4'); ?>" target="_blank">
						<img class="app" src="<?php echo get_stylesheet_directory_uri();?>/images/icon-apple.svg" alt="Download on the App Store" />
					</a>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="waybottom-wrap">
						<p>Hotelengine.com &copy; <?php echo(date('Y')); ?> <br class="xs-show" /><?php if(get_field('terms_link', '4')){ ?><a href="<?php the_field('terms_link', '4'); ?>">Terms of Service</a><?php } ?> <?php if(get_field('privacy_link', '4')){ ?><a href="<?php the_field('privacy_link', '4'); ?>">Privacy Policy</a><?php } ?></p>
						<div class="social-wrap text-right">
							<?php if(get_field('facebook_link', '4')){ ?>
								<a href="<?php the_field('facebook_link', '4'); ?>" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-facebook.svg" alt="Hotel Engine | Facebook" />
								</a>
							<?php } ?>
							<?php if(get_field('twitter_link', '4')){ ?>
								<a href="<?php the_field('twitter_link', '4'); ?>" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-twitter.svg" alt="Hotel Engine | Twitter" />
								</a>
							<?php } ?>
							<?php if(get_field('linkedin_link', '4')){ ?>
								<a href="<?php the_field('linkedin_link', '4'); ?>" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-linkedin.svg" alt="Hotel Engine | Linkedin" />
								</a>
							<?php } ?>
						</div>
				</div>
			</div>
		</div>
	</div>
</footer>
	<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/vendor.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/theme.js"></script>
	
	<!-- EMBEDDED FORM -->
	<script src="//app-ab35.marketo.com/js/forms2/js/forms2.min.js"></script>


	<script src="https://dgg9n4c5p8zvv.cloudfront.net/bundles/public/main.9328bdc9a634483fed80.js" ></script>


	<script type="text/javascript">
	</script>


</body>
</html>