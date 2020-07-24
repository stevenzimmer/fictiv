<?php 
// print_r( get_queried_object() );

include( get_template_directory() . '/inc/post-type-vars.php');


?>

<div class=" font-museo-500 text-14 text-grey-300 ">
    <a class="hover:text-grey-600" href="#">Home</a> / <a class="hover:text-grey-600" href="<?php echo get_post_type_archive_link( $post_type ); ?>"><?php 
        echo $post_type_name;
    ?></a>

</div>
