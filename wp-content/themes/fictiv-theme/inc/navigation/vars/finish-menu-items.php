<?php 
	$finish_args = array(
		'post_type' => array(
			'cpt_cap_finish'
		),
		'posts_per_page' => -1,
		
	);

	$finish_menu = new WP_Query( $finish_args );
?>