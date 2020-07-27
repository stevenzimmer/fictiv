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

	<nav class="absolute w-full top-0 left-0 h-18 flex items-center z-50">
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
	
	<nav class="absolute w-full left-0 right-0 top-0 bg-transparent z-50 hidden">
		<!-- <div class="absolute w-full h-full bg-white inset-0 opacity-75"></div> -->
		<div class="bg-white py-2 hidden">
			<div class="container">
				<div class="flex flex-between">
					<div class="lg:w-9/12">
						<div>
							<p class="text-blue-dark">
								Exciting News! Supply & Demand Chain Executive has selected Fictiv as a recipient of its prestigious SDCE 100 Award for its ability to deliver speed and agility via digital transformation of supply chains.
							</p>
						</div>
					</div>
					<div class="lg:w-3/12">
						<div class="flex justify-center lg:justify-end">
							<div class="">
								<a href="http://www.globenewswire.com/news-release/2020/06/17/2049459/0/en/Fictiv-Named-SDCE-100-Top-Supply-Chain-Projects-for-2020-by-Supply-Demand-Chain-Executive.html" class="btn btn-secondary">Read more</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
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