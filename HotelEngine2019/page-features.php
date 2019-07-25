<?php
/**
 * Template Name: Features
**/?>
<?php get_header(); ?>

	
	<!-- HERO -->
	<?php get_template_part('templates/base', 'hero'); ?>

	<!-- Large Image -->
	<?php get_template_part('templates/base', 'large-image'); ?>

	
	<?php get_template_part('templates/base', '2col'); ?>


	<?php get_template_part('templates/base', 'feature-tag'); ?>


	<?php get_template_part('templates/base', 'testimonials'); ?>


	<?php get_template_part('templates/base', 'feature'); ?>


	<!-- SIGNUP -->
	<?php get_template_part('templates/section', 'signup'); ?>
	  
	
<?php get_footer(); ?>