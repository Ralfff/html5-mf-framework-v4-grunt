<?php 

    function custom_scripts() {
    if (!is_admin()) {
  
          wp_register_script('modernizr', get_bloginfo('template_directory') . "/js/modernizr.custom.js");
          wp_enqueue_script( 'modernizr' );
          wp_deregister_script( 'jquery' );
          wp_register_script('jquery', get_bloginfo('template_directory') . "/js/jquery.js" , false); //...neue Quelle für jQuery angeben 
          wp_enqueue_script( 'jquery' );
          wp_register_script('plugins-js', get_bloginfo('template_directory') . "/js/plugins.min.js"); // plugins, minified 
          wp_enqueue_script( 'plugins-js' );
          wp_register_script('custom', get_bloginfo('template_directory') . "/js/custom.js"); // custom.js minified 
          wp_enqueue_script( 'custom' );
      }
    }
    add_action( 'wp_enqueue_scripts', 'custom_scripts' );

 ?>