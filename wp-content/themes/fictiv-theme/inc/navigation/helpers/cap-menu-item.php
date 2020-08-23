<?php	
	function cap_menu_item( $link, $title, $excerpt, $img ) {
?>
	<div class="border border-grey-200 border-b-0 last:border-b bg-white">

		<div class=" relative">
			<a class="absolute w-full h-full inset-0" href="<?php echo $link; ?>"></a>
			<div class="flex items-center -mx-2">
				<?php 
					if ( $img ) :
					
				?>
				<div class="md:w-1/4 lg:w-4/12 px-2">
					<div class="">
					
						<img class="lazyload w-full h-full object-cover" data-src="<?php echo $img; ?>">
					</div>
				</div>
				
				<div class="w-full lg:w-8/12 py-2 px-4 md:py-0 md:px-2">
					<div class="flex items-center ">
						<div class="w-full ">
							<p class="mb-2 text-14 font-museo-700 text-black"><?php echo $title; ?></p>
							<div class="text-12 text-black"><?php echo $excerpt; ?></div>
						</div>
						<div class="md:px-2">
							<div class="flex justify-center">
								
								<p>
				                    &#9656;
				                </p>
								
							</div>
							
						</div>
						
					</div>
				</div>
				<?php 
					else :

				?>

				<div class="w-full px-2">
					<div class="p-2">
						<div class="mb-2">
							<p class=" text-14 font-museo-700 text-black"><?php echo $title; ?></p>
						</div>
						
						<div class="text-12 text-black">
							<?php echo $excerpt; ?>		
						</div>
					</div>
					
				</div>
				<div class="px-2">
					<div class="flex justify-center px-2">
						<div>
							<p>
			                    &#9656;
			                </p>
						</div>
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