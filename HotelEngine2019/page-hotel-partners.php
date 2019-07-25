<?php
/**
 * Template Name: Hotel Partners
**/?>
<?php get_header(); ?>

	
	<!-- HERO -->
	<?php get_template_part('templates/base', 'hero'); ?>

	
	<?php get_template_part('templates/base', '2col'); ?>


	<?php get_template_part('templates/base', 'testimonials'); ?>


	

	<!-- SIGNUP -->
	<?php get_template_part('templates/section', 'moform'); ?>

	<style>
	
	/* SIGNUP SECTION */

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