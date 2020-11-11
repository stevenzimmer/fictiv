<?php 
// Used to customize editor styling based on template name
function add_body_class_to_block_editor( $classes ) {
        //get current page
        global $pagenow;

        //check if the current page is post.php and if the post parameteris set
        if ( $pagenow ==='post.php' && isset($_GET['post']) ) :
            //get the post type via the post id from the URL
            $postType = get_post_type( $_GET['post']);
            //append the new class
            $classes .= ' single-' . $postType;

        //next check if this is a new post
        elseif ( $pagenow ==='post-new.php' )  :
            
            //check if the post_type parameter is set
            if( isset($_GET['post_type']) ) :
            
                //in this case you can get the post_type directly from the URL
                $classes .= ' single-' . urldecode($_GET['post_type']);
            
            else :
            
                //if post_type is not set, a 'post' is being created
                $classes .= ' single-post';
            
            endif;


        endif;
    
        return $classes;
    } 

    add_filter('admin_body_class', 'add_body_class_to_block_editor'); 
?>