<?php 
/* 	Template Name: 3D Printing Services
*/ 
	get_header();
?>
<header class="py-24 relative" >
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/3d-printing-header.jpg'; ?>)"></div>
	<div class="bg-white absolute w-full h-full inset-0 opacity-50 lg:hidden"></div>
	<div class="container relative">
		<div class="flex justify-center md:justify-start">
			<div class="w-11/12 md:w-3/4 lg:w-1/2">
				<div class="mb-2">
					<h1 class="text-blue-dark text-h1 uppercase font-museo-900 leading-tight"><?php the_title(); ?></h1>
					
				</div>
				<div class="mb-4">
					<?php 
						$specs = array(
							
							array(
								'icon' => "clock",
								'text' => 'INSTANT QUOTES & DFM FEEDBACK'
							),
							array(
								'icon' => "parts",
								'text' => 'MJF, SLA, POLYJET, SLS, FDM TECHNOLOGIES'
							),

							array(
								'icon' => "calendar",
								'text' => '3D PRINTED PARTS AS FAST AS 24 HOURS'
							)
						);

						foreach ($specs as $i => $spec ) :
				
					?>

					<div class="flex flex-wrap items-center mb-4">
						<div class="mr-2 w-12">

							<!-- Icon -->
							<img width="30" alt="<?php echo strtolower( $spec['text']) ?> icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $spec['icon']; ?>.png">
								
						</div>
						
						<div>
							<p class="text-blue-dark font-museo-900">
								<?php echo $spec['text']; ?>
							</p>
						</div>
					</div>

					<?php 
						endforeach;
					?>
					
				</div>
				<div>
					<?php primary_button() ?>
				</div>
			</div>
		</div>
	</div>
</header>
<?php 
	$advantages = array(
		array(
			'title' => 'Instant Quotes & Manufacturability Feedback',
			'para' => 'Streamline your workflow with our digital quote-to-order platform. Simply upload your CAD model for instant pricing and DfM feedback.',
			'vimeo_id' => 426767471,
		),



		array(
			'title' => 'Fast Parts from Prototype to Production',
			'para' => 'Our Digital Manufacturing Ecosystem can scale with you, for custom 3D printed parts from prototype to production, with industry leading speeds at every stage.',
			'img' => 'fast-parts.jpg'
		),

		array(
			'title' => 'Online Order Tracking & Management',
			'para' => 'Never worry where your parts are again. With Fictiv you can track production status, reorder parts, and manage your order history in one place.',
			'img' => 'online-order-tracking.png'
		)
	);
?>
<section class="py-20">
	<div class="container">
		<div class="text-center mb-2">
			<h3 class="text-blue-dark uppercase font-museo-900">
				fictiv 3D printing advantages
			</h3>
		</div>
		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
		<div class="flex flex-wrap -mx-4">
			<div class="lg:w-8/12 px-4">
				<div class="toggle-module-wrapper">
					<?php 

						foreach ( $advantages as $i => $advantage ) :
							
					?>
					<div data-toggle-module="3d-printing-advantages-<?php echo $i; ?>" class="toggle-module <?php 
						if( $i !== 0 ) :

							echo 'hidden';

						endif;
					?>">

						<?php 
							if( isset( $advantage['vimeo_id'] ) ) :
						?>
						<div class="relative" style="padding:63.25% 0 0 0">
							<iframe src="https://player.vimeo.com/video/<?php echo $advantage['vimeo_id']; ?>?autoplay=1&amp;muted=1&amp;loop=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
						</div>
					<?php 
							endif;
							if( isset( $advantage['img'] ) ) :
					?>
						<div>
							<img class="lazyload shadow-lg" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/3d-printing-advantage-<?php echo $advantage['img']; ?>">
						</div>
					<?php
							endif;
					?>
					</div>

					<?php 
						endforeach;
					?>
					
				</div>
				
			</div>
			<div class="lg:w-4/12 px-4 toggle-btns-wrapper">
			
				<?php 

					foreach ( $advantages as $i => $advantage ) :
				?>
				
				<a class="p-8 stacked-toggle-module block module-toggle-btn <?php 
				
					if( $i === 0 ) :
						
						echo 'active';
				
					endif;
				
				?>" href="#3d-printing-advantages-<?php echo $i; ?> " >
					<p class="text-blue-dark font-museo-900">
						<?php echo $advantage['title']; ?>
					</p>

					<p><?php echo $advantage['para']; ?></p>
				</a>

				<?php
					endforeach;
				?>
				
			</div>
		</div>
	</div>
