<?php 
	$children_processes = get_children( array(
		'post_type' => array('page'),
		'post_parent' => get_the_id() 
	));
?>