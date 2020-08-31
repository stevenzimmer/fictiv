<?php 
	get_header();
?>
<header class="py-12 relative homepage-hero">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/homepage-hero.jpg'; ?>)"></div>
	<div class="bg-black absolute w-full h-full inset-0 opacity-50 lg:hidden"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				<div class="text-center">
					<div class="mb-6">
						<h1 class="text-white font-museo-900 leading-none text-29 md:text-48">
							YOUR GO-TO PARTNER FOR PRECISION PARTS AT THE SPEED OF DIGITAL
						</h1>
					</div>
					<div class="mb-6">
						<p class="text-white  md:text-20 ">
							Fictiv’s Digital Manufacturing Ecosystem is the go-to destination for engineers and supply chain managers who need high tolerance mechanical parts at unprecedented speeds.
						</p>
					</div>
					<div>
						<a href="https://app.fictiv.com/signup" class="btn btn-primary">get a quote</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="py-40"></div>
	<div class="absolute w-full bottom-0 pb-12">
		<div class="container flex justify-center">
			<div class="flex flex-col md:flex-row justify-around md:w-full">
				
				<div class="flex items-center mb-4 md:mb-0">
					<div class="mr-2 svg">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/parts.svg');
						?>
					</div>
					<div class="w-full">
						<p class="text-white font-museo-900 uppercase leading-tight">
							10 MILLION + <br>PARTS MADE
						</p>
					</div>
				</div>
				<div class="flex items-center relative mb-4 md:mb-0">
					<a class="absolute w-full h-full inset-0" href="https://docsend.com/view/fwev6a8jj6zd59rq"></a>
					<div class="mr-2 svg">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/iso.svg');
						?>
					</div>
					<div class="w-full">
						<div>
							<p class="text-white font-museo-900 uppercase leading-tight">
							iso 9001</p>
						</div>
						<div class="flex items-center">
							<div class="mr-2">
								<p class="text-white font-museo-900 uppercase leading-tight">
								certified </p>
							</div>
							<div>
								<svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.76726 4.58926C10.0776 4.26382 10.0776 3.73618 9.76726 3.41074L6.79373 0.244078C6.48338 -0.0813592 5.9802 -0.0813592 5.66985 0.244078C5.3595 0.569515 5.3595 1.09715 5.66985 1.42259L7.28673 3.16667L0.794705 3.16667C0.355801 3.16667 0 3.53976 0 4C0 4.46024 0.355801 4.83333 0.794705 4.83333H7.28673L5.66985 6.57741C5.3595 6.90285 5.3595 7.43049 5.66985 7.75592C5.9802 8.08136 6.48338 8.08136 6.79373 7.75592L9.76726 4.58926Z" fill="white"></path>
								</svg>
							</div>
						</div>
					
					</div>
				</div>

				<div class="flex items-center relative">
					<div class="mr-2 svg">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/guarantee.svg');
						?>
					</div>
					<div class="w-full">
						<p class="text-white font-museo-900 uppercase leading-tight">
							FICTIV INSPECTIONS <br>ON EVERY PART
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<header class="py-40 relative hidden">
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
<section class="pt-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-9/12">
				<div class="text-center">
					<h2 class="text-blue-dark font-museo-900 uppercase text-36 md:text-48 mb-2">
						DISCOVER THE FICTIV DIFFERENCE
					</h2>
					<p>
						Partnering with Fictiv means quality you can rely on and production speeds that hit your deadlines — made possible by the unique combination of a technology-backed platform, the highest quality partners, and people with boots-on-the-ground to ensure quality.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="py-20">
	<div class="container relative">
		<div class="flex flex-wrap flex-col-reverse lg:flex-row-reverse justify-center lg:justify-start items-center -mx-6">
			<div class="w-11/12 lg:w-6/12 px-6">
				<div class="mb-4se">
					<h2 class="text-blue-dark font-museo-900 text-20 md:text-36">
						Digital Platform
					</h2>
				</div>
				<div class="mb-6">
					<p class="text-14 md:text-16">
						Our digital quote-to-order platform gives you manufacturing data at your fingertips, so you can make faster decisions and stay connected every step of the way.
					</p>
				</div>
				<div>
					<a class="btn btn-secondary" href="/our-platform/">learn more</a>
				</div>
			</div>
			<div class="w-full lg:w-6/12 px-6">
				<img class="lazyload w-full" alt="Instant Pricing thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/homepage-illo-top.png">
				
			</div>
		</div>
	</div>
