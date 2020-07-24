<?php 
get_header();
// print_r( get_queried_object() );
// include( get_template_directory() . '/inc/post-taxonomies.php');

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();

        include( get_template_directory() . '/inc/post-topics.php');

?>
<header class="relative pt-24 pb-12">
	<div class="absolute w-full h-full bg-cover bg-center inset-0 lazyload"  data-bg="url(<?php the_post_thumbnail_url() ?>)"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-75"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-11/12 lg:w-10/12">
				<div class="flex flex-wrap">
					<div class="w-full lg:w-2/3 mb-6 lg:mb-0">
						<div>
							<p class="text-white uppercase font-museo-700 text-grey-400">
								<?php 
									echo get_post_type_object( get_queried_object()->post_type )->labels->singular_name;
								?>
						
							</p>
						</div>
						<div>
							<h1 class="text-white font-museo-500 leading-tight"><?php echo get_the_excerpt(); ?></h1>
						</div>
					</div>
					<?php 
						if ( get_field( 'case_study_logo' ) ) :
					?>
					<div class="w-1/3">
						<div class="flex lg:justify-end">
							<div class="w-full sm:w-7/12">
								<img class="lazyload" data-src="<?php the_field( 'case_study_logo' ); ?>">
							</div>
						</div>
						
					</div>
					<?php 
						endif;
					?>
				</div>
				
				
			</div>
		</div>
	</div>
</header>
<section class="py-10">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-full md:w-11/12 lg:w-10/12">
				<div class="flex justify-between items-center">
					<div class="mb-6 w-full">
					<?php 
						get_template_part('partials/single', 'breadcrumbs');
					?>
					</div>
					<?php
						if ( get_field( 'download_asset_link' ) ) :
					
					?>
					<div class="">
						<a href="<?php the_field('download_asset_link'); ?>" class="btn btn-primary">download <?php 
							echo get_post_type_object( get_queried_object()->post_type )->labels->singular_name;
						?></a>
					</div>
					<?php 
					
						endif;
					
					?>
				</div>
				
			</div>
		</div>

		<div class="flex justify-center">
			<div class="w-full md:w-11/12 lg:w-10/12 overflow-hidden">	
				<div class="post-content px-5 md:px-0">
					<?php 
						the_content();
					?>	
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	include( get_template_directory() . '/inc/related-posts.php');
	endwhile;
	wp_reset_postdata();
endif;

get_footer();
?>