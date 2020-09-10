<div class="mobile-menu-dropdown h-0 overflow-hidden bg-white" data-dropdown="<?php echo $i; ?>">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12">
			<?php 
					
				$i = 0;
				while ( $capabilities_menu->have_posts() ) :
					$capabilities_menu->the_post();

					include get_template_directory() . '/inc/navigation/vars/capabilities-children-processes.php';
					 
					if( !empty( $children_processes ) ) :
					
			?>
				<div class=" bg-white mb-3">
					<div class="border-l border-t border-r border-grey-200">
					<?php 
						cap_menu_item( 
							get_permalink(), 
							get_the_title(), 
							get_the_excerpt(), 
							''
						);
					?>
					</div>
					<?php
					
						if( !empty( $children_processes ) ) :
					?>
					<div class="p-4 border-grey-200 border">
						<div class="">
							<div class="mb-2">
								<p class="text-12 font-museo-700 text-grey-700">Processes Available</p>
							</div>
							<div class="flex-wrap flex -mx-6">
								<?php 

									foreach ( $children_processes as $j => $child ) :
									
								?>
								<a href="<?php echo get_permalink( $child->ID ) ?>" class="lg:w-1/2 px-6 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo $child->post_title ?></a>
								<?php 
									endforeach;
								?>
							</div>
						</div>

					</div>
					<?php 

						if ( $i === 0 ) :
						
					?>
					<div class="border-grey-200 border-l border-r border-b p-4">
						<div class="mb-2">
							<p class="text-12 font-museo-700 text-grey-700">
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
			<?php
			
				while ( $capabilities_menu->have_posts() ) :

					$capabilities_menu->the_post();

					include get_template_directory() . '/inc/navigation/vars/capabilities-children-processes.php';
			 
					if( empty( $children_processes ) ) :
			?>
					<div class="mb-3 last:mb-0">
						<div class="border border-grey-200">
			<?php

						cap_menu_item( 
							get_permalink(),
							get_the_title(),
							get_the_excerpt(), 
							''
						);
			?>
						</div>
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