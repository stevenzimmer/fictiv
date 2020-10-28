<div class="max-w-full w-full overflow-scroll masterclass-sidebar" id="masterclass-contents">
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
					Introduction
				
				</p>
			</div>
			<?php 

				$j = 1;
				foreach ( $masterclass_modules as $i => $module ) :

			?>
			<div class="py-2 border-b border-grey-200 font-museo-500 hover:text-teal-light relative <?php 
				if( $i === get_the_id() ) :

					echo 'text-teal-light';

				else :

					echo 'text-grey-600';

				endif;
			?>">

				<?php 

					if( $i !== get_the_id() ) : 
				
				?>

				<a class="absolute w-full h-full inset-0 z-30 block" href="<?php echo get_the_permalink( $i ); ?>"></a>

				<?php 
					endif; 
				?>
				<div class="py-2">
				
					<?php
						if ( $j !== $arr_length ) :
					?>
					<div class="flex items-center justify-between">
						<div>
							<p class="text-12 uppercase font-museo-500">Module <?php echo get_post_field( 'menu_order', $i ); ?></p>
							<p class="mb-2">
							<?php	
									
								echo get_the_title( $i );
							
							?>
							</p>
									
						</div>
						<div class="<?php 
							if( $i === get_the_id() ) :

								echo 'transform rotate-90';

							endif;
						?>">
							<p>&#9656;</p>
						</div>
					</div>

					<?php 

						else :

							echo get_the_title( $i );

								
							
						endif;
					?>
					

				</div>

				<?php 

					if( $i === get_the_id() ) : 

						if ( $j !== count( $masterclass_modules ) ) :
				
				?>
				<div id="contents-list" class="pl-6 py-4 contents-list bg-grey-100"></div>
				<?php 
						endif;
					endif;
				?>
			</div>
			<?php
				$j++;
				endforeach;
			?>
		</div>
	</div>
</div>