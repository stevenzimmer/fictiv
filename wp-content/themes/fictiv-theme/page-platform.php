<?php /* Template Name: Our Platform */ ?>
<?php 
	get_header();
	// the_title();
?>

<header class="py-20 bg-grey-100">
	<div class="container relative">
		<div class="flex justify-center  mb-6" >
			<div class="w-11/12 text-center">
				
				<h1 class="xl text-grey-700">
					<?php the_title(); ?>
				</h1>
				
			</div>
		</div>
		<div class="flex justify-center mb-12">
			<div class="w-11/12 lg:w-8/12 text-center">
				<div class="md:text-20 font-museo-500 text-grey-600">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
		<div class="flex justify-center">
			<div class="w-full lg:w-11/12 text-center relative z-20">
				
				<?php 
					if( has_post_thumbnail() ) :
				?>
				
				<img class="lazyload w-full" alt="<?php the_title(); ?> hero graphic" data-src="<?php the_post_thumbnail_url(); ?>">

				<?php
					else :
				?>
				
				<img class="lazyload w-full" alt="<?php the_title(); ?> hero graphic" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/platform-hero.png">
				
				<?php
					endif;
				?>
				
				<div class="absolute w-full h-full -mt-28 -z-1 hidden lg:block">
					<div class="flex justify-end">
						<div class="w-9/12">
							<img class="lazyload mx-auto" alt="Line 1" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/lines-1.svg">
					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php 
	if ( have_rows('page_sections') ) :
		
		$i = 0;
		while(  have_rows('page_sections') ) :
			the_row();
?>
<section class="py-20" id="<?php the_sub_field('page_section_hash'); ?>">
	<div class="container relative">
		<div class="flex flex-wrap flex-col-reverse <?php 
			
			if( $i % 2 !== 0 ) :
			
				echo 'lg:flex-row-reverse';
			
			else :
			
				echo 'lg:flex-row';

			endif;

		?> justify-center lg:justify-start items-center -mx-6">
			<div class="w-11/12 lg:w-6/12 px-6">
				<div class="mb-6">
					<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
						<?php the_sub_field('page_section_title'); ?>
					</h2>
				</div>
				<div class="mb-6">
					<p class="font-museo-500 text-grey-600">
						<?php the_sub_field('page_section_paragraph'); ?>
					</p>
				</div>
				<div>
					<a target="<?php 
							
							echo get_sub_field('page_section_cta')['target'];

						?>" class="btn btn-primary" href="<?php 
							
							echo get_sub_field('page_section_cta')['url'];
						
						?>"><?php 
						
							echo get_sub_field('page_section_cta')['title'];
						
						?></a>
				</div>
			</div>
			<div class="w-full lg:w-6/12 px-6 relative z-20">
				<img class="lazyload w-full" alt="<?php the_sub_field('page_section_title'); ?> thumbnail" data-src="<?php the_sub_field('page_section_graphic'); ?>">
				
			</div>
		</div>
		<?php 

			if ( $i === 0 ) :
				
			
		?>
		<div class="absolute w-full h-full -mt-48 -z-1 hidden lg:block">
			<div class="flex justify-center">
				<div class="w-8/12">
					<img class="lazyload" alt="Line 2" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/lines-2.svg">
				</div>
			</div>
		</div>
		<?php 
			endif;

			if ( $i === 1 ) :
		?>
		<div class="absolute w-full h-full -mt-64 -z-1 hidden lg:block">
			<div class="flex justify-center">
				<div class="w-7/12">
					<img class="lazyload" alt="Line 3" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/lines-3.svg">
			
				</div>
			</div>
		</div>
		<?php

			endif;

			if ( $i === 2 ) :
				
		?>

		<div class="absolute w-full h-full -mt-64 -z-1 hidden lg:block">
			<div class="flex justify-center">
				<div class="w-7/12">
					<img class="lazyload" alt="Line 4" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/lines-4.svg">
			
				</div>
			</div>
		</div>
		
		<?php
			endif;
		?>

	</div>
