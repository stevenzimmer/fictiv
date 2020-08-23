<div class="mobile-menu-dropdown h-0 overflow-hidden bg-white" data-dropdown="<?php echo $i; ?>">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-full">
			<?php 
					
				$i = 0;
				while ( $cap_menu->have_posts() ) :
					$cap_menu->the_post();

					$children = get_children( array( 'post_parent' => get_the_id() ) );
					 
					if( !empty( $children ) ) :
					
			?>
				<div class=" bg-white mb-3">

					<?php 
						cap_menu_item( 
							get_permalink(), 
							get_the_title(), 
							get_the_excerpt(), 
							''
						);
					
						if( !empty( $children ) ) :
					?>
					<div class="p-4 border-grey-200 border">
						<div class="">
							<div class="mb-2">
								<p class="text-12 font-museo-700 text-black">Processes Available</p>
							</div>
							<div class="flex-wrap flex -mx-6">
								<?php 

									foreach ( $children as $j => $child ) :
									
								?>
								<a href="<?php echo  get_permalink( $child->ID ) ?>" class="lg:w-1/2 px-6 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo $child->post_title ?></a>
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
							<p class="text-12 font-museo-700 text-black">
								Finishing Options
							</p>
						</div>
						<div class="flex flex-wrap -mx-6">

					<?php 

						while ( $finish_menu->have_posts() ) :
							$finish_menu->the_post();
							
					?>
							<a href="<?php the_excerpt(); ?>" class="md:w-1/2 px-6 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php the_title() ?></a>
								
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
			
				while ( $cap_menu->have_posts() ) :

					$cap_menu->the_post();

					$children = get_children( array( 'post_parent' => get_the_id() ) );

			 
					if( empty( $children ) ) :
			?>
					<div class="mb-3 last:mb-0">
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
					endif;
			
				endwhile;
				wp_reset_postdata();
			?>

			</div>
		</div>
	</div>
</div>