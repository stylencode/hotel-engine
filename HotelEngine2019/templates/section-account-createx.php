
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
               
         		
            
            <?php echo $acc_form; ?>




        </div>
        <script>

            // script specific to Marketo Form

        </script>


      </div>
</section>

<?php }; ?>