</section>

<section class="bg-grey-100 py-20">
	<div class="container">
		<div class="text-center mb-2">
			<h3 class="text-blue-dark uppercase font-museo-900">
				3D printing PROCESSES
			</h3>
		</div>
		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
		<div class="flex flex-wrap justify-center lg:justify-start -mx-2 mb-12">
			<?php 
				$types = array(
						array(
							'img' => "multi-jet-fusion",
							'title' => 'HP Multi Jet Fusion',
							'text' => 'A high resolution, production grade technology',
							'link' => '#'
						),

						array(
							'img' => "sla",
							'title' => 'SLA',
							'text' => 'Ideal for functionally accurate & optically clear parts',
							'link' => '#'
						),

						array(
							'img' => "polyjet",
							'title' => 'polyjet',
							'text' => 'Ideal for visual models or functional prototypes',
							'link' => '#'
						),

						array(
							'img' => "sls",
							'title' => 'SLS',
							'text' => 'Ideal for functional testing, low to mid volumes',
							'link' => '#'
						),

						array(
							'img' => "fdm",
							'title' => 'FDM',
							'text' => 'Low cost process for early stage prototypes',
							'link' => '#'
						),
					);

					foreach ( $types as $i => $type ) :
			?>
			<div class="w-11/12 md:w-1/3 lg:w-1/5 px-2 ">
				<div class="relative group">
					<a href="<?php echo $type['link']; ?>" class="w-full h-full inset-0 absolute z-50"></a>
					<div class="p-4 bg-white mb-2">
						<div class="relative h-0  " style="padding-bottom: 86%">

				            <img class="absolute top-0 left-0 w-full h-full object-cover lazyload" alt="3D Process - <?php echo $type['title']; ?> thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/3d-printing-process-<?php echo $type['img']; ?>.jpg">
				        </div>
					</div>
					
					
					<div class="text-center h-8">
						<p class="text-blue-dark uppercase font-semibold mb-2 font-museo-900">
							<?php 
								echo $type['title'];
							?>
						</p>
					</div>
					<div class="text-center h-12 px-4">
						<p class="text-blue-dark text-14">
							<?php 
								echo $type['text'];
							?>
						</p>
					</div>
						
					<div class="text-center">
						<p class="text-14 text-blue-light underline font-semibold group-hover:text-red-dark font-museo-700">Learn more</p>
					</div>
				</div>
				
			</div>
			<?php 
				endforeach;
			?>
		</div>
		<div class="flex justify-center">
			<div class="md:w-7/12">
				<div class="flex relative justify-center group">
					<a href="https://docsend.com/view/x5p7z944zr2ghz93" class="absolute w-full h-full inset-0"></a>
					<div class="mr-2">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/download.svg');
						?>
					</div>
					<div>
						<p class="text-blue-light text-16 group-hover:text-red-dark">Download 3D Printing Service Capabilities & Solutions PDF</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

