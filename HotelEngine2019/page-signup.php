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


				 		<div class="radioButtons">
				 			<div class="row">
				 				<div class="col item" id="item_1" onclick="setOne()">
				 					<a href="#" >One</a>
								</div>
								<div class="col item" id="item_2" onclick="setTwo()">
									<a href="#">Two</a>
								</div>
				 			</div>
				 		</div>

						<?php the_sub_field('form_embed'); ?>

					
						<style>

							#mktoRadio_932_0,#mktoRadio_932_1,.mktoForm .mktoRadioList, .mktoFormRow:first-child 
							{

								display: none !important;
							}

							#item_1, #item_2
							{
								height: 100px;
								width: 100px;
								background-color: #dfdfdf;
								color: black;
								font-size: 2em;
								line-height: 100px;
								vertical-align: middle;
								text-align: center;
								cursor: pointer;
								margin: 5px;
								border-radius: 10px;
							}

							#item_1:hover, #item_2:hover
							{
								background-color:  #afafaf; 
							}

							#item_1.active, #item_2.active
							{
								background-color: grey;
							}
		

						</style>
						


						<script>
						

							function setOne(){

								$('#item_1').addClass("active");
								$('#item_2').removeClass("active");

								$("#mktoRadio_932_0").attr('checked',true);
								$("#mktoRadio_932_1").attr('checked',false);
							}

							function setTwo(){

								$('#item_2').addClass("active");
								$('#item_1').removeClass("active");

								$("#mktoRadio_932_1").attr('checked',true);
								$("#mktoRadio_932_0").attr('checked',false);
							}


						</script>

					<?php endwhile; endif; ?>

				</div>


			</div>
			 <div class="col-md-6 col-sm-12" style="background-image: url('<?php the_field('testimonial_background'); ?>'); background-position: center; background-size: cover;">
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