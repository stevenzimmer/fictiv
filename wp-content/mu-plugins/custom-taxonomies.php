<?php 
	add_action('init', 'create_custom_taxonomies');

	function create_custom_taxonomies() {

		register_taxonomy(
			'fictiv_page_type',
			array ('page'),
			array(
				'labels'	=> array(
					'name'			=> 'Page Types',
					'singular_name'	=> 'Page Type',
					'menu_name'		=> 'Page Types',
					'add_new_item'	=> 'Add New Page Type',
					'new_item_name'	=> 'New Page Type'
				),
				'show_ui'			=> true,
				'show_in_nav_menus'	=> false,
				'show_tagcloud'		=> false,
				'hierarchical'		=> true,
				'query_var'			=> true,
				'show_admin_column'	=> true,
				'show_in_rest'      => true,
				'rewrite'	=> array(
					'slug' => 'page-type'
				)
			)
		);
	}
?>