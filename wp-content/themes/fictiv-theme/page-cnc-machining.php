<?php 
/* 	Template Name: CNC Machining Services
*/ 
	get_header();
?>
<header class="py-24 relative">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/cnc-machining-header.jpg'; ?>)"></div>
	<div class="container relative">
		<div class="md:w-full">
			<div class="mb-4">
				<h1 class="text-blue-dark text-h1 uppercase font-museo-900"><?php the_title(); ?></h1>
				
			</div>
			<div class="mb-4">
				<?php 
					$specs = array(

						array(
							'icon' => "hourglass",
							'text' => 'INSTANT QUOTES & DFM'
						),

						array(
							'icon' => "clock",
							'text' => 'PARTS AS FAST AS 2 DAYS'
						),

						array(
							'icon' => "parts",
							'text' => 'PRECISION CAPABILITIES'
						),

						array(
							'icon' => "clipboard",
							'text' => 'HAND METROLOGY, LASER & CMM INSPECTIONS'
						),
					);

					foreach ($specs as $i => $spec ) :
			
				?>

				<div class="flex flex-wrap items-center mb-4">
					<div class="mr-2 w-12">

						<!-- Icon -->
						<img class="lazyload" width="20" alt="<?php echo strtolower( $spec['text']) ?> icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $spec['icon']; ?>.png">
							
					</div>
					
					<div>
						<p class="text-blue-dark font-semibold font-museo-900">
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
</header>

<?php 
	$advantages = array(
		array(
			'title' => 'Instant Quotes & Manufacturability Feedback',
			'para' => 'Streamline your workflow with our digital quote-to-order platform. Simply upload your CAD model for instant pricing and DfM feedback.',
			'vimeo_id' => 426572378
		),

		array(
			'title' => '10X Precision Over Leading Platform',
			'para' => 'Our vetted network of precision CNC partners can hit tolerances as tight as +/- 0.0002 in.',
			'img' => '10x-precision'
		),

		array(
			'title' => 'Pricing Flexibility: Overseas & U.S.',
			'para' => 'Fictiv has vetted manufacturing partners in North America and Asia Pacific regions, for maximum flexibility across pricing and lead times.',
			'img' => 'pricing-flexibility'

		),

		array(
			'title' => 'Reliable, On-Demand Capacity',
			'para' => 'Our Digital Manufacturing Ecosystem connects 150 vetted CNC machining partners with over 400 professional grade machines.',
			'img' => 'reliable-on-demand'

		)
	);
