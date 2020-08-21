<?php 

	add_action('init', 'create_post_types');

	function create_post_types() {

		register_post_type(
			'cpt_cap_material',
			array(
				'labels'		=> array(
					'name'					=> __('Materials'),
					'singular_name' 		=> __('Material'),
					'add_new'				=> __('Add new Material'),
					'add_new_item'			=> __('Add new Material'),
					'edit_item'				=> __('Edit Material'),
					'view_item'				=> __('View Material'),
					'view_items'			=> __('View Material'),
					'featured_image' 		=> __('Hero Image'),
					'set_featured_image' 	=> __('Upload Hero Image'),
					'remove_featured_image' => __('Remove Hero Image'),
					'use_featured_image'	=> __('Use as Hero Image'),
					'items_list'			=> __('Materials List')					
				),
				'taxonomies'	=> array(
					'fictiv_manufacturing_process'
				),
				'description' 	=> '',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> false,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					// 'editor',
					// 'author',
					'excerpt',
					'thumbnail',
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-awards',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'materials',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'materials'),
			)
		);

		register_post_type(
			'cpt_cap_finish',
			array(
				'labels'		=> array(
					'name'					=> __('Finishes'),
					'singular_name' 		=> __('Finish'),
					'add_new'				=> __('Add new Finish'),
					'add_new_item'			=> __('Add new Finish'),
					'edit_item'				=> __('Edit Finish'),
					'view_item'				=> __('View Finish'),
					'view_items'			=> __('View Finish'),
					'featured_image' 		=> __('Hero Image'),
					'set_featured_image' 	=> __('Upload Hero Image'),
					'remove_featured_image' => __('Remove Hero Image'),
					'use_featured_image'	=> __('Use as Hero Image'),
					'items_list'			=> __('Finishes List')					
				),
				'taxonomies'	=> array(
					'fictiv_manufacturing_process'
				),
				'description' 	=> '',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> false,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					// 'editor',
					// 'author',
					'excerpt',
					'thumbnail',
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-admin-appearance',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'finishes',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'finishes'),
			)
		);
	

		// register_post_type(
		// 	'cpt_industries',
		// 	array(
		// 		'labels'		=> array(
		// 			'name'					=> __('Industries'),
		// 			'singular_name' 		=> __('Industry'),
		// 			'add_new'				=> __('Add New Industry'),
		// 			'add_new_item'			=> __('Add New Industry'),
		// 			'edit_item'				=> __('Edit Industry'),
		// 			'view_item'				=> __('View Industry'),
		// 			'view_items'			=> __('View Industries'),
		// 			'featured_image' 		=> __('Thumbnail Image'),
		// 			'set_featured_image' 	=> __('Upload Thumbnail Image'),
		// 			'remove_featured_image' => __('Remove Thumbnail Image'),
		// 			'use_featured_image'	=> __('Use as Thumbnail Image'),
		// 			'items_list'			=> __('Industries List'),
		// 			'archives'				=> __('Industries Archive')
					
		// 		),
		// 		'taxonomies'	=> array(),
		// 		'description' 	=> 'Industries description goes here',
		// 		'public' 		=> true,
		// 		'hierarchical'  => true,
		// 		'has_archive' 	=> true,
		// 		'show_in_nav_menus'	=> true,
		// 		'supports'		=> array(
		// 			'title',
		// 			'excerpt', 
		// 			'thumbnail',
		// 		), 
		// 		'menu_position'	=> 5,
		// 		'menu_icon'		=> 'dashicons-building',
		// 		'show_ui'		=> true,
		// 		'show_in_rest'	=> true,
		// 		'rest_base'		=> 'industries',
		// 		'rest_controller_class'	=> 'WP_REST_Posts_Controller',
		// 		'rewrite' => array('slug' => 'industries'),
		// 	)
		// );

		// register_post_type(
		// 	'cpt_tools',
		// 	array(
		// 		'labels'		=> array(
		// 			'name'					=> __('Services'),
		// 			'singular_name' 		=> __('Service'),
		// 			'add_new'				=> __('Add New Service'),
		// 			'add_new_item'			=> __('Add New Service'),
		// 			'edit_item'				=> __('Edit Service'),
		// 			'view_item'				=> __('View Service'),
		// 			'view_items'			=> __('View Services'),
		// 			'featured_image' 		=> __('Thumbnail Image'),
		// 			'set_featured_image' 	=> __('Upload Thumbnail Image'),
		// 			'remove_featured_image' => __('Remove Thumbnail Image'),
		// 			'use_featured_image'	=> __('Use as Thumbnail Image'),
		// 			'items_list'			=> __('Services List'),
		// 			// 'archives'				=> __('Tools Archive')
					
		// 		),
		// 		'taxonomies'	=> array(),
		// 		'description' 	=> 'Services description goes here',
		// 		'public' 		=> true,
		// 		'hierarchical'  => true,
		// 		'has_archive' 	=> false,
		// 		'show_in_nav_menus'	=> true,
		// 		'supports'		=> array(
		// 			'title',
		// 			'excerpt', 
		// 			'thumbnail',
		// 		), 
		// 		'menu_position'	=> 5,
		// 		'menu_icon'		=> 'dashicons-businessman',
		// 		'show_ui'		=> true,
		// 		'show_in_rest'	=> true,
		// 		'rest_base'		=> 'tools',
		// 		'rest_controller_class'	=> 'WP_REST_Posts_Controller',
		// 		'rewrite' => array('slug' => 'tools'),
		// 	)
		// );

		// register_post_type(
		// 	'cpt_customer_stories',
		// 	array(
		// 		'labels'		=> array(
		// 			'name'					=> __('Customer Stories'),
		// 			'singular_name' 		=> __('Customer Story'),
		// 			'add_new'				=> __('Add New Customer Story'),
		// 			'add_new_item'			=> __('Add New Customer Story'),
		// 			'edit_item'				=> __('Edit Customer Story'),
		// 			'view_item'				=> __('View Customer Story'),
		// 			'view_items'			=> __('View Customer Story'),
		// 			'featured_image' 		=> __('Thumbnail Image'),
		// 			'set_featured_image' 	=> __('Upload Thumbnail Image'),
		// 			'remove_featured_image' => __('Remove Thumbnail Image'),
		// 			'use_featured_image'	=> __('Use as Thumbnail Image'),
		// 			'items_list'			=> __('Customer Stories List'),
					
		// 		),
		// 		'taxonomies'	=> array(),
		// 		'description' 	=> 'We work with leading innovators across a range of industries, to help them manufacture products faster and more efficiently than ever before.',
		// 		'public' 		=> true,
		// 		'hierarchical'  => true,
		// 		'has_archive' 	=> true,
		// 		'show_in_nav_menus'	=> true,
		// 		'supports'		=> array(
		// 			'title',
		// 			'excerpt',
		// 			'editor', 
		// 			'thumbnail'
		// 		), 
		// 		// 'supports' => true,
		// 		'menu_position'	=> 5,
		// 		'menu_icon'		=> 'dashicons-book-alt',
		// 		'show_ui'		=> true,
		// 		'show_in_rest'	=> true,
		// 		'rest_base'		=> 'customer-stories',
		// 		'rest_controller_class'	=> 'WP_REST_Posts_Controller',
		// 		'rewrite' => array('slug' => 'customer-stores'),
		// 	)
		// );

		// register_post_type(
		// 	'cpt_partners',
		// 	array(

		// 		'labels'		=> array(
		// 			'name'					=> __('Partners'),
		// 			'singular_name' 		=> __('Partner'),
		// 			'add_new'				=> __('Add New Partner'),
		// 			'add_new_item'			=> __('Add New Partner'),
		// 			'edit_item'				=> __('Edit Partner'),
		// 			'view_item'				=> __('View Partner'),
		// 			'view_items'			=> __('View Partner'),
		// 			'featured_image' 		=> __('Thumbnail Image'),
		// 			'set_featured_image' 	=> __('Upload Thumbnail Image'),
		// 			'remove_featured_image' => __('Remove Thumbnail Image'),
		// 			'use_featured_image'	=> __('Use as Thumbnail Image'),
		// 			'items_list'			=> __('Partner List'),
					
		// 		),
		// 		'taxonomies'	=> array(
		// 			'fictiv_partners_category'
		// 		),
		// 		'description' 	=> '',
		// 		'public' 		=> true,
		// 		'hierarchical'  => true,
		// 		'has_archive' 	=> true,
		// 		'show_in_nav_menus'	=> true,
		// 		'supports'		=> array(
		// 			'title',
		// 			'excerpt',
		// 			'editor', 
		// 			'thumbnail'
		// 		), 
		// 		// 'supports' => true,
		// 		'menu_position'	=> 5,
		// 		'menu_icon'		=> 'dashicons-groups',
		// 		'show_ui'		=> true,
		// 		'show_in_rest'	=> true,
		// 		'rest_base'		=> 'partners',
		// 		'rest_controller_class'	=> 'WP_REST_Posts_Controller',
		// 		'rewrite' => array('slug' => 'partners'),
		// 	)
		// );

		// register_post_type(
		// 	'cpt_press',
		// 	array(
		// 		'labels'		=> array(
		// 			'name'					=> __('Press'),
		// 			'singular_name' 		=> __('Press'),
		// 			'add_new'				=> __('Add New Press'),
		// 			'add_new_item'			=> __('Add New Press'),
		// 			'edit_item'				=> __('Edit Press'),
		// 			'view_item'				=> __('View Press'),
		// 			'view_items'			=> __('View Press'),
		// 			'featured_image' 		=> __('Thumbnail Image'),
		// 			'set_featured_image' 	=> __('Upload Thumbnail Image'),
		// 			'remove_featured_image' => __('Remove Thumbnail Image'),
		// 			'use_featured_image'	=> __('Use as Thumbnail Image'),
		// 			'items_list'			=> __('Customer Stories List'),
					
		// 		),
		// 		'taxonomies'	=> array(),
		// 		'description' 	=> 'We work with leading innovators across a range of industries, to help them manufacture products faster and more efficiently than ever before.',
		// 		'public' 		=> true,
		// 		'hierarchical'  => true,
		// 		'has_archive' 	=> true,
		// 		'show_in_nav_menus'	=> true,
		// 		'supports'		=> array(
		// 			'title',
		// 			'excerpt',
		// 			'editor', 
		// 			'thumbnail'
		// 		), 
		// 		// 'supports' => true,
		// 		'menu_position'	=> 5,
		// 		'menu_icon'		=> 'dashicons-book-alt',
		// 		'show_ui'		=> true,
		// 		'show_in_rest'	=> true,
		// 		'rest_base'		=> 'customer-stories',
		// 		'rest_controller_class'	=> 'WP_REST_Posts_Controller',
		// 		'rewrite' => array('slug' => 'customer-stores'),
		// 	)
		// );
	}
?>