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

	<nav class="relative w-full h-12 lg:h-18 flex items-center">
	
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
								<ul class="flex justify-between items-center  font-museo-700 ">
									<li>
										<a class="primary-menu-item" href="#" data-menu="why-fictiv">
											Why Fictiv
										</a>
									</li>

									<li>
										<a href="#" class="primary-menu-item" data-menu="capabilities">
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
	</nav>
		
	<?php 
		// Show mobile filter on Resource center pages
		if( is_search() || 
			is_page_template('page-filter.php') || 
			is_page_template('page-resource-center.php') ||
			is_singular('cpt_blog') ) :

			include( get_template_directory() . '/inc/post-taxonomies.php');

	?>

	<nav class="relative w-full h-12 lg:hidden flex items-center border-t border-b border-white filter-content-mobile select-none" id="filter-content-mobile">
		<div class="absolute w-full h-full inset-0 bg-black opacity-50 "></div>
		<div class="container relative">
			<div class="flex justify-center">
				<div class="w-11/12 md:w-full">
					
					<div class="flex justify-between items-center">
						
						<div class="">
							<p class="uppercase text-white font-museo-700 text-12">filter content</p>
						</div>
						<div class="w-10 text-center text-white flex items-center justify-center ">
							<div class="transform transition-transform origin-center duration-200 filter-content-arrow">
							<?php 
								echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/filter-arrow.svg');
							?>
							</div>
							
						</div>
					
					</div>
				</div>
			</div>

		</div>
			
		<div class="bg-white py-4 filter-content-mobile-dropdown hidden lg:hidden shadow-lg">
			<div class="container">
				<div class="flex justify-center">
					<div class="w-11/12 md:w-full">
						<div class="mb-4">

							<?php 
								get_template_part('partials/resources', 'search');
							?>
							
						</div>
						<div class="">
							<form method="GET" action="<?php echo home_url(); ?>/filter/" id="filter-form">

							<?php
								resource_center_cpt();

								filterContentType( $GLOBALS['resource_post_types'], 'mobile' );
								
								foreach ( resource_center_taxonomies() as $i => $tax ) :
									$labels = get_taxonomy( $tax );

									$filters = get_terms( array(
										'taxonomy' => $tax,
										'hide_empty' => true
									));

									filterTaxonomies( $labels->labels->singular_name, $filters, 'mobile'  );

								endforeach;

								get_template_part('partials/filter', 'btns');
							?>
								
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<?php 
		endif;
	?>
		
	<nav class="bg-white py-10 sub-menu hidden" data-menu="why-fictiv">
		<div class="container">
			<div class="flex justify-center">
				<div class="lg:w-11/12">
					<div class="flex -mx-4">
						<div class="lg:w-8/12 px-4">
							<div class="mb-4">
								<p class="uppercase">
									our digital manufacturing ecosystem
								</p>
							</div>
							<div class="border border-grey-200">
								<div class="flex">
									<div class="lg:w-6/12 border-r border-grey-200">
										<!-- img -->
									</div>
									<div class="lg:w-6/12">
										<?php 
											$ecosystems = array(
												array(
													'title' => 'Quote-to-Order Platform',
													'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore',
													'link' => '#1'
												),

												array(
													'title' => 'Global Manufacturing Network',
													'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore',
													'link' => '#2'
												),

												array(
													'title' => 'Our Quality Difference',
													'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore',
													'link' => '#3'
												),
											);

											foreach ( $ecosystems as $i => $ecosystem ) :
											
 										?>
										<div class="p-4 border-b border-grey-200 last:border-0 relative">
											<a class="absolute w-full h-full inset-0" href="<?php echo $ecosystem['link']; ?>"></a>
											<div class="flex items-center -mx-6">
												<div class="lg:w-11/12 px-6">
													<p class="mb-4"><?php echo $ecosystem['title']; ?></p>
													<p><?php echo $ecosystem['para']; ?></p>
												</div>
												<div class="lg:w-1/12 px-6">
													<div class="flex justify-center">
														<div>
															<p>
											                    &#9656;
											                </p>
														</div>
													</div>
													
												</div>
												
											</div>
											
										</div>
										<?php 
											endforeach;
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="lg:w-4/12 px-4">
							<div class="mb-4">
								<p class="uppercase">
									features
								</p>
							</div>

							<?php 
								$features = array(
									array(
										'title' => 'Instant Quotes',
										'para' => 'Lorem ipsum dolor sit amet, consectetur',
										'link' => '#1'
									),

									array(
										'title' => 'Manufacturability Feedback',
										'para' => 'Lorem ipsum dolor sit amet, consectetur',
										'link' => '#2'
									),

									array(
										'title' => 'Fulfillment Transparency',
										'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
										'link' => '#3'
									),
								);

								foreach ( $features as $i => $feature ) :
								
								?>
							<div class="border border-grey-200 relative mb-4">
								<a class="absolute w-full h-full inset-0" href="<?php echo $feature['link']; ?>"></a>
								<div class="flex">
									<div class="lg:w-3/12">
										<div class="bg-grey-100 h-full"></div>
									</div>
									<div class="lg:w-9/12">
										<div class="flex items-center -mx-6 p-4">
											<div class="lg:w-11/12 px-6">
												<p class="mb-4"><?php echo $feature['title']; ?></p>
												<p><?php echo $feature['para']; ?></p>
											</div>
											<div class="lg:w-1/12 px-6">
												<div class="flex justify-center">
													<div>
														<p>
										                    &#9656;
										                </p>
													</div>
												</div>
												
											</div>
											
										</div>
									</div>	
								</div>
								
								
								
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

	<nav class="bg-white py-10 sub-menu hidden" data-menu="capabilities">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12">
					<div class="flex -mx-4">
						<div class="lg:w-8/12 px-4">
							<div class="flex flex-wrap -mx-4">
								
							
							
							<?php 
								$capabilities = array(
									array(
										'title' => 'CNC Machining',
										'para' => 'Lorem ipsum dolor sit amet, consectetur',
										'link' => '#1',
										'processes' => array(
											array(
												'name' => 'CNC Milling',
												'link' => '#'
											),

											array(
												'name' => 'CNC Turning',
												'link' => '#'
											),

											array(
												'name' => 'Gear Hobbing',
												'link' => '#'
											),

											array(
												'name' => 'Electric Discharge Machining (EDM)',
												'link' => '#'
											),
											
										)
									),

									array(
										'title' => 'Injection molding',
										'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
										'link' => '#3'
									),

									array(
										'title' => '3D Printing',
										'para' => 'Lorem ipsum dolor sit amet, consectetur',
										'link' => '#2',
										'processes' => array(
											array(
												'name' => 'Fused Deposition Modeling',
												'link' => '#'
											),

											array(
												'name' => 'HP Multi Jet Fusion (MJF)',
												'link' => '#'
											),

											array(
												'name' => 'Polyjet',
												'link' => '#'
											),

											array(
												'name' => 'Selective Laser Sintering (SLS)',
												'link' => '#'
											),

											array(
												'name' => 'Stereolithography (SLA)',
												'link' => '#'
											),
											
										)
									),

									
								);

								foreach ( $capabilities as $i => $capability ) :
								
								?>
								<div class="lg:w-1/2 px-4">
									<div class="border border-grey-200 mb-4">
								
										<div class=" relative">
											<a class="absolute w-full h-full inset-0" href="<?php echo $feature['link']; ?>"></a>
											<div class="flex border-b border-grey-200">
												<div class="lg:w-3/12">
													<div class="bg-grey-100 h-full"></div>
												</div>
												<div class="lg:w-9/12">
													<div class="flex items-center -mx-6 p-4">
														<div class="lg:w-11/12 px-6">
															<p class="mb-4"><?php echo $capability['title']; ?></p>
															<p><?php echo $capability['para']; ?></p>
														</div>
														<div class="lg:w-1/12 px-6">
															<div class="flex justify-center">
																<div>
																	<p>
													                    &#9656;
													                </p>
																</div>
															</div>
															
														</div>
														
													</div>
												</div>	
											</div>
										
										</div>
										<?php 
											if( isset( $capability['processes'] ) ) :
										?>
										<div class="">
											<div class="flex">
												<div class="lg:w-3/12">
												
												</div>
												<div class="lg:w-9/12">
													<div class=" p-4">
														<div class="mb-2">
															<p>Processes Available</p>
														</div>
														<div class="lg:w-11/12">
															<?php 
																foreach ( $capability['processes'] as $j => $process ) :
																
															?>
															<a href="<?php echo $process['link']; ?>" class="text-teal-light block mb-2 last:mb-0"><?php echo $process['name']; ?></a>
															<?php 
																endforeach;
															?>
														</div>
														
														
													</div>
												</div>	
											</div>
										
										</div>

										<?php 
											endif;
										?>
									</div>
								</div>
							
							<?php 
								endforeach;
							?>
							</div>
						</div>
						<div class="lg:w-4/12 px-4">

							<div class="border border-grey-200 relative p-4">
								<div class="mb-4">
									<p>
										Finishing Processes
									</p>
								</div>
								<div class="flex flex-wrap">

								<?php 
									$finishings = array(
										array(
											'title' => 'Anodizing',
										
											'link' => '#1'
										),

										array(
											'title' => 'Nickel Plating',
											
											'link' => '#2'
										),

										array(
											'title' => 'Alodine',
											
											'link' => '#3'
										),
										array(
											'title' => 'Passivation',
											
											'link' => '#3'
										),

										array(
											'title' => 'Black Oxide',
											
											'link' => '#3'
										),

										array(
											'title' => 'Powder Coating',
											
											'link' => '#3'
										),


										array(
											'title' => 'Electropolishing',
											
											'link' => '#3'
										),

										array(
											'title' => 'Tumbling',
											
											'link' => '#3'
										),

										array(
											'title' => 'ENP',
											
											'link' => '#3'
										),

										array(
											'title' => 'Zinc Plating',
											'link' => '#3'
										),

										array(
											'title' => 'Media Blasting',
											'link' => '#3'
										),
									);

									foreach ( $finishings as $i => $finishing ) :
									
								?>

									<a href="<?php echo $finishing['link']; ?>" class="mb-2 block lg:w-1/2 text-teal-light"><?php echo $finishing['title']; ?></a>
										
								<?php 
									endforeach;
								?>
								</div>
							</div>				
								
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</nav>
