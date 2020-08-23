<nav class="bg-white py-10 sub-menu absolute w-full z-50" data-menu="<?php echo $i; ?>">
	<div class="container">
		<div class="flex justify-center">
			<div class="lg:w-11/12">
				<div class="flex -mx-4">
						
					<?php 
						
						foreach ( $industries as $i => $industry ) :

					?>
					<div class="lg:w-4/12 px-4">
						<?php 
							cap_menu_item( 
								$industry['link'], 
								$industry['title'], 
								$industry['para'], 
								get_template_directory_uri() . '/assets/images/graphics/primary-nav-' . $industry['img'] . '-industries.jpg' 
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
</nav>