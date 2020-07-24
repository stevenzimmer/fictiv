<?php 
	
	function exclude_child_posts_in_loop( $query ) {
    
        if( $query->is_post_type_archive && $query->is_archive && !$query->is_admin  ) :

            $query->set( 'post_parent', 0 );
        
        endif;
        
    }


    add_action( 'pre_get_posts', 'exclude_child_posts_in_loop' );
?>