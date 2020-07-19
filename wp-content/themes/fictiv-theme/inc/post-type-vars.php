<?php 
$post_type_name = ( is_single() ? 
		
		get_post_type_object( get_queried_object()->post_type )->labels->name 
	
	: 

		get_queried_object()->label
);

$post_type = ( is_single() ? 
		
		get_queried_object()->post_type
	
	: 

		get_queried_object()->name
);

$post_description = ( is_single() ? 
		
		get_queried_object()->description
	
	: 

		get_queried_object()->description
);

// $post_type_header = ( is_tax() ? $archive_name . ' ' . get_taxonomy( get_queried_object()->taxonomy )->label : get_queried_object()->labels->name );



// print_r( $post_type_name );

// print_r( $post_type );

// print_r( get_queried_object() );

// echo get_post_type_archive_link( get_queried_object()->post_type );

// echo get_post_type_object( get_queried_object()->post_type )->labels->name;
							
?>