?>
<section class="py-20">
	<div class="container">
		<div class="text-center mb-2">
			<h3 class="text-blue-dark uppercase font-museo-900">
				fictiv cnc machining advantages
			</h3>
		</div>
		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
		<div class="flex flex-wrap -mx-4">
			<div class="md:w-8/12 px-4 toggle-module-wrapper">
				<?php 

					foreach ( $advantages as $i => $advantage ) :
						
				?>
				<div data-toggle-module="cnc-machining-advantages-<?php echo $i; ?>" class="toggle-module <?php 
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
						<img class="lazyload shadow-lg" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/cnc-advantage-<?php echo $advantage['img']; ?>.png">
					</div>
				<?php
						endif;
				?>
				</div>

				<?php 
					endforeach;
				?>
				
			</div>
			<div class="md:w-4/12 px-4 toggle-btns-wrapper">
				<?php 
					

					foreach ( $advantages as $i => $advantage ) :
				?>
				<a class="p-8 stacked-toggle-module block module-toggle-btn <?php 
				
					if( $i === 0 ) :
						
						echo 'active';
				
					endif;
				
				?>" href="#cnc-machining-advantages-<?php echo $i; ?> " >
					
					<p class="text-blue-dark font-museo-900">
						<?php echo $advantage['title']; ?>
					</p>
					<p>	<?php echo $advantage['para']; ?></p>
					
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
				CNC MACHINING PROCESSES
			</h3>
		</div>
		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
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
							'img' => "electrical-discharge-machining",
							'title' => 'ELECTRICAL DISCHARGE MACHINING (EDM)',
							'text' => 'Useful for cutting deep pockets and complex features such as gears and holes with a keyway. Wire & sinker.'
						)
					);

					foreach ( $types as $i => $type ) :
			?>
			<div class="md:w-3/12 px-4 ">
				<div class="relative group">
					<a href="#" class="absolute w-full h-full inset-0"></a>
					<div class="bg-white p-4 mb-2">
						<div class="relative h-0 bg-white" style="padding-bottom: 92%">

				            <img class="absolute top-0 left-0 w-full h-full object-cover lazyload" alt="<?php echo strtolower( $type['title']) ?> thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/<?php echo $type['img']; ?>-thumbnail.jpg">
				        </div>
					</div>
					
					
					<div class="text-center">
						<div class="h-12 mb-2">
							<p class="text-blue-dark uppercase font-semibold mb-2 font-museo-900">
								<?php 
									echo $type['title'];
								?>
							</p>
						</div>
						<div class="h-16 mb-2">
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
		<div class="flex flex-wrap -mx-4 hidden">
			<div class="md:w-6/12 px-4">
				<div class="relative" style="padding:56.25% 0 0 0">
					<iframe class="absolute w-full h-full inset-0" src="https://www.youtube.com/embed/PLBc81w2eVc?wmode=opaque&widget_referrer=https%3A%2F%2Ffictiv-new.webflow.io%2Fcnc-machining-service&enablejsapi=1&origin=https%3A%2F%2Fcdn.embedly.com&widgetid=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
				</div>
			</div>
			<div class="md:w-6/12 px-6">
				<div class="relative" style="padding:56.25% 0 0 0">
					<iframe class="absolute w-full h-full inset-0" src="https://www.youtube.com/embed/dxGQgRH9Lg4?wmode=opaque&widget_referrer=https%3A%2F%2Ffictiv-new.webflow.io%2Fcnc-machining-service&enablejsapi=1&origin=https%3A%2F%2Fcdn.embedly.com&widgetid=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	$options = array(
		array(
			'name' => 'A2 Tool Steel',
			'para' => 'A2 Tool Steel has excellent wear resistance and toughness, commonly used to make fixtures, tools, tool holders, gauges, and punches.',
			// 'colors' => 'Clear, black, grey, red, blue, gold',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '1.8 μm to 25 μm (0.00007")',
			'lead_time' => 'As fast as 7 days',
			'price' => '$$$',
			'finishing_options' => 'Media Blasting, Tumbling, Black Oxide',
			'link' => '/capabilities/materials/a2-tool-steel/'
		),

		array(
			'name' => 'ABS',
			'para' => 'ABS is a low-cost engineering plastic widely used for pre-injection molding prototypes.',
			'colors' => 'Black, Neutral',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$$',
			'link' => '/capabilities/materials/cnc-machined-abs/'
		),

		array(
			'name' => 'Acrylic',
			'para' => 'Acrylic is a scratch-resistant plastic material, often used for tanks, panels, and optical applications.',
			'colors' => 'Optically clear, opaque',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$',
			'link' => '/capabilities/materials/acrylic-cnc/'
		),

		array(
			'name' => 'Aluminum',
			'para' => 'Aluminum is one of the most commonly used metals in the world because of its excellent strength-to-weight ratio, low cost, and recyclability.',
			'colors' => 'Optically clear, opaque',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$',
			'alloys' => '6061-T6, 7075-T6, 7050, 2024, 5052, 6063, MIC6',
			'finishing_options' => 'Alodine, Anodizing Types 2, 3, 3 + PTFE, ENP, Media Blasting, Nickel Plating, Powder Coating, Tumble Polishing',
			'link' => '/capabilities/materials/aluminum/'
		),

		array(
			'name' => 'Brass',
			'para' => '360 Brass, also known as free machining brass, is commonly used for a variety of parts including gears, lock components, pipe fittings, and ornamental applications.',
			// 'colors' => 'Optically clear, opaque',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$',
			// 'alloys' => '6061-T6, 7075-T6, 7050, 2024, 5052, 6063, MIC6',
			'finishing_options' => 'Media blasting',
			'link' => '/capabilities/materials/brass/'
		),

		array(
			'name' => 'Cast Iron',
			'para' => 'Cast iron is a dependable, wear-resistant material that\'s ideal for absorbing vibrations. Great for gears, bases, pulleys, and bushings.',
			// 'colors' => 'Optically clear, opaque',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 7 days',
			'price' => '$$',
			// 'alloys' => '6061-T6, 7075-T6, 7050, 2024, 5052, 6063, MIC6',
			'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/cast-iron/'
		),

		array(
			'name' => 'Copper',
			'para' => '101 and 110 copper alloys offer excellent thermal and electrical conductivity, which makes them natural choices for bus bars, wire connectors, and other electrical applications.',
			// 'colors' => 'Optically clear, opaque',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$$',
			'alloys' => '101, 110',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/copper/'
		),

		array(
			'name' => 'Delrin',
			'para' => 'Delrin, or acetal, is a low-friction, high-stiffness plastic material. With a relatively high toughness and minimal elongation, Delrin boasts excellent dimensional accuracy.',
			'colors' => 'White, Black, Brown',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$',
			'grades' => '150, AF (13% PTFE Filled), 30% Glass Filled',
			// 'alloys' => '101, 110',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/delrin/'
		),

		array(
			'name' => 'Garolite G-10',
			'para' => 'Garolite G-10 (also known as phenolic and epoxy-grade industrial laminate) is a composite material with a low coefficient of thermal expansion. It does not absorb water and is an excellent insulator, making it useful for electronics applications.',
			'colors' => 'Green, Yellow',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 7 days',
			'price' => '$$$',
			// 'alloys' => '101, 110',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/g-10-garolite/'
		),

		array(
			'name' => 'HDPE',
			'para' => 'High-density polyethylene (HDPE) is a slippery plastic that is often machined into plugs and seals. It is also an excellent electrical insulator as well as being moisture and chemically-resistant.',
			'colors' => 'White',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$',
			// 'alloys' => '101, 110',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/hdpe/'
		),

		array(
			'name' => 'Nylon',
			'para' => 'Nylon is a general purpose plastic material that resists both frictional and chemical wear. Two of the most notable use cases for Nylon are in medical devices and electronics insulation, notably screws and spacers for panel mounted circuit boards.',
			'colors' => 'Neutral',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$',
			// 'alloys' => '101, 110',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/nylon-cnc/'
		),

		array(
			'name' => 'PEEK',
			'para' => 'In high-stress or high-temperature applications, PEEK is a great lightweight plastic substitute for most soft metals. Additionally, PEEK is resistant to moisture, wear, and chemicals.',
			'colors' => 'Opaque beige',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$$',
			'grades' => 'Standard PEEK, 30% Glass Filled',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/peek/'
		),

		array(
			'name' => 'Polycarbonate',
			'para' => 'Polycarbonate (PC), is heat-resistant, impact-resistant, flame-retardant, and one of the most common plastics used in manufacturing.',
			'colors' => 'Clear, Black',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$',
			// 'alloys' => '101, 110',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/copper/'
		),

		array(
			'name' => 'Polypropylene',
			'para' => 'Polypropylene (PP) resists most solvents and chemicals, which makes it a wonderful material to manufacture laboratory equipment and containers for a variety of applications. PP also offers good fatigue strength.',
			'colors' => 'White',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$$',
			// 'alloys' => '101, 110',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/polypropylene/'
		),

		array(
			'name' => 'PPS',
			'para' => 'Polyphenylene Sulfide (PPS) is a high-performance engineering plastic with excellent temperature resistance, dimensional stability, and electrical insulation properties.',
			'colors' => 'Natural',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 7 days',
			'price' => '$$$',
			// 'alloys' => '101, 110',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/pps-polyphenylene-sulfide/'
		),

		array(
			'name' => 'PTFE',
			'para' => 'Commonly known as Teflon, PTFE resists high temperatures and chemicals/solvents excellently in and is also a great insulator. It is also a very slippery plastic, which makes it a good material for low-friction applications such as bearings.',
			'colors' => 'Black, White',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$',
			// 'alloys' => '101, 110',
			// 'finishing_options' => 'Media blasting, Tumbling',
			'link' => '/capabilities/materials/teflon-ptfe/'
		),

		array(
			'name' => 'Stainless Steel',
			'para' => 'Stainless steel is highly resistant to corrosion and rust, making it suitable for situations where a part may be exposed to the elements for long period of time. Stainless steel is also fairly malleable and ductile.',
			// 'colors' => 'Optically clear, opaque',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$$',
			'alloys' => '303, 304L, 316L, 410, 416, 440C, 17-4PH, Nitronic 60',
			'finishing_options' => 'Black Oxide, Electropolishing, ENP, Media Blasting, Nickel Plating, Passivation, Powder Coating, Tumble Polishing, Zinc Plating',
			'link' => '/capabilities/materials/stainless-steel/'
		),

		array(
			'name' => 'Steel',
			'para' => 'Fictiv offers both alloy and carbon steel options, useful for a variety of applications including fixtures, mounting plates, draft shafts, axles, torsion bars, gears, bolts, studs, shafts, and structural applications.',
			// 'colors' => 'Optically clear, opaque',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$$',
			'alloys' => '4140, 4130, A514, 4340',
			'carbon_steel_types' => '1018 Low Carbon, 1045 Carbon, Zinc-Galvanized Low-Carbon',
			'finishing_options' => 'Black Oxide, ENP, Electropolishing, Media Blasting, Nickel Plating, Powder Coating, Tumble Polishing, Zinc Plating',
			'link' => '/capabilities/materials/steel/'
		),

		array(
			'name' => 'Titanium',
			'para' => 'Titanium may be selected over other materials such as steel due to its ability to withstand high and subzero temperatures. Common use cases include aerospace fasteners, turbine blades, engine components, sports equipment and marine applications.',
			// 'colors' => 'Optically clear, opaque',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			// 'applicable_materials' => 'Aluminum',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'price' => '$$$',
			'grades' => 'Titanium Grade 5',


			'finishing_options' => 'Media Blasting, Tumbling, Passivation',
			'link' => '/capabilities/materials/titanium/'
		),

		array(
			'name' => 'UHMW',
			'para' => 'Ultra-High-Molecular-Weight Polyethylene (or UHMW) is a hard plastic with a slippery surface, which resists abrasion and wear. Additionally, it offers high impact strength and is the optimal material for chute/hopper liners and machine guards.',
			'colors' => 'Black, White',
			'lead_time' => 'As fast as 2 days',
			'price' => '$',

			'link' => '/capabilities/materials/stainless-steel/'
		),

		array(
			'name' => 'Ultem',
			'para' => 'ULTEM 1000 is a translucent amber colored plastic with excellent durability, strength, stiffness and heat resistance. ULTEM 1000 may be selected over Nylon or Delrin because it has the highest dielectric properties. Common applications include industrial equipment, medical devices and electronics.',
			'colors' => 'Amber',
			'lead_time' => 'As fast as 7 days',
			'price' => '$$$',

			'link' => '/capabilities/materials/ultem/'
		),

		
	);
