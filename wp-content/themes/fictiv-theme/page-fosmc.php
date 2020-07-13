<?php /* Template Name: FOSMC */ ?>
<?php 
	get_header();

?>
<header class="relative h-screen">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/fosmc-bg-header.jpg'; ?>)"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>
	<div class="container relative  h-full">
		<div class="justify-center items-center h-full flex">
			<div class="text-center">
				<h1 class="text-white text-48 font-museo-500">Open source. Open road.</h1>
				<div class="flex justify-center">
					<div class="w-11/12 lg:w-8/12">
						<p class="text-white text-24">Build your own fully customizable, street-legal motorcycle in a weekend</p>
					</div>
				</div>
                
			</div>
			
		</div>
	</div>
</header>

<section class="py-20 bg-grey-100">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-6/12">
				<div class="text-center mb-12">
					 <h2 class="mb-4 font-slab-500 text-30">
					 	The Fictiv Open Source Motorcycle
					 </h2>
					 <p class="mb-2">
					 	In just a weekend, you can build a custom-designed, street-legal motorcycle with nothing but a wrench and some hand tools.
					 </p>
					 <p>
					 	Introducing FOSMC: The Fictiv Open Source Motorcycle
					 </p>

				</div>		
			</div>
		</div>
		
		<div style="padding-top: 56.25%;" class=" w-full relative p-0">
            <iframe
                class="absolute w-full h-full inset-0 "
                src="https://www.youtube.com/embed/9s0LnAWGwF4" 
                frameborder="0" 
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
               
            ></iframe>
        </div>
	</div>
</section>

<section class="py-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-6/12">
				<div class="text-center mb-12">

					<h2 class="mb-4 font-slab-500 text-30">
					 	Build a Motorcycle in Your Garage
					</h2>
					<p class="mb-4">
					 	With FOSMC, you get access to 57 open source part designs—all modular, easily assembled (no welding), and produced with standard prototyping technologies like 3D printing, CNC machining, and laser cutting.
					</p>
					<div class="text-center">
					 	<a href="https://www.dropbox.com/sh/d0synq3dy0o2ue7/AADHvuBd2onvvYuOt8pF-ZGxa?dl=0" class="btn btn-primary">download files</a>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="flex flex-wrap -mx-2 justify-center md:justify-start">
			<?php 
				$cols = array(
					array(
						'img' => 'machined-parts',
						'title' => 'CNC machined parts',
						'para' => 'Machine at your local machine shop by through leveraging Fictiv&#x27;s distributed manufacturing network'
					),

					array(
						'img' => '3d-printed-components',
						'title' => '3D printed components',
						'para' => '3D print all plastic parts on any hobbyist-level FDM machine in PLA or ABS'
					),

					array(
						'img' => 'hand-formed-sheet-metal',
						'title' => 'Hand-formed sheet metal',
						'para' => 'All sheet metal can be cut on a waterjet, plasma cutter, or laser cutter and formed using hand tools'
					),

					array(
						'img' => 'easily-bent-tubes',
						'title' => 'Easily bent steel tubes',
						'para' => 'Tube steel can be purchased at your local hardware store and bent in your garage on a hand tube bender'
					),
				);

				foreach ( $cols as $i => $col ) :
			?>
			<div class="w-11/12 md:w-1/2 lg:w-1/4 px-2">
				<div style="padding-top: 56.25%;" class=" w-full relative p-0 mb-2">
					<img class="absolute w-full h-full inset-0 object-cover lazyload" alt="<?php echo $col['title'] ?> thumbnail" data-src="<?php echo get_template_directory_uri() . '/assets/images/graphics/fosmc-' . $col['img'] . '.jpg'; ?>">
				</div>
				<div class="text-center mb-2">
					<p class="font-museo-500"><?php echo $col['title']; ?></p>
				</div>
				<div>
					<p><?php echo $col['para']; ?></p>
				</div>
			</div>
			<?php
				endforeach;
			?>
		</div>
	</div>
</section>

