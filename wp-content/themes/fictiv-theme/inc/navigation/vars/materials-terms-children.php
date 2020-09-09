<?php 
	$materials_terms_children = get_posts( array(
		'post_type' => 'cpt_cap_material',
		'posts_per_page' => -1,
		'order' => 'ASC',
		'orderby' => 'title',
		'tax_query' => array(
			array(
				'taxonomy' => $term->taxonomy,
				'field' => 'term_id',
				'terms' => array( $mat )
			)
		)
	));
?>