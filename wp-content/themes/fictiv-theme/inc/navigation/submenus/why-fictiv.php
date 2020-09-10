<nav class="bg-white py-10 sub-menu absolute w-full z-50 top-0 left-0 mt-16" data-menu="<?php echo $i; ?>">
	<div class="container">
		<div class="flex justify-center">
			<div class="lg:w-11/12">
				<div class="flex -mx-4">
					<div class="lg:w-8/12 px-4">
						<?php cap_menu_header('our digital manufacturing ecosystem'); ?>
				

						<div class="flex items-stretch">
							<div class="lg:w-6/12 border-l border-t border-b border-grey-200 flex">
								<div class="relative w-full" >
									<img class="lazyload" alt="our digital manufacturing ecosystem thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/our-digital-manufacuring-ecosystem.jpg">
								</div>
								
							</div>
							<div class="w-full lg:w-6/12 border border-grey-200">
								<?php 

									foreach ( $ecosystems as $i => $ecosystem ) :
								?>

								<div class="border-b border-grey-200 last:border-b-0 py-2">
								<?php
										cap_menu_item( 
											$ecosystem['link'], 
											$ecosystem['title'], 
											$ecosystem['para'],
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
			
					<div class="lg:w-4/12 px-4">
						<?php 
							cap_menu_header('features'); 

							foreach ( $features as $i => $feature ) :

						?>
						<div class="border border-grey-200 mb-3 last:mb-0">
						<?php
								cap_menu_item( 
									$feature['link'], 
									$feature['title'], 
									$feature['para'],
									get_template_directory_uri() . '/assets/images/graphics/primary-nav-why-fictiv-features-' . $feature['icon'] . '.png'
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
</nav>