<?php /* Template Name: Careers */ ?>
<?php 
	get_header();
	// the_title();
?>
<header class="section relative bg-teal-light">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center lazyload" data-bg="url(<?php echo get_template_directory_uri() . '/assets/images/background/careers-header.jpg'; ?>)"></div>
	<div class="container relative">
		<div class="flex justify-center lg:justify-start">
			<div class="w-11/12 lg:w-3/5">
				<div>
					<p class="text-blue-dark text-18 uppercase font-museo-900">
						work at fictiv
					</p>
				</div>
				<div class="mb-4">
					<h1 class="text-36 lg:text-h1 uppercase font-museo-900 text-blue-dark leading-tight">Build the future of manufacturing</h1>
				</div>
				<div>
					<a class="btn btn-primary" href="#all-jobs">explore careers</a>
					
				</div>
			</div>
		</div>
	</div>
</header>
<section class="pt-20 bg-white">
	<div class="container">
		<div class="flex justify-center mb-12">
			<div class="w-11/12 lg:w-3/4 ">
				<div class="mb-4 ">
					<h2 class="text-24 font-museo-900 text-blue-light mb-4 text-center">
						TRANSFORMING HOW PRODUCTS ARE MADE
					</h2>
					<p class="text-18 text-blue-dark">
						We exist to enable product innovators to create. Our Digital Manufacturing Ecosystem is transforming how the next rockets, self driving cars, and life-saving robots are designed, developed and delivered to customers around the world.
					</p>
				</div>
				<div class="flex justify-center">
					<div class="w-4/5 lg:w-3/4">
						<div class="w-full border-2 border-dotted border-teal-dark p-4">
							<div class="flex justify-between">
								<div class="w-1/5">
									<img alt="fictiv values" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fictiv-values.png">
								</div>
								<div class="w-4/5">
									<div>
										<p class="text-blue-dark uppercase text-16 mb-2">
											fictiv values
										</p>
										<p class="text-18 font-bold text-blue-dark mb-2 font-museo-700">
											#1: CREATOR SPIRIT
										</p>
										<p class="text-16 class text-blue-dark">
											<em>
												We're a team of self-starters that enjoy a good challenge.
											</em>
											
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		<div class="relative">
		
			<div id="careers-carousel">
				<?php 

					for ( $i = 1; $i <= 4; $i++ ) :
		 				
				?>
				<div>
					<img alt="Careers Slider <?php echo $i; ?>" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/careers-slider-<?php echo $i; ?>.jpg">
				</div>
				
				<?php 
					endfor;
				?>

			</div>
			<div class="absolute w-12 h-full right-0 top-0 bg-black bg-opacity-25 select-none hover:bg-opacity-50 transition-colors duration-200" id="careers-carousel-next">
				<div class="w-full h-full flex items-center justify-center">
					<div>
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/carousel-right-white.svg');
						?>
					</div>
				</div>
			</div>
			<div class="absolute w-12 h-full left-0 top-0 bg-black bg-opacity-25 select-none hover:bg-opacity-50 transition-colors duration-200" id="careers-carousel-prev">
				<div class="w-full h-full flex items-center justify-center">
					<div class="transform rotate-180">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/carousel-right-white.svg');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section bg-grey-100">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-3/4">
				<div class="mb-4 ">
					<h2 class="text-24 font-museo-900 text-blue-light mb-4 text-center">
						OPPORTUNITIES FOR GROWTH
					</h2>
					<p class="text-18 text-blue-dark">
						We believe in providing our team members (known affectionately as "fictors") with the support and tools they need to take their careers to the next level. At Fictiv, you’ll have the autonomy to drive big opportunities and the support to succeed.
					</p>
				</div>
				<div class="flex flex-wrap items-center mb-12">
					<div class="w-full lg:w-1/2 px-6">
						<div class="box-check-dark">
                        	<ul class=" text-blue-dark font-museo-700">
                        		<li class="mb-2">Access to Udemy business courses</li>
                        		<li class="mb-2">
                        			Leadership coaching for high performers
                        		</li>
                        		<li class="mb-2">
                        			Direct access to executive leadership
                        		</li>

                        		<li>
                        			Continued education stipends
                        		</li>

                        	</ul>
                        </div>
						
					</div>
					<div class="w-full lg:w-1/2 px-6">
						<img alt="OPPORTUNITIES FOR GROWTH" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/careers-opportunities-for-growth.jpg">
					</div>
				</div>
				<div class="flex justify-center">
					<div class="w-4/5 lg:w-3/4">
						<div class="w-full border-2 border-dotted border-teal-dark p-4">
							<div class="flex justify-between">
								<div class="w-1/5">
									<img alt="fictiv values" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fictiv-values.png">
								</div>
								<div class="w-4/5">
									<div>
										<p class="text-blue-dark uppercase text-16 mb-2">
											fictiv values
										</p>
										<p class="text-18 font-bold text-blue-dark mb-2 font-museo-700">
											#2: SERVICE MENTALITY
										</p>
										<p class="text-16 class text-blue-dark">
											<em>
												We're always looking for ways to support one another and help our customers succeed.
											</em>
											
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
</section>