<?php 
	$materials = array(
		array(
			'name' => 'ABS',
			'para' => 'ABS is a plastic material that\'s great for mechanical strength and early stage rough prototypes. ABS is a cost-effective material for initial prototyping applications, and with post-processing options it can offer better surface finish than PLA.',
			'colors' => 'Black, white, neutral',
			'resolution' => '0.25mm',
			'cost' => '$$',
			'process' => 'Fused Deposition Modeling (FDM)',
			'link' => '/capabilities/materials/3d-printed-abs/'
		),
		array(
			'name' => 'ABS-like',
			'para' => 'ABS-like is our closest representation of injection molded ABS in a 3D printed material. It has the same high resolution appearance as VeroWhite, but the material is much stronger and more durable.',
			'colors' => 'Off-white',
			'resolution' => '0.016mm',
			'cost' => '$$$$',
			'process' => 'PolyJet',
			'link' => '/capabilities/materials/3d-printed-abs-like/'
		),

		array(
			'name' => 'Accura 25',
			'para' => 'Accura 25 is a durable and flexible SLA 3D printing material. It’s ideal for snap-fit part designs, as a master pattern for urethane casting, and conceptual modeling. Accura 25 can be used for functional prototyping or end-use parts and has excellent resolution, dimensional accuracy, and can be primed and painted after printing.',
			'colors' => 'White',
			'resolution' => '0.1mm',
			'cost' => '$$$',
			'process' => 'Stereolithography (SLA)',
			'link' => '/capabilities/materials/accura-25/'
		),

		array(
			'name' => 'Accura ClearVue',
			'para' => 'Accura ClearVue is a translucent material with a good balance of aesthetic and physical properties. Accura ClearVue with Clear Coat can achieve the highest level of transparency out of our material offerings. It’s the most suitable for high clarity applications, like optics, packaging, and visualization models or assemblies.',
			'colors' => 'Clear (colorless)',
			'resolution' => '0.1mm',
			'cost' => '$$$',
			'process' => 'Stereolithography (SLA)',
			'link' => '/capabilities/materials/accura-25/'
		),

		array(
			'name' => 'Nylon (SLS)',
			'para' => 'Selective Laser Sintering (SLS) Nylon is a synthetic 3D printed polymer material that’s strong, durable and also has some flex to it. As a result, Nylon is a great material choice for snap fits, brackets, clips, and spring features. SLS Nylon is most cost effective in lower quantities compared with MJF Nylon.',
			'colors' => 'White, black',
			'resolution' => '0.1mm',
			'cost' => '$$$',
			'process' => 'Selective Laser Sintering (SLS)',
			'youtube' => '#',
			'link' => '/capabilities/materials/3d-printed-nylon/'
		),

		array(
			'name' => 'PA 12',
			'para' => 'PA 12 has excellent flexural strength and heat deflection properties and is a great choice for both end-use production parts and functional prototypes. PA 12 is also available with 40% glass bead fill for a higher degree of stiffness and dimensional stability.',
			'colors' => 'Grey, black',
			'resolution' => '0.08mm',
			'cost' => '$$$',
			'process' => 'HP® Multi Jet Fusion',
			'link' => '/capabilities/materials/3d-printed-nylon/'
		),

		array(
			'name' => 'PETG',
			'para' => 'PETG (Polyethylene terephthalate glycol) is a useful 3D printing material for mechanical early-stage prototypes. It’s a great option that merges the cost-effectiveness of PLA and functionality of ABS. Although not ideal for aesthetics, this material is known for its impact resistance, warpage resistance, low shrinkage rate and high head deflection temperature.',
			'colors' => 'Black, white, neutral',
			'resolution' => '0.2mm',
			'cost' => '$$',
			'process' => 'Fused Deposition Modeling (FDM)',
			'link' => '/capabilities/materials/pet-g/'
		),

		array(
			'name' => 'PLA',
			'para' => 'PLA is a great 3D printing material for early stage prototyping on simple geometry parts, made out of biodegradable corn starch. Because this material is relatively cheap, you can cost effectively 3D print multiple iterations of an early stage part design.',
			'colors' => 'Neutral, white, black, blue, red, orange, green, pink, aqua',
			'resolution' => '0.2mm',
			'cost' => '$',
			'process' => 'Fused Deposition Modeling (FDM)',
			'link' => '/capabilities/materials/pet-g/'
		),

		array(
			'name' => 'Rubber-like',
			'para' => 'Rubber-like is one of the unique printing capabilities of PolyJet machines because of the PhotoPolymer resin used in this style of printing. The prints will give you full flexibility of parts and allow you to simulate rubbers between Shore 27A and Shore 90A.',
			'colors' => 'Black',
			'resolution' => '0.16mm',
			'cost' => '$$$$',
			'process' => 'PolyJet',
			'link' => '/capabilities/materials/rubber-like/'
		),

		array(
			'name' => 'Vero',
			'para' => 'Vero is a high resolution 3D printing material that\'s excellent for checking your prototype\'s fit and accuracy. With its 16 micron resolution, this material works great for visual models, especially if they require painting.',
			'colors' => 'White, Black',
			'resolution' => '0.016mm (White), 0.03mm (Black)',
			'cost' => '$$$',
			'process' => 'PolyJet',
			'link' => '/capabilities/materials/vero/'
		),

		array(
			'name' => 'VeroClear',
			'para' => 'VeroClear is a quick-turn translucent material, fabricated using PolyJet 3D printing technology. It works great to replicate clear parts or create light pipes which need to diffuse light over a distance.',
			'colors' => 'Clear',
			'resolution' => '0.016mm',
			'cost' => '$$$',
			'process' => 'PolyJet',
			'link' => '/capabilities/materials/veroclear/'
		),
	);
