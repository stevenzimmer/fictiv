<?php /* Template Name: Covid 19 Face Shields */ ?>
<?php 
	get_header();

?>

        <script src="//info.fictiv.com/js/forms2/js/forms2.min.js"></script>
        
<header class="py-40 bg-blue-100">
	<div class="container">
		<div class="flex flex-wrap -mx-6">
			<div class="lg:w-1/2 px-6">
				<div class="mb-4">
					<h1 class="uppercase text-48 text-blue-dark font-museo-900">COVID-19 Face Shields</h1>
				</div>
				<div class="mb-12">
					<p class="text-18 font-museo-500 text-blue-dark">
                        Leveraging the best open source designs, a team of manufacturing experts, and its global manufacturing network, Fictiv is manufacturing millions of protective face shields at cost, for healthcare agencies
                        with urgent need in the fight against COVID-19.
                    </p>
				</div>
				<div class="flex bg-white mb-12">
					<div class="lg:w-1/2">
						<img alt="face shield 1" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/face-shield-1.jpg"/>
					</div>
					<div class="lg:w-1/2">
						<img alt="face shield 2" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/face-shield-2.jpg"/>
					</div>
				</div>
				<div>
					<h2 class="uppercase text-36 text-blue-dark font-museo-900">Lead time</h2>
				</div>
				<div class="mb-12">
					<p class="text-18 font-museo-500 text-blue-dark">
                        Fictiv has invested in the upfront tooling costs to make the shields available as quickly and easily as possible to healthcare agencies, service providers, distributors, and even non-healthcare OEMs that are pivoting to support the healthcare industry during this crisis. While pricing will be matched to cost, any longer term profits beyond initial tooling and unit manufacturing costs will be donated to the
                        <a class="text-blue-light hover:text-red-dark" href="https://covid19responsefund.org/" target="_blank">COVID-19 Solidarity Response Fund for WHO</a>.
                    </p>
				</div>
				<div class="flex -mx-2">
					<?php 
						$units = array(
							array(
								'number' => '1,000 units',
								'days' => 'Ships in 1 day',
							),

							array(
								'number' => '5,000 units',
								'days' => 'Ships in 2 days',
							),

							array(
								'number' => '10,000 units',
								'days' => 'Ships in 4 days',
							),

							array(
								'number' => 'Over 10,000',
								'days' => 'Please inquire via the form',
							),
						);

						foreach ( $units as $i => $unit ) :
						
						
					?>
					<div class="md:w-1/2 lg:w-1/4 px-2">
						<div class="bg-white h-24 flex justify-center items-center">
							<div>
								<div class="text-center">
									<div class="text-blue-dark text-14 uppercase font-museo-900">
										<p>
											<?php echo $unit['number']; ?>
										</p>
									</div>
                                    <div class="">
                                    	<p class="text-blue-dark text-12">
                                    		<?php echo $unit['days']; ?>
                                    	</p>
                                    </div>
								</div>
							</div>
						</div>
					</div>

					<?php 
						endforeach;
					?>
				</div>
			</div>
			<div class="lg:w-1/2 px-6">
				<div class="bg-white p-8">
					<div class="text-center">
						<h3 class="text-blue-dark uppercase font-museo-900 text-24">Request a Quote</h3>
					</div>
					<div class="mb-4">
						<p class="text-blue-dark mb-2">
							Please fill out your information in the form and a Fictiv sales rep will follow up with a quote for purchase within 1 business day.
						</p>
						<p class="text-blue-dark">
							We will accept credit card or purchase order payment methods.
						</p>
					</div>
					<div class="mb-4">

						<script src="//app-ab20.marketo.com/js/forms2/js/forms2.min.js"></script>
			            <form id="mktoForm_875"></form>
			            <script>
			                MktoForms2.loadForm("//app-ab20.marketo.com", "852-WGR-716", 875);
			            </script>
					
					</div>
					<div class="px-2">
						<?php 
							get_template_part('partials/gdpr', 'text');
						?>
					</div>
                               
				</div>
			</div>
		</div>
	</div>
