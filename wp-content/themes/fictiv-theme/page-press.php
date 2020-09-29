<?php /* Template Name: Press */ ?>
<?php 
	get_header();
	// the_title();
?>
<header class="py-32 relative">
	<div class="absolute w-full h-full inset-0 bg-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
	<div class="absolute w-full h-full inset-0 opacity-50 bg-black"></div>
	<div class="container relative text-center">
		<h1 class="text-white font-museo-500 text-29 md:text-36"><?php the_title(); ?></h1>
	</div>
</header>
<section class="py-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-7/12">
				<div class="text-center">
					<div class="mb-4">
						<h3 class="text-grey-700 font-museo-500 text-20 md:text-29">
							About Fictiv
						</h3>
					</div>
					<div class="mb-4">
						<p class="md:text-20 font-museo-500 text-grey-600">
							At a time when manufacturing has become global but remains rooted in outdated, time and cost-intensive processes, Fictiv’s modern approach has proven to be a disruptive force in hardware manufacturing. Used by Silicon Valley innovators in electric and autonomous automobiles, medical robotics and consumer electronics, Fictiv has become a trusted partner to bring new products to market faster.
						</p>
					</div>
					<div class="mb-4">
						<a href="https://www.dropbox.com/sh/g830nmoumjtu1pl/AABtBA6rDHoIhosL3aar8uqKa?dl=0" class="btn btn-primary" download>download press kit</a>
					</div>
					<div class="flex justify-center">
						<div class="md:w-6/12">
							<p class="leading-tight">
								<small>
									If you are a member of the press and can’t find something you need—or want to speak with someone from Fictiv—please contact us at <a href="mailto:press@fictiv.com">press@fictiv.com</a>
								</small>
							</p>	
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-grey-100 py-20">
	<div class="container">
		<div class="flex flex-wrap -mx-6 justify-center lg:justify-start">
			<?php 
				$founders = array(
					array(
						'img' => '',
						'name' => 'Dave Evans',
						'title' => 'CEO, Co-Founder',
						'bio' => 'Prior to Fictiv, Dave was the first hire at Ford’s Silicon Valley Lab and focused on shortening development cycles for infotainment systems. He has a degree in Mechanical Engineering from Stanford University and was named on Forbes’ 30 Under 30 list.'
					),
					array(
						'img' => '',
						'name' => 'Nate Evans',
						'title' => 'CXO, Co-Founder',
						'bio' => 'Nate Evans is a designer, artist, and entrepreneur. As Co-Founder and Chief Experience Officer (CXO) at Fictiv he’s responsible for motivating and helping a talented team of creatives working to democratize manufacturing.'
					),
				);

				foreach ($founders as $i => $founder ) :
				
			?>
			<div class="w-11/12 lg:w-1/2 px-6 mb-12 lg:mb-0">
				<div class="flex justify-between flex-wrap">
					<div class="md:w-4/12">
						<img class="rounded-full" alt="<?php echo strtolower( $spec['text']) ?> icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/headshots/<?php echo str_replace(' ', '-', strtolower( $founder['name'] )); ?>-bw.jpg">
					</div>
					<div class="md:w-7/12">
						<div>
							<h3 class="text-blue-dark text-24 font-museo-700"><?php echo $founder['name']; ?></h3>
						</div>
						<div class="mb-4">
							<p class="text-grey-700 font-museo-500"><?php echo $founder['title']; ?></p>
						</div>
						<div class="">
							<p class="font-museo-500 text-grey-600"><?php echo $founder['bio']; ?></p>
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
if ( have_rows('featured_press') ) :
?>
<section class="py-20">
	<div class="container">
		<div class="text-center mb-12">
			<div>
				<h3 class="text-grey-700 font-museo-500 text-20 md:text-29">
					Featured Press
				</h3>
			</div>
		</div>
		<div class="flex -mx-6 flex-wrap justify-center md:justify-start">
			<?php 
					
				while( have_rows('featured_press') ) :
					the_row();
			?>
			
			<div class="w-11/12 md:w-6/12 lg:w-4/12 px-6 mb-6">
				<div class="h-16 ">
					<div class="flex items-center h-full justify-center">
						<img width="120" src="<?php 
							the_sub_field('featured_press_logo');
						?>" style="filter: grayscale(100%);">
					</div>		
				</div>

				<div  class="text-center mb-4">
					<p class="font-museo-500 text-grey-600">
						<?php the_sub_field('featured_press_snippet'); ?>
					</p>
				</div>
				
				<div class="text-center">
					<a href="<?php the_sub_field('featured_press_external_link'); ?>" class="text-teal-light font-museo-500">Read More</a>
				</div>
			</div>

			<?php
				endwhile;
			?>
		</div>
	</div>
</section>
<?php 
	endif;

	if ( have_rows('press_releases') ) :
?>
<section class="py-20">
	<div class="container">
		<div class="text-center mb-12">
			<h3 class="text-grey-700 font-museo-500 text-20 md:text-29">
				Latest Press Releases
			</h3>
		</div>
		<div class="flex justify-center lg:justify-start flex-wrap -mx-4">
			<?php 
				while ( have_rows('press_releases') ) :
					the_row();
			?>
			<div class="w-11/12 lg:w-1/3 px-4 mb-8">
				<div class="border border-grey-200 p-6 h-full">
					<div class="mb-4">
						<p class="uppercase text-grey-600 font-museo-500">
							<?php the_sub_field('press_release_date'); ?>
						</p>
					</div>
					<div class="mb-4">
						<p class="font-museo-700 text-grey-700">
							<?php the_sub_field('press_release_title'); ?>
						</p>
					</div>
					<div class="mb-4">
						<p class="text-grey-600 font-museo-500">
							<?php the_sub_field('press_release_paragraph'); ?>
						</p>
					</div>
					<div>
						<a class="text-teal-light hover:text-teal-dark font-museo-500" href="<?php the_sub_field('press_release_link'); ?>">Read More</a>
					</div>
				</div>
			</div>
			<?php 
				endwhile;
			?>
		</div>

	</div>
</section>
<?php
	endif;
	get_footer();
?>
