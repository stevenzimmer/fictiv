<?php 
/* 	Template Name: Injection Molding 
*/ 
	get_header();
?>
<header class="py-24 relative">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/injection-molding-header.jpg'; ?>)"></div>
	<div class="bg-white absolute w-full h-full inset-0 opacity-50 lg:hidden"></div>
	<div class="container relative">
		<div class="flex justify-center md:justify-start">
			<div class="w-11/12 md:w-3/4 lg:w-1/2">
				<div class="mb-6">
					<h1 class="text-blue-dark text-h1 uppercase font-museo-900 leading-tight"><?php the_title(); ?></h1>
					<h2 class="text-blue-dark">
						No minimum order quantities and free manufacturability feedback with every quote.
					</h2>
					
				</div>
				<div class="mb-6">
					<?php primary_button() ?>
				</div>

				<div class="mb-4">
					<?php 
						$specs = array(

							array(
								'icon' => "parts",
								'text' => 'PARTS AS FAST AS 10 DAYS'
							),

							
						);

						foreach ($specs as $i => $spec ) :
				
					?>

					<div class="flex flex-wrap items-center mb-2">
						<div class="mr-2 w-12">

							<!-- Icon -->
							<img class="lazyload" width="30" alt="<?php echo strtolower( $spec['text']) ?> icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $spec['icon']; ?>.png">
								
						</div>
						<div>
							<p class="text-blue-dark font-museo-900 text-14">
								<?php echo $spec['text']; ?>
							</p>
						</div>
					</div>

					<?php 
						endforeach;
					?>
					
				</div>
			</div>
			
		</div>
	</div>
</header>
<?php 
	$steps = array(
		array(
			'img' => 'rapid-design-molds',
			'title' => 'Rapid Design molds',
			'para' => 'Ideal for part design validation, low volume production, and bridge production quantities.',
			'items' => array(
				'No minimum order quantities',
				'Complex design accepted'
			),
			'capabilities_link' => '#'
		),

		array(
			'img' => 'production-tooling',
			'title' => 'Production Tooling',
			'para' => 'Ideal for higher volume production parts, starting at 10,000 units. Tooling costs are higher than Rapid Design Molds, but tooling construction allows for lower part pricing.',
			'items' => array(
				'10k-500k units',
				'Steel tooling',
				'Multi-cavity tooling'
			),
			'capabilities_link' => '#'
		),
	)