?>
<section class="section">
	<div class="container">
		<div class="text-center mb-2">
			<h3 class="text-blue-dark uppercase font-museo-900">
				CNC materials
			</h3>
		</div>
		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
		<div class="flex mb-8 justify-center toggle-btns-wrapper flex-wrap">
			<?php 

				foreach ( $options as $i => $option ) :
				
			?>
			<a class="inline-block module-toggle-btn inline-link mx-4 mb-2 <?php if( $i === 0 ) : echo 'active'; endif; ?> pb-2 border-b-2 border-transparent transition-colors duration-200 ease-in-out" href="#cnc-materials-<?php echo $i; ?>"><?php echo $option['name']; ?></a>
			<?php 
				endforeach;
			?>
		</div>
		<div class="mb-12 toggle-module-wrapper">
			<?php 
				foreach ( $options as $i => $option ) :
			?>
			<div data-toggle-module="cnc-materials-<?php echo $i; ?>" class="toggle-module <?php 
					if( $i !== 0 ) :

						echo 'hidden';

					endif;
				?>">
				<div class="flex justify-between">
					<div class="md:w-5/12">
						<div class="mb-4">
							<h3 class="font-museo-900 text-blue-dark text-48">
								<?php echo $option['name']; ?>
							</h3>
						</div>
						<div class="mb-4">
							<p>
								<?php echo $option['para']; ?>
							</p>
						</div>
						<div>

							<?php 
								if ( isset( $option['colors'] ) ) :
								
							?>

							<p class="mb-2">
								<strong>Colors: </strong> <?php echo $option['colors']; ?>
							</p>

							<?php 
								endif;
							?>
							<?php 
								if ( isset( $option['types'] ) ) :
								
							?>
							<p class="mb-2">
								<strong>Types: </strong> <?php echo $option['types']; ?>
							</p>
							<?php 
								endif;
							?>

							<?php 
								if ( isset( $option['texture'] ) ) :
								
							?>
							<p class="mb-2">
								<strong>Texture: </strong> <?php echo $option['texture']; ?>
							</p>

							<?php 
								endif;
							?>
							<?php 
								if ( isset( $option['applicable_materials'] ) ) :
								
							?>
							<p class="mb-2">
								<strong>Applicable materials: </strong> <?php echo $option['applicable_materials']; ?>
							</p>
							<?php 
								endif;
							?>
							<?php 
								if ( isset( $option['can_be_applied_with'] ) ) :
								
							?>
							<p class="mb-2">
								<strong>Texture: </strong> <?php echo $option['can_be_applied_with']; ?>
							</p>

							<?php 
								endif;
							?>

							<?php 
								if ( isset( $option['thickness'] ) ) :
								
							?>
							<p class="mb-2">
								<strong>Thickness: </strong> <?php echo $option['thickness']; ?>
							</p>

							<?php 
								endif;
							?>

							<?php 
								if ( isset( $option['lead_time'] ) ) :
								
							?>

							<p class="mb-2">
								<strong>Lead time: </strong> <?php echo $option['lead_time']; ?>
							</p>

							<?php 
								endif;
							?>

							<?php 
								if ( isset( $option['price'] ) ) :
								
							?>

							<p class="mb-2">
								<strong>Price: </strong> <?php echo $option['price']; ?>
							</p>

							<?php 
								endif;
							?>

							<?php 
								if ( isset( $option['grades'] ) ) :
								
							?>

							<p class="mb-2">
								<strong>Grades: </strong> <?php echo $option['grades']; ?>
							</p>

							<?php 
								endif;
							?>

							
							<?php 
								if ( isset( $option['alloys'] ) ) :
								
							?>

							<p class="mb-2">
								<strong>Alloys: </strong> <?php echo $option['alloys']; ?>
							</p>

							<?php 
								endif;
							?>

							<?php 
								if ( isset( $option['carbon_steel_types'] ) ) :
								
							?>

							<p class="mb-2">
								<strong>Carbon Steel Types: </strong> <?php echo $option['carbon_steel_types']; ?>
							</p>

							<?php 
								endif;
							?>

							<?php 
								if ( isset( $option['finishing_options'] ) ) :
								
							?>

							<p class="mb-2">
								<strong>Finishing options: </strong> <?php echo $option['finishing_options']; ?>
							</p>

							<?php 
								endif;
							?>
						</div>
						<div>
							<a class="text-teal-light hover:text-red-dark" href="<?php echo $option['link']; ?>">Learn more</a>
						</div>
						
					</div>
					<div class="md:w-1/2">
						<img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/cnc-material-<?php echo str_replace(' ', '-', strtolower( $option['name'] ) ); ?>.jpg">
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
					<a href="https://docsend.com/view/vy55xfhaxe7chszc" class="absolute w-full h-full inset-0"></a>
					<div class="mr-2">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/download.svg');
						?>
					</div>
					<div>
						<p class="text-blue-light text-16 group-hover:text-red-dark">Download CNC Finishing Guide</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>


