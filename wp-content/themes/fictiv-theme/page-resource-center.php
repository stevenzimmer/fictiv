<?php /* Template Name: Resource Center */ ?>
<?php 
	get_header();
	$args = array(
    	'bg' => get_the_post_thumbnail_url(),
    	'label' => 'DIGITAL MANUFACTURING RESOURCE CENTER',
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
					<div class="w-full lg:w-9/12 lg:pl-12">
						
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
						<div class="mb-6">
							<div class="mb-2">
								<p class=" font-museo-700 text-grey-400 uppercase">read the latest</p>
							</div>
							<div class="-mx-1 relative resource-carousel-wrapper">
								
								<div class="resources-latest-carousel">
									<?php
										while ( $latest_reads->have_posts() ) :
										      	$latest_reads->the_post();

									?>
									<div class="px-1 h-full">
							
									<?php 

										fictiv_post_card( get_the_id() );
									
									?>

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
						<div class="mb-6">
							
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
							<div class="-mx-1 relative resource-carousel-wrapper">
									
								<div class="resources-carousel" >
							<?php 
									
									while ( $resources->have_posts() ) :
										$resources->the_post();
										

							?>
							
									<div class="max-w-md md:max-w-sm px-1">
										
							
									<?php 

										fictiv_post_card( get_the_id() );
									
									?>

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
											the_field('ad_download_title');
										?>
									</h3>
									<p class="text-white font-museo-500">
										<?php 
											the_field('ad_download_paragraph');
										?>
									</p>
								</div>
								<div class="w-full lg:w-4/12">
									 <a href="<?php 
											echo get_field('ad_download_link')['url'];
										?>" class="btn btn-primary"><?php 
											echo get_field('ad_download_link')['title'];
										?></a>
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