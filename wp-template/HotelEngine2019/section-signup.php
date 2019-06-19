<?php if(get_field('signup_section_title', '4')) {?>
	<section id="signup" class="container">
			<div id="signup-info">
				<div class="row">
					<div class="col-lg-5">
						 <img class="abs" src="<?php the_field('featured_image', '4'); ?>" alt="<?php the_field('signup_section_title', '4'); ?>" />
					</div>
					<div class="col-lg-7">
						<h3>
							<?php the_field('signup_section_title', '4'); ?>
						</h3>
							<?php the_field('form_embed', '4'); ?>
							<form id="freesignup">
							  <div class="form-group">
									<input type="text" name="companyname" placeholder="Company Name" />
									<input type="text" name="name" placeholder="Your Name" />
									<input type="email" name="email" placeholder="Work Email Address" />
									<input type="tel" name="phone" placeholder="Work Phone Number" />
									<p>
										By clicking ‘Get Access’, you agree to Hotel Engine's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a>
									</p>
								<button type="submit" class="btn">Get Access</button>
							  </div>
							</form>
					</div>
				</div>
			</div>
	</section>
<?php } ?>