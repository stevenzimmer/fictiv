<?php 

	function remove_menu_items() {

		// Cleans up WP-admin for non admin users
		if ( !current_user_can('administrator') ) :
	
			remove_menu_page('tools.php');
			remove_menu_page('index.php');
		
		endif;
	
	}
	
	
	add_action('admin_menu', 'remove_menu_items');
?>