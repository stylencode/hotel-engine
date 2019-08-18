
<?php if(get_field('afaq_sections')) { 


// pull variables for cleaner look
$afaq_headline = get_field('afaq_headline');
$afaq_subheading = get_field('afaq_subheading');


} ?>

<?php if ($afaq_headline) { ?>

<section id="faq" class="container">
      <div class="row text-left">
         	<div class="col-10 offset-1">
                <h1 class="h2"><?php echo $afaq_headline; ?></h1>
                <p><?php echo $afaq_subheading; ?></p>
        	</div>
       </div>
      <div class="row text-left m-0 pt-5 pb-5">
        
         <div class="col-10 offset-1 text-left">
               
               <div id="accordionFaq">
         		
         			<?php if( have_rows('afaq_sections')) { 

         			 	$i = 0;

         			 	// target controls with diff suffix
         			 	$sfx = '_afaq';

         				while( have_rows('afaq_sections')) {							

         				 	$i ++;	


         				 	the_row(); 

							?>

						
								
							<div class="card">
							    <div class="card-header" id="heading_<?php echo $i.$sfx; ?>">
						
							        <div class="collapsed" data-toggle="collapse" data-target="#collapse_<?php echo $i.$sfx; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $i.$sfx; ?>" role="button" style="cursor: pointer;">
										<mark class="pad">
							          		<?php the_sub_field('title'); ?>
										</mark>
							        </div>
							
							    </div>

							    <div id="collapse_<?php echo $i.$sfx; ?>" class="collapse" aria-labelledby="heading_<?php echo $i.$sfx; ?>" data-parent="#accordionFaq">
							      <div class="card-body">
							        <?php the_sub_field('text'); ?>
							      </div>
							    </div>
							 </div>	  






					<?php }}; ?>

         		

				</div> <!-- end FAQ -->


       
        </div>
      


      </div>
</section>
<?php }; ?>
