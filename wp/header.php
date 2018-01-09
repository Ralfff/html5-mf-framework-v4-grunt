<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="MobileOptimized" content="320">
	<meta name="HandheldFriendly" content="True">
	<!-- <meta name="theme-color" content="#000000"> -->

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

<body <?php body_class(); ?>>

	<div class="container clear">


		<header>
			<div class="frame clear">
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" class="logo clear"></a>
					<!-- Main Nav -->
					<?php wp_nav_menu( array(
						'theme_location' => 'main-nav',
						'container' => 'nav',
						'container_class' =>
						'main-nav clear',
						'menu_class' => 'main-nav-ul clear',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
					)); ?>

				<button type="button" class="menu-button" href="#"></button>
			</div> <!--END FRAME-->
		</header><!-- END HEADER -->


