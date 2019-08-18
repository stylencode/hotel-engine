<?php if(get_field('form_section_title')) { ?>
	<section id="gbform" class="container group-bookform">
		<div class="row">
			
				<div class="wrapper signup-form">
					<div class="row justify-content-sm-center">
						<div class="col-md-8 col-sm-10 col-12">
								<h3><?php the_field('form_section_title'); ?></h3>
								<?php if(get_field('form_intro')) { ?>
									<p class="intro"><?php the_field('form_intro'); ?></p>
								<?php } ?>
						</div>
					</div>
					<div class="partnersform">
						<div class="row justify-content-sm-center">
							<div class="col-md-8 col-sm-10 col-12">
							<?php if(get_field('form_embed')) { ?>
								<div class="col-sm">
									<?php the_field('form_embed'); ?>
								</div>

								<script>

									// script goes here 

								</script>



							<?php } ?>
							</div>
						</div>
					</div>
				</div>
		</div>
	</section>
<?php } ?>

