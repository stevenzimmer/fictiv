<?php /* Template Name: Our Network */ ?>
<?php 
	get_header();
	// the_title();
?>
<section class="py-10 bg-grey-100"></section>
<header class=" bg-grey-100 relative">
	<div class=" w-full h-full relative lg:absolute inset-0 flex items-center lg:justify-end mb-6 lg:mb-0 max-w-1600 mx-auto">

		<div class="w-full lg:w-6/12">
			<img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/our-network-hero.png">
		</div>
	</div>
	<!-- <div class="bg-white md:bg-transparent md:bg-gradient-to-r from-white via-white  absolute w-full h-full inset-0 opacity-75 md:opacity-100"></div> -->
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 ">
				
				<div class="w-full lg:w-5/12">
					<div class="mb-6">
						<h1 class="text-grey-700 font-museo-700 leading-tight text-29 md:text-36">
							The world's best manufacturers, connected
						</h1>
					</div>
					<div class="mb-6">
						<p class="md:text-20 font-museo-500 text-grey-600">
							Fictiv’s Digital Manufacturing Ecosystem connects the best suppliers around the globe, enabling true manufacturing agility.
						</p>
					</div>
					<div class="flex flex-wrap -mx-6">
						<div class="lg:w-1/2 flex items-center w-full px-6 mb-6">
							<div class="mr-2">
								<!-- Icon -->
								<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/countries.svg">
							</div>
							<div class="w-full">
								<p class="text-grey-600 font-museo-700 leading-tight md:text-20">
									4 countries
								</p>
							</div>
						</div>

						<div class="lg:w-1/2 flex items-center w-full px-6 mb-6">
							<div class="mr-2">
								<!-- Icon -->
								<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/partners.svg">
							</div>
							<div class="w-full">
								<p class="text-grey-600 font-museo-700 leading-tight md:text-20">
									250+ highly vetted partners
								</p>
							</div>
						</div>
						<div class="lg:w-1/2 flex items-center w-full px-6">
							<div class="mr-2">
								<!-- Icon -->
								<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/hours-of-capacity.svg">
							</div>
							<div class="w-full">
								<p class="text-grey-600 font-museo-700 leading-tight md:text-20">
									10,000 monthly hours of capacity
								</p>
							</div>
						</div>
					</div>
					
				</div>	
			</div>
		</div>
	</div>
</header>
<section class="py-10 bg-grey-100"></section>
<?php 

	$partner_args = array(
		'posts_per_page' => -1,
	    'post_type' => array('cpt_partners'),
	    'post_parent' => 0
	);

	$partner_posts = new WP_Query( $partner_args );

	$partner_processes = array();


	if ( $partner_posts->have_posts() ) :

?>
<section class="py-20">
	<div class="container">
		<div class="text-center mb-6">
			<h2 class="text-grey-700 font-museo-700 leading-3 text-20 md:text-29 mb-6">Fictiv Partners</h2>
			<p class="md:text-20 font-museo-500 text-grey-600 ">
				Meet a few of the trusted partners that power our network
			</p>
		</div>
		<div class="flex justify-center mb-12">

			<?php 
				$i = 0;
				while ( $partner_posts->have_posts() ) : 
					$partner_posts->the_post();

					if ( !in_array( get_the_terms( get_the_id(), 'fictiv_manufacturing_process')[0]->term_id, $partner_processes) ) :
						array_push( $partner_processes, get_the_terms( get_the_id(), 'fictiv_manufacturing_process')[0]->term_id );
			?>
			<a class="partner-toggle-btn mx-1 border border-grey-200 hover:border-teal-light py-1 px-3 rounded select-none cursor-pointer text-16 font-museo-700 text-grey-600 hover:text-teal-light whitespace-no-wrap duration-200 ease-in-out <?php 
				
				if( $i === 0 ) :

					echo 'active';
				
				endif;

			?>" data-manufacturing-process="<?php echo get_the_terms( get_the_id(), 'fictiv_manufacturing_process')[0]->term_id ?>">
				<?php echo get_the_terms( get_the_id(), 'fictiv_manufacturing_process')[0]->name ?>
					
			</a>
			<?php
					endif;
				
				$i++;
				endwhile;
				wp_reset_postdata();
			?>


		</div>
		<div class="flex justify-center">
			<div class="w-full lg:w-10/12">
				<div class="flex flex-wrap justify-center -mx-2">
					<?php 
						$i = 0;
						while ( $partner_posts->have_posts() ) : 
							$partner_posts->the_post();

					?>
					<div class="w-11/12 lg:w-1/3 mb-6 partner-card px-2 <?php 
						if( get_the_terms( get_the_id(), 'fictiv_manufacturing_process')[0]->term_id !== $partner_processes[0] ) :
							echo 'hidden';
						endif;
					?>" data-manufacturing-process="<?php echo get_the_terms( get_the_id(), 'fictiv_manufacturing_process')[0]->term_id; ?>">

		                <div class="relative group border border-grey-200">
		                    <a href="<?php the_permalink(); ?>" class="w-full h-full absolute inset-0 z-30"></a>
		                    <div class="relative h-0" style="padding-bottom: 65.25%">

		                        <img alt="<?php the_title() ?> thumbnail" class="lazyload w-full absolute  inset-0 h-full object-cover" data-src="<?php echo get_field('material_thumbnail')['sizes']['medium_large']; ?>">
		                    </div>
		                    <div class="p-4">
		                        <div class="mb-2 h-12">
		                            <p class="font-museo-700 text-grey-700">
		                                <?php 
		                                    the_title();
		                                ?>
		                            </p>
		                        </div>
		                        
		                    	
		                        <div>
		                            <p class="text-teal-light font-museo-700 group-hover:text-teal-dark">Learn more</p>
		                        </div>
		                    </div>
		                </div>
		        
					</div>

					<?php 
						endwhile;
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		
	</div>
