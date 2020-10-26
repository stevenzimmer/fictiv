<?php 
get_header();

while ( have_posts() ) :

    the_post();

    include( get_template_directory() . '/inc/post-topics.php');

    $masterclass_modules = get_children( array(
		'posts_per_page' => -1,
		'post_parent' => get_the_id(),
		'post_status' => 'publish',
		'orderby'=>'menu_order', 
		'order' => 'ASC'
	));

    $module_ids = array();

	foreach ( $masterclass_modules as $i => $module ) :
		
		array_push( $module_ids, $i );

	endforeach;

	$arr_length = count( $module_ids );
  
?>
<header class="relative py-20 bg-grey-100">
	<div class="container relative">
		<div class="flex justify-center">
	
			<div class="w-full lg:w-11/12 px-2">
				<div class="flex flex-wrap justify-center lg:justify-start -mx-4">

					<div class="w-11/12 lg:w-8/12 px-4 mb-6 lg:mb-0">
						<div class="mb-12 hidden md:block">
							<?php 
								get_template_part('partials/single', 'breadcrumbs');
							?>
						</div>
						<div class="mb-2">
							<p class="uppercase font-museo-700 text-black">
								<?php 

									echo get_post_type_object( get_queried_object()->post_type )->labels->singular_name;

								?>
							</p>
						</div>
						<div class="mb-4">
							<h1 class="text-56 text-black font-museo-700 leading-tight"><?php the_title(); ?></h1>
						</div>
						<?php 
							
							if ( get_field('hero_subparagraph') ) :
							
						?>
						<div class="mb-6">
							<h2 class="text-26">
								<?php  the_field('hero_subparagraph'); ?>
							</h2>
						</div>
						<?php 
							endif;
						?>
						<div class="flex flex-wrap -mx-4">
							<div class="px-4">
								<a href="<?php echo get_the_permalink( $module_ids[0] ); ?>" class="btn btn-dark">start class</a>
							</div>
							<div class="px-4">
								<a href="<?php echo get_the_permalink( $module_ids[ $arr_length - 1 ] ); ?>" class="btn btn-dark">take quiz</a>
							</div>
						</div>
						
					</div>
					
					<div class="w-full lg:w-4/12 px-4">


					</div>
				</div>
			</div> 
	
		</div>
	</div>
</header>

<section class="">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:px-2">
			
				<div class="border-b border-grey-200 py-20">
					<div class="post-content">
						
					
					<?php 
						the_content();
					?>

					</div>
					
				</div>

				<div class="py-20">
					<div class="flex flex-wrap justify-between">
						<div class="w-full lg:w-7/12">
							<?php 
								if ( have_rows('learning_takeaways') ) :
								
							?>
							<div class="mb-12">
								<h3 class="text-29 font-museo-700 text-black">Learning takeaways</h3>
							</div>
							<div class="flex flex-wrap -mx-6">
								<?php 
									
									$i = 1;
									while ( have_rows('learning_takeaways') ) :
										the_row();
									
								?>
								<div class="md:w-1/2 px-6 mb-12">
									<div>
										<p class="text-20 font-museo-500 text-black mb-4">
											Takeaway <?php echo $i; ?>
										</p>
										<p class="text-grey-600">
											<?php the_sub_field('ml_takeaway'); ?>
										</p>
									</div>
								</div>

								<?php 
								
									$i++;
									endwhile;

								?>
							</div>

							<?php 
								endif;
							?>
							
						</div>
						<div class="w-full lg:w-4/12">

							<?php 
								if ( have_rows('mc_audiences') ) :
								
							?>
							<div class="mb-12">
								<h3 class="text-29 font-museo-700 text-black">Audience</h3>
							</div>
					
							<?php 
								
								while ( have_rows('mc_audiences') ) :
									the_row();
									
							?>

							<div class="flex items-center mb-6 last:mb-0">
								<div class="w-12">
									<div class="w-8 h-8 bg-grey-300 rounded-full"></div>
								</div>
								<div class="w-full">
									<p class="font-museo-500 text-blue-dark"><?php the_sub_field('mc_audience'); ?></p>
								</div>
							</div>

							<?php 
								endwhile;

							endif;
							?>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>
</section>

<section class="py-20 bg-grey-100">
	<div class="container">
		<div class="text-center">
			<div class="mb-6">
				<h2 class="text-24 md:text-56 font-museo-700 text-black">Let's get started</h2>
			</div>
			<div class="flex justify-center">
		
				<div>
					<a href="<?php echo get_the_permalink( $module_ids[ 0 ] ); ?>" class="btn btn-dark">Start class</a>
				</div>
				<div class="w-8"></div>
			
				<div>
					<a href="<?php echo get_the_permalink( $module_ids[ $arr_length - 1 ] ); ?>" class="btn btn-dark">Take quiz</a>
				</div>
			</div>
			
		</div>
	</div>
</section>
<?php

	endwhile;
	wp_reset_postdata();
	get_footer();
?>