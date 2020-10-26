<?php 
/* Template Name: Masterclass Quiz */
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
		
		array_push( $module_ids, $i );

	endforeach;

	$arr_length = count( $module_ids );

	$current_module = get_post_field( 'menu_order', get_the_id() );

	include( get_template_directory() . '/partials/masterclass/module-hero.php');
?>

<section class="py-20">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-full px-5 lg:px-0 lg:w-10/12">
				
				<div class="flex flex-wrap mb-12 flex-col-reverse lg:flex-row items-center lg:items-start lg:justify-start">
					<div class="w-11/12 lg:w-3/12 ">

						<?php 
							include( get_template_directory() . '/partials/masterclass/contents-sidebar.php');
						?>
						
					</div>
					<div class="w-full lg:w-9/12 lg:pl-12">
				
						<div class="post-content mb-12">
							<?php 

								the_content();

							?>	
						</div>			
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php
endwhile;

get_footer();

?>