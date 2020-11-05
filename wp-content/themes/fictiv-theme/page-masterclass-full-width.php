<?php 
/* Template Name: Masterclass Full width */
// Template Post Type: cpt_masterclass 
get_header();

while ( have_posts() ) :

    the_post();
	$parent_id = wp_get_post_parent_id( get_the_id() );

   	$masterclass_modules = get_children(array(
		'posts_per_page' => -1,
		'post_parent' => $parent_id,
		'post_status' => 'publish',
		'orderby'=>'menu_order', 
		'order' => 'ASC'
	));

	$module_ids = array();

	foreach ( $masterclass_modules as $i => $module ) :

		if( get_post_field( 'menu_order', $i ) ) :
		
			array_push( $module_ids, $i );

		endif;
	
	endforeach;

	$arr_length = count( $module_ids );

	$current_module = get_post_field( 'menu_order', get_the_id() );

	include( get_template_directory() . '/partials/masterclass/module-hero.php');

?>

<section class="py-10 lg:py-20">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 md:w-full lg:w-11/12">
				
				<div class="post-content">
					<?php 

						the_content();

					?>	
				</div>			
					
			</div>
		</div>
		
	</div>
</section>

<?php
	endwhile;
	get_footer();
?>