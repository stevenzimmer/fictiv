<div class="mobile-menu-dropdown overflow-hidden bg-white h-0" data-dropdown="<?php echo $i; ?>">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12">
				<?php cap_menu_header('our digital manufacturing ecosystem'); ?>
				<div class="mb-6">
					 
				<?php 

					foreach ( $ecosystems as $i => $ecosystem ) :
						cap_menu_item( 
							$ecosystem['link'], 
							$ecosystem['title'], 
							$ecosystem['para'],
							''
						);
					
					endforeach;
				?>
				</div>
				<div class="">
				<?php
			
					cap_menu_header('features'); 

					foreach ( $features as $i => $feature ) :
				?>
				<div class="mb-3 last:mb-0">
				<?php
			
						cap_menu_item( 
							$feature['link'], 
							$feature['title'], 
							$feature['para'],
							''
						);
				?>
				</div>
				<?php
			
					endforeach;
				?>
				</div>
			</div>
		</div>
		
	</div>
</div>