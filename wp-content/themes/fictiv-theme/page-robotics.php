<?php 
/* 	Template Name: Robotics 
*/ 
	get_header();
?>
<header class="py-12 relative capabilities-hero">
 	<?php 
        if ( has_post_thumbnail() ) :
    ?>
    <div class="absolute w-full h-full inset-0 max-w-1600 mx-auto">
        <div class="flex lg:justify-end h-full">
            <div class="w-full lg:w-9/12">
                <div class="h-full bg-cover bg-center inset-0 lazyload" data-bg="url(<?php the_post_thumbnail_url() ?>)"></div>
            </div>
        </div>
        
    </div>
    
    <?php 
        endif;
    ?>
 
    <div class="bg-white bg-opacity-75 md:bg-transparent bg-gradient-to-r from-white to-transparent absolute w-full inset-0 h-full"></div>

    <div class="container relative">
        <div class="flex justify-center">
            <div class="w-11/12">
                <div class="flex flex-wrap justify-center lg:justify-start">
                    <div class="w-full lg:w-5/12 lg:w-6/12">
                        <div>
                            <p class="text-grey-400 font-museo-700 uppercase" >
                                Fictiv for robotics
                            </p>
                            
                        </div>
                        <div >
                            <h1 class="text-grey-700 font-museo-700">PRECISION QUALITY PARTS AT UNMATCHED SPEEDS</h1>

                        </div>
                        <?php 
                            if( get_field('capabilities_hero_paragraph') ) : 
                        ?>
                        <div class="text-grey-600 capabilities-hero-paragraph box-check-dark mb-4 mt-2">
                            <?php 
                                the_field('capabilities_hero_paragraph');
                            ?>
                        </div>

                        <?php 
                            endif;

                            $hero_cta_btn = get_field('capabilities_hero_cta_button');

                            if ( $hero_cta_btn ) :
                                
                        ?>
                        <div>
                            <a class="btn btn-primary" href="<?php echo $hero_cta_btn['link']; ?>"><?php echo $hero_cta_btn['text']; ?></a>  
                        </div>

                        <?php
                            endif;
                        ?>
                    </div>
                  
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
					<h3 class="text-blue-dark uppercase font-museo-900 text-24 lg:text-36 leading-tight">
						ACCESS A VARIETY OF HIGH PRECISION CAPABILITIES THROUGH ONE PLATFORM
					</h3>
				</div>
			</div>
		</div>
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				<div class="flex flex-wrap -mx-4">
					<?php 
						$types = array(
								array(
									'img' => "cnc-milling",
									'title' => 'CNC MILLING',
									'text' => '3, 4 and 5-axis machining capabilities for simple and complex geometries',
									'link' => '/processes/cnc-milling/'
								),

								array(
									'img' => "cnc-turning",
									'title' => 'CNC TURNING',
									'text' => 'Standard and live tooling capabilities for cylindrical parts such as pins, shafts, and spacers.',
									'link' => '/processes/cnc-turning/'
								),

								array(
									'img' => "gear-hobbing",
									'title' => 'GEAR HOBBING',
									'text' => 'A wide range of stock hobbing tools available for quick turnaround times. Custom hobbing also available.',
									'link' => '/processes/gear-hobbing/'
								),

								array(
									'img' => "high-resolution-3d-printing",
									'title' => 'HIGH RESOLUTION 3D PRINTING',
									'text' => 'MJF, SLA, PolyJet SLS, FDM.',
									'link' => '/3d-printing-service/'
								),

								array(
									'img' => "finishing",
									'title' => 'Finishing',
									'text' => 'Anodizing, Alodine, Media Blasting, Tumbling, Passivation, Plating, Powder Coating and more.',
									'link' => 'https://docsend.com/view/2b5d4ye'
								),

								array(
									'img' => "electrical-discharge-machining",
									'title' => 'ELECTRICAL DISCHARGE MACHINING (EDM)',
									'text' => 'Useful for cutting deep pockets and complex features such as gears and holes with a keyway. Wire & sinker.',
									'link' => '/processes/electrical-discharge-machining/'
								)
							);

							foreach ( $types as $i => $type ) :
					?>
					<div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12 last:mb-0">
						<div class="relative group">
							<a href="<?php echo $type['link']; ?>" class="absolute w-full h-full inset-0"></a>
							<div class="">
								<div class="relative h-0 bg-white" style="padding-bottom: 92%">
						            <img class="absolute top-0 left-0 w-full h-full object-cover lazyload" alt="<?php echo $type['title']; ?> thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/<?php echo $type['img']; ?>-thumbnail.jpg">
						        </div>
							</div>
						
							<div class="text-center py-2">
								<div class="mb-2">
									<p class="text-blue-dark uppercase font-semibold mb-2 font-museo-900">
										<?php 
											echo $type['title'];
										?>
									</p>
								</div>
								<div class="h-12 mb-2">
									<p class="text-blue-dark">
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
			<div class="w-11/12 lg:w-3/12 mb-6 lg:mb-0">
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


<section class="relative max-w-1600 mx-auto">
	
	<div class="flex flex-wrap justify-center lg:justify-between">
		<div class="w-full lg:w-6/12 relative py-20">
			
			<div class="absolute w-full h-full inset-0 bg-cover bg-center lazyload" data-bg="url(<?php echo get_template_directory_uri() . '/assets/images/background/cnc-machining-header.jpg'; ?>)"></div>

			<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>

			<div class="flex justify-center relative">
				<div class="w-11/12 lg:w-9/12 xl:w-8/12">
					<div class="mb-4">
						<p class="text-white text-18 uppercase font-museo-900">webinar</p>	
					</div>
					<div class="mb-4">
						<p class="text-white text-36 font-museo-900 leading-none uppercase">HOW TO CHOOSE THE BEST FASTENERS FOR 3D PRINTED PARTS</p>
					</div>
					<div class="mb-4">
						<p class="text-white text-18">
							There are a lot of different ways to implement threads into your 3D printed part. Here we cover the pros and cons of the most common methods as well as specific installation steps to help get you started.
						</p>
					</div>
					<div>
						<a href="/webinars/how-to-automate-robotics-processes-in-record-time/" class="btn btn-secondary">learn more</a>
					</div>
				</div>
			</div>
			
		</div>
		<div class="w-full lg:w-6/12 py-20 relative">

			<div class="absolute w-full h-full inset-0 bg-cover bg-center lazyload" data-bg="url(<?php echo get_template_directory_uri() . '/assets/images/background/404-bg.jpg'; ?>)"></div>

			<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>
			<div class="flex justify-center relative">
				<div class="w-11/12 lg:w-9/12 xl:w-8/12">
					<div class="mb-4">
						<p class="text-white text-18 uppercase font-museo-900">Datasheet</p>	
					</div>
					<div class="mb-4">
						<p class="text-white text-36 font-museo-900 leading-none uppercase">Fictiv Tolerance standards</p>
					</div>
					<div class="mb-4">
						<p class="text-white text-18">
							Download the PDF reference sheet for our tightest tolerance standards for CNC.
						</p>
					</div>
					<div>
						<a href="https://docsend.com/view/zvfpzcx" class="btn btn-secondary">free download</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

<?php 
	get_footer();
?>