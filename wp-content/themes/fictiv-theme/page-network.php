<?php /* Template Name: Our Network */ ?>
<?php 
	get_header();
	// the_title();
?>
<section class="py-10 bg-grey-100"></section>
<header class=" bg-grey-100 relative">
	<div class=" w-full h-full relative lg:absolute inset-0 flex items-center lg:justify-end mb-6 lg:mb-0 max-w-1600 mx-auto">

		<div class="w-full lg:w-6/12">
			<img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/our-network-hero.png">
		</div>
	</div>
	<!-- <div class="bg-white md:bg-transparent md:bg-gradient-to-r from-white via-white  absolute w-full h-full inset-0 opacity-75 md:opacity-100"></div> -->
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-9/12">
				
				<div class="lg:w-7/12">
					<div class="mb-6 lg:pr-12">
						<h1 class="text-blue-dark text-20 md:text-48 font-museo-900 leading-none uppercase">
							THE WORLD’S BEST MANUFACTURERS, CONNECTED
						</h1>
					</div>
					<div class="mb-6">
						<p class="text-blue-dark text-16 md:text-20">
							Fictiv’s Digital Manufacturing Ecosystem connects the best suppliers around the globe, enabling true manufacturing agility.
						</p>
					</div>
					<div class="flex flex-wrap -mx-6">
						<div class="lg:w-1/2 flex items-center w-full px-6 mb-6">
							<div class="mr-2">
								<!-- Icon -->
								<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/countries.svg">
							</div>
							<div class="w-full">
								<p class="text-blue-dark font-museo-900 uppercase text-14">
									4 COUNTRIES
								</p>
							</div>
						</div>

						<div class="lg:w-1/2 flex items-center w-full px-6 mb-6">
							<div class="mr-2">
								<!-- Icon -->
								<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/partners.svg">
							</div>
							<div class="w-full">
								<p class="text-blue-dark font-museo-900 uppercase text-14">
									250+ HIGHLY  VETTED PARTNERS
								</p>
							</div>
						</div>
						<div class="lg:w-1/2 flex items-center w-full px-6">
							<div class="mr-2">
								<!-- Icon -->
								<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/hours-of-capacity.svg">
							</div>
							<div class="w-full">
								<p class="text-blue-dark font-museo-900 uppercase text-14">
									10,000 MONTHLY  <br>HOURS OF CAPACITY
								</p>
							</div>
						</div>
					</div>
					
				</div>	
			</div>
		</div>
	</div>
</header>
<section class="py-10 bg-grey-100"></section>

<section class="section">
	<div class="container">
		<div class="text-center mb-8">
			<h2 class="uppercase text-blue-dark text-20 mb-4 font-slab-500">How it Works</h2>
			<div class="w-20 bg-blue-dark mx-auto border-b-2 border-blue-dark"></div>
		</div>
		<div class="flex flex-wrap -mx-4 justify-center">
			<?php 
				$works = array(
					array(
						'title' => 'Partner qualification',
						'icon' => 'clipboard',
						'para' => 'Before a supplier can become a Fictiv Partner, we conduct a rigorous series of interviews, facilities inspections, and test sample reviews.'
					),

					array(
						'title' => 'Instant pricing & feedback',
						'icon' => 'hourglass',
						'para' => 'Fictiv’s quote-to-order platform makes it easy to quickly compare pricing, communicate design requirements, and review manufacturing feedback.'
					),

					array(
						'title' => 'Partner matching',
						'icon' => 'handshake',
						'para' => 'We match every order with the best available Partner for the job (no random bidding), so you get the capabilities and expertise you need, every time.'
					),

					array(
						'title' => 'Quality inspection',
						'icon' => 'quality',
						'para' => 'All orders go through Fictiv’s ISO-9001 certified quality management process to ensure you get consistent quality across each and every part.'
					),

					array(
						'title' => 'Parts in record time',
						'icon' => 'record-time',
						'para' => 'Fictiv\'s technology streamlines the order process so our Partners spend less time on administrative tasks and can get you parts faster.'
					)
				);

				foreach ( $works as $i => $work ) :
				
			?>
			<div class="w-11/12 md:w-1/2 lg:w-1/3 px-4 mb-12">
				<div class="mb-2 h-24 flex justify-center items-center">
					<img class="mx-auto lazyload h-16" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $work['icon']; ?>.png">
				</div>
				<div>
					<p class="text-blue-dark text-24 font-semibold">
						<span class="text-teal-light"><?php echo $i + 1; ?>.</span>&nbsp;<?php 
							echo $work['title'];
						?>
					</p>
					<p>
						<?php echo $work['para']; ?>

					</p>
				</div>
				
				
			</div>

			<?php 
				endforeach;
			?>
		</div>
	</div>
</section>
<section class="section bg-blue-100">
	<div class="container">
		<div class="text-center mb-8">
			<h2 class="uppercase text-blue-dark text-20 mb-4 font-slab-500">SAFEGUARD SECURITY SYSTEM</h2>
			<div class="w-20 bg-blue-dark mx-auto border-b-2 border-blue-dark"></div>
		</div>
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-4/5">
				<div class="flex justify-center flex-wrap">
					<div class="w-full lg:w-1/2 mb-12 lg:mb-0">
						<div class="flex flex-wrap">
							<div class="lg:w-1/5 mb-4 lg:mb-0">
								<img class="lazyload" width="50" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/nda.png">
							</div>
							<div class="lg:w-3/5">
								<h3 class="text-blue-dark text-36 mb-4 leading-tight font-bold">Non-disclosure agreements</h3>
								<p class="text-18">
									All Fictiv Partners are under strict NDA agreements. Fictiv is also happy to sign company-specific NDAs.
								</p>
							</div>
						</div>
					</div>
					<div class="w-full lg:w-1/2">
						<div class="flex flex-wrap">
							<div class="lg:w-1/5 mb-4 lg:mb-0">
								<img class="lazyload" width="50" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/anonymized.png">
							</div>
							<div class="lg:w-3/5">
								<h3 class="text-blue-dark text-36 mb-4 leading-tight font-bold">Anonymized drawings &amp; files</h3>
								<p class="text-18">
									We remove any identifying information from 2D drawings and 3D file names and only share files with the Partner who produces your parts.
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