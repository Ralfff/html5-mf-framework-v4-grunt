<?php 

    function register_my_menus() {
      register_nav_menus(
        array(
          'main-nav' => __( 'Main Nav' ),
          'footer-nav' => __( 'Footer Nav' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );

 ?>