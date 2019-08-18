<?php if(get_field('form_embed', '4')) {?>
	<section id="signup" class="container">
			<div id="signup-info">
				<div class="row">
					<div class="col-lg-5">
						 <img class="abs" src="<?php the_field('featured_image', '4'); ?>" alt="<?php the_field('signup_section_title', '4'); ?>" />
					</div>
					<div class="col-lg-7">
						<?php if(get_field('signup_section_title')){ ?>
							<h3>
								<?php the_field('signup_section_title'); ?>
							</h3>
						<?php } ?>
						<?php if(get_field('signup_section_description')){ ?>
							<p>
								<?php the_field('signup_section_description'); ?>
							</p>
						<?php } ?>
							
							<!--Edit thank you message text. -->
							<div id="confirmform_signup" style="visibility:hidden; display: none;"><p><strong>Thanks for contacting us! We will get in touch with you shortly.</strong></p></div>

							<?php the_field('form_embed', '4'); ?>
								

							
							<script>
								MktoForms2.whenReady(function (form){
								 //Add an onSuccess handler
								  form.onSuccess(function(values, followUpUrl){
								   //get the form's jQuery element and hide it

								   form.getFormElem().hide();

								    document.getElementById('confirmform_signup').style.visibility = "visible";
								 	document.getElementById('confirmform_signup').style.display = "block";
								 	

								 	document.getElementById('mktoForm_1058').style.visibility = 'hidden';

								   //$(".mktoForm").addClass("disp_imp");

								   $("#signup-info h3").hide();

								   //return false to prevent the submission handler from taking the lead to the follow up url.
								   return false;
								 });
								});
								</script>


					</div>
				</div>
			</div>
	</section>
<?php } ?>