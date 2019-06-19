<?php
/**
 * @package Hotel Engine 2019 Theme
 * @subpackage themename_HotelEngine2019
 * @author Brent Thelen Design - brentthelendesign.com
 */
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if(is_single()){ ?>
		<meta property="og:image" content="<?php the_post_thumbnail_url();?>">
	<?php }else { ?>
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri();?>/screenshot.png">
	<?php } ?>
	
	<title><?php
		// Detect Yoast SEO Plugin
		if (defined('WPSEO_VERSION')) {
			wp_title('');
		} else {
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
	
		wp_title( '|', true, 'right' );
	
		// Add the blog name.
		bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'themename_theme' ), max( $paged, $page ) );
		}
		?>
	</title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<!-- ALL THE STYLES & BOOTSTRAP -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/custom.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- Add CSS3 Rules here for IE 7-9
	================================================== -->
	
	<!--[if IE]>
	<style type="text/css">
	</style>
	<![endif]-->
	
	
	<!-- Mobile Specific Metas
	================================================== -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	
	<!-- Favicons
	================================================== -->
	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-114x114.png" />

	<link rel="pingback" href="<?php echo get_option('siteurl') .'/xmlrpc.php';?>" />
	
<?php
	/* 
	 * enqueue threaded comments support.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	// Load head elements
	wp_head();
?>
<!-- Global site tag (gtag.js) - Google Analytics -->

</head>
<body <?php body_class(); ?>>
<?php if(is_front_page()) { ?>
	<!-- Intercom -->
	<a class="intercom mobile-hide" href="#">
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-intercom.svg" alt="Intercom" />
	</a>
	<!-- PreLoader -->
	<div id="preloader">
	  <div id="status">
		<div class="loader-wrap vertalign">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/he-logo-animated-01a.gif" alt="Hotel Engine" />
		</div>
		</div>
	</div>
<?php } ?>
	<!-- HEADER and NAV -->
    <header class="container-fluid">
		<div class="container">
			  <div class="row align-items-center">
				<div class="col-xl-10 col-lg-9">
				  <div class="row align-items-center">
					  <a href="/"><img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/images/logo.svg" alt="Hotel Engine Logo" /></a>
					<div class="mainnavhide">
					  <nav class="nav">
						<?php wp_nav_menu( array(
                                 'theme_location' => 'main-nav'
                          ) ); ?>
					  </nav>
					</div>
					<!-- MOBILE NAV -->
                        <a href="javascript:void(0)" class="icon" style="display: none;">

                                                    <div class="hamburger">
                                                      <div class="menui top-menu"></div>
                                                      <div class="menui mid-menu"></div>
                                                      <div class="menui bottom-menu"></div>
                                                    </div>
                            </a>
					  <div class="mobilenav">
						  <div class="greyspace top">
						 </div>
						  <div class="container-fluid">
						  <div class="container">
							   <div class="row align-items-center">
							  		<a href="/"><img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/images/logo.svg" alt="Hotel Engine Logo" /></a>
								</div>
							  
										<ul class="navbar-nav">
										  <?php wp_nav_menu( array(
												 'theme_location' => 'main-nav'
										  ) ); ?>
										</ul>
										<div class="mobileshow btnwrap">
										  	<?php if(get_field('login_link','4')){ ?>
												<a href="<?php the_field('login_link', '4'); ?>" target="_blank" class="btn btn--secondary">Log In</a>
											<?php } ?>
											<?php if(get_field('signup_link','4')){ ?>
												<a href="<?php the_field('signup_link', '4'); ?>" class="btn">Sign Up</a>
											<?php } ?>
										</div>
							</div>
							 </div>
						  <div class="greyspace bottom">
						  </div>
                        </div>
					 	<!-- End Mobile Nav -->
				  </div>
				</div>
				<div class="col-xl-2 col-lg-3 text-right mobile-hide">
					<?php if(get_field('login_link','4')){ ?>
				  		<a href="<?php the_field('login_link', '4'); ?>" target="_blank" class="btn btn--secondary">Log In</a>
					<?php } ?>
					<?php if(get_field('signup_link','4')){ ?>
				 		<a href="<?php the_field('signup_link', '4'); ?>" class="btn">Sign Up</a>
					<?php } ?>
				</div>
			  </div>
		</div>
  	</header>	