<?php get_header(); ?>
<div id="content">
	<div class="container">
		<div class="row">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
		</div>
		<div class="row intro">
				<h2> Page Not Found. Try Again. </h2>
		</div>
	</div>
</div>
<?php get_footer(); // get footer ?>