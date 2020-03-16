<?php 

	add_action('init', 'create_post_types');

	function create_post_types() {

		// Register Resouce Post Type
		register_post_type(
			'cpt_blog',
			array(
				'labels'		=> array(
					'name'					=> __('Blogs'),
					'singular_name' 		=> __('Blog'),
					'add_new'				=> __('Add New Blog'),
					'add_new_item'			=> __('Add New Blog'),
					'edit_item'				=> __('Edit Blog'),
					'view_item'				=> __('View Blog'),
					'view_items'			=> __('View Blog'),
					'featured_image' 		=> __('Thumbnail Image'),
					'set_featured_image' 	=> __('Upload Thumbnail Image'),
					'remove_featured_image' => __('Remove Thumbnail Image'),
					'use_featured_image'	=> __('Use as Thumbnail Image'),
					'items_list'			=> __('Blog List'),
					'archives'				=> __('Blog Archive')
					
				),
				'taxonomies'	=> array(),
				'description' 	=> 'Blog description goes here',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> true,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					'excerpt', 
					'thumbnail',
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-welcome-write-blog',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'blog',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'blog'),
			)
		);

		register_post_type(
			'cpt_hwg',
			array(
				'labels'		=> array(
					'name'					=> __('Hardware Guide'),
					'singular_name' 		=> __('Hardware Guide'),
					'add_new'				=> __('Add New Post'),
					'add_new_item'			=> __('Add New Post'),
					'edit_item'				=> __('Edit Post'),
					'view_item'				=> __('View Post'),
					'view_items'			=> __('View Post'),
					'featured_image' 		=> __('Thumbnail Image'),
					'set_featured_image' 	=> __('Upload Thumbnail Image'),
					'remove_featured_image' => __('Remove Thumbnail Image'),
					'use_featured_image'	=> __('Use as Thumbnail Image'),
					'items_list'			=> __('Hardware Guide List'),
					'archives'				=> __('Hardware Guide')
					
				),
				'taxonomies'	=> array(),
				'description' 	=> 'Hardware Guide description goes here',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> true,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					'editor',
					'author',
					'excerpt',
					'thumbnail',
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-portfolio',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'hwg',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'hwg'),
			)
		);

		register_post_type(
			'cpt_resources',
			array(
				'labels'		=> array(
					'name'					=> __('Resources'),
					'singular_name' 		=> __('Resource'),
					'add_new'				=> __('Add New Resource'),
					'add_new_item'			=> __('Add New Resource'),
					'edit_item'				=> __('Edit Resource'),
					'view_item'				=> __('View Resource'),
					'view_items'			=> __('View Resources'),
					'featured_image' 		=> __('Thumbnail Image'),
					'set_featured_image' 	=> __('Upload Thumbnail Image'),
					'remove_featured_image' => __('Remove Thumbnail Image'),
					'use_featured_image'	=> __('Use as Thumbnail Image'),
					'items_list'			=> __('Resource List'),
					'archives'				=> __('Resource Archive')
					
				),
				'taxonomies'	=> array(),
				'description' 	=> 'Resources description goes here',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> true,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					'excerpt', 
					'thumbnail',
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-welcome-learn-more',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'resources',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'resources'),
			)
		);

		register_post_type(
			'cpt_capabilities',
			array(
				'labels'		=> array(
					'name'					=> __('Capabilities'),
					'singular_name' 		=> __('Capability'),
					'add_new'				=> __('Add New Capability'),
					'add_new_item'			=> __('Add New Capability'),
					'edit_item'				=> __('Edit Capability'),
					'view_item'				=> __('View Capability'),
					'view_items'			=> __('View Capabilities'),
					'featured_image' 		=> __('Thumbnail Image'),
					'set_featured_image' 	=> __('Upload Thumbnail Image'),
					'remove_featured_image' => __('Remove Thumbnail Image'),
					'use_featured_image'	=> __('Use as Thumbnail Image'),
					'items_list'			=> __('Capabilities List'),
					'archives'				=> __('Capabilities Archive')
					
				),
				'taxonomies'	=> array(),
				'description' 	=> 'Capabilities description goes here',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> true,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					'excerpt', 
					'thumbnail',
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-clipboard',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'capabilities',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'capabilities'),
			)
		);

		register_post_type(
			'cpt_industries',
			array(
				'labels'		=> array(
					'name'					=> __('Industries'),
					'singular_name' 		=> __('Industry'),
					'add_new'				=> __('Add New Industry'),
					'add_new_item'			=> __('Add New Industry'),
					'edit_item'				=> __('Edit Industry'),
					'view_item'				=> __('View Industry'),
					'view_items'			=> __('View Industries'),
					'featured_image' 		=> __('Thumbnail Image'),
					'set_featured_image' 	=> __('Upload Thumbnail Image'),
					'remove_featured_image' => __('Remove Thumbnail Image'),
					'use_featured_image'	=> __('Use as Thumbnail Image'),
					'items_list'			=> __('Industries List'),
					'archives'				=> __('Industries Archive')
					
				),
				'taxonomies'	=> array(),
				'description' 	=> 'Industries description goes here',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> true,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					'excerpt', 
					'thumbnail',
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-building',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'industries',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'industries'),
			)
		);

		register_post_type(
			'cpt_tools',
			array(
				'labels'		=> array(
					'name'					=> __('Services'),
					'singular_name' 		=> __('Service'),
					'add_new'				=> __('Add New Service'),
					'add_new_item'			=> __('Add New Service'),
					'edit_item'				=> __('Edit Service'),
					'view_item'				=> __('View Service'),
					'view_items'			=> __('View Services'),
					'featured_image' 		=> __('Thumbnail Image'),
					'set_featured_image' 	=> __('Upload Thumbnail Image'),
					'remove_featured_image' => __('Remove Thumbnail Image'),
					'use_featured_image'	=> __('Use as Thumbnail Image'),
					'items_list'			=> __('Services List'),
					// 'archives'				=> __('Tools Archive')
					
				),
				'taxonomies'	=> array(),
				'description' 	=> 'Services description goes here',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> false,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					'excerpt', 
					'thumbnail',
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-businessman',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'tools',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'tools'),
			)
		);
	}
?>