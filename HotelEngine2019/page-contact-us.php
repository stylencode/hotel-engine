<?php
/**
 * Template Name: Contact
**/?>
<?php get_header(); ?>

	<script src="//app-ab35.marketo.com/js/forms2/js/forms2.min.js"></script>


	<!-- HERO -->
	<?php get_template_part('templates/section', 'heronav'); ?>


	<!-- create account -->
	<?php get_template_part('templates/section', 'account-create'); ?>


	<!-- account support -->
	<?php get_template_part('templates/section', 'account-support'); ?>


	<!-- book for more than 9 -->
	<?php get_template_part('templates/section', 'account-book-extra'); ?>


	<!-- load additional resources -->
	<?php get_template_part('templates/section', 'additional-resources'); ?>


	<!-- load HQ information -->
	<?php get_template_part('templates/section', 'hq'); ?>
	

<?php get_footer(); ?>