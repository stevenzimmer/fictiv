<?php /* Template Name: Resource Center */ ?>
<?php 
	get_header();
	$args = array(
    	'bg' => get_the_post_thumbnail_url(),
    	'label' => 'resource center',
    	'title' => get_the_title(),
    	'post_type' => get_queried_object()->post_type
    );

    hero_section( $args );
?>
<section class="section">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-full px-5 lg:px-0 lg:w-10/12">
				
				
				<div class="flex flex-wrap mb-12 flex-col-reverse lg:flex-row items-center lg:items-start lg:justify-start">
					<div class="hidden lg:block lg:w-3/12">
						<?php 
							get_sidebar();
						?>
						
					</div>
					<div class="w-full lg:w-9/12 lg:pl-6">
						
						<?php 
							$latest_args = array(
								'post_type' => $GLOBALS['resource_post_types'],
								'posts_per_page' => 6,
								'post_parent' => 0,
								'meta_query' => array(
							        array(
							            'key' => '_thumbnail_id',
							            'compare' => 'EXISTS'
							        ),
							    )
							);

							$latest_reads = new WP_Query( $latest_args );
						?>
						<div class="mb-2">
							<div class="mb-2">
								<p class=" font-museo-700 text-grey-400 uppercase">read the latest</p>
							</div>
							<div class="-mx-1 relative resource-carousel-wrapper">
								
								<div class="resources-latest-carousel">
									<?php
										while ( $latest_reads->have_posts() ) :
										      	$latest_reads->the_post();

												$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0];
									
										?>
									<div class="px-1">
										<div class="border border-grey-200 relative h-full">
											<a href="<?php echo get_the_permalink(); ?>" class="w-full h-full absolute inset-0 z-30"></a>
											<div class="relative h-0 thumbnail-ratio" >
												<img title="<?php echo get_the_title(); ?>" class="lazyload absolute inset-0 w-full h-full object-cover" data-src="<?php echo $thumbnail; ?>">
											</div>
											<div class="p-4 relative">
												<div class="mb-1">
													<p class="text-grey-600 text-12 font-museo-700 uppercase"><?php 
														echo get_post_type_object( get_post_type() )->labels->name ;
													?></p>
												</div>
												<div class="h-16">
													<h2 class="text-16 font-museo-700 text-grey-700 max-lines max-lines-2"><?php 
														echo get_the_title();

													?></h2>
												</div>

												<div class="absolute right-0 bottom-0 p-4">
													<div>
														<?php 
															echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/cta-arrow.svg');
														?>
													</div>
												</div>
											</div>
											
										</div>

									</div>
										<?php

										     endwhile;
											wp_reset_postdata();
										
										?>
								</div>
								<div class="absolute right-0 top-0 h-full w-8 bg-white opacity-50 hover:opacity-75 duration-200 ease-in-out transition-color resource-carousel-right">
										<div class="flex w-full h-full justify-center items-center">
											<div>
												<?php 
													echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/resource-carousel-right.svg');
												?>
											</div>
										</div>
									</div>

									<div class="absolute left-0 top-0 h-full w-8 bg-white opacity-50 hover:opacity-75 duration-200 ease-in-out transition-color resource-carousel-left hidden">
										<div class="flex w-full h-full justify-center items-center">
											<div class="transform rotate-180">
												<?php 
													echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/resource-carousel-right.svg');
												?>
											</div>
										</div>
									</div>
								</div>
						</div>
						<?php

							foreach ( $GLOBALS['resource_post_types'] as $i => $type ) :

								$resource_args = array(
									'posts_per_page' => 6,
								    'post_type' => array( $type ),
								    'post_parent' => 0
								);

								$resources = new WP_Query( $resource_args );

								$count = $resources->post_count;
										
								if ( $resources->have_posts() ) : 
	    
						?>
						<div class="mb-2">
							
							<div class="mb-2">
								<div>
									<p class=" font-museo-700 text-grey-400 uppercase">
										<?php 
											echo get_post_type_object( $type )->labels->name;
										?>
										&nbsp;&nbsp;
										<a href="<?php echo get_post_type_archive_link( $type ); ?>" class="text-teal-light text-12 font-museo-500">See More</a>
									</p>
								</div>
							</div>
							<div class=" -mx-1 relative resource-carousel-wrapper">
									
								<div class="resources-carousel" >
							<?php 
									
									while ( $resources->have_posts() ) :
										$resources->the_post();
										
										include( get_template_directory() . '/inc/post-topics.php');

							?>
							
									<div class="max-w-md md:max-w-sm px-1">
										<div class="border border-grey-200 relative h-full">
											<a href="<?php the_permalink(); ?>" class="w-full h-full absolute inset-0 z-50"></a>
											<div class="relative h-0 thumbnail-ratio" >
												<?php 
													if( has_post_thumbnail() ) :
												?>
												<img title="<?php echo get_the_title(); ?>" class="lazyload absolute inset-0 w-full h-full object-cover" data-src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0]; ?>">

												<?php 
													else :
												?>
												<div class="bg-grey-100 absolute inset-0 w-full h-full flex items-center justify-center">
													<div>
														<p>Upload hero image to this post</p>
													</div>
												</div>
												<?php
													endif;
												?>
											</div>
											<div class="p-2 relative">
										
												<div class="h-20 mb-8">
													<h2 class="text-16 font-museo-700 text-default max-lines max-lines-3"><?php 
														echo get_the_title();

													?></h2>
												</div>
										
												

												<div class="absolute right-0 bottom-0 p-4">
												
													<div>
														<?php 
															echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/cta-arrow.svg');
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
							
							<?php 
										endwhile;
										wp_reset_postdata();
							?>
									
								</div>

							<?php 
								if ( $count > 3 ) : 
							?>
									
								
								<div class="absolute right-0 top-0 h-full w-8 bg-white opacity-50 hover:opacity-75 duration-200 ease-in-out transition-color resource-carousel-right">
									<div class="flex w-full h-full justify-center items-center">
										<div>
											<?php 
												echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/resource-carousel-right.svg');
											?>
										</div>
									</div>
								</div>

								<div class="absolute left-0 top-0 h-full w-8 bg-white opacity-50 hover:opacity-75 duration-200 ease-in-out transition-color resource-carousel-left hidden">
									<div class="flex w-full h-full justify-center items-center">
										<div class="transform rotate-180">
											<?php 
												echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/resource-carousel-right.svg');
											?>
										</div>
									</div>
								</div>
							<?php 
								endif; 
							?>
							
							</div>
						</div>	
						<?php

							endif;
							if ( $i === 0 && get_field('resources_home_form_title') ) :
						?>
						<div class="bg-blue-dark p-8 mb-6 ">
							<div class="flex flex-wrap justify-between items-center">
								<div class="w-full lg:w-7/12">
									<h3 class="text-white font-museo-500 text-16 mb-2">
										<?php 
											the_field('resources_home_form_title');
										?>
									</h3>
									<p class="text-white font-museo-500">
										<?php 
											the_field('resources_home_form_paragraph');
										?>
									</p>
								</div>
								<div class="w-full lg:w-4/12">
									<form data-form-type="mkto-redirect" class="mktoForm global" data-formId="<?php the_field('resources_home_form_marketo_id'); ?>"></form>
								</div>
							</div>
							
						</div>
						<?php
							endif;

							endforeach;
						?>
					
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php 
	get_footer();
?>