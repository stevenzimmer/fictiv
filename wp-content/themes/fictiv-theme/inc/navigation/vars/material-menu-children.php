<?php 
	$child_taxes = get_posts( array(
		'post_type' => 'cpt_cap_material',
		'numberposts' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => $term->taxonomy,
				'field' => 'term_id',
				'terms' => array( $mat )
			)
		)
	));
?>