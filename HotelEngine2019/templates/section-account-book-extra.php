
<?php 



if(get_field('abe_headline')) { 


// pull variables for cleaner look
$abe_headline = get_field('abe_headline');
$abe_subheading = get_field('abe_subheading');
$abe_form = get_field('abe_form');



} ?>

<?php if ($abe_headline) { ?>


<section id="bookExtra" class="container" style="display: none;">

      <div class="row text-left m-0 pt-5 pb-5">
        

        <!-- set up columns for repetition -->
         <div class="col-md-4 col-sm-12">
               
                <h3><?php echo $abe_headline; ?></h3>
                <p><?php echo $abe_subheading; ?></p>

      
        </div>

         <div class="col-md-7 offset-md-1 col-sm-12 p-3 text-center">             
            
            <?php echo $abe_form; ?>

        </div>
      


      </div>
</section>

<?php }; ?>
