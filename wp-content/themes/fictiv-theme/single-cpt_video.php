<?php 
get_header();

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        
        include( get_template_directory() . '/inc/post-topics.php');
        include( get_template_directory() . '/inc/hero-vars.php');

?>
<header class="relative pt-12 md:pt-24 pb-0">
	<div class="absolute w-full h-full bg-cover bg-center inset-0 lazyload"  data-bg="url(<?php echo $hero_graphic; ?>)"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-75"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-full lg:w-10/12">
				<div class="flex flex-wrap justify-center lg:justify-start -mx-4">
					<div class="w-11/12 lg:w-1/2 px-4 mb-6 lg:mb-0">
						<div class="pt-4 mb-2">
							<p class="text-white uppercase font-museo-700 text-grey-400 text-14">
								<?php 
									echo get_post_type_object( get_queried_object()->post_type )->labels->singular_name;
								?>
						
							</p>
						</div>
						<div >
							<h1 class="text-white font-museo-500 text-3 leading-tight"><?php echo $post_title; ?></h1>
						</div>
						<?php 
							if ( get_field('hero_subparagraph', $has_parent ) ) :					
						?>
						<div>
							<p class="text-white text-20">
								<?php 
									the_field('hero_subparagraph', $has_parent);
								?>
							</p>
						</div>
						<?php 
							endif;	
						?>
					
					</div>
					
					<div class="w-full lg:w-1/2 px-4 lg:h-64"></div>
					
				</div>
			</div>
		</div>
	</div>
</header>

<section class="py-10">
	<div class="container">
		<div class="flex justify-center flex-wrap">
			<div class="w-full lg:w-10/12">
				
				<div class="mb-6 px-5 lg:px-0">
					<?php 
						get_template_part('partials/single', 'breadcrumbs');
					?>
				</div>
				
			
				<div class="relative h-0 p-0 overflow-hidden mb-6" style="padding-top: 56.25%">
					<iframe class="w-full h-full absolute inset-0" src="https://www.youtube.com/embed/<?php echo get_field('youtube_id', $has_parent); ?>?rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			
				<div class="flex flex-wrap justify-center md:justify-start -mx-6">
				
					<div class="w-full lg:w-1/2 px-6">
						
						<div class="post-content">
							<?php 
								echo get_post_field('post_content', $has_parent);
							?>
						</div>
					</div>
					<div class="w-11/12 lg:w-1/2 px-6">
						<?php 
							if( have_rows('webinar_hosts', $has_parent) ):
						?>
						<div class="mb-2">
							<p class="text-white uppercase font-museo-700 text-grey-400 text-14">
								Hosted by
							</p>
						</div>
						<?php 

							    while( have_rows('webinar_hosts', $has_parent) ) : 
							    	the_row();
						?>
						<div class="flex flex-wrap mb-6 -mx-2">
							<div class="w-1/3 px-2 mb-2 lg:mb-0">
								<img class="lazyload" alt="<?php the_sub_field('webinar_host_name'); ?> headshot" data-src="<?php the_sub_field('webinar_host_headshot'); ?>">
							</div>
							<div class="w-full md:w-2/3 px-2">
								<p class="text-teal-light font-museo-500">
									<?php the_sub_field('webinar_host_name'); ?>
								</p>
								<p class="text-12 text-grey-600 font-museo-500 mb-4">
									<?php the_sub_field('webinar_host_title'); ?>
								</p>
								<p class="text-12 text-grey-600 font-museo-500">
									<?php the_sub_field('webinar_host_bio'); ?>
								</p>
							</div>
						</div>
						<?php 
							endwhile;
						endif;
						?>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</section>
<?php 

	if ( $has_parent ) :

		include( get_template_directory() . '/inc/related-posts.php');

	endif;

	if( get_field('mkto_form_id') ) :

?>
<script type="text/javascript">

</script>

 <?php

	endif;

	endwhile;
endif;
get_footer();
?>