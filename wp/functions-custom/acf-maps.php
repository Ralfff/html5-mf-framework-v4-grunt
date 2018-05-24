<?php

function my_acf_init() {
	// Demo-Key only works locally
	acf_update_setting('google_api_key', 'AIzaSyBVp7fx4shcazgsqvjZsGLusMw1sRWf10k');
}

add_action('acf/init', 'my_acf_init');

?>