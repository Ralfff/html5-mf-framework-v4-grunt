<?php 
		
		//STYLES IN EDITOR-WIND
        function my_theme_add_editor_styles() {
            add_editor_style( 'css/custom-editor-style.css' );
        }
        add_action( 'init', 'my_theme_add_editor_styles' ); 

        //CUSTOM DASHBOARD STYLES
        function my_custom_dashboard() {
		  echo '<style>
		      
		  </style>';
		}
		add_action('admin_head', 'my_custom_dashboard');

 ?>