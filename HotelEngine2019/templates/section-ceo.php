<?php if(get_field('ceo_name')) { 


// pull variables for cleaner look
$ceo_name = get_field('ceo_name');
$ceo_title = get_field('ceo_title');
$ceo_body = get_field('ceo_body');

$ceo_image = get_field('ceo_image');




?>


<section id="ceo" class="container-fluid" style="background-color: black; padding: 50px; padding-bottom: 150px;">

	 <div class="container col-8">

	    <div class="row">

	          
		           <div class="col">             

		              <?php if ($ceo_image) { ?> 

		              	<img src="<?php echo $ceo_image; ?>" alt="" class="w-100">

		              <?php } ?>
		              


		          </div>

		          <div class="col text-left">             

		              <?php if ($ceo_body) { ?><p class="text-<?php echo $text_position; ?>"><?php echo $ceo_body; ?></p><?php } ?>
		              

		              <?php if ($ceo_name) { ?><p class="text-<?php echo $text_position; ?>"><?php echo $ceo_name; ?></p><?php } ?>

		              <?php if ($ceo_title) { ?><p class="text-<?php echo $text_position; ?>"><?php echo $ceo_title; ?></p><?php } ?>

		          </div>
		 </div>
	</div>

</section>

<?php }; ?>