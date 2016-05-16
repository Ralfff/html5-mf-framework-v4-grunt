<?php 

        add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );  
        add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); 
        function remove_thumbnail_dimensions( $html ) {     
        	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );     
        	return $html; 
        } 

 ?>