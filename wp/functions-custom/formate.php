<?php 

//FÜGT DROPDOWN_MENÜ MIT EIGENEN FORMATEN HINZU

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );


// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Absätze übergeben
		// $init['block_formats'] = 'Absatz=p;Überschrift 1=h1;Überschrift 2=h2;Überschrift 3=h3;';
	

	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Seitentitel',  
			'block' => 'h1',  
			'attributes' => array('class' => ''), //overrides former attributes
			'wrapper' => false,
			'exact' => true,
		),  
		array(  
			'title' => 'Zwischentitel',  
			'block' => 'h2',  
			'attributes' => array('class' => ''),
			'wrapper' => false,
			'exact' => true,
		), 
		
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  

 ?>