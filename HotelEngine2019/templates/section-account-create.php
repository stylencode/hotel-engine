
<?php if(get_field('acc_headline')) { 


// pull variables for cleaner look
$acc_headline = get_field('acc_headline');
$acc_subheading = get_field('acc_subheading');
$acc_form = get_field('acc_form');

} ?>

<?php if ($acc_headline) { ?>




<section id="createAccount" class="container" style="display: none;">

      <div class="row text-left m-0 pt-5 pb-5">
        

      	<!-- set up columns for repetition -->
         <div class="col-md-4 col-sm-12">
               
                <h3><?php echo $acc_headline; ?></h3>
                <p><?php echo $acc_subheading; ?></p>

      
        </div>

         <div class="col-md-7 offset-md-1 col-sm-12 p-3 text-center">
               
         	<!--Edit thank you message text. -->
          <div id="confirmform" style="visibility:hidden;display: none;"><p><strong>Thanks for contacting us! We will get in touch with you shortly.</strong></p></div>

           <div class="radioButtons">
              <div class="row">
                <div class="col item" id="item_1" onclick="setOne(); return false">
                  <a>My company does not yet have an account</a>
                </div>
                <div class="col item" id="item_2" onclick="setTwo(); return false">
                  <a>Join an existing company account</a>
                </div>
              </div>
            </div>

            <div id="notice" class="text-left p-0" style="display: none;">
                  <p class="pt-4">Contact your administrator to access your company's unique join page, or complete the form below.</p>
            </div>
            
            <?php echo $acc_form; ?>
			 
            <script>

              // initialize when marketo form is done loading
              MktoForms2.whenReady(function (form) {
                    
                    //alert("loaded");

                      // set initial checks for buttons
                      if ($("#mktoRadio_1151_0").attr('checked'))
                      {
                        $('#notice').hide();
                        $('#item_1').addClass("active");
                      }
                      else if ($("#mktoRadio_1151_1").attr('checked'))
                      {
                        $('#notice').show();
                        $('#item_2').addClass("active");
                      }


                      //Add an onSuccess handler
                     form.onSuccess(function(values, followUpUrl){
                       //get the form's jQuery element and hide it
                       form.getFormElem().hide();
                      
                        // hide notice and added buttons
                        $('#notice').hide();
                        $('.radioButtons').hide();

                        document.getElementById('confirmform').style.visibility = 'visible';
                        document.getElementById('confirmform').style.display = 'block';

                         //return false to prevent the submission handler from taking the lead to the follow up url.
                         return false;
                     });





              });

                  

                    function setOne(){

                      $('#notice').hide();

                      $('#item_1').addClass("active");
                      $('#item_2').removeClass("active");

                      $("#mktoRadio_1151_0").attr('checked',true);
                      $("#mktoRadio_1151_1").attr('checked',false);
                    }

                    function setTwo(){

                      $('#notice').show();

                      $('#item_2').addClass("active");
                      $('#item_1').removeClass("active");

                      $("#mktoRadio_1151_1").attr('checked',true);
                      $("#mktoRadio_1151_0").attr('checked',false);
                    }

              

            </script>


        </div>
        <script>

            // script specific to Marketo Form

        </script>


      </div>
</section>

<?php }; ?>