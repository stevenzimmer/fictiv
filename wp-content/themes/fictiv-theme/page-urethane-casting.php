<?php 
/* 	Template Name: Urethane Casting 
*/ 
	get_header();
?>
<header class="py-24 relative">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/urethane-casting-header.png'; ?>)"></div>
	<div class="container relative">
		<div class="md:w-1/2">
			<div class="mb-12">
				<h1 class="text-blue-dark text-48 uppercase font-museo-900"><?php the_title(); ?></h1>
				<h2 class="mb-12 text-blue-dark">
					Production quality parts at low volumes and prototyping speeds.
				</h2>
				<div>
					<?php primary_button() ?>
				</div>
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
						<img width="20" alt="<?php echo strtolower( $spec['text']) ?> icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $spec['icon']; ?>.png">
							
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
			
		</div>
	</div>
</header>
<section class="py-24">
	<div class="container">
		<div class="flex justify-center mb-12">
			<div class="md:w-6/12">
				<div class="text-center mb-4">
					<h3 class="uppercase text-blue-dark text-24 font-slab-300">
						What is Urethane Casting?
					</h3>
				</div>
				<div class="w-12 h-1 bg-blue-dark mx-auto mb-6"></div>
				<div class="text-center mb-6">
					<p>
						Urethane casting (also known as RTV molding, cast urethane, and silicone molding) is a fabrication method that uses silicone molds to produce production-quality parts, without the high costs and lead times of steel or aluminum tooling.
					</p>
				</div>
				<div class="text-center">
					<a href="#" class="btn btn-primary">download design guide</a>
				</div>
			</div>
		</div>
		<div class="flex justify-between flex-wrap mb-12">
			<div class="md:w-5/12">
				<img alt="What is Urethane Casting thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/urethane-casting-thumbnail.jpg">

			</div>
			<div class="md:w-6/12">
				<?php 
					$features = array(
						array(
							'title' => 'Production Quality at Low Volumes',
							'para' => 'This process is a quick, cost-effective way to produce 10-200 units with production-level quality. Typically, each silicone mold will produce 20 castings.'
						),
						array(
							'title' => 'Complex Elastomeric Parts',
							'para' => 'Urethane casting is ideal for prototyping elastomeric parts such as complex gaskets and overmolds on rigid parts.'
						),
						array(
							'title' => 'High Level of Detail',
							'para' => 'Urethane casting allows for almost limitless complexity, including sharp internal corners unachievable with CNC machining, and designs without draft or uniform wall-thickness that can’t be injection molded.'
						),
					);

					foreach ($features as $i => $feature ) :
				?>
				<div class="mb-4">
					<h3 class="text-blue-dark mb-2 font-museo-900">
						<?php echo $feature['title']; ?>
					</h3>
					<p>
						<?php echo $feature['para']; ?>
					</p>
				</div>
				<?php
					endforeach;
				?>
		
			</div>
		</div>
		<div class="text-center mb-12">
			<p>
				Parts can be fabricated and delivered in just 10 business days.

			</p>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="flex justify-center">
			<div class="md:w-10/12">
				<div class="flex justify-between">
					<div class="md:w-3/12">
						<div>
							<img class="rounded-full" alt="CNC Machining finishing thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/preston-fung.jpg">
						</div>
						
					</div>
					<div class="md:w-8/12">
						
						<div class="border-l-2 border-teal-dark pl-8 mb-4">
							<p class="text-blue-dark text-24 font-semibold">"Urethane casting helps us to mitigate risk without the massive investment in a costly injection molding tool"</p>
						</div>
						<div class="border-b border-grey-light pb-4">
							<h3 class="font-semibold">Preston Fung</h3>
							<p class="">R&D Engineering Manager @ Lim Innovations</p>
						</div>
						<div class="py-4">
							<p class="text-blue-dark text-12 mb-4 italic">
								Learn how an innovative medical device company uses Fictiv Urethane Casting for fast, production-grade parts.
							</p>
							<a class="btn btn-primary" href="#">Read case study</a>
						</div>

					</div>	
				</div>
				
			</div>
		</div>
	</div>
</section>
<section class=" py-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="md:w-8/12">
				<div class="text-center">
					<h3 class="section-header uppercase text-24 text-blue-dark font-slab-300">Colors and finishes</h3>
				</div>
				<div class="w-12 h-1 bg-blue-dark mx-auto mb-12"></div>
				<div>
					<?php 
						$finishes = array(
							array(
								'img' => 'standard',
								'title' => 'Standard',
								'description' => 'Pigment is added to the liquid polyurethane prior to casting, so each casting has as-molded color. Customers may provide Pantone code for approximate color matching.'
							),

							array(
								'img' => 'precise-color-match',
								'title' => 'Precise Color Match',
								'description' => 'Paint is recommended for parts that require exact color matching. Very light colors or specific shades of white may only be achievable with painting. Pantone code or sample swatch must be provided for precise color matching.'
							),

							array(
								'img' => 'custom-textures',
								'title' => 'Custom Textures',
								'description' => 'A variety of textures can be achieved by texture painting the master prior to mold making or by painting the parts after casting.'
							),

						
						);

						foreach ( $finishes as $i => $finish ) :
						
						
					?>
					<div class="flex justify-between items-center p-2 border border-grey-light mb-2">
						<div class="md:w-4/12">
							<!-- <div class=" h-full bg-grey-500"></div> -->
							<img alt="<?php echo $finish['title'] ?> Thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/colors-finishes-<?php echo $finish['img']; ?>.jpg">
						</div>
						<div class="md:w-7/12">
							<div class="flex items-center">
								<div class="md:w-6/12">
									<p class="font-museo-900 text-blue-dark">
										<?php 
											echo $finish['title'];
										?>
									</p>
								</div>
								<div class="md:w-6/12">
									<p class="text-12 text-grey-dark">
										<?php 
											echo $finish['description'];
										?>
									</p>
								</div>
								
							</div>
							<div>
								
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
		<div class="flex justify-center">
			<div class="md:w-6/12">
				<div class="text-center mb-2">
					<h3 class="section-header text-24 text-blue-dark font-slab-300 uppercase">Common Applications</h3>
				</div>
				<div class="w-12 h-1 bg-blue-dark mx-auto mb-6"></div>
				<div>
					<?php 
						$applications = array(
							array(
								'icon' => 'concept-stage',
								'title' => 'Concept stage',
								'description' => 'Looks-like models for marketing photography, investor pitches, and trade shows'
							),

							array(
								'icon' => 'early-prototyping-stage',
								'title' => 'Early prototyping stage',
								'description' => 'Prototype elastomeric parts such as complex gaskets'
							),

							array(
								'icon' => 'late-prototyping-stage',
								'title' => 'Late prototyping stage',
								'description' => 'Cost effective way to produce 100 EVT units before cutting injection molding tool'
							),

							array(
								'icon' => 'low-volume-production',
								'title' => 'Low-volume production',
								'description' => 'Low-volume production orders for customized, small-batch products (20-200 units at a time)'
							),
						);

						foreach ($applications as $i => $application ) :
							# code...
						
					?>
					<div class="flex mb-4">
						<div class="w-12">
							<img width="25" alt="<?php echo $application['title'] ?> Icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $application['icon']; ?>.png">
						</div>
						<div class="w-full">
							<p class="font-semibold">
								<?php 
									echo $application['title'];
								?>
							</p>
							<p>
								<?php 
									echo $application['description'];
								?>
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
</section>
<?php 
	get_footer();
?>