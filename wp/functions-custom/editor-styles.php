<?php 

        function my_theme_add_editor_styles() {
            add_editor_style( 'css/custom-editor-style.css' );
        }
        add_action( 'init', 'my_theme_add_editor_styles' ); 

 ?>