<?php 
	get_header();

?>
<div class="modal micromodal-slide z-50 relative" id="vimeo-modal" aria-hidden="true">
	<div class="modal__overlay fixed inset-0 flex justify-center items-center bg-black bg-opacity-75" tabindex="-1" vimeo-close="vimeo-modal">
    	<div class="modal__container container max-h-screen overflow-y-auto" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
    		
        	<main class="modal__content w-full" id="vimeo-modal-content">
    			<div class="embed-responsive aspect-ratio-16/9 relative h-0 bg-white" style="padding-bottom: 56.25%">
					<iframe id="vimeo-modal-iframe" class="absolute w-full h-full inset-0" frameborder="0" src="" allowfullscreen="" allow="autoplay"></iframe>
				</div>
        		
        	</main>
      	</div>
    </div>
</div>

<header class="py-12 relative homepage-hero">
	<div class="w-full h-full absolute inset-0">
		<div class="relative h-full w-full hidden lg:block">
			<img alt="homepage hero" class="absolute w-full h-full object-cover lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/background/homepage-hero.jpg'; ?>">
		</div>

		<div class="relative h-full w-full lg:hidden">
			<img alt="homepage hero mobile" class="absolute w-full h-full object-cover lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/background/homepage-hero-mobile.jpg'; ?>">
		</div>
		
	</div>
	<div class="bg-black absolute w-full h-full inset-0 opacity-50 lg:hidden"></div>
	<div class="container relative">
		<div class="flex justify-center mb-4">
			<div class="w-11/12 lg:w-11/12">
				<div class="text-center">
				
					<h1 class="xl text-white font-museo-700">
						<?php 
							if(	get_field('homepage_hero_title') ) :
							
								the_field('homepage_hero_title');

							else :
						?>
						Your Go-to Partner for Precision Parts at the Speed of Digital
						<?php
							endif;
						?>
						
					</h1>
			
				</div>
			</div>
		</div>
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-10/12">
				<div class="text-center">
					<div class="mb-4">
						<p class="text-white md:text-20 font-museo-500">
							<?php 
								if(	get_field('homepage_hero_paragraph') ) :
								
									the_field('homepage_hero_paragraph');

								else :
							?>
							Fictiv’s Digital Manufacturing Ecosystem is the go-to destination for engineers and supply chain managers who need high tolerance mechanical parts at unprecedented speeds.
							<?php
								endif;
							?>
							
						</p>
					</div>
					<div class="flex justify-center mb-4">
						
						<div class="flex items-center relative group">
							<a class="absolute w-full h-full inset-0 cursor-pointer" vimeo-open="vimeo-modal"></a>
							<div class="mr-2">
								<img class="lazyload" width="30" alt="play button green icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/play-button-green.png">
							</div>
							<div class="mr-2">
								<p class="text-white text-14 md:text-16">
									<?php 
										if(	get_field('homepage_hero_video_link_text') ) :
										
											the_field('homepage_hero_video_link_text');

										else :
									?>
										Discover Fictiv’s radical transparency features
									<?php
										endif;
									?>

							
								</p>
							</div>
							<div class="transition-transform duration-200 ease-in-out transform group-hover:translate-x-1">

								<img alt="homepage hero arrow" class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right-small-white.svg'; ?>">
							
							</div>
						</div>
						
					</div>
					<div>
						<?php 
							if( empty( get_field('homepage_hero_button' ) ) ) :

						?>
						<a href="https://app.fictiv.com/signup" class="btn btn-primary">get a quote</a>
						<?php 
							else :
						?>
						<a href="<?php echo get_field('homepage_hero_button' )['url'];
						?>" class="btn btn-primary"><?php echo get_field('homepage_hero_button' )['title'];
						?></a>
						<?php
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="py-40 md:py-32 lg:py-48"></div>
	
	<?php 
		if ( have_rows('homepage_hero_bottom_row') ) :
		
	?>
	<div class="absolute w-full bottom-0 pb-6 lg:pb-12">
		<div class="container flex justify-center">
			<div class="flex flex-col md:flex-row justify-around md:w-full">

				<?php 
					while( have_rows('homepage_hero_bottom_row') ) :
						the_row();
				?>
				
				<div class="flex items-center relative mb-4 md:mb-0 group">
					<?php 
						if( get_sub_field('homepage_hero_bottom_row_link') ) :
					?>
					<a class="absolute w-full h-full inset-0 z-50" href="<?php the_sub_field('homepage_hero_bottom_row_link'); ?>" target="_blank"></a>
					<?php 
						endif;
					?>
					<div class="mr-2 ">
						<img width="30" alt="<?php the_sub_field('homepage_hero_bottom_row_text'); ?> icon" class="lazyload" data-src="<?php the_sub_field('homepage_hero_bottom_row_icon'); ?>">
					</div>
					<div class="w-full ">
						
						<div class="flex items-center">
							<div>
								<p class="text-white font-museo-700 leading-tight md:text-20">
								<?php the_sub_field('homepage_hero_bottom_row_text'); ?></p>
							</div>
							<?php 
								if( get_sub_field('homepage_hero_bottom_row_link') ) :
							?>
							<div class="transition-transform duration-200 ease-in-out transform group-hover:translate-x-1 mt-4 md:mt-5">
								<img alt="homepage hero arrow" class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right-small-white.svg'; ?>">
								
							</div>
							<?php 
								endif;
							?>
						</div>
					</div>
				</div>
				<?php 
					endwhile;
				?>
				
			</div>
		</div>
	</div>
	<?php 
		endif;
	?>
