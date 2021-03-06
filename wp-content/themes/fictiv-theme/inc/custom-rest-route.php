<?php 
	
	// WordPress Rest Route used with search results template
	
	// resource_center_cpt() located in functions.php
	resource_center_cpt();

	function fictiv_custom_rest_route() {

		register_rest_route(
			'fictiv/v1',
			'search',
			array(
				'methods' => WP_REST_SERVER::READABLE,
				'callback' => 'fictiv_search_results',
				'permission_callback' => '__return_true'
			)
		);   
	}

	add_action('rest_api_init',  'fictiv_custom_rest_route');

	function fictiv_search_results( $data ) {
		$page = $data['page'];

		$resources = new WP_Query( array(
			'posts_per_page' => 6,
			'paged' => $page,
			'post_type' => $GLOBALS['resource_post_types'],
			'post_parent' => 0,
			's' => sanitize_text_field( $data['query'] )
		));

		$resource_results = array();

		while( $resources->have_posts() ) :
			$resources->the_post();

			array_push( $resource_results, array(
				'id' => get_the_id()
			));

		endwhile;
		wp_reset_postdata();

		return $resource_results;
	
	}
?>