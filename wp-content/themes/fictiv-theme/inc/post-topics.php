<?php 
$has_parent = wp_get_post_parent_id( get_the_id() );
// print_r( $parent );
$topics = get_the_terms( $has_parent, 'fictiv_topic' );
$topic_link = get_category_link( $topics[0]->term_id );
$topic_name = $topics[0]->name;
?>