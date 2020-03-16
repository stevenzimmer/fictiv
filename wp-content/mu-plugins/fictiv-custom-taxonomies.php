<?php 
	add_action('init', 'create_custom_taxonomies');

	function create_custom_taxonomies() {

		register_taxonomy(
			'fictiv_content_type',
			array ('cpt_resources'),
			array(
				'labels'	=> array(
					'name'			=> 'Content Types',
					'singular_name'	=> 'Content Type',
					'menu_name'		=> 'Content Types',
					'add_new_item'	=> 'Add New Content Type',
					'new_item_name'	=> 'New Content Type'
				),
				'show_ui'			=> true,
				'show_in_nav_menus'	=> false,
				'show_tagcloud'		=> false,
				'hierarchical'		=> true,
				'query_var'			=> true,
				'show_admin_column'	=> true,
				'show_in_rest'      => true,
				'rewrite'	=> array(
					'slug' => 'content-type'
				)
			)
		);

		register_taxonomy(
			'fictiv_hwg_category',
			array ('cpt_hwg'),
			array(
				'labels'	=> array(
					'name'			=> 'HWG Categories',
					'singular_name'	=> 'HWG Category',
					'menu_name'		=> 'HWG Categories',
					'add_new_item'	=> 'Add New HWG Category',
					'new_item_name'	=> 'New HWG Category'
				),
				'show_ui'			=> true,
				'show_in_nav_menus'	=> false,
				'show_tagcloud'		=> false,
				'hierarchical'		=> true,
				'query_var'			=> true,
				'show_admin_column'	=> true,
				'show_in_rest'      => true,
				'rewrite'	=> array(
					'slug' => 'hwg-category'
				)
			)
		);
	}
?>