<div class="mobile-menu-dropdown h-0 overflow-hidden bg-white" data-dropdown="<?php echo $i; ?>">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12">
		
			<?php 

				foreach ( $industries as $i => $industry ) :

			?>
				<div class="mb-3 last:mb-0">
					<div class="border border-grey-200">
			<?php 
				cap_menu_item( 
					$industry['link'], 
					$industry['title'], 
					$industry['para'], 
					'' 
				); 
			?>
					</div>
				</div>
			
			<?php 
				endforeach;
			?>
							
					
			</div>
		</div>
	</div>
</div>