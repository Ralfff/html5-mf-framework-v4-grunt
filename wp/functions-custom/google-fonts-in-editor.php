<?php 

        function my_theme_add_google_fonts() {
            $font_url = 'http://fonts.googleapis.com/css?family=Raleway:700,300,400,100,200,500,600';
            add_editor_style( str_replace( ',', '%2C', $font_url ) );
        }
        add_action( 'init', 'my_theme_add_google_fonts' );

 ?>