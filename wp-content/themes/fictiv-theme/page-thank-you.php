<?php /* Template Name: Thank you */ ?>
<?php 
	get_header();
	// the_title();
?>
<section class="h-screen relative">
	<div class="absolute w-full h-full inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/thank-you-hero.png'; ?>)"></div>
	<div class="container h-full relative">
		<div class="flex items-center justify-center h-full">
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
	get_footer(); 
?>