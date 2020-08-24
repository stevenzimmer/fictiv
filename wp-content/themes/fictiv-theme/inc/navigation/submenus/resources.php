<nav class="bg-white py-10 sub-menu absolute w-full z-50 " data-menu="<?php echo $i; ?>">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12">
					<div class="flex -mx-4">
						<div class="full px-4">
							<div class="flex flex-wrap md:flex-no-wrap -mx-4">
					
								<div class="lg:w-1/3 px-4 ">

									<?php 
										cap_menu_header( $resource_center['header'] );
									?>
									<div class=" border-t border-grey-200 border-r border-l">
									<?php 
										cap_menu_item( 
											$resource_center['link'], 
											$resource_center['name'], 
											$resource_center['para'],
											$resource_center['icon'] 
										);
									?>
									</div>
							
							
									<div class="border-grey-200 border p-4">
										<div class="mb-2">
											<p class="text-12 font-museo-700 text-black">
												Content Categories
											</p>
										</div>
										<div class="flex flex-wrap">

									<?php 

										foreach ( $GLOBALS['resource_post_types']	 as $i => $resource ) :

									?>
											<a href="<?php echo get_post_type_archive_link( $resource ); ?>" class="md:w-1/2 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo get_post_type_object( $resource )->labels->name; ?></a>
												
									<?php 
										endforeach;

									?>
										</div>
									</div>	
								
								</div>

								<div class="lg:w-1/3 px-4 ">

									<?php 
										cap_menu_header( $help_center['header'] ); 
									?>
									<div class=" border-t border-grey-200 border-r border-l">
									<?php
										cap_menu_item( 
											$help_center['link'], 
											$help_center['name'], 
											$help_center['para'],
											$help_center['icon'] 
										);
									?>
									</div>
							
									<div class="border-grey-200 border p-4">
										<div class="mb-2">
											<p class="text-12 font-museo-700 text-black">
												Topics
											</p>
										</div>
										<div class="flex flex-wrap">

									<?php 

										foreach ( $help_center_topics as $i => $topic ) :		
						 
									?>
											<a href="<?php echo $topic['link']; ?>" class="md:w-1/2 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo $topic['name']; ?></a>
												
									<?php 
										endforeach;

									?>
										</div>
									</div>
								</div>
							
								<div class="lg:w-1/3 px-4 ">
									<?php 
										cap_menu_header( 'featured reads' );

										while ( $featured_reads->have_posts() ) :
									      	$featured_reads->the_post();
										
									
											$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0];

								
									?>
									<div class="mb-3 last:mb-0">
										<div class=" border border-grey-200 ">
									<?php
											cap_menu_item( 
												get_permalink(), 
												get_the_title(), 
												get_the_excerpt(), 
												$thumbnail
											);
									?>
										</div>
									</div>
									<?php

									     endwhile;
										// Reset Post Data
										wp_reset_postdata();
									
									
									?>
							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</nav>