<section class="py-24 bg-grey-100 hidden">
	<div class="container">
		<div class="text-center mb-12">
			<h3 class="text-blue-light uppercase text-36 font-museo-900">finishing</h3>
		</div>
		<div class="flex flex-wrap">
			<div class="md:w-1/2">
				<div class="mb-4">
					<h3 class="text-blue-dark text-36 font-museo-900 leading-tight ">
						Get instant quotes for a wide range of CNC finishing options including:
					</h3>
				</div>
				<div>
					<ul class="flex flex-wrap justify-between list-disc pl-4 text-14">
						<?php 
							$options = array(
								'Anodizing Types II / III',
								'Media Blasting',
								'Anodizing Type III w/ PTFE (Teflon)',
								'Tumbling',
								'Alodine',
								'Passivation',
								'Black Oxide',
								'Plating - Tin, Nickel, Electroless Nickel',
								'Electropolishing',
								'Powder Coating'
							);

							foreach ($options as $i => $option ) :
								
						
						?>
						<li class="md:w-5/12"><?php echo $option; ?></li>
						<?php 
							endforeach;
						?>
					</ul>
				</div>
			</div>
			<div class="md:w-6/12 md:pl-8">
				 <img class="lazyload" alt="CNC Machining finishing thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/cnc-machining-finishing-screenshot.jpg">
			</div>
		</div>
	</div>
