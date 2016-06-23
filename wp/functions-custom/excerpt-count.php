<?php 

        function my_excerpt_length($length) {
          return 17; // Or whatever you want the length to be.
        }
        add_filter('excerpt_length', 'my_excerpt_length'); 

 ?>