?>
<section class="section">
	<div class="container">
		<div class="text-center mb-2">
			<h3 class="text-blue-dark uppercase font-museo-900">
				3D printing materials
			</h3>
		</div>
		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
		<div class="flex flex-wrap mb-8 justify-around toggle-btns-wrapper">
			<?php 

				foreach ( $materials as $i => $material ) :
				
			?>
			<a class="inline-block module-toggle-btn inline-link mx-4  <?php if( $i === 0 ) : echo 'active'; endif; ?> pb-2 border-b-2 border-transparent transition-colors duration-200 ease-in-out" href="#3d-printing-material-<?php echo $i; ?>"><?php echo $material['name']; ?></a>
			<?php 
				endforeach;
			?>
		</div>
		<div class="mb-12 toggle-module-wrapper">
			<?php 
				foreach ( $materials as $i => $material ) :
			?>
			<div data-toggle-module="3d-printing-material-<?php echo $i; ?>" class="toggle-module <?php 

					if( $i !== 0 ) :

						echo 'hidden';

					endif;
				?>">
				<div class="flex flex-wrap justify-center md:justify-between">
					<div class="w-11/12 md:w-5/12">
						<div class="mb-4">
							<h3 class="font-museo-900 text-blue-dark text-48">
								<?php echo $material['name']; ?>
							</h3>
						</div>
						<div class="mb-4">
							<p>
								<?php echo $material['para']; ?>
							</p>
						</div>
						<div>
							<p class="mb-2">
								<strong>Colors: </strong> <?php echo $material['colors']; ?>
							</p>
							<p class="mb-2">
								<strong>Resolution: </strong> <?php echo $material['resolution']; ?>
							</p>
							<p class="mb-2">
								<strong>Cost: </strong> <?php echo $material['cost']; ?>
							</p>
							<p class="mb-2">
								<strong>Process: </strong> <?php echo $material['process']; ?>
							</p>
						</div>
						<div>
							<a class="text-teal-light hover:text-red-dark" href="<?php echo $material['link']; ?>">Learn more</a>
						</div>
					</div>
					<div class="w-full md:w-1/2">
						<img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/3d-printing-material-<?php echo str_replace(' ', '-', strtolower( $material['name'] ) ); ?>.jpg">
					</div>
				</div>
			</div>
			<?php 
				endforeach;
			?>
		</div>
		<div class="flex justify-center">
			<div class="md:w-7/12">
				<div class="flex relative justify-center group">
					<a href="https://docsend.com/view/f47wywr3bywj2gw4" class="absolute w-full h-full inset-0"></a>
					<div class="mr-2">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/download.svg');
						?>
					</div>
					<div>
						<p class="text-blue-light text-16 group-hover:text-red-dark">Download 3D Printing Material Datasheet</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<section class="py-24 bg-grey-100">
	<div class="container">
		<div class="flex flex-wrap justify-center md:justify-between items-stretch">
			<div class="md:w-3/12 mb-6 md:mb-0">

				<img class="lazyload" alt="Quip screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/quip-screenshot.jpg">
			</div>
			<div class="w-11/12 md:w-8/12">
				<div class="mb-6">
					<?php 
						echo file_get_contents( get_template_directory_uri() . '/assets/images/logos/quip-logo.svg');
					?>
				</div>
				<div>
					<h3 class="mb-4 text-blue-dark font-museo-900 leading-tight text-36">
						“Getting high fidelity 3D prints from Fictiv turned around the next day through their online portal was really critical to validating our design decisions.”
					</h3>
					<p class="font-semibold">
						Bill May
					</p>
					<p 	class="text-grey-dark">Quip, Co-founder and COO</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-24">
	<div class="container">
		<div class="text-center mb-12">
			<p class="uppercase text-blue-light font-museo-900">
				3D PRINTING SOLUTIONS
			</p>
			<h3 class="text-blue-dark uppercase text-36 font-museo-700">
				FROM PROTOTYPE TO PRODUCTION
			</h3>
		</div>
		<div class="flex flex-wrap justify-center md:justify-start -mx-6 mb-12">
			<?php 
				$features = array(
					array(
						'title' => 'Rapid Form Factor Prototypes',
						'para' => 'Iterate quickly on early stage designs with 3D printed parts delivered as fast as 24 hours.',
						'dots' => array(
							'Technologies: Fused Deposition Modeling (FDM)',
							'Materials: PLA, ABS',
							'Quote time: Instant',
							'Production time: As fast as 1 day'
						)
					),

					array(

						'title' => 'High Resolution Functional Prototypes',
						'para' => 'Get high quality precision prototypes to test functional builds.',
						'dots' => array(
							'Technologies: PolyJet, Selective Laser Sintering (SLS), Stereolithography (SLA)',
							'Materials: ABS-like, Nylon 12, Rubber-like, VeroWhite, VeroBlack, VeroClear, Accura 25, Accura ClearVue',
							'Quote time: Instant',
							'Production time: As fast as 1-3 days'
						)
					),

					array(
						'title' => 'Low Volume Production Parts',
						'para' => 'Get your product to market faster with production-quality custom parts manufactured on demand, no expensive tooling required.',
						'dots' => array(
							'U.S. & China-based service teams',
							'Available via chat, phone, & email',
							'Over 10 million parts manufactured',
							'Quote time: Instant',
							'Production time: As fast as 3 days'
						)
					),
				);

				foreach ($features as $i => $feature ) :
				
			?>
			<div class="w-11/12 md:w-1/3 px-6 mb-6 md:mb-0">
			
				<div class="mb-4">
					<h3 class="text-blue-dark mb-2 font-museo-700"><?php echo $feature['title']; ?></h3>
					<p class="text-14">
						<?php echo $feature['para']; ?>
					</p>
				</div>
				<div>
					<?php 
						foreach ( $feature['dots'] as $j => $dot ) :
					?>
					<div class="flex mb-2">
						<div class="w-8">
							<div class="w-6">
								<!-- Icon -->
								<img width="15" alt="circle green check icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check-circle-green.png">
							</div>
							
						</div>
						
						<div class="w-full">
							<p class="text-grey-dark text-14">
								<?php echo $dot; ?>
							</p>
						</div>
					</div>
					<?php 
						endforeach;
					?>
				</div>
			</div>
			<?php 
				endforeach;
			?>
		</div>
		<div class="text-center">
			<a href="#" class="btn btn-primary">Get a quote</a>
		</div>
	</div>
