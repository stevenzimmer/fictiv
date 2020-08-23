<?php 
	$cap_args = array(
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

	$cap_menu = new WP_Query( $cap_args );
?>