</section>


<section class="py-20">
	<div class="container relative">
		<div class=" relative lg:absolute w-full h-full top-0 right-0 -z-1">
			<div class="flex justify-end">
				<div class="w-full lg:w-8/12">
					<img class="lazyload w-full" alt="Instant Pricing thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/homepage-illo-middle.png">
					
				</div>
			</div>
			
		</div>


		<div class="flex flex-wrap flex-col-reverse lg:flex-row justify-center lg:justify-start items-center -mx-6">
			<div class="w-11/12 lg:w-6/12 px-6">
				<div class="mb-4">
					<h2 class="text-blue-dark font-museo-900 text-20 md:text-36">
						Partner Network
					</h2>
				</div>
				<div class="mb-6">
					<p class=" text-14 md:text-16">
						Our highly vetted global partner network gives you access to a wide breadth of capabilities, at the highest quality standards, through a single access point.
					</p>
				</div>
				<div>
					<a class="btn btn-secondary" href="/our-network/">learn more</a>
				</div>
			</div>
			
		</div>
		
	</div>
</section>

<section class="py-20 hidden lg:block"></section>
<section class="py-20">
	<div class="container relative">
		<div class="flex flex-wrap flex-col-reverse lg:flex-row-reverse justify-center lg:justify-start items-center -mx-6">
			<div class="w-11/12 lg:w-6/12 px-6">
				<div class="mb-4">
					<h2 class="text-blue-dark font-museo-900 text-20 md:text-36">
						People on the Ground
					</h2>
				</div>
				<div class="mb-6">
					<p class=" text-14 md:text-16">
						Fictiv employs skilled engineers and program managers to inspect parts at the factory floor, provide guided DFM expertise, and keep your production schedules on track.
					</p>
				</div>
				<div>
					<a class="btn btn-secondary" href="/our-people/">learn more</a>
				</div>
			</div>
			<div class="w-full lg:w-6/12 px-6">
				<img class="lazyload w-full" alt="Instant Pricing thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/homepage-illo-bottom.png">
				
			</div>
		</div>
	</div>
</section>


<?php 

	$args = array(
        'post_type' => array('page'),
        'tax_query' => array(
            array(
                'taxonomy' => 'fictiv_page_type',
                'field' => 'slug',
                'terms' => 'capabilities'
            )
        )     
    );

	$services = new WP_Query( $args );

	if ( $services->have_posts() ) :
	