</section>

<?php get_template_part('partials/our-quality-promise'); ?>


<section class="section">
	<div class="container">
		<div class="text-center mb-2">
			<h3 class="text-blue-dark uppercase font-museo-900">
				TECHNOLOGY OVERVIEW: WHAT IS 3D PRINTING?
			</h3>
		</div>
		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
		<div class="flex justify-center flex-wrap">
			<div class="w-11/12 md:w-10/12">
				<?php 
					$overviews = array(
						array(
							'title' => 'About the 3D Printing Process',
							'para' => 'CNC, or computer numerical control machining, is a subtractive manufacturing method that leverages a combination of computerized controls and machine tools to remove layers from a solid block of material.'
						),

						array(
							'title' => 'Types of 3D Printing',
							'para' => 'Depending on the type of part that needs to be machined, there are different types of machining tools best fit for the job. For'
						),

						array(
							'title' => 'Advantages of 3D Printing',
							'para' => 'Compared with parts manufacturing through additive methods, CNC machined parts are functionally stronger and typically have superior production quality and finish.'
						),

						array(
							'title' => '3D Printing Design Considerations',
							'para' => 'CNC, or computer numerical control machining, is a subtractive manufacturing method that leverages a combination of computerized controls and machine tools to remove layers from a solid block of material. Compared with parts manufacturing through additive methods, CNC machined parts are functionally stronger and typically have superior production quality and finish.'
						),
					);

					foreach ($overviews as $i => $overview ) :
				?>
				<div class="mb-12">
					<p class="text-18 font-semibold mb-2">
						<?php echo $overview['title']; ?>
					</p>
					<p>
						<?php echo $overview['para']; ?>
					</p>
				</div>
				<?php
					endforeach;
				?>
				<div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<div class="text-center mb-2">
	<h3 class="text-blue-dark uppercase font-museo-900">
		3D PRINTING RESOURCES
	</h3>
