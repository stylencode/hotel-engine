<?php
/**
 * Template Name: Group Bookings
**/?>
<?php get_header(); ?>

	
	<!-- HERO -->
	<?php get_template_part('templates/base', 'hero'); ?>

	<!--  -->
	<?php get_template_part('templates/base', '3col'); ?>


	<?php get_template_part('templates/base', '3col-image'); ?>


	<?php get_template_part('templates/section', 'moform'); ?>

  
  	<style>
	
	/* SIGNUP SECTION */
	/* add a signup-form class to a black container. Make sure there is a 40px on the outer container. */
		.signup-form > .row:before 
				{
					  content: '';
					  position: absolute;
					  background: url('https://hotelengine.mystagingwebsite.com/wp-content/themes/HotelEngine2019/images/icon-dot-pattern-white.png') repeat;
					  width: 33.3333%;
					  height: 100%;
					  left: 0;
					  top: 0;
				}


	</style>


	
<?php get_footer(); ?>