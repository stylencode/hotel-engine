
<?php if(get_field('as_headline')) { 


// pull variables for cleaner look
$as_headline = get_field('as_headline');
$as_subheading = get_field('as_subheading');


} ?>

<?php if ($as_headline) { ?>

<section id="accountSupport" class="container"  style="display: none;">

      <div class="row text-left m-0 pt-5 pb-5">
        

      	<!-- set up columns for repetition -->
         <div class="col-sm-5">
               
                <h3><?php echo $as_headline; ?></h3>
                <p><?php echo $as_subheading; ?></p>
       
        </div>

         <div class="col-sm-7 text-left">
               
               <div id="accordionAccountSupport">
         		
         			<?php if( have_rows('as_sections')) { 

         			 	$i = 0;
         			 	// target controls with diff suffix
         			 	$sfx = '_as';

         				while( have_rows('as_sections')) {							

         				 	$i ++;	

         				 	the_row(); 

							?>
								
							<div class="card">
							    <div class="card-header" id="heading_<?php echo $i.$sfx; ?>">
						
							        <div class="row collapsed p-3" data-toggle="collapse" data-target="#collapse_<?php echo $i.$sfx; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $i.$sfx; ?>">
							          <?php the_sub_field('title'); ?>
							        </div>
							
							    </div>

							    <div id="collapse_<?php echo $i.$sfx; ?>" class="collapse" aria-labelledby="heading_<?php echo $i.$sfx; ?>" data-parent="#accordionAccountSupport">
							      <div class="card-body">
							        <?php the_sub_field('text'); ?>
							      </div>
							    </div>
							 </div>	  

					<?php }}; ?>      		

				</div> <!-- end Additional Resources -->

       
        </div>
     

      </div>
</section>
<?php }; ?>

