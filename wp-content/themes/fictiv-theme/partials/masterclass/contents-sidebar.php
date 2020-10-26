<div class="max-w-full w-full overflow-scroll masterclass-sidebar" id="masterclass-contents">
	<div class="masterclass-sidebar-inner">
		
	
		<div class="pb-6 border-b border-grey-200">
			<p class="uppercase font-museo-500 text-grey-600">
				masterclass contents
			</p>
		</div>

		<div>
			<div class="py-6 border-b border-grey-200 relative text-grey-600 hover:text-black">
				<a class="absolute w-full h-full inset-0 z-30 block" href="<?php echo get_the_permalink( $parent_id ); ?>"></a>
				<p class=" font-museo-500">
					Introduction
				
				</p>
			</div>
			<?php 

				$j = 1;
				foreach ( $masterclass_modules as $i => $module ) :

			?>
			<div class="py-6 border-b border-grey-200 font-museo-500 hover:text-black relative  <?php 
				if( $i === get_the_id() ) :

					echo 'text-black';

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
				<div>
				
				<?php
						if ( $j !== $arr_length ) :
						
						
							echo "Module " . get_post_field( 'menu_order', $i ) . ' - ' . get_the_title( $i );

						else :

							echo get_the_title( $i );

						endif;
				?>

				</div>

				<?php 

					if( $i === get_the_id() ) : 

						if ( $j !== count( $masterclass_modules ) ) :
				
				?>
				<div id="contents-list" class="pl-8 mt-4 contents-list"></div>
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