</header>
<section class="pt-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-9/12">
				<div class="text-center">
					<h2 class="xl text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
						Discover the Fictiv Difference
					</h2>
					<p class="md:text-20 font-museo-500 text-grey-600 ">
						Partnering with Fictiv means quality you can rely on and production speeds that hit your deadlines — made possible by the unique combination of a technology-backed platform, the highest quality partners, and people with boots-on-the-ground to ensure quality.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="py-20">
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-full lg:w-10/12 lg:px-6">
				<div class="flex flex-wrap flex-col-reverse lg:flex-row-reverse justify-center lg:justify-start items-center lg:-mx-6">
					<div class="w-11/12 lg:w-6/12 lg:px-6">
						<div class="mb-4">
							<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
								Digital Platform
							</h2>
						</div>
						<div class="mb-6">
							<p class="font-museo-500 text-grey-600">
								Our digital quote-to-order platform gives you manufacturing data at your fingertips, so you can make faster decisions and stay connected every step of the way.
							</p>
						</div>
						<div>
							<a class="btn btn-primary" href="/our-platform/">learn more</a>
						</div>
					</div>
					<div class="w-full lg:w-6/12 lg:px-6">
						<img class="lazyload w-full" alt="Digital Platform graphic" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/homepage-illo-top.png">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="py-20">
	<div class="container relative">

		<div class="flex justify-center">
			<div class="w-full lg:w-10/12 lg:px-6">
				<div class="flex flex-wrap flex-col-reverse lg:flex-row justify-center lg:justify-start items-center lg:-mx-6">
					<div class="w-11/12 lg:w-6/12 lg:px-6">
						<div class="mb-4">
							<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
								Partner Network
							</h2>
						</div>
						<div class="mb-6">
							<p class=" font-museo-500 text-grey-600">
								Our highly vetted global partner network gives you access to a wide breadth of capabilities, at the highest quality standards, through a single access point.
							</p>
						</div>
						<div>
							<a class="btn btn-primary" href="/our-network/">learn more</a>
						</div>
					</div>
					<div class="w-full lg:w-6/12 lg:px-6">
						<img class="lazyload w-full" alt="Partner Network Graphic" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/homepage-illo-middle-2.png">
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-20">
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-full lg:w-10/12 lg:px-6">
				<div class="flex flex-wrap flex-col-reverse lg:flex-row-reverse justify-center lg:justify-start items-center lg:-mx-6">
					<div class="w-11/12 lg:w-6/12 lg:px-6">
						<div class="mb-4">
							<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
								People on the Ground
							</h2>
						</div>
						<div class="mb-6">
							<p class=" font-museo-500 text-grey-600">
								Fictiv employs skilled engineers and program managers to inspect parts at the factory floor, provide guided DFM expertise, and keep your production schedules on track.
							</p>
						</div>
						<div>
							<a class="btn btn-primary" href="/our-people/">learn more</a>
						</div>
					</div>
					<div class="w-full lg:w-6/12 lg:px-6">
						<img class="lazyload w-full" alt="People on the Ground Graphic" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/homepage-illo-bottom.png">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php 

	$args = array(
        'post_type' => array('page'),
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'fictiv_page_type',
                'field' => 'slug',
                'terms' => 'capabilities'
            )
        )     
    );

	$services = new WP_Query( $args );

	if ( $services->have_posts() ) :
	
