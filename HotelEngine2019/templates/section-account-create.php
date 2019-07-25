
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
         <div class="col-sm-5">
               
                <h3><?php echo $acc_headline; ?></h3>
                <p><?php echo $acc_subheading; ?></p>

      
        </div>

         <div class="col-sm-7 p-3 text-center">
               
         		
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


            
            <?php echo $acc_form; ?>




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


        </div>
        <script>

            // script specific to Marketo Form

        </script>


      </div>
</section>

<?php }; ?>