<?php 
get_header();
// print_r( get_queried_object() );
// $post_taxonomies = get_object_taxonomies( get_queried_object()->post_type, 'objects' );

// print_r( $post_taxonomies );
if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        
        include( get_template_directory() . '/inc/post-topics.php');
        include( get_template_directory() . '/inc/hero-vars.php');

        $args = array(
        	'bg' => $hero_graphic,
        	'label' => $label_text . ' ' . get_post_type_object( get_queried_object()->post_type )->labels->singular_name,
        	'title' => $webinar_title,
        	'post_type' => get_queried_object()->post_type,
        	'subparagraph' => get_field('hero_subparagraph', $has_parent),
        	'form' => array(
        		'header' => $form_header_text,
        		'id' => get_field('mkto_form_id')
        	),
        	'webinar' => array(
        		'on_demand' => $on_demand,
        		'date' => $webinar_date,
        		'time' => $webinar_time,
        		'yt_id' => get_field( 'webinar_youtube_id', $has_parent )
        	),
        	'parent_id' => $has_parent

        );

        hero_section( $args );

?>


<section class="py-6 lg:py-10">
	<div class="container">
		<div class="flex justify-center flex-wrap">
			<div class="w-full lg:w-10/12 px-5 lg:px-0">
				<div class="mb-6 hidden md:block">
					<?php 
						get_template_part('partials/single', 'breadcrumbs');
					?>
				</div>
				
				<?php 
					if( $has_parent && $on_demand ) :
				?>
				<div class="relative h-0 p-0 overflow-hidden mb-6" style="padding-top: 56.25%">
					<iframe class="w-full h-full absolute inset-0" src="https://www.youtube.com/embed/<?php echo get_field('webinar_youtube_id', $has_parent); ?>?rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			
				<?php 
					endif;
				?>
				<div class="flex flex-wrap justify-center md:justify-start -mx-6 flex-col-reverse lg:flex-row">
				
					<div class="w-full lg:w-1/2 px-6">
						
						<div class="post-content resource">
							<?php 
								echo get_post_field('post_content', $has_parent);
							?>
						</div>
					</div>
					<div class="w-full lg:w-1/2 px-6">
						<?php 
							if( have_rows('webinar_hosts', $has_parent) ):
						?>
						<div class="mb-2">
							<p class="text-white uppercase font-museo-700 text-grey-400">
								Hosted by
							</p>
						</div>
						<?php 

							    while( have_rows('webinar_hosts', $has_parent) ) : 
							    	the_row();
						?>
						<div class="flex flex-wrap mb-6 -mx-2">
							<div class="w-1/3 px-2 mb-2 lg:mb-0">
								<img class="lazyload w-full" alt="<?php the_sub_field('webinar_host_name'); ?> headshot" data-src="<?php the_sub_field('webinar_host_headshot'); ?>">
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

	endwhile;
endif;
get_footer();
?>