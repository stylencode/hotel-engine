<?php
/*
*
* Template Name: Sign Up
*
*
*/
// load variables directly into this page
?>
<?php get_header(); ?>
<?php if(get_field('title')) { ?>
	<section id="signupPage" class="container" style="margin-top: 80px;">
		  <div class="row flex-row d-flex align-items-center">
			 <div class="col-md-6 col-sm-12">
				 <div class="col-md-10 col-sm-12">


				 	

				 
					<h3><?php the_field('title') ;?></h3>
				 	<?php if(get_field('intro')) { ?>
						<?php the_field('intro'); ?>
				 	<?php } ?>

					<?php if( have_rows('tab') ): while( have_rows('tab')) : the_row(); ?>	
				 		<?php the_sub_field('tab_title'); ?>

				 		<!--Edit thank you message text. -->
						<div id="confirmform" style="visibility:hidden;display: none;"><p><strong>Thanks for contacting us! We will get in touch with you shortly.</strong></p></div>

				 		<div class="radioButtons">
				 			<div class="row">
				 				<div class="col item" id="item_1" onclick="setOne()">
				 					<a href="#" >My company does not yet have an account</a>
								</div>
								<div class="col item" id="item_2" onclick="setTwo()">
									<a href="#">Join an existing company account</a>
								</div>
				 			</div>
				 		</div>
						<div id="notice2"  class="text-left p-0"  style="display: block;">
			                  <p class="pt-4"><?php the_field('tab_1_sentence'); ?></p>
			            </div>
				 		<div id="notice"  class="text-left p-0"  style="display: none;">
			                  <p class="pt-4"><?php the_field('tab_2_sentence'); ?></p>
			            </div>

						<?php the_sub_field('form_embed'); ?>

						<script>
							
							// initialize when marketo form is done loading
				              MktoForms2.whenReady(function (form) {
				                    
				                  
				                  	// set initial checks for buttons

				                      if ($("#mktoRadio_1151_0").attr('checked'))
				                      {
				                        $('#notice').hide();
										 $('#notice2').show();

				                        $('#item_1').addClass("active");
				                      }
				                      else if ($("#mktoRadio_1151_1").attr('checked'))
				                      {
				                        $('#notice').show();
										$('#notice2').hide();

				                        $('#item_2').addClass("active");
				                      }


				                      //Add an onSuccess handler
										 form.onSuccess(function(values, followUpUrl){
										   //get the form's jQuery element and hide it
										   form.getFormElem().hide();
										 	
										 	// hide notice and added buttons
										 	$('#notice').hide();
											$('#notice2').hide();
										 	$('.radioButtons').hide();

										   document.getElementById('confirmform').style.visibility = 'visible';
										   document.getElementById('confirmform').style.display = 'block';

										   //return false to prevent the submission handler from taking the lead to the follow up url.
										   return false;
										 });


				              });


							function setOne(){

								$('#notice').hide();
								$('#notice2').show();

								$('#item_1').addClass("active");
								$('#item_2').removeClass("active");

								$("#mktoRadio_1151_0").attr('checked',true);
								$("#mktoRadio_1151_1").attr('checked',false);
							}

							function setTwo(){

								 $('#notice').show();
								$('#notice2').hide();

								$('#item_2').addClass("active");
								$('#item_1').removeClass("active");

								$("#mktoRadio_1151_1").attr('checked',true);
								$("#mktoRadio_1151_0").attr('checked',false);
							}




						</script>

					<?php endwhile; endif; ?>

				</div>


			</div>
			 <div class="col-md-6 col-sm-12 quote-padz" style="background-image: url('<?php the_field('testimonial_background'); ?>'); background-position: center; background-size: cover;">
					<div class="row flex-row d-flex align-items-center" style="height: calc(100vh - 120px); min-height: 60vh;">
						<div class="col-md-8 offset-md-2">
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
		  </div>
	</section>
<?php } ?>
<?php get_footer(); ?>