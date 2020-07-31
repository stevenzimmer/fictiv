<?php 
	get_header();
?>

<header class="py-40 relative">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/homepage-hero.jpg'; ?>)"></div>
	<div class="bg-white absolute w-full h-full inset-0 opacity-50 lg:hidden"></div>
	<div class="container relative">
		<div class="flex justify-center lg:justify-start">
			<div class="w-11/12 lg:w-6/12">
				<div class="mb-4">
					<h1 class="uppercase text-blue-dark font-museo-900 leading-none text-29 md:text-h1 ">
						MANUFACTURING AGILITY MADE POSSIBLE
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
				<div class="flex items-center justify-start flex-wrap -mx-6">
					<div class="flex items-center w-full mb-6 md:mb-0 md:w-1/2 xl:w-1/3 px-6 mb-0">
						<div class="mr-2">
							<!-- Icon -->
							<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/parts.png">
						</div>
						<div>
							<p class="text-blue-dark font-museo-900 uppercase text-14">
								10M+ PARTS MADE
							</p>
						</div>
					</div>
					<div class="flex items-center w-full md:w-1/2 xl:w-5/12 px-6">
						<div class="mr-2">
							<!-- Icon -->
							<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clock.png">
						</div>
						<div>
							<p class="text-blue-dark font-museo-900 uppercase text-14">
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
        'post_type' => array('page'),
        'tax_query' => array(
            array(
                'taxonomy' => 'fictiv_page_type',
                'field' => 'slug',
                'terms' => 'services'
            )
        )     
    );

	$services = new WP_Query( $args );

	if ( $services->have_posts() ) :
	
?>
<section class="bg-white">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				
			
				<div class="flex flex-wrap justify-center -mx-2 relative" style="top: -60px">

					<?php 

						while ( $services->have_posts() ) :
							$services->the_post();
						
					?>
					<div class="w-11/12 md:w-1/2 lg:w-1/4  block-link px-2 ">
						<div class="relative shadow group">
							<a href="<?php the_permalink(); ?>" class="w-full h-full absolute inset-0"></a>
							<div class="w-full bg-white p-4">
								<img class="lazyload w-full" class=" inline-block" data-src="<?php the_post_thumbnail_url(); ?>">
							</div>
							<div class="text-center p-4">
								<div class="mb-2 h-12">
									<p class="font-museo-900 text-18 text-blue-dark uppercase">
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
									<p class="text-blue-light underline font-bold group-hover:text-red-dark">Learn more</p>
								</div>
							</div>
						</div>
					</div>

					<?php 
						endwhile;
					?>

				</div>
				<div class="flex justify-center pb-10 hidden">
					<div class="flex items-center text-center relative group">
						<a href="<?php echo get_post_type_archive_link('cpt_capabilities') ?>" class="w-full absolute inset-0"></a>
						<div class="mr-2">
							<!-- Icon -->
							<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right-circle.png">
						</div>
						
						<div>
							
							<p class="text-14 font-museo-900 text-14 uppercase text-blue-dark group-hover:text-red-dark">
								see our full capabilies
							</p>
						</div>
					</div>
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
			<div class="flex items-end">
				<div class="mr-8">
					<!-- Forbed Logo -->
					<img class="lazyload" width="100" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/forbes.png">
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

<?php 
	$modules = array(
		array(
			'name' => 'Instant Pricing',
			'dots' => array(
				array(
					'position' => 'left',
					'text' => 'Easily upload native CAD & 2D drawings'
				),
				array(
					'position' => 'right',
					'text' => 'Skip the emails and let us know your exact project needs'
				),
				array(
					'position' => 'right',
					'text' => 'Get a quote for your project instantly'
				),
			)
		),

		array(
			'name' => 'DFM Feedback',
			'dots' => array(
				array(
					'position' => 'left',
					'text' => 'Get in-context feedback with our cloud-based 3D viewer'
				),
				array(
					'position' => 'right',
					'text' => 'Review manufacturing recommendations and warnings'
				),
				array(
					'position' => 'right',
					'text' => 'Respond or upload revisions on the spot'
				),
			)
		),

		array(
			'name' => 'Order Tracking',
			'dots' => array(
				array(
					'position' => 'left',
					'text' => 'Track multiple orders in one place'
				),
				array(
					'position' => 'right',
					'text' => 'See exactly where your project is in the production process'
				),
				
			)
		),
	);