</header>
<section class="py-20 lg:py-32">
	<div class="container">
		<div class="flex mb-12">
			<div class="lg:w-1/2">
				<div class="relative">
					<div class="face-shield-carousel">
                        <?php 
                           $num_face_shields = 7;
                			for ( $i = 0; $i < $num_face_shields; $i++ ) : 
                        ?>
                        
                        <div class="flex justify-center">
                        	<div class="w-11/12 md:w-8/12 lg:w-7/12">
                        		<img alt="face shield <?php echo $i + 1; ?>" class="lazyload " data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/face-shield-<?php echo $i + 1; ?>.jpg"/>
                        	</div>
                            
                        </div>

                        <?php 
                            endfor;
                        ?>
                        
                    </div>
					<div class="absolute left-0 top-0  w-20 h-full " >
			            <div class="flex items-center h-full">
			                <div class="h-40 w-full cursor-pointer" id="face-shield-prev">
			                    <div class="flex w-full justify-center items-center h-full">
			                        <div>
			                             <p class="text-grey-light text-48">&#8249;</p>
			                        </div>
			                       
			                    </div>
			                </div>
			            </div>
			            
			        </div>

			        <div class="absolute right-0 top-0 w-20 h-full " >
			            <div class="flex items-center h-full">
			                <div class="h-40 w-full cursor-pointer" id="face-shield-next">

			                    <div class="flex w-full justify-center items-center h-full">
			                        <div>
			                             <p class="text-grey-light text-48">&#8250;</p>
			                        </div>
			                       
			                    </div>
			                </div>
			            </div>
			        </div>
				</div>
                
			</div>
			<div class="lg:w-1/2">
				<div>
					<div class="">
						<h2 class="uppercase text-36 text-blue-dark font-museo-900">Design Specs</h2>
					</div>
                    <div class="mb-8">
                        <p class="text-blue-dark">
                            The shield is based on open-source face shield designs, similar to the visor recommended by the National Institutes of Health (NIH), but is modified with a closed top to be more consistent with the
                            American National Standards Institute (ANSI) recommendations. While many recent face shields have been manufactured using 3D printing, Fictiv has modified the design and set up an injection molding tool
                            to reach production volumes up to 100x greater than 3D printing for a production quantity totaling millions of shields per month.
                        </p>
                    </div>
                    <div>
                    	<?php 
                    		$specs = array(
                    			'Similar to NIH approved design, optimized for high volume production',
                    			'Fictiv has adapted the design to add a closed top, which is more consistent with ANSI standards',
                    			'This design weighs under 50 grams and is made using a material that provides the visor greater flex and comfort for lengthy all-day wear',
                    			'This design also offers room under the face shield for goggles or larger respirators'
                    		);

                    		foreach ($specs as $i => $spec ) :
                    		
                    	?>
                        <div class="flex">
                            <div class="w-8">

                            	<img width="15" alt="circle green check icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check-circle-green.png">
                         
                       
                            </div>
                            <div class="w-full">
                            	<p class="text-blue-dark">
                            		<?php echo $spec; ?>
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
		<div class="flex justify-center">
			<div class="w-11/12 md:w-8/12 lg:w-6/12 text-center">
				<p class=" text-grey-dark text-14">
                    <em>
                        The face shields are supplied on an as-is basis and a buyer&#x27;s use or sale of the products is at the buyer&#x27;s sole risk. Fictiv does not make any representations or warranties regarding the safety,
                        effectiveness or fitness of this product for any particular purpose or intended use. Unfortunately, we are unable to ship samples.
                    </em>
                </p>
			</div>
		</div>		
	</div>
</section>

<section class="bg-blue-100 py-20 ">
	<div class="container">
		<div class="text-center mb-12">
			<h2 class="uppercase text-36 text-blue-dark font-museo-900">FACE SHIELD ASSEMBLY DEMO</h2>
		</div>
		<div>
			<div style="padding-top: 56.25%;" class=" w-full relative p-0">
                <iframe
                    class="absolute w-full h-full inset-0 "
                    src="https://www.youtube.com/embed/yVzwG-gzUag" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                   
                ></iframe>
            </div>
		</div>
	</div>
</section>


<section class="py-20 ">
	<div class="container">
		<div class="text-center mb-12">
			<h2 class="uppercase text-36 text-blue-dark font-museo-900">ASSEMBLY INSTRUCTIONS</h2>
		</div>
		<div>
			<img alt="face shield Assembly" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/face-shield-assembly.png"/>
		</div>
	</div>
</section>
<section class="py-20 bg-blue-100"> 
	<div class="container">
		<div class="flex flex-wrap -mx-6">
			<div class="lg:w-1/2 px-6">
				<h2 class="uppercase text-30 leading-tight text-blue-dark font-museo-900 mb-8">COVID-19 SOLUTIONS AND RESOURCES TO MITIGATE SUPPLY CHAIN DISRUPTION</h2>
				<p class="text-blue-dark text-20 mb-12">Get the latest webinars, blogs, and key learnings from industry experts to help you achieve supply chain agility during the Coronavirus pandemic.</p>
				<div>
					<a href="/covid-19-supply-chain-solutions/" class="btn btn-ghost btn-ghost-secondary">Learn more</a>
				</div>
			</div>
			<div class="lg:w-1/2">
				<div style="padding-top: 56.25%;" class=" w-full relative p-0">
	                <iframe
	                    class="absolute w-full h-full inset-0 "
	                    src="https://www.youtube.com/embed/3nKSjO5q718" 
	                    frameborder="0" 
	                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
	                   
	                ></iframe>
	            </div>
			</div>
		</div>
	</div>
</section>    

       
       
<script
    src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5881ca284ac19f852fa47c23"
    type="text/javascript"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"
></script>
<script src="https://uploads-ssl.webflow.com/5881ca284ac19f852fa47c23/js/webflow.078567c83.js" type="text/javascript"></script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->




<?php 
	get_footer();
?>