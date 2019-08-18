<?php
/**
 * Template Name: Full Width
**/?>

<?php get_header(); ?>

	


		<section class="container" style="margin-top: 130px;">


		    <!-- vertical align containers -->
		    <div class="row">

		          <div class="col-sm-10 offset-sm-1 col-12">

		              
		              	<h1 class="entry-title h2"><?php the_title(); ?></h1> <!-- Page Title -->


						<?php while ( have_posts() ) : the_post(); ?> 


						        <div class="entry-content-page">

						            <?php the_content(); ?> <!-- Page Content -->
						        
						        </div>

						<?php  endwhile; //resetting the page loop
						       wp_reset_query(); //resetting the page query
						    ?>

		          </div>
		    </div>

		</section>





<?php get_footer(); ?>