</div>
<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>

<section>
	<div class="flex flex-wrap items-stretch">
		<?php 
			$ctas = array(
				array(
					'bg' => '',
					'label' => 'SECONDARY OPERATIONS',
					'title' => 'HOW TO CHOOSE THE BEST FASTENERS FOR 3D PRINTED PARTS',
					'para' => 'There are a lot of different ways to implement threads into your 3D printed part. Here we cover the pros and cons of the most common methods as well as specific installation steps to help get you started.',
					'cta_text' => 'learn more',
					'cta_link' => '#'
				),
				// array(
				// 	'bg' => '',
				// 	'label' => 'Datasheet',
				// 	'title' => 'Fictiv Tolerance standards',
				// 	'para' => 'Download the PDF reference sheet for our tightest tolerance standards for CNC.',
				// 	'cta_text' => 'free download',
				// 	'cta_link' => '#'
				// ),
				array(
					'bg' => '',
					'label' => 'design GUIDE',
					'title' => 'RECOMMENDED WALL THICKNESS FOR 3D PRINTING',
					'para' => 'One of the most important considerations when designing parts for 3D printing is the wall thickness. Here are some guidelines to ensure your 3D parts are structurally sound.',
					'cta_text' => 'keep reading',
					'cta_link' => '#'
				),
			);

			foreach ( $ctas as $i => $cta ) :

				$i++;
			
		?>
		<div class="md:w-1/2">
			
			<div class="py-20 bg-grey-<?php echo $i; ?>00 h-full">
				<div class="flex justify-center">
					<div class="w-11/12 md:w-8/12">
						<div class="mb-2">
							<p class="uppercase font-museo-900 text-blue-dark"><?php echo $cta['label']; ?></p>
						</div>
						<div class="mb-2">
							<h3 class="uppercase font-museo-900 text-blue-dark text-24 leading-tight">
								<?php echo $cta['title']; ?>
							</h3>
						</div>
						<div class="mb-2">
							<p class="text-blue-dark">
								<?php echo $cta['para']; ?>
							</p>
						</div>
						<div>
							<a href="<?php echo $cta['cta_link']; ?>" class="btn btn-secondary"><?php echo $cta['cta_text']; ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
			endforeach;
		?>
	</div>
</section>
<?php 
	get_footer();
?>