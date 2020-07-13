<?php 
// function rewrite_resource_permalinks( $post_link, $post ) {

// ///// This replaces the content type term for resource post type permalinks
//   // 
//  //     /%fictiv_content_type%/name-of-resource/
// /////
//     if ( is_object( $post ) && $post->post_type == 'cpt_resources' ) :

//         $content_types = wp_get_object_terms( $post->ID, 'fictiv_content_type' );


        
//         if( $content_types ) :

//             return str_replace( '%fictiv_content_type%' , $content_types[0]->slug , $post_link );
        
//         endif;

//     endif;

//     return $post_link;

// }

// add_filter( 'post_type_link', 'rewrite_resource_permalinks', 1, 2 );


// add_filter('post_type_link', 'rewrite_resource_permalinks', 10, 4);

// function rewrite_resource_permalinks($post_link, $post, $leavename, $sample) {

//     if ( is_object( $post ) && $post->post_type == 'cpt_resources' ) :
//     // if ( false !== strpos( $post_link, '%fictiv_content_type%') ) {
    
//         $projectscategory_type_term = wp_get_object_terms( $post->ID, 'fictiv_content_type');
    
//         if ( !empty($projectscategory_type_term) ) :

//              return str_replace( '%fictiv_content_type%' , $projectscategory_type_term[0]->slug , $post_link );
//             // $post_link = str_replace('%fictiv_content_type%', array_pop($projectscategory_type_term)->slug, $post_link);

//         else :

//             //$post_link = str_replace('%fictiv_content_type%', 'resources', $post_link);
//         	return str_replace( '%fictiv_content_type%' , 'resources', $post_link );
//         endif;

//     endif;

//     return $post_link;
// }

?>