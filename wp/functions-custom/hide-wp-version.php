<?php 

    function remove_version() {
      return '';
    }
    add_filter('the_generator', 'remove_version'); 

 ?>