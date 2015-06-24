<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- disables scaling for responsive sites -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- iOS icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/apple-touch-icon-57x57-precomposed.png">
	
	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#009bdf"> 
	
	<!-- Chrome Add to Homescreen -->
	<link rel="shortcut icon" sizes="196x196" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/touch-icon-196x196.png">
	
	<!-- Generic Icon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/touch-icon-57x57.png">
	
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


