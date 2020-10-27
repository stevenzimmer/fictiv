<?php 
/* Template Name: Masterclass Module */
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
	<div class="container ">
		
		<div class="flex justify-center">
			<div class="w-11/12 md:w-full lg:w-10/12">
				
				<div class="flex flex-wrap mb-12 flex-col-reverse lg:flex-row items-center lg:items-start lg:justify-start">
					<div class="w-full lg:w-3/12 hidden lg:block ">

						<?php 
							include( get_template_directory() . '/partials/masterclass/contents-sidebar.php');
						?>
						
					</div>
					<div class="w-full lg:w-9/12 lg:pl-12">
						<div class="mb-6">
							<p class="uppercase font-museo-500 text-grey-600">
								module <?php echo get_post_field( 'menu_order', get_the_id() ); ?>
							</p>
						</div>
						<div class="flex flex-wrap mb-12 -mx-2">
							<div class="w-full lg:w-4/12 px-2 mb-6 lg:mb-0">
								<h2 class="font-museo-700 leading-tight">
									<?php the_title(); ?>
								</h2>
							</div>
							<div class="w-full lg:w-8/12 px-2">

								<div>
									<?php the_excerpt(); ?>
								</div>
								
							</div>
						</div>
						<div class="post-content mb-12">
							<?php 

								the_content();

							?>	
						</div>
						<div>
						<?php 


							if ( !empty( get_field('related_resources', $parent_id ) ) ) :

							
						?>

							<div class="mb-6">
								<h2 class="font-museo-700 text-20 md:text-29">
									Other Resources
								</h2>
							</div>
							<div class="flex flex-wrap -mx-2">
								<?php 

									foreach (  get_field('related_resources', $parent_id ) as $i => $related_id ) :


								?>
								<div class="w-full md:w-1/3 px-2 mb-6 md:mb-0 ">
									
									<?php 
										fictiv_post_card( $related_id ); 
									?>
									
								</div>
								<?php 

									endforeach;

								?>
							</div>
							
						<?php 
							endif;
						?>

						</div>
			
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<section class="py-20 bg-grey-100" id="module-footer">
	<div class="container">
		<?php 
			
			if ( $current_module < ( $arr_length - 1 ) ) :
			
		?>
		<div class="text-center">
			<div class="mb-6">
				<h2 class="text-24 md:text-56 font-museo-700">Onto the next module!</h2>
			</div>

			<div class="flex justify-center">
				
				<div>
					<a href="<?php echo get_the_permalink( $module_ids[ $current_module ] ); ?>" class="btn btn-dark">Start class</a>
				</div>
				<div class="w-8"></div>
			
				
			
				<div>
					<a href="<?php echo get_the_permalink( $module_ids[ $arr_length - 1 ] ); ?>" class="btn btn-dark">Take quiz</a>
				</div>
			</div>
			
		</div>

		<?php 
			else :
		?>

		<div class="flex justify-center">
			<div class="lg:w-9/12">
				<div class="text-center">
					<div class="mb-6">
						<h2 class="text-24 md:text-56 font-museo-700">Certification quiz</h2>
					</div>
					<div class="text-20 md:text-24 font-museo-500 mb-12">
						<?php 

							echo get_the_excerpt( $module_ids[ $arr_length - 1 ] );
						
						?>
					</div>
					
					<div class="flex justify-center">
					
						<div>
							<a href="<?php echo get_the_permalink( $module_ids[ $arr_length - 1 ] ); ?>" class="btn btn-dark">Take the assessment quiz</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<?php 
			endif;
		?>
	</div>	
</section>

<?php
	
	endwhile;
	wp_reset_postdata();
	get_footer();
	
?>