?>

<section class="py-20">
    <div class="container">
        <h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6 text-center">
			Our Capabilities
		</h2>
 
        <div class="flex flex-wrap justify-center -mx-2 relative items-stretch">

            <?php 

                while ( $services->have_posts() ) :
                    $services->the_post();

            ?>
            <div class="w-11/12 md:w-1/2 lg:w-1/4 block-link px-2 h-full mb-4">
                <div class="relative group border border-grey-200">
                    <a href="<?php the_permalink(); ?>" class="w-full h-full absolute inset-0 z-30"></a>
                    <div class="relative h-0" style="padding-bottom: 65.25%">

                        <img alt="<?php the_title() ?> thumbnail" class="lazyload w-full absolute  inset-0 h-full object-cover" data-src="<?php echo get_field('material_thumbnail')['sizes']['medium_large']; ?>">
                    </div>
                    <div class="p-4">
                        <div class="mb-2 h-8">
                            <p class="font-museo-700 text-grey-700 uppercase">
                                <?php 
                                    the_title();
                                ?>
                            </p>
                        </div>
                        
                        <div class="mb-2 h-20">
                            <p class="font-museo-500 text-grey-600">
                                <?php 
                                    echo get_the_excerpt();
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
</section>

<?php 
	endif;
	
?>
<section class="bg-grey-100 py-20">
	<div class="container">
		<div class="text-center mb-6">
			<h2 class="xl text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6 text-center">
				<?php the_field('cqs_title'); ?>
			</h2>
			<p class="md:text-20 font-museo-500 text-grey-600">
				<?php the_field('cqs_subtitle'); ?>
			</p>
		</div>
		<?php 
			if( have_rows('cqs_quotes') ) :
		?>
		<div class="flex flex-wrap justify-center lg:justify-start -mx-2 mb-12">
			<?php 

                while( have_rows('cqs_quotes') ) : 
                    the_row();

			?>
			<div class="w-11/12 lg:w-1/3 px-2 mb-6 lg:mb-0 last:mb-0">
				<div class="bg-white text-center px-6 py-6 pb-10">
					<div class="mb-4 lg:h-20 flex items-center">
						<img width="80" class="lazyload  mx-auto" alt="<?php echo $company['logo']; ?> logo" data-src="<?php the_sub_field('cqs_quotes_customer_logo'); ?>">
					</div>
					<div class="lg:h-28">
						<p class="text-grey-600 font-museo-500">
							<?php the_sub_field('cqs_quotes_quote_text'); ?>
						</p>
					</div>
				</div>
				<div class="text-center -mt-10">
					<div class="mb-4">
						<img width="80" class="lazyload rounded-full mx-auto" alt="<?php the_sub_field('cqs_quotes_citation_name'); ?> headshot" data-src="<?php the_sub_field('cqs_quotes_citation_headshot'); ?>">
					</div>
					<div>

						<p class="font-museo-500 text-grey-700">
							<?php the_sub_field('cqs_quotes_citation_name'); ?>
						</p>
						<p class="text-grey-600 font-museo-500">
							<?php the_sub_field('cqs_quotes_citation_title'); ?>
						</p>
					
					</div>
				</div>
			</div>
			<?php
				endwhile;
			?>
		</div>
		<?php 
			endif;
		?>
		<div class="flex flex-wrap justify-center items-center">
			
			<?php 
				$logos_grey = array(

					array(
						'size' => 100,
						'slug' => 'intuitive-surgical'
					),

					array(
						'size' => 110,
						'slug' => 'oculus'
					),

					array(
						'size' => 80,
						'slug' => 'ford'
					),

					array(
						'size' => 60,
						'slug' => 'ideo'
					),

					array(
						'size' => 80,
						'slug' => 'quip'
					)

				);

				foreach ( $logos_grey as $i => $logo ) :

			?>
			<div class="w-1/2 md:w-1/3 lg:w-1/5 mb-6 ">
				<img width="<?php echo $logo['size'] ?>" class="lazyload mx-auto" alt="<?php echo $logo['slug'] ?> logo grey" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/<?php echo $logo['slug']; ?>-grey.png">
			</div>
			<?php
				endforeach;
			?>
		</div>
	</div>
