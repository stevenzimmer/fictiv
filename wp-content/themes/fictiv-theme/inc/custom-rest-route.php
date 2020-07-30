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

			// $taxonomies = array();

			// foreach ( get_post_type_object( get_post_type() )->taxonomies as $j => $tax ) :

			// 	if ( !in_array( $tax, $taxonomies ) ) :
					
			// 		array_push( $taxonomies, $tax);

			// 	endif;
			// endforeach;

			// $filters = get_terms( array(
			// 	'taxonomy' => $tax,
			// 	'hide_empty' => true
			// ));

			// $terms = array();

			// foreach ($filters as $i => $filter ) {
				
			// 	array_push($terms, $filter->name );

			// }

			array_push( $resource_results, array(
				'title' => get_the_title(),
				'link' => get_the_permalink(),
				'thumb' => wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0],
				'excerpt' => get_the_excerpt(),
				'post_type' => get_post_type()
			));

		endwhile;
		wp_reset_postdata();

		return $resource_results;
	
	}
?>