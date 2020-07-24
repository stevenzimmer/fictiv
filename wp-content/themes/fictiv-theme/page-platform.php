<?php /* Template Name: Our Platform */ ?>
<?php 
	get_header();
	// the_title();
?>
<header class="py-32">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
	<div class="w-full h-full opacity-50 bg-white absolute inset-0"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-2/5 text-center">
				<h1 class="text-48 text-blue-dark font-museo-500 mb-4">
					Do more, with ease
				</h1>
				<p class="text-24 font-light">
					Modern tools to help you save time, work smart, and impress your boss.
				</p>
			</div>
		</div>
		<div class="section-half hidden lg:block"></div>
	</div>
</header>
<section class="section bg-teal-dark relative" >
	<div class="w-full absolute h-full inset-0 hidden lg:block">
		<div class="container h-full">
			<div class="flex justify-end h-full">
				<div class="w-full h-full lg:w-3/5 relative">
					<div class="absolute" style="bottom: -100px">
						<img class="lazyload" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/platform-technology.png">
					</div>
				
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-5/6">
				<div class="flex justify-start">
					<div class="w-full lg:w-2/5">
						<div class="text-center lg:text-left">
							<h2 class="text-white text-36 font-museo-500 ">
								Platform technology
							</h2>
							<p class="text-white">
								Save time with our streamlined quote-to-order platform.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<section class="section relative bg-white">
	<div class="container">
		<div class="flex items-center justify-center lg:justify-start flex-wrap">
			<div class="w-11/12 lg:w-1/2">

				<div class="w-full md:w-8/12">
					<h2 class="text-blue-dark text-30 leading-tight mb-4 font-museo-500">
						Easily upload native CAD & 2D drawings
					</h2>
					<p class="text-16 mb-8">
						Simply drag-and-drop your native CAD files to the Fictiv platform. We also accept 2D drawings attachments for CNC machining.
					</p>
					
				</div>
				<div class="flex items-center mb-6 md:mb-0">
					<div>
						<p class="font-bold text-16">
							Available For 
						</p>
					</div>
					<div class="w-4"></div>
					<div>
						<a class="text-blue-light hover:text-red-dark font-semibold text-14" href="/3d-printing-service/">3D Printing</a>
					</div>
					<div class="w-4"></div>
					<div>
						<a class="text-blue-light hover:text-red-dark font-semibold text-14" href="/cnc-machining-service/">CNC Machining</a> 
					</div>
					<div class="w-4"></div>
					<div>
						<a class="text-blue-light hover:text-red-dark font-semibold text-14" href="/urethane-casting-service/">Urethane Casting</a> 
					</div>
				</div>
			
			
			</div>
			<div class="w-11/12 lg:w-1/2">
				<div class="flex flex-wrap items-center">
					<div class="px-4 mb-4">
						<img class="lazyload" width="120" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/autodesk-light.png">
					</div>
					<div class="px-4 mb-4">
						<img class="lazyload" width="120" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/ds-catia-light.png">
					</div>
					<div class="px-4 mb-4">
						<img class="lazyload" width="120" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/solidworks-light.png">
					</div>
					<div class="px-4 mb-4">
						<img class="lazyload" width="120" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/rhinoceros-light.png">
					</div>
					<div class="px-4 mb-4">
						<img class="lazyload" width="50" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/nx-light.png">
					</div>
					<div class="px-4 mb-4">
						<img class="lazyload" width="120" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/solid-edge-light.png">
					</div>
					<div class="px-4 mb-4">
						<img class="lazyload" width="60" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/acrobat-pdf-light.png">
					</div>

					<div class="px-4 mb-4">
						<img class="lazyload" width="80" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/creo-light.png">
					</div>
					<div class="px-4 mb-4">
						<img class="lazyload" width="80" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/alphacam-light.png">
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="flex items-center justify-center lg:justify-start flex-wrap">
			<div class="w-11/12 lg:w-2/5">
				<h2 class="text-blue-dark text-30 mb-4 font-museo-500">
					Faster quotes powered by intelligent model processing
				</h2>
			</div>
		</div>
		<div class="flex -mx-4 flex-wrap justify-center lg:justify-start">
			<div class="w-11/12 lg:w-1/2 px-4 mb-6 lg:mb-0">
				<div class="mb-4">
					<img class="shadow-lg lazyload" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/faster-quotes-1.png">
				</div>
				<div>
					<p class="text-16 font-bold mb-2 font-museo-700">
						Instant Pricing
					</p>
					<p class="text-16 mb-4">
						3D models process in minutes, providing instant pricing feedback so you can quickly compare costs, make faster decisions, and keep your projects on track.
					</p>
					<div class="flex items-center">
						<div>
							<p class="font-bold text-16">
								Available For 
							</p>
						</div>
						<div class="w-4"></div>
						<div>
							<a class="text-blue-light hover:text-red-dark font-semibold text-14" href="/3d-printing-service/">3D Printing</a>
						</div>
						<div class="w-4"></div>
						<div>
							<a class="text-blue-light hover:text-red-dark font-semibold text-14" href="/cnc-machining-service/">CNC Machining</a> 
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="w-11/12 lg:w-1/2 px-4">
				<div class="mb-4">
					<img class="shadow-lg lazyload" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/faster-quotes-2.png">
				</div>
				<div>
					<p class="text-16 font-museo-700 mb-2">
						Auto Thread Detection
					</p>
					<p class="text-16 mb-4">
						Only have threaded holes to call out? Skip the drawing and quickly specify holes using our Auto Thread Detection feature.
					</p>
					<div class="flex items-center">
						<div>
							<p class="font-bold text-16">
								Available For 
							</p>
						</div>
						<div class="w-4"></div>
						
						<div>
							<a class="text-blue-light hover:text-red-dark font-semibold text-14" href="/cnc-machining-service/">CNC Machining</a> 
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="flex justify-center lg:justify-between flex-wrap">
			<div class="w-11/12 lg:w-4/12 mb-6 lg:mb-0">
				<div>
					<h2 class="text-blue-dark text-30 leading-tight mb-4 font-museo-500">
						Online Manufacturing Feedback
					</h2>
					<p class="text-18 mb-4">
						Review manufacturing recommendations, questions, and requirements in our cloud-based 3D viewer and respond or upload revisions on the spot.
					</p>
					<div class="flex items-center">
						<div>
							<p class="font-bold text-16">
								Available For 
							</p>
						</div>
						<div class="w-4"></div>
						
						<div>
							<a class="text-blue-light hover:text-red-dark font-semibold text-14" href="/cnc-machining-service/">CNC Machining</a> 
						</div>
						
					</div>
				</div>
			</div>
			<div class="w-11/12 lg:w-7/12">
				<div>
					<img class="shadow-lg lazyload" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/online-manufacturing-feedback.png">
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	get_footer();
?>