</section>

<section class="section bg-white">
	<div class="container">
		<div class="flex justify-between">
			<div class="w-5/12">
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
			<div class="w-1/2">
				<div class="mb-4">
					<img width="100" class="lazyload" alt="Quip screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/hebi-robotics.png">
				</div>
				<div class="mb-4">
					<p class="text-blue-light text-18 uppercase font-museo-900">cnc customer case study</p>	
					
				</div>
				<div class="mb-4">
					<p class="text-blue-dark text-36 font-museo-900 leading-tight">“Being able to use Fictiv for gears is very exciting. We know they're going to hit their lead times and we're going to be in constant communication to see where our parts are in the supply chain.”</p>
				</div>
				<div class="mb-4">
					<p>
						—Andrew Willig, Mechanical Engineer, HEBI Robotics
					</p>
				</div>
				<div class="mb-8">
					<a href="https://docsend.com/view/d3vrtpc" class="btn btn-secondary">download case study</a>
				</div>
				<div class="flex justify-start items-center">
					<div class="flex items-center">
						<div class="mr-2">
							<!-- Icon -->
							<img width="30" alt="10M+ Parts made icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/parts.png">
						</div>
						<div>
							<p class="text-blue-dark font-museo-900 text-14">
								+/- 0.0004" TOLERANCES
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
								6 WEEK LEAD TIME FOR 650 GEARS
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	$options = array(
		array(
			'name' => 'Anodizing',
			'para' => 'Anodizing is an electrolytic passivation process that grows the natural oxide layer on aluminum parts for protection from wear and corrosion, as well as for cosmetic effects.',
			'colors' => 'Clear, black, grey, red, blue, gold',
			'types' => 'Type 2, Type 3, Type 3 + PTFE',
			'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			'applicable_materials' => 'Aluminum',
			'thickness' => '1.8 μm to 25 μm (0.00007")',
			'lead_time' => 'As fast as 2 days (Type 2) and 7 days (Type 3)',
			'link' => '/capabilities/finishes/anodizing'
		),

		array(
			'name' => 'Alodine',
			'para' => 'Chromate conversion coating, more commonly known by its brand name Alodine, is a chemical coating that passivate and protects aluminum from corrosion. It is also used as a base layer before priming and painting parts.',
			'colors' => 'Clear, gold',
			// 'types' => 'Type 2, Type 3, Type 3 + PTFE',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			'applicable_materials' => 'Aluminum',
			'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'link' => '/capabilities/finishes/alodine-chromate-conversion-coating/'
		),

		array(
			'name' => 'Black Oxide',
			'para' => 'Black oxide is a conversion coating similar to Alodine that is used for steel and stainless steel. It is used mainly for appearance and for mild corrosion resistance.',
			'colors' => 'Black',
			'types' => 'Smooth, matte black',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			'applicable_materials' => 'Steel, Stainless Steel',
			'can_be_applied_with' => 'Media Blasting, Tumbling, Passivation',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 7 days',
			'link' => '/capabilities/finishes/black-oxide/'
		),

		array(
			'name' => 'Electropolishing',
			'para' => 'Electropolishing is an electrochemical process used to improve the surface finish of a part by removing material to level microscopic peaks and valleys.',
			// 'colors' => 'Black',
			'types' => 'Smooth, glossy finish',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			'applicable_materials' => 'Steel, Stainless Steel',
			'can_be_applied_with' => 'Tumbling, Passivation',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 3 days',
			'link' => '/capabilities/finishes/electropolishing/'
		),

		array(
			'name' => 'Electroless Nickel Plating',
			'para' => 'Electroless nickel plating (ENP) is a reaction that deposits a nickel-phosphorus alloy onto the surface of a metal. Compared to electroplating, it has more uniform thickness and superior wear and corrosion resistance.',
			// 'colors' => 'Black',
			'types' => 'Smooth, glossy finish',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			'applicable_materials' => 'Aluminum, Steel, Stainless Steel',
			'can_be_applied_with' => 'Alodine',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 5 days',
			'link' => '/capabilities/finishes/electroless-nickel-plating/'
		),

		array(
			'name' => 'Media Blasting',
			'para' => 'Media blasting uses a pressurized jet of abrasive media to apply a matte, uniform finish to the surface of parts.',
			// 'colors' => 'Black',
			'types' => 'Matte',
			// 'texture' => 'Smooth, matte finish. Does not cover machine marks unless media blasted beforehand.',
			'applicable_materials' => 'All metals',
			// 'can_be_applied_with' => 'Alodine',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 1 days',
			'link' => '/capabilities/finishes/media-blasting/'
		),

		array(
			'name' => 'Nickel Plating',
			'para' => 'Nickel plating is a process used to electroplate a thin layer of nickel onto a metal part. This plating can be used for corrosion and wear resistance, as well as for decorative purposes.',
			// 'colors' => 'Black',
			// 'types' => 'Matte',
			'texture' => 'Smooth finish',
			'applicable_materials' => 'Aluminum, Steel, Stainless Steel',
			'can_be_applied_with' => 'Media Blasting, Tumbling',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 5 days',
			'link' => '/capabilities/finishes/nickel-plating/'
		),

		array(
			'name' => 'Passivation',
			'para' => 'Passivation is a chemical reaction that causes a material to be less affected by corrosion or other environmental factors.',
			// 'colors' => 'Black',
			// 'types' => 'Matte',
			'texture' => 'Smooth, glossy finish',
			'applicable_materials' => 'Steel, Stainless Steel, Titanium',
			'can_be_applied_with' => 'Black Oxide, Electroless Nickel Plating, Electropolish, Zinc Plating, Tumbling, Media Blasting',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'link' => '/capabilities/finishes/passivation/'
		),

		array(
			'name' => 'Powder Coating',
			'para' => 'Powder coating is a process in which a dry powder paint is applied to a metal surface. Unlike traditional, liquid paint, powder coating does not need a solvent to keep the binder and filler of the paint in liquid suspension.',
			'colors' => 'Black, White',
			// 'types' => 'Matte',
			'texture' => 'Gloss (90%) or Semi-Gloss (20%)',
			'applicable_materials' => 'Aluminum, Stainless Steel, Steel',
			// 'can_be_applied_with' => 'Black Oxide, Electroless Nickel Plating, Electropolish, Zinc Plating, Tumbling, Media Blasting',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 4 days',
			'link' => '/capabilities/finishes/powder-coating/'
		),

		array(
			'name' => 'Tumbling',
			'para' => 'Tumbling is a finishing process that is used to clean, deburr, and slightly smooth smaller parts.',
			'colors' => 'Black, White',
			// 'types' => 'Matte',
			'texture' => 'Slightly rounded edges, smooth, slightly matte finish, does not hide all machine marks',
			'applicable_materials' => 'Aluminum, Steel, Stainless Steel, Titanium',
			'can_be_applied_with' => 'Any finish',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 2 days',
			'link' => '/capabilities/finishes/tumbling/'
		),

		array(
			'name' => 'Zinc Plating',
			'para' => 'Zinc plating, which is also known as galvanization, is applied to prevent the surface from oxidizing or corroding.',
			'colors' => 'Clear, light blue coating or glossy black coating',
			// 'types' => 'Matte',
			'texture' => 'Smooth finish, does not hide machine marks',
			'applicable_materials' => 'Steel, Stainless Steel',
			'can_be_applied_with' => 'Media Blasting, Tumbling, Passivation',
			// 'thickness' => '0.25-1.0 µm; 0.00001-0.00004 inches',
			'lead_time' => 'As fast as 3 days',
			'link' => '/capabilities/finishes/zinc-plating/'
		)
	);
