<?php /* Template Name: Thank you */ ?>
<?php 
	get_header();

	if ( have_posts() ) : 

    	while ( have_posts() ) : 
       		the_post();
	
?>
<section class="h-screen relative pt-32">
	<div class="absolute w-full h-full inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/thank-you-hero.png'; ?>)"></div>
	<div class="container h-full relative">
		<div class="flex justify-center ">
			<div class="w-11/12 lg:w-8/12">
				<div class="bg-white p-12 page-content shadow-lg">
					<?php 
						the_content();
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
		endwhile;
		wp_reset_postdata();
	endif;
	get_footer(); 
?>