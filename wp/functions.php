<?php 

  //IMPORTS 
  include_once('functions-custom/custom_post_types.php'); 

  //SUPPORTS 
    add_theme_support( 'post-thumbnails' );
    // add_theme_support( 'title-tag' );
  
  // Add RSS links to <head> section
    //add_theme_support( 'automatic-feed-links' );
  
  // CUSTOM WORDPRESS LOGIN CSS
    include_once('functions-custom/login.php');
  
  //REGISTER SCRIPTS 
    include_once('functions-custom/register-scripts.php');
  
  // Clean up the <head> 
    include_once('functions-custom/clean-head.php');
    
  // Declare sidebar widget zone
    include_once('functions-custom/sidebar-widget-zone.php');

  //CUSTOM MENUS 
    include_once('functions-custom/menus.php');

  //ADDITIONAL IMG SIZES
    //include_once('functions-custom/img-sizes.php');

  //CUSTOM PASSWORD-PROTECTED AREA FORM
    include_once('functions-custom/password-area.php');

  //GERMAN QUOTES
    include_once('functions-custom/german-quotes.php');

  //REMOVE THUMB DIMENSIONS (RESPONSIVE IMAGES)
    include_once('functions-custom/remove-thumb-dimensions.php');

  //Add Google Fonts to Editor 
    //include_once('functions-custom/google-fonts-in-editor.php');

  //Custom Editor Styles 
    //include_once('functions-custom/editor-styles.php');

  //Login-Logo Link und text 
    //include_once('functions-custom/login-logo-text.php');

  // custom excerpt word count 
    //include_once('functions-custom/excerpt-count.php');

  //Custom Excerpt more
    include_once('functions-custom/excerpt-more.php');

  // Better WP-Title
    include_once('functions-custom/better-wp-title.php');

  //Disable img compression 
    add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) ); 

  //Hide WP-Version 
    include_once('functions-custom/hide-wp-version.php');

  //Page Slug Body Class
    include_once('functions-custom/page-name-class.php'); 

  //Category Body Class
    include_once('functions-custom/category-name-class.php'); 
    
  //Browser Name Body Class
    include_once('functions-custom/browser-name-class.php');           

?>