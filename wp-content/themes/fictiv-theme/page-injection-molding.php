<?php 
/* 	Template Name: Injection Molding 
*/ 
	get_header();

	if ( have_posts() ) : 

	    while ( have_posts() ) : 
    	    the_post();

	$processes = get_the_terms( get_the_id(), 'fictiv_manufacturing_process' );
    $page_type = get_the_terms( get_the_id(), 'fictiv_page_type' );

    $hero_arr = array(
	    'img' => get_the_post_thumbnail_url(),
	    'label' => $page_type[0]->name,
	    'title' => $processes[0]->name . ' Service',
	    'para' => get_field('capabilities_hero_paragraph'),
	    'btn' => get_field('capabilities_hero_cta_button')
	);

	capabilities_hero( $hero_arr );

    if( have_rows('processes_advantage') ) :
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-29 text-black font-museo-500">Fictiv <?php echo $processes[0]->name; ?> Advantages</h2>
        </div>
        <div class="border-grey-200 border flex flex-wrap justify-center lg:justify-start">
            <?php 
     
                while( have_rows('processes_advantage') ) : 
                    the_row();
                   
            ?>
            <div class="w-full lg:w-1/3 border-b lg:border-b-0 lg:border-r border-grey-200 last:border-transparent">
                <div class="px-12 pt-8 pb-12 text-center">
                    <?php 
                        if( get_sub_field('process_icon') ) :
                    ?>
                    <div class="h-20 flex justify-center items-center mb-4">
                        
                        <div class="h-full">
                            <img class="mx-auto h-full" src="<?php the_sub_field('process_icon'); ?>">
                        </div>
                        
                    </div>
                    <?php 
                        endif;
                    ?>
                    <div class="mb-4">
                        <p class="font-museo-700 text-grey-700"><?php the_sub_field('process_title'); ?></p>
                    </div>
                    <div>
                        <p class="font-museo-500 text-grey-600">
                            <?php the_sub_field('process_paragraph'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
                reset_rows();
            ?>
        </div>
    </div>
</section>
<?php 
    endif;
    if ( get_field('case_study_quote') ) :
    
?>

<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-20 md:text-29 text-grey-700 font-museo-700"><?php echo $processes[0]->name; ?> Case Study</h2>
        </div>
    </div>
    <div class="bg-grey-100  ">
        <div class="max-w-1600 mx-auto relative pb-10 lg:py-10">
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
	                            <p class="text-blue-dark font-museo-700">
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
    </div>
</section>
<?php 
    endif;
?>
<?php 
	$steps = array(
		array(
			'img' => 'rapid-design-molds',
			'title' => 'Rapid Design molds',
			'para' => 'Ideal for part design validation, low volume production, and bridge production quantities.',
			'items' => array(
				'No minimum order quantities',
				'Complex design accepted'
			),
			'capabilities_link' => '#'
		),

		array(
			'img' => 'production-tooling',
			'title' => 'Production Tooling',
			'para' => 'Ideal for higher volume production parts, starting at 10,000 units. Tooling costs are higher than Rapid Design Molds, but tooling construction allows for lower part pricing.',
			'items' => array(
				'10k-500k units',
				'Steel tooling',
				'Multi-cavity tooling'
			),
			'capabilities_link' => '#'
		),
	)
?>
<section class="py-24">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-10/12">
				
				<div class="text-center mb-12">
					<h3 class="uppercase text-blue-light font-museo-900 text-18">
						FROM PROTOTYPE TO PRODUCTION 
					</h3>
				</div>
				<?php 
					foreach ( $steps as $i => $step ) :
				?>
				<div class="flex flex-wrap justify-center lg:justify-start items-center mb-12 <?php 
					if( $i % 2 !== 0 ) :
						echo 'flex-row-reverse';
					endif;
				?> -mx-6">

					<div class="w-full lg:w-6/12 px-6 mb-6 lg:mb-0">
						<img class="lazyload" alt="<?php echo $step['title'] ?> graphic" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/<?php echo $step['img'] ?>-graphic.png">
					</div>
					<div class="w-11/12 lg:w-6/12 px-6">
						<div class="mb-4">
							<h2 class="mb-2 text-blue-dark font-museo-900 text-24 md:text-36 leading-tight">
								<?php echo $step['title']; ?>
							</h2>
							<p class="text-blue-dark">
								<?php echo $step['para']; ?>
							</p>	
						</div>
						<?php 
							foreach ( $step['items'] as $j => $item ) :
							
						?>
						<div class="flex flex-wrap items-center mb-2">
							<div class="w-8">
								<div class="w-6">
									<!-- Icon -->
									<img class="lazyload" width="15" alt="circle green check icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/check-circle-green.png">
								</div>
								
							</div>
							<div>
								<p class="font-museo-900 text-blue-dark">
									<?php echo $item; ?>
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
		
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="flex justify-center mb-12">
			<div class="w-11/12 md:w-8/12 ">
				<div class="text-center mb-8">
					<h2 class="text-blue-dark font-museo-900 text-24 md:text-36 leading-tight">
						Get free expert manufacturability feedback
					</h2>
				</div>
				<div class="flex flex-wrap -mx-6 mb-4">
					<div class="lg:w-1/2 px-6 mb-6 lg:mb-0">
						<div class="flex">
							<div class="w-12">
								<div class="rounded-full border border-teal-dark w-8 h-8">
									<div class="flex justify-center items-center h-full">
										<div>
											<p class="text-12 text-teal-dark">1</p>
										</div>
									</div>
									
								</div>
							</div>
							<div class="w-full">
								<p>Upon upload to the Fictiv platform instant quoter, you’ll receive instant feedback on major cost drivers for injection molding.</p>
							</div>	
						</div>

					</div>
					<div class="lg:w-1/2 px-6">
						<div class="flex">
							<div class="w-12">
								<div class="rounded-full border border-teal-dark w-8 h-8">
									<div class="flex justify-center items-center h-full">
										<div>
											<p class="text-12 text-teal-dark">2</p>
										</div>
									</div>
									
								</div>
							</div>
							<div class="w-full">
								<p>Upon full quote submission, you’ll receive a more in-depth manufacturability analysis.</p>
							</div>	
						</div>
						
					</div>
				</div>
				
			
			</div>
		</div>
		<div>
			<img class="lazyload shadow" alt="expert manufacturability feedback screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/expert-manufacturability-feedback.png">
			
		</div>
	</div>
</section>
<?php 
	$reps = array(
		array(
			'img' => "account-executive",
			'title' => 'ACCOUNT EXECUTIVE',
			'description' => 'Your Account Executive will guide you through the quoting stage. They will help to gather your design requirements, request manufacturability feedback, and align your budget & timeline needs with Fictiv\'s manufacturing capabilities.'
		),
		array(
			'img' => "technical-applications-engineer",
			'title' => 'TECHNICAL APPLICATIONS ENGINEER',
			'description' => 'Our technical applications engineers are trained manufacturing experts that provide manufacturability feedback on your designs during the quoting stage.'
		),
		array(
			'img' => "customer-success-manager",
			'title' => 'CUSTOMER SUCCESS MANAGER',
			'description' => 'Once your order kicks off, your Customer Success Manager is in charge of managing any of your questions or requests along the way.'
		),
		array(
			'img' => "technical-project-manager",
			'title' => 'TECHNICAL PROJECT MANAGER',
			'description' => 'The Technical Project Manager is in charge of managing communications with Fictiv Manufacturing Partners to ensure your exact design and project specifications are communicated accurately. They will work tirelessly behind the scenes to ensure you receive quality parts, on time.'
		),
		array(
			'img' => "supplier-quality-engineer",
			'title' => 'SUPPLIER QUALITY ENGINEER',
			'description' => 'To ensure part quality, Fictiv\'s Supplier Quality Engineers will conduct quality assessment of your parts at the factory and will also be in charge of organizing the First Article Inspection report as well as any other quality inspection reports requested.'
		),
	);
?>

<section class="section">
	<div class="container">
		<div class="flex justify-center mb-12">
			<div class="w-11/12 md:w-9/12 lg:w-5/12 ">
				<div class="text-center mb-2">
					<h3 class="text-blue-dark font-museo-900 text-24 md:text-36 leading-tight">
						Your Fictiv Project Management Team
					</h3>
				</div>
				<div class="mb-4">
					<p>All injection molding orders have a team of dedicated Fictiv employees working tirelessly behind the scenes to ensure your parts are manufactured on time and to your precise specifications.</p>
				</div>
			</div>
		</div>
		<div class="flex justify-center mb-12">
			<div class="w-11/12 lg:w-10/12 ">
				<div class="flex flex-wrap justify-center lg:justify-start mb-4 -mx-8">
					<?php 
						foreach ( $reps as $i => $rep ) :
						
					?>

					<div class="w-6/12 md:w-1/3 lg:w-1/5 px-8 mb-6 lg:mb-0">
						<div class="pm-wrapper select-none border-b-2 border-transparent group h-full pb-2  <?php 

							if( $i === 0 ) :

								echo 'active';

							endif;

						?>" data-pm="<?php echo $i; ?>">
							<div class="mb-4">
								<div class="mx-auto rounded-full">
									<img class="lazyload" alt="<?php echo strtolower( $rep['title'] ); ?> thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headshots/<?php echo $rep['img']; ?>.png">
									
								</div>
							</div>
							<div class="text-center">
								<h3 class="uppercase text-blue-dark font-museo-900 leading-tight opacity-25 group-hover:opacity-100 group-hover:text-red-dark"><?php echo $rep['title']; ?></h3>
							</div>
						</div>
						
					</div>
					
					<?php 
						endforeach;
					?>
				</div>
				<div class="bg-grey-100 py-10">
					<div class="flex justify-center">
						<div class="md:w-7/12">
							<?php 
								foreach ( $reps as $i => $rep ) :
							
							?>

							<div data-pm="<?php echo $i; ?>" class="pm-description <?php 

								if( $i !== 0 ) :


									echo 'hidden';

								endif;
							?>">
								<h3 class="font-museo-900 text-blue-dark uppercase mb-2"><?php echo $rep['title']; ?></h3>
								<p class="text-blue-dark"><?php echo $rep['description'] ?></p>
							</div>

							<?php 
								endforeach;
							?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<?php 


// resource_center_cpt();

$related_args = array(
    'posts_per_page' => 2,
    'post_type' => $GLOBALS['resource_post_types'],
    'post__not_in' => array( get_the_id() ),
    'post_parent' => 0,
    'tax_query' => array(
        array (
            'taxonomy' => $processes[0]->taxonomy,
            'field' => 'slug',
            'terms' => $processes[0]->slug,
        )
    ),
);

$related_posts = new WP_Query( $related_args );

if ( $related_posts->have_posts() ) : 
?>
<section class="py-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                <div class="flex justify-center">
                    <div class="w-11/12 lg:w-full">
                        <div class="mb-2">
                            <h3 class="uppercase text-16 font-museo-500 text-grey-600">
                                Related resources
                            </h3>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-wrap -mx-2">
                    <?php 
                        

                        while ( $related_posts->have_posts() ) : 
                            $related_posts->the_post();
	
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
        </div>
    </div>
        
</section>
<?php 
    endif;
?>
<?php 
		endwhile;
		wp_reset_postdata();
	endif;
	get_footer();
?>