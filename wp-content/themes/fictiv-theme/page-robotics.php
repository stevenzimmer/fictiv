<?php 
/* 	Template Name: Robotics 
*/ 
	get_header();
?>
<header class="py-24 relative" >
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
	<div class="container relative">
		<div class="flex justify-center lg:justify-start">
			
			<div class="w-11/12 lg:w-9/12">
				<div class="mb-2">
					<p class="text-blue-dark font-museo-900 text-36">
						Fictiv for robotics:
					</p>
				</div>
				<div class="mb-2">
					<h1 class="text-blue-dark text-36 
					lg:text-h1 uppercase font-museo-900 leading-tight">PRECISION QUALITY PARTS AT UNMATCHED SPEEDS</h1>
					
				</div>
				<div class="mb-4">
					<?php 
						$specs = array(
							
							array(
								'icon' => "clock",
								'text' => 'PRECISION CAPABILITIES ON DEMAND'
							),
							array(
								'icon' => "parts",
								'text' => 'ISO CERTIFIED QUALITY MANAGEMENT'
							),

							array(
								'icon' => "calendar",
								'text' => 'RELIABLY FAST LEAD TIME'
							)
						);

						foreach ($specs as $i => $spec ) :
				
					?>

					<div class="flex flex-wrap items-center mb-4">
						<div class="mr-2">

							<!-- Icon -->
							<img width="20" alt="circle green check icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check-circle-green.png">
								
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

<section class="bg-white py-20">
	<div class="container">
		<div class="flex justify-center mb-12">
			<div class="w-11/12 lg:w-8/12">
				<div class="text-center">
					<h3 class="text-blue-dark uppercase font-museo-900 text-36 leading-tight">
						ACCESS A VARIETY OF HIGH PRECISION CAPABILITIES THROUGH ONE PLATFORM
					</h3>
				</div>
			</div>
		</div>
		
<!-- 		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div> -->
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				<div class="flex flex-wrap -mx-4">
					<?php 
						$types = array(
								array(
									'img' => "cnc-milling",
									'title' => 'CNC MILLING',
									'text' => '3, 4 and 5-axis machining capabilities for simple and complex geometries'
								),

								array(
									'img' => "cnc-turning",
									'title' => 'CNC TURNING',
									'text' => 'Standard and live tooling capabilities for cylindrical parts such as pins, shafts, and spacers.'
								),

								array(
									'img' => "gear-hobbing",
									'title' => 'GEAR HOBBING',
									'text' => 'A wide range of stock hobbing tools available for quick turnaround times. Custom hobbing also available.'
								),

								array(
									'img' => "high-resolution-3d-printing",
									'title' => 'HIGH RESOLUTION 3D PRINTING',
									'text' => 'MJF, SLA, PolyJet SLS, FDM.'
								),

								array(
									'img' => "finishing",
									'title' => 'Finishing',
									'text' => 'Anodizing, Alodine, Media Blasting, Tumbling, Passivation, Plating, Powder Coating and more.'
								),

								array(
									'img' => "electrical-discharge-machining",
									'title' => 'ELECTRICAL DISCHARGE MACHINING (EDM)',
									'text' => 'Useful for cutting deep pockets and complex features such as gears and holes with a keyway. Wire & sinker.'
								)
							);

							foreach ( $types as $i => $type ) :
					?>
					<div class="w-11/12 md:w-1/2 lg:w-1/3 px-4 mb-12">
						<div class="relative group">
							<a href="#" class="absolute w-full h-full inset-0"></a>
							<div class=" mb-2">
								<div class="relative h-0 bg-white" style="padding-bottom: 92%">
						            <img class="absolute top-0 left-0 w-full h-full object-cover lazyload" alt="<?php echo $type['title']; ?> thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/<?php echo $type['img']; ?>-thumbnail.jpg">
						        </div>
							</div>
						
							<div class="text-center">
								<div class="mb-2">
									<p class="text-blue-dark uppercase font-semibold mb-2 font-museo-900">
										<?php 
											echo $type['title'];
										?>
									</p>
								</div>
								<div class="h-12 mb-2">
									<p class="text-blue-dark text-14">
										<?php 
											echo $type['text'];
										?>
									</p>
								</div>
								<div>
									<p class="text-blue-light font-museo-700 group-hover:text-red-dark underline">Learn more</p>
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
</section>
<section class="bg-grey-100 py-20">
	<div class="container">
		<div class="flex flex-wrap justify-center lg:justify-between">
			<div class="w-11/12 lg:w-3/12">
				<h3 class="text-blue-dark font-museo-900 text-36 leading-tight mb-4">
					Get <span class="text-teal-light">10x</span> the precision offered by other leading online solutions
				</h3>
				<p class="text-blue-dark">
					Enjoy the ease and speed of online quoting, with the precision you need for complex parts.
				</p>

				<div class="flex relative justify-start group">
					<a href="https://docsend.com/view/iaa5nip" class="absolute w-full h-full inset-0"></a>
					<div class="mr-2">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/download.svg');
						?>
					</div>
					<div>
						<p class="text-blue-light text-16 group-hover:text-red-dark">Download full tolerance chart</p>
					</div>
				</div>
					
			</div>
			<div class="w-11/12 lg:w-8/12">
				<img alt="Get 10x the precision offered by other leading online solutions graphic" src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/robotics-precision.png">
			</div>
		</div>
	</div>
</section>


<section class="section bg-white">
	<div class="container">
		<div class="flex flex-wrap justify-center lg:justify-between">
			<div class="w-11/12 lg:w-5/12 mb-8 lg:mb-0">
				<div class="mb-2">
					<img class="lazyload" alt="Hebi Robotics screenshot 1" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/hebi-robotics-1.png">
				</div>
				<div class="flex flex-wrap -mx-2">
					<div class="md:w-1/2 px-2">
						<img class="lazyload" alt="Hebi Robotics screenshot 2" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/hebi-robotics-2.jpg">
					</div>
					<div class="md:w-1/2 px-2">
						<img class="lazyload" alt="Hebi Robotics screenshot 3" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/hebi-robotics-3.jpg">
					</div>
				</div>
				
			</div>
			<div class="w-11/12 lg:w-1/2">
				<div class="mb-4">
					<img width="100" class="lazyload" alt="Quip screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/hebi-robotics.png">
				</div>
				<div class="mb-4">
					<p class="text-blue-dark text-36 font-museo-900 leading-tight">“Being able to use Fictiv for gears is very exciting. We know they're going to hit their lead times.”</p>
				</div>
				<div class="mb-4">
					<p>
						—Andrew Willig, Mechanical Engineer, HEBI Robotics
					</p>
				</div>
				<div class="mb-8">
					<a href="https://docsend.com/view/d3vrtpc" class="btn btn-secondary">download case study</a>
				</div>
			
			</div>
		</div>
	</div>
</section>


<section>
	<div class="flex flex-wrap items-stretch justify-center lg:justify-start">
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
				array(
					'bg' => '',
					'label' => 'Datasheet',
					'title' => 'Fictiv Tolerance standards',
					'para' => 'Download the PDF reference sheet for our tightest tolerance standards for CNC.',
					'cta_text' => 'free download',
					'cta_link' => '#'
				),
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
		<div class="w-full lg:w-1/3">
			
			<div class="py-20 bg-grey-<?php echo $i; ?>00 h-full">
				<div class="flex justify-center">
					<div class="w-11/12 lg:w-8/12">
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