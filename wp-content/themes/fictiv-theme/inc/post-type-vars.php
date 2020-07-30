<?php 

$post_type_name = ( is_single() ? 
		
		get_post_type_object( get_queried_object()->post_type )->labels->name 
	
	: 

		( is_search() ?
				'Search term: "' . $_GET['s'] . '"'
			:
				( is_page() ?
			
					ucfirst( get_the_title() )

					:
					
					get_queried_object()->label
				)
			)
		
);

$post_type = ( is_single() ? 
		
		get_queried_object()->post_type
	
	: 

		( is_search() ?
				''
			:
				get_queried_object()->name
		)

		
);

$post_description = ( is_single() ? 
		
		get_queried_object()->description
	
	: 

		( is_search() ?
				''
			:
				get_queried_object()->description
		)

		
);


// print_r( get_queried_object()->post_title );
$post_title = ( is_single() ?
		get_post( get_queried_object()->post_parent )->post_title
	:
		
			
				''
		
);

							
?>