?>
<section class="section">
	<div class="container">
		<div class="text-center mb-2">
			<h3 class="text-blue-dark uppercase font-museo-900">
				CNC SURFACE FINISHING OPTIONS
			</h3>
		</div>
		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
		<div class="flex mb-8 justify-center toggle-btns-wrapper flex-wrap">
			<?php 

				foreach ( $options as $i => $option ) :
				
			?>
			<a class="inline-block module-toggle-btn inline-link mx-4 mb-2 <?php if( $i === 0 ) : echo 'active'; endif; ?> pb-2 border-b-2 border-transparent transition-colors duration-200 ease-in-out" href="#cnc-finishing-options-<?php echo $i; ?>"><?php echo $option['name']; ?></a>
			<?php 
				endforeach;
			?>
		</div>
		<div class="mb-12 toggle-module-wrapper">
			<?php 
				foreach ( $options as $i => $option ) :
			?>
			<div data-toggle-module="cnc-finishing-options-<?php echo $i; ?>" class="toggle-module <?php 
					if( $i !== 0 ) :

						echo 'hidden';

					endif;
				?>">
				<div class="flex justify-between">
					<div class="md:w-5/12">
						<div class="mb-4">
							<h3 class="font-museo-900 text-blue-dark text-48">
								<?php echo $option['name']; ?>
							</h3>
						</div>
						<div class="mb-4">
							<p>
								<?php echo $option['para']; ?>
							</p>
						</div>
						<div>

							<?php 
								if ( isset( $option['colors'] ) ) :
								
							?>

							<p class="mb-2">
								<strong>Colors: </strong> <?php echo $option['colors']; ?>
							</p>

							<?php 
								endif;
							?>
							<?php 
								if ( isset( $option['types'] ) ) :
								
							?>
							<p class="mb-2">
								<strong>Types: </strong> <?php echo $option['types']; ?>
							</p>
							<?php 
								endif;
							?>

							<?php 
								if ( isset( $option['texture'] ) ) :
								
							?>
							<p class="mb-2">
								<strong>Texture: </strong> <?php echo $option['texture']; ?>
							</p>

							<?php 
								endif;
							?>
							<p class="mb-2">
								<strong>Applicable materials: </strong> <?php echo $option['applicable_materials']; ?>
							</p>

							<?php 
								if ( isset( $option['can_be_applied_with'] ) ) :
								
							?>
							<p class="mb-2">
								<strong>Texture: </strong> <?php echo $option['can_be_applied_with']; ?>
							</p>

							<?php 
								endif;
							?>

							<?php 
								if ( isset( $option['thickness'] ) ) :
								
							?>
							<p class="mb-2">
								<strong>Thickness: </strong> <?php echo $option['thickness']; ?>
							</p>

							<?php 
								endif;
							?>

							<p class="mb-2">
								<strong>Lead time: </strong> <?php echo $option['lead_time']; ?>
							</p>
						</div>
						<div>
							<a class="text-teal-light hover:text-red-dark" href="<?php echo $option['link']; ?>">Learn more</a>
						</div>
						
					</div>
					<div class="md:w-1/2">
						<img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/cnc-option-<?php echo str_replace(' ', '-', strtolower( $option['name'] ) ); ?>.jpg">
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
					<a href="https://docsend.com/view/vy55xfhaxe7chszc" class="absolute w-full h-full inset-0"></a>
					<div class="mr-2">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/download.svg');
						?>
					</div>
					<div>
						<p class="text-blue-light text-16 group-hover:text-red-dark">Download CNC Finishing Guide</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>


