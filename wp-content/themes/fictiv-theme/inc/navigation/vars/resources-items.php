<?php 
	
	$resource_center = array(
		'header' => 'Digital Manufacturing Resources',
		'name' => 'Resource Center',
		'link' => '/resources/',
		'para' => 'Find all your prototype answers in one place.',
		'icon' => get_template_directory_uri() . '/assets/images/graphics/primary-nav-resources-center.png'
	);

	$help_center = array(
		'header' => 'Learn about fictiv',
		'name' => 'Help Center',
		'link' => 'https://help.fictiv.com/en/',
		'para' => 'Advice and answers from the Fictiv Team.',
		'icon' => get_template_directory_uri() . '/assets/images/graphics/primary-nav-resources-help-center.png'
	);

	$help_center_topics = array(
		array(
			'name' => 'Getting Started',
			'link' => 'https://help.fictiv.com/en/collections/169912-getting-started'
		),

		array(
			'name' => 'Uploading Your Parts',
			'link' => 'https://help.fictiv.com/en/collections/169916-uploading-and-organizing-parts'
		),

		array(
			'name' => 'Receiving a Quote',
			'link' => 'https://help.fictiv.com/en/collections/169923-getting-a-quote'
		),

		array(
			'name' => 'Placing an Order',
			'link' => 'https://help.fictiv.com/en/collections/169930-placing-an-order'
		),

		array(
			'name' => 'Tracking an Order',
			'link' => 'https://help.fictiv.com/en/articles/4356590-how-do-i-track-and-manage-my-orders'
		),
	);

	$featured_args = array(
		'post_type' => $GLOBALS['resource_post_types'],
		'posts_per_page' => 3,
		'meta_query' => array(
	        array(
	            'key' => '_thumbnail_id',
	            'compare' => 'EXISTS'
	        ),
	    )
	);

	$featured_reads = new WP_Query( $featured_args );

?>