<section class="py-20 bg-grey-100">
	<div class="container">
		<div class="text-center">
			<h2 class="mb-4 font-slab-500 text-30">
				FOSMC + Amazon: An IoT Motorcycle Platform
			</h2>
		</div>
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-6/12">
				<div class="text-center mb-12">
					 
					 <p class="mb-4">
					 	FOSMC is designed to work with Amazon Web Service&#x27;s innovative new IoT platform for motorcycles, using the Intel Edison board.
					 </p>
					 <p class="mb-4">
					 	For a glimpse of the connected platform features, including engine temperature, lean angle, and acceleration tracking, visit the FOSMC IoT dashboard page
					 </p>
					 <div class="text-center">
					 	<img alt="FOSMC logo" class="lazyload" data-src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/fosmc-logo.png">
					 </div>
				</div>
			</div>
		
		</div>
		

	</div>
</section>

<section class="py-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-9/12">

				<div class="text-center mb-12">
					 <h2 class="mb-4 font-slab-500 text-30">
					 	The Story Behind FOSMC
					 </h2>
				</div>
				<div class="flex -mx-6 flex-wrap">
					<div class="lg:w-7/12 px-6">
						<p class="mb-4">To build not just a fun project, but an exceptional product, we recruited the talents of Julian Farnam, a passionate motorcycle enthusiast and extraordinarily knowledgeable engineer and designer.</p>
					 	<p>With Julian&#x27;s help, we designed and built 57 custom motorcycle parts using 3D printing, CNC machining, and laser cutting technology.</p>
					</div>
					<div class="lg:w-5/12 px-6">
						<div style="padding-top: 56.25%;" class=" w-full relative p-0">
						 	<img class="lazyload absolute w-full inset-0 h-full object-cover" alt="The Story Behind FOSMC thumbnail" data-src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/fosmc-julian.jpg">
						 </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-20 bg-grey-100">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-7/12">
				<div class="text-center mb-12">
					<h2 class="mb-4 font-slab-500 text-30">
						From Digital to Physical, as Fast as Possible
					</h2>
					<p class="mb-4">
						With the power of advanced prototyping technologies (and a few sleepless nights), we designed, prototyped, manufactured, and assembled FOSMC in less than three months.
					</p>
				</div>
			</div>
		</div>
		<div class="flex flex-wrap -mx-6 justify-center md:justify-start">
			<?php 
				$cols = array(
					array(
						
						'para' => 'research, sketch, design'
					),

					array(
						'img' => 'https://global-uploads.webflow.com/5654e7207deb65b23ea76b73/5835f580b333a5214d288e8a_square_2.jpg',
						'para' => 'build, test, iterate'
					),

					array(
						'img' => 'https://global-uploads.webflow.com/5654e7207deb65b23ea76b73/5839ef3245569b016c4ae789_fosmc-cnc1.jpg',
						'para' => 'source, assembly, document'
					),

				
				);

				foreach ( $cols as $i => $col ) :
			?>
			<div class="w-11/12 md:w-9/12 lg:w-1/3 px-6">
				<div class="text-center mb-2">
					<p class="font-museo-500">Phase <?php echo $i + 1; ?>:</p>
					<p><?php echo $col['para']; ?></p>
				</div>
				
				<div style="padding-top: 56.25%;" class=" w-full relative p-0">
               
                    
					<img alt="<?php $col['para']; ?> thumbnail " class="lazyload absolute w-full inset-0 h-full object-cover" data-src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/fosmc-phase-<?php echo $i + 1; ?>.jpg">
				</div>
				
			</div>
			<?php
				endforeach;
			?>
		</div>

	</div>
</section>
<section class="py-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-8/12">
				<div class="text-center mb-12">
					 <h2 class="mb-4 font-slab-500 text-30">
					 	An Open Source Community
					 </h2>
					 <p class="mb-4">
					 	We believe that open source is a key driver to advance innovation in the hardware industry, which is why FOSMC is 100% open source.
					 </p>
					 <p class="mb-4">
					 	This means you have access to the source files and can modify them to make your own custom designs.
					 </p>
					 <div class="text-center">
					 	<a href="https://www.dropbox.com/sh/462edrq52sruehg/AACplCi68DAfpO8vCn2IfU-Ya?dl=0" class="btn btn-primary">download files</a>
					 </div>
				
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	get_footer();
?>