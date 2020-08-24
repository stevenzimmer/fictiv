<div class="mobile-menu-dropdown h-0 overflow-hidden bg-white" data-dropdown="<?php echo $i; ?>">
	<div class="container">
		<div class="flex justify-center">
			
			<div class="w-11/12">

				<div class="mb-3">
				<?php 
					cap_menu_header( $resource_center['header'] );
				?>
					<div class="border-l border-t border-r border-grey-200">
				<?php
					cap_menu_item( 
						$resource_center['link'], 
						$resource_center['name'], 
						$resource_center['para'],
						''
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

						foreach ( $GLOBALS['resource_post_types'] as $i => $resource ) :

					?>
							<a href="<?php echo get_post_type_archive_link( $resource ); ?>" class="w-1/2 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo get_post_type_object( $resource )->labels->name; ?></a>
								
					<?php 
						endforeach;

					?>
						</div>
					</div>	
				</div>
			

				<div class="mb-3">


				<?php 
					cap_menu_header( $help_center['header'] );
				?>
					<div class="border-l border-t border-r border-grey-200">
				<?php
					cap_menu_item( 
						$help_center['link'], 
						$help_center['name'], 
						$help_center['para'],
						''
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
							<a href="<?php echo $topic['link']; ?>" class="w-1/2 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo $topic['name']; ?></a>
								
					<?php 
						endforeach;

					?>
						</div>
					</div>
				</div>
		
				<div>
					
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
							'' 
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