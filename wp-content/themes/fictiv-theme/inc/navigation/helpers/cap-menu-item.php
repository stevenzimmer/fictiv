<?php	
	function cap_menu_item( $link, $title, $excerpt, $img ) {
?>
	<div class="bg-white">

		<div class=" relative">
			<a class="absolute w-full h-full inset-0 z-50" href="<?php echo $link; ?>"></a>
			<div class="flex items-center -mx-2">
				<?php 
					if ( $img ) :
					
				?>
				<div class="md:w-1/4 lg:w-4/12 px-2">
					<div class="relative h-0" style="padding-bottom: 80.25%">
					
						<img class="absolute inset-0 lazyload w-full h-full object-cover" data-src="<?php echo $img; ?>">
					</div>
				</div>
				
				<div class="w-full lg:w-8/12 py-2 px-4 md:py-0 md:px-2">
					<div class="flex items-center ">
						<div class="w-full ">
							<p class="text-14 font-museo-700 text-black"><?php echo $title; ?></p>
							<?php 

								if ( $excerpt ) :
									
							?>
							<div class="text-12 text-black mt-2 max-lines max-lines-2">
								<?php echo $excerpt; ?>		
							</div>
							<?php 
								endif;
							?>
						</div>
						<div class="md:px-2">
							<div class="flex justify-center">
								
								<?php 
									echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/cap-menu-arrow.svg');
								?>
								
							</div>
							
						</div>
						
					</div>
				</div>
				<?php 
					else :

				?>

				<div class="w-full px-2">
					<div class="px-4 py-2">
						<div class="">
							<p class=" text-14 font-museo-700 text-black"><?php echo $title; ?></p>
						</div>
						<?php 

							if ( $excerpt ) :
								
						?>
						<div class="text-12 text-black mt-2 max-lines max-lines-2">
							<?php echo $excerpt; ?>		
						</div>
						<?php 
							endif;
						?>
					</div>
					
				</div>
				<div class="px-2">
					<div class="flex justify-center px-2">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/cap-menu-arrow.svg');
						?>
					</div>
					
				</div>
				<?php 
					endif;
				?>
			</div>
		
		</div>
	</div>
<?php 
	}
?>