</section>
<?php
		$i++;
		endwhile;

	else :
		$sections = array(
			array(
				'hash' => 'pricing',
				'title' => 'Instant Pricing',
				'para' => 'Waiting days to get a quote is a thing of the past. With Fictiv, you get pricing instantly, or within 1 hour for complex parts that require additional guided expertise. In addition to 3D CAD, we accept 2D drawings for tight tolerances and other specialized requirements.',
				'img' => 'platform-instant-pricing',
				'cta' => array(
					'text' => 'get instant quote',
					'link' => 'https://app.fictiv.com/signup'
				)
			),
			array(
				'hash' => 'feedback',
				'title' => 'Expert DFM Feedback',
				'para' => 'Every part uploaded to the platform receives expert design for manufacturability feedback—including instant, automated warnings, and customized recommendations from our manufacturing engineers, as needed.',
				'img' => 'platform-expert-dfm-feedback',
				'cta' => array(
					'text' => 'upload your designs',
					'link' => 'https://app.fictiv.com/signup'
				)
			),
			array(
				'hash' => 'transparency',
				'title' => 'On-Demand Production Transparency',
				'para' => 'Transparency doesn’t end after you place your order. Get real-time visibility into the production status of your parts, including photos of your parts at the manufacturing partner facility taken during inspection.',
				'img' => 'platform-on-demand-production-transparency',
				'cta' => array(
					'text' => 'get started',
					'link' => 'https://app.fictiv.com/signup'
				)
			),
			array(
				'hash' => 'all-your-data',
				'title' => 'All Your Data, In One Place',
				'para' => 'Easily find requested quality documentation, configuration details, DFM, design files, invoices, and inspection reports for all your previous orders.',
				'img' => 'platform-all-your-data',
				'cta' => array(
					'text' => 'create free account',
					'link' => 'https://app.fictiv.com/signup'
				)
			),
		);

		foreach ( $sections as $i => $section ) :
	
?>
<section class="py-20" id="<?php echo $section['hash']; ?>">
	<div class="container relative">
		<div class="flex flex-wrap flex-col-reverse <?php 
			
			if( $i % 2 !== 0 ) :
			
				echo 'lg:flex-row-reverse';
			
			else :
			
				echo 'lg:flex-row';

			endif;

		?> justify-center lg:justify-start items-center -mx-6">
			<div class="w-11/12 lg:w-6/12 px-6">
				<div class="mb-6">
					<h2 class="text-grey-700 font-museo-700 leading-tight text-20 md:text-29 mb-6">
						<?php 
							echo $section['title'];
						?>
					</h2>
				</div>
				<div class="mb-6">
					<p class="font-museo-500 text-grey-600">
						<?php 
							echo $section['para'];
						?>
					</p>
				</div>
				<div>
					<a class="btn btn-primary" href="<?php 
							echo $section['cta']['link'];
						?>"><?php 
							echo $section['cta']['text'];
						?></a>
				</div>
			</div>
			<div class="w-full lg:w-6/12 px-6 relative z-20">
				<img class="lazyload w-full" alt="Instant Pricing thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/<?php 
							echo $section['img'];
						?>.png">
				
			</div>
		</div>
		<?php 

			if ( $i === 0 ) :
				
			
		?>
		<div class="absolute w-full h-full -mt-48 -z-1 hidden lg:block">
			<div class="flex justify-center">
				<div class="w-8/12">
					<img class="lazyload" alt="Line 2" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/lines-2.svg">
				</div>
			</div>
		</div>
		<?php 
			endif;

			if ( $i === 1 ) :
		?>
		<div class="absolute w-full h-full -mt-64 -z-1 hidden lg:block">
			<div class="flex justify-center">
				<div class="w-7/12">
					<img class="lazyload" alt="Line 3" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/lines-3.svg">
			
				</div>
			</div>
		</div>
		<?php

			endif;

			if ( $i === 2 ) :
				
		?>

		<div class="absolute w-full h-full -mt-64 -z-1 hidden lg:block">
			<div class="flex justify-center">
				<div class="w-7/12">
					<img class="lazyload" alt="Line 4" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/lines-4.svg">
			
				</div>
			</div>
		</div>
		
		<?php
			endif;
		?>

	</div>
</section>

<?php 
	
		endforeach;
	endif;
?>

<?php
	get_footer();
?>