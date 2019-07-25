<?php if(get_field('form_section_title')) { ?>
	<section class="container group-bookform">
		<div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
			<div class="wrapper signup-form">
				<div class="row justify-content-md-center">
					<div class="col-md-7">
						<h3><?php the_field('form_section_title'); ?></h3>
					</div>
				</div>
				<div class="row justify-content-md-center">
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
	</section>
<?php } ?>

