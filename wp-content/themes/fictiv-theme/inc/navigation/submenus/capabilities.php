<nav class="bg-white py-10 sub-menu absolute w-full z-50" data-menu="<?php echo $i; ?>">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12">
				<div class="flex -mx-4">
					<div class="full px-4">
						<div class="flex flex-wrap md:flex-no-wrap -mx-4">
					
						<?php 
						
							$i = 0;
							while ( $capabilities_menu->have_posts() ) :
								$capabilities_menu->the_post();

								$children_processes = get_children( array(
									'post_type' => array('page'),
									'post_parent' => get_the_id() 
								));
								 
								if( !empty( $children_processes ) ) :

									$thumbnail = get_field('material_thumbnail')['sizes']['thumbnail'];
								
						?>
							<div class="lg:w-1/3 px-4 ">

									<div class=" border-t border-t border-grey-200 border-r">
									<?php 

										cap_menu_item( 
											get_permalink(),
											get_the_title(), 
											get_the_excerpt(), 
											$thumbnail
										);
									?>
									</div>
								
									<?php 

										if( !empty( $children_processes ) ) :

									?>
									<div class="p-4 border-grey-200 border">
										<div class="">
											<div class="mb-2">
												<p class="text-12 font-museo-700 text-black">Processes Available</p>
											</div>
											<div class=" flex-wrap flex -mx-6">
												<?php 
												

													foreach ( $children_processes as $j => $child_process ) :
													
												?>
												<a href="<?php echo get_permalink( $child_process->ID ) ?>" class="lg:w-1/2 px-6 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo $child_process->post_title ?></a>
												<?php 
													endforeach;
													wp_reset_postdata();
												?>
											</div>
										</div>

									</div>
									<?php 
										if ( $i === 0 ) :
								
										
									?>
									<div class="border-grey-200 border-l border-r border-b p-4">
										<div class="mb-2">
											<p class="text-12 font-museo-700 text-black">
												Finishing Options
											</p>
										</div>
										<div class="flex flex-wrap -mx-6">

									<?php 


										while ( $finishes_menu->have_posts() ) :
											$finishes_menu->the_post();
											
									?>
											<a href="<?php the_permalink(); ?>" class="md:w-1/2 px-6 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php the_title() ?></a>
												
									<?php 
										endwhile;
										wp_reset_postdata();
									?>
										</div>
									</div>	
								

									<?php 
											endif;
										endif;
									?>
								</div>
						
						<?php

							endif;
							$i++;
							endwhile;
							wp_reset_postdata();
	
						?>
							<div class="lg:w-1/3 px-4 ">
								<?php 
									while ( $capabilities_menu->have_posts() ) :
										$capabilities_menu->the_post();

										$children_processes = get_children( array( 'post_parent' => get_the_id() ) );

										if( empty( $children_processes ) ) :

											$thumbnail = get_field('material_thumbnail')['sizes']['thumbnail'];
								?>
								<div class="mb-3 last:mb-0 border border-grey-200">

								<?php 
										cap_menu_item( 
											get_permalink(), 
											get_the_title(), 
											get_the_excerpt(), 
											$thumbnail
										);
								
								?>
								</div>
								<?php
										endif;
									endwhile;
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