<section class="section bg-white">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-3/4">
				<div class="mb-4">
					<h2 class="text-24 font-museo-900 text-blue-light mb-4 text-center">
						A DIVERSE, COLLABORATIVE TEAM
					</h2>
					<p class="text-18 text-blue-dark">
						At Fictiv, you'll be surrounded by a passionate group of people with diverse backgrounds and perspectives. We foster a highly collaborative environment between all teams, across manufacturing operations, product and engineering, and growth. We also benefit from our global diversity, with headquarters located in both San Francisco, CA and Guangzhou, China, with remote-friendly systems to keep our teams connected.
					</p>
				</div>
				<div>
					<img alt="fictiv locations map" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/background/fictiv-locations.png">
				</div>
				<div class="flex justify-center">
					<div class="w-11/12 lg:w-4/5">
						<div class="w-full border-2 border-dotted border-teal-dark p-4">
							<div class="flex justify-between">
								<div class="w-1/5">
									<img alt="fictiv values" class="lazyload" data- src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fictiv-values.png">
								</div>
								<div class="w-4/5">
									<div>
										<p class="text-blue-dark uppercase text-16 mb-2">
											fictiv values
										</p>
										<p class="text-18 font-bold text-blue-dark mb-2 font-museo-700">
											#3: CONSTANTLY SEEKING TO LEARN
										</p>
										<p class="text-16 class text-blue-dark">
											<em>
												We aim to constantly improve and learn from each other.
											</em>
											
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
</section>


<section class="section bg-white">
	<div class="container">
		<div class="flex flex-wrap justify-center lg:justify-start -mx-6">
			<div class="w-11/12 lg:w-1/2 px-6">
				<img alt="meet our team Kat Lopez" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/kat-fictiv-employee-p-1600.jpg">
			</div>
			<div class="w-11/12 lg:w-1/2 px-6">
				<div>
					<!-- Logo -->
				</div>
				<div class="mb-4">
					<p class="text-blue-light text-18 uppercase font-museo-900">meet our team</p>	
					
				</div>
				<div class="mb-4">
					<p class="text-blue-dark text-36 font-museo-900 leading-tight">"I love building features that enable more efficient workflows and processes. I get excited about making parts of people’s lives easier and automated."</p>
				</div>
				<div class="mb-4">
					<p class="text-blue-dark">
						— Kathleen "Kat" Lopez, Fictiv Software Engineer
					</p>
				</div>
				<div class="mb-8">
					<a href="/articles/meet-our-team-kathleen-kat-lopez/" class="btn btn-secondary">read the blog post</a>
				</div>
			
			</div>
		</div>

		<div class="flex justify-center">
			<div class="w-11/12 lg:w-3/5 ">
				<div class="flex justify-center">
					<div class="w-3/4">
						<div class="w-full border-2 border-dotted border-teal-dark p-4">
							<div class="flex justify-between">
								<div class="w-1/5">
									<img alt="fictiv values" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fictiv-values.png">
								</div>
								<div class="w-4/5">
									<div>
										<p class="text-blue-dark uppercase text-16 mb-2">
											fictiv values
										</p>
										<p class="text-18 font-bold text-blue-dark mb-2 font-museo-700">
											#4: GRIT
										</p>
										<p class="text-16 class text-blue-dark">
											<em>
												We stick it out when things get tough.
											</em>
											
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
</section>

