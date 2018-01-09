<?php 
		
		//STYLES IN EDITOR-WIND
        function my_theme_add_editor_styles() {
            add_editor_style( 'css/custom-editor-style.css' );
        }
        add_action( 'init', 'my_theme_add_editor_styles' ); 

        //CUSTOM DASHBOARD STYLES
        function my_custom_dashboard() {
		  echo '<style>
		    .acf-flexible-content .layout {
                border-top: 2px solid #000;
            }

            .acf-flexible-content .layout .acf-fc-layout-order {
                background: #fff;
                color: #000;
            }

            .acf-flexible-content .layout .acf-fc-layout-handle {
                color: #fff;
                background-color: #555;
            }

            .acf-flexible-content .layout {
                border: 1px solid #555;
            }
		  </style>';
		}
		add_action('admin_head', 'my_custom_dashboard');

 ?>