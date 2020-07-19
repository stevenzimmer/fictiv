<?php 

	add_action('init', 'create_resource_center_content');

	function create_resource_center_content() {

		// Register Blog Post Type
		register_post_type(
			'cpt_blog',
			array(
				'labels'		=> array(
					'name'					=> __('Blog Posts'),
					'singular_name' 		=> __('Blog'),
					'add_new'				=> __('Add New Article'),
					'add_new_item'			=> __('Add New Article'),
					'edit_item'				=> __('Edit Article'),
					'view_item'				=> __('View Article'),
					'view_items'			=> __('View Article'),
					'featured_image' 		=> __('Hero Image'),
					'set_featured_image' 	=> __('Upload Hero Image'),
					'remove_featured_image' => __('Remove Hero Image'),
					'use_featured_image'	=> __('Use as Hero Image'),
					'items_list'			=> __('Article List'),
					'archives'				=> __('Article Archive')
					
				),
				'taxonomies'	=> array(
					'fictiv_role',
					'fictiv_topic',
					'fictiv_industry',
					'fictiv_manufacturing_process'
				),
				'description' 	=> 'Blog description goes here',
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
				'menu_icon'		=> 'dashicons-welcome-write-blog',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'blog',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'blog'),
			)
		);

		register_post_type(
			'cpt_teardown',
			array(
				'labels'		=> array(
					'name'					=> __('Teardowns'),
					'singular_name' 		=> __('Teardown'),
					'add_new'				=> __('Add New Teardown'),
					'add_new_item'			=> __('Add New Teardown'),
					'edit_item'				=> __('Edit Teardown'),
					'view_item'				=> __('View Teardown'),
					'view_items'			=> __('View Teardown'),
					'featured_image' 		=> __('Hero Image'),
					'set_featured_image' 	=> __('Upload Hero Image'),
					'remove_featured_image' => __('Remove Hero Image'),
					'use_featured_image'	=> __('Use as Hero Image'),
					'items_list'			=> __('Teardown List'),
					'archives'				=> __('Teardown Archive')
					
				),
				'taxonomies'	=> array(
					'fictiv_role',
					'fictiv_topic',
					'fictiv_industry'
				),
				'description' 	=> 'Teardown description goes here',
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
				'menu_icon'		=> 'dashicons-hammer',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'teardowns',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'teardowns'),
			)
		);

		register_post_type(
			'cpt_webinar',
			array(
				'labels'		=> array(
					'name'					=> __('Webinars'),
					'singular_name' 		=> __('Webinar'),
					'add_new'				=> __('Add New Webinar'),
					'add_new_item'			=> __('Add New Webinar'),
					'edit_item'				=> __('Edit Webinar'),
					'view_item'				=> __('View Webinar'),
					'view_items'			=> __('View Webinar'),
					'featured_image' 		=> __('Hero Image'),
					'set_featured_image' 	=> __('Upload Hero Image'),
					'remove_featured_image' => __('Remove Hero Image'),
					'use_featured_image'	=> __('Use as Hero Image'),
					'items_list'			=> __('Webinar List'),
					'archives'				=> __('Webinar Archive')
					
				),
				'taxonomies'	=> array(
					'fictiv_role',
					'fictiv_topic',
					'fictiv_industry'
				),
				'description' 	=> 'Webinar description goes here',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> true,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					'editor',
					'excerpt', 
					'thumbnail',
					'page-attributes'
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-video-alt3',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'webinars',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'webinars'),
			)
		);

		register_post_type(
			'cpt_ebook',
			array(
				'labels'		=> array(
					'name'					=> __('eBooks'),
					'singular_name' 		=> __('eBook'),
					'add_new'				=> __('Add New eBook'),
					'add_new_item'			=> __('Add New eBook'),
					'edit_item'				=> __('Edit eBook'),
					'view_item'				=> __('View eBook'),
					'view_items'			=> __('View eBook'),
					'featured_image' 		=> __('Hero Image'),
					'set_featured_image' 	=> __('Upload Hero Image'),
					'remove_featured_image' => __('Remove Hero Image'),
					'use_featured_image'	=> __('Use as Hero Image'),
					'items_list'			=> __('eBook List'),
					'archives'				=> __('eBook Archive')
					
				),
				'taxonomies'	=> array(
					'fictiv_role',
					'fictiv_topic',
					'fictiv_industry',
					'fictiv_manufacturing_process'
				),
				'description' 	=> 'eBook description goes here',
				'public' 		=> true,
				'hierarchical'  => true,
				'has_archive' 	=> true,
				'show_in_nav_menus'	=> true,
				'supports'		=> array(
					'title',
					'editor',
					'excerpt', 
					'thumbnail',
					'page-attributes'
				), 
				'menu_position'	=> 5,
				'menu_icon'		=> 'dashicons-book',
				'show_ui'		=> true,
				'show_in_rest'	=> true,
				'rest_base'		=> 'ebooks',
				'rest_controller_class'	=> 'WP_REST_Posts_Controller',
				'rewrite' => array('slug' => 'ebooks'),
			)
		);

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
				'cpt_ebook'
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
				'cpt_ebook'
				// 'cpt_teardown'
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

		

		// register_post_type(
		// 	'cpt_resources',
		// 	array(
		// 		'labels'		=> array(
		// 			'name'					=> __('Resources'),
		// 			'singular_name' 		=> __('Resource'),
		// 			'add_new'				=> __('Add New Resource'),
		// 			'add_new_item'			=> __('Add New Resource'),
		// 			'edit_item'				=> __('Edit Resource'),
		// 			'view_item'				=> __('View Resource'),
		// 			'view_items'			=> __('View Resources'),
		// 			'featured_image' 		=> __('Thumbnail Image'),
		// 			'set_featured_image' 	=> __('Upload Thumbnail Image'),
		// 			'remove_featured_image' => __('Remove Thumbnail Image'),
		// 			'use_featured_image'	=> __('Use as Thumbnail Image'),
		// 			'items_list'			=> __('Resource List'),
		// 			'archives'				=> __('Resource Archive')
					
		// 		),
		// 		'taxonomies'	=> array(
		// 			'fictiv_content_type',
		// 			'fictiv_blog_topic',
		// 			'fictiv_role'
		// 		),
		// 		'description' 	=> 'Resources description goes here',
		// 		'public' 		=> true,
		// 		'hierarchical'  => true,
		// 		'has_archive' 	=> 'resources',
		// 		'show_in_nav_menus'	=> true,
		// 		'supports'		=> array(
		// 			'title',
		// 			'author',
		// 			'editor',
		// 			'excerpt', 
		// 			'thumbnail',
		// 		), 
		// 		'menu_position'	=> 5,
		// 		'menu_icon'		=> 'dashicons-welcome-learn-more',
		// 		'show_ui'		=> true,
		// 		'show_in_rest'	=> true,
		// 		'rest_base'		=> 'resources',
		// 		'rest_controller_class'	=> 'WP_REST_Posts_Controller',
		// 		'rewrite' => array(
		// 			'slug' => '%fictiv_content_type%',
		// 			'with_front' => false
		// 		),
		// 	)
		// );

		// register_taxonomy(
		// 	'fictiv_content_type',
		// 	array ('cpt_resources'),
		// 	array(
		// 		'labels'	=> array(
		// 			'name'			=> 'Content Types',
		// 			'singular_name'	=> 'Content Type',
		// 			'menu_name'		=> 'Content Types',
		// 			'add_new_item'	=> 'Add New Content Type',
		// 			'new_item_name'	=> 'New Content Type'
		// 		),
		// 		'show_ui'			=> true,
		// 		'show_in_nav_menus'	=> true,
		// 		'show_tagcloud'		=> false,
		// 		'hierarchical'		=> true,
		// 		'query_var'			=> true,
		// 		'show_admin_column'	=> true,
		// 		'show_in_rest'      => true,
		// 		'rewrite'      => array(
		// 			'slug' => 'resources',
 	// 			)
		// 	)
		// );
	}

	// add_filter('post_type_link', 'glossary_term_permalink', 10, 4);
	// function glossary_term_permalink($post_link, $post, $leavename, $sample)
	// {
	// 		// print_r( $post_link );
	// 		// print_r( $post );
	// 		// print_r( $leavename );
	// 		// print_r( $sample );
	// 	if ( is_object( $post ) && $post->post_type == 'cpt_resources' ) :
	// 	    if ( false !== strpos( $post_link, '%fictiv_content_type%' ) ) :
	// 	        $glossary_letter = get_the_terms( $post->ID, 'fictiv_content_type' );
	// 	        // print_r($glossary_letter);
		        
	// 	        // print_r($post_link);

	// 	        $post_link = str_replace( '%fictiv_content_type%', $glossary_letter[0]->slug, $post_link );

	// 	        // print_r($post_link);
	// 	    endif;
	// 	    return $post_link;
	// 	endif;
	// }


?>