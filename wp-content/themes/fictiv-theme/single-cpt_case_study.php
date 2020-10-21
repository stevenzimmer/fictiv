<?php 
get_header();


if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();

        include( get_template_directory() . '/inc/post-topics.php');

        $args = array(
        	'bg' => get_the_post_thumbnail_url(),
        	'label' => get_post_type_object( get_queried_object()->post_type )->labels->singular_name,
        	'title' => get_the_excerpt(),
        	'post_type' => get_queried_object()->post_type,
        	'logo' => get_field( 'case_study_logo' ),
        	'download_link' => get_field('download_asset_link'),
        	'subparagraph' => get_field('hero_subparagraph', $has_parent),
        	'parent_id' => $has_parent
        );

        hero_section( $args );
?>

<section class="py-10">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-full md:w-11/12 lg:w-10/12">
				<div class="flex justify-between items-center mb-6">
					<div class=" w-full">
					<?php 
						get_template_part('partials/single', 'breadcrumbs');
					?>
					</div>
					<?php
						if ( get_field( 'download_asset_link' ) ) :
					
					?>
					<div class="">
						<a target="_blank" href="<?php the_field('download_asset_link'); ?>" class="btn btn-primary">download <?php 
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
		// include( get_template_directory() . '/inc/related-posts.php');
		$related_args = array(
			'posts_per_page' => 2,
		    'post_type' => get_queried_object()->post_type,
		    'post__not_in' => array( get_the_id(), wp_get_post_parent_id( get_the_id() )  ),
		    'post_parent' => 0
		);

		resources_module( $related_args );
									
	endwhile;

	wp_reset_postdata();
endif;

get_footer();
?>