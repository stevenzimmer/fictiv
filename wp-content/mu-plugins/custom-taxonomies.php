<?php 
	add_action('init', 'create_custom_taxonomies');

	function create_custom_taxonomies() {

		

		// register_taxonomy(
		// 	'fictiv_hwg_category',
		// 	array ('cpt_hwg'),
		// 	array(
		// 		'labels'	=> array(
		// 			'name'			=> 'HWG Categories',
		// 			'singular_name'	=> 'HWG Category',
		// 			'menu_name'		=> 'HWG Categories',
		// 			'add_new_item'	=> 'Add New HWG Category',
		// 			'new_item_name'	=> 'New HWG Category'
		// 		),
		// 		'show_ui'			=> true,
		// 		'show_in_nav_menus'	=> false,
		// 		'show_tagcloud'		=> false,
		// 		'hierarchical'		=> true,
		// 		'query_var'			=> true,
		// 		'show_admin_column'	=> true,
		// 		'show_in_rest'      => true,
		// 		'rewrite'	=> array(
		// 			'slug' => 'hwg-category'
		// 		)
		// 	)
		// );

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

		register_taxonomy(
			'fictiv_partners_category',
			array ('cpt_partners'),
			array(
				'labels'	=> array(
					'name'			=> 'Partner Categories',
					'singular_name'	=> 'Partner Category',
					'menu_name'		=> 'Partner Categories',
					'add_new_item'	=> 'Add New Partner Category',
					'new_item_name'	=> 'New Partner Category'
				),
				'show_ui'			=> true,
				'show_in_nav_menus'	=> false,
				'show_tagcloud'		=> false,
				'hierarchical'		=> true,
				'query_var'			=> true,
				'show_admin_column'	=> true,
				'show_in_rest'      => true,
				'rewrite'	=> array(
					'slug' => 'partner-category'
				)
			)
		);
	}
?>