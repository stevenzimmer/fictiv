<?php 
/* Template Name: Masterclass Module */
// Template Post Type: cpt_masterclass 
get_header();

while ( have_posts() ) :

    the_post();
    $parent_id = wp_get_post_parent_id( get_the_id() );

   	$masterclass_modules = get_children( array(
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

	$next_module = $current_module + 1;

	include( get_template_directory() . '/partials/masterclass/module-hero.php');
?>

<section class="py-10 lg:py-20">
	<div class="container ">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-full lg:w-11/12">
				
				<div class="flex flex-wrap mb-12 " id="module-container">
					<div class="w-full lg:w-3/12 mb-12 lg:mb-0">
					
					
						<?php 
							include( get_template_directory() . '/partials/masterclass/contents-sidebar.php');
						?>

						
					</div>
					<div class="w-full lg:w-9/12 lg:pl-12">
						<div class="mb-6 px-3 py-1 rounded-lg bg-grey-100 inline-block">
							<p class="uppercase font-museo-700 text-grey-600 text-12">
								module <?php echo get_post_field( 'menu_order', get_the_id() ); ?>
							</p>
						</div>
						
						<div class="post-content masterclass mb-12">
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

<section class="py-20 bg-blue-dark" id="module-footer">
	<div class="container">
		<?php 
			
			if ( $current_module < ( $arr_length - 1 ) && get_field('masterclass_module', $module_ids[ $next_module ] ) ) :
			
		?>

		<div class="text-center">
			<div class="mb-6">
				<h2 class="text-white text-24 md:text-56 font-museo-700">Onto the next module!</h2>
			</div>

			<div class="flex justify-center">
				
				<div>
					<a href="<?php echo get_the_permalink( $module_ids[ $next_module ] ); ?>" class="btn btn-primary">Next module</a>
				</div>

				<div class="w-8"></div>
				
				<div>
					<a href="<?php echo get_the_permalink( $module_ids[ $arr_length - 1 ] ); ?>" class="btn btn-primary">Take quiz</a>
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
						<h2 class="text-24 md:text-56 font-museo-700 text-white">Certification quiz</h2>
					</div>
					<div class="text-20 md:text-24 font-museo-500 mb-12 text-white">
						<?php 

							echo get_the_excerpt( $module_ids[ $arr_length - 1 ] );
						
						?>
					</div>
					
					<div class="flex justify-center">
					
						<div>
							<a href="<?php echo get_the_permalink( $module_ids[ $arr_length - 1 ] ); ?>" class="btn btn-primary">Take the certification quiz</a>
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
<section class="py-20">
	<div class="container">
	<?php 


		if ( !empty( get_field('related_resources', $parent_id ) ) ) :

		
	?>
		<div class="mb-6">
			<h2 class="font-museo-700 text-20 md:text-29">
				<?php 

					if ( get_field('related_resources_title', $parent_id ) ) :
						
						the_field('related_resources_title', $parent_id );
					else :

						echo 'Other Resources';

					endif;

				?>
				
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
</section>
<?php
	
	endwhile;
	wp_reset_postdata();
	get_footer();
	
?>