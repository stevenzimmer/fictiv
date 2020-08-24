<?php 

	$finishes_args = array(
		'post_type' => array(
			'cpt_cap_finish'
		),
		'posts_per_page' => -1,
		
	);

	$finishes_menu = new WP_Query( $finishes_args );
	
	$capabilities_args = array(
	'post_type' => array(
		'page'
	),
	'order' => 'ASC',
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'fictiv_page_type',
			'field' => 'slug',
			'terms' => array(
				'capabilities'
			)
		)
	)
	);

	$capabilities_menu = new WP_Query( $capabilities_args );
?>