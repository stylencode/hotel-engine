<?php if(get_field('ceo_name')) { 
// pull variables for cleaner look
$ceo_name = get_field('ceo_name');
$ceo_title = get_field('ceo_title');
$ceo_body = get_field('ceo_body');
$ceo_image = get_field('ceo_image');
?>
	<section id="ceo" class="container-fluid">
		 <div class="container col-sm-8 col-sm-offset-2 col-12 offset-0">
			<div class="row">
					   <div class="col-lg-6 col-12 p-0">             
						  <?php if ($ceo_image) { ?> 
							<img src="<?php echo $ceo_image; ?>" alt="" class="w-100">
						  <?php } ?>
					  </div>
					  <div class="col-lg-6 col-12 p-0 text-left">
						  <div class="quote-wrap">
							  <?php if ($ceo_body) { ?><p class="text-<?php echo $text_position; ?>"><?php echo $ceo_body; ?></p><?php } ?>
							  
							  	<?php if ($ceo_name) { ?><p><b><?php echo $ceo_name; ?><?php } ?><br />
							  	<?php if ($ceo_title) { ?><?php echo $ceo_title; ?></b></p><?php } ?>

							</div>
					  </div>
			 </div>
		</div>
	</section>
<?php }; ?>