<?php get_header(); ?>
	<?php 
		     $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		     ?>
	<div id="category-hero" class="container-fluid rel" style="background-image: url(<?php echo $url; ?>); background-size: cover; background-position: center; background-repeat: no-repeat; ">
		  <div class="abs contents">
				<h1><?php the_title(); ?></h1>		
			</div>
			<?php if(get_field('available_menu')) { ?>
				<a class="button abs menu" href="<?php the_field('available_menu'); ?>" target="_blank">
					View Event Menu
				</a>
			<?php } ?>
			<div class="headeroverlay">
			</div>
	</div>
<!-- EVENT CONTENT -->
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
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="gallery">
		<div class="row">
				<?php $images = get_field('gallery'); ?> 
			    <?php foreach( $images as $image ): ?>
		            <div class="col-lg-4 col-md-6 col-sm-12 no-padding no-margin">
		                <a href="<?php echo $image['url']; ?>" class="popup" title="<?php echo $image['caption']; ?>" >
		                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="mfp-img" />
		                </a>
		            </div>
		        <?php endforeach; ?>
		</div>
	</div>
</div>
<!-- RELATED EVENTS -->
<div class="related">
	<div class="container">
		<div class="row">
			<h3 class="text-center">Related Events</h3>
		</div>
		<div class="row">
			<?php
				$post_id = get_the_ID();
			    $cat_ids = array();
			    $categories = get_the_category( $post_id );
			    $cat = $categories[0]->term_id;
			    if($categories):
			        foreach ($categories as $category):
			            array_push($cat_ids, $category->term_id);
			        endforeach;
			    endif;
			    $current_post_type = get_post_type($post_id);
			    $query_args = array( 

			        'category__in'   => $cat,
			        'post_type'      => $current_post_type,
			        'posts_per_page'  => '3'
			     );
			    $related_cats_post = new WP_Query( $query_args );
			    if($related_cats_post->have_posts()):
			         while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
			            <article id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-6 col-sm-12" role="article" style="padding: 20px;">
						<header class="article-header">
							<div class="titlewrap clearfix" >
								<a href="<?php the_permalink(); ?>" rel="lightbox">
									<div class="article-image" style="background-image: url(<?php echo get_the_post_thumbnail_url( null,'large'); ?>); ">
           							</div>
        						</a>
								<h4 class="post-title entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
								<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">View Event</a></h5>
							</div>
						</header> <?php // end article header ?>
					</article>
			        <?php endwhile;
			        // Restore original Post Data
			        wp_reset_postdata();
			     endif;
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>