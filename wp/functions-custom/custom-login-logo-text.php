<?php 

        function my_login_logo_url() {
            return get_bloginfo( 'url' );
        }
        add_filter( 'login_headerurl', 'my_login_logo_url' );
        
        function my_login_logo_url_title() {
            return 'Wordpress Theme by Ralf Hoffmeister';
        }
        add_filter( 'login_headertitle', 'my_login_logo_url_title' ); 

 ?>