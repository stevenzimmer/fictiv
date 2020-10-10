<?php 
// print_r( get_queried_object() );

include( get_template_directory() . '/inc/post-type-vars.php');

?>

<div class=" font-museo-500 text-14 text-grey-400 ">
    <a class="hover:text-grey-600" href="/resources/">Resource Center Home</a> &nbsp; / &nbsp;

    
    <?php 
        if ( is_search() || is_page() || is_archive() ) :
    ?>

    <span><?php echo $post_type_name; ?></span>
    <?php 

        else :
    ?>
    <a class="hover:text-grey-600" href="<?php echo get_post_type_archive_link( $post_type ); ?>">
        <?php echo $post_type_name; ?>
        
    </a>
    <?php
        endif;
    ?>
          
     &nbsp; 

    <?php

        if ( is_single() ) :
        
    ?>

    / &nbsp; <span><?php echo $post_title ?></span>

    <?php 
        endif;
    ?>
</div>