?>
<section class="py-24">
	<div class="container">
		<div class="text-center mb-12">
			<h3 class="uppercase text-blue-light font-museo-900 text-18">
				FROM PROTOTYPE TO PRODUCTION 
			</h3>
		</div>
		<?php 
			foreach ($steps as $i => $step ) :
		?>
		<div class="flex flex-wrap justify-center lg:justify-between h-full items-stretch mb-12 <?php 
			if( $i % 2 !== 0 ) :
				echo 'flex-row-reverse';
			endif;
		?> -mx-6">

			<div class="w-full lg:w-6/12 px-6">
				<img class="lazyload" alt="<?php echo $step['title'] ?> graphic" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/<?php echo $step['img'] ?>-graphic.png">
			</div>
			<div class="w-11/12 lg:w-5/12 py-10 px-6">
				<div class="mb-4">
					<h3 class="mb-2 text-36 text-blue-dark font-museo-900">
						<?php echo $step['title']; ?>
					</h3>
					<p class="text-blue-dark">
						<?php echo $step['para']; ?>
					</p>	
				</div>
				<?php 
					foreach ( $step['items'] as $j => $item ) :
					
				?>
				<div class="flex flex-wrap items-center mb-2">
					<div class="w-8">
						<div class="w-6">
							<!-- Icon -->
							<img class="lazyload" width="15" alt="circle green check icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check-circle-green.png">
						</div>
						
					</div>
					<div>
						<p class="font-museo-900 text-14 text-blue-dark">
							<?php echo $item; ?>
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
</section>
<section>
	<div class="container">
		<div class="flex justify-center">
			<div class="lg:w-10/12">
				
			
				<div class="flex flex-wrap justify-center lg:justify-start -mx-6 mb-12">
					<?php 
						$features = array(
							array(
								'icon' => 'ribbon',
								'title' => 'QUALITY PARTS',
								'dots' => array(
									'Vetted local & overseas suppliers',
									'Parts built to spec, guaranteed',
									'ISO certification & inspection'
								)
							),

							array(
								'icon' => 'secure',
								'title' => 'PRIVATE & SECURE',
								'dots' => array(
									'Secure file transfers & storage',
									'Anonymized identity w/ suppliers',
								)
							),

							array(
								'icon' => 'industry-expertise',
								'title' => 'INDUSTRY EXPERTISE',
								'dots' => array(
									'U.S. & China-based service teams',
									'Available via chat, phone, & email',
									'Over 10 million parts manufactured'
								)
							),
						);

						foreach ($features as $i => $feature ) :
						
					?>
					<div class="w-11/12 lg:w-1/3 px-6">

						<div class="mb-4">
							<!-- Icon -->
							<img class="lazyload" width="30" alt="circle green check icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $feature['icon']; ?>.png">
						</div>
						
						<div class="mb-4">
							<h3 class="text-blue-dark font-museo-900"><?php echo $feature['title']; ?></h3>
						</div>
						<div>
							<?php 
								foreach ($feature['dots'] as $j => $dot ) :
							?>
							<div class="flex mb-2 items-center">
								<div class="w-8 mt-1">
									<div class="w-6">
										<!-- Icon -->
										<img class="lazyload" width="15" alt="circle green check icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check-circle-green.png">
									</div>
									
								</div>
								<div class="w-full">
									<p class="text-blue-dark text-12">
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
			</div>
		</div>
		
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="flex justify-center mb-12">
			<div class="w-11/12 md:w-8/12 ">
				<div class="text-center mb-8">
					<h3 class="text-blue-dark text-36 font-museo-900">
						Get free expert manufacturability feedback
					</h3>
				</div>
				<div class="flex flex-wrap -mx-6 mb-4">
					<div class="lg:w-1/2 px-6 mb-6 lg:mb-0">
						<div class="flex">
							<div class="w-12">
								<div class="rounded-full border border-teal-dark w-8 h-8">
									<div class="flex justify-center items-center h-full">
										<div>
											<p class="text-12 text-teal-dark">1</p>
										</div>
									</div>
									
								</div>
							</div>
							<div class="w-full">
								<p>Upon upload to the Fictiv platform instant quoter, you’ll receive instant feedback on major cost drivers for injection molding.</p>
							</div>	
						</div>

					</div>
					<div class="lg:w-1/2 px-6">
						<div class="flex">
							<div class="w-12">
								<div class="rounded-full border border-teal-dark w-8 h-8">
									<div class="flex justify-center items-center h-full">
										<div>
											<p class="text-12 text-teal-dark">2</p>
										</div>
									</div>
									
								</div>
							</div>
							<div class="w-full">
								<p>Upon full quote submission, you’ll receive a more in-depth manufacturability analysis.</p>
							</div>	
						</div>
						
					</div>
				</div>
				
			
			</div>
		</div>
		<div>
			<img class="lazyload shadow" alt="expert manufacturability feedback screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/expert-manufacturability-feedback.png">
			
		</div>
	</div>
</section>
<?php 
	$reps = array(
		array(
			'img' => "account-executive",
			'title' => 'ACCOUNT EXECUTIVE',
			'description' => 'Your Account Executive will guide you through the quoting stage. They will help to gather your design requirements, request manufacturability feedback, and align your budget & timeline needs with Fictiv\'s manufacturing capabilities.'
		),
		array(
			'img' => "technical-applications-engineer",
			'title' => 'TECHNICAL APPLICATIONS ENGINEER',
			'description' => 'Our technical applications engineers are trained manufacturing experts that provide manufacturability feedback on your designs during the quoting stage.'
		),
		array(
			'img' => "customer-success-manager",
			'title' => 'CUSTOMER SUCCESS MANAGER',
			'description' => 'Once your order kicks off, your Customer Success Manager is in charge of managing any of your questions or requests along the way.'
		),
		array(
			'img' => "technical-project-manager",
			'title' => 'TECHNICAL PROJECT MANAGER',
			'description' => 'The Technical Project Manager is in charge of managing communications with Fictiv Manufacturing Partners to ensure your exact design and project specifications are communicated accurately. They will work tirelessly behind the scenes to ensure you receive quality parts, on time.'
		),
		array(
			'img' => "supplier-quality-engineer",
			'title' => 'SUPPLIER QUALITY ENGINEER',
			'description' => 'To ensure part quality, Fictiv\'s Supplier Quality Engineers will conduct quality assessment of your parts at the factory and will also be in charge of organizing the First Article Inspection report as well as any other quality inspection reports requested.'
		),
	);