</section>


<?php 

	$modules = array(
		array(
			'name' => 'Instant Pricing',
			'vimeo_id' => 452393739
		),

		array(
			'name' => 'DFM Feedback',
			'vimeo_id' => 452393880
		),

		array(
			'name' => 'Order Tracking',
			'vimeo_id' => 452393900
		)
	);

?>

<section class="section bg-white">
	<div class="container">
		<div class="text-center mb-4">
			<p class="md:text-20 font-museo-500 text-grey-600">Fictiv Digital Manufacturing</p>	
		</div>
		<div class="text-center mb-6">
			<h2 class="xl text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6 text-center">
				Everything In One Place
			</h2>
		</div>
		<div class="flex justify-center flex-col items-center">
			<div class="flex mb-6 flex-wrap justify-center md:justify-start toggle-btns-wrappper">
			<?php 

				foreach ( $modules as $i => $module ) :
				
			?>

				<a href="#manufacturing-module-<?php echo $i; ?>" class="module-toggle-btn <?php 

					if( $i === 0 ) :
				
						echo 'active';

					endif;

				?> mx-1 border border-grey-200 hover:border-teal-light py-1 px-3 rounded select-none cursor-pointer text-16 font-museo-700 text-grey-600 hover:text-teal-light whitespace-no-wrap duration-200 ease-in-out"><?php echo $module['name']; ?></a>
			
			<?php 
				endforeach;
			?>
				
			</div>

			<div class="w-full toggle-module-wrapper mb-12">
				<?php 
					
					foreach ( $modules as $i => $module ) :
					
				?>
				<div data-toggle-module="manufacturing-module-<?php echo $i; ?>" class="relative toggle-module <?php 

						if( $i !== 0 ) :

							echo 'hidden';

						endif;
				?>">
	
					<div class="relative h-0" style="padding-bottom: 56.25%">
				
						<iframe class="absolute w-full h-full inset-0 object-cover lazyload" data-src="https://player.vimeo.com/video/<?php echo $module['vimeo_id']; ?>?quality=1080p&autoplay=1&muted=1&loop=1&autopause=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					
					</div>
					
				</div>
				<?php 
					endforeach;
				?>

				
			</div>
			
			<div class="flex items-center text-center relative group">
				<a href="/our-platform/" class="btn btn-primary">Learn more about our platform</a>
				
			</div>
		</div>
		
	</div>
</section>

<section class="section border-grey-200 border-t">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-10/12">
				<div class="flex flex-wrap">
					<div class="w-full lg:w-1/4 ">
						<!-- IDC Logo -->
						<img class="lazyload w-full" width="200" alt="IDC Logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/idc-case-study-logo.png">
					</div>
					<div class="w-full lg:w-3/4">
						<h3 class="text-20 md:text-29 text-blue-dark font-museo-500 leading-tight mb-4">
							"The use of a quote-to-order platform makes sourcing and the supply chain less vulnerable to disruptions"
						</h3>
						<div class="mb-6 ">
							<p class=" text-grey-700 font-museo-700">
								Jan Burian
							</p>
							<p class=" text-grey-600 font-museo-500">
								Head of IDC Manufacturing Insights, IDC EMEA
							</p>
						</div>
						
						<a href="/resources/idc-case-study-digital-quote-to-order" class="btn btn-primary">read case study</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

    if ( get_field('case_study_quote') ) :
    
