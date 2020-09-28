<?php /* Template Name: Covid 19 Supply Chain Solutions */ ?>
<?php 
	get_header();

?>
<header class="py-20"> 
	<div class="container">
		<div class="flex flex-wrap justify-center lg:justify-start lg:-mx-6">
			<div class="w-11/12 lg:w-1/2 lg:px-6">
				<h2 class="uppercase text-24 lg:text-30 leading-tight text-blue-dark font-museo-900 mb-8">COVID-19 SOLUTIONS AND RESOURCES TO MITIGATE SUPPLY CHAIN DISRUPTION</h2>
				<p class="text-blue-dark text-20 mb-12">Get the latest webinars, blogs, and key learnings from industry experts to help you achieve supply chain agility during the Coronavirus pandemic.</p>
				
			</div>
			<div class="w-full lg:w-1/2">
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
</header>
<section class="py-20 bg-blue-100">
	<div class="container">
		<div class="flex flex-wrap justify-center lg:justify-start lg:-mx-6">
			<div class="lg:w-1/2 lg:px-6">
				<div class="flex flex-wrap bg-white mb-12">
					<div class="w-full lg:w-1/2">
						<img alt="face shield 1" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/face-shield-1.jpg"/>
					</div>
					<div class="w-full lg:w-1/2">
						<img alt="face shield 2" class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/face-shield-2.jpg"/>
					</div>
				</div>
			</div>
			<div class="w-11/12 lg:w-1/2 lg:px-6">
				<h2 class="uppercase text-30 leading-tight text-blue-dark font-museo-900 mb-8">COVID-19 Face Shields</h2>
				<p class="text-blue-dark text-20 mb-8">Leveraging the best open source designs, a team of manufacturing experts, and its global manufacturing network, Fictiv is manufacturing millions of protective face shields at cost, for healthcare agencies with urgent need in the fight against COVID-19.</p>
				<div>
					<a href="/covid-19-face-shields/" class="btn btn-ghost btn-ghost-secondary">Learn more</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="relative py-20">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/careers-header.jpg'; ?>)"></div>
	<div class="container relative">
		<div class="flex flex-wrap justify-center lg:justify-start lg:-mx-6 items-center">
			<div class="w-11/12 lg:w-1/2 lg:px-6">
				<h2 class="uppercase text-30 leading-tight text-blue-dark font-museo-900 mb-8">We're here to help</h2>
				<p class="text-blue-dark text-20">We are open for business and will help you meet your deadlines. Get in touch with us if you have any questions or create your account to get an instant quote.</p>
				
			</div>
			<div class="w-11/12 lg:w-1/2 lg:px-6">
				<div class="text-center">
					<a href="mailto:help@fictiv.com?subject=Get%20in%20Touch" class="btn btn-secondary">get in touch</a>

				</div>
			</div>
			
		</div>
	</div>
</section>

<?php 
	if ( !empty( get_field('add_resource_post') ) ) : 
?>
	
<section class="py-20 ">
	<div class="container">
		<div class="text-center mb-12">
			<h2 class="uppercase text-24 lg:text-36 text-blue-dark font-museo-900">Supply Chain Resources</h2>
		</div>
		<div class="flex flex-wrap justify-center md:justify-start lg:-mx-3">
			<?php 

				foreach ( get_field('add_resource_post') as $i => $resource_id ) :

			?>

			<div class="w-11/12 md:w-1/2 lg:w-1/3 mb-6 lg:px-3">
				<div class="border border-grey-200 relative h-full">
					<a href="<?php echo get_the_permalink( $resource_id ) ?>" class="w-full h-full absolute inset-0 z-50"></a>
					<div class="relative h-0 thumbnail-ratio" >
						
						<img title="<?php echo get_the_title( $resource_id ); ?>" class="lazyload absolute inset-0 w-full h-full object-cover" data-src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $resource_id ), 'medium_large', false )[0]; ?>">

					</div>
					<div class="p-2 relative">
						<div class="mb-1">
							<p class="text-grey-600 text-12 font-museo-700 uppercase"><?php 
						
							echo get_post_type_object( get_post_type( $resource_id ) )->labels->singular_name;
							?></p>
						</div>
						<div class="h-12 mb-2">
							<h2 class="text-16 font-museo-700 text-grey-700 max-lines max-lines-2"><?php 
								echo get_the_title( $resource_id );

							?></h2>
						</div>
						<div class=" text-grey-600 font-museo-500 h-24">
							<?php 
								if( get_the_excerpt(  $resource_id  ) ) :
							?>
							<p class=" max-lines max-lines-3">
								
								<?php 
									echo get_the_excerpt( $resource_id  );
								?>
								
							</p>
							<?php 
								endif;
							?>
						</div>

						<div class="absolute right-0 bottom-0 p-4">
						
							<div>
								<?php 
									echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/cta-arrow.svg');
								?>
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
</section>

<?php 
	endif; 
?>

<?php 
    if( have_rows('featured_press') ) :
?>

<section class="py-20 ">
	<div class="container">
		<div class="text-center mb-12">
			<h2 class="uppercase text-24 lg:text-36 text-blue-dark font-museo-900">Featured News Articles</h2>
		</div>
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-10/12">
				
				<?php 
	     
	                while( have_rows('featured_press') ) : 
	                    the_row();
	                   
	            ?>
	            <div class="mb-12 last:mb-0 flex flex-wrap justify-center lg:justify-start ">
	            	<div class="w-full lg:w-1/3 mb-6 lg:mb-0">
	            		<div class="w-full lg:w-6/12">
	            			<img alt="<?php the_sub_field('featured_press_title'); ?> logo" src="<?php the_sub_field('featured_press_logo'); ?>">
	            		</div>
	            		
	            	</div>
	            	<div class="w-full lg:w-8/12">
	            		<p class="text-blue-dark font-museo-900 leading-tight text-20 mb-4">
	            			<?php the_sub_field('featured_press_title'); ?>
	            		</p>

	            		<p class="mb-4">
	            			<?php the_sub_field('featured_press_snippet'); ?>
	            		</p>

	            		<a class="text-blue-light font-museo-700 block" href="<?php the_sub_field('featured_press_external_link'); ?>">Read more</a>
	            	</div>
	            </div>
	            <?php 
	            	endwhile;
	            ?>
            </div>
		</div>
	</div>
</section>

<?php 
	endif;
?>

<section class="bg-grey-100 section-half">
	<div class="container">
		<div class="text-center mb-4">
			<p class="text-blue-dark text-18 uppercase font-museo-900">ENABLING SOME OF THE WORLD'S MOST INNOVATIVE TEAMS</p>	
		</div>
		<div class="flex justify-between items-center flex-wrap">
			<div class="px-4">
				<img class="lazyload" width="50" alt="Nasa Logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/nasa-jpl.png">
			</div>
			<div class="px-4">
				<img class="lazyload" width="50" alt="ideo Logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/ideo.png">
			</div>
			<div class="px-4">
				<img class="lazyload" width="50" alt="panavision Logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/panavision.png">
			</div>
			<div class="px-4">
				<img class="lazyload" width="50" alt="velodyne Logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/velodyne.png">
			</div>
			<div class="px-4">
				<img class="lazyload" width="50" alt="Ford Logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/ford.png">
			</div>
		</div>
	</div>
</section>

<?php 
	get_footer();
?>