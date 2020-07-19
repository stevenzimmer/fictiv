<?php 

	include( get_template_directory() . '/inc/post-type-vars.php');

	$post_taxonomies = get_object_taxonomies( $post_type, 'objects' );
?>