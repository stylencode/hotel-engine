<?php if(get_field('lgVideo_headline')) { 


// pull variables for cleaner look
$lgVideo_topic = get_field('lgVideo_topic');
$lgVideo_headline = get_field('lgVideo_headline');
$lgVideo_body = get_field('lgVideo_body');

$lgVideo_url = get_field('lgVideo_url');

$lgVideo_cta = get_field('lgVideo_cta');

$text_color = get_field('lgVideo_text_color');
$text_position = get_field('lgVideo_position');

$image_url = get_site_url(null, '/wp-content/uploads/2019/07/bw-filler.png', 'https');

?>


<section id="largeVideo" class="container-fluid p-0 <?php echo $text_color; ?>; ">
	<div class="row m-0" style="background-image:url('<?php echo $image_url; ?>'); background-position: center; background-size: contain; background-repeat: repeat-x; ">     	
			<div class="container p-0">

				<div class="row m-0 justify-content-md-center">
		            <div class="col-md-10">
		              	 
		              	 	<?php if ($lgVideo_url) { ?>
				              <!-- trigger video popup -->
							<a class="modalpopup" data-toggle="modal" data-target="#videoPopup" href="#" onclick="loadVideo()">
								<img class="play" src="<?php echo get_stylesheet_directory_uri();?>/images/icon-play.svg" alt="<?php echo $lgVideo_headline; ?>" />
								<img src = "<?php if ( wp_is_mobile() ) { ?><?php the_field('lgVideo_tablet_down_image'); ?><?php } else { ?><?php the_field('lgVideo_desktop_image'); ?><?php } ?>" style="display: block; width: 100%" alt="<?php echo $lgVideo_headline; ?>"/>
							</a>
							<?php } else { ?>
								<img src = "<?php if ( wp_is_mobile() ) { ?><?php the_field('lgVideo_tablet_down_image'); ?><?php } else { ?><?php the_field('lgVideo_desktop_image'); ?><?php } ?>" style="display: block; width: 100%" alt="<?php echo $lgVideo_headline; ?>"/>
							<?php } ?>
		             </div>
		        </div>


	        </div>
     </div>
     <!-- body of text -->
    <div class="row m-0">
    	<div class="container pt-5 pb-5">

	          <div class="col-lg-8 offset-lg-2 col-md-12 text-<?php echo $text_position; ?> p-5">

	              
	              <?php if ($lgVideo_topic) { ?><h5 class="text-<?php echo $text_position; ?>"><?php echo $lgVideo_topic; ?></h5><?php } ?>

	              

	              <?php if ($lgVideo_headline) { ?><h3 class="text-<?php echo $text_position; ?>"><?php echo $lgVideo_headline; ?></h3>
	              <?php } ?>
	              

	              <?php if ($lgVideo_body) { ?><p class="text-<?php echo $text_position; ?>"><?php echo $lgVideo_body; ?></p><?php } ?>



	              <?php if ($lgVideo_cta['cta_url']['url']) { ?>

	                    <a class="btn btn-primary" href="<?php echo $lgImage_cta['cta_url']['url']; ?>" target="_blank" style="color: white;"><?php echo $lgVideo_cta['cta_label']; ?></a>

	              <?php } ?>


	          </div>
	    </div>
	</div>
</section>



<?php }; ?>


<?php if ($lgVideo_url) { ?>

	     <!-- Modal -->
		<div class="modal fade" id="videoPopup" tabindex="-1" role="dialog" aria-labelledby="videoPopupCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1280px;">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" onclick="stopVideo()">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body" id="videoContainer">
		        <iframe src="<?php the_field('lgVideo_url'); ?>" width="100%" height="720" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
		
		        <script>

		        	function stopVideo(){$('#videoContainer iframe').attr('src',' ');}

		        	function loadVideo()
		        	{$('#videoContainer iframe').attr('src','<?php the_field('lgVideo_url'); ?>');}


		        </script>
		      </div>
		       
		    </div>
		  </div>
		</div>	         		


<?php } ?>