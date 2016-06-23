<?php 

    if ( function_exists( 'add_image_size' ) ) { 
      add_image_size( 'home-slide','1024' ); // name, width, height, crop
    }

    //Show Size in Media Library 
    add_filter( 'image_size_names_choose', 'my_custom_sizes' );
        function my_custom_sizes( $sizes ) {
            return array_merge( $sizes, array(
                // 'home-slide' => __( 'Home Slide' )
            ) );
        }

 ?>