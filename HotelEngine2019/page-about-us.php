<?php
/**
 * Template Name: About Us
**/?>
<?php get_header(); ?>

	
	<!-- HERO -->
	<?php get_template_part('templates/base', 'hero'); ?>

	<!-- GRID OF IMAGES -->
	<?php get_template_part('templates/section', 'grid'); ?>

	<!-- FEATURE -->
	<?php get_template_part('templates/base', '2col-about'); ?>

	<!-- STATISTICS -->
	<?php get_template_part('templates/section', '4stats'); ?>

	<!-- TEAM -->
	<?php get_template_part('templates/base', '3col-team'); ?>

	<!-- CALL TO ACTION -->
  	<?php get_template_part('templates/section', 'join'); ?>
	
	
<?php get_footer(); ?>