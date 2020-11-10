<div class="max-w-full w-full h-full masterclass-sidebar" id="masterclass-contents">
	<div class="masterclass-sidebar-inner">
		
		<div class="pb-6 border-b border-grey-200">
			<p class="uppercase font-museo-500 text-grey-600">
				masterclass contents
			</p>
		</div>

		<div>
			<div class="py-4 border-b border-grey-200 relative text-grey-600 hover:text-teal-light">
				<a class="absolute w-full h-full inset-0 z-30 block" href="<?php echo get_the_permalink( $parent_id ); ?>"></a>
				<p class=" font-museo-500">
					Course Overview
				</p>
			</div>
			<?php 

				$j = 1;

				foreach ( $module_ids as $i => $id ) :

					if( get_post_field( 'menu_order', $id ) ) :
			?>
			<div class="py-2 border-b border-grey-200 font-museo-500 hover:text-teal-light relative cursor-pointer <?php 

				if( $id === get_the_id() ) :

					echo 'text-teal-light';

				else :

					echo 'text-grey-600';

				endif;
			
			?>">

				<?php 

					if( $id !== get_the_id() ) : 
				
				?>

				<a class="absolute w-full h-full inset-0 z-30 block" href="<?php echo get_the_permalink( $id ); ?>"></a>

				<?php 
					endif; 
				?>
				<div class="py-2 masterclass-content-item <?php 

					if( $id === get_the_id() ) :

						echo 'active';

					endif;
				
				?>">
				
					<div class="flex items-center justify-between -mx-1">
						<?php
							if ( $j !== $arr_length ) :

						?>
						<div class="px-1">
							<?php 

								if ( get_field('masterclass_module', $id ) ) :
								
							?>
							<p class="text-12 uppercase font-museo-700 mb-1">Module <?php echo get_post_field( 'menu_order', $id ); ?></p>
							<?php 
								endif;
							?>

							<p class="">
							<?php	
									
								echo get_the_title( $id );
							
							?>
							</p>
									
						</div>
						<div class="px-2 transform transition-transform duration-200 caret origin-center <?php 

							if( $id === get_the_id() ) : 
						
								echo 'active';
						
							endif; 
						
						?>">
							<p>&#9656;</p>
						</div>
						<?php 

							else :
						?>
						<div class="px-1 ">
						<?php

							echo get_the_title( $id );
						
						?>
						</div>
						<div class="px-1">
							<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0)">
									<path d="M5.18452 17.5425L0.699523 25.2262C0.527023 25.5237 0.664523 25.72 1.00327 25.6625L5.20077 24.9512L6.65577 28.9512C6.77327 29.2737 7.01327 29.2975 7.18952 29.0012L11.0208 22.5662" stroke="#76787A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M24.8148 17.5425L29.2998 25.2262C29.4723 25.5237 29.3348 25.72 28.996 25.6625L24.7985 24.9512L23.3435 28.9512C23.226 29.2737 22.986 29.2975 22.8098 29.0012L18.9785 22.5662" stroke="#76787A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M15 23.29C21.2132 23.29 26.25 18.2532 26.25 12.04C26.25 5.82679 21.2132 0.789993 15 0.789993C8.7868 0.789993 3.75 5.82679 3.75 12.04C3.75 18.2532 8.7868 23.29 15 23.29Z" stroke="#76787A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M19.9251 8.9525L14.0251 14.8525C13.938 14.9396 13.8346 15.0087 13.7209 15.0559C13.6071 15.103 13.4851 15.1273 13.362 15.1273C13.2388 15.1273 13.1168 15.103 13.003 15.0559C12.8893 15.0087 12.7859 14.9396 12.6988 14.8525L10.5488 12.7025" stroke="#76787A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0">
										<rect width="30" height="30" fill="white"/>
									</clipPath>
								</defs>
							</svg>
						</div>

						<?php
						
							endif;
						
						?>
					</div>
					
				</div>

				<?php 

					if( $id === get_the_id() ) : 

						if ( $j !== count( $module_ids ) ) :
				
				?>

				<div id="contents-list" class="contents-list bg-grey-100 h-0 overflow-hidden active"></div>
				
				<?php 
				
						endif;
				
					endif;
				
				?>
			</div>
			<?php
				endif;
				$j++;

				endforeach;
			?>
		</div>
	</div>
</div>