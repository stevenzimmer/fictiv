<?php 
	$children_processes = get_children( array(
		'post_type' => array('page'),
		'order' => 'ASC',
		'orderby' => 'title',
		'post_parent' => get_the_id() 
	));
?>