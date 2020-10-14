<?php 
$on_demand = get_field('webinar_on-demand', $has_parent);
$label_text = ( $on_demand ? 'On-demand' : 'upcoming' );
$form_header_text = ( $on_demand ? 'Watch the recording' : 'Register now' );
$hero_graphic = ( $has_parent ? get_the_post_thumbnail_url( $has_parent ) : get_the_post_thumbnail_url() );
$webinar_title = get_the_title( $has_parent );
$webinar_date = get_field('webinar_date', $has_parent);
$webinar_time = get_field('webinar_time', $has_parent);

$hero_graphic = ( $has_parent ? get_the_post_thumbnail_url( $has_parent ) : get_the_post_thumbnail_url() );

$post_title = ( $has_parent ? 'Thank you for downloading!' : get_the_title( $has_parent ) );
?>