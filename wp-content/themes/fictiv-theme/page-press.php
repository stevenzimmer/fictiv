<?php /* Template Name: Press */ ?>
<?php 
	get_header();
	// the_title();
	if ( have_posts() ) : 

	    while ( have_posts() ) : 
	        the_post();

?>
	<div class="post-content">
<?php
	        the_content();
?>
	</div>
<?php
	    
	    endwhile;
	endif;
 
if ( have_rows('featured_press') ) :
?>
<section class="py-20">
	<div class="container">
		<div class="text-center mb-12">
			<div>
				<h3 class="text-grey-700 font-museo-500 text-20 md:text-29">
					Featured Media Coverage
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
		<div class="flex justify-center lg:justify-start flex-wrap -mx-4 mb-12">
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
						<a target="_blank" class="text-teal-light hover:text-teal-dark font-museo-500" href="<?php the_sub_field('press_release_link'); ?>">Read More</a>
					</div>
				</div>
			</div>
			<?php 
				endwhile;
			?>
		</div>
		<div class="text-center">
			<a target="_blank" class="btn btn-primary" href="http://www.globenewswire.com/Search?organization=Fictiv">See all press releases</a>
		</div>

	</div>
</section>
<?php
	endif;
	get_footer();
?>
