<?php 

	function login_css() {
		wp_enqueue_style( 'login_css', get_template_directory_uri() . '/css/custom-login.css' );
	}
	add_action('login_head', 'login_css');

 ?>