<section class="py-40 hidden">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-6/12">
				<div class="text-center mb-12">
					<h3 class="text-blue-light uppercase text-36 font-museo-900">tolerances</h3>
					<p class="">
						With a drawing, Fictiv can produce parts with tolerance as low as 0.0003 in. Without a drawing, all parts are produced to our ISO 2768 medium standard.

					</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section bg-grey-100">
	<div class="container">
		<div class="text-center mb-12">
			<p class="uppercase text-blue-light font-museo-900">
				CUSTOM CNC MACHINING APPLICATIONS
			</p>
			<h3 class="text-blue-dark uppercase text-36 font-museo-700">
				FROM PROTOTYPE TO PRODUCTION
			</h3>
		</div>
		<div class="flex flex-wrap -mx-6 mb-12">
			<?php 
				$features = array(
					array(
						'title' => 'Mid Stage Prototypes',
						'para' => 'CNC machining is an ideal process for mid-stage functional prototypes. Fictiv can help you accelerate development cycles with instant quotes, intelligent DFM feedback, and rapid lead times.',
						'dots' => array(
							'Finishing, masking & hardware installation',
							'Milling, turning, gear hobbing, EDM',
							'Tolerances as tight as +/- 0.0002"'
						)
					),

					array(

						'title' => 'Production Parts',
						'para' => 'CNC machining is often leveraged for end-use production grade parts. Fictiv\'s global manufacturing network is optimized for production machining, with volumes up to 1M units.',
						'dots' => array(
							'Inspections using CMM or laser scanners',
							'Material certification available',
							'ISO 9001 certified, AS 9100 / ISO 13485 compliant'
						)
					),

					array(
						'title' => 'Production Tooling',
						'para' => 'CNC machining is ideal for manufacturing components needed for production, including fixtures, jigs, gauges, molds, dies, cutting equipment, and patterns.',
						'dots' => array(
							'Vetted partners in the U.S. and overseas',
							'Economical pricing options',
							'2D drawings accepted'
						)
					),
				);

				foreach ($features as $i => $feature ) :
				
			?>
			<div class="md:w-1/3 px-6">
			
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
	</div>