</section>
<?php 	
	endif;
?>
<section class="section">
	<div class="container">
		<div class="text-center mb-6">
			<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29">How it Works</h2>
		</div>
		<div class="flex flex-wrap -mx-6 justify-center">
			<?php 
				$works = array(
					array(
						'title' => 'Partner qualification',
						'icon' => 'clipboard',
						'para' => 'Before a supplier can become a Fictiv Partner, we conduct a rigorous series of interviews, facilities inspections, and test sample reviews.'
					),

					array(
						'title' => 'Instant pricing & feedback',
						'icon' => 'hourglass',
						'para' => 'Fictiv’s quote-to-order platform makes it easy to quickly compare pricing, communicate design requirements, and review manufacturing feedback.'
					),

					array(
						'title' => 'Partner matching',
						'icon' => 'handshake',
						'para' => 'We match every order with the best available Partner for the job (no random bidding), so you get the capabilities and expertise you need, every time.'
					),

					array(
						'title' => 'Quality inspection',
						'icon' => 'quality',
						'para' => 'All orders go through Fictiv’s ISO-9001 certified quality management process to ensure you get consistent quality across each and every part.'
					),

					array(
						'title' => 'Parts in record time',
						'icon' => 'record-time',
						'para' => 'Fictiv\'s technology streamlines the order process so our Partners spend less time on administrative tasks and can get you parts faster.'
					)
				);

				foreach ( $works as $i => $work ) :
				
			?>
			<div class="w-11/12 md:w-1/2 lg:w-1/3 px-6 mb-12">
				<div class="mb-2 h-24 flex justify-center items-center">
					<img class="mx-auto lazyload h-16" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $work['icon']; ?>.png">
				</div>
				<div>
					<p class="text-grey-700 font-museo-500 leading-tight text-20 md:text-29 mb-6">
						<span class="text-teal-light"><?php echo $i + 1; ?>.</span>&nbsp;<?php 
							echo $work['title'];
						?>
					</p>
					<p class=" font-museo-500 text-grey-600">
						<?php echo $work['para']; ?>

					</p>
				</div>
				
				
			</div>

			<?php 
				endforeach;
			?>
		</div>
	</div>
</section>
<section class="section bg-blue-100">
	<div class="container">
		<div class="text-center mb-8">
			<h2 class="text-grey-700 font-museo-700 leading-tight text-29 md:text-36 mb-6">Safeguard Security System</h2>
		</div>
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-4/5">
				<div class="flex justify-center flex-wrap">
					<div class="w-full lg:w-1/2 mb-12 lg:mb-0">
						<div class="flex flex-wrap">
							<div class="lg:w-1/5 mb-4 lg:mb-0">
								<img class="lazyload" width="50" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/nda.png">
							</div>
							<div class="lg:w-3/5">
								<h3 class="text-grey-700 font-museo-500 leading-tight text-20 md:text-29 mb-6">Non-disclosure agreements</h3>
								<p class=" font-museo-500 text-grey-600">
									All Fictiv Partners are under strict NDA agreements. Fictiv is also happy to sign company-specific NDAs.
								</p>
							</div>
						</div>
					</div>
					<div class="w-full lg:w-1/2">
						<div class="flex flex-wrap">
							<div class="lg:w-1/5 mb-4 lg:mb-0">
								<img class="lazyload" width="50" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/anonymized.png">
							</div>
							<div class="lg:w-3/5">
								<h3 class="text-grey-700 font-museo-500 leading-tight text-20 md:text-29 mb-6">Anonymized drawings &amp; files</h3>
								<p class=" font-museo-500 text-grey-600">
									We remove any identifying information from 2D drawings and 3D file names and only share files with the Partner who produces your parts.
								</p>
							</div>
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