<?php 
	
	resource_center_cpt();

	function fictiv_custom_rest_route() {

		register_rest_route(
			'fictiv/v1',
			'search',
			array(
				'methods' => WP_REST_SERVER::READABLE,
				'callback' => 'fictiv_search_results'
			)
		);   
	}

	add_action('rest_api_init',  'fictiv_custom_rest_route');

	function fictiv_search_results( $data ) {

		$resources = new WP_Query( array(
			'posts_per_page' => -1,
			'post_type' => $GLOBALS['resource_post_types'],
			'post_parent' => 0,
			's' => sanitize_text_field( $data['query'] )

		));

		$resource_results = array();

		while( $resources->have_posts() ) :
			$resources->the_post();

			array_push( $resource_results, array(
				'title' => get_the_title(),
				'link' => get_the_permalink(),
				'thumb' => wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0],
				'excerpt' => get_the_excerpt(),
				'post_type' => get_post_type()
			));

		endwhile;

		return $resource_results;
	
	}
?>