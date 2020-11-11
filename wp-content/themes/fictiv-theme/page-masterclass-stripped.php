<?php 
/* Template Name: Masterclass Stripped */
// Template Post Type: cpt_masterclass

// Template used for masterclass child pages that are non-modules

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

<section class="py-10 lg:py-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-full lg:w-11/12">
				
				<div class="flex flex-wrap mb-12 " id="module-container">
					<div class="w-full lg:w-3/12 mb-12 lg:mb-0">

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
						<div class="flex justify-start lg:justify-end">
							<div class="w-full lg:w-1/2 flex items-center w-full lg:justify-end">
								<div>
									<p class="font-museo-500 text-grey-700 text-14">Share on social:</p>
								</div>
								<div class="w-6"></div>
								<?php 
									get_template_part('partials/social', 'post');
								?>
							</div>
							
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