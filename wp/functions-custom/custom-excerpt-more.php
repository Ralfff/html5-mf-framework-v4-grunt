<?php 

        add_filter('excerpt_more', 'new_excerpt_more');
        function new_excerpt_more( $more ) {
         return '...';
        } 

 ?>