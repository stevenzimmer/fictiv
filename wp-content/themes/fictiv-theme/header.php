<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  	<?php 
  		wp_head(); 
  	?>
</head><!--/head-->

<body <?php body_class() ?>>

	<nav class="absolute w-full top-0 left-0  z-50">
		<div class="relative w-full h-12 lg:h-18 flex items-center">
			<div class="absolute w-full h-full inset-0 bg-black opacity-50 "></div>
				<div class="container relative">
					<div class="flex justify-center">
						<div class="w-11/12 md:w-full">
							
						
							<div class="flex justify-between items-center">
								<div class="flex w-full -mx-6">
									<div class="w-24 px-6">
										<a href="<?php echo home_url() ?>">
											<?php 
												echo file_get_contents( get_template_directory_uri() . '/assets/images/logos/fictiv-teal.svg');
											?>
										</a>
									</div>
									<div class="w-4/5 px-6 hidden lg:block">
										<ul class="flex justify-between items-center text-white font-museo-700 ">
											<li>
												<a href="/our-platform/">
													Why Fictiv
												</a>
											</li>

											<li>
												<a href="#">
													Capabilities
												</a>
											</li>
											<li>
												<a href="#">
													Materials
												</a>
											</li>

											<li>
												<a href="#">
													Industry Solutions
												</a>
											</li>

											<li>
												<a href="/resources/">
													Resources
												</a>
											</li>

											<li>
												<a href="#">
													Request a Demo
												</a>
											</li>
											<li>
												<a href="https://app.fictiv.com/users/sign_in">
													Log In
												</a>
											</li>
										</ul>
									</div>
								</div>
								
								<div class="hidden lg:block">
									<?php 
										primary_button();
									?>
								</div>
								<div class="lg:hidden">

									<div class="mobile-toggle cursor-pointer relative w-10 h-8 border border-white rounded " id="mobile-toggle">
							            <span class="sr-only">Toggle Navigation</span>
							            <span class="nav-bar"></span>
							        </div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 
			if( is_search() || is_page_template('page-filter.php') || is_page_template('page-resource-center.php') ) :
		?>
		<div class="relative w-full h-12 lg:hidden flex items-center border-t border-b border-white">
			<div class="absolute w-full h-full inset-0 bg-black opacity-50 "></div>
			<div class="container relative">
				<div class="flex justify-center">
					<div class="w-11/12 md:w-full">
						
						<div class="flex justify-between items-center">
							
							<div class="">
								<p class="uppercase text-white font-museo-700 text-12">filter content</p>
							</div>
							<div class="w-10 text-center text-white">
								<p>
									&#9660;
								</p>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
			endif;
		?>
		
	</nav>
	
	<nav class="absolute w-full left-0 right-0 top-0 bg-transparent z-50 hidden">
		
		<div class="container relative py-4">
			
		
			<div class="flex justify-between items-center">
				<div class="w-20">
					<a href="<?php echo home_url() ?>">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/logos/fictiv-dark.svg');
						?>
					</a>
				</div>
				<div class="md:w-8/12 hidden md:block">
					<div class="flex justify-end items-center">
						<div class="md:w-8/12">
							<?php 
								wp_nav_menu( 
									array(
								    	'menu'              => "top-nav", 
								    	'menu_class'        => "flex w-full items-center justify-between top-nav font-museo-700 text-14", 
								    	'container_class'   => "",
									)
								);
							?>
							
						</div>
						<div class="w-8"></div>
						<div class="">
							<?php 
								primary_button();
							?>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</nav>
	