<?php

function my_acf_init() {
	acf_update_setting('show_admin', false); // Don’t show ACF in the WP admin.
}

add_action('acf/init', 'my_acf_init');

?>