</section>


<?php get_template_part('partials/tolerance-chart'); ?>
<?php get_template_part('partials/our-quality-promise'); ?>

<section class="section">
	<div class="container">
		<div class="text-center mb-2">
			<h3 class="text-blue-dark uppercase font-museo-900">
				TECHNOLOGY OVERVIEW: WHAT IS CNC MACHINING?
			</h3>
		</div>
		<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
		<div class="flex justify-center flex-wrap">
			<div class="w-11/12 md:w-10/12">
				<?php 
					$overviews = array(
						array(
							'title' => 'About the CNC Process',
							'para' => 'CNC, or computer numerical control machining, is a subtractive manufacturing method that leverages a combination of computerized controls and machine tools to remove layers from a solid block of material.'
						),

						array(
							'title' => 'Types of CNC Machining',
							'para' => 'Depending on the type of part that needs to be machined, there are different types of machining tools best fit for the job. For'
						),

						array(
							'title' => 'CNC vs 3D Printing',
							'para' => 'Compared with parts manufacturing through additive methods, CNC machined parts are functionally stronger and typically have superior production quality and finish.'
						),

						array(
							'title' => 'CNC Design Considerations',
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
<div>
	<div class="text-center mb-2">
		<h3 class="text-blue-dark uppercase font-museo-900">
			CNC MACHINING RESOURCES
		</h3>
	</div>
	<div class="w-10 h-1 border-b border-blue-dark mx-auto mb-8"></div>
</div>
<section>
	<div class="flex items-stretch">
		<?php 
			$ctas = array(
				array(
					'bg' => '',
					'label' => 'DESIGN GUIDE',
					'title' => 'CNC Design Guide',
					'para' => 'Industry best practices including: threaded holes, corner design, feature symmetry, advanced tips',
					'cta_text' => 'free download',
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
					'label' => 'hardware GUIDE',
					'title' => 'HOW TO CUT CNC MACHINING COSTS',
					'para' => 'Learn about the key factors in part design that drive costs for CNC machining and keep your budget on track.',
					'cta_text' => 'keep reading',
					'cta_link' => '#'
				),
			);

			foreach ( $ctas as $i => $cta ) :

				$i++;
			
		?>
		<div class="md:w-1/2">
			<div class="p-20 bg-grey-<?php echo $i; ?>00 h-full">
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
		<?php 
			endforeach;
		?>
	</div>
</section>
<?php 
get_footer();
?>