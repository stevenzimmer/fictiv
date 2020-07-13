<?php 
global $wp_query;
get_header();

// var_dump( $wp_query->query,get_queried_object() ); die; 
?>
<header class="section relative">
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-6/12">
				<div class="text-center mb-4">
					<h1 class="text-blue-dark text-36 font-slab-500 uppercase">
						<?php post_type_archive_title(); ?>				
					</h1>
				</div>

				<div class="text-20 text-center">
					<?php 
						echo get_the_post_type_description();
					?>
				</div>
			</div>
		</div>
		
	</div>
</header>
<?php 
	if ( have_posts() ) :

?>
<section class="bg-grey-200 section">
	<div class="container">
		<div class="flex flex-wrap -mx-6">
			<?php 
				while ( have_posts() ) :
					the_post();
			?>
			<div class="lg:w-1/3 md:w-1/2 w-11/12 px-6">
				<div class="relative shadow hover:shadow-lg transition-shadow duration-200 ease-in-out rounded overflow-hidden group">
					<a href="<?php the_permalink(); ?>" class="absolute w-full h-full inset-0 z-50"></a>
					<div class="p-8 bg-white h-56">
						<h3 class="text-blue-light font-museo-500 mb-4 group-hover:text-red-dark transition-color duration-200 ease-in-out"><?php the_title() ?></h3>
						<div>
							<?php the_excerpt(); ?>
						</div>
					</div>
					<div>
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?> customer story thumbnail">
						<div class="absolute bottom-0 right-0 bg-teal-light py-2 px-4 rounded">
							<p class="text-white uppercase text-12 font-museo-500 leading-none">read full story</p>
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
	get_footer();
?>