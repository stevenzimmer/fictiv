<?php 
	
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
				'title' => get_the_title(),
				'link' => get_the_permalink(),
				'thumb' => ( 

					get_field( 'card_thumbnail', get_the_id() ) 
				
					?
				
						get_field( 'card_thumbnail', get_the_id() ) 
				
					:
						(
							has_post_thumbnail() 

							? 
								wp_get_attachment_image_src( 
									get_post_thumbnail_id( get_the_id() ), 
									'medium_large', 
									false )[0] 

							: 
								false 
						)
				),
				'excerpt' => get_the_excerpt(),
				'post_type' => get_post_type(),
				'id' => get_the_id()
			));

		endwhile;
		wp_reset_postdata();

		return $resource_results;
	
	}
?>