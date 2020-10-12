<?php /* Template Name: People */ ?>
<?php 
	get_header();
	if ( have_posts() ) : 

    	while ( have_posts() ) : 
       		the_post();
?>
<header class="py-20 relative">
	<div class="w-full h-full absolute inset-0 flex lg:justify-end">

		<div class="w-full lg:w-6/12 h-full bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			
		</div>
	</div>
	<div class="bg-white md:bg-transparent md:bg-gradient-to-r from-white via-white  absolute w-full h-full inset-0 opacity-75 md:opacity-100"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12">
				<div class="flex "> 
					<div class="lg:w-6/12">
						<div class="mb-6 lg:w-10/12">
							<h1 class="xl text-grey-700">
								<?php the_title(); ?>
							</h1>
						</div>
						<div class="mb-6">
							<div class="md:text-20 font-museo-500 text-grey-600">
								<?php the_excerpt(); ?>
							</div>
						</div>
						<?php 
							if ( have_rows('hero_icons') ) :

								while( have_rows('hero_icons') ) :
									the_row();
						?>
						<div class="flex items-center w-full mb-6 last:mb-0">
							<div class="mr-2">
								<!-- Icon -->
								<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php the_sub_field('hero_icon') ?>">
							</div>
							<div>
								<p class="text-blue-dark font-museo-700 leading-tight">
									<?php the_sub_field('hero_icon_text') ?>
								</p>
							</div>
						</div>
						<?php

								endwhile;
							else :
						?>
						<div class="flex items-center w-full">
							<div class="mr-2">
								<!-- Icon -->
								<img class="lazyload" width="30" alt="10M+ Parts made icon" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/parts.png">
							</div>
							<div>
								<p class="text-blue-dark font-museo-700 leading-tight">
									All parts inspected by Fictiv Quality Engineers
								</p>
							</div>
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
<?php 
	if ( have_rows('people_sections') ) :
		
		$i = 0;

		while( have_rows('people_sections') ) :
			the_row();
?>

<section class="relative <?php 

	if( $i % 2 !== 0 ) :
	
		echo 'pb-20 lg:py-20 bg-grey-100 ';
	
	else :

		echo 'py-20';
	
	endif;
?>">
	<?php 

		if( $i % 2 !== 0 ) :
	
	?>
	<div class="w-full h-full relative lg:absolute inset-0 flex lg:justify-end mb-6 lg:pl-12">
		<div class="w-full h-64 lg:w-6/12 lg:h-full bg-cover bg-center lazyload " data-bg="url(<?php echo get_sub_field('people_section_graphics')[0]['people_section_graphic']; ?>)">
			
		</div>
	</div>
	<?php
		endif;
	?>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12">
				<div class="flex flex-wrap -mx-6">
					<div class="w-full lg:w-6/12 px-6 mb-6 lg:mb-0">
						<div class="mb-6">
							<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
								<?php the_sub_field('people_section_title'); ?>
							</h2>
						</div>
						<div>
							<p class=" font-museo-500 text-grey-600">
								<?php the_sub_field('people_section_paragraph'); ?>
							</p>
						</div>
					</div>
					<?php 

						if( $i % 2 === 0 ) :
							
					?>
					<div class="w-full lg:w-6/12 px-6">
						<?php 

							if ( have_rows('people_section_graphics') ) :
		
								$j = 0;
								while( have_rows('people_section_graphics') ) :
									the_row();

									if ( $j === 0 ) :
						?>
						<div class="mb-2 last:mb-0">
							<img class="lazyload" data-src="<?php the_sub_field('people_section_graphic') ?>">
						</div>
								
						<?php 
									endif;
								$j++;
								endwhile;
							endif;
						?>
					
						<div class="flex -mx-1">
						<?php 
							

							if ( have_rows('people_section_graphics') ) :

								$j = 0;
								while( have_rows('people_section_graphics') ) :
									the_row();
									if ( $j > 0 ) :
									
						?>
							<div class="px-1">
								<img class="lazyload" data-src="<?php the_sub_field('people_section_graphic') ?>">
							</div>
						<?php
									endif;
								$j++;
								endwhile;
								
							endif;
									
						?>

						</div>
				
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
		
		$i++;
		endwhile;

	else :

		$sections = array(
			array(
				'title' => 'All Your Part Inspections, Verified',
				'para' => 'All parts ordered through the Fictiv platform are verified by a Fictiv-employed Supplier Quality Engineer (SQE) to ensure quality. We employee SQEs in all supply locations, who regularly visit our partners, audit facilities, and inspect customer parts to ensure requirements are met.',
				'graphics' => array(
					'all-your-inspections-1',
					'all-your-inspections-2',
					'all-your-inspections-3'
				)
			),
			array(
				'title' => 'All Your Designs, Supported',
				'para' => 'During the quoting process, our Technical Applications Engineers are on stand-by to provide expert guidance on design manufacturability to ensure the parts you receive meet your requirements.',
				'graphics' => array(
					'all-your-designs-bg'
				)
			),
			array(
				'title' => 'All Your Programs, Managed',
				'para' => 'Intelligent orchestration doesn’t end with our digital technology. We also employ Technical Program Managers to advocate for your design requirements during productions and ensure schedules stay on-track.',
				'graphics' => array(
					'all-your-programs-1'
				)
			)
		);

		foreach ( $sections as $i => $section ) :
	
?>
<section class=" <?php 

	if( $i % 2 !== 0 ) :
	
		echo 'pb-20 lg:py-20 bg-grey-100 relative';
	
	else :

		echo 'py-20';
	
	endif;
?>">
	<?php 

		if( $i % 2 !== 0 ) :
	
	?>
	<div class="w-full h-full relative lg:absolute inset-0 flex lg:justify-end mb-6 lg:pl-12">
		<div class="w-full h-64 lg:w-6/12 lg:h-full bg-cover bg-center lazyload " data-bg="url(<?php echo get_template_directory_uri() . '/assets/images/graphics/all-your-designs-bg.jpg'; ?>)">
			
		</div>
	</div>
	<?php
		endif;
	?>
	<div class="container <?php 

		if( $i % 2 !== 0 ) :
			
			echo 'relative';

		endif;
	?>">
		<div class="flex justify-center">
			<div class="w-11/12">
				<div class="flex flex-wrap -mx-6">
					<div class="w-full lg:w-6/12 px-6 mb-6 lg:mb-0">
						<div class="mb-6">
							<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
								<?php echo $section['title']; ?>
							</h2>
						</div>
						<div>
							<p class=" font-museo-500 text-grey-600">
								<?php echo $section['para']; ?>
							</p>
						</div>
					</div>
					<?php 

						if( $i % 2 === 0 ) :
							
					?>
					<div class="w-full lg:w-6/12 px-6">
						<?php 

							foreach ( $section['graphics'] as $j => $graphic ) :
							
								if ( $j === 0 ) :
						?>
						<div class="mb-2 last:mb-0">
							<img class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/graphics/' .  $graphic . '.jpg'; ?>">
						</div>
					
						<?php 
								endif;
							endforeach;
							
							if ( count( $section['graphics'] ) > 1 ) :
									
						?>

						<div class="flex -mx-1">
						<?php
								foreach ( $section['graphics'] as $j => $graphic ) :
									if ( $j > 0 ) :

						?>
							<div class="px-1">
								<img class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/graphics/' .  $graphic . '.jpg'; ?>">
							</div>
						<?php
									endif;
								endforeach;
							
						?>
						</div>
						<?php 
							endif;;
						?>
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
	endforeach;
endif;

		endwhile;
	endif;
	get_footer();
?>