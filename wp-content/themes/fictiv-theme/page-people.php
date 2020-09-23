<?php /* Template Name: People */ ?>
<?php 
	get_header();
	if ( have_posts() ) : 

    	while ( have_posts() ) : 
       		the_post();
?>
<header class="py-20 relative">
	<div class="w-full h-full absolute inset-0 flex lg:justify-end">

		<div class="w-full lg:w-6/12 h-full bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			
		</div>
	</div>
	<div class="bg-white md:bg-transparent md:bg-gradient-to-r from-white via-white  absolute w-full h-full inset-0 opacity-75 md:opacity-100"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12">
				<div class="flex "> 
					<div class="lg:w-6/12">
						<div class="mb-6">
							<h1 class="xl text-grey-700">
								Real Humans, Here to Help
							</h1>
						</div>
						<div class="mb-6">
							<p class="md:text-20 font-museo-500 text-grey-600">
								Fictiv is more than just a digital platform. Our technical manufacturing and quality experts are eager to help from quote to fulfillment, ensuring you get the parts you need, when you need them.
							</p>
						</div>
						<div class="flex items-center w-full">
							<div class="mr-2">
								<!-- Icon -->
								<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/parts.png">
							</div>
							<div>
								<p class="text-blue-dark font-museo-700 leading-tight">
									All parts inspected by Fictiv quality Engineers
								</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
	</div>
</header>
<section class="py-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12">
				<div class="flex flex-wrap -mx-6">
					<div class="w-full lg:w-6/12 px-6 mb-6 lg:mb-0">
						<div class="mb-6">
							<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
								All Your Part Inspections, Verified
							</h2>
						</div>
						<div>
							<p class=" font-museo-500 text-grey-600">
								All parts ordered through the Fictiv platform are verified by a Fictiv-employed Supplier Quality Engineer (SQE) to ensure quality. We employee SQEs in all supply locations, who regularly visit our partners, audit facilities, and inspect customer parts to ensure requirements are met.
							</p>
						</div>
					</div>
					<div class="w-full lg:w-6/12 px-6">
						<div class="mb-2">
							<img class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/graphics/all-your-inspections-1.jpg'; ?>">
						</div>
						<div class="flex -mx-1">
							<div class="px-1">
								<img class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/graphics/all-your-inspections-2.jpg'; ?>">
							</div>
							<div class="px-1">
								<img class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/graphics/all-your-inspections-3.jpg'; ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
<section class="pb-20 lg:py-20 bg-grey-100 relative">
	<div class="w-full h-full relative lg:absolute inset-0 flex lg:justify-end mb-6 lg:pl-12">

		<div class="w-full h-64 lg:w-6/12 lg:h-full bg-cover bg-center lazyload " data-bg="url(<?php echo get_template_directory_uri() . '/assets/images/graphics/all-your-designs-bg.jpg'; ?>)">
			
		</div>
	</div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12">
				<div class="flex flex-wrap lg:-mx-6">
					<div class="w-full lg:w-6/12 lg:px-6">
						<div class="mb-6">
							<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
								All Your Designs, Supported
							</h2>
						</div>
						<div>
							<p class=" font-museo-500 text-grey-600">
								During the quoting process, our Technical Applications Engineers are on stand-by to provide expert guidance on design manufacturability to ensure the parts you receive meet your requirements.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="py-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12">
				<div class="flex flex-wrap -mx-6">
					<div class="w-full lg:w-6/12 px-6 mb-6 lg:mb-0">
						<div class="mb-6">
							<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
								All Your Programs, Managed
							</h2>
						</div>
						<div>
							<p class=" font-museo-500 text-grey-600">
								Intelligent orchestration doesn’t end with our digital technology. We also employ Technical Program Managers to advocate for your design requirements during productions and ensure schedules stay on-track.
							</p>
						</div>
					</div>
					<div class="w-full lg:w-6/12 px-6">
						<div class="">
							<img class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/graphics/all-your-programs-1.jpg'; ?>">
						</div>
					
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
<?php 
		endwhile;
	endif;
	get_footer();
?>