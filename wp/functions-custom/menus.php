<?php 

    function register_my_menus() {
      register_nav_menus(
        array(
          'main-nav' => __( 'Menü-Position: Header' ),
          'footer-nav' => __( 'Menü-Position: Footer' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );

 ?>