?>

<section class="bg-grey-100">

    <div class=" max-w-1600 mx-auto relative pb-10 lg:py-10">
        <div class="relative lg:absolute w-full h-full inset-0 mb-6 lg:mb-0">
            <div class="flex lg:justify-end h-full">
                <div class="w-full lg:w-1/2 ">
                   <div class="flex flex-wrap h-full ">
                        <?php 
                            if( have_rows('case_study_graphics') ) :

                                $i = 1;
                                while( have_rows('case_study_graphics') ) : 
                                    the_row();
                           
                        ?>
                        <div class="relative h-64 lg:h-half w-1/2">
                            <img class="absolute inset-0 object-cover w-full h-full lazyload" alt="<?php echo get_sub_field('case_study_graphics_image')['alt']; ?>" data-src="<?php echo get_sub_field('case_study_graphics_image')['link']; ?>">
                            
                        </div>
                        
                            
                        <?php 
                                $i++;
                                endwhile;
                                reset_rows();
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container relative ">
            <div class="flex justify-center lg:justify-start">
                
                <div class="w-11/12 lg:w-5/12">
                    <div class="mb-4">
                         <p class="text-20 md:text-29 text-blue-dark font-museo-500 leading-tight">
                            <?php the_field('case_study_quote') ?>
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class=" text-grey-700 font-museo-700">
                            <?php the_field('case_study_name') ?>
                        </p>
                        <p class=" text-grey-600 font-museo-500">
                            <?php the_field('case_study_title') ?>
                        </p>
                    </div>
                    <?php

                        if( have_rows('case_study_details') ) :

                            while( have_rows('case_study_details') ) : 
                                the_row();
                       
                    ?>
                    <div class="flex items-center mb-4">
                        <div class="mr-2">
                            <!-- Icon -->
                            <img class="lazyload" width="30" alt="<?php the_sub_field('case_study_details_text'); ?> icon" data-src="<?php the_sub_field('case_study_details_icon'); ?>">
                        </div>
                        <div>
                            <p class="text-blue-dark font-museo-700 text-16">
                                <?php the_sub_field('case_study_details_text'); ?>
                            </p>
                        </div>
                    </div>
                    <?php 
                            endwhile;
                            reset_rows();
                        endif;

                        if ( get_field('case_study_cta') ) :
                        
                    ?>

                    <div>
                        <a href="<?php 
                            echo get_field('case_study_cta')['url'];
                        ?>" class="btn btn-primary"><?php 
                            echo get_field('case_study_cta')['title'];
                        ?></a>
                    </div>

                    <?php 
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    endif;
?>



<?php

	$featured_args = array(
		'posts_per_page' => 2,
		'post_type' => $GLOBALS['resource_post_types'],
		'post_parent' => 0,
		'meta_query' => array(
	        array(
	            'key' => '_thumbnail_id',
	            'compare' => 'EXISTS'
	        ),
	    )
	);

	$featured_posts = new WP_Query( $featured_args );

	if ( $featured_posts->have_posts() ) :

?>
<section class="py-20">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				<div class="mb-2">
					<h3 class="uppercase text-16 font-museo-500 text-grey-600">
						Featured reads
					</h3>
				</div>
			</div>
		</div>
		
		<div class="flex flex-wrap -mx-2">
			<?php 
				
				while ( $featured_posts->have_posts() ) : 
				    $featured_posts->the_post();

				    $arr = array(
				    	'link' => get_the_permalink(),
				    	'img' => get_the_post_thumbnail_url(),
				    	'title' => get_the_title(),
				    	'excerpt' => get_the_excerpt()
				    );



			?>
			<div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
				<?php 
					related_content_module( $arr );
				?>
			</div>
			<?php
				endwhile;
				wp_reset_postdata();
				
			?>
			
		</div>
	</div>
		
</section>
<?php 
	endif;

	get_footer();
?>