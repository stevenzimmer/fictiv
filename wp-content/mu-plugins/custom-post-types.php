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
	}
?>