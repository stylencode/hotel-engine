<?php if(get_field('hero_layout')) { 


// pull variables for cleaner look

$hero_layout = get_field('hero_layout');

$hero_topic = get_field('hero_topic');
$hero_headline = get_field('hero_headline');
$hero_subheading = get_field('hero_subheading');

$hero_cta = get_field('hero_cta');

$text_color = get_field('hero_text_color');
$text_position = get_field('hero_position');

$height = get_field('hero_height');


} ?>

<?php if ($hero_layout == 'full') { ?>
<section id="hero_navigation" class="container <?php echo $text_color; ?>" style="margin-top: 80px; padding: 150px 0px;  padding-bottom: 0px; background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>');  background-size: cover;">
      <div class="row text-left m-0" >
	         <div class="col-12 text-center">
	              <?php if ($hero_headline) { ?>  
	              <h1 class="h2 text-<?php echo $text_position; ?>"><?php echo $hero_headline; ?></h2>                     
					<?php if ($hero_subheading) { ?>
	              	<p class="text-<?php echo $text_position; ?>"><?php echo $hero_subheading; ?></p>
				 	<?php } ?>
	        </div>
      </div>

      <div class="row text-left m-0" style="background-image: url('https://hotelengine.mystagingwebsite.com/wp-content/uploads/2019/07/signup-filler.png'); background-position: center;background-size: contain; background-repeat: repeat-x; padding: 40px;">


      	<?php if(get_field('acc_headline')) {   ?>         
	         <div id="createAccountBtn" class="col-4 text-center">
				 <div class="tab-nav-wrap">
				  <?php if(get_field('tab_icon')) { ?>
	              	<img src="<?php the_field('tab_icon'); ?>" width="60" alt="<?php the_field('tab_title'); ?>" />  
				  <?php } ?>
	              <p><?php the_field('tab_title'); ?></p>
				 </div>
	        </div>
		<?php } ?>
		  
		<?php if(get_field('as_headline')) { ?>
	        <div id="accountSupportBtn" class="col-4 text-center">
				  <div class="tab-nav-wrap">
					<?php if(get_field('tab_2_image')) { ?>
	              	<img src="<?php the_field('tab_2_image'); ?>" width="60" alt="<?php the_field('tab_2_title'); ?>" />  
				  <?php } ?>
	              <p><?php the_field('tab_2_title'); ?></p>
					</div>
	        </div>
		<?php } ?>
		
		<?php if(get_field('abe_headline')) { ?>
	        <div id="bookExtraBtn" class="col-4 text-center">
	            <div class="tab-nav-wrap">  
				<?php if(get_field('tab_3_image')) { ?>
	              	<img src="<?php the_field('tab_3_image'); ?>" width="60" alt="<?php the_field('tab_3_title'); ?>" />  
				  <?php } ?>
	              <p><?php the_field('tab_3_title'); ?></p>	
				</div>
	        </div>
		 <?php } ?>
      </div>
</section>
<?php } ?>
<?php }; ?>


<script>
  $(function() {
    //$( "  " ).text( "The DOM is now loaded and can be manipulated." );
    $( "#createAccountBtn" ).click(function() {
	  //alert( "show createAccount" );
		hideAll();

		$(this).addClass("active");
		$( "#createAccount" ).show();	
	});
    $( "#accountSupportBtn" ).click(function() {
	  //alert( "show accountSupport" );
		hideAll();

		$(this).addClass("active");
		$( "#accountSupport" ).show();	
	});
	$( "#bookExtraBtn" ).click(function() {
	  //alert( "show Booking for 9 form" );
		hideAll();

		$(this).addClass("active");
		$( "#bookExtra" ).show();	
	});
	
	function hideAll()
	{

		$( "#createAccountBtn" ).removeClass("active");
		$( "#accountSupportBtn" ).removeClass("active");
		$( "#bookExtraBtn" ).removeClass("active");

		$( "#createAccount" ).hide();	
		$( "#accountSupport" ).hide();	
		$( "#bookExtra" ).hide();	
	};
  });
</script>







