
<section id="hero_navigation" class="container" style="margin-top: 80px; height: 600px; padding: 150px 20px; background-image:url('<?php if ( wp_is_mobile() ) { ?><?php the_field('tablet_down_background_image'); ?><?php } else { ?><?php the_field('desktop_background_image'); ?><?php } ?>'); background-position: top; background-size: cover;">



      <div class="row text-left m-0" >
                 
	         <div class="col-12 text-center">
	                
	              <h1 class="h2 text-center">How can we help you today?</h2>                     

	              <p>No matter what, our team is here for you</p>


	        </div>

      </div>



      <div class="row text-left m-0" >
                 
	         <div id="createAccountBtn" class="col-4 text-center" style="height: 200px; background-color: grey; border: 4px solid white;">

	              <img src="x.jpg" width="60" />                  

	              <p>I'd like to create an account</p>

	        </div>

	        <div id="accountSupportBtn" class="col-4 text-center" style="height: 200px; background-color: grey; border: 4px solid white;">

	              <img src="x.jpg" width="60" />                  

	              <p>I need help with my account</p>
	              
	        </div>

	        <div id="bookExtraBtn" class="col-4 text-center" style="height: 200px; background-color: grey; border: 4px solid white;">

	              <img src="x.jpg" width="60" />                  

	              <p>I'd like to book 9 or more rooms</p>
	              
	        </div>

      </div>

</section>



<script>
 
  $(function() {


    //$( "  " ).text( "The DOM is now loaded and can be manipulated." );
    
    $( "#createAccountBtn" ).click(function() {
	  

	  //alert( "show createAccount" );
		hideAll();
		$( "#createAccount" ).show();	

	});


    $( "#accountSupportBtn" ).click(function() {
	  

	  //alert( "show accountSupport" );
		hideAll();
		$( "#accountSupport" ).show();	

	});



	$( "#bookExtraBtn" ).click(function() {
	  

	  //alert( "show Booking for 9 form" );
		hideAll();
		$( "#bookExtra" ).show();	

	});


	function hideAll()
	{

		$( "#createAccount" ).hide();	
		$( "#accountSupport" ).hide();	
		$( "#bookExtra" ).hide();	

	};




  });
 
</script>







