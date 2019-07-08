<?php get_header(); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
					<header class="article-header">
						<div class="titlewrap clearfix">
							<h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<p class="byline vcard">
								by <span class="author"><em><?php the_author() ?></em></span> - 
								<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
								<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
							</p>
						</div>
					</header> <?php // end article header ?>
				</article>
			<?php endwhile; endif; ?>
<?php get_footer(); ?>