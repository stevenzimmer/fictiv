<?php 
	get_header();
?>

<header class="bg-teal-200 section">
	<div class="container">
		<div class="flex justify-center md:justify-start">
			<div class="w-11/12 md:w-6/12">
				<div>
					<h1 class="uppercase text-blue-dark font-fat text-h1">
						MANUFACTURING AGILITY. MADE POSSIBLE.
					</h1>
				</div>
				<div class="mb-4">
					<p class="text-blue-dark text-20">
						Get high quality mechanical parts at unprecedented speeds, from prototype to production.
					</p>
				</div>
				<div class="mb-8">
					<?php 
						primary_button();
					?>
				</div>
				<div class="flex items-center justify-start">
					<div class="flex items-center">
						<div class="mr-2">
							<!-- Icon -->
							<img width="30" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/parts.png">
						</div>
						<div>
							<p class="text-blue-dark font-fat">
								10M+ PARTS MADE
							</p>
						</div>
					</div>
					<div class="w-10"></div>
					<div class="flex items-center">
						<div class="mr-2">
							<!-- Icon -->
							<img width="30" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clock.png">
						</div>
						<div>
							<p class="text-blue-dark font-fat">
								PARTS AS FAST AS 24 HRS
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php 

	$args = array(
		'post_type' => 'cpt_tools',
		'posts_per_page' => 4
	);

	$tools = new WP_Query( $args );

	if ( $tools->have_posts() ) :
	
?>
<section class="bg-white">
	<div class="container">
		<div class="flex -mx-4 relative" style="top: -60px">
			<?php 

				while ( $tools->have_posts() ) :
					$tools->the_post();
				
			?>
			<div class="w-1/4  block-link px-4 ">
				<div class="shadow relative">
					<a href="<?php the_permalink(); ?>" class="w-full h-full absolute inset-0"></a>
					<div class="w-full ">
						<img class="object-fit inline-block" src="<?php the_post_thumbnail_url(); ?>">
					</div>
					<div class="text-center p-4">
						<div class="mb-2">
							<p class="font-fat text-18 text-blue-dark uppercase">
								<?php 
									the_title();
								?>
							</p>
						</div>
						
						<div class="mb-2 h-20">
							<p class="text-blue-dark">
								<?php 
									echo get_the_excerpt();
								?>
							</p>
						</div>
						<div>
							<p class="text-blue-light underline font-bold">Learn more</p>
						</div>
					</div>
				</div>
				
			</div>

			<?php 
				endwhile;
			?>

			
			
		</div>
		<div class="flex justify-center pb-10">
			<div class="flex items-center text-center relative">
				<a href="<?php echo get_post_type_archive_link('cpt_capabilities') ?>" class="w-full absolute inset-0"></a>
				<div class="mr-2">
					<!-- Icon -->
					<img width="30" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right-circle.png">
				</div>
				
				<div>
					
					<p class="text-16 font-fat uppercase text-blue-dark">
						see our full capabilies
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
	endif;
?>
<section class="section-half bg-blue-dark">
	<div class="container">
		<div class="flex justify-center">
			<div class="flex items-center">
				<div class="mr-2">
					<!-- Forbed Logo -->
					<img width="100" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/forbes.png">
				</div>
				<div>
					<h3 class="text-white text-20">
						"The Airbnb of Manufacturing..."
					</h3>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section bg-white">
	<div class="container">
		<div class="text-center mb-4">
			<p class="text-blue-light text-18 uppercase font-fat">fictiv digital manufacturing</p>	
		</div>
		<div class="text-center mb-8">
			<h2 class="text-blue-dark font-fat text-48">
				EVERYTHING IN ONE PLACE
			</h2>
		</div>
		<div class="flex justify-center flex-col items-center">
			<div class="w-3/5">
				<div class="instant-pricing ">
					<img alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/instant-pricing.png">
				</div>
			</div>
			<div class="flex mb-8">
				<div class="mx-2">
					<a href="" class="btn-rounded btn-rounded-primary opacity-100">Instant Pricing</a>
				</div>
				<div class="mx-2">
					<a href="" class="btn-rounded btn-rounded-primary opacity-25">DFM Feedback</a>
				</div>
				<div class="mx-2">
					<a href="" class="btn-rounded btn-rounded-primary opacity-25">Order Tracking</a>
				</div>
			</div>
			<div class="flex items-center text-center relative">
				<a href="#" class="w-full absolute inset-0"></a>
				<div class="mr-2">
					<!-- Icon -->
					<img width="25" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/carat-right-circle.svg">
				</div>
				
				<div>
					
					<p class="text-blue-light font-semibold">
						Learn more about our platform
					</p>
				</div>
			</div>
		</div>
		
		
	</div>