?>
<section class="bg-white pb-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				
				<h2 class="text-blue-dark font-museo-900 uppercase text-36 md:text-48 mb-4 text-center">
					our capabilities
				</h2>
				<div class="flex flex-wrap justify-center -mx-2 relative">

					<?php 

						while ( $services->have_posts() ) :
							$services->the_post();
						
					?>
					<div class="w-11/12 md:w-1/2 lg:w-1/4  block-link px-2 ">
						<div class="relative shadow group">
							<a href="<?php the_permalink(); ?>" class="w-full h-full absolute inset-0"></a>
							<div class="w-full bg-white p-6">
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
<section class="bg-grey-100 py-20">
	<div class="container">
		<div class="text-center mb-6">
			<h2 class="text-blue-dark font-museo-900 uppercase text-36 md:text-48 text-center">
				FICTIV POWERS OVER 2,500 COMPANIES
			</h2>
			<p>
				We’ve manufactured over 10M mechanical parts for our customers’ prototyping and NPI applications
			</p>
		</div>
		<div class="flex flex-wrap justify-center lg:justify-start -mx-2 mb-12">
			<?php 
				$companies = array(
					array(
						'logo' => 'nasa',
						'quote' => '“Having 24/7 visibility and access to the real-time schedule of things is a game-changer.”',
						'headshot' => 'antonio-ruiz',
						'name' => 'Antonio Ruiz',
						'title' => 'Supervisor, Strategic Sourcing'
					),

					array(
						'logo' => 'lyft',
						'quote' => '“Fictiv’s streamlined end-to-end process captures the entire value chain from design upload through DFM with real-time pricing. Impressive stuff.”',
						'headshot' => 'ibrahim-toukan',
						'name' => 'Ibrahim Toukan',
						'title' => 'Head of Level 5 Supply Chain<br>Autonomous Vehicle Devision'
					),

					array(
						'logo' => 'rise-robotics',
						'quote' => '“Having all our data updating live in one centralized place — part by part, order by order — is incredible.”',
						'headshot' => 'blake-sessions',
						'name' => 'Blake Sessions',
						'title' => 'Director of R&D'
					),
				);

				foreach ($companies as $i => $company ) :
			?>
			<div class="w-11/12 lg:w-1/3 px-2 mb-6 lg:mb-0 last:mb-0">
				<div class="bg-white text-center px-6 py-6 pb-10">
					<div class="mb-4 lg:h-20 flex items-center">
						<img width="80" class="lazyload  mx-auto" alt="<?php echo $company['logo']; ?> logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/<?php echo $company['logo']; ?>.png">
					</div>
					<div class="lg:h-28">
						<p class="text-14">
							<?php echo $company['quote']; ?>
						</p>
					</div>
				</div>
				<div class="text-center -mt-10">
					<div class="mb-4">
						<img width="80" class="lazyload rounded-full mx-auto" alt="<?php echo $company['name']; ?> headshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headshots/<?php echo $company['headshot']; ?>.jpg">
					</div>
					<div>
						<div>
							<p class="font-museo-700 text-14">
								<?php echo $company['name']; ?>
							</p>
							<p class="text-14">
								<?php echo $company['title']; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php
				endforeach;
			?>
		</div>
		<div class="flex flex-wrap justify-center items-center">
			
			<?php 
				$logos_grey = array(
					array(
						'size' => 100,
						'slug' => 'intuitive-surgical'
					),

					array(
						'size' => 60,
						'slug' => 'facebook'
					),

					array(
						'size' => 80,
						'slug' => 'ford'
					),

					array(
						'size' => 60,
						'slug' => 'ideo'
					),

					array(
						'size' => 80,
						'slug' => 'quip'
					)

				);

				foreach ( $logos_grey as $i => $logo ) :

			?>
			<div class="w-1/2 md:w-1/3 lg:w-1/5 mb-6 ">
				<img width="<?php echo $logo['size'] ?>" class="lazyload mx-auto" alt="<?php echo $logo['slug'] ?> logo grey" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/<?php echo $logo['slug']; ?>-grey.png">
			</div>
			<?php
				endforeach
			?>
		</div>
	</div>
</section>


<?php 
	$modules = array(
		array(
			'name' => 'Instant Pricing',
			'vimeo_id' => 452393739
		),

		array(
			'name' => 'DFM Feedback',
			'vimeo_id' => 452393880
		),

		array(
			'name' => 'Order Tracking',
			'vimeo_id' => 452393900
		),
	);

?>
<section class="section bg-white">
	<div class="container">
		<div class="text-center mb-4">
			<p class="text-blue-light text-18 uppercase font-museo-900">fictiv digital manufacturing</p>	
		</div>
		<div class="text-center mb-6">
			<h2 class="text-blue-dark font-museo-900 text-36 md:text-48">
				EVERYTHING IN ONE PLACE
			</h2>
		</div>
		<div class="flex justify-center flex-col items-center">
			<div class="w-full toggle-module-wrapper">
				<?php 
					

					foreach ( $modules as $i => $module ) :
					
				?>
				<div data-toggle-module="manufacturing-module-<?php echo $i; ?>" class="relative toggle-module <?php 

					if( $i !== 0 ) :

						echo 'hidden';

					endif;
				?>">
	
					<div class="relative h-0" style="padding-bottom: 56.25%">
				
						<iframe class="absolute w-full h-full inset-0 object-cover lazyload" data-src="https://player.vimeo.com/video/<?php echo $module['vimeo_id']; ?>?quality=1080p&autoplay=1&muted=1&loop=1&autopause=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					
					</div>
					
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
<section class="section-half bg-grey-100">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-10/12">
				<div class="flex flex-wrap">
					<div class="w-full lg:w-1/4 ">
						<!-- IDC Logo -->
						<img class="lazyload w-full" width="200" alt="IDC Logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/idc-case-study-logo.png">
					</div>
					<div class="w-full lg:w-3/4">
						<h3 class="text-blue-dark text-24">
							"The use of a quote-to-order platform makes sourcing and the supply chain less vulnerable to disruptions"
						</h3>
						<p class="mb-4">
							— Head of IDC Manufacturing Insights Jan Burian, IDC EMEA
						</p>
						<a href="/resources/idc-case-study-digital-quote-to-order" class="btn btn-secondary">read case study</a>
					</div>
				</div>
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