<section class="section bg-grey-100">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-3/4 ">
				<div class="mb-4 text-center">
					<h2 class="text-24 font-fat text-blue-light mb-4 font-museo-900">
						PERKS AND BENEFITS
					</h2>
				</div>
				<div class="flex flex-wrap -mx-2 mb-8 items-stretch">
					<?php 
						$perks = array(
							array(
								'icon' => 'food',
								'text' => 'Free catered lunch, snacks, and drinks'
							),

							array(
								'icon' => 'learning',
								'text' => 'Learning and development stipend'
							),

							array(
								'icon' => 'parental',
								'text' => 'Paid parental leave'
							),

							array(
								'icon' => 'stocks',
								'text' => 'Equity options'
							),

							array(
								'icon' => 'wellness',
								'text' => 'Wellness stipend'
							),

							array(
								'icon' => 'pto',
								'text' => 'Paid volunteer days'
							),

							
						);

						foreach ($perks as $i => $perk ) :
						
					?>
					<div class="w-full md:w-1/2 lg:w-1/3 text-center px-2 mb-4">
						<div class="p-4 bg-white h-full">
							<div class="mb-2">
								<div class="flex items-center justify-center h-24">
									<div class=" w-full">
										<img class="mx-auto lazyload" alt="fictiv values" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/perk-<?php echo $perk['icon']; ?>.svg">
									</div>
								</div>
								
							</div>
							<div>
								<p class="text-blue-dark font-bold">
									<?php echo $perk['text']; ?>
								</p>
							</div>
						</div>
						
					</div>
					<?php 
						endforeach;
					?>
					
					
					
				</div>

			</div>
		</div>
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-3/5 ">
				<div class="flex justify-center">
					<div class="w-4/5 lg:w-3/4">
						<div class="w-full border-2 border-dotted border-teal-dark p-4">
							<div class="flex justify-between">
								<div class="w-1/5">
									<img alt="fictiv values" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fictiv-values.png">
								</div>
								<div class="w-4/5">
									<div>
										<p class="text-blue-dark uppercase text-16 mb-2">
											fictiv values
										</p>
										<p class="text-18 font-bold text-blue-dark mb-2 font-museo-700">
											#5: COMPASSION FOR OTHERS

										</p>
										<p class="text-16 class text-blue-dark">
											<em>
												We care personally and strive to work with integrity.
											</em>
											
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section bg-white">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-3/4">
				<div class="mb-4 text-center">
					<h2 class="text-24 font-museo-900 text-blue-light mb-4 uppercase">
						our investors
					</h2>
					
				</div>
				<div class="flex items-center flex-wrap justify-center">
					<div class="mx-6 mb-4">
						<img width="80" alt="Investor Logo G2VP" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-g2vp.png">
					</div>
					<div class="mx-6 mb-4">
						<img width="60" alt="Investor Logo mitsui co" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-mitsui-co.jpg">
					</div>
					<div class="mx-6 mb-4">
						<img width="90" alt="Investor Logo sinovation ventures" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-sinovation-ventures.png">
					</div>
					<div class="mx-6 mb-4">
						<img width="90" alt="Investor Logo accel" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-accel.png">
					</div>
					<div class="mx-6 mb-4">
						<img width="70" alt="Investor Logo intel" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-intel.png">
					</div>
					<div class="mx-6 mb-4">
						<img width="100" alt="Investor Logo FJ labs" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-fj-labs.png">
					</div>
					<div class="mx-6 mb-4">
						<img width="100" alt="Investor Logo Bill Gates" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-bill-gates.png">
					</div>
					<div class="mx-6 mb-4">
						<img width="100" alt="Investor Logo Tandon Group" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-tandon-group.png">
					</div>
					<div class="mx-6 mb-4">
						<img width="80" alt="Investor Logo Start" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-start.png">
					</div>
					<div class="mx-6 mb-4">
						<img width="80" alt="Investor Logo SVangel" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/investor-svangel.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section bg-blue-dark">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-1/2 ">
				<div class="mb-4 text-center">
					<h2 class="text-24 font-fat text-white mb-4 uppercase">
						join our team
					</h2>
					<p class="text-18 text-white">
						We're growing fast and looking to bring on people from diverse backgrounds and experiences that share our vision.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section bg-white">
	<div class="container">
		
		<div class="careers-top-header" id="all-jobs">
			<h3>Career Opportunities</h3>
			<div id="jobs-number"></div>
		</div>

		<div class="filter-by-department-row">
			<select class="filter-by-department-select" id="filter-by-department" aria-label="Select a department">
				<option value="all">
					All departments
				</option>
			</select>	
		</div>

		<div id="jobs-wrapper" class="jobs-wrapper"></div>

		<div id="jobs-overlay" class="jobs-overlay fixed bg-white z-50 w-full h-screen max-h-full inset-0 bg-white transition-opacity duration-200 py-20 overflow-scroll invisible opacity-0 hidden" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="overlayLabel">
			<div class="overlay-wrapper bg-white" role="document">
				<div class="container relative">
					<div class="flex justify-center">
						<div class="w-11/12 lg:w-full">
							<div class="pb-12 border-b border-grey-light">
								<p>
									<a href="#all-jobs" class="trigger-overlay-close btn btn-ghost btn-ghost-primary" aria-label="Close">Back to Listings</a>
								</p>
							</div>
							
							<div id="overlay-inner" class="relative overlay-inner border-bottom py-12 mb-12"></div>

							<div class="pb-12">
								<p>
									<a href="#all-jobs" class="trigger-overlay-close btn btn-ghost btn-ghost-primary" aria-label="Close" >Back to Listings</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	get_footer();
?>