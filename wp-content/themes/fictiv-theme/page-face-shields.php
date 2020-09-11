<?php /* Template Name: Covid 19 Face Shields */ ?>
<?php 
	get_header();

?>
<header class="py-20 bg-blue-100">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-9/12 lg:w-6/12">
				<div class="text-center mb-6">
					<h1 class="uppercase text-24 lg:text-48 text-blue-dark font-museo-900 leading-tight">COVID-19 Face Shields</h1>
				</div>
				<div class="flex justify-between flex-wrap text-blue-light mb-6">
					<div class="w-full lg:w-1/2 text-center lg:text-left">
						<span class="font-museo-700">Phone:</span>
						<a href="tel:5103945236">(510) 394-5236</a>
					</div>
					<div class="w-full lg:w-1/2 text-center lg:text-right">
						<span class="font-museo-700">Email:</span>
						<a href="mailto:faceshields@fictiv.com">
							faceshields@fictiv.com
						</a>

					</div>
				</div>
				<div class="mb-6">
					<p class="text-18 font-museo-500 text-blue-dark">
                        Leveraging the best open source designs, a team of manufacturing experts, and its global manufacturing network, Fictiv is manufacturing millions of protective face shields at cost, for healthcare agencies
                        with urgent need in the fight against COVID-19.
                    </p>
				</div>
				<div class="flex justify-between flex-wrap text-blue-light mb-6">
					<div class="w-full lg:w-1/2 text-center mb-6 lg:mb-0">
						<a href="#order-form" class="btn btn-secondary">Order now</a>
					</div>
					<div class="w-full lg:w-1/2 text-center">
						<a href="#learn-more" class="btn btn-ghost btn-ghost-secondary">Learn more</a>
					</div>
		
				</div>
				<div class="flex flex-wrap bg-white">
					<div class="w-full lg:w-1/2">
						<img alt="face shield 1" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/face-shield-1.jpg"/>
					</div>
					<div class="w-full lg:w-1/2">
						<img alt="face shield 2" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/face-shield-2.jpg"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>        

<section class="py-20" id="learn-more">
	<div class="container">
		<div class="flex flex-wrap justify-center items-center mb-12 flex-col-reverse lg:flex-row">
			<div class="w-full lg:w-1/2">
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
			<div class="w-11/12 lg:w-1/2">
				<div>
					<div class="mb-6">
						<h2 class="uppercase text-24 lg:text-36 text-blue-dark font-museo-900 leading-tight">Design Specs</h2>
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
				<p class=" text-grey-dark">
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
			<h2 class="uppercase text-24 lg:text-36 text-blue-dark font-museo-900 leading-tight">FACE SHIELD ASSEMBLY DEMO</h2>
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
			<h2 class="uppercase text-24 lg:text-36 leading-tight text-blue-dark font-museo-900">ASSEMBLY INSTRUCTIONS</h2>
		</div>
		<div>
			<img alt="face shield Assembly" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/face-shield-assembly.png"/>
		</div>
	</div>
</section>
<section class="py-20 bg-blue-100"> 
	<div class="container">
		<div class="flex flex-wrap justify-center lg:justify-start -mx-6">
			<div class="w-11/12 lg:w-1/2 px-6">
				<h2 class="uppercase text-24 lg:text-30 leading-tight text-blue-dark font-museo-900 mb-6">COVID-19 SOLUTIONS AND RESOURCES TO MITIGATE SUPPLY CHAIN DISRUPTION</h2>
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

<section class="py-20" id="order-form">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-6/12">

				<div class="text-center mb-6">
					<h3 class="text-blue-dark uppercase font-museo-900 text-24 lg:text-36">order masks</h3>
				</div>
				<div class="mb-4">

					<form class="mktoForm" data-formId="875" data-formInstance="one" data-form-type="mkto-redirect"></form>
				
				</div>
				<div class="px-2">
					<?php 
						get_template_part('partials/gdpr', 'text');
					?>
				</div>
	              
			</div>
		</div>
	</div>
</section>
<?php 
	get_footer();
?>