<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="MobileOptimized" content="320">
	<meta name="HandheldFriendly" content="True">
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- optimized scaling for responsive sites -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Generic Icon -->
	<?php wp_site_icon(); ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?> 
	

	
</head>

<body <?php body_class('pop-in'); ?>>
	
	<div class="container clear"> 

	
		<header>
			<div class="frame clear">
				<a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" class="logo clear"></a>
				<nav class="main-nav clear">
					<?php wp_nav_menu( array('theme_location' => 'main-nav' )); ?>
				</nav>
	
				<button type="button" class="menu-button" href="#"></button> 
			</div> <!--END FRAME-->
		</header><!-- END HEADER -->