</section>

<section class="bg-gray-100 section-half">
	<div class="container">
		<div class="text-center mb-4">
			<p class="text-blue-dark text-18 uppercase font-fat">TRUSTED BY FAST-MOVING TEAMS</p>	
		</div>
		<div class="flex justify-center items-center">
			<div class="px-4">
				<img width="50" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/nasa-jpl.png">
			</div>
			<div class="px-4">
				<img width="50" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/ideo.png">
			</div>
			<div class="px-4">
				<img width="50" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/panavision.png">
			</div>
			<div class="px-4">
				<img width="50" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/velodyne.png">
			</div>
			<div class="px-4">
				<img width="50" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/ford.png">
			</div>
		</div>
	</div>
</section>

<section class="section bg-white">
	<div class="container">
		<div class="flex">
			<div class="w-1/2"></div>
			<div class="w-1/2">
				<div>
					<!-- Logo -->
				</div>
				<div class="mb-4">
					<p class="text-blue-light text-18 uppercase font-fat">customer stories</p>	
					
				</div>
				<div class="mb-4">
					<p class="text-blue-dark text-36 font-fat">"Fictiv was able to get our mold up and running within four weeks, whereas other partners were taking eight weeks just to get first-off tool parts."</p>
				</div>
				<div class="mb-4">
					<p>
						- Bill May, Co-founder & COO, quip
					</p>
				</div>
				<div class="mb-8">
					<a href="" class="btn btn-secondary">read case study</a>
				</div>
				<div class="flex justify-start items-center">
					<div class="flex items-center">
						<div class="mr-2">
							<!-- Icon -->
							<img width="30" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/parts.png">
						</div>
						<div>
							<p class="text-blue-dark font-fat">
								INJECTION MOLDING
							</p>
						</div>
					</div>
					<div class="w-10"></div>
					<div class="flex items-center">
						<div class="mr-2">
							<!-- Icon -->
							<img width="30" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clock.png">
						</div>
						<div>
							<p class="text-blue-dark font-fat">
								4 WEEKS
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section relative">
	<div class="absolute w-full h-full inset-0">
		<div class="flex h-full w-full">
			<div class="w-1/2 h-full bg-blue-dark"></div>	
			<div class="w-1/2 h-full bg-teal-light"></div>
		</div>
	</div>
	<div class="container relative">
		<div class="flex justify-between">
			<div class="w-5/12">
				<div class="mb-4">
					<p class="text-white text-18 uppercase font-fat">live webinar</p>	
				</div>
				<div class="mb-4">
					<p class="text-white text-36 font-fat">The Hidden Costs of Supply Chain Unpredictability</p>
				</div>
				<div class="mb-4">
					<p class="text-white text-20">
						March 12 at 10am PST
					</p>
				</div>
				<div>
					<a href="" class="btn btn-secondary">register now</a>
				</div>
			</div>
			<div class="w-5/12">
				<div class="mb-4">
					<p class="text-white text-18 uppercase font-fat">live webinar</p>	
				</div>
				<div class="mb-4">
					<p class="text-white text-36 font-fat">Get smart on injection molding</p>
				</div>
				<div class="mb-4">
					<p class="text-blue-dark text-20">
						A collection of industry best practices including; recommended wall thickness, boss design, and gate types.
					</p>
				</div>
				<div>
					<a href="" class="btn btn-secondary">register now</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	get_template_part('partials/footer', 'cta');

	get_footer();
?>