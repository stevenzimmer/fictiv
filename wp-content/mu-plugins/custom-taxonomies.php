<?php 
	add_action('init', 'create_custom_taxonomies');

	function create_custom_taxonomies() {




		// Custom Taxonomies for Resources

		register_taxonomy(
			'fictiv_role',
			array (
				'cpt_blog',
				'cpt_teardown',
				'cpt_webinar',
				'cpt_ebook'
			),
			array(
				'labels'	=> array(
					'name'			=> 'Roles',
					'singular_name'	=> 'Role',
					'menu_name'		=> 'Roles',
					'add_new_item'	=> 'Add New Role',
					'new_item_name'	=> 'New Role'
				),
				'show_ui'			=> true,
				'show_in_nav_menus'	=> false,
				'show_tagcloud'		=> false,
				'hierarchical'		=> true,
				'query_var'			=> true,
				'show_admin_column'	=> true,
				'show_in_rest'      => true,
				'rewrite'	=> array(
					'slug' => 'role', 'with_front' => false
				)
			)
		);

		register_taxonomy(
			'fictiv_topic',
			array (
				'cpt_blog',
				'cpt_teardown',
				'cpt_webinar',
				'cpt_ebook'
			),
			array(
				'labels'	=> array(
					'name'			=> 'Topics',
					'singular_name'	=> 'Topic',
					'menu_name'		=> 'Topics',
					'add_new_item'	=> 'Add New Topic',
					'new_item_name'	=> 'New Topic'
				),
				'show_ui'			=> true,
				'show_in_nav_menus'	=> false,
				'show_tagcloud'		=> false,
				'hierarchical'		=> true,
				'query_var'			=> true,
				'show_admin_column'	=> true,
				'show_in_rest'      => true,
				'rewrite'	=> array(
					'slug' => 'topic', 'with_front' => false
				)
			)
		);

		register_taxonomy(
			'fictiv_industry',
			array (
				'cpt_blog',
				'cpt_teardown',
				'cpt_webinar',
				'cpt_ebook',
				'cpt_case_study',
				'cpt_video',
				'cpt_tool',

			),
			array(
				'labels'	=> array(
					'name'			=> 'Industries',
					'singular_name'	=> 'Industry',
					'menu_name'		=> 'Industries',
					'add_new_item'	=> 'Add New Industry',
					'new_item_name'	=> 'New Industry'
				),
				'show_ui'			=> true,
				'show_in_nav_menus'	=> false,
				'show_tagcloud'		=> false,
				'hierarchical'		=> true,
				'query_var'			=> true,
				'show_admin_column'	=> true,
				'show_in_rest'      => true,
				'rewrite'	=> array(
					'slug' => 'industry', 'with_front' => false
				)
			)
		);

		register_taxonomy(
			'fictiv_manufacturing_process',
			array (
				'cpt_blog',
				'cpt_webinar',
				'cpt_ebook',
				'cpt_case_study',
				'cpt_video',
				'cpt_tool',
				'cpt_cap_material',
				'cpt_cap_finish',
				'cpt_partners',
				'page'
			),
			array(
				'labels'	=> array(
					'name'			=> 'Manufacturing Processes',
					'singular_name'	=> 'Manufacturing Processes',
					'menu_name'		=> 'Manufacturing Processes',
					'add_new_item'	=> 'Add New Process',
					'new_item_name'	=> 'New Process'
				),
				'show_ui'			=> true,
				'show_in_nav_menus'	=> false,
				'show_tagcloud'		=> false,
				'hierarchical'		=> true,
				'query_var'			=> true,
				'show_admin_column'	=> true,
				'show_in_rest'      => true,
				'rewrite'	=> array(
					'slug' => 'manufacturing-processes', 'with_front' => false
				)
			)
		);



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