?>

<section class="section">
	<div class="container">
		<div class="flex justify-center mb-12">
			<div class="w-11/12 md:w-9/12 lg:w-5/12 ">
				<div class="text-center mb-2">
					<h3 class="text-blue-dark text-36 font-museo-900">
						Your Fictiv Project Management Team
					</h3>
				</div>
				<div class="mb-4">
					<p>All injection molding orders have a team of dedicated Fictiv employees working tirelessly behind the scenes to ensure your parts are manufactured on time and to your precise specifications.</p>
				</div>
			</div>
		</div>
		<div class="flex justify-center mb-12">
			<div class="w-11/12 lg:w-10/12 ">
				<div class="flex flex-wrap justify-center lg:justify-start mb-4 -mx-8">
					<?php 
						foreach ( $reps as $i => $rep ) :
						
					?>

					<div class="w-6/12 md:w-1/3 lg:w-1/5 px-8 mb-6 lg:mb-0">
						<div class="pm-wrapper select-none border-b-2 border-transparent group h-full pb-2  <?php 

							if( $i === 0 ) :

								echo 'active';

							endif;

						?>" data-pm="<?php echo $i; ?>">
							<div class="mb-4">
								<div class="mx-auto rounded-full">
									<img class="lazyload" alt="<?php echo strtolower( $rep['title'] ); ?> thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $rep['img']; ?>.png">
									
								</div>
							</div>
							<div class="text-center">
								<h3 class="uppercase text-blue-dark font-museo-900 leading-tight opacity-25 group-hover:opacity-100 group-hover:text-red-dark"><?php echo $rep['title']; ?></h3>
							</div>
						</div>
						
					</div>
					
					<?php 
						endforeach;
					?>
				</div>
				<div class="bg-grey-100 py-10">
					<div class="flex justify-center">
						<div class="md:w-7/12">
							<?php 
								foreach ( $reps as $i => $rep ) :
							
							?>

							<div data-pm="<?php echo $i; ?>" class="pm-description <?php 

								if( $i !== 0 ) :


									echo 'hidden';

								endif;
							?>">
								<h3 class="font-museo-900 text-blue-dark uppercase text-14 mb-2"><?php echo $rep['title']; ?></h3>
								<p class="text-blue-dark"><?php echo $rep['description'] ?></p>
							</div>

							<?php 
								endforeach;
							?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="flex flex-wrap hidden">
	
		<div class="md:w-1/2">
			<div class="p-20 bg-grey-100">
				<div>
					<div class="h-12 w-12 rounded-full bg-grey-500 mx-auto"></div>
	
				</div>
				<div class="text-center">
					<h3 class="uppercase">
						“Since starting to work with Fictiv, we’re able to take on projects with more complex manufacturing requirements.”
					</h3>
					<p>
						—Miguel Piedrahita, Founder, 219 Design
					</p>
				</div>
				<div class="text-center">
					<a href="#" class="btn btn-secondary">read case study</a>
				</div>
			</div>
		</div>

		<div class="md:w-1/2 bg-grey-200">
			<div class="flex justify-center">
				<div class="md:w-8/12">
					<div class="p-20 ">
						<div>
							<p class="uppercase">design guides</p>	
						</div>
						<div>
							<h3>
								Get Smart on Injection Molding
							</h3>
							<p>
								A collection of industry best practices, including: recommended wall thicknesses, boss design, gate types and more.
							</p>
						</div>
						<div class="">
							<a href="#" class="btn btn-secondary">free download</a>
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