?>
<section class="section bg-white">
	<div class="container">
		<div class="text-center mb-4">
			<p class="text-blue-light text-18 uppercase font-museo-900">fictiv digital manufacturing</p>	
		</div>
		<div class="text-center mb-8">
			<h2 class="text-blue-dark font-museo-900 text-29 md:text-48">
				EVERYTHING IN ONE PLACE
			</h2>
		</div>
		<div class="flex justify-center flex-col items-center">
			<div class="w-full md:w-3/5 toggle-module-wrapper">
				<?php 
					

					foreach ( $modules as $i => $module ) :
					
				?>
				<div data-toggle-module="manufacturing-module-<?php echo $i; ?>" class="relative toggle-module <?php 

					if( $i !== 0 ) :

						echo 'hidden';

					endif;
				?>">
					<img alt="<?php echo $module['name'] ?> screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/<?php echo str_replace(' ', '-', strtolower($module['name']) ); ?>.png">
					<?php 
						foreach( $module['dots'] as $k => $dot ) :
					?>
					<div class="absolute hidden md:block module-<?php echo str_replace(' ', '-', strtolower($module['name']) ); ?>-<?php echo $k + 1; ?> w-48">
						<div class="flex items-center <?php 
							if( $dot['position'] !== 'left' ) :
								echo 'flex-row-reverse';
							endif;
						?>">

							<div class="<?php 
								if( $dot['position'] === 'left') :
									echo 'mr-2';
								endif;
							?>">
								<p class="text-14 leading-tight text-blue-dark font-museo-500">
									<?php 
										echo $dot['text'];
									?>
								</p>
							</div>
							<div class="flex items-center <?php 
							if( $dot['position'] !== 'left' ) :
								echo 'flex-row-reverse';
							endif;
						?> <?php 
								if( $dot['position'] === 'right') :
									echo 'mr-2';
								endif;
							?>">
								<div class="w-8 border-b-2 border-blue-dark"></div>
								<div class="w-3 h-3 rounded-full border-2 border-blue-dark"></div>
							</div>
							
						</div>
						
					</div>

					<?php 
						endforeach;
					?>

					
				</div>
				<?php 
					endforeach;
				?>

				
			</div>
			<div class="flex mb-8 flex-wrap justify-center md:justify-start toggle-btns-wrappper">
			<?php 

				foreach ( $modules as $i => $module ) :
				
			?>

				<a href="#manufacturing-module-<?php echo $i; ?>" class="btn-rounded btn-rounded-primary module-toggle-btn inline-btn mb-6 md:mb-0 <?php 

					if( $i === 0 ) :
				
						echo 'active';

					endif;

				?> hover:opacity-100 transition-opacity duration-200 ease-in-out mx-2"><?php echo $module['name']; ?></a>
			
			<?php 
				endforeach;
			?>
				
			</div>
			<div class="flex items-center text-center relative group">
				<a href="/our-platform/" class="w-full absolute inset-0 "></a>
				<div class="mr-2">
					<!-- Icon -->
					<img class="lazyload" width="25" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/carat-right-circle.svg">
				</div>
				
				<div>
					
					<p class="text-blue-light font-semibold group-hover:text-red-dark">
						Learn more about our platform
					</p>
				</div>
			</div>
		</div>
		
	</div>
</section>

<section class="bg-grey-100 section-half">
	<div class="container">
		<div class="text-center mb-4">
			<p class="text-blue-dark text-18 uppercase font-museo-900">TRUSTED BY FAST-MOVING TEAMS</p>	
		</div>
		<div class="flex justify-center items-center">
			<div class="px-4">
				<img class="lazyload" width="50" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/nasa-jpl.png">
			</div>
			<div class="px-4">
				<img class="lazyload" width="50" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/ideo.png">
			</div>
			<div class="px-4">
				<img class="lazyload" width="50" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/panavision.png">
			</div>
			<div class="px-4">
				<img class="lazyload" width="50" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/velodyne.png">
			</div>
			<div class="px-4">
				<img class="lazyload" width="50" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/ford.png">
			</div>
		</div>
	</div>
</section>

<section class="section bg-white">
	<div class="container">
		<div class="flex flex-wrap justify-center lg:justify-between">
			<div class="w-6/12 lg:w-5/12">
				<img class="lazyload" alt="Quip screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/quip-screenshot.jpg">
			</div>
			<div class="w-11/12 lg:w-1/2">
				<div class="mb-4">
					<?php 
						echo file_get_contents( get_template_directory_uri() . '/assets/images/logos/quip-logo.svg');
					?>
				</div>
				<div class="mb-4">
					<p class="text-blue-light text-18 uppercase font-museo-900">customer stories</p>	
					
				</div>
				<div class="mb-4">
					<p class="text-blue-dark text-36 font-museo-900 leading-tight">"Fictiv was able to get our mold up and running within four weeks, whereas other partners were taking eight weeks just to get first-off tool parts."</p>
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
							<p class="text-blue-dark font-museo-900 text-14">
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
							<p class="text-blue-dark font-museo-900 text-14">
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
		<div class="flex-wrap h-full w-full hidden lg:flex">
			<div class="w-full lg:w-1/2 h-full bg-blue-dark"></div>	
			<div class="w-full lg:w-1/2 h-full bg-teal-light"></div>
		</div>
	</div>
	<div class="container relative">
		<div class="flex flex-wrap justify-center lg:justify-between">
			<div class="w-full lg:w-5/12 bg-blue-dark py-20 lg:py-0">
				<div class="flex justify-center w-full">
					<div class="w-11/12 lg:w-full">
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
				</div>
				
			</div>
			<div class="w-full lg:w-5/12 bg-teal-light  py-20 lg:py-0">
				<div class="flex justify-center">
					<div class="w-11/12 lg:w-full">
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
		</div>
	</div>
</section>

<?php

	get_footer();
?>