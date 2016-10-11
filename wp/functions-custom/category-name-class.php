<?php 

	function add_category_name($classes = '') {
	  if (is_single()) {
	    $category = get_the_category();
	    $classes[] = 'category-'.$category[0]->slug;
	  }
	  return $classes;
	}
	add_filter('body_class','add_category_name');

 ?>