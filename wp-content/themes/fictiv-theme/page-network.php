<?php /* Template Name: Our Network */ ?>
<?php 
	get_header();
	// the_title();
?>
<header class="section bg-blue-100">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-2/5 text-center">
				<h1 class="text-36 text-blue-dark font-museo-500  mb-4">
					The best supplier for every part, every time
				</h1>
				<p class="text-24 font-light">
					Fictiv's Global Manufacturing Network is your single access point for fast, quality parts, from prototype to production.
				</p>
			</div>
		</div>
	</div>
</header>
<section class="section relative bg-white">
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-3/4">
				<div class="flex justify-between mb-8 flex-wrap" >
					<div class="w-full lg:w-1/3 flex items-center mb-4 lg:mb-0">
						<div class="mr-4">
							<img class="lazyload" width="70" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/countries.png">
						</div>
						<div>
							<p class="text-36 font-museo-500">2</p>
							<p>Countries</p>
						</div>
					</div>
					<div class="w-full lg:w-1/3 flex items-center mb-4 lg:mb-0">
						<div class="mr-4">
							<img class="lazyload" width="70" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/partners.png">
						</div>
						<div>
							<p class="text-36 font-museo-500">200+</p>
							<p>pre-qualified partners</p>
						</div>
					</div>
					<div class="w-full lg:w-1/3 flex items-center">
						<div class="mr-4">
							<img class="lazyload" width="70" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/monthly-hours.png">
						</div>
						<div>
							<p class="text-36 font-museo-500">10,000</p>
							<p>monthly hours of capacity</p>
						</div>
					</div>
				</div>
				<div class="w-full">
					<img class="lazyload" alt="fictiv locations map" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/background/fictiv-locations.png">
				</div>
			</div>
		</div>
		
	</div>
</section>

<section class="section bg-blue-100">
	<div class="container">
		<div class="text-center mb-8">
			<h3 class="text-blue-dark text-20 mb-4 font-slab-500 uppercase">Fictiv Partners</h3>
			<p class="text-18">
				Meet a few of the trusted partners that power our network
			</p>
		</div>
		<div class="">
			
			<div class="flex justify-center items-center toggle-btns-wrapper mb-12 flex-wrap ">
				<?php 
					$args = array(
                        'taxonomy'  => array('fictiv_partners_category'),
                        'type' => 'cpt_partners',
                        'orderby' => 'count',
                        'order' => 'DESC',
                        'parent'=> 0,
                        'hide_empty' => false,
                    );

                    $tags = get_terms( $args );
             
                    foreach ( $tags as $i => $tag ) :
				?>

					<a href="#<?php echo $tag->slug; ?>" class="module-toggle-btn partner-btn block lg:mx-6 <?php 
						
						if( $i === 0 ) :

							echo 'active';
						
						endif;
					
					?>">
						<?php 
							echo $tag->name;
						?>
					</a>
			
				<?php 
					endforeach;
				?>
				
			</div>
			<div class="flex justify-center">
				<div class="w-11/12 lg:w-10/12">
					<div class="flex toggle-module-wrapper justify-center lg:justify-start">
						<?php 
							foreach ( $tags as $i => $tag ) :

							$args = array(
	                            'post_type' => array('cpt_partners'),
	                            'posts_per_page' => 3,
	                            'tax_query' => array(
	                                array(
	                                    'taxonomy' => 'fictiv_partners_category',
	                                    'field' => 'id',
	                                    'terms' => $tag->term_id
	                                )
	                            )
	                            
	                        );

	                        $partners = new WP_Query( $args );

	                        if ( $partners->have_posts() ) : 
	                   
	                   ?>
	                   <div data-toggle-module="<?php echo $tag->slug ?>" class="partner-module toggle-module flex justify-center flex-wrap -mx-6 w-full <?php 
	                   	if( $i !== 0 ) :
	                   		echo 'hidden';
	                   	endif;
	                   ?>">
	                   <?php
	                        	while( $partners->have_posts() ) :
	                        	
	                        		$partners->the_post();
	                    ?>
	                    	<div class="w-full lg:w-1/3 px-6">
	                    		<div class="flex justify-center">
	                    			<div class="w-full lg:w-11/12">
	                    				<div class="relative group hover:shadow-lg shadow rounded overflow-hidden transition-shadow duration-200">
	                    		
				                    		<a href="<?php the_permalink(); ?>" class="absolute w-full h-full inset-0 z-50"></a>
				                    		<div class="bg-white text-center h-24 flex items-center justify-center">
				                    			<div class="px-6 lg:px-12">
				                    				<h3 class="text-blue-light font-museo-500 text-20 group-hover:text-red-dark">
					                    				<?php
										                 	the_title();
										                ?>
					                    			</h3>
				                    			</div>
				                    			
				                    		</div>
				                    		<div class="relative h-0" style="padding-bottom: 56.25%">
				                    			
				                    			<img class="block absolute w-full h-full object-cover inset-0 lazyload" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> thumbnail">
				                    		
				                    			<div class="absolute w-40 bottom-0 bg-teal-dark py-2 text-center right-0">
				                    				<p class="uppercase text-white text-12 font-museo-500">learn more</p>
				                    			</div>
				                    		</div>
			                   			</div>
	                    			</div>
	                    		</div>
	                    		
	                    	</div>
	                    <?php
	                        	endwhile;
	                        	wp_reset_postdata();
	                    ?>
	                    </div>
	                    <?php 

	                        endif;

	                    endforeach;
						?>
					</div>
				</div>
			</div>
		
		</div>
		
		
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="text-center mb-8">
			<h2 class="uppercase text-blue-dark text-20 mb-4 font-slab-500">How it Works</h2>
			<div class="w-20 bg-blue-dark mx-auto border-b-2 border-blue-dark"></div>
		</div>
		<div class="flex flex-wrap -mx-4 justify-center">
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

				foreach ($works as $i => $work ) :
				
			?>
			<div class="w-11/12 md:w-1/2 lg:w-1/3 md:px-4 mb-12">
				<div class="mb-2 h-24 flex justify-center items-center">
					<img class="mx-auto lazyload h-16" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $work['icon']; ?>.png">
				</div>
				<div>
					<p class="text-blue-dark text-24 font-semibold">
						<span class="text-teal-light"><?php echo $i + 1; ?>.</span>&nbsp;<?php 
							echo $work['title'];
						?>
					</p>
					<p>
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
			<h2 class="uppercase text-blue-dark text-20 mb-4 font-slab-500">SAFEGUARD SECURITY SYSTEM</h2>
			<div class="w-20 bg-blue-dark mx-auto border-b-2 border-blue-dark"></div>
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
								<h3 class="text-blue-dark text-36 mb-4 leading-tight font-bold">Non-disclosure agreements</h3>
								<p class="text-18">
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
								<h3 class="text-blue-dark text-36 mb-4 leading-tight font-bold">Anonymized drawings &amp; files</h3>
								<p class="text-18">
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