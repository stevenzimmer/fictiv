<?php 
	
	$material_args = array(
		'posts_per_page' => -1,
		'post_type' => array(
			'cpt_cap_material'
		),
		'order' => 'ASC',
		'orderby' => 'name',
		'tax_query' => array(
			array(
				'taxonomy' => $term->taxonomy,
				'field' => 'id',
				'terms' => array(
					$term->term_id
				),
				'include_children' => false
			)
		)
	);

	$mat_posts = new WP_Query( $material_args );
?>