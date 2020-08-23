<?php 
	// Nav Variables/arrays
	include get_template_directory() . '/inc/navigation/vars/main-menu-items.php';
	include get_template_directory() . '/inc/navigation/vars/cap-menu-items.php';
	include get_template_directory() . '/inc/navigation/vars/finish-menu-items.php';
	include get_template_directory() . '/inc/navigation/vars/resources-menu-items.php';
	include get_template_directory() . '/inc/navigation/vars/industries-menu-items.php';
	include get_template_directory() . '/inc/navigation/vars/ecosystems-menu-items.php';

	include get_template_directory() . '/inc/navigation/vars/features-menu-items.php';
	include get_template_directory() . '/inc/navigation/vars/processes-terms.php';

	include get_template_directory() . '/inc/navigation/vars/main-menu-ctas.php';

	// Nav helper functions
	include get_template_directory() . '/inc/navigation/helpers/cap-menu-item.php';
	include get_template_directory() . '/inc/navigation/helpers/cap-menu-header.php';

?>
<nav class="relative w-full h-12 lg:h-18 flex items-center z-50 bg-white border-b border-grey-200">
	
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 xl:w-full">
				<div class="flex items-center">
					<div class="flex items-center w-full">
						<div class="w-24">
							<a href="<?php echo home_url() ?>">
								<?php 
									echo file_get_contents( get_template_directory_uri() . '/assets/images/logos/fictiv-teal.svg');
								?>
							</a>
						</div>
						<?php 
							if( !wp_is_mobile() ) :
						?>
						<div class="w-3/5">
							<ul class="flex justify-around items-center ">
								<?php 

									foreach ( $main_menu_items as $i => $item ) :
									
								?>
								<li>
									<a class="font-museo-700 select-none cursor-pointer primary-menu-item text-black hover:text-teal-light flex items-center lg:text-14 xl:text-16" href="#" data-menu="<?php echo $i; ?>">
										<?php echo $item; ?>
										&nbsp;
										<?php 
											echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/primary-nav-arrow-down.svg');
										?>
									</a>
								</li>

								<?php 
									endforeach;
								?>

							</ul>
						</div>
						<div class="w-1/5 px-6">
							<ul class="flex justify-between items-center  font-museo-700 text-black">
								<li>
									<a href="<?php echo $demo['link']; ?>" class="primary-menu-item text-black hover:text-teal-light lg:text-14 xl:text-16">
										<?php echo $demo['name']; ?>
									</a>
								</li>
								<li>
									<a class="primary-menu-item text-black hover:text-teal-light lg:text-14 xl:text-16" href="<?php echo $log_in['link']; ?>">
										<?php echo $log_in['name']; ?>
									</a>
								</li>
							</ul>
						</div>
						<div class="">
							<?php 
								primary_button();
							?>
						</div>
						<?php 
							endif;
						?>
					</div>
					
					<?php 
						if( wp_is_mobile() ) :
					?>
					<div class="">

						<div class="mobile-toggle cursor-pointer relative w-10 h-8 " id="mobile-toggle">
				            <span class="sr-only">Toggle Navigation</span>
				            <span class="nav-bar"></span>
				        </div>
					
					</div>
					<?php 
						endif;
					?>
				</div>
			</div>
		</div>
	</div>
</nav>

<?php
	if ( wp_is_mobile() ) :
	/* Display and echo mobile specific stuff here */
?>

<div class="bg-white absolute w-full z-50 mobile-menu" id="mobile-menu">
	<?php 

		foreach ( $main_menu_items as $i => $item ) :
		
	?>

	<div class="border-b border-grey-200">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12 ">
					<a class="select-none cursor-pointer mobile-menu-item text-black flex items-center text-14 font-museo-700 py-3" href="#" data-menu="<?php echo $i; ?>">
						<?php echo $item; ?>
						&nbsp;
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/primary-nav-arrow-down.svg');
						?>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<?php 
			// Mobile dropdowns
			include get_template_directory() . '/inc/navigation/mobile/dropdowns/' . str_replace(' ', '-', strtolower( $item )) . '.php';
		
		endforeach;
	?>

	<div class="border-b border-grey-200">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12 ">
					<a class=" mobile-menu-item text-black block text-14 font-museo-700 py-3" href="<?php echo $demo['link']; ?>" >
						<?php echo $demo['name']; ?>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="border-b border-grey-200">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12">
					<a class="mobile-menu-item text-black text-14 block font-museo-700 py-3" href="<?php echo $log_in['link']; ?>" >
						<?php echo $log_in['name']; ?>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="border-b border-grey-200 py-2">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12">
					<a class=" mobile-menu-item text-14 font-museo-700 py-2 bg-teal-light text-white uppercase btn w-full" href="<?php echo $quote['link']; ?>" >
						<?php echo $quote['name']; ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	else : 
	/* Display and echo desktop stuff here */


		foreach ( $main_menu_items as $i => $item ) :
			
			include get_template_directory() . '/inc/navigation/submenus/' . str_replace(' ', '-', strtolower( $item )) . '.